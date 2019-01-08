<?php 
    	
    	if (isset($_POST['submit'])) {
    		# code...
    		$array=["shashi","harshi","sharath","sharathM"];
    		$username=$_POST['u_name'];
    		$userpass=$_POST['u_pass'];

    		if (strlen($userpass)< 5) {
    			# code...
    			echo "Your pass too short<br>";

    		}if (strlen($userpass)> 10) {
    			# code...
    			echo "Your pass too langer<br>";

    		}
    		if (!in_array($username, $array)) {
    			# code...
    			echo "we donot see in the list<br>";

    		}
    		else{
    			echo "welcome<br>";
    		}

    		// echo "You name->".$username."<br>";
    		// echo "Your password->".$userpass."<br>";
    	}
			    
    
    
    
    ?>