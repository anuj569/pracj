<?php require_once("header.php");?>
<body>
<?php
//print "<PRE>";
//print_r($_SERVER);
if(!empty($_REQUEST)){
     //print "<PRE>";
    //print_r($_REQUEST);
    //exit;
    $error = array();
    if(!empty($_REQUEST['username'])){
        if(strlen($_REQUEST['username']) <=4){
            $error['username'] = "Username can not be less than 4";               
        }
    }
    else{
        $error['username'] = "Username can not be blank";               
    }

    if(!empty($_REQUEST['password'])){
        if(strlen($_REQUEST['password']) <=5){
            $error['password'] = "Password can not be less than 5";               
        }
    }
    else{
        $error['password'] = "Password can not be blank";               
    }
    print_r($error);
    if(empty($error)){
        $encoded_pwd = md5($_REQUEST['password']);
        //$login = validate_login($_REQUEST['username'],$_REQUEST['password']);
        $query = "select * from customer WHERE fname='{$_REQUEST['username']}' AND password = '$encoded_pwd'";
        //echo $query;exit;
        
        $result = mysqli_query($conn, $query);
        if($result){
            //echo "here1";
            if(mysqli_num_rows($result) == 1){
                //echo "here2";
                $user_data = mysqli_fetch_assoc($result);
                //print_r($user_data);exit;
                $login = true;
            }
            else{
                //echo "here3";
                $login = false;    
            }
        }
        else{
            //echo "here4";
            $login = false;    
        }

        //$login = true;
        if($login){
            //set the session
            $_SESSION['name'] = $user_data['fname'];
            $_SESSION['id'] = $user_data['cust_id'];
            $_SESSION['city'] = $user_data['city'];
            $_SESSION['ltname'] = $user_data['ltname'];
            header("location: home.php");
            exit;
        }
        else{
            $error['username'] = "Username is wrong";                
            $error['password'] = "Password is wrong";
        }
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
