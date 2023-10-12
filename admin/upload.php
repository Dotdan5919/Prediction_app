<?php                      

include('conn.php');

if (isset($_POST['upload_basic'])){
  


  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
     // echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "<h1>not an image </h1><script> alert(' not an Image')  </script>";
      $uploadOk = 0;
      header("location:index.php?upload=FIle not and image");
    }
  }
  
  // Check if file already exists
  if (file_exists($target_file)) {
    echo " <h1>already exist</h1> <script> alert('already exist')  </script>";
    $uploadOk = 0;
    header("location:index.php?upload=Already exist");
  }
  
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 900000) {
    echo "<h1>too Large</h1><script> alert('too Large')  </script>";
    $uploadOk = 0;
    header("location:index.php?upload=File too Large");
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "<h1>wrong format</h1> <script> alert('wrong format')  </script>";
    $uploadOk = 0;
    header("location:index.php?upload=Wrong format");
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "<h1> Sorry,File was not uploaded</h1> <script> alert('Sorry, your file was not uploaded.')  </script>";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      


      $name= $_POST['name'];
$filename= basename($_FILES["fileToUpload"]["name"]);
$date=Date("d-M-Y");
$insert="INSERT INTO basic_post(Name, File_Name, _Date) VALUES 
        ('$name','$filename','$date')";
$run=mysqli_query($conn,$insert);

    
      header("location:index.php?upload=Uploaded Successfully");
    } else {
      echo "<h1> error</h1> <script> alert(Error )  </script>";
  
      header("location:index.php?upload=Error");
    }
  }
  
  
  


}

else if (isset($_POST['upload_premium'])){
  


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "<h1>not an image </h1><script> alert(' not an Image')  </script>";
        $uploadOk = 0;
        header("location:index.php?upload=FIle not and image");
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo " <h1>already exist</h1> <script> alert('already exist')  </script>";
      $uploadOk = 0;
      header("location:index.php?upload=Already exist");
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 900000) {
      echo "<h1>too Large</h1><script> alert('too Large')  </script>";
      $uploadOk = 0;
      header("location:index.php?upload=File too Large");
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "<h1>wrong format</h1> <script> alert('wrong format')  </script>";
      $uploadOk = 0;
      header("location:index.php?upload=Wrong format");
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "<h1> Sorry,File was not uploaded</h1> <script> alert('Sorry, your file was not uploaded.')  </script>";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
  
  
        $name= $_POST['name'];
  $filename= basename($_FILES["fileToUpload"]["name"]);
  $date=Date("d-M-Y");
  $insert="INSERT INTO premium_post(Name, File_Name, _Date) VALUES 
          ('$name','$filename','$date')";
  $run=mysqli_query($conn,$insert);
  
      
        header("location:index.php?upload=Uploaded Successfully");
      } else {
        echo "<h1> error</h1> <script> alert(Error )  </script>";
    
        header("location:index.php?upload=Error");
      }
    }
    
    
    
  
  
  }



  else if (isset($_POST['upload_previous'])){
  


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "<h1>not an image </h1><script> alert(' not an Image')  </script>";
        $uploadOk = 0;
        header("location:index.php?upload=FIle not and image");
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo " <h1>already exist</h1> <script> alert('already exist')  </script>";
      $uploadOk = 0;
      header("location:index.php?upload=Already exist");
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 900000) {
      echo "<h1>too Large</h1><script> alert('too Large')  </script>";
      $uploadOk = 0;
      header("location:index.php?upload=File too Large");
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "<h1>wrong format</h1> <script> alert('wrong format')  </script>";
      $uploadOk = 0;
      header("location:index.php?upload=Wrong format");
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "<h1> Sorry,File was not uploaded</h1> <script> alert('Sorry, your file was not uploaded.')  </script>";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
  
  
        $name= $_POST['name'];
  $filename= basename($_FILES["fileToUpload"]["name"]);
  $date=Date("d-M-Y");
  $insert="INSERT INTO previous_post(Name, File_Name, _Date) VALUES 
          ('$name','$filename','$date')";
  $run=mysqli_query($conn,$insert);
  
      
        header("location:index.php?upload=Uploaded Successfully");
      } else {
        echo "<h1> error</h1> <script> alert(Error )  </script>";
    
        header("location:index.php?upload=Error");
      }
    }
    
    
    
  
  
  }





 else
{



  // header("location:index.php");
}


 /*
else{

 $d1 = new DateTime("2018-01-10 00:00:00");
$d2 = new DateTime("2019-05-18 01:23:45");
$interval = $d1->diff($d2);
$diffInSeconds = $interval->s; //45.
$diffInMinutes = $interval->i; //23.
$diffInHours = $interval->h; //8.
$diffInDays = $interval->d; //21.

$d1 = new DateTime("");

//echo $interval->d;
$datetime = new DateTime();

//var_dump($datetime);

$datetime->setDate(2021,10,10);
echo $datetime->d;

}
*/
/*$date = Date("M d,Y");
$date = strtotime($date); 
$date = strtotime("+7 day", $date);
echo date('M d, Y', $date);
*/


?>