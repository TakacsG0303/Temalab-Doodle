<?php
$name=$_POST["Nev"];
NameValidator($name);

function NameValidator($data)
{
    if (preg_match("/^([A-ZÁÉÚŐÓÜÖÍ]([a-záéúőóüöí.]+\s?)){2,}$/", $data)) {
        echo "A név jó";
    }
    else if(empty($data)){
        echo "Kérlek írd be a neved!";
    }
    else {
        echo 'A név nem jó';
    }
}

function EmailValidator($data){

}