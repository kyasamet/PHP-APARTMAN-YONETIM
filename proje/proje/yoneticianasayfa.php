<?php
include("baglan.php");

$aidat = "SELECT * FROM aidatekle";
$kaydet = $baglanti->query($aidat);

$bul = "SELECT * FROM duyuruekle";
$kayit = $baglanti->query($bul);


$bul = "SELECT * FROM aracekle";
$arac = $baglanti->query($bul);

$bul = "SELECT * FROM dairesakini";
$daireekle = $baglanti->query($bul);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="yoneticianasayfa.css">
    <link rel="stylesheet" type="text/css" href="logom.css">
    <link rel="stylesheet" type="text/css" href="aidatlar.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Yönetici Ana Sayfa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Odibee+Sans&display=swap" rel="stylesheet">
</head>
<style>
 .column p {
font-size : 19px;
}
.column2 p {
font-size : 19px;
}

.columnarac p {
font-size : 9px;
}
</style>

<header>

<nav class="head">

    <a href="#"><div class="logo">APARTMAN TAKİP SİSTEMİ</div> </a>


 <div class="panel">YÖNETİCİ PANELİ</div>     
 <div class="logom"><img src="logo.png"></div>
 <div class="logom2"><img src="logo2.png"></div>
    <ul>
  <!--      <li>
            <div class="yonetim"><a href="">Yönetim</a></div>-->
        </li>
        <li>
          <button class="buttonsite"><b><p>Site Adı :</p></b> <h4>Ege Üniversitesi Apartmanı</h4></button>
          <button class="buttonsite"><b><p>Yönetici :</p></b><h4> Sadettin Tantan</h4></button>
        <!--<div class="apartmanadi"><a href="">Site Adı: </a></div>
            Ege Üniversitesi Apartmanı 
        
                
        </li>
       
        <li>
           <div class="yonetici"> <a href="">Yönetici: </a></div>
           Kemalettin Tuğcu
        </li>
          -->    
    </ul>
</nav>
</header>

<main>
    <div style="display:flex;">
        <div style="background-color: orange; width: 25%; height: 1700px; ">

            <nav class="sidebar-menu">
            <ul>

              <li><img src="idea.png" width="30px"><a href="yoneticianasayfa.php">Anasayfa</a></li>
              <li><img src="salary.png" width="30px"><a href="aidatlar.php">Aidatlar</a></li>


              <li><img src="survey.png" width="30px"><a href="anketler.php">Anketler</a></li>
              <li><img src="car.png" width="30px"><a href="araclar.php">Araçlar</a></li>
              <li><img src="duyuru.png" width="30px"><a href="duyurular.php">Duyurular</a></li>
            </ul>  
        </nav>

        </div>
        <div style="background-color:rgb(223, 223, 223); width:100%; height:1000px;"><br>
  <br>              <center><h3>---DAİRE SAKİNLERİ---</h3></center>
  <div class="rowsakin"> <BR> <br>



    <div class="button_container">
      <p class="description"></p>
      <a href="dairesakiniekle.php">
      <button class="btnekle" style="margin-left:500px ;"><span>Daire Sakini Ekle</span></button>
    </a> </div>
    <div class="button_container">
      <p class="description"></p>
      <a href="dairesakinisil.php">
      <button class="btnsil" style="margin-left:800px ; margin-top: -85px;"><span>Daire Sakini Sil</span></button>
    </a> </div>

    <div class="columnsakin1" style="background-color:rgb(144, 156, 196);margin-left: 150px;">
      <h4>DAİRE 1</h4>
      <p><?php
if($daireekle->num_rows>0) {
  
 while ($satir = $daireekle->fetch_assoc()){
   echo "Daire No: ".$satir["id"]."<br>";
   echo "".$satir["kullanici_adi"]."<br>";


   break;
 }

}
?></p>
    </div>
    <div class="columnsakin1" style="background-color:rgb(144, 156, 196);margin-left: 150px;">
      <h4>DAİRE2</h4>
      <p><?php
if($daireekle->num_rows>0) {
  
 while ($satir = $daireekle->fetch_assoc()){
   echo "Daire No: ".$satir["id"]."<br>";
   echo "".$satir["kullanici_adi"]."<br>";


   break;
 }

}
?></p>
    </div>
    <div class="columnsakin1" style="background-color:rgb(144, 156, 196);margin-left: 150px;">
      <h4>DAİRE3</h4>
      <p> <?php
if($daireekle->num_rows>0) {
  
 while ($satir = $daireekle->fetch_assoc()){
   echo "Daire No: ".$satir["id"]."<br>";
   echo "".$satir["kullanici_adi"]."<br>";


   break;
 }

}
?></p>
    </div>
    <div class="columnsakin2" style="background-color:rgb(144, 156, 196); position:absolute; width: 230px; margin-top: -450px;margin-left: 400px;">
      <h4>DAİRE4</h4>
      <p><?php
