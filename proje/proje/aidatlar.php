<?php
include("baglan.php");

$kaydet = "SELECT * FROM aidatekle";
$kaydet = $baglanti->query($kaydet);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="logom.css">
    <link rel="stylesheet" type="text/css" href="aidatlar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">



    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Aidatlar</title>

</head>
<style>
  .column p {
font-size : 25px;
}
        @import url('https://fonts.googleapis.com/css?family=Amatic+SC');
    *{
        margin:0px;
        padding:0px;
        box-sizing: border-box;

    }

    .column {
  float: left;
  width: 33%;
  padding: 10px;
  height: 415px; 
  text-align: center;
  border: 4px solid brown;
}
.column h2 {
  border: 5px solid rgb(0, 0, 0);
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
  
  .buttonsite {
    --x: 50%;
    --y: 50%;
    
    position: relative;
    appearance: none;
    padding: 1em 2em;
    color: white;
    cursor: pointer;
    outline: none;
    border-radius: 100px;

    border: 2px solid transparent;
    background: linear-gradient(#000, #000) padding-box, radial-gradient(farthest-corner at var(--x) var(--y), #00C9A7, #845EC2) border-box;
  }

  .buttonsite p{
    font-size: 20px;
    color: rgb(243, 172, 20);
  }
    .head{
        width:100%;
        padding:10px 20px;
        background-color:rgb(255, 255, 255);
        height: 100%;
       
    }

    .head > ul{
        list-style-type: none;
        list-style-type: none;
    text-align: end;
    display: inline-block;
    width: calc(100% - 36px);
    height: 100%;

    } 
    .head > ul li{
        display: inline-block;
        margin: 5px;
        height: 100%;

     
    }

    .head > ul li a{
        text-decoration: none;
        height: 100%;
       
    }

    .sidebar-menu{
      margin-top:25px;
      height: 100%;
    

    }
    .sidebar-menu > ul {
    list-style-type: none;
    margin: auto;
    width: 240px;
    height: 100%;
    }

    .sidebar-menu > ul li {
        
        height: 190px;
    border: 3px solid rgb(29, 6, 6);
    margin: 1.5px;
width: 220px;
    display: flex;
    align-items: center;
    justify-content: center;

        
    }
    .sidebar-menu > ul li a {
       color:rgb(231, 8, 8);
       text-decoration: none;
       font-size: 30px;

    }
    .head .logo {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 75px;
    color: rgb(0, 0, 0);
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
    margin-top: 1%;
    -webkit-text-stroke: 1px black;
    color: orange;
    text-shadow: 6px 5px 0 rgb(210, 210, 211), -1px -1px 0 rgb(227, 227, 230), 5px -1px 0 rgb(255, 255, 255), -1px 1px 0 rgb(243, 243, 243), 5px 5 rgb(255, 255, 255), 77;
    }
    .yonetim {
font-size:35px;
border: 3px solid rgb(0, 0, 0);


    }
    .apartmanadi {
        border:3px solid rgb(29, 6, 6);
        text-align: center;
        font-size: 22px;
    }
.yonetim :hover {
    color:rgb(219, 16, 16);
}
.yonetici {
    border:3px solid rgb(29, 6, 6);
        text-align: center;
        font-size: 22px;
}

.panel {
    text-align: center;
    font-family: 'Odibee Sans', cursive;
    font-size: 66px;
        display: block;
    text-shadow: 2px red;
    text-decoration: none;
    }
    .grid-container {
  display: grid;
  grid-template-columns: auto auto;
  background-color: #2196F3;
  padding: 2px 2px;
  right: 300px;

}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
  height: 500px;
  width: 100%;
  margin-right: 1px;

}

.grid-item #renk {
    padding-left: 33px;
    text-align: right;
}



    
    .button_container {
margin-right: 30px;
  left: 0;
  right: 12%;
  top: 5%;
}
.button_container_duyuru {
    margin-right: 30px;
  left: 54px;
  right: 12%;
  top: 5%;
}
.description, .link {
  font-family: 'Amatic SC', cursive;
  text-align: center;
}

.description {
	font-size: 35px;
}

