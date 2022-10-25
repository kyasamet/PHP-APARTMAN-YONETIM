<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    *{
        margin:0px;
        padding:0px;
        box-sizing: border-box;

    }
    .head{
        width:100%;
        padding:10px 20px;
        background-color:rgb(255, 255, 255);
       
    }

    .head > ul{
        list-style-type: none;
        list-style-type: none;
    text-align: end;
    display: inline-block;
    width: calc(100% - 36px);

    } 
    .head > ul li{
        display: inline-block;
        margin: 5px;

     
    }

    .head > ul li a{
        text-decoration: none;
       
    }

    .sidebar-menu{
      margin-top:25px;
    

    }
    .sidebar-menu > ul {
    list-style-type: none;
    margin: auto;
    width: 240px;
    }

    .sidebar-menu > ul li {
        
        height: 45px;
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
       font-size: 25px;

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
    text-shadow: 6px 5px 0 rgb(210, 210, 211), -1px -1px 0 rgb(227, 227, 230), 5px -1px 0 rgb(255, 255, 255), -1px 1px 0 rgb(243, 243, 243), 5px 5rgb(255, 255, 255), 77;
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
    font-size: 44px;
        display: block;
    text-shadow: 2px red;
    text-decoration: none;
    }
</style>

<header>
<nav class="head">
    <a href="#"><div class="logo">APARTMAN TAKİP SİSTEMİ</div> </a>
    <div class="panel">NİZAMETTİN GÜVENÇ</div>
    <ul>
  <!--      <li>
            <div class="yonetim"><a href="">Yönetim</a></div>-->
        </li>
        <li>
            <div class="apartmanadi"><a href="">Site Adı: </a></div>
            Ege Üniversitesi Apartmanı
                
        </li>
        <li>
           <div class="yonetici"> <a href="">Yönetici: </a></div>
           Kemalettin Tuğcu
        </li>
    </ul>
</nav>
</header>

<main>
    <div style="display:flex;">
        <div style="background-color: orange; width: 25%; height: 500px; ">

            <nav class="sidebar-menu">
            <ul>

                <li><img src="idea.png" width="30px"><a href="dairesakinianasayfa.php">Anasayfa</a></li>
                <li><img src="salary.png" width="30px"><a href="aidatlards.php">Aidatlar</a></li>
                <li><img src="money.png" width="30px"><a href="giderlerds.php">Giderler</a></li>
                <li><img src="account.png" width="30px"><a href="hesaplards.php">Hesaplar</a></li>
                <li><img src="survey.png" width="30px"><a href="anketlerds.php">Anketler</a></li>
                <li><img src="car.png" width="30px"><a href="araclards.php">Araçlar</a></li>

                <li><img src="duyuru.png" width="30px"><a href="duyurulards.php">Duyurular</a></li>
            </ul>  
        </nav>

        </div>
        <div style="background-color:rgb(223, 223, 223); width:100%; height:500px;">
            w
        </div>

    </div>

</main>
<body>

</body>
</html>