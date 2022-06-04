<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PDO;
use Illuminate\Support\Facades\Auth;
class ReservationController extends Controller
{
     //dokonaj rezerwacji
     public function success(){
        return view('post.reservation');
     }
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
    public function showMyReservation(){

        $reservation = DB::select("select res.*, categories.name, posts.slug, posts.image from posts
        left join reservations as res ON res.travel_id = posts.id
        left join categories ON posts.category_id = categories.id
        where res.id_owner = ".Auth::id()."
        ");
      
        return view('post.myReservation', ['reservation' => $reservation] );
    }
 
}