.btn {
  border: none;
  display: block;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
  outline: none;
  overflow: hidden;
  position: relative;
  color: #fff;
  font-weight: 700;
  font-size: 15px;
  background-color: rgb(0, 0, 0);
  padding: 17px 60px;
  margin: 0 auto;
  box-shadow: 0 5px 15px rgba(0,0,0,0.20);
}
.btnduyuru {
  border: none;
  display: block;
  text-align: center;
  cursor: pointer;
  text-transform: uppercase;
  outline: none;
  overflow: hidden;
  position: relative;
  color: #fff;
  font-weight: 700;
  font-size: 15px;
  background-color: rgb(0, 0, 0);
  padding: 17px 60px;
  margin: 3px 5px;
  top: 90px;
  left: 90px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.20);
}


.btn span {
  position: relative; 
  z-index: 1;
}
.btnduyuru span {
  position: relative; 
  z-index: 1;
}
.btn:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 490%;
  width: 140%;
  background: #114bec;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
  transform: translateX(-98%) translateY(-25%) rotate(45deg);
}
.btnduyuru:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 490%;
  width: 140%;
  background: #114bec;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
  transform: translateX(-98%) translateY(-25%) rotate(45deg);
}
.btn:hover:after {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);
}
.btnduyuru:hover:after {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
  transform: translateX(-9%) translateY(-25%) rotate(45deg);
}
.link {
  font-size: 20px;
  margin-top: 30px;
}

.link a {
  color: #000;
  font-size: 25px; 
}


.link {
  font-size: 20px;
  margin-top: 30px;
}

.link a {
  color: #000;
  font-size: 25px; 
}

div.flash {
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    color: #ffffff;
    align-items: right;
    display: flex;
    color: black;
    height: 70px;
    justify-content: right;
    overflow: hidden;
    position: absolute;
    margin-top:5%;
    left: 0.1%;
    right: 2.5%;
}
div.flash .duyurubaslik {
  font-size: 35px;
  font-family: 'Lobster', cursive;
  top: -50px;
  margin-top: 5px;
  margin-left: 100px;
  border: 4px solid rgba(250, 0, 0, 0.8);


}

div.kayanyazi {
    display: inline-flex;
    flex-wrap: wrap;
    width: 80%;
    height: 90%;
    margin: 25px 17px;
    color: white;
}

div.baslik {
    width: 1%;
    left: 4%;
    top: 13%;
    text-transform: lowercase;
    overflow: unset;
    text-align: right;
    position: absolute;
}

div.haberler {
    width: 100%;
    height: 30%;
    color: white;
}

.baslik:after {
    position: absolute;
    content: "";
    right: -16%;
    border-left: 25px solid black;
    border-top: 30px solid transparent;
    border-right: 1px solid transparent;
    border-bottom: 30px solid transparent;
    top: -70%;
}

.haberler marquee {
    font-size: 140%;
    color: brown;
}


.haberler marquee a:hover {
    color: rgb(14, 4, 99);
}


</style>

<header>
    <nav class="head">
        <a href="yoneticianasayfa.php"><div class="logo">APARTMAN TAK??P S??STEM??</div> </a>
        <div class="panel">Y??NET??C?? PANEL??</div>
        <div class="logom"><img src="logo.png"></div>
        <div class="logom2"><img src="logo2.png"></div>
        <ul>
      <!--      <li>
                <div class="yonetim"><a href="">Y??netim</a></div>-->
            </li>
            <li>
                <button class="buttonsite"><b><p>Site Ad?? :</p></b> <h4>Ege ??niversitesi Apartman??</h4></button>
                <button class="buttonsite"><b><p>Y??netici :</p></b><h4> Sadettin Tantan</h4></button>
            </li>
        </ul>
    </nav>
    </header>
    
    <main>
        <div style="display:flex;">
            <div style="background-color: orange; width: 25%; height: 1000px; ">
    
                <nav class="sidebar-menu">
                <ul>
    
                  <li><img src="idea.png" width="30px"><a href="yoneticianasayfa.php">Anasayfa</a></li>
                  <li><img src="salary.png" width="30px"><a href="aidatlar.php">Aidatlar</a></li>

    
                  <li><img src="survey.png" width="30px"><a href="anketler.php">Anketler</a></li>
                  <li><img src="car.png" width="30px"><a href="araclar.php">Ara??lar</a></li>
                  <li><img src="duyuru.png" width="30px"><a href="duyurular.php">Duyurular</a></li>
                </ul>  
            </nav>
    
            </div>
            <div style="background-color:rgb(223, 223, 223); width:100%; height:1000px;">
              <center><h3>-A??DATLAR-</h3></center>
              <div class="row">
               <div class="column" style="background-color:rgb(144, 156, 196);">
                 <h2>DA??RE 1</h2><p><br>
                 <?php