if($daireekle->num_rows>0) {
  
 while ($satir = $daireekle->fetch_assoc()){
   echo "Daire No: ".$satir["id"]."<br>";
   echo "".$satir["kullanici_adi"]."<br>";


   break;
 }

}
?></p>
    </div>
    <div class="columnsakin2" style="background-color:rgb(144, 156, 196); position:absolute; width: 230px;margin-top: -300px;margin-left: 400px;">
      <h4>DAİRE5</h4>
      <p><?php
if($daireekle->num_rows>0) {
  
 while ($satir = $daireekle->fetch_assoc()){
   echo "Daire No: ".$satir["id"]."<br>";
   echo "".$satir["kullanici_adi"]."<br>";


   break;
 }

}
?></p>
    </div>
    <div class="columnsakin2" style="background-color:rgb(144, 156, 196);position:absolute; width: 230px;margin-top: -150px; margin-left: 400px;">
      <h4>DAİRE6</h4>
      <p><?php
if($daireekle->num_rows>0) {
  
 while ($satir = $daireekle->fetch_assoc()){
   echo "Daire No: ".$satir["id"]."<br>";
   echo "".$satir["kullanici_adi"]."<br>";


   break;
 }

}
?></p>
    </div>
    <div class="columnsakin2" style="background-color:rgb(144, 156, 196); position:absolute;margin-left: 650px; width: 230px; margin-top: -450px;">
      <h4>DAİRE7</h4>
      <p><?php
if($daireekle->num_rows>0) {
  
 while ($satir = $daireekle->fetch_assoc()){
   echo "Daire No: ".$satir["id"]."<br>";
   echo "".$satir["kullanici_adi"]."<br>";


   break;
 }

}
?></p>
    </div>
    <div class="columnsakin2" style="background-color:rgb(144, 156, 196); position:absolute; margin-left: 650px;width: 230px;margin-top: -300px;">
      <h4>DAİRE8</h4>
      <p><?php
if($daireekle->num_rows>0) {
  
 while ($satir = $daireekle->fetch_assoc()){
   echo "Daire No: ".$satir["id"]."<br>";
   echo "".$satir["kullanici_adi"]."<br>";


   break;
 }

}
?></p>
    </div>
    <div class="columnsakin2" style="background-color:rgb(144, 156, 196);position:absolute; margin-left: 650px;width: 230px;margin-top: -150px;">
      <h4>DAİRE9</h4>
      <p><?php
if($daireekle->num_rows>0) {
  
 while ($satir = $daireekle->fetch_assoc()){
   echo "Daire No: ".$satir["id"]."<br>";
   echo "".$satir["kullanici_adi"]."<br>";


   break;
 }

}
?></p>
    </div> 

    <div class="columnsakin2" style="background-color:rgb(144, 156, 196); position:absolute;margin-left: 900px; width: 230px; margin-top: -450px;">
      <h4>DAİRE10</h4>
      <p></p>
    </div>
    <div class="columnsakin2" style="background-color:rgb(144, 156, 196); position:absolute; margin-left: 900px;width: 230px;margin-top: -300px;">
      <h4>DAİRE11</h4>
      <p></p>
    </div>
    <div class="columnsakin2" style="background-color:rgb(144, 156, 196);position:absolute; margin-left: 900px;width: 230px;margin-top: -150px;">
      <h4>DAİRE12</h4>
      <p></p>
    </div>






    <div class="columnsakin2" style="background-color:rgb(144, 156, 196); position:absolute;margin-left: 1150px; width: 230px; margin-top: -450px;">
      <h4>DAİRE13</h4>
      <p></p>
    </div>
    <div class="columnsakin2" style="background-color:rgb(144, 156, 196); position:absolute; margin-left: 1150px;width: 230px;margin-top: -300px;">
      <h4>DAİRE14</h4>
      <p></p>
    </div>
    <div class="columnsakin2" style="background-color:rgb(144, 156, 196);position:absolute; margin-left: 1150px;width: 230px;margin-top: -150px;">
      <h4>DAİRE15</h4>
      <p></p>
    </div>

  </div>
  <br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="grid-container">
              <div class="grid-item">
                <div class="renk" style=" width:50px; height: 5px; margin-right: 33px; ">
                
                    <div class="button_container">
                        <p class="description"></p>
                        <a href="anketekle.php">
                        <button class="btn" style="margin-left: 70px;"><span>Anket Ekle</span></button>
                      </a>
                      <div class="row">
                        <div class="column" style="background-color:rgb(144, 156, 196); margin-left: 70px;">
                          <h2>ANKET1 Soru</h2>
                          <p>
                          
                          </p>
                        </div>
                        <div class="column" style="background-color:rgb(144, 156, 196);margin-top: -9px;margin-left: 70px;">
                          <h2>ANKET2 Soru</h2>
                          <p>
                           
                          </p>
                        </div></div>
                        <div class="row2">
                        <div class="column2" style="background-color:rgb(144, 156, 196);margin-left: 350px;">
                          <h2>ANKET3 Soru</h2>
                          <p>
                          
                          </p>
                        </div>
                        <div class="column2" style="background-color:rgb(144, 156, 196);margin-top: -9px;margin-left: 350px;">
                          <h2>ANKET4 Soru</h2>
                          <p>
                          
                           
                          </p>
                        </div>
                       
                      </div>
                    </div>
                
                
                </div>
                 
                <div style="display: flex; margin-right: auto; ">
            

                    
                  </div>
                  ANKETLER
                </div>
              <div class="grid-item">
                <div class="renk" style=" width:50px; height: 5px; margin-right: 33px; background-color: rgb(17, 190, 190);">
                
                <div class="button_container">
                    <p class="description"></p>
                    <a href="duyuruekle.php">


                        <button class="btn" style="margin-left: 70px;"><span>Duyuru Ekle</span></button>
                    
                    </a>
                    <div class="row">
                      <div class="column" style="background-color:rgb(144, 156, 196);margin-left: 70px;">
                        <h2>DUYURU1</h2>
                        <p><?php
