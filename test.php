<?php

include('conn.php');


$sel= "SELECT * FROM activating_table ";
$run=mysqli_query($conn,$sel);
while($fetch=mysqli_fetch_array($run))
{
/*  $ac_date=$fetch['activating_Date'];
$e_date=$fetch['expiry_Date'];
$old=strtotime('$ac_date');
$new=strtotime('$e_date');
*/



}


$to_date=time();
$from_date= strtotime("2022-01-31");
$day_diff=$to_date - $from_date;
echo floor($day_diff/(60*60*24)) . "\n";





?>
<?php


$date = Date("M d,Y");
      $date=strtotime($date);

      $expiry_date = strtotime("+7 day", $date);
      $expiry_date= date('M d, Y', $expiry_date);
      $date=date('M d, Y', $date);

      echo $expiry_date ."<br>";
      echo $date ."<br>";
      echo $email ."<br>";


      /*
$ins="UPDATE activating_table SET activating_Date='$date',expiry_Date='$expiry_date'
     WHERE email='$email' AND package='basic'  ";
           $run=mysqli_query($conn,$ins);*/


?>




