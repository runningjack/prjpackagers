<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/1/16
 * Time: 8:49 AM
 */

namespace Amedora\NumbersToWords;


class MoneyToWords {
    private $units = ["one","two","three","four","five","six","seven","eight","nine","ten"];
    private $tens = ["ten","twenty","thirty","forty","fifty","sixty","seventy","eighty","ninety"];
    private $teens = ["ten","eleven","twelve","thirteen","fourteen","fifteen","sixteen","seventeen","eighteen","nineteen"];
    public static  $number= 0;
    private static $amtMajor;
    private static $amtMinor;


    public static function toWords($amount,$major,$minor){
        Self::$number = number_format($amount,2);
        list(Self::$amtMajor,Self::$amtMinor) = explode(".",$amount);
        $amtGroup = Self::$amtMajor;
        $amtTrailing = Self::$amtMinor;

        if($amtGroup != 0 ){
            $numberGroups = explode(",",$amtGroup);
        }

    }
} 