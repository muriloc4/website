<?php
if (is_numeric($_POST['ddd'])) {
    $ddd = intval($_POST['ddd']);
}
if (is_numeric($_POST['phone_number'])) {
    $phone_number = intval($_POST['phone_number']);
}


$phone_complete = "{$ddd}{$phone_number}";
echo $phone_complete;