if($kaydet->num_rows>0) {
  
 while ($satir = $kaydet->fetch_assoc()){
   echo "Daire No ".$satir["daire_no"]."<br>";
   echo "Aidat Miktar?? : ".$satir["miktar"]."<br>";
   echo "Tarih : ".$satir["tarih"]."<br>";
break;
 }

}
?>
</p>
               </div>
               <div class="column" style="background-color:rgb(144, 156, 196);">
                 <h2>DA??RE 2</h2><p><br>
                 <?php
if($kaydet->num_rows>0) {
  
 while ($satir = $kaydet->fetch_assoc()){
   echo "Daire No ".$satir["daire_no"]."<br>";
   echo "Aidat Miktar?? : ".$satir["miktar"]."<br>";
   echo "Tarih : ".$satir["tarih"]."<br>";
break;
 }

}
?>
</p>
               </div>
               <div class="column" style="background-color:rgb(144, 156, 196);">
                 <h2>DA??RE 3</h2><br>
                 <p>
                 <?php
if($kaydet->num_rows>0) {
  
 while ($satir = $kaydet->fetch_assoc()){
   echo "Daire No ".$satir["daire_no"]."<br>";
   echo "Aidat Miktar?? : ".$satir["miktar"]."<br>";
   echo "Tarih : ".$satir["tarih"]."<br>";
break;
 }

}
?>
</p>
               </div>
               <div class="column" style="background-color:rgb(144, 156, 196);">
                 <h2>DA??RE 4</h2><br>
                 <p>
                 <?php
if($kaydet->num_rows>0) {
  
 while ($satir = $kaydet->fetch_assoc()){
   echo "Daire No ".$satir["daire_no"]."<br>";
   echo "Aidat Miktar?? : ".$satir["miktar"]."<br>";
   echo "Tarih : ".$satir["tarih"]."<br>";
break;
 }

}
?>
</p>
               </div>
               <div class="column" style="background-color:rgb(144, 156, 196);">
                 <h2>DA??RE 5</h2><br>
                 <p>
                 <?php
if($kaydet->num_rows>0) {
  
 while ($satir = $kaydet->fetch_assoc()){
   echo "Daire No ".$satir["daire_no"]."<br>";
   echo "Aidat Miktar?? : ".$satir["miktar"]."<br>";
   echo "Tarih : ".$satir["tarih"]."<br>";
break;
 }

}
?>
</p>
               </div>
               <div class="column" style="background-color:rgb(144, 156, 196);">
                 <h2>DA??RE 6</h2><br>
                 <p>
                 <?php
if($kaydet->num_rows>0) {
  
 while ($satir = $kaydet->fetch_assoc()){
   echo "Daire No ".$satir["daire_no"]."<br>";
   echo "Aidat Miktar?? : ".$satir["miktar"]."<br>";
   echo "Tarih : ".$satir["tarih"]."<br>";
break;
 }

}
?>
</p>
               </div>

              
             </div>
            </div>
    
        </div>
    
    </main>
<body>
    <div class="flash">


        <div class="kayanyazi">
            <div class="baslik">
                <h4></h4>
            </div>
            <div class="haberler">
                <marquee width="99%" direction="left" id="deneme" scrollamount="18">
    
                    <p>
                        <a href="duyurular.php" style="text-decoration: none;">Duyuru1</a> ||
                        <a href="duyurular.php" style="text-decoration: none;">Duyuru2</a> ||
                        <a href="duyurular.php" style="text-decoration: none;">Duyuru3</a> ||
                        <a href="duyurular.php" style="text-decoration: none;">Duyuru4</a> ||
                        <a href="duyurular.php" style="text-decoration: none;">Duyuru5</a> ||
                        <a href="duyurular.php" style="text-decoration: none;">Duyuru6</a> ||
    
                    </p>
    
    
                </marquee>
            </div>
    
        </div>
    
    
    </div>
    <div class="button_container">
      <p class="description"></p>
      <a href="duyurular.php">    <button class="btnduyuru"><span>DUYURULAR</span></button>
      </a>
    </div>
</body>
</html>