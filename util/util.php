<?php

abstract class util{

    public static function decode($value, $standard_text):string{
        
        if ( empty($value) ){
            return $standard_text;
        }
        return $value;
    }
}