if($kayit->num_rows>0) {
  
 while ($satir = $kayit->fetch_assoc()){
   echo "Duyuru Sahibi ".$satir["kullanici_adi"]."<br>";
   echo "Email : ".$satir["email"]."<br>";
   echo "Telefon : ".$satir["telefon"]."<br>";
   echo "Duyuru: ".$satir["duyuru"]."<br>";

   break;
 }

}
?></p>
                      </div>
                      <div class="column" style="background-color:rgb(144, 156, 196);margin-top: -9px;margin-left: 70px;">
                        <h2>DUYURU2</h2>
                        <p><?php
if($kayit->num_rows>0) {
  
 while ($satir = $kayit->fetch_assoc()){
   echo "Duyuru Sahibi ".$satir["kullanici_adi"]."<br>";
   echo "Email : ".$satir["email"]."<br>";
   echo "Telefon : ".$satir["telefon"]."<br>";
   echo "Duyuru: ".$satir["duyuru"]."<br>";

   break;
 }

}
?></p>
                      </div>                    </div>
                      <div class="row3">
                        <div class="column2" style="background-color:rgb(144, 156, 196);margin-left: 350px;">
                          <h2>DUYURU3</h2>
                          <p><?php
if($kayit->num_rows>0) {
  
 while ($satir = $kayit->fetch_assoc()){
   echo "Duyuru Sahibi ".$satir["kullanici_adi"]."<br>";
   echo "Email : ".$satir["email"]."<br>";
   echo "Telefon : ".$satir["telefon"]."<br>";
   echo "Duyuru: ".$satir["duyuru"]."<br>";

   break;
 }

}
?></p>
                        </div>
                        <div class="column2" style="background-color:rgb(144, 156, 196);margin-top: -9px;margin-left: 350px;">
                          <h2>DUYURU4</h2>
                          <p><?php
if($kayit->num_rows>0) {
  
 while ($satir = $kayit->fetch_assoc()){
   echo "Duyuru Sahibi ".$satir["kullanici_adi"]."<br>";
   echo "Email : ".$satir["email"]."<br>";
   echo "Telefon : ".$satir["telefon"]."<br>";
   echo "Duyuru: ".$satir["duyuru"]."<br>";

   break;
 }

}
?></p>
                        </div>
                       
                      </div>
                     

                </div>
                </div>
                DUYURULAR
              
              <br><br>

              </div>

          
              <div class="grid-item">
                <div class="renk" style=" width:50px; height: 5px; margin-right: 33px; ">
                
                    <div class="button_container">
                        <p class="description"></p>
                      <a href="aidatekle.php">  <button class="btn" style="margin-left: 70px;"><span>Aidat Ekle</span></button>
                      </a>
                      <div class="row">
                        <div class="column" style="background-color:rgb(144, 156, 196);margin-left: 70px;">
                          <h2>Daire 1</h2>
                          <p><br>
                 <?php
if($kaydet->num_rows>0) {
  
 while ($satir = $kaydet->fetch_assoc()){
   echo "Daire No ".$satir["daire_no"]."<br>";
   echo "Aidat Miktarı : ".$satir["miktar"]."<br>";
   echo "Tarih : ".$satir["tarih"]."<br>";
break;
 }

}
?>
</p>
                        </div>
                        <div class="column" style="background-color:rgb(144, 156, 196);margin-top: -9px;margin-left: 70px;">
                          <h2>DAİRE 2</h2>
                          <p><br>
                 <?php
