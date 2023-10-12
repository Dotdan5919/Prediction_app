<?php


include("conn.php");







if(isset($_POST['login']))

{


  $package= $_POST['package'];
  if($package=="basic")
  {

$email=$_POST['email'];
$password=$_POST['password'];

    $sel="SELECT * FROM client_basic WHERE email='$email' AND password='$password'";
    $run= mysqli_query($conn,$sel);
    $num_rows=mysqli_num_rows($run);
    if($num_rows<1){

      //echo $email;
     // echo "<br>";
      //echo $password;

       header("location:login.php?login=incorrect details");



    }
    else{


        session_start();

        $_SESSION["email_basic"] = $email;
        $fetch=mysqli_fetch_assoc($run); 
        $_SESSION["full_name"]=$fetch['first_Name']."  " .$fetch['last_Name'];// i was here
       $_SESSION['active']=$fetch['active'];
        $active=$fetch['active'];
        
        If($active==0){


        //  echo "I no dey active";
        header("location:basic.php?welcome=inactive");
        }
        else{    
        header("location:basic.php?welcome=active");
        
 // echo "I dey active";

        }

    }




    



  }
elseif($package=="premium")
{



  $email=$_POST['email'];
  $password=$_POST['password'];
  
      $sel="SELECT * FROM client_premium WHERE email='$email' AND password='$password'";
      $run= mysqli_query($conn,$sel);
      $num_rows=mysqli_num_rows($run);
      if($num_rows<1){
  
        //echo $email;
       // echo "<br>";
        //echo $password;
  
         header("location:login.php?login=incorrect details");
  
  
  
      }
      else{
  
  
          session_start();
  
          $_SESSION["email_premium"] = $email;
          $fetch= mysqli_fetch_assoc($run); 
          $_SESSION["full_Name"]=$fetch['first_Name']."  " .$fetch['last_Name'];// i was here
         $_SESSION['active']=$fetch['active'];
          $active=$fetch['active'];
          
          If($active==0){
  
  
          //  echo "I no dey active";
          header("location:premium.php?welcome=inactive");
          }
          else{    
          header("location:premium.php?welcome=active");
          
   // echo "I dey active";
  
          }
  
      }
  
  
  
  
  






}










}









$sel="SELECT * FROM client_basic WHERE email='ichristboy@gmail.com' ";
$run= mysqli_query($conn,$sel);
$num_rows=mysqli_num_rows($run);
$fetch=mysqli_fetch_assoc($run);

$first_name=$fetch['first_Name'];
echo $first_name;
















include("close_conn.php");


?>
