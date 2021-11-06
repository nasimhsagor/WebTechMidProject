 <?php 
 session_start();
 $_COOKIE['flag']=0; 
 setcookie('flag',1,time()-10,'/');
 header('Location:../views/Login.html');
 ?> 