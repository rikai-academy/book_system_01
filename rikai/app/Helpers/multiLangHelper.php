<?php

function langCurency($quantity , $price)
{
    if(session('language')=='vi') {
        return $quantity*$price*22000;
    }
    return $quantity*$price;
}

function langTotalCurency($price)
{
    if(session('language')=='vi') {
        return $price*22000;
    }
    return $price;
}

function langTypeOfCurency() {
    if(session('language')=='vi') {
        return ' vnd';
    }
    return ' $';
}

function langTime($data)
{
    if (session('language')=='vi') {
        $time = date('d/m/Y ', strtotime($data)) . __('message.at') . date(' H:i A ', strtotime($data));
        return $time;
    }
    $time = date('M d/Y ', strtotime($data)) . __('message.at') . date(' H:i A ', strtotime($data));
    return $time;
}

