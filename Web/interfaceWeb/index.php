<?php
   $request = $_SERVER['HTTP_USER_AGENT'];
   
   $so = "Windows";

   $sistema = strpos($request, $so);
   
   if($sistema == ""){
       echo 'Não é Windows';
       header('Location: http://localhost/interfaceMobile');    
   } else{
       header('Location: http://localhost/api/indexW.html');
       echo 'É Windows';  
   }
   // echo $request;

?>