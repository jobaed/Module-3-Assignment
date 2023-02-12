<?php

// Reusable Function For Event And Odd Number Check;
function event_odd($n){
    if($n % 2 == 0){
        return "{$n} is an Event Number";
    }else{
        return "{$n} is an Odd Number";
    }
}