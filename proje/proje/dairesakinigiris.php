
<!DOCTYPE html>
<html>
    <style>
        .buttonn {
        border: 0;
        line-height: 2.5;
        padding: 0 20px;
        font-size: 1rem;
        text-align: center;
        color: #fff;
        text-shadow: 1px 1px 1px #000;
        border-radius: 10px;
        background-color: rgb(31, 69, 238);
        background-image: linear-gradient(to top left,
                                          rgba(0, 0, 0, .2),
                                          rgba(0, 0, 0, .2) 30%,
                                          rgba(0, 0, 0, 0));
        box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                    inset -2px -2px 3px rgba(0, 0, 0, .6);
    }
    

    
    .buttonn:active {
        box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                    inset 2px 2px 3px rgba(0, 0, 0, .6);
    }
    .css-input {
     padding: 6px;
     font-size: 26px;
     border-width: 10px;
     border-color: #d9d9d9;
     background-color: #ffffff;
     color: #020202;
     border-style: outset;
     border-radius: 50px;
     box-shadow: -19px 0px 30px rgba(66,66,66,.70);
     text-shadow: 0px 0px 4px rgba(66,66,66,.75);
}
 .css-input:focus {
     outline:none;
}
#demoFont {
font-family: Georgia, serif;
font-size: 18px;
letter-spacing: -1.4px;
word-spacing: 6px;
color: #400202;
font-weight: 400;
text-decoration: none solid rgb(68, 68, 68);
font-style: normal;
font-variant: small-caps;
text-transform: uppercase;
}
button {
			color: #ffffff;
			background-color: #2d63c8;
			font-size: 21px;
			padding: 5px 50px;
			cursor: pointer
		}
		button:hover {
			color: #000000;
			background-color: #dae901;
		}
    </style>
<body>
  <center><img src="skyscraper.png" width="300px"></center>
  <br>
   <center> <a href="giris.php">
    <button class="buttonn"
    type="button">
Geri Dön

</button></a> <br> <br>
    
      <button class="buttonn"
                type="button">
            Daire Sakini Paneli
            
        </button></a> <br></center>
       
<center> <br>
<form action="/action_page.php">
  <div id="demoFont">Kullanıcı Adı ;</div> <br>
  <input type="text" class="css-input" /><br>
  <div id="demoFont">Şifre ;</div> <br>
  <input type="password" class="css-input" /> <br>
  <br>
  <a href="dairesakinianasayfa.php"> <button type="button" name="Giriş">Giriş Yap</button> </a>
</form>
</center>
<p></p>

</body>
</html>

<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'g1r1s');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['kullanici_adi']);
  $password = mysqli_real_escape_string($db, $_POST['kullanici_sifre']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM dairesakini WHERE kullanici_adi='$username' OR kullanici_sifre='$password' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['kullanici_adi'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (kullanici_adi, kullanici_sifre) 
  			  VALUES('$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['kullanici_adi'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: dairesakinigiris.php');
  }

