<?php
function imgSrc($data)
{
    $imgsrc = $data["user"]->image ? asset('storage/image/' . $data["user"]->image) : 'images/uploads/user-img.png';
    return $imgsrc;
}
