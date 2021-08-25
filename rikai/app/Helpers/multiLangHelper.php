<?php

function langCurency($quantity , $price , $lang)
{
    if($lang=='vi') {
        return $quantity*$price*22000;
    }
    return $quantity*$price;
}

function langTypeOfCurency($lang) {
    if($lang=='vi') {
        return ' vnd';
    }
    return ' $';
}

function langTime($data,$lang)
{
    if ($lang=='vi') {
        $time = date('d/m/Y ', strtotime($data)) . __('message.at') . date(' H:i A ', strtotime($data));
        return $time;
    }
    $time = date('M d/Y ', strtotime($data)) . __('message.at') . date(' H:i A ', strtotime($data));
    return $time;
}

