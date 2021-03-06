<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annulation extends Model
{
    use HasFactory;
    public static function getInfo($token){
        $result = DB::select('select email from reservation where  token = :token', ['token' => $token]);
        return $result;
    }
    public static function verifToken($token){
        $result = DB::select('select * from reservation where  token = :token', ['token' => $token]);
        return $result;
    }
    public static function supReservation($token){
        $result =  DB::table('reservation')->where('token', '=', $token)->delete();
        //$results = DB::delete('delete from reservations where  token = :token', ['token' => $token]);
        return $result;
    }
}
