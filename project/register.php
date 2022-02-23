<body>
<?php require_once("header.php");?>
<?php 
//print_r($_REQUEST); 
print_r($e);

if(!empty($_FILES)){
$target_dir = "uploads/";
$user_id = 15; // assuming it will come from session
$imageFileType = strtolower(pathinfo($_FILES["bgfile"]["name"],PATHINFO_EXTENSION));
$target_file = $target_dir . "profile_" .$user_id. ".".$imageFileType;
$uploadOk = 1;


echo $target_file;
echo "<br>";
echo $imageFileType;
// Check if image file is a actual image or fake image
// Check if file already exists

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["bgfile"]["size"] > 5000000000){
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["bgfile"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["bgfile"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form method="POST" class="row g-3" enctype="multipart/form-data">
                        <h4>Welcome Guest</h4>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
        			<small id="passwordHelp" class="text-danger">
        			</small>      
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
        			<small id="passwordHelp" class="text-danger">
        			</small>      
                        </div>
                        <div class="col-12">
                            <label>Sex</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="usersex" id="flexRadioDefault1" value="Male">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="usersex" id="flexRadioDefault2"  value="Female">
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                  </label>
                                </div>
                    <small id="passwordHelp" class="text-danger">
                    </small>      
                        </div>
                        <div class="col-12">
                            <label>Hobbies</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Reading" id="flexCheckDefault" name="hobbies[]">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Reading
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="criket" id="flexCheckChecked" name="hobbies[]" >
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Cricket
                                  </label>
                                </div>
                    <small id="passwordHelp" class="text-danger">
                    </small>      
                        </div>
                        <div class="col-12">
                            <label>City</label>
                                <select multiple class="form-control" id="sel2" name="city">
                                    <option value="T">Thane</option>
                                    <option value="M">Mumbai</option>
                                    <option value="P">Pune</option>
                                </select>
                                <small id="passwordHelp" class="text-danger">
                                </small>      
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="customFile">Background Image</label>
                            <input type="file" class="form-control" id="bgfile" name="bgfile[]" multiple />     
                        </div>
                        <div class="col-12">
			    <a href="register.php" class="btn btn-primary" role="button">Sign Up</a>
                            <button type="submit" class="btn btn-dark float-end">Login</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
