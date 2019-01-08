<?php 
	include "db.php";

	function show_all_option() {

			global $connection;

                $query = "SELECT *FROM user";

                $result= mysqli_query($connection,$query);
                
                if (!$result) {
                    #  code...
                    die('Query Failed'. mysqli_error());
                }

                    while ($row = mysqli_fetch_assoc($result)) {
                        # code...
                        $id = $row['id'];

                        echo "<option value='$id'>$id</option>";

                    }
    }

    function update_table(){

                    global $connection;
                    # code...
                    $user_name = $_POST['username'];
                    $user_password = $_POST['password'];
                    $id = $_POST['id'];


                    $query  = "update user set ";
                    $query .= "u_name = '$user_name' , ";
                    $query .= "u_pass = '$user_password' ";
                    $query .= "where id = '$id' "; 

                    $result = mysqli_query($connection, $query);
                    if (!$result) {
                        # code...
                        die("query failed ".mysqli_error($connection));
                    
                    }

                }
                function delete_table(){

                    global $connection;
                    # code...
                    $user_name = $_POST['username'];
                    $user_password = $_POST['password'];
                    $id = $_POST['id'];


                    $query  = "delete from user ";
                    $query .= "where id = '$id' "; 

                    $result = mysqli_query($connection, $query);
                    if (!$result) {
                        # code...
                        die("query failed ".mysqli_error($connection));
                    
                    }

                }
?>