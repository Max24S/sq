<?php
if(!empty($_REQUEST['birthday'])){
    setcookie('birthday' , $_REQUEST['birthday'] , time() + 3600);
}

if(isset($_COOKIE['birthday'])){
  
   $date1 = date( $_COOKIE["birthday"], strtotime('+1 day') );
   $date2 = strtotime($_COOKIE['birthday']);
   
   echo date("m.d.Y" , $date1); 
   echo '<br>';
   echo date("m.d.Y" , $date2); 

   $res = floor(abs($date1 - $date2) / (60 * 60 * 24));
   
   $birthday =  'Днюшка через '.$res;
}

?>
<form action="" method="POST">
    <input type="date" name="birthday">
    <button>Запомнить днюху</button>
    <?php echo $res; ?>
</form>