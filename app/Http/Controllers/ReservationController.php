<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
     //dokonaj rezerwacji
     public function saveReservation(Request $request)
     {
         $data = $request->validate([
             'reservation_start' => 'required',
             'travel_time' => 'required',
         ]);
       
         if($data){
            $id = auth()->user()->id;
            if(!$id)
                return Response::json('zaloguj sie aby dokonać rezerwajic');

            $reservation = Reservation::insert(
                [
                    'reservation_start' => $data['reservation_start'],
                    'travel_time' => $data['travel_time'],
                    'id_owner' => $id,
                    'travel_id' => $_POST['travel_id']
                ]
                );
                if($reservation)
                    $ret = "Rezerwacja została dokonana";
                else
                $ret = "Przepraszmy, wystąpił błąd";
            }else
            return Response::json('Proszę wybrać termin');
            
         return Response::json($reservation);
     }
}
