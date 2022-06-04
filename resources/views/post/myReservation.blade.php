@include('partials.header')
@include('partials.nav')

<div class="my_reservation my_reservation_image">
    <table>  
        <th>Rezerwacja od</th>
        <th>Czas trwania</th>
        <th>Miejsce</th>
        <th></th>
        <th>Link</th>
    @foreach($reservation as $row)
    <tr>
        <td>
         {{$row['reservation_start']}}
        </td>
        <td>
         {{$row['travel_time']}}
        </td>
        <td>
         {{$row['name']}}
        </td>
        <td>
            <img src="{{asset('/storage/'.$row['image'])}}" width="100">
        </td>
        <td>
        <a href="/news/{{ $row['slug'] }}">Przejdź</a>
        </td>
    </tr>
    @endforeach
    </table>
</div>
@include('partials.footer')