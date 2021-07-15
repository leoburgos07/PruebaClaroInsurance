<?php
namespace app\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class GeneralHelper{

   public static function calculaedad($fechanacimiento){
        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        
        $ano_diferencia  = date("Y") - $ano;
        
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($mes_diferencia <= 0){
           if($dia_diferencia < 0)
           $ano_diferencia--;
        }
          
        return $ano_diferencia;
      }

      public static function getLocation($city_id){
        $location = DB::table('cities')
        ->join('countries', 'countries.id','cities.country_id')
        ->select('cities.name as ciudad','countries.name as pais')
        ->where('cities.id', $city_id)->first();
        if(!$location){
            return;
        }
        return $location;
      }
}