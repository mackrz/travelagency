// Rezerwacja
$(document).ready(function(){

    $("#reservation_start").datepicker({
        dateFormat: 'yy-mm-dd',
    });

   var form = '#add-reservation';

    $(form).on('submit', function(event){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        event.preventDefault();

        var url = $(this).attr('data-action');

        $.ajax({
            url: url,
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
                $(form).trigger("reset");
                if(response == true)
                    window.location.replace("http://127.0.0.1:8000/successReservation");
                else
                    alert('Przepraszamy wystąpił błąd')
            },
            error: function(response) {
                alert('Przepraszamy wystąpił błąd!')
            }
        });
    });

});
