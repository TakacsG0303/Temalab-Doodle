<?php
$name=$_POST["Nev"];
$regex=new Regex();
$regex->name_regex($name);

class Regex
{
    public function email_regex($e){

    }
    public function name_regex($n){
        if (preg_match("/^([A-ZÁÉÚŐÓÜÖÍ]([a-záéúőóüöí.]+\s?)){2,}$/", $n)) {
            echo "A név jó";
        }
        else if(empty($data)){
            echo "Kérlek írd be a neved!";
        }
        else {
            echo 'A név nem jó';
        }

    }

}

