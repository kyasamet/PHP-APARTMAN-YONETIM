<?php      
    include('baglan.php');  
    $username = $_POST[''];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($baglanti, $username);  
        $password = mysqli_real_escape_string($baglanti, $password);  
      
        $sql = "select *from dairesakini where kullanici_adi = '$username' and kullanici_sifre = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  
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
    
    .buttonn:hover {
        background-color: rgba(255, 0, 0, 1);
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
   <center> <a href="yoneticigiris.php">
    
    
      <button class="buttonn"
                type="button">
            Yönetici Paneli
            
        </button></a> <br></center>
       
<center> <br>
<form action="/action_page.php">
  <div id="demoFont">Kullanıcı Adı ;</div> <br>
  <input type="text" id="username" name0="username" class="css-input" /><br>
  <div id="demoFont">Şifre ;</div> <br>
  <input type="password"id="password" name0="password" class="css-input" /> <br>
  <br>
  <a href="yoneticianasayfa.php"> <button type="button" name="Giriş">Giriş Yap</button> </a>
</form>
</center>
<p></p>

</body>
</html>
