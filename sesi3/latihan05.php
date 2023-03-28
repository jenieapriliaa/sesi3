<?php
   //model 1
/*
   $age= array("peter"=> "35" ,"ben"=> "37" ,"joe"=> "43");

   header("content-type: application/json");
   echo json_encode($age);
 */
   //model 2

    $age["jeni"] = "18";
    $age["dina"] = "18";
    $age["ayu"] = "18";
    $age["sintha"] = "20";

   header("content-type: application/json");
   echo json_encode($age);