
 <?php 
                include "function.php";
                include "db.php";
          
                if (isset($_POST['delete'])) {
                    delete_table();
                    }

    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<center>
	<form action="28login_delete.php" method="post">
	           <h1>Delete User</h1>
		User-Name:<input type="text" name="username"><br>
		User-Password:<input type="password" name="password"><br>
        <select name="id" >
                
               <?php show_all_option(); ?>
            
        </select>
		<input type="submit" name="delete" value="Delete">
	</center>
	</form>



   
</body>
</html>