<?php

function search ($search) {

   $array = [12,45,23,25,35,26,56,24];

   for ($i=0; $i<sizeof ($array);$i++)
   {
       if($array[$i]==$search){
           echo "Number" . $search. "was found in the array";
           return 0;
       }
   } 

   echo "Number" . $search. "was not found in the array";
}

search (25);

?>