<?php 
 function conn()
 {
   return mysqli_connect('localhost','root','','simakademik');
 }
 function base_url($url=null)
 {
   $base = "http://localhost/simakademik/"; 
   if ($url) {
     return $base.$url;
   }
   return $base;
 }
