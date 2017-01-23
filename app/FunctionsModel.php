<?php

namespace Consultations;

use Illuminate\Database\Eloquent\Model;

class FunctionsModel extends Model
{
    public static function ageCalc($date)
    {
        $day=date('j');
        $month=date('n');
        $year=date('Y');
        $date = str_replace("-", "/", $date);
        $datetok = explode("/", $date);
        $birth_day = $datetok[0];
        $birth_month = $datetok[1];
        $birth_year = $datetok[2];
        if (($birth_month == $month) && ($birth_day > $day)) {
            $year=($year-1);
        }
        //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
        if ($birth_month > $month) {
            $year=($year-1);
        }
        //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
        $age=($year-$birth_year);
        return $age;
    }
    public static function imcCalc($weight, $size) {
		$imc = 0;
		$imc = $weight/(($size/100)*($size/100));
		
		return number_format($imc,2);
	}
    public static function fppCalc($date)
    {
        $fecha = new \DateTime($date);
        $fecha->add(new \DateInterval('P7D'));
        $fecha->sub(new \DateInterval('P3M'));
        $fecha->add(new \DateInterval('P1Y'));
        $date = $fecha->format('d/m/Y');
        return $date;
    }
    public static function fppSemCalc($date)
    {
        $date = str_replace("-", "/", $date);
        $datetok = explode("/", $date);
        $birth_day = $datetok[0];
        $birth_month = $datetok[1];
        $birth_year = $datetok[2];
        $day=date('j');
        $month=date('n');
        $year=date('Y');
        $datetime1 = new \DateTime($birth_year.'-'.$birth_month.'-'.$birth_day);
        $datetime2 = new \DateTime($year.'-'.$month.'-'.$day);
        $interval = $datetime1->diff($datetime2);
        $weeks = floor(($interval->format('%a') / 7)) . ' sem '
             . ($interval->format('%a') % 7) . ' días';
        return $weeks;
    }
}
