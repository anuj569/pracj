<?php require_once("header.php");?>
<body>
<?php
//print "<PRE>";
//print_r($_SERVER);
if(!empty($_REQUEST)){
    //$is_valid_user =  validate_user($_REQUEST);
    $is_valid_user = true;
    if($is_valid_user){
    setcookie('username', $_REQUEST['username'], time() + 90, "/"); // 86400 = 1 day
    header('location: welcome.php');
    }
    else{
        $error['username'] = "wrong username";
        $error['password'] = "wrong password";
    }

}
?>    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form method="POST" class="row g-3">
                        <h4>Welcome Guest</h4>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php if(!empty($_REQUEST['username'])) echo $_REQUEST['username'];?>">
        			<small id="passwordHelp" class="text-danger">
                        <?php if(!empty($error['username'])) echo $error['username'];?>
        			</small>      
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
        			<small id="passwordHelp" class="text-danger">
                        <?php if(!empty($error['password'])) echo $error['password'];?>   
        			</small>      
                        </div>
                        <div class="col-12">
			    <button type="reset" class="btn bg-secondary">Reset</a>
                            <button type="submit" class="btn btn-primary float-end">Login</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                            If you don't have account, then click below
                            <a href="register.php" class="btn btn-dark" role="button">Sign Up</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
