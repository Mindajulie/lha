<?php

try{

$bdd = new PDO ("mysql: host=localhost; dbname=db_lha", 'root', '');
} catch (\Exception $e){
    //echo $e->getMessage();
echo 'Error when connected to the database';

}



