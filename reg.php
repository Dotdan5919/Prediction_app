<?php
include("conn.php");

if(isset($_POST['signup_basic']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$active=0;
$package="basic";


$sel="SELECT * FROM client_basic WHERE email='$email' ";
$run=mysqli_query($conn,$sel);
$num=mysqli_num_rows($run);
if($num>0){

header("Location:registration.php?signup=rejected"); //if you  are already login you are redirected back to reg


}
else{

 $insert= "INSERT INTO client_basic(first_Name, last_Name, email, password, active,package) 
            VALUES ('$first_name','$last_name','$email','$password','$active','$package') ";


 if (mysqli_query($conn, $insert)) {


  header("location:login.php?reg=justregistered");

   // mail("dighodaro95@gmail.com","joy","hi");
    

  } else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conn);
  }
  
/*
if($conn->query($insert) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $insert. " . $conn->error;
}
*/
//$conn->query($insert); 

}
}

  

elseif(isset($_POST['signup_premium']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$active=0;
$package="premium";


$sel="SELECT * FROM client_premium WHERE email='$email' ";
$run=mysqli_query($conn,$sel);
$num=mysqli_num_rows($run);
if($num>0){

    header("Location:premium_registration.php?signup=rejected"); //if you  are already login you are redirected back to reg


}
else{

 $insert= "INSERT INTO client_premium(first_Name, last_Name, email, password, active,package) 
            VALUES ('$first_name','$last_name','$email','$password','$active','$package') ";


 if (mysqli_query($conn, $insert)) {

header("location:login.php?reg=justregistered");

   // mail("dighodaro95@gmail.com","joy","hi");
  

  } else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conn);
  }
  
/*
if($conn->query($insert) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $insert. " . $conn->error;
}
*/
//$conn->query($insert); 






}
}
else{




header("Location:index.php");


}

















include("close_conn.php");

?>

