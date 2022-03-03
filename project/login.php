<?php require_once("header.php");?>
<body>
<?php
if(!empty($_REQUEST)){
    $error = array();

    $error = basic_validation_user_password();

    if(empty($error)){
        $login_status = db_validation_user_password($conn);
        if($login_status['status']){
            $_SESSION['name'] = $login_status['user_data']['fname'];
            $_SESSION['id'] = $login_status['user_data']['cust_id'];
            $_SESSION['city'] = $login_status['user_data']['city'];
            $_SESSION['ltname'] = $login_status['user_data']['ltname'];
            header("location: home.php");
            exit;
        }
        else{
            write_error_log("db_validation_user_password failed::{$_REQUEST['username']} :: {$_REQUEST['password']}");    
            $error['username'] = "Username is wrong";                
            $error['password'] = "Password is wrong";
        }
    }
    else{
        write_error_log("basic_validation_user_password failed::{$_REQUEST['username']} :: {$_REQUEST['password']}");
    }
}
?>    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form method="POST" class="row g-3">
                        <h4>Welcome Guest</h4>
                        <small id="passwordHelp" class="text-danger">
                        <?php if(!empty($error['header'])) echo $error['header'];?> 
                        </small>
                        <div class="col-12">
                            <label>Username*</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php if(!empty($_REQUEST['username'])) echo $_REQUEST['username'];?>">
        			<small id="passwordHelp" class="text-danger">
                        <?php if(!empty($error['username'])) echo $error['username'];?>
        			</small>      
                        </div>
                        <div class="col-12">
                            <label>Password*</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" >
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
