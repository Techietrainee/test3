<?php
include('db.php');

// $sql = "CREATE TABLE users (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )";

// if ($con->query($sql) === TRUE) {
    // echo "Table MyGuests created successfully";
// } else {
    // echo "Error creating table: " . $con->error;
// }

 // $sql = "Insert Into users (firstname, lastname, email, reg_date,data) Values ('Taniya','Silhi','taniya.techturners@gmail.com', CURRENT_TIMESTAMP() ,'New User')";
 // if($con->query($sql) == TRUE){
	  // echo "Insterted Successfully";
	  // //echo 'The ID is: '.$con->insert_id;
 // }else{
	 // echo $con->error;
// }
 

// $sql = "Delete from users where id=2";
// if($con->query($sql) === TRUE){
	// echo "Deleted Successfully";
// }else{
	// echo $con->error;
// }

// $sql= "Update users set firstname='chetan' where id=3";
// if($con->query($sql) === TRUE){
	// echo"Update Successfully";
// }else{
	// echo $con->error;
// }

// $sql = "Alter TABLE users ADD data char(30)";
// if($con -> query($sql)){
	// echo "Altered Successfully";
// }else{
	// echo $con ->error;
// }


	
}
?>