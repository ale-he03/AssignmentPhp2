<!DOCTYPE html>
<html lang="en">

<head>
    <title>The unexpected Journal</title>
    <meta name="Author" content="Alejandra Hernandez">
    <meta name="Description" content="Assigment 2, Php">
    <link rel="shortcut icon" href="images/ojo.png" type="image/x-icon" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/Style.css" />

</head>

<body>
    <header>
        <h1>The Unexpcted Journal</h1>
        <h2>Let's Start</h2>
    </header>
    <main>
    <h3>Already Have an Account?<h3>
        <form id='form2' method="get" >
            <fieldset>
            <div>
                <label for="logemail">Email </label>
                <input type="text" id="logemail" name="logemail" required />
            </div>
            <div>
                    <label for="logpassword">Password</label>
                    <input type="password" id="logpassword" name="logpassword" maxlength="15" required=""/>
            </div>
            <input type="submit" name="submit" value="Submit">
        <form>
             <?php
                     require 'database.php';
						if(!empty($_GET)){
							$logemail = $_GET['logemail'];
                            $logpassword = $_GET['logpassword'];

                            $customersObj->login($logemail, $logpassword);
							
						}
					 
    // ?>
    <h3>Not have an account yet? </h3>
     <a href="add.php">Create a New Account</a>
    </main>
</body>
</html>