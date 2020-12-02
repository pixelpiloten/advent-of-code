<?php
$file = fopen("input.txt","r");
$raw_password_array = [];
while(! feof($file))  {
    $result = fgets($file);
    $raw_password_array[] = trim($result);
}
fclose($file);

$passwords = [];

foreach($raw_password_array as $key => $password) {
    $password_pieces = explode(" ", $password);
    $char_min = explode("-", $password_pieces[0])[0];
    $char_max = explode("-", $password_pieces[0])[1];
    $char = str_replace(":", "", $password_pieces[1]);
    $actual_password = $password_pieces[2];
    $passwords[$key]["char_min"] = $char_min;
    $passwords[$key]["char_max"] = $char_max;
    $passwords[$key]["char"] = $char;
    $passwords[$key]["password"] = $actual_password;
}

$valid_passwords = [];

foreach($passwords as $key => $password) {
    $count_char_in_password = substr_count($password["password"], $password["char"]);
    if($count_char_in_password >= $password["char_min"] && $count_char_in_password <= $password["char_max"]) {
        $valid_passwords[] = $password["password"];
    }
}

print count($valid_passwords);