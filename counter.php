<?php
include("Database/DB_connet.php");
$user_ip =$_SERVER['REMOTE_ADDR'];
function ip_exist($ip){
	global $user_ip;
	 // start registration script 
	include("Database/DB_connet.php");
		  $sql_query ="SELECT ip FROM  hit_count WHERE ip='$user_ip'";
			 $q_result = $conn->query($sql_query);
             if($q_result->num_rows>=1) {
			 
				 return true;
				 
			 }else{
				 return false;
			 }
	
}
function ip_add($ip){
	include("Database/DB_connet.php");
	//insert ip and registration date
	$sql_hit="INSERT INTO hit_count(reg_date,ip) VALUES (CURRENT_DATE(),'$ip')";
	if($q_result_2 = $conn->query($sql_hit)){
		//sucess message
	}else {
		// not registered
	}
}
function update_count(){
    include("Database/DB_connet.php");
	$sql = "UPDATE user_counter SET ucount=ucount+1";
	if ($conn->query($sql) === TRUE) {
    
   } else {
    echo "Error updating record: " . $conn->error;
    }
	
}
if(!ip_exist($user_ip)){
	update_count();
	ip_add($user_ip);
}
?>