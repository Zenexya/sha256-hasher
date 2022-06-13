<?php
// Disable warnings
error_reporting(1);
$definput = $_GET["data"];

// Encrypt function
function encrypt($data){
    $encrypted = hash("sha256",$data);
    return $encrypted;
}

// Global page
if(!$definput){
    echo "Please enter valid data to hash";
}
else{
    $hashed = encrypt($definput);
    echo $hashed;
}
?>