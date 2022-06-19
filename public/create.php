<?php include "templates/header.php"; ?>
<h2>Add a user</h2>
<link rel="stylesheet" href="css/style.css" />
    <form method="post">
        <label for="firstname">First Name</label> <br>
    	<input type="text" name="firstname" id="firstname"> <br>
    	<label for="lastname">Last Name</label> <br>
    	<input type="text" name="lastname" id="lastname"> <br>
    	<label for="email">Email Address</label> <br>
    	<input type="text" name="email" id="email"> <br>
    	<label for="age">Age</label> <br>
    	<input type="text" name="age" id="age"> <br>
    	<label for="location">Location</label> <br>
    	<input type="text" name="location" id="location"> <br>
    	<br>
    	<input type="submit" name="submit" value="Submit"> <br>
    </form>
    
    <a href="index.php">Back to home</a>

    <?php include "templates/footer.php"; ?>