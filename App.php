<?php
$name=$_POST["Nev"];
$email=$_POST["Email"];
$regex=new Regex();
$regex->name_regex($name);
$regex->email_regex($email);
class Regex
{
    public function email_regex($e){
        if(filter_var($e, FILTER_VALIDATE_EMAIL)) {
            //Valid email!
            echo "Az e-mail jó";
        }
        else if(empty($n)){
            echo "Kérlek írd be az e-mail címet";
        }
        else{
            echo "Az e-mail nem jó";
        }

    }
    public function name_regex($n){
        if (preg_match("/^([A-ZÁÉÚŐÓÜÖÍ]([a-záéúőóüöí.]+\s?)){2,}$/", $n)) {
            echo "A név jó";
        }
        else if(empty($n)){
            echo "Kérlek írd be a neved!";
        }
        else {
            echo 'A név nem jó';
        }

    }

}

