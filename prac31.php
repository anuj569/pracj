<html>
<body>
<?php
print "<PRE>";
print_r($_REQUEST);
print_r($_FILES);
if(isset($_FILES['fileToUpload'])){
    $errors= array();
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size =$_FILES['fileToUpload']['size'];
    $file_tmp =$_FILES['fileToUpload']['tmp_name'];
    $file_type=$_FILES['fileToUpload']['type'];
    $file_upload_error=$_FILES['fileToUpload']['error'];
    $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
    $extensions= array("jpeg","jpg","png");
    echo "##$file_ext##";
    if($file_upload_error != 0){
        $errors[]="There is some issue in upload."; 
    }
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       if(move_uploaded_file($file_tmp,"uploads/".$file_name)){
            echo "Your file uploaded Successfully"; 
       }
       else{
            echo "copy failed";
       }
    }
    else{
       print_r($errors);
    }
 }
?>
<form method="post" enctype="multipart/form-data">
First name:<input type="text" id="fname" name="fname" ><br><br>
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <BR><BR>
  <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>