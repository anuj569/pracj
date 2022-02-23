<?php
$conn = mysqli_connect("localhost","root","Admin@123","practice");
$emp_id = $_GET['id'];
$out = array();
if(!empty($emp_id) && $emp_id > 0){
        $query = "select * from employee_new wHERE id = $emp_id";
        $result = mysqli_query($conn, $query);
        if($result){
            if(mysqli_num_rows($result) == 1){
                $user_data = mysqli_fetch_assoc($result);
                //print_r($user_data);exit;
                $out['message'] = "Data fetched successfully";
                $out['status'] = "Success";
                $out['data'] =  $user_data; 
            }
            else{
                $out['message'] = "ID $emp_id is not present";
                $out['status'] = "Failed";
            }
        }
        else{
            $out['message'] = "Something went wrong";
            $out['status'] = "Failed";
            }
}
else{
  $out['message'] = "Id is not valid";
  $out['status'] = "Failed";
}
//print_r($out);
$str = json_encode($out);
print $str;
?>