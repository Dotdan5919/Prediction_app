
<?php 

include('conn.php');



if(isset($_POST['delete']))
{




    if(isset($_POST['delete']))

    {
    
      $name=$_POST['filename'];
      $package=$_POST['package'];
    
      if($package=='basic'){
      $del=" DELETE FROM basic_post WHERE File_Name='$name'";
      $run=mysqli_query($conn,$del);
      $file_to_delete = "uploads/$name";
      unlink($file_to_delete);
      
      $del="DELETE FROM home_games WHERE file_name='$name'";
      $run=mysqli_query($conn,$del);
      

       header("location:index.php");


    }

    else if($package=='premium')

    {
        //$name=$_POST['name'];

        $del=" DELETE FROM premium_post WHERE File_Name='$name'";
        $run=mysqli_query($conn,$del);
        $file_to_delete = "uploads/$name";
        unlink($file_to_delete);

        $del="DELETE FROM home_games WHERE  file_name='$name'";
        $run=mysqli_query($conn,$del);
       header("location:index.php");
//        echo" delete premium ";

    }

    else if($package=='previous')

    {
        
      //  $name=$_POST['name'];

        $del=" DELETE FROM previous_post WHERE File_Name='$name'";
        $run=mysqli_query($conn,$del);
        $file_to_delete = "uploads/$name";
        unlink($file_to_delete);

        $del="DELETE FROM home_games WHERE  file_name='$name'";
        $run=mysqli_query($conn,$del);
       header("location:index.php");
//        echo" delete premium ";

    }
  
    
    
      
    
    
    }
    
    

}



else if(isset($_POST['delete_home_games']))
{

$filename=$_POST['file_name'];
$name=$_POST['name'];
$del="DELETE FROM home_games WHERE Name='$name' AND file_name='$filename'";
$run=mysqli_query($conn,$del);//
 header("location:index.php");
//echo" delete homepage ";

    

}


else{


    header("location:index.php");



}






/*
// Declare two dates
$start_date = strtotime("2018-06-08");
$end_date = strtotime("2018-09-19");

// Get the difference and divide into
// total no. seconds 60/60/24 to get
// number of days
echo "Difference between two dates: "
	. ($end_date - $start_date)/60/60/24;

*/

?>