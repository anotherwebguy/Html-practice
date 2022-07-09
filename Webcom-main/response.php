<?php

$data= $_GET['datavalue'];

$a = array('Select City','Pune','Mumbai','Satara','Kolhapur','Palghar','Nashik','Thane');
$b = array('Select City','Agra','Aligarh', 'Gorakhpur','Jhansi','Kanpur','Mirzapur');
$c = array('Select City','Aurangabad','Bhojpur','Patna', 'Siwan','Supaul','Vaishali');
$d = array('Select City','Ahmedabad','Anand','Kutch', 'Surat','Surendranagar','Vadodara'); 
$e = array('Select City','Central Delhi','North Delhi','South Delhi', 'North West Delhi','North East Delhi');
if($data=="UP"){
    foreach($b as $bone){
        echo "<option> $bone </option>";
    }
}
if($data=="Gujarat"){
    foreach($d as $done){
        echo "<option> $done </option>";
    }
}
if($data=="Delhi"){
    foreach($e as $eone){
        echo "<option> $eone </option>";
    }
}
if($data=="Bihar"){
    foreach($c as $cone){
        echo "<option> $cone </option>";
    }
}


if($data=="Maharashtra"){
    foreach($a as $aone){
        echo "<option> $aone </option>";
    }
}
