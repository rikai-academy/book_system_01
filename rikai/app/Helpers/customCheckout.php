<?php
function customCheckout($data)
{
    if ($data->status == "shopping") {
        return '<a href="' . url('checkout') .'"><b>'. __('message.Checkout') .'</b></a>';
    }
    elseif ($data->status == "pending") {
        return '<a href="'.url('cancel/'.$data->id).'"><b>'.__('message.CancelRequest') .'</b></a>';
    }
    elseif ($data->status == "cancel") {
        return '<p class="fail"><b>'.__('message.RequestIsCancel').'</b></p>';
    }
    elseif ($data->status == "done") {
        return '<p class="success"><b>'.__('message.RequestIsDone').'</b></p>';
    }
}