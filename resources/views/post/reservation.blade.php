@include('partials.header')
@include('partials.nav')
<div class="res_reservation">
    <h1>Rezerwacja zakończona pomyślnie</h1>
    <div class="content_res">
        <img src = "{{asset('/storage/res_reservation.jpg')}}">
        <p>Dziękujemy za skorzystanie z naszych usług. Szczegóły o rezerwacji możesz znaleźć w swoim koncie.<br>
        Życzymy udanej podróży.
        </p>
    </div>
</div>
@include('partials.footer')