if($kaydet->num_rows>0) {
  
 while ($satir = $kaydet->fetch_assoc()){
   echo "Daire No ".$satir["daire_no"]."<br>";
   echo "Aidat Miktarı : ".$satir["miktar"]."<br>";
   echo "Tarih : ".$satir["tarih"]."<br>";
break;
 }

}
?>
</p>
                        </div>
                      </div>
                        <div class="row">
                          <div class="column2" style="background-color:rgb(144, 156, 196);margin-left: 350px;">
                            <h2>DAİRE 3</h2>
                            <p>
                 <?php
if($kaydet->num_rows>0) {
  
 while ($satir = $kaydet->fetch_assoc()){
   echo "Daire No ".$satir["daire_no"]."<br>";
   echo "Aidat Miktarı : ".$satir["miktar"]."<br>";
   echo "Tarih : ".$satir["tarih"]."<br>";
break;
 }

}
?>
</p> <br>
                          </div>
                          <div class="column2" style="background-color:rgb(144, 156, 196);margin-top: -9px;margin-left: 350px;">
                            <h2>DAİRE 4</h2>
                            <p><br>
                 <?php
if($kaydet->num_rows>0) {
  
 while ($satir = $kaydet->fetch_assoc()){
   echo "Daire No ".$satir["daire_no"]."<br>";
   echo "Aidat Miktarı : ".$satir["miktar"]."<br>";
   echo "Tarih : ".$satir["tarih"]."<br>";
break;
 }

}
?>
</p>
                          </div>
                         
                        </div>
                       

                    </div>
                    </div>AİDATLAR</div>  
             <div class="grid-item">
                <div class="renk" style=" width:50px; height: 5px; margin-right: 33px; ">
                
                    <div class="button_container">
                        <p class="description"></p>
                        <a href="aracekle.php">    <button class="btn" style="margin-left: 70px;"><span>Araç Ekle</span></button>
                        </a>
                        <div class="row">
                          <div class="columarac" style="">
                          <div class="row">
                          <div class="column" style="background-color:rgb(144, 156, 196);margin-left: 70px;">
                        <h2>Daire 1 Araç</h2>
                        <p> <?php
if($arac->num_rows>0) {
  
 while ($satir = $arac->fetch_assoc()){

   echo "Plaka: ".$satir["arac_plaka"]."<br>";
   echo "Markası: ".$satir["marka_model"]."<br>";
   echo "Daire No: ".$satir["daire_no"]."<br>";
  
   echo "Arac Notu : ".$satir["arac_not"],"<br>";
  break;
 }
}
?></p>
                      </div>
                      <div class="column" style="background-color:rgb(144, 156, 196);margin-top: -9px;margin-left: 70px;">
                        <h2>Daire 2 Araç</h2>
                        <p> <?php
if($arac->num_rows>0) {
  
 while ($satir = $arac->fetch_assoc()){

   echo "Plaka: ".$satir["arac_plaka"]."<br>";
   echo "Markası: ".$satir["marka_model"]."<br>";
   echo "Daire No: ".$satir["daire_no"]."<br>";
  
   echo "Arac Notu : ".$satir["arac_not"],"<br>";
  break;
 }
}
?></p>
                      </div>                    </div>
                      <div class="row3">
                        <div class="column2" style="background-color:rgb(144, 156, 196);margin-left: 350px;">
                          <h2>Daire 3 Araç</h2>
                          <p> <?php
if($arac->num_rows>0) {
  
 while ($satir = $arac->fetch_assoc()){

   echo "Plaka: ".$satir["arac_plaka"]."<br>";
   echo "Markası: ".$satir["marka_model"]."<br>";
   echo "Daire No: ".$satir["daire_no"]."<br>";
  
   echo "Arac Notu : ".$satir["arac_not"],"<br>";
  break;
 }
}
?></p>
                        </div>
                        <div class="column2" style="background-color:rgb(144, 156, 196);margin-top: -9px;margin-left: 350px;">
                        <h2>Daire 4 Araç</h2>
                        <p> <?php
if($arac->num_rows>0) {
  
 while ($satir = $arac->fetch_assoc()){

   echo "Plaka: ".$satir["arac_plaka"]."<br>";
   echo "Markası: ".$satir["marka_model"]."<br>";
   echo "Daire No: ".$satir["daire_no"]."<br>";
  
   echo "Arac Notu : ".$satir["arac_not"],"<br>";
  break;
 }
}
?></p>
                        </div>
                       
                      </div>
                     
                      </div>
                      </div>
                      </div>
                    </div>ARAÇLAR</div>  
        </div>

    </div>

</main>
<body style="background-color:rgb(223, 223, 223);"><br><br><br>
  <div class="flash">


    <div class="kayanyazi">
        <div class="baslik">
            <h4></h4>
        </div>
        <div class="haberler" style=" background-color:rgb(223, 223, 223);">
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