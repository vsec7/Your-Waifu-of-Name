<?php

// Coded by Versailles
// Sec7or Team

// DB utk nama character dan link images
// tambahin aja dalam array("Nama Characters", "link image nya") :v


$an = array(array("Umaru Doma","https://ae01.alicdn.com/kf/HTB17fsQKFXXXXaNXFXXq6xXFXXXp/New-Japanese-Anime-Himouto-Umaru-chan-Doma-Umaru-Otaku-Pillow-Cover-Case-Hugging-Body-long-love.jpg_640x640.jpg"), array("Mashiro Shiina","http://www.mlo.me/upen/v/tb2013/tb201306/tb20130607/7dad9e2f-5dcc-4780-91ec-80eb49eff05d.jpg"),array("Izumi Sagiri","https://wwwcoosflycom-q4n1sfqp1s9.stackpathdns.com/19832-thickbox_default/izumi-sagiri-body-pillow-cover.jpg"),array("Rias Gremory","https://pbs.twimg.com/profile_images/2819632796/2e5fe438fc870d1327795d216abe5ffc_400x400.png"),array("Ebina Nana","https://images-fe.ssl-images-amazon.com/images/I/61w1nzfgIoL._SY445_.jpg"),array("Kirie Motoba","http://p1.i.ntere.st/2c335b16eeb2a51074f57fac8395c713_480.jpg"),array("Emilia Tan","https://1.bp.blogspot.com/-cV0pptGVAQM/V3vePMucjYI/AAAAAAAABn4/JnrPCA12p98Nrx3aqPRUkAXNwRlxaDQEgCLcB/s1600/1461576277168258412.jpg"),array("REM","http://pm1.narvii.com/6160/1874bd100cb6493deca61dcade331151e773fe90_hq.jpg"),array("RAM","http://static.zerochan.net/Ram.%28Re%3AZero%29.full.2014449.jpg"),array("Yukana Yame","https://68.media.tumblr.com/b4852a9c63224d9e201fd73f1d732f2f/tumblr_inline_opabfbRRvc1sl85yw_540.png"),array("Mitsuha Miyamizu","https://s-media-cache-ak0.pinimg.com/originals/6e/3b/68/6e3b689f6395ebae75d1ef578a5327e8.png"),array("Inori Yuzuriha","http://pre02.deviantart.net/47f2/th/pre/f/2015/202/7/3/inori_yuzuriha_guilty_crown_by_robbo4-d9276ms.jpg"),array("Akeno Himejima","https://yt3.ggpht.com/-58DpbWeRmAA/AAAAAAAAAAI/AAAAAAAAAAA/-1Jn6XoqJkQ/s900-c-k-no-mo-rj-c0xffffff/photo.jpg"),array("Airi Akizuki","https://ugc.kn3.net/i/760x/http://www.hentaixploit.com/images/portada/oni-chichi-refresh.jpg"),array("Onodera Haru","https://s-media-cache-ak0.pinimg.com/originals/0c/2c/bd/0c2cbd835efba02082d75a7f4aa285bd.jpg"),array("Chitoge Kirisaki","http://img.bugu.18183.com//183acg/img/collect-pic/2017/04/1493089185-92922p1.jpg"),array("Yamada Emily","https://s-media-cache-ak0.pinimg.com/originals/b3/db/84/b3db840c701cac614d6b069010a24aff.jpg"),array("Ueno Naoka","https://i.imgbox.com/OUWB5Vuu.jpg"),array("Nishimiya Shouko","https://pbs.twimg.com/media/CsaA47QWEAAOqcF.jpg"),array("Hatsune Miku","http://static.zerochan.net/Hatsune.Miku.full.2036039.jpg"));

$char = $an[array_rand($an)];

if(isset($_GET['x'])){
?>
<!DOCTYPE html>
<html>	
<head>
<title>Waifu <?=$_GET['x'];?> adalah <?=$char[0];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:url"                content="" />
    <meta property="og:title"              content="Waifu <?=$_GET['x'];?> Adalah <?=$char[0];?>" />
    <meta property="og:description"        content="share on Facebook to see Waifu of your name : selpus.com/YourName" />
    <meta property="og:image"              content="<?=$char[1];?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .box{
        width: 50%;
        border: 4px solid #000;
    }
</style>

</head>
<body>
<div class="container-fluid">
<center>
    <h1>Waifu <?=$_GET['x'];?> adalah <?=$char[0];?></h1><br>
<div class="box">
<img src="<?=$char[1];?>" class="img-responsive">
</div>
<br>
    <p>share on Facebook to see waifu of your Name : selpus.com/YourName</p>
</div>
</body>
</html>
<?php }else{ print "Visit selpus.com to see your waifu"; } ?>
