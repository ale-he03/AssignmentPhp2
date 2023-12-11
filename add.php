<!DOCTYPE html>
<html lang="en">

<head>
    <title>The unexpected Journal | create</title>
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
    <br>
    <main>
        <!-- her it stats to save and get the info provided by the user -->
        <form id="order_info" method="POST">
            <!-- Interests List -->
                <h3>Step 1: Select Your interests</h3>
            <section>
                <label for="interest" name="interest">choose your first toping</label>
                <select id="interest" name="interest" required>
                     <option value="Science">Science</option>
                    <option value="Movies and Shows">Movies and Shows</option>
                    <option value="Art">Art</option>
                    <option value="Music">Music</option>
                    <option value="Literature">Literature</option>
                    <option value="Politics">Politics</option>
                    <option value="Philosophy">Philosophy</option>
                    <option value="Food">Food</option>
                    <option value="History">History</option>
                    <option value="Cartoon and Animation">Cartoon and Animation</option>
                    <option value="Technology">Technology</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Economics">Econimics</option>
                </select>
            </section>
            <br>
            <br>
            <br>
            <!-- personal info:name, adress, phone etc -->

            <h3>Step 2: Create Account</h3>

            <fieldset>
                <legend>Personal Information</legend>

                <section>
                <div>
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" required size="25" maxlength="255"
                        placeholder="First Name" required=""/>
                </div>
                <div>
                    <label for="lname" name="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" required size="25" maxlength="255"
                        placeholder="Last Name" required=""/>
                </div>

                <div>
                    <label for="email">Email </label>
                    <input type="text" id="email" name="email" required="" />
                </div>
                <div>
                    <label for="phone_num">Phone</label>
                    <input type="tel" id="phone_num" name="phone_num" maxlength="10" required=""/>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" maxlength="15" required=""/>
                </div>
                <!-- <div>
                    <label for="pp">Profile picture</label>
                    <p><input type='file' name='files[]' required=""/></p>
                </div> -->
            </section>
            </fieldset>
            <input type="submit" name="submit" value="Submit">
            <button type="reset">reset</button>
        </form>
         <?php
					 	// include_once ('validate.php');
                        require 'database.php';
                        // create our class objects
                        // $valid = new validate();
						
						if(!empty($_POST)){
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$email = $_POST['email'];
                            $phoneNum = $_POST['phone_num'];
                            $password = $_POST['password'];
                            $interest = $_POST['interest'];

                            $customersObj->insertData($fname, $lname, $email, $phoneNum, $password, $interest);
							
						}
    // ?>
        <br>
        <br>
        <h3>Already Have an Account?<h3>
         <a href="index.php">Log In HERE</a>
        <br>
        <br>
    </main>
    <footer>
        <p>*****************************************************</p>
        <nav>
            <!-- link to privacy policy page -->
            <a href="php/privacypol.php" title="read our private policy">Privacy Policy and Terms and Conditions</a>|
        </nav>
        <p><small>The unexpected Journal.</small></p>
        <p><small>©Unexpected Journal</small></p>
    </footer>

<div class="form-group submit-message">
   
    //  <!-- <?php 
    // if($uploadSuccess){
    //   echo "<p>File upload successfully</p>"; 
    // }
    // if(!$valid_file){
    //   echo "<p>Upload image files only</p>";
    // }?> 
</div>
</section>
</main>
</body>

</html>