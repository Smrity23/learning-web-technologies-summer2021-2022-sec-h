<?php

function getAllUser(){

   $conn=getconnection();
   $sql="select * from users";
   $result=mysqli_query($conn,$sql);
   $count=mysqli_num_rows($result);

   if($cout > 0) {

    while($data = mysqli_fetch_assoc($result)){
       print_r($data);
       echo "<br>";


    }


   }else {

    echo 'No Data Found!!!'

}

}