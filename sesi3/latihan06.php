<?php
   $mhs = array(
    array("ayu", "2201010433", "tabanan"),
    array("dina","2201010678", "sading"),
    array("sintha","2201010655", "gianyar"),
    array("eka","2201010778","karangasem"),
   );
   
   header("content-type: application/json");
   echo json_encode($mhs);