<?php
include '../controller/HotelC.php';


$hotelC = new HotelC();
$hotels= $hotelC->listHotels();
//$professeurs = $professeurC->listProfesseur();


if ($hotels) {
?>
<!DOCTYPE html>
<html lang="fr-fr" dir="ltr" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Passer une reservation  </title>
<meta name="description" content="Les meilleurs prix de l&#8217; hôtel Houda Yasmine Hammamet 4 * Hammamet sur Tunisiebooking! &#10003; 72 Avis réels &#10003; Photos récentes &#10003; Confirmation immédiate. Réservez-ViiiiiiTE ! " />
<meta name="keywords" content="Hotel Houda Yasmine Hammamet, Hammamet  "/>
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="cache-control" content="no-cache,must-revalidate"/>
<meta http-equiv="expires" content="0"/>
<meta http-equiv="imagetoolbar" content="no"/>
<link rel="icon" href="https://tn.tunisiebooking.com/images/icon.gif" type="image/gif" />
<link rel="shortcut icon" href="https://tn.tunisiebooking.com/images/icon.gif" />
<link rel="shortcut icon" href="https://tn.tunisiebooking.com/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="https://tn.tunisiebooking.com/images/custom_icon.png"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<link rel="" href="" />
<meta name="robots" content="index, follow" />
<meta property="fb:admins" content="100002112262971" />
<meta property="fb:pages" content="311740685604449" />
<link rel="stylesheet" href="https://tn.tunisiebooking.com/theme/calender_moteur/development-bundle/themes/custom-theme1/jquery.ui.all.css"  />
<style>
@font-face{font-family:'fontello';src:url(https://tn.tunisiebooking.com/theme/styles/font/fontello.eot?31038848);src:url(https://tn.tunisiebooking.com/theme/styles/font/fontello.eot?31038848#iefix) format("embedded-opentype"),url(https://tn.tunisiebooking.com/theme/styles/font/fontello.woff?31038848) format("woff"),url(https://tn.tunisiebooking.com/theme/styles/font/fontello.ttf?31038848) format("truetype"),url(https://tn.tunisiebooking.com/theme/styles/font/fontello.svg?31038848#fontello) format("svg");font-weight:400;font-style:normal;font-display: swap;}
[class^="icon-"]:before,[class*=" icon-"]:before{font-family:"fontello";font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;text-align:center;font-variant:normal;text-transform:none;line-height:1em;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-glass:before{content:'\e800'}.icon-wifi:before{content:'\e801'}.icon-table:before{content:'\e802'}
.icon-food:before{content:'\e803'}.icon-right-open:before{content:'\e804'}.icon-left-open:before{content:'\e805'}.icon-check:before{content:'\e806'}.icon-cancel:before{content:'\e807'}.icon-wheelchair:before{content:'\e808'}.icon-calendar:before{content:'\e809'}.icon-calendar-inv:before{content:'\e80a'}.icon-calendar-1:before{content:'\e80b'}.icon-emo-happy:before{content:'\e80c'}.icon-emo-unhappy:before{content:'\e80d'}.icon-thumbs-up-alt:before{content:'\e80e'}.icon-thumbs-down-alt:before{content:'\e80f'}.icon-star:before{content:'\e810'}.icon-star-empty:before{content:'\e811'}.icon-calendar-2:before{content:'\e812'}.icon-calendar-empty:before{content:'\e813'}.icon-thumbs-up:before{content:'\e814'}.icon-thumbs-down:before{content:'\e815'}.icon-eye:before{content:'\e816'}.icon-heart-filled:before{content:'\e817'}.icon-heart:before{content:'\e818'}.icon-home:before{content:'\e819'}.icon-thumbs-down-1:before{content:'\e81a'}.icon-thumbs-up-1:before{content:'\e81b'}.icon-right-open-1:before{content:'\e81c'}.icon-left-open-1:before{content:'\e81d'}.icon-angle-left:before{content:'\e81e'}.icon-angle-right:before{content:'\e81f'}.icon-clock:before{content:'\e820'}.icon-clock-1:before{content:'\e821'}.icon-calendar-3:before{content:'\e822'}.icon-calendar-outlilne:before{content:'\e823'}.icon-clock-2:before{content:'\e824'}.icon-user:before{content:'\e825'}.icon-user-outline:before{content:'\e826'}.icon-user-1:before{content:'\e827'}.icon-star-1:before{content:'\e828'}.icon-star-2:before{content:'\e829'}.icon-star-3:before{content:'\e82a'}.icon-basket:before{content:'\e82b'}.icon-videocam-outline:before{content:'\e82c'}.icon-stopwatch:before{content:'\e82d'}.icon-coffee:before{content:'\e82e'}.icon-movie:before{content:'\e82f'}.icon-cafe:before{content:'\e831'}.icon-grocery-store:before{content:'\e832'}.icon-religious-islam:before{content:'\e833'}.icon-calendar-4:before{content:'\e834'}.icon-home-1:before{content:'\e835'}.icon-video-alt:before{content:'\e836'}.icon-videocam:before{content:'\e837'}.icon-guest:before{content:'\e838'}.icon-minus-circle:before{content:'\e839'}.icon-plus-circle:before{content:'\e83a'}.icon-cancel-circle:before{content:'\e83b'}.icon-ok-circle:before{content:'\e83c'}.icon-laptop:before{content:'\e83d'}.icon-wifi-1:before{content:'\e83e'}.icon-air:before{content:'\e83f'}.icon-hourglass:before{content:'\e840'}.icon-picture:before{content:'\e841'}.icon-male:before{content:'\e842'}.icon-female:before{content:'\e843'}.icon-child:before{content:'\e844'}.icon-accessibility:before{content:'\e845'}.icon-child-1:before{content:'\e846'}.icon-emo-coffee:before{content:'\e847'}.icon-glyph:before{content:'\e848'}.icon-glyph-1:before{content:'\e849'}.icon-glyph-2:before{content:'\e84a'}.icon-glyph-3:before{content:'\e84b'}.icon-emo-sleep:before{content:'\e84c'}.icon-emo-thumbsup:before{content:'\e84d'}.icon-glyph-4:before{content:'\e84e'}.icon-glyph-5:before{content:'\e84f'}.icon-glyph-6:before{content:'\e850'}.icon-glyph-7:before{content:'\e851'}.icon-glyph-8:before{content:'\e852'}.icon-glyph-9:before{content:'\e853'}.icon-lamp:before{content:'\e854'}.icon-glyph-10:before{content:'\e855'}.icon-glyph-11:before{content:'\e856'}.icon-location:before{content:'\e857'}.icon-attention:before{content:'\e858'}.icon-sun:before{content:'\e859'}.icon-cloud:before{content:'\e85a'}.icon-umbrella:before{content:'\e85b'}.icon-flight:before{content:'\e85c'}.icon-fighter-jet:before{content:'\e85d'}.icon-bank:before{content:'\e85e'}.icon-info-circled:before{content:'\e85f'}.icon-phone:before{content:'\e860'}.icon-phone-outline:before{content:'\e861'}.icon-swimming:before{content:'\e862'}.icon-lightbulb:before{content:'\e863'}.icon-award:before{content:'\e864'}.icon-phone-1:before{content:'\e865'}.icon-at:before{content:'\e866'}.icon-golf:before{content:'\e867'}.icon-location-1:before{content:'\e868'}.icon-building-filled:before{content:'\e869'}.icon-commerical-building:before{content:'\e86a'}.icon-globe:before{content:'\e86b'}.icon-office:before{content:'\e86c'}.icon-airplane:before{content:'\e86d'}.icon-truck:before{content:'\e86e'}.icon-users:before{content:'\e86f'}.icon-fast-food:before{content:'\e870'}.icon-basketball:before{content:'\e871'}.icon-school:before{content:'\e872'}.icon-gmail:before{content:'\e873'}.icon-group:before{content:'\e874'}.icon-glyph-12:before{content:'\e875'}.icon-glyph-13:before{content:'\e876'}.icon-glyph-14:before{content:'\e877'}.icon-glyph-15:before{content:'\e878'}.icon-glyph-16:before{content:'\e879'}.icon-glyph-17:before{content:'\e87a'}.icon-glyph-18:before{content:'\e87b'}.icon-glyph-19:before{content:'\e87c'}.icon-glyph-20:before{content:'\e87d'}.icon-glyph-21:before{content:'\e87e'}.icon-glyph-22:before{content:'\e87f'}.icon-thumbs-up-2:before{content:'\e880'}.icon-thumbs-down-2:before{content:'\e881'}.icon-cart-plus:before{content:'\e882'}.icon-basket-1:before{content:'\e883'}.icon-moon:before{content:'\e884'}.icon-chart-line:before{content:'\e885'}.icon-gift:before{content:'\e886'}.icon-bed:before{content:'\e887'}.icon-android:before{content:'\e888'}.icon-users-1:before{content:'\e889'}.icon-globe-1:before{content:'\e88a'}.icon-moon-1:before{content:'\e88b'}.icon-users-2:before{content:'\e88c'}.icon-eye-1:before{content:'\e88d'}.icon-moon-inv:before{content:'\e88e'}.icon-twitter:before{content:'\e88f'}.icon-gplus:before{content:'\e890'}.icon-restaurant:before{content:'\e891'}.icon-gplus-1:before{content:'\e892'}.icon-twitter-1:before{content:'\e893'}.icon-facebook:before{content:'\e894'}.icon-tablet:before{content:'\e895'}.icon-emo-wink2:before{content:'\e896'}
article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,video{display:inline-block}audio:not([controls]){display:none;height:0}[hidden],template{display:none}html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}a{background:transparent}a:focus{outline:thin dotted}
a:active,a:hover{outline:0}h1{margin:.67em 0;font-size:2em}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}hr{height:0;-moz-box-sizing:content-box;box-sizing:content-box}mark{color:#000;background:#ff0}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em}pre{white-space:pre-wrap}q{quotes:"\201C" "\201D" "\2018" "\2019"}small{font-size:80%}sub,sup{/*position:relative;font-size:75%;line-height:0;vertical-align:baseline*/}sup{/*top:-.5em*/}sub{bottom:-.25em}img{border:0;/*max-width:100%*/;height:auto}#footeres{margin-left:0}#drapeau{width:100px}svg:not(:root){overflow:hidden}figure{margin:0}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}button,input,select,textarea{margin:0;font-family:inherit;font-size:100%}button,input{line-height:normal}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{cursor:pointer;-webkit-appearance:button}button[disabled],html input[disabled]{cursor:default}input[type="checkbox"],input[type="radio"]{padding:0;box-sizing:border-box}input[type="search"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}textarea{overflow:auto;vertical-align:top}table{border-collapse:collapse;border-spacing:0}.b-button.b-searchbox-button_legacy,.b-button.b-searchbox-button_legacy .b-button__text{color:#fff!important;font-size:23px!important;line-height:1.5;font-weight:700;-webkit-font-smoothing:antialiased}@media print{*{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="javascript:"]:after,a[href^="#"]:after{content:""}pre,blockquote{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}tr,img{page-break-inside:avoid}img{max-width:100%!important}@page{margin:2cm .5cm}p,h2,h3{orphans:3;widows:3}h2,h3{page-break-after:avoid}select{background:#fff!important}.table td,.table th{background-color:#fff!important}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table-bordered th,.table-bordered td{border:1px solid #ddd!important}}*,:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:62.5%;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.428571429;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#428bca;text-decoration:none}a:hover,a:focus{color:#2a6496;text-decoration:underline}a:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.img-responsive{display:block;height:auto;max-width:100%}.img-rounded{border-radius:6px}.img-thumbnail{display:inline-block;height:auto;max-width:100%;padding:4px;line-height:1.428571429;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}p{margin:10px 0 10px 10px;font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif;font-size: 14px;}.lead{margin-bottom:20px;font-size:16px;font-weight:200;line-height:1.4}@media(min-width:768px){.lead{font-size:21px}}small,.small{font-size:85%}cite{font-style:normal}.text-muted{color:#999}.text-primary{color:#428bca}.text-primary:hover{color:#3071a9}.text-warning{color:#c09853}.text-warning:hover{color:#a47e3c}.text-danger{color:#b94a48}.text-danger:hover{color:#953b39}.text-success{color:#468847}.text-success:hover{color:#356635}.text-info{color:#3a87ad}.text-info:hover{color:#2d6987}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500;line-height:1.1;color:inherit}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small{font-weight:400;line-height:1;color:#999}h1,h2,h3{margin-top:0px;margin-bottom:10px}h1 small,h2 small,h3 small,h1 .small,h2 .small,h3 .small{font-size:65%}h4,h5,h6{margin-top:10px;margin-bottom:10px}h4 small,h5 small,h6 small,h4 .small,h5 .small,h6 .small{font-size:75%}h1,.h1{font-size:36px}h2,.h2{font-size:30px}h3,.h3{font-size:24px}h4,.h4{font-size:18px}h5,.h5{font-size:14px}h6,.h6{font-size:12px}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ul,ol{margin-top:0;margin-bottom:10px}ul ul,ol ul,ul ol,ol ol{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}.list-inline>li:first-child{padding-left:0}dl{margin-bottom:20px}dt,dd{line-height:1.428571429}dt{font-weight:700}dd{margin-left:0}@media(min-width:768px){.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}.dl-horizontal dd:before,.dl-horizontal dd:after{display:table;content:" "}.dl-horizontal dd:after{clear:both}.dl-horizontal dd:before,.dl-horizontal dd:after{display:table;content:" "}.dl-horizontal dd:after{clear:both}}abbr[title],abbr[data-original-title]{cursor:help;border-bottom:1px dotted #999}abbr.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;border-left:5px solid #eee}blockquote p{font-size:17.5px;font-weight:300;line-height:1.25}blockquote p:last-child{margin-bottom:0}blockquote small{display:block;line-height:1.428571429;color:#999}blockquote small:before{content:'\2014 \00A0'}blockquote.pull-right{padding-right:15px;padding-left:0;border-right:5px solid #eee;border-left:0}blockquote.pull-right p,blockquote.pull-right small,blockquote.pull-right .small{text-align:right}blockquote.pull-right small:before,blockquote.pull-right .small:before{content:''}blockquote.pull-right small:after,blockquote.pull-right .small:after{content:'\00A0 \2014'}blockquote:before,blockquote:after{content:""}address{margin-bottom:20px;font-style:normal;line-height:1.428571429}code,kbd,pre,samp{font-family:Monaco,Menlo,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;white-space:nowrap;background-color:#f9f2f4;border-radius:4px}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.428571429;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{margin-right:auto;margin-left:auto}.container:before,.container:after{display:table;content:" "}.container:after{clear:both}.container:before,.container:after{display:table;content:" "}.container:after{clear:both}.row:after{clear:both}.row:after{clear:both}.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;/*padding-right:10px;padding-left:20px*/}.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.666666666667%}.col-xs-10{width:83.333333333333%}.col-xs-9{width:75%}.col-xs-8{width:66.666666666667%}.col-xs-7{width:58.333333333333%}.col-xs-6{width:50%}.col-xs-5{width:41.666666666667%}.col-xs-4{width:33.333333333333%}.col-xs-3{width:25%}.col-xs-2{width:16.666666666667%}.col-xs-1{width:8.3333333333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.666666666667%}.col-xs-pull-10{right:83.333333333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.666666666667%}.col-xs-pull-7{right:58.333333333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.666666666667%}.col-xs-pull-4{right:33.333333333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.666666666667%}.col-xs-pull-1{right:8.3333333333333%}.col-xs-pull-0{right:0}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.666666666667%}.col-xs-push-10{left:83.333333333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.666666666667%}.col-xs-push-7{left:58.333333333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.666666666667%}.col-xs-push-4{left:33.333333333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.666666666667%}.col-xs-push-1{left:8.3333333333333%}.col-xs-push-0{left:0}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.666666666667%}.col-xs-offset-10{margin-left:83.333333333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.666666666667%}.col-xs-offset-7{margin-left:58.333333333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.666666666667%}.col-xs-offset-4{margin-left:33.333333333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.666666666667%}.col-xs-offset-1{margin-left:8.3333333333333%}.col-xs-offset-0{margin-left:0}@media(min-width:768px){.container{width:750px}.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.666666666667%}.col-sm-10{width:83.333333333333%}.col-sm-9{width:65%}.col-sm-8{width:66.666666666667%}.col-sm-7{width:58.333333333333%}.col-sm-6{width:50%}.col-sm-5{width:41.666666666667%}.col-sm-4{width:33.333333333333%}.col-sm-3{width:30%}.col-sm-2{width:16.666666666667%}.col-sm-1{width:8.3333333333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.666666666667%}.col-sm-pull-10{right:83.333333333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.666666666667%}.col-sm-pull-7{right:58.333333333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.666666666667%}.col-sm-pull-4{right:33.333333333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.666666666667%}.col-sm-pull-1{right:8.3333333333333%}.col-sm-pull-0{right:0}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.666666666667%}.col-sm-push-10{left:83.333333333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.666666666667%}.col-sm-push-7{left:58.333333333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.666666666667%}.col-sm-push-4{left:33.333333333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.666666666667%}.col-sm-push-1{left:8.3333333333333%}.col-sm-push-0{left:0}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.666666666667%}.col-sm-offset-10{margin-left:83.333333333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.666666666667%}.col-sm-offset-7{margin-left:58.333333333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.666666666667%}.col-sm-offset-4{margin-left:33.333333333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.666666666667%}.col-sm-offset-1{margin-left:8.3333333333333%}.col-sm-offset-0{margin-left:0}}@media(min-width:992px){.container{width:970px}.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11{float:left}.col-md-12{width:100%}.col-md-11{width:91.666666666667%}.col-md-10{width:83.333333333333%}.col-md-9{width:75%}.col-md-8{width:66.666666666667%}.col-md-7{width:58.333333333333%}.col-md-6{width:50%}.col-md-5{width:41.666666666667%}.col-md-4{width:33.333333333333%}.col-md-3{width:25%}.col-md-2{width:16.666666666667%}.col-md-1{width:8.3333333333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.666666666667%}.col-md-pull-10{right:83.333333333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.666666666667%}.col-md-pull-7{right:58.333333333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.666666666667%}.col-md-pull-4{right:33.333333333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.666666666667%}.col-md-pull-1{right:8.3333333333333%}.col-md-pull-0{right:0}.col-md-push-12{left:100%}.col-md-push-11{left:91.666666666667%}.col-md-push-10{left:83.333333333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.666666666667%}.col-md-push-7{left:58.333333333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.666666666667%}.col-md-push-4{left:33.333333333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.666666666667%}.col-md-push-1{left:8.3333333333333%}.col-md-push-0{left:0}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.666666666667%}.col-md-offset-10{margin-left:83.333333333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.666666666667%}.col-md-offset-7{margin-left:58.333333333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.666666666667%}.col-md-offset-4{margin-left:33.333333333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.666666666667%}.col-md-offset-1{margin-left:8.3333333333333%}.col-md-offset-0{margin-left:0}}@media(min-width:1200px){.container{width:1170px}.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.666666666667%}.col-lg-10{width:83.333333333333%}.col-lg-9{width:75%}.col-lg-8{width:66.666666666667%}.col-lg-7{width:58.333333333333%}.col-lg-6{width:50%}.col-lg-5{width:41.666666666667%}.col-lg-4{width:33.333333333333%}.col-lg-3{width:25%}.col-lg-2{width:16.666666666667%}.col-lg-1{width:8.3333333333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.666666666667%}.col-lg-pull-10{right:83.333333333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.666666666667%}.col-lg-pull-7{right:58.333333333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.666666666667%}.col-lg-pull-4{right:33.333333333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.666666666667%}.col-lg-pull-1{right:8.3333333333333%}.col-lg-pull-0{right:0}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.666666666667%}.col-lg-push-10{left:83.333333333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.666666666667%}.col-lg-push-7{left:58.333333333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.666666666667%}.col-lg-push-4{left:33.333333333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.666666666667%}.col-lg-push-1{left:8.3333333333333%}.col-lg-push-0{left:0}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.666666666667%}.col-lg-offset-10{margin-left:83.333333333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.666666666667%}.col-lg-offset-7{margin-left:58.333333333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.666666666667%}.col-lg-offset-4{margin-left:33.333333333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.666666666667%}.col-lg-offset-1{margin-left:8.3333333333333%}.col-lg-offset-0{margin-left:0}}table{max-width:100%;background-color:transparent}th{text-align:left}.table{width:100%;margin-bottom:20px}.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td{padding:8px;line-height:1.428571429;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>th,.table>caption+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>td,.table>thead:first-child>tr:first-child>td{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>thead>tr>th,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>tbody>tr>td,.table-condensed>tfoot>tr>td{padding:5px}.table-bordered{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border:1px solid #ddd}.table-bordered>thead>tr>th,.table-bordered>thead>tr>td{border-bottom-width:2px}.table-striped>tbody>tr:nth-child(odd)>td,.table-striped>tbody>tr:nth-child(odd)>th{background-color:#f9f9f9}.table-hover>tbody>tr:hover>td,.table-hover>tbody>tr:hover>th{background-color:#f5f5f5}table col[class*="col-"]{display:table-column;float:none}table td[class*="col-"],table th[class*="col-"]{display:table-cell;float:none}.table>thead>tr>td.active,.table>tbody>tr>td.active,.table>tfoot>tr>td.active,.table>thead>tr>th.active,.table>tbody>tr>th.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>tbody>tr.active>td,.table>tfoot>tr.active>td,.table>thead>tr.active>th,.table>tbody>tr.active>th,.table>tfoot>tr.active>th{background-color:#f5f5f5}.table>thead>tr>td.success,.table>tbody>tr>td.success,.table>tfoot>tr>td.success,.table>thead>tr>th.success,.table>tbody>tr>th.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>tbody>tr.success>td,.table>tfoot>tr.success>td,.table>thead>tr.success>th,.table>tbody>tr.success>th,.table>tfoot>tr.success>th{background-color:#dff0d8}.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover,.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th{background-color:#d0e9c6}.table>thead>tr>td.danger,.table>tbody>tr>td.danger,.table>tfoot>tr>td.danger,.table>thead>tr>th.danger,.table>tbody>tr>th.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>tbody>tr.danger>td,.table>tfoot>tr.danger>td,.table>thead>tr.danger>th,.table>tbody>tr.danger>th,.table>tfoot>tr.danger>th{background-color:#f2dede}.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover,.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th{background-color:#ebcccc}.table>thead>tr>td.warning,.table>tbody>tr>td.warning,.table>tfoot>tr>td.warning,.table>thead>tr>th.warning,.table>tbody>tr>th.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>tbody>tr.warning>td,.table>tfoot>tr.warning>td,.table>thead>tr.warning>th,.table>tbody>tr.warning>th,.table>tfoot>tr.warning>th{background-color:#fcf8e3}.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover,.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th{background-color:#faf2cc}@media(max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-x:scroll;overflow-y:hidden;border:1px solid #ddd;-ms-overflow-style:-ms-autohiding-scrollbar;-webkit-overflow-scrolling:touch}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}fieldset{padding:0;margin:0;border:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;margin-bottom:5px;font-weight:700}input[type="search"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type="radio"],input[type="checkbox"]{margin:4px 0 0;margin-top:1px \9;line-height:normal}input[type="file"]{display:block}select[multiple],select[size]{height:auto}select optgroup{font-family:inherit;font-size:inherit;font-style:inherit}input[type="file"]:focus,input[type="radio"]:focus,input[type="checkbox"]:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}input[type="number"]::-webkit-outer-spin-button,input[type="number"]::-webkit-inner-spin-button{height:auto}output{display:block;padding-top:7px;font-size:14px;line-height:1.428571429;color:#555;vertical-align:middle}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.428571429;color:#555;vertical-align:middle;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6)}.form-control:-moz-placeholder{color:#999}.form-control::-moz-placeholder{color:#999}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{cursor:not-allowed;background-color:#eee}textarea.form-control{height:auto}.form-group{margin-bottom:15px}.radio,.checkbox{display:block;min-height:20px;padding-left:20px;margin-top:10px;margin-bottom:10px;vertical-align:middle}.radio label,.checkbox label{display:inline;margin-bottom:0;font-weight:400;cursor:pointer}.radio input[type="radio"],.radio-inline input[type="radio"],.checkbox input[type="checkbox"],.checkbox-inline input[type="checkbox"]{float:left;margin-left:-20px}.radio+.radio,.checkbox+.checkbox{margin-top:-5px}.radio-inline,.checkbox-inline{display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.radio-inline+.radio-inline,.checkbox-inline+.checkbox-inline{margin-top:0;margin-left:10px}input[type="radio"][disabled],input[type="checkbox"][disabled],.radio[disabled],.radio-inline[disabled],.checkbox[disabled],.checkbox-inline[disabled],fieldset[disabled] input[type="radio"],fieldset[disabled] input[type="checkbox"],fieldset[disabled] .radio,fieldset[disabled] .radio-inline,fieldset[disabled] .checkbox,fieldset[disabled]
.checkbox-inline{cursor:not-allowed}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}textarea.input-sm{height:auto}.input-lg{height:45px;padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}
select.input-lg{height:45px;line-height:45px}textarea.input-lg{height:auto}.has-warning .help-block,.has-warning .control-label,.has-warning .radio,.has-warning .checkbox,.has-warning .radio-inline,.has-warning .checkbox-inline{color:#c09853}.has-warning .form-control{border-color:#c09853;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}
.has-warning .form-control:focus{border-color:#a47e3c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #dbc59e;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #dbc59e}.has-warning .input-group-addon{color:#c09853;background-color:#fcf8e3;border-color:#c09853}
.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline{color:#b94a48}.has-error .form-control{border-color:#b94a48;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-error .form-control:focus{border-color:#953b39;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #d59392;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #d59392}
.has-error .input-group-addon{color:#b94a48;background-color:#f2dede;border-color:#b94a48}.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline{color:#468847}
.has-success .form-control{border-color:#468847;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-success .form-control:focus{border-color:#356635;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #7aba7b;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #7aba7b}
.has-success .input-group-addon{color:#468847;background-color:#dff0d8;border-color:#468847}.form-control-static{margin-bottom:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media(min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block}.form-inline .radio,.form-inline .checkbox{display:inline-block;padding-left:0;margin-top:0;margin-bottom:0}.form-inline .radio input[type="radio"],.form-inline .checkbox input[type="checkbox"]{float:none;margin-left:0}}.form-horizontal .control-label,.form-horizontal .radio,.form-horizontal .checkbox,.form-horizontal .radio-inline,.form-horizontal .checkbox-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}.form-horizontal .form-group:before,.form-horizontal .form-group:after{display:table;content:" "}.form-horizontal .form-group:after{clear:both}.form-horizontal .form-group:before,.form-horizontal .form-group:after{display:table;content:" "}.form-horizontal .form-group:after{clear:both}.form-horizontal .form-control-static{padding-top:7px}@media(min-width:768px){.form-horizontal .control-label{text-align:right}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.428571429;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;background-image:none;border:1px solid transparent;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}.btn:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:hover,.btn:focus{color:#333;text-decoration:none}.btn:active,.btn.active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{pointer-events:none;cursor:not-allowed;opacity:.65;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default:hover,.btn-default:focus,.btn-default:active,.btn-default.active,.open .dropdown-toggle.btn-default{color:#000;background-color:#ebebeb;border-color:#adadad}.btn-default:active,.btn-default.active,.open .dropdown-toggle.btn-default{background-image:none}.btn-default.disabled,.btn-default[disabled],fieldset[disabled] .btn-default,.btn-default.disabled:hover,.btn-default[disabled]:hover,fieldset[disabled] .btn-default:hover,.btn-default.disabled:focus,.btn-default[disabled]:focus,fieldset[disabled] .btn-default:focus,.btn-default.disabled:active,.btn-default[disabled]:active,fieldset[disabled] .btn-default:active,.btn-default.disabled.active,.btn-default[disabled].active,fieldset[disabled] .btn-default.active{background-color:#fff;border-color:#ccc}.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd}.btn-primary:hover,.btn-primary:focus,.btn-primary:active,.btn-primary.active,.open .dropdown-toggle.btn-primary{color:#fff;background-color:#3276b1;border-color:#285e8e}.btn-primary:active,.btn-primary.active,.open .dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled,.btn-primary[disabled],fieldset[disabled] .btn-primary,.btn-primary.disabled:hover,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary:hover,.btn-primary.disabled:focus,.btn-primary[disabled]:focus,fieldset[disabled] .btn-primary:focus,.btn-primary.disabled:active,.btn-primary[disabled]:active,fieldset[disabled] .btn-primary:active,.btn-primary.disabled.active,.btn-primary[disabled].active,fieldset[disabled] .btn-primary.active{background-color:#428bca;border-color:#357ebd}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning:hover,.btn-warning:focus,.btn-warning:active,.btn-warning.active,.open .dropdown-toggle.btn-warning{color:#fff;background-color:#ed9c28;border-color:#d58512}.btn-warning:active,.btn-warning.active,.open .dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled,.btn-warning[disabled],fieldset[disabled] .btn-warning,.btn-warning.disabled:hover,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning:hover,.btn-warning.disabled:focus,.btn-warning[disabled]:focus,fieldset[disabled] .btn-warning:focus,.btn-warning.disabled:active,.btn-warning[disabled]:active,fieldset[disabled] .btn-warning:active,.btn-warning.disabled.active,.btn-warning[disabled].active,fieldset[disabled] .btn-warning.active{background-color:#f0ad4e;border-color:#eea236}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger:hover,.btn-danger:focus,.btn-danger:active,.btn-danger.active,.open .dropdown-toggle.btn-danger{color:#fff;background-color:#d2322d;border-color:#ac2925}.btn-danger:active,.btn-danger.active,.open .dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled,.btn-danger[disabled],fieldset[disabled] .btn-danger,.btn-danger.disabled:hover,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger:hover,.btn-danger.disabled:focus,.btn-danger[disabled]:focus,fieldset[disabled] .btn-danger:focus,.btn-danger.disabled:active,.btn-danger[disabled]:active,fieldset[disabled] .btn-danger:active,.btn-danger.disabled.active,.btn-danger[disabled].active,fieldset[disabled] .btn-danger.active{background-color:#d9534f;border-color:#d43f3a}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success:hover,.btn-success:focus,.btn-success:active,.btn-success.active,.open .dropdown-toggle.btn-success{color:#fff;background-color:#47a447;border-color:#398439}.btn-success:active,.btn-success.active,.open .dropdown-toggle.btn-success{background-image:none}.btn-success.disabled,.btn-success[disabled],fieldset[disabled] .btn-success,.btn-success.disabled:hover,.btn-success[disabled]:hover,fieldset[disabled] .btn-success:hover,.btn-success.disabled:focus,.btn-success[disabled]:focus,fieldset[disabled] .btn-success:focus,.btn-success.disabled:active,.btn-success[disabled]:active,fieldset[disabled] .btn-success:active,.btn-success.disabled.active,.btn-success[disabled].active,fieldset[disabled]
.btn-success.active{background-color:#5cb85c;border-color:#4cae4c}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info:hover,.btn-info:focus,.btn-info:active,.btn-info.active,.open .dropdown-toggle.btn-info{color:#fff;background-color:#39b3d7;border-color:#269abc}.btn-info:active,.btn-info.active,.open .dropdown-toggle.btn-info{background-image:none}
.btn-info.disabled,.btn-info[disabled],fieldset[disabled] .btn-info,.btn-info.disabled:hover,.btn-info[disabled]:hover,fieldset[disabled] .btn-info:hover,.btn-info.disabled:focus,.btn-info[disabled]:focus,fieldset[disabled] .btn-info:focus,.btn-info.disabled:active,.btn-info[disabled]:active,fieldset[disabled] .btn-info:active,.btn-info.disabled.active,.btn-info[disabled].active,fieldset[disabled] .btn-info.active{background-color:#5bc0de;border-color:#46b8da}
.btn-link{font-weight:400;color:#428bca;cursor:pointer;border-radius:0}.btn-link,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:hover,.btn-link:focus,.btn-link:active{border-color:transparent}.btn-link:hover,.btn-link:focus{color:#2a6496;text-decoration:underline;background-color:transparent}.btn-link[disabled]:hover,fieldset[disabled] .btn-link:hover,.btn-link[disabled]:focus,fieldset[disabled] .btn-link:focus{color:#999;text-decoration:none}.btn-lg{padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}.btn-sm,.btn-xs{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-xs{padding:1px 5px}.btn-block{display:block;width:100%;padding-right:0;padding-left:0}.btn-block+.btn-block{margin-top:5px}input[type="submit"].btn-block,input[type="reset"].btn-block,input[type="button"].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition:height .35s ease;transition:height .35s ease}@font-face{font-family:'Glyphicons Halflings'}.glyphicon{position:relative;display:inline-block;-webkit-font-smoothing:antialiased;font-style:normal;font-weight:400;line-height:1;-moz-osx-font-smoothing:grayscale}.glyphicon:empty{width:1em}.glyphicon-asterisk:before{content:"\2a"}.glyphicon-plus:before{content:"\2b"}.glyphicon-euro:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px solid #000;border-right:4px solid transparent;border-bottom:0 dotted;border-left:4px solid transparent}.dropdown-toggle:focus{outline:0}.open>a{outline:0}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.428571429;color:#999}.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}@media(min-width:768px){}.btn-default .caret{border-top-color:#333}.btn-primary .caret,.btn-success .caret,.btn-warning .caret,.btn-danger .caret,.btn-info .caret{border-top-color:#fff}.dropup .btn-default .caret{border-bottom-color:#333}.dropup .btn-primary .caret,.dropup .btn-success .caret,.dropup .btn-warning .caret,.dropup .btn-danger .caret,.dropup .btn-info .caret{border-bottom-color:#fff}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group>.btn,.btn-group-vertical>.btn{position:relative;float:left}.btn-group>.btn:hover,.btn-group-vertical>.btn:hover,.btn-group>.btn:focus,.btn-group-vertical>.btn:focus,.btn-group>.btn:active,.btn-group-vertical>.btn:active,.btn-group>.btn.active,.btn-group-vertical>.btn.active{z-index:2}.btn-group>.btn:focus,.btn-group-vertical>.btn:focus{outline:0}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar:before,.btn-toolbar:after{display:table;content:" "}.btn-toolbar:after{clear:both}.btn-toolbar:before,.btn-toolbar:after{display:table;content:" "}.btn-toolbar:after{clear:both}.btn-toolbar .btn-group{float:left}.btn-toolbar>.btn+.btn,.btn-toolbar>.btn-group+.btn,.btn-toolbar>.btn+.btn-group,.btn-toolbar>.btn-group+.btn-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-bottom-left-radius:0;border-top-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child>.btn:last-child,.btn-group>.btn-group:first-child>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child>.btn:first-child{border-bottom-left-radius:0;border-top-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group-xs>.btn{padding:5px 10px;padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.btn-group-sm>.btn{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-group-lg>.btn{padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group:before,.btn-group-vertical>.btn-group:after{display:table;content:" "}.btn-group-vertical>.btn-group:after{clear:both}.btn-group-vertical>.btn-group:before,.btn-group-vertical>.btn-group:after{display:table;content:" "}.btn-group-vertical>.btn-group:after{clear:both}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-right-radius:0;border-bottom-left-radius:4px;border-top-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child>.btn:last-child,.btn-group-vertical>.btn-group:first-child>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child>.btn:first-child{border-top-right-radius:0;border-top-left-radius:0}.btn-group-justified{display:table;width:100%;border-collapse:separate;table-layout:fixed}.btn-group-justified .btn{display:table-cell;float:none;width:1%}[data-toggle="buttons"]>.btn>input[type="radio"],[data-toggle="buttons"]>.btn>input[type="checkbox"]{display:none}.input-group{position:relative;display:table;border-collapse:separate}.input-group.col{float:none;padding-right:0;padding-left:0}.input-group .form-control{width:100%;margin-bottom:0}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:45px;padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:45px;line-height:45px}textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{height:auto}.input-group-addon,.input-group-btn,.input-group .form-control{display:table-cell}.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child),.input-group .form-control:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type="radio"],.input-group-addon input[type="checkbox"]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:last-child>.btn,.input-group-btn:last-child>.dropdown-toggle,.input-group-btn:first-child>.btn:not(:first-child){border-bottom-left-radius:0;border-top-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;white-space:nowrap}.input-group-btn:first-child>.btn{margin-right:-1px}.input-group-btn:last-child>.btn{margin-left:-1px}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-4px}.input-group-btn>.btn:hover,.input-group-btn>.btn:active{z-index:2}.nav{padding-left:15px;margin-bottom:0;list-style:none}.nav:before,.nav:after{display:table;content:" "}.nav:after{clear:both}.nav:before,.nav:after{display:table;content:" "}.nav:after{clear:both}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:hover,.nav>li>a:focus{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#999}.nav>li.disabled>a:hover,.nav>li.disabled>a:focus{color:#999;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:hover,.nav .open>a:focus{background-color:#eee;border-color:#428bca}.nav .open>a .caret,.nav .open>a:hover .caret,.nav .open>a:focus .caret{border-top-color:#2a6496;border-bottom-color:#2a6496}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.428571429;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}@media(min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border:1px solid #ddd}@media(min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:hover,.nav-pills>li.active>a:focus{color:#fff;background-color:#428bca}.nav-pills>li.active>a .caret,.nav-pills>li.active>a:hover .caret,.nav-pills>li.active>a:focus .caret{border-top-color:#fff;border-bottom-color:#fff}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}@media(min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border:1px solid #ddd}@media(min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav .caret{border-top-color:#428bca;border-bottom-color:#428bca}.nav a:hover .caret{border-top-color:#fff;border-bottom-color:#fff}.navbar:after{clear:both}.navbar:after{clear:both}@media(min-width:768px){}.navbar-header:before,.navbar-header:after{display:table;content:" "}.navbar-header:after{clear:both}.navbar-header:before,.navbar-header:after{display:table;content:" "}.navbar-header:after{clear:both}@media(min-width:768px){.navbar-header{float:left}}@media(min-width:768px){}@media(min-width:768px){}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media(min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030}@media(min-width:768px){.navbar-fixed-top,.navbar-fixed-bottom{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;padding:15px;font-size:18px;line-height:20px}.navbar-brand:hover,.navbar-brand:focus{text-decoration:none}@media(min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;border:1px solid transparent;border-radius:4px}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media(min-width:768px){.navbar-toggle{display:none}}@media(max-width:767px){}@media(min-width:768px){}@media(min-width:768px){.navbar-left{float:left!important;margin-top:20px;margin-left:120px;width:465px}}.navbar-form{padding:10px 15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.1);margin:8px -15px}@media(min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block}.navbar-form .radio,.navbar-form .checkbox{display:inline-block;padding-left:0;margin-top:0;margin-bottom:0}.navbar-form .radio input[type="radio"],.navbar-form .checkbox input[type="checkbox"]{float:none;margin-left:0}}@media(max-width:767px){.navbar-form .form-group{margin-bottom:5px}}@media(min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-text{float:left;margin-top:15px;margin-bottom:15px}@media(min-width:768px){.navbar-text{margin-right:15px;margin-left:15px}.navbar-default{background-color:#fff;border-color:#e7e7e7;height:100px;border-bottom:1px solid #c7c7c7;box-shadow:0 0 4px rgba(0,0,0,0.55);width:100%}}.navbar-default{background-color:#fff;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:hover,.navbar-default .navbar-brand:focus{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-text{color:#777}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#ccc}@media(max-width:767px){}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#999}.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-brand:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#999}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:hover,.navbar-inverse .navbar-toggle:focus{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}@media(max-width:767px){}.navbar-inverse .navbar-link{color:#999}.navbar-inverse .navbar-link:hover{color:#fff}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.breadcrumb>.active{color:#999}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.428571429;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-bottom-left-radius:4px;border-top-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>.active>a,.pagination>.active>span,.pagination>.active>a:hover,.pagination>.active>span:hover,.pagination>.active>a:focus,.pagination>.active>span:focus{z-index:2;color:#fff;cursor:default;background-color:#428bca;border-color:#428bca}.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus{color:#999;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-bottom-left-radius:6px;border-top-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-bottom-left-radius:3px;border-top-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager:before,.pager:after{display:table;content:" "}.pager:after{clear:both}.pager:before,.pager:after{display:table;content:" "}.pager:after{clear:both}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:hover,.pager li>a:focus{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:hover,.pager .disabled>a:focus,.pager .disabled>span{color:#999;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}.label[href]:hover,.label[href]:focus{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.label-default{background-color:#999}.label-default[href]:hover,.label-default[href]:focus{background-color:gray}.label-primary{background-color:#428bca}.label-primary[href]:hover,.label-primary[href]:focus{background-color:#3071a9}.label-success{background-color:#5cb85c}.label-success[href]:hover,.label-success[href]:focus{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:hover,.label-info[href]:focus{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:hover,.label-warning[href]:focus{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:hover,.label-danger[href]:focus{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;background-color:#999;border-radius:10px}.badge:empty{display:none}a.badge:hover,a.badge:focus{color:#fff;text-decoration:none;cursor:pointer}.btn .badge{position:relative;top:-1px}a.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#428bca;background-color:#fff}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding:20px;margin-bottom:10px;font-size:21px;font-weight:200;line-height:1;color:inherit}.jumbotron h1{line-height:1;color:inherit;font-size:23px}.jumbotron p{line-height:1.4}.container .jumbotron{border-radius:6px}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}}.thumbnail{display:inline-block;display:block;height:auto;max-width:100%;padding:4px;margin-bottom:20px;line-height:1.428571429;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.thumbnail>img{display:block;height:auto;max-width:100%;margin-right:auto;margin-left:auto}a.thumbnail:hover,a.thumbnail:focus,a.thumbnail.active{border-color:#428bca}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:700}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable{padding-right:35px}.alert-dismissable .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#468847;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#356635}.alert-info{color:#3a87ad;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#2d6987}.alert-warning{color:#c09853;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#a47e3c}.alert-danger{color:#b94a48;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#953b39}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-moz-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:0 0}to{background-position:40px 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1)}.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#428bca;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);-webkit-transition:width .6s ease;transition:width .6s ease}.progress-striped .progress-bar{background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-size:40px 40px}.progress.active .progress-bar{-webkit-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar-success{background-color:#5cb85c}.progress-striped .progress-bar-success{background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-bar-info{background-color:#5bc0de}.progress-striped .progress-bar-info{background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-bar-warning{background-color:#f0ad4e}.progress-striped .progress-bar-warning{background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-bar-danger{background-color:#d9534f}.progress-striped .progress-bar-danger{background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.media,.media-body{overflow:hidden;zoom:1}.media,.media .media{margin-top:15px}.media:first-child{margin-top:0}.media-object{display:block}.media-heading{margin:0 0 5px}.media>.pull-left{margin-right:10px}.media>.pull-right{margin-left:10px}.media-list{padding-left:0;list-style:none}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-right-radius:4px;border-top-left-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}a.list-group-item{color:#555}a.list-group-item .list-group-item-heading{color:#333}a.list-group-item:hover,a.list-group-item:focus{text-decoration:none;background-color:#f5f5f5}a.list-group-item.active,a.list-group-item.active:hover,a.list-group-item.active:focus{z-index:2;color:#fff;background-color:#428bca;border-color:#428bca}a.list-group-item.active .list-group-item-heading,a.list-group-item.active:hover .list-group-item-heading,a.list-group-item.active:focus .list-group-item-heading{color:inherit}a.list-group-item.active .list-group-item-text,a.list-group-item.active:hover .list-group-item-text,a.list-group-item.active:focus .list-group-item-text{color:#e1edf7}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.05);box-shadow:0 1px 1px rgba(0,0,0,0.05)}.panel-body{padding:15px}.panel-body:before,.panel-body:after{display:table;content:" "}.panel-body:after{clear:both}.panel-body:before,.panel-body:after{display:table;content:" "}.panel-body:after{clear:both}.panel>.list-group{margin-bottom:0}.panel>.list-group .list-group-item{border-width:1px 0}.panel>.list-group .list-group-item:first-child{border-top-right-radius:0;border-top-left-radius:0}.panel>.list-group .list-group-item:last-child{border-bottom:0}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.panel>.table,.panel>.table-responsive{margin-bottom:0}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive{border-top:1px solid #ddd}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.panel>.table-bordered>thead>tr:last-child>th,.panel>.table-responsive>.table-bordered>thead>tr:last-child>th,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th,.panel>.table-bordered>thead>tr:last-child>td,.panel>.table-responsive>.table-bordered>thead>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-right-radius:3px;border-top-left-radius:3px}.panel-title{margin-top:0;margin-bottom:0;font-size:16px}.panel-title>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel-group .panel{margin-bottom:0;overflow:hidden;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse .panel-body{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse .panel-body{border-top-color:#ddd}.panel-default>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#428bca}.panel-primary>.panel-heading{color:#fff;background-color:#428bca;border-color:#428bca}.panel-primary>.panel-heading+.panel-collapse .panel-body{border-top-color:#428bca}.panel-primary>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#428bca}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#468847;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse .panel-body{border-top-color:#d6e9c6}.panel-success>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#d6e9c6}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#c09853;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse .panel-body{border-top-color:#faebcc}.panel-warning>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#b94a48;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse .panel-body{border-top-color:#ebccd1}.panel-danger>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#ebccd1}.panel-info{-moz-box-shadow:0 0 4px rgba(0,0,0,0.55);box-shadow:0 0 4px rgba(0,0,0,0.55)}.panel-info>.panel-heading{color:#3a87ad;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse .panel-body{border-top-color:#bce8f1}.panel-info>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#bce8f1}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,0.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.2;filter:alpha(opacity=20)}.close:hover,.close:focus{color:#000;text-decoration:none;cursor:pointer;opacity:.5;filter:alpha(opacity=50)}button.close{padding:0;cursor:pointer;background:transparent;border:0;-webkit-appearance:none}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;display:none;overflow:auto;overflow-y:scroll}.modal.fade .modal-dialog{-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);transform:translate(0,-25%);-webkit-transition:-webkit-transform .3s ease-out;-moz-transition:-moz-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0)}.modal-dialog{position:relative;z-index:1050;width:auto;padding:10px;margin-right:auto;margin-left:auto}.modal-content{position:relative;background-color:#fff;border:1px solid #999;border:1px solid rgba(0,0,0,0.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,0.5);box-shadow:0 3px 9px rgba(0,0,0,0.5);background-clip:padding-box}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1030;background-color:#000}.modal-backdrop.fade{opacity:0;filter:alpha(opacity=0)}.modal-backdrop.in{opacity:.5;filter:alpha(opacity=50)}.modal-header{min-height:16.428571429px;padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.428571429}.modal-body{position:relative;padding:20px}.modal-footer{padding:19px 20px 20px;margin-top:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer:before,.modal-footer:after{display:table;content:" "}.modal-footer:after{clear:both}.modal-footer:before,.modal-footer:after{display:table;content:" "}.modal-footer:after{clear:both}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}@media screen and (min-width:768px){.modal-dialog{width:600px;padding-top:30px;padding-bottom:30px}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,0.5);box-shadow:0 5px 15px rgba(0,0,0,0.5)}}.tooltip.in{opacity:.9;filter:alpha(opacity=90)}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;text-decoration:none;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-top-color:#000;border-width:5px 5px 0}.tooltip.top-left .tooltip-arrow{bottom:0;left:5px;border-top-color:#000;border-width:5px 5px 0}.tooltip.top-right .tooltip-arrow{right:5px;bottom:0;border-top-color:#000;border-width:5px 5px 0}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-right-color:#000;border-width:5px 5px 5px 0}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-left-color:#000;border-width:5px 0 5px 5px}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-bottom-color:#000;border-width:0 5px 5px}.tooltip.bottom-left .tooltip-arrow{top:0;left:5px;border-bottom-color:#000;border-width:0 5px 5px}.tooltip.bottom-right .tooltip-arrow{top:0;right:5px;border-bottom-color:#000;border-width:0 5px 5px}.popover{position:absolute;top:0;left:0;z-index:1010;display:none;max-width:276px;padding:1px;text-align:left;white-space:normal;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.2);box-shadow:0 5px 10px rgba(0,0,0,0.2);background-clip:padding-box}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{padding:8px 14px;margin:0;font-size:14px;font-weight:400;line-height:18px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover .arrow,.popover .arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover .arrow{border-width:11px}.popover .arrow:after{border-width:10px;content:""}.popover.top .arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,0.25);border-bottom-width:0}.popover.top .arrow:after{bottom:1px;margin-left:-10px;border-top-color:#fff;border-bottom-width:0;content:" "}.popover.right .arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,0.25);border-left-width:0}.popover.right .arrow:after{bottom:-10px;left:1px;border-right-color:#fff;border-left-width:0;content:" "}.popover.bottom .arrow{top:-11px;left:50%;margin-left:-11px;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,0.25);border-top-width:0}.popover.bottom .arrow:after{top:1px;margin-left:-10px;border-bottom-color:#fff;border-top-width:0;content:" "}.popover.left .arrow{top:50%;right:-11px;margin-top:-11px;border-left-color:#999;border-left-color:rgba(0,0,0,0.25);border-right-width:0}.popover.left .arrow:after{right:1px;bottom:-10px;border-left-color:#fff;border-right-width:0;content:" "}.carousel{position:relative}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;height:auto;max-width:100%;line-height:1}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,0.6);opacity:.5;filter:alpha(opacity=50)}.carousel-control.left{background-image:-webkit-gradient(linear,0 top,100% top,from(rgba(0,0,0,0.5)),to(rgba(0,0,0,0.0001)));background-image:-webkit-linear-gradient(left,color-stop(rgba(0,0,0,0.5) 0),color-stop(rgba(0,0,0,0.0001) 100%));background-image:-moz-linear-gradient(left,rgba(0,0,0,0.5) 0,rgba(0,0,0,0.0001) 100%);background-image:linear-gradient(to right,rgba(0,0,0,0.5) 0,rgba(0,0,0,0.0001) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000',endColorstr='#26262600',GradientType=1)}.carousel-control.right{right:0;left:auto;background-image:-webkit-gradient(linear,0 top,100% top,from(rgba(0,0,0,0.0001)),to(rgba(0,0,0,0.5)));background-image:-webkit-linear-gradient(left,color-stop(rgba(0,0,0,0.0001) 0),color-stop(rgba(0,0,0,0.5) 100%));background-image:-moz-linear-gradient(left,rgba(0,0,0,0.0001) 0,rgba(0,0,0,0.5) 100%);background-image:linear-gradient(to right,rgba(0,0,0,0.0001) 0,rgba(0,0,0,0.5) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#26262600',endColorstr='#80000000',GradientType=1)}.carousel-control:hover,.carousel-control:focus{color:#fff;text-decoration:none;opacity:.9;filter:alpha(opacity=90)}.carousel-control .icon-prev,.carousel-control .icon-next,.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right{position:absolute;top:50%;z-index:5;display:inline-block}.carousel-control .icon-prev,.carousel-control .glyphicon-chevron-left{left:50%}.carousel-control .icon-next,.carousel-control .glyphicon-chevron-right{right:50%}.carousel-control .icon-prev,.carousel-control .icon-next{width:20px;height:20px;margin-top:-10px;margin-left:-10px;font-family:serif}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000 \9;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,0.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicons-chevron-left,.carousel-control .glyphicons-chevron-right,.carousel-control .icon-prev,.carousel-control .icon-next{width:30px;height:30px;margin-top:-15px;margin-left:-15px;font-size:30px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.clearfix:before,.clearfix:after{display:table;content:" "}.clearfix:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important;visibility:hidden!important}.affix{position:fixed}.visible-xs,tr.visible-xs,th.visible-xs,td.visible-xs{display:none!important}@media(max-width:767px){.visible-xs{display:block!important}tr.visible-xs{display:table-row!important}th.visible-xs,td.visible-xs{display:table-cell!important}}@media(min-width:768px) and (max-width:991px){.visible-xs.visible-sm{display:block!important}tr.visible-xs.visible-sm{display:table-row!important}th.visible-xs.visible-sm,td.visible-xs.visible-sm{display:table-cell!important}}@media(min-width:992px) and (max-width:1199px){.visible-xs.visible-md{display:block!important}tr.visible-xs.visible-md{display:table-row!important}th.visible-xs.visible-md,td.visible-xs.visible-md{display:table-cell!important}}@media(min-width:1200px){.visible-xs.visible-lg{display:block!important}tr.visible-xs.visible-lg{display:table-row!important}th.visible-xs.visible-lg,td.visible-xs.visible-lg{display:table-cell!important}}.visible-sm,tr.visible-sm,th.visible-sm,td.visible-sm{display:none!important}@media(max-width:767px){.visible-sm.visible-xs{display:block!important}tr.visible-sm.visible-xs{display:table-row!important}th.visible-sm.visible-xs,td.visible-sm.visible-xs{display:table-cell!important}}@media(min-width:768px) and (max-width:991px){.visible-sm{display:block!important}tr.visible-sm{display:table-row!important}th.visible-sm,td.visible-sm{display:table-cell!important}}@media(min-width:992px) and (max-width:1199px){.visible-sm.visible-md{display:block!important}tr.visible-sm.visible-md{display:table-row!important}th.visible-sm.visible-md,td.visible-sm.visible-md{display:table-cell!important}}@media(min-width:1200px){.visible-sm.visible-lg{display:block!important}tr.visible-sm.visible-lg{display:table-row!important}th.visible-sm.visible-lg,td.visible-sm.visible-lg{display:table-cell!important}}.visible-md,tr.visible-md,th.visible-md,td.visible-md{display:none!important}@media(max-width:767px){.visible-md.visible-xs{display:block!important}tr.visible-md.visible-xs{display:table-row!important}th.visible-md.visible-xs,td.visible-md.visible-xs{display:table-cell!important}}@media(min-width:768px) and (max-width:991px){.visible-md.visible-sm{display:block!important}tr.visible-md.visible-sm{display:table-row!important}th.visible-md.visible-sm,td.visible-md.visible-sm{display:table-cell!important}}@media(min-width:992px) and (max-width:1199px){.visible-md{display:block!important}tr.visible-md{display:table-row!important}th.visible-md,td.visible-md{display:table-cell!important}}@media(min-width:1200px){.visible-md.visible-lg{display:block!important}tr.visible-md.visible-lg{display:table-row!important}th.visible-md.visible-lg,td.visible-md.visible-lg{display:table-cell!important}}.visible-lg,tr.visible-lg,th.visible-lg,td.visible-lg{display:none!important}@media(max-width:767px){.visible-lg.visible-xs{display:block!important}tr.visible-lg.visible-xs{display:table-row!important}th.visible-lg.visible-xs,td.visible-lg.visible-xs{display:table-cell!important}}@media(min-width:768px) and (max-width:991px){.visible-lg.visible-sm{display:block!important}tr.visible-lg.visible-sm{display:table-row!important}th.visible-lg.visible-sm,td.visible-lg.visible-sm{display:table-cell!important}.navbar-left{float:left!important;margin-top:20px;width:465px}}@media(min-width:992px) and (max-width:1199px){.visible-lg.visible-md{display:block!important}tr.visible-lg.visible-md{display:table-row!important}th.visible-lg.visible-md,td.visible-lg.visible-md{display:table-cell!important}}@media(min-width:1200px){.visible-lg{display:block!important}tr.visible-lg{display:table-row!important}th.visible-lg,td.visible-lg{display:table-cell!important}}.hidden-xs{display:block!important}tr.hidden-xs{display:table-row!important}th.hidden-xs,td.hidden-xs{display:table-cell!important}@media(max-width:767px){.hidden-xs,tr.hidden-xs,th.hidden-xs,td.hidden-xs{display:none!important}}@media(min-width:768px) and (max-width:991px){.hidden-xs.hidden-sm,tr.hidden-xs.hidden-sm,th.hidden-xs.hidden-sm,td.hidden-xs.hidden-sm{display:none!important}}@media(min-width:992px) and (max-width:1199px){.hidden-xs.hidden-md,tr.hidden-xs.hidden-md,th.hidden-xs.hidden-md,td.hidden-xs.hidden-md{display:none!important}}@media(min-width:1200px){.hidden-xs.hidden-lg,tr.hidden-xs.hidden-lg,th.hidden-xs.hidden-lg,td.hidden-xs.hidden-lg{display:none!important}}.hidden-sm{display:block!important}tr.hidden-sm{display:table-row!important}th.hidden-sm,td.hidden-sm{display:table-cell!important}@media(max-width:767px){.hidden-sm.hidden-xs,tr.hidden-sm.hidden-xs,th.hidden-sm.hidden-xs,td.hidden-sm.hidden-xs{display:none!important}}@media(min-width:768px) and (max-width:991px){.hidden-sm,tr.hidden-sm,th.hidden-sm,td.hidden-sm{display:none!important}}@media(min-width:992px) and (max-width:1199px){.hidden-sm.hidden-md,tr.hidden-sm.hidden-md,th.hidden-sm.hidden-md,td.hidden-sm.hidden-md{display:none!important}}@media(min-width:1200px){.hidden-sm.hidden-lg,tr.hidden-sm.hidden-lg,th.hidden-sm.hidden-lg,td.hidden-sm.hidden-lg{display:none!important}}.hidden-md{display:block!important}tr.hidden-md{display:table-row!important}th.hidden-md,td.hidden-md{display:table-cell!important}@media(max-width:767px){.hidden-md.hidden-xs,tr.hidden-md.hidden-xs,th.hidden-md.hidden-xs,td.hidden-md.hidden-xs{display:none!important}}@media(min-width:768px) and (max-width:991px){.hidden-md.hidden-sm,tr.hidden-md.hidden-sm,th.hidden-md.hidden-sm,td.hidden-md.hidden-sm{display:none!important}}@media(min-width:992px) and (max-width:1199px){.hidden-md,tr.hidden-md,th.hidden-md,td.hidden-md{display:none!important}}@media(min-width:1200px){.hidden-md.hidden-lg,tr.hidden-md.hidden-lg,th.hidden-md.hidden-lg,td.hidden-md.hidden-lg{display:none!important}}.hidden-lg{display:block!important}tr.hidden-lg{display:table-row!important}th.hidden-lg,td.hidden-lg{display:table-cell!important}@media(max-width:767px){.hidden-lg.hidden-xs,tr.hidden-lg.hidden-xs,th.hidden-lg.hidden-xs,td.hidden-lg.hidden-xs{display:none!important}#my-content{display:none}#moterdroit{display:none}#countdown{position:relative;margin-top:-20px;width:100%}#motree{display:none}#image{border:0;max-width:86%;height:auto;margin-left:12px;margin-top:-22px}#afairdown{margin-left:-99px}.carousel-inner{position:relative;width:100%;overflow:hidden}#hotelsaffaire{float:left;color:#FFF;font-size:12px;font-weight:700;width:100px}#hotelsaffairesz{float:left;color:#1d1c1c;text-shadow:0 0 1px rgba(0,0,0,0.24);text-decoration:underline;width:50px;font-size:14px;margin-top:-20px}#hotelspartir{width:80px;font-size:25px;margin-top:0;margin-left:-100px}#hotelaulieu{font-size:25px;margin-top:0}.row{margin-right:-15px;margin-left:-15px;margin-top:25px}#adsenseportable{margin-bottom:10px}#hotelsprtir{width:80px;font-size:25px;margin-top:-25px}#hotelsspartes{float:right;font-size:30px;color:#000}#Adult{display:none}#Enfant{display:none}#age1{display:none}#age2{display:none}#age3{display:none}#Adultes{font-size:12px;color:#000}#Enfants{font-size:12px;color:#000}#Agee1{font-size:12px;color:#000}#Agee12{font-size:12px;color:#000}#Agee13{font-size:12px;color:#000}#pax_adulte{float:left;margin:0 8px 0 0}#pax_enfant{float:left;margin:0 8px 20px 10px}#moter-dest{float:left;width:150%}#chambnorm{float:left;font-size:15px;height:25px;margin:0 8px 0 0;font-weight:400}#agenf_1_1{float:left;margin:0 8px 0 2px;width:19.5%}#agenf_1_2{float:left;margin:0 8px 0 2px;width:19.5%}#agenf_1_3{float:left;margin:0 8px 0 211px;width:19.5%}#agenf_2_1{float:left;margin:0 8px 0 2px;width:19.5%}#agenf_2_2{float:left;margin:0 8px 0 2px;width:19.5%}#agenf_2_3{float:left;margin:0 8px 0 211px;width:19.5%}#agenf_3_1{float:left;margin:0 8px 0 2px;width:19.5%}#agenf_3_2{float:left;margin:0 8px 0 2px;width:19.5%}#agenf_3_3{float:left;margin:0 8px 0 211px;width:19.5%}#agenf_4_1{float:left;margin:0 8px 0 2px;width:19.5%}#agenf_4_2{float:left;margin:0 8px 0 2px;width:19.5%}#agenf_4_3{float:left;margin:0 8px 0 211px;width:19.5%}#agenf_5_1{float:left;margin:0 8px 0 2px;width:19.5%}#agenf_5_2{float:left;margin:0 8px 0 2px;width:19.5%}#agenf_5_3{float:left;margin:0 8px 0 211px;width:19.5%}.styled-select select{border:0 none;width:100%;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;font-size:14px;height:23px}#drapeautunisie{float:right;background-image:url(http://tn.tunisiebooking.com/theme/images/drapeau.gif);background-repeat:no-repeat;height:23px;background-position:0 0;width:34px;margin:-20px 0 0 10px}#drapeaufrance{float:right;background-image:url(http://tn.tunisiebooking.com/theme/images/drapeau.gif);background-position:-34px 0;background-repeat:no-repeat;height:23px;width:34px;margin:-20px 40px 0 5px;cursor:pointer}#bakgroundphoto{background-size:170% auto}#bakgrounoffre{clear:both;height:40px;background:url(http://tn.tunisiebooking.com/theme/images/icon_offre_special.png) no-repeat 200px -147px;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;font-size:14px;font-weight:700;color:#000;padding:10px;margin-left:0}.carousel-inner{position:relative;width:100%;overflow:hidden}#menuresp1{display:none}#adsenseordinateur{display:none}}@media(min-width:768px) and (max-width:991px){#Adultes{display:none}#Enfants{display:none}.row{margin-right:-15px;margin-left:-15px;margin-top:85px}#age1{float:left;width:11.5%}#age2{float:left;width:11.5%}#age3{float:left;width:11.5%}#Agee1{display:none}#Agee12{display:none}#Agee13{display:none}#pax_adulte{float:left;width:7.5%;margin:0 8px 0 0}#agenf_1_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_1_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_1_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_2_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_2_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_2_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_3_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_3_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_3_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_4_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_4_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_4_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_5_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_5_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_5_3{float:left;margin:0 8px 0 2px;width:7.5%}#pax_enfant{float:left;width:7.5%;margin:0 8px 0 0}#Adult{float:left;width:7.5%;margin:0 8px 0 0}#Enfant{float:left;width:8.5%;margin:0 8px 0 0}#footeres{margin-left:100px}.styled-select select{background:none repeat scroll 0 0 transparent;border:0 none;width:100%;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;font-size:14px;height:23px}#chambnorm{float:left;font-size:15px;height:25px;width:15%;margin:0 8px 0 0;font-weight:400}#hotelsspartes{float:right;font-size:36px;color:#000}#drapeautunisie{background-image:url(http://tn.tunisiebooking.com/theme/images/drapeau.gif);background-repeat:no-repeat;height:23px;background-position:0 0;width:34px;margin:-20px 0 0 10px;margin-left:960px}#drapeaufrance{float:left;background-image:url(http://tn.tunisiebooking.com/theme/images/drapeau.gif);background-position:-34px 0;background-repeat:no-repeat;height:23px;width:34px;margin:-20px 40px 0 5px;cursor:pointer;margin-left:1000px}#moterdestsa{clear:both;margin-left:40px}#menuresp{display:none}#offrespecial{margin-left:60px}#bodyresponsive{clear:both;margin:8px auto 0;max-width:1065px}#adsenseportable{display:none}#bakgroundphoto{background-size:100% auto}#bakgrounoffre{clear:both;height:40px;background:url(http://tn.tunisiebooking.com/theme/images/icon_offre_special.png) no-repeat 200px -147px;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;font-size:14px;font-weight:700;color:#000;padding:10px;margin-left:27px}.carousel-inner{position:relative;width:100%;overflow:hidden;margin:0}.hidden-lg,tr.hidden-lg,th.hidden-lg,td.hidden-lg{display:none!important}}@media(min-width:992px) and (max-width:1199px){#Adultes{display:none}#Enfants{display:none}#age1{float:left;width:11.5%}#age2{float:left;width:11.5%}#age3{float:left;width:11.5%}.row{margin-right:-15px;margin-left:-15px;margin-top:85px}#Agee1{display:none}#Agee12{display:none}#Agee13{display:none}#pax_adulte{float:left;width:7.5%;margin:0 8px 0 0}#agenf_1_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_1_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_1_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_2_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_2_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_2_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_3_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_3_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_3_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_4_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_4_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_4_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_5_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_5_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_5_3{float:left;margin:0 8px 0 2px;width:7.5%}#pax_enfant{float:left;width:7.5%;margin:0 8px 0 0}#Adult{float:left;width:7.5%;margin:0 8px 0 0}#Enfant{float:left;width:8.5%;margin:0 8px 0 0}#footeres{margin-left:100px}.styled-select select{background:none repeat scroll 0 0 transparent;border:0 none;width:100%;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;font-size:14px;height:23px}#chambnorm{float:left;font-size:15px;height:25px;width:15%;margin:0 8px 0 0;font-weight:400}#hotelsspartes{float:right;font-size:36px;color:#000}#drapeautunisie{background-image:url(http://tn.tunisiebooking.com/theme/images/drapeau.gif);background-repeat:no-repeat;height:23px;background-position:0 0;width:34px;margin:-20px 0 0 10px;margin-left:960px}#drapeaufrance{float:left;background-image:url(http://tn.tunisiebooking.com/theme/images/drapeau.gif);background-position:-34px 0;background-repeat:no-repeat;height:23px;width:34px;margin:-20px 40px 0 5px;cursor:pointer;margin-left:1000px}#moterdestsa{clear:both;margin-left:40px}#menuresp{display:none}#offrespecial{margin-left:60px}#bodyresponsive{clear:both;margin:8px auto 0;max-width:1065px}#adsenseportable{display:none}#bakgroundphoto{background-size:100% auto}#bakgrounoffre{clear:both;height:40px;background:url(http://tn.tunisiebooking.com/theme/images/icon_offre_special.png) no-repeat 200px -147px;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;font-size:14px;font-weight:700;color:#000;padding:10px;margin-left:27px}.carousel-inner{position:relative;width:100%;overflow:hidden;margin:0}.hidden-lg,tr.hidden-lg,th.hidden-lg,td.hidden-lg{display:none!important}}@media(min-width:1200px){.row{margin-right:-15px;margin-left:-15px;margin-top:85px}#Adultes{display:none}#Enfants{display:none}#age1{float:left;width:11.5%}#age2{float:left;width:11.5%}#age3{float:left;width:11.5%}#Agee1{display:none}#Agee12{display:none}#Agee13{display:none}#pax_adulte{float:left;width:7.5%;margin:0 8px 0 0}#agenf_1_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_1_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_1_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_2_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_2_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_2_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_3_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_3_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_3_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_4_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_4_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_4_3{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_5_1{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_5_2{float:left;margin:0 8px 0 2px;width:7.5%}#agenf_5_3{float:left;margin:0 8px 0 2px;width:7.5%}#pax_enfant{float:left;width:7.5%;margin:0 8px 0 0}#Adult{float:left;width:7.5%;margin:0 8px 0 0}#Enfant{float:left;width:8.5%;margin:0 8px 0 0}#footeres{margin-left:100px}.styled-select select{background:none repeat scroll 0 0 transparent;border:0 none;width:100%;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;font-size:14px;height:23px}#chambnorm{float:left;font-size:15px;height:25px;width:15%;margin:0 8px 0 0;font-weight:400}#hotelsspartes{float:right;font-size:36px;color:#000}#drapeautunisie{background-image:url(http://tn.tunisiebooking.com/theme/images/drapeau.gif);background-repeat:no-repeat;height:23px;background-position:0 0;width:34px;margin:-20px 0 0 10px;margin-left:960px}#drapeaufrance{float:left;background-image:url(http://tn.tunisiebooking.com/theme/images/drapeau.gif);background-position:-34px 0;background-repeat:no-repeat;height:23px;width:34px;margin:-20px 40px 0 5px;cursor:pointer;margin-left:1000px}#moterdestsa{clear:both;margin-left:40px}#menuresp{display:none}#offrespecial{margin-left:60px}#bodyresponsive{clear:both;margin:8px auto 0;max-width:1065px}#adsenseportable{display:none}#bakgroundphoto{background-size:100% auto}#bakgrounoffre{clear:both;height:40px;background:url(http://tn.tunisiebooking.com/theme/images/icon_offre_special.png) no-repeat 200px -147px;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;font-size:14px;font-weight:700;color:#000;padding:10px;margin-left:27px}.carousel-inner{position:relative;width:100%;overflow:hidden;margin:0}.hidden-lg,tr.hidden-lg,th.hidden-lg,td.hidden-lg{display:none!important}}.visible-print,tr.visible-print,th.visible-print,td.visible-print{display:none!important}@media print{.visible-print{display:block!important}tr.visible-print{display:table-row!important}th.visible-print,td.visible-print{display:table-cell!important}.hidden-print,tr.hidden-print,th.hidden-print,td.hidden-print{display:none!important}}
.entete{width:100%;height:95px;box-shadow:0 0 4px rgba(0,0,0,.55);background-color:#fff}.entete-theme{width:100%;clear:both}.sous-entete{width:1066px;height:100%;margin:0 auto}.logo{float:left;width:489px}.phone{float:right;width:275px}
.logo a img{float:left;width:100%}.phone img{float:right;width:100%}.phone img:first-child{display:block}.phone img:nth-child(2){display:none}.image-theme{width:1066px;margin:0 auto}.imgtheme{float:left;width:100%;position:relative;height:197px}
.imgtheme img{width:100%;position:absolute;height:305px}.conteneur-moteur{width:85%;position:relative;z-index:1;top:10%;margin:0 80px}.entet-moteur{float:left;width:205px;height:23px;padding:13px 0 0 43px;background:url("https://tn.tunisiebooking.com/theme/images/bg-verifier-disponibilite-thematique.png") no-repeat #003480 left center;color:#fff;font-size:19px}.moteur{width:1000px;padding:16px 0 50px 1%;background-color:#003480;-webkit-box-shadow:-2px 2px 5px -1px #333;-moz-box-shadow:-2px 2px 5px -1px #333;box-shadow:-2px 2px 5px -1px #333}#moter-dest{float:left;margin-left:4px;margin-bottom:12px;background:url(../../../images/pos-destination-thematique.png);background-repeat:no-repeat;background-position:left;background-color:#fff;border-radius:4px;border:0}.select_destination_moteur_home{float:left;width:810px;height:38px;-webkit-appearance:none;-moz-appearance:none;appearance:none;padding:4px 0 0 36px;font-size:16px;font-weight:700;background:url(../../../images/flechdest2.png);background-repeat:no-repeat;background-position:right;background-color:#fff;border-radius:4px;border:0}.block_dates_moteur{clear:both}/*#check1,#check2{float:left;width:206px;height:42px;margin:0 6px;background:url("https://tn.tunisiebooking.com/theme/images/bg-dates-thematique.png") no-repeat #fff right}*/#divnuit{float:left;height:20px;color:#fff;font-size:16px;margin:7px 23px 0 35px;line-height:25px;padding-right:25px;background:url("https://tn.tunisiebooking.com/theme/images/bg-nuit-thematique.png") no-repeat #003480 right}.champs_dest{float:left;cursor:pointer}.chambres{float:left}.nombre_chambre{float:left;color:#000}/*.styled-select-nb-ch{float:left;width:237px;font-size:13px;height:42px;padding:13px 0 0 43px;background:url("https://tn.tunisiebooking.com/images/bg-nb-chambres-thematique1.png") no-repeat #fff;border-radius:4px;border:0}*/#cont_arrivee,#cont_depart{float:left;padding:13px 0 0 5px;font-size:13px;font-weight:700}#text-ch{float:left}.virgule{float:left;margin-right:3px}#text-pax{float:left}.conteneur_bouton_moteur{float:right;width:145px;height:42px;margin-right:11px}.conteneur_bouton_moteur button{float:left;cursor:pointer;border:0;padding:0;background-color:#003581;margin-right:53px}.conteneur_bouton_moteur button img{float:left;width:auto;height:auto}#ch2,#ch3,#ch4,#ch5{border-left:1px #ddd solid;display:none}
.moins_desac{color:#c6c6c9}
.trianglebulle{width:100%;float:left;height:10px}
.conteneur-produits{width:1066px;height:55px;margin:0 auto}.sous-conteneur-produits{float:left;background-color:#fff;padding-bottom:10px}.entete-produits{float:left;width:1045px;height:52px;margin-left:10px;margin-top:30px}.entete_p{position:absolute;z-index:0;height:48px;margin:2px 0 0 0;width:1043px;background-color:#fff}
.liste-produits{float:left;width:1045px;padding-bottom:10px;background-color:#e9ebee;margin:0 0 0 10px;-webkit-box-shadow:0 1px 5px 1px #969696;-moz-box-shadow:0 1px 5px 1px #969696;box-shadow:0 1px 5px 1px #969696}
.un-produit{float:left;margin:15px 12px 0 12px;padding:11px;background-color:#fff;-webkit-box-shadow:0 0 5px 1px #a1a1a1;-moz-box-shadow:0 0 5px 1px #a1a1a1;box-shadow:0 0 5px 1px #a1a1a1}.onglet{float:left;height:36px;padding:10px 32px;text-decoration:underline;background:url("https://tn.tunisiebooking.com/theme/images/separatiion-ong-thematique.png") no-repeat top right}.onglet-act{float:left;padding:8px 32px;font-size:22px;height:42px;text-decoration:underline;border-radius:3px 3px 0 0;margin-top:-4px;-webkit-box-shadow:inset 2px 2px 2px -1px #a1a1a1;-moz-box-shadow:inset 2px 2px 2px -1px #a1a1a1;box-shadow:-2px -2px 2px -1px #a1a1a1;background:url("https://tn.tunisiebooking.com/theme/images/bg-act-onglet-thematique.png") no-repeat top right #e9ebee}.image-produit{float:left;height:231px;width:236px;position:relative}.image-produit img{height:100%;width:100%}.detail-produit{float:left;min-height:231px;width:455px;margin-left:21px}.note-prix-bouton{float:left;height:222px;width:272px;border-left:1px #c6c6c6 solid;padding-left:13px;margin-top:5px}.nom-produit{float:left}.nom-hotel{float:left}.nom-hotel a{color:#000;font-size:26px}.categorie-hotel{float:left;color:#ffcd0a;margin-left:5px}.adresse-hotel{float:left;clear:both;color:#7d7d7d;font-size:14px;font-style:italic;padding:2px 0 0 18px;background:url("https://tn.tunisiebooking.com/theme/images/bg-adresse-hotel-thematique.png") no-repeat}.jaime-fb{float:left;clear:both;margin:5px 0}.caracteristiques{float:left;clear:both}.caracteristique{float:left;clear:both}.caracteristique_icon{display:none}.icon-caract{float:left}.nom-caracteristique{float:left;padding-top:6px;width:283px;height:23px;border-bottom:1px #c6c6c6 solid}.plus-caracteristique{float:right;width:51px;height:12px;font-size:17px;cursor:pointer}.text-caracteristique{float:left}.note-tripadvisor{float:left;margin-left:45px}.prix-produit{float:left;margin:58px 0 0 81px;clear:both;display:none}.bouton-produit{float:left;clear:both;margin-top:32px}.note-td{float:left;margin:3px 3px 0 0}.avis-td{float:left;font-size:24px;font-weight:700}.des{float:left;font-size:14px;color:#424242;margin:26px 8px 0 0}.dev{float:left;font-size:14px;margin-top:5px}.prix-prod{float:left;font-size:40px}
.clear_both{clear:both}.ui-datepicker select.ui-datepicker-month,.ui-datepicker select.ui-datepicker-year{background-color:#04c;color:#fff;border:none;font-size:18px;font-weight:700;width:auto;-webkit-appearance:none;-moz-appearance:none;appearance:none}.ui-datepicker .ui-datepicker-title{background-color:#04c;color:#fff;font-size:18px;margin:0 1.8em}
.ui-datepicker-next{background-color:#facd02;opacity:1;height:2em!important;top:3px!important}.ui-datepicker-prev{background-color:#facd02;opacity:1!important;height:2em!important;top:3px!important}.ui-datepicker .ui-datepicker-header{background-color:#fff;border:none}.ui-datepicker .ui-datepicker-next span{background:url(https://tn.tunisiebooking.com/theme/images/fleche-droite-calendrier.png);background-repeat:no-repeat}.ui-datepicker .ui-datepicker-next-hover{background-color:#facd02;color:#fff;border:none}.ui-datepicker .ui-datepicker-prev span{background:url(https://tn.tunisiebooking.com/theme/images/fleche-gauche-calendrier.png);background-repeat:no-repeat}.ui-datepicker .ui-datepicker-prev-hover{background-color:#facd02;color:#fff;border:none}.ui-datepicker th{color:#04c}.ui-state-default,.ui-widget-content .ui-state-default{border:none}.ui-state-disabled,.ui-widget-content .ui-state-disabled{opacity:1;color:#000}.ui-datepicker td span{background-color:#fff;color:#000!important;font-size:17px}.ui-datepicker td a{font-size:16px;background-color:rgba(127,192,226,.43)!important;color:#454545!important}.etiquette{float:left;margin-top:5px;width:100%}.une_etiquette{float:left;padding-bottom:5px}.une_etiquette img{float:left}.txt_etiquette{float:left;color:#282828;font-size:12px;padding:3px 5px}.gratuite{position:absolute;z-index:2;background:url(https://tn.tunisiebooking.com/theme/images/gratuite_enf.png);width:160px;height:50px;color:#fff;text-align:center;font-size:16px;background-repeat:no-repeat;top:12px;left:-10px;padding:5px 5px 5px 50px}.optoffredujoureb{float:left;width:69%;min-height:29px;padding:9px 0 0 14%;font-size:12px;font-family:arial;color:#003581;background-image:url(https://tn.tunisiebooking.com/theme/images/icon_earlybooking_thematique.png);background-repeat:no-repeat}.optoffredujouren{float:left;width:69%;min-height:29px;padding:9px 0 0 12%;font-size:12px;font-family:arial;color:#003581;background-image:url(https://tn.tunisiebooking.com/images/icone_destock.png);background-repeat:no-repeat}.optoffredujourn{float:left;width:75%;min-height:29px;padding:3px 0 0 7%;font-size:17px;font-family:arial;color:#003581;background-image:url(https://tn.tunisiebooking.com/theme/images/coeurs_noce.png);background-repeat:no-repeat}.onglet-region{float:left;text-decoration:underline}.hotels-region{float:left;font-size:14px;clear:both;width:100%;text-align:center}.onglet-act a{color:#000;font-size:22px}.onglet a{color:#000;font-size:17px}.conteneur_footer2{float:left;clear:both;width:100%;background-color:#333;margin-top:20px}.footer2{margin:0 auto;clear:both;width:1066px}.debut_footer_2{float:left;padding:15px 4px;position:relative;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;clear:both}.mode_paiement{width:450px;float:left;color:#fff}.version_francaise{float:right;margin-left:5px}.site_france{float:right;background-image:url(https://tn.tunisiebooking.com/theme/images/petit-drapeau-france.png);cursor:pointer;background-repeat:no-repeat;height:23px;width:34px}.site_tunisie{float:right;margin-left:10px;background-image:url(https://tn.tunisiebooking.com/theme/images/petit-drapeau-tunisie.png);background-repeat:no-repeat;height:23px;width:34px}.plan_site{float:right;font-size:15px;cursor:pointer}.plan_site a{color:#fff}.icons_mode_paiement{float:left;padding:15px 4px;position:relative;font-family:Arial;clear:both;width:1090px;font-size:22px;color:#81b611}.paiement_securise{width:210px;margin-right:2px;height:115px}.versement_bancaire{width:210px;margin-right:2px;height:115px}.paiement_espece{width:210px;margin-right:2px;height:115px}.mondat_postale{width:210px;margin-right:2px;height:115px}.paiement_securise{float:left;background:url(https://tn.tunisiebooking.com/theme/images/icons_paiementv1.jpg)}.paiement_espece{float:left;background:url(https://tn.tunisiebooking.com/theme/images/icons_paiementv1.jpg) -210px 0}.versement_bancaire{float:left;background:url(https://tn.tunisiebooking.com/theme/images/icons_paiementv1.jpg) -420px 0}.mondat_postale{float:left;background:url(https://tn.tunisiebooking.com/theme/images/icons_paiementv1.jpg) -630px 0}.paiment_a_domicile{float:left;margin-right:2px;width:208px;height:115px;background:url(https://tn.tunisiebooking.com/theme/images/icons_paiementv1.jpg) -839px 0}.contact_agence{clear:both;height:180px;float:left}.logo_footer{float:left}.clients_satisfaits,.nos_agences a,.service_client{color:#fff;font-size:15px;font-weight:400;float:left}.clients_satisfaits{height:100%;margin:15px 0 0 40px;padding:0 0 0 40px;background:url(https://tn.tunisiebooking.com/theme/images/icon_smile.png) no-repeat}.sous_clients_satisfaits{float:left;margin-top:5px}.service_client{height:100%;margin:15px 0 0 40px;padding:0 0 0 45px;background:url(https://tn.tunisiebooking.com/theme/images/icon_tel.png) no-repeat}.sous_service_client{float:left;margin-top:5px}.service_ecoute{float:left}.horaire_service,.tel_footer{float:left;clear:both}.nos_agences{float:left;height:100%;margin:15px 0 0 40px;padding:0 0 0 30px;background:url(https://tn.tunisiebooking.com/theme/images/icon_nos_agences.png) no-repeat}.nos_agences a{margin-top:5px}.fleft{float:left;height:100%}#btf{float:left;height:42px;width:145px;background:url(https://tn.tunisiebooking.com/theme/images/boutn-rechercher-thematique.png) no-repeat}@media (max-width:1066px){.entete{float:left;height:auto}.entete-theme{float:left;height:auto}.sous-entete{width:100%}.image-theme{width:100%}.imgtheme{height:auto}.imgtheme img{float:left;position:relative;z-index:unset}.conteneur-moteur{float:left;clear:both;position:absolute;z-index:1;width:100%;margin:0}.logo{width:49.9%}.phone{width:25.8%}.moteur form{float:left;width:100%}.conteneur-produits{width:100%;margin:0 auto}.entete-produits{width:100%;margin-left:0}.entete_p{width:100%}.liste-produits{width:100%;margin:0}.un-produit{width:98%;margin:10px 1%;padding:0}.image-produit{width:23%}.image-produit img{width:100%}.detail-produit{width:43%}.nom-produit{width:100%}.note-prix-bouton{width:27%}.bouton-produit{width:100%}.bouton-produit img{width:100%}.onglet-act{padding:8px 1%}.onglet{padding:8px 1%}.conteneur_footer2{float:left;clear:both;width:100%;background-color:#333}.footer2{margin:0 auto;width:100%}.debut_footer_2{padding:15px 0;position:relative;font-family:Arial;clear:both;float:left;width:100%;font-size:22px;color:#81b611}.mode_paiement{width:60%;float:left;font-size:16px;display:none}.icons_mode_paiement{display:none}.mondat_postale{margin-right:1%;width:18%;height:100%;float:left}.contact_agence{clear:both;height:180px;float:left;width:100%}.logo_footer{display:none}.clients_satisfaits,.nos_agences,.service_client{height:100%;width:25%;float:left;color:#fff;font-size:14px;font-weight:400}.clients_satisfaits{margin:15px 0 0 1%;padding:0 0 0 35px;background:url(https://tn.tunisiebooking.com/theme/images/icon_smile.png) no-repeat}.sous_clients_satisfaits{float:left;margin-top:5px}.service_client{height:100%;margin:15px 0 0 1%;padding:0 0 0 45px;background:url(https://tn.tunisiebooking.com/theme/images/icon_tel.png) no-repeat}.horaire_service,.service_ecoute,.tel_footer{float:left;clear:both}.nos_agences{margin:15px 0 0 1%;padding:0 0 0 30px;background:url(https://tn.tunisiebooking.com/theme/images/icon_nos_agences.png) no-repeat}.etiquette{bottom:auto}}@media (max-width:1020px){.conteneur_bouton_moteur{clear:both;margin-top:10px}.paiement_securise{float:left;width:19%;margin:0 1% 0 0;height:100%;background:url(https://tn.tunisiebooking.com/theme/images/bg-paiement-securise.png);background-size:100% 100%}.versement_bancaire{margin-right:1%;width:18%;height:100%;float:left}}@media (max-width:871px){.conteneur_bouton_moteur{clear:both;margin-top:10px}.champs_dest{clear:both;margin:10px 0 0 5px}#divnuit{margin-right:0}.trianglebulle{width:220px}
.avis-td{clear:both;margin-left:40px}.prix-produit{margin-top:58px}.optoffredujoureb,.optoffredujourn{clear:both;background-image:none;font-size:14px;padding-left:0}.gratuite{width:100%;padding:0;background-color:#ff0092;background-image:none;height:auto;left:0;top:auto;bottom:0}}@media (max-width:755px){.caracteristiques{width:100%}.caracteristique{width:100%}.nom-caracteristique{width:80%;height:auto;padding:2px;font-size:14px}.plus-caracteristique{font-size:13px;width:auto}.prix-produit{margin:18px 0 0 51px}.un-produit{height:auto}.image-produit{height:190px}.detail-produit{height:auto;margin-left:1%;min-height:auto}.icon-caract img{height:22px}.nom-hotel{font-size:20px}.note-prix-bouton{height:auto}}@media (max-width:600px){#divnuit{margin-left:390px;clear:both;left:13px}.image-produit{height:150px}.nom-caracteristique{font-size:11px}.plus-caracteristique{font-size:11px}.note-tripadvisor{margin-left:15px}.prix-produit{margin:10px 0 0 21px}.icon-caract img{height:18px}.detail-produit{height:auto}.un-produit{height:auto}}@media (max-width:560px){#divnuit{margin-left:145px}.block_dates_moteur{clear:both;margin-top:10px}
.mode_paiement{width:60%;float:left;font-size:16px}.horaire_service,.service_ecoute{display:none}.contact_agence{height:100px}.optoffredujoureb,.optoffredujourn{display:none}.bouton-produit{width:80%}.gratuite{font-size:12px;height:auto}}@media (max-width:500px){.phone{width:10%}.phone img:first-child{display:none}
.phone img:nth-child(2){display:block}.conteneur-moteur{background-color:#003480}.imgtheme img{height:auto}.nom-caracteristique{display:none}.image-produit{height:100px}.caracteristique{clear:none;width:auto}.note-tripadvisor{margin-left:0}.note-td{margin:0}.note-td img{width:100%}.avis-td{font-size:12px}.prix-produit{margin:10px 0 0 0}
.detail-produit{width:40%}.note-prix-bouton{width:34%;padding-left:2px}.prix-prod{font-size:24px}.des{margin:10px 8px 0 0}.un-produit{height:auto}.bouton-produit{margin-top:5px}.prix-produit{margin:0}.nom-hotel a{font-size:14px;padding-top:5px}.icon-star-1{font-size:12px}
.onglet-act{font-size:12px;box-shadow:none;background-image:none;height:22px}.onglet{font-size:12px;padding:4px 1%;background-size:auto 22px}.entete-produits{height:auto}.entete_p{position:relative;min-height:28px;height:auto}.contact_agence{width:100%;margin:0;background-color:#333;padding-top:10px}.clients_satisfaits,.nos_agences a,.sous_service_client{font-size:13px}
.clients_satisfaits,.nos_agences,.service_client{background-size:15%;background-position:top center;padding:0 3%}.sous_clients_satisfaits{margin:30px 0 0 0}.sous_service_client{margin:30px 0 0 0}.nos_agences a{margin:30px 0 0 0}}@media (max-width:317px){#divnuit{margin-left:145px}.block_dates_moteur{clear:both;margin-top:10px}/*#check1,#check2{width:114px}*/#cont_arrivee,#cont_depart{padding:13px 0 0 3px}
#divnuit{margin-left:100px}.conteneur_bouton_moteur{width:55%;margin:10px 23% 0 0}.entet-moteur{width:85%;padding:13px 0 0 15%;background-size:10%;font-size:16px}.un-produit{height:auto}.detail-produit{width:70%;height:auto;min-height:auto}.image-produit{height:80px}.note-prix-bouton{width:99%;clear:both}
.prix-produit{float:right;clear:none;width:30%;margin-right:10%}.note-tripadvisor{width:30%}.avis-td{clear:none}.bouton-produit{margin:0 0 3px 0;float:right}.bouton-produit img{margin-left:50%;width:50%}.dev{font-size:12px;margin-top:2px}.prix-prod{font-size:20px}.des{margin:8px 8px 0 0;font-size:12px}
.clients_satisfaits,.nos_agences,.service_client{background-position:top center;padding:26px 0 0;margin:0;text-align:center;height:auto}.clients_satisfaits{width:34%;font-size:12px}.nos_agences a,.sous_clients_satisfaits,.sous_service_client{font-size:12px;margin:0 2%}}@media (max-width:255px){.block_dates_moteur{width:100%}#check1,#check2{width:93%}
#check2{clear:both;margin-top:10px}#moter-dest{width:98%;margin:0 1%}.select_destination_moteur_home{width:100%;background-size:100% 100%;padding:0 0 0 36px}.champs_dest{width:100%;margin:10px 0 0 0}.chambres{width:98%;margin:0 1%}.nombre_chambre{width:100%}/*.styled-select-nb-ch{width:85%;padding:12px 0 0 15%;background-size:100% 100%;font-size:14px}*/#cont_arrivee,#cont_depart{padding:13px 0 0 13px}.bouton-produit{clear:both;float:right}.bouton-produit img{width:80%;margin:5px 0 0 12%}.prix-produit{width:auto}.nom-hotel a{font-size:11px}.icon-star-1{font-size:9px}.adresse-hotel{font-size:11px;padding:0 0 0 18px;background-size:8px}.contact_agence{height:100px}.clients_satisfaits,.nos_agences,.service_client{width:90%;margin-left:10%;font-size:12px;background-position:left;background-size:6% 50%}}
.slick-list,.slick-slider,.slick-track{position:relative;display:block}.slick-loading .slick-slide,.slick-loading .slick-track{visibility:hidden}.slick-slider{ width:100%!important;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{overflow:hidden;margin:0;padding:5px}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{top:0;left:0}.slick-track:after,.slick-track:before{display:table;content:''}.slick-track:after{clear:both}.slick-slide{float:left;margin-left:11px;min-height:1px}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{}
@charset 'UTF-8';.slick-loading .slick-list{background:#fff url('https://tn.tunisiebooking.com/theme/gallery_slide/slick/ajax-loader.gif') center center no-repeat;}
@font-face{font-family:'slick';font-weight:normal;font-style:normal;src:url('https://tn.tunisiebooking.com/theme/gallery_slide/slick/fonts/slick.eot');src:url('https://tn.tunisiebooking.com/theme/gallery_slide/slick/fonts/slick.eot?#iefix') format('embedded-opentype'), url('https://tn.tunisiebooking.com/theme/gallery_slide/slick/fonts/slick.woff') format('woff'), url('https://tn.tunisiebooking.com/theme/gallery_slide/slick/fonts/slick.ttf') format('truetype'), url('https://tn.tunisiebooking.com/theme/gallery_slide/slick/fonts/slick.svg#slick') format('svg');}
.slick-prev{font-size:0;line-height:0;position:absolute;top:25%;display:block;padding:0;-webkit-transform:translate(0, -50%);-ms-transform:translate(0, -50%);transform:translate(0, -50%);cursor:pointer;color:transparent;/*border:none;*/outline:none;/*background:transparent;*/z-index:9999px;margin-left: -35px; border:0px;}


.slick-next{font-size:0;line-height:0;position:absolute;top:25%;display:block;padding:0;-webkit-transform:translate(0, -50%);-ms-transform:translate(0, -50%);transform:translate(0, -50%);cursor:pointer;color:transparent;/*border:none;*/outline:none;/*background:transparent;*/z-index:9999px; border:0px;}

.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus{color:transparent;outline:none;/*background:transparent;*/ border:0px;}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before{opacity:1;}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before{opacity:.25;}
.slick-prev:before,
.slick-next:before{font-family:'slick';font-size:20px;/*line-height:1;*//*opacity:.75;*/color:white;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;border:0px;}
.slick-prev{/*left:18px;*/z-index:9999;}
[dir='rtl'] .slick-prev{right:-25px;left:auto;}
.slick-prev:before{content:url(https://tn.tunisiebooking.com/theme/images/fech_gauche1.png);}
[dir='rtl'] .slick-prev:before{content:'';}
.slick-next{right:-30px;}
[dir='rtl'] .slick-next{right:auto;left:-25px;}
.slick-next:before{content:url(https://tn.tunisiebooking.com/images/icone-moteur/flechslide-gris.svg);}
[dir='rtl'] .slick-next:before{content:'';}
.slick-dotted.slick-slider{}
.slick-dots{position:absolute;bottom:-25px;display:block;width:100%;padding:0;margin:0;list-style:none;text-align:center;}
.slick-dots li{position:relative;display:inline-block;margin:0 5px;padding:0;cursor:pointer;}
.slick-dots li button{font-size:0;line-height:0;display:block;width:20px;height:0px;padding:5px;cursor:pointer;color:transparent;border:0;outline:none;background:#000;}
.slick-dots li button:hover,
.slick-dots li button:focus{outline:none;}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before{opacity:1;}
.slick-dots li button:before{font-family:'slick';font-size:6px;line-height:20px;position:absolute;top:0;left:0;content:'â€¢';text-align:center;opacity:.25;color:black;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.slick-dots li.slick-active button:before{opacity:.75;color:black;}

  .vide_dest {
      width: 35px;
      height: 250px;
      float: left;
      margin-top: 20px;
  }

  .vide_dest1 {
      width: 25px;
      height: 265px;
      float: left;
      margin-top: 20px;
  }
  .lib_desination {
      color: #262626;
      text-decoration: underline;
  }
  .lib_desination {
      width: 166px;
      padding-left: 10px;
      padding-top: 15px;
      font-size: 20px;
      float: left;
      height: 48px;
  }

  .prix_destination {
      float: left;
      width: 130px;
      height: 53px;

      background-position: left;
      background-repeat: no-repeat;
      background-color: #85B919;
  }
  .a_partir_sej {
      width: 90px;
      text-align: right;
      font-size: 12px;
      padding-top: 3px;
      height: 15px;
      color: #262626;
  }
  .prix_sej_acc {
      width: 90px;
      text-align: right;
      font-size: 30px;
      font-weight: bold;
      float: left;
      color: #262626;
  }
  .dev_sej_acc {
      width: 38px;
      float: left;
      font-size: 12px;
      padding-top: 2px;
      padding-left: 2px;
  }

  .titre-hotel{float: left;clear: both;width:60.4%;margin:40px 5px 5px 2.6%;font-size:16px;font-weight:bold; text-decoration:underline; }
  .titre-hotel2{float: left;clear: both;width:60.4%;margin:-30px 5px 5px 2.6%;font-size:16px;font-weight:bold; text-decoration:underline; }

  .note-tripad{float:left;margin-left:2%;margin-top:5px;}

  .adresse2{float:left;padding-left:4%; color:#05aa88; font-size:16px; font-weight:bold;}
  .adresse3{float:left;padding-left:4%; color:#000; font-size:16px; font-weight:bold;}
  .etoiles{float:right;margin-top:40px;}

  .etoiles2{float:right;margin-top:-20px;}
  .etoiles1{/*float:right;*/margin-top:20px;}
  .tripnot {float: left;width: 544px;height: 93px;background-image: url(https://tn.tunisiebooking.com/theme/images/ratings/notes-trip.svg);background-repeat: no-repeat;background-position-x:-6px;zoom: 20%;}

  .dispo{font-size:11px;color:#333333;float:left;width:60%;/*padding-left:4%;*/}

  .formule{float: right; color:#333333; font-size:10px; width:40% }
  .trip0{background-position-y:0px;}
  .trip05{background-position-y:-568px;}
  .trip1{background-position-y:-104px;}
  .trip15{background-position-y:-648px;}
  .trip2{background-position-y:-185px;}
  .trip25{background-position-y:-748px}
  .trip3{background-position-y:-285px;}
  .trip35{background-position-y:-848px}
  .trip4{background-position-y:-375px;}
  .trip45{background-position-y:-928px;}
  .trip5{background-position-y:-475px;}

  .options{float:left;clear:both;width:100%;padding-bottom:10px; height:90px;}

  .options1{float: left;
      clear: both;
      width: 95%;
      border-bottom: 1px #e0e0e0 solid;
      /* padding-bottom: 10px; */
      /*margin-left: 8px;*/
      margin-right: 8px;
      margin-bottom: 1px;
  	}

  .options ul{list-style-type: none;width:90%;float:left;margin:-20px 0px 0px 2.6%;padding:0;}
  .options ul li{float:left;width:25%;font-size: 11px; height:70px;}
  .options ul li img{/*float:left;*/padding:5px;}

  .plus-offres{float:right;margin:13px 10px 0px 0px;font-size:12px;color:#003581; /*width:15%*/}

  .text-offre-gratuite {
      float: left;
      font-size: 12px;
      color: #fff;
      padding: 5px;
     background: url(https://tn.tunisiebooking.com/theme/images/enf_gratuit.png) no-repeat;
         width: 153px;
      height: 39px;

      color: #FFF;
      padding: 5px 5px 5px 50px;
      text-align: center;
  }
  .offre-gratuite {
     float: left;
      position: relative;
      z-index: 10;
     top: -200;
  }

  .slick-slide{ width:306!important; height:400px;background-color:#FFFFFF; }

  .carousel-caption {
      z-index: 10;
  }
  .carousel .item {
      background-color: #384042;

  }




  div.bouton {
  	width: 150px;
  	position: relative !important;
  	display: block !important;
  	text-align:center
  	}


  div div.info-bulle {
  	visibility: hidden;
  	font-size:14px;
  	opacity: 0;
  	position: absolute !important;
  	top: -100px;
  	left: 0;
  	transition: all 300ms ease-out;
  	-webkit-transition: all 300ms ease-out;
  	-moz-transition: all 300ms ease-out;
  	-ms-transition: all 300ms ease-out;
  	-o-transition: all 300ms ease-out;
  }
  div:hover div.info-bulle {
  	visibility: visible;
  	opacity: 1;
  	top: -70px;
  	transition: all 800ms ease-out;
  	-webkit-transition: all 800ms ease-out;
  	-moz-transition: all 800ms ease-out;
  	-ms-transition: all 800ms ease-out;
  	-o-transition: all 800ms ease-out;
  }
  div.info-bulle {
  	width: 150%;
  	padding: 0px;
  	margin: 0 auto;
  	background: #ebebf2;
  	border-radius: 3px;
  	-webkit-border-radius: 3px;
  	-moz-border-radius: 3px;
  	-ms-border-radius: 3px;
  	-o-border-radius: 3px;
  	box-shadow: 3px 5px 10px #aaa;
  	-webkit-box-shadow: 3px 5px 10px #aaa;
  	-moz-box-shadow: 3px 5px 10px #aaa;
  	-ms-box-shadow: 3px 5px 10px #aaa;
  	-o-box-shadow: 3px 5px 10px #aaa;
  }
  div.info-bulle::before {
  	content: '';
  	position: absolute;
  	bottom: -5px;
  	left: 45%;
  	width: 0;
  	height: 0;
  	border-top: 5px solid #f5f5f5;
  	border-left: 5px solid transparent;
  	border-right: 5px solid transparent;
  }

  div.info-bulle p {

  	color: #262626;
  	padding: 10px 5px;
  	margin: 0;
  	text-align: center;
  	text-shadow: 1px 1px 0px #fff;
  }

  .bt_tarifs{float:right; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; font-size:20px; color:#FFFFFF; background-image:url(https://tn.tunisiebooking.com/theme/images/plus_detail.png); background-repeat:no-repeat; cursor:pointer; text-decoration:none; line-height: 1.5;padding-left: 10px; width:178px; height:37px;}
  .bt_modif_tarifs{float:right; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; font-size:16px;text-decoration:underline; color:#4E4F53; cursor:pointer;line-height: 1.5;padding-left:25px; width:190px; height:29px; background-image:url(https://tn.tunisiebooking.com/theme/images/boutan_modifier.jpg);background-repeat:no-repeat;}


  #load {height:100%; width:100%; z-index:99999; position:fixed; margin:110px 0px 0px 200px;}
  *html #load {height:100%; width:100%; z-index:9999; position:absolute;  margin:auto; background-color:#FFFFFF;}
  .popupg{ opacity:0.54;filter:alpha(opacity=50);width:100%; height:900px;position:fixed; padding:300px;  top: 0%; left:0%; margin:-100px auto 0 auto; background-color:#262626; border:0px solid #5551b0;z-index:1000}

  .text_shadow{ text-shadow: 0 0 1px rgba(0, 0, 0, 0.44);}
  .input_widt110{width: 110px;}
  .input_widt120{width: 120px;}
  .input_widt140{width: 140px;}
  .plan_moteur_horizontal{background-color: #2f2f2f; bottom: 0;position: absolute; width: 100%;padding: 10px;left:-10px }
  .minprixp{float:right; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; font-size:24px;line-height: 0.8em;}
  .prixp{float:right; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; font-size:24px; font-weight:normal;line-height: 0.8em;}
  .parti_button{clear:both; padding: 10px; height:28px}
  .champs_dest_horizontal{
    padding: 0px 8px 10px 8px;
    font-family:Arial; font-size:12px;
    color:#FFFFFF;font-weight:bold;
    float:left;
    }
  .ligne_h{ background-image:url(https://tn.tunisiebooking.com/theme/images/ligne_h.png); background-position:right; background-repeat:no-repeat}
  .triangle_mh_left{background: url(https://tn.tunisiebooking.com/theme/images/triangle_mh_left.png) no-repeat scroll 0 0 transparent;float: left;height: 13px;margin-left: -10px;position: absolute; top: -12px;width: 9px;}
  	.triangle_mh_right{background: url(https://tn.tunisiebooking.com/theme/images/triangle_mh_right.png) no-repeat scroll 0 0 transparent;height: 14px;float: right;height: 14px;margin-left: 1065px; position: absolute;top: -14px; width: 10px;}





  .icon_face{ float:left;margin:0px 4px; background-image:url(https://tn.tunisiebooking.com/theme/images/icon-face.png); background-repeat:no-repeat; width:32px; height:32px}
  .icon_face:hover{background-image:url(https://tn.tunisiebooking.com/theme/images/icon-face2.png); background-repeat:no-repeat; width:32px; height:32px}
  .icon_googleplus{ float:left;margin:0px 4px; background-image: url(https://tn.tunisiebooking.com/theme/images/google+.png); background-repeat:no-repeat; width:32px; height:32px}
  .icon_googleplus:hover{background-image:url(https://tn.tunisiebooking.com/theme/images/google+2.png); background-repeat:no-repeat; width:32px; height:32px}
  .icon_twitter{ float:left;margin:0px 4px; background-image: url(https://tn.tunisiebooking.com/theme/images/twitter.png); background-repeat:no-repeat; width:32px; height:32px}
  .icon_twitter:hover{background-image: url(https://tn.tunisiebooking.com/theme/images/twitter2.png); background-repeat:no-repeat; width:32px; height:32px}
  .top-bar-fixed {margin: 0;height: 118px;width: 100%;background: #ffffff;top: 0px;}
  .top-bar-fixed_face{margin: 0;height: 118px;width: 100%;background: #ffffff;top: 0px;}
  #footer {margin: 0;width: 100%;background-color:#333333;


  bottom:0px;clear:both;}
  .footer {margin: 0;width: 100%;background: url(https://tn.tunisiebooking.com/theme/images/bg-footer.png) repeat-x #4d4f53; background-position:top;bottom:0px;clear:both;}
  .menu {
  margin: 0;
  background-color:#ffffff;
  min-height:93px;
  width: 100%;
  border-bottom:1px solid #c7c7c7;
   box-shadow: 0 0 4px rgba(0, 0, 0, 0.55);

  }
  .ul_m{
  margin-left: auto;
  margin-right: auto;
  margin-top:0px;
  margin-bottom:0px;
  width: 1100px;
  margin-top:0px;
   padding: 29px 0 0;
  }
  .header {
  background-color: #fff;
  margin-top:2px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 30px;
  position: relative;
  width: 1065px;

  }
  .header_detail {
    display: flex;
    flex-direction: column;
		background-color: #fff;
		margin-top: 12px;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 30px;
		position: relative;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13), 0px 0px 10px rgba(0, 0, 0, 0.13);
	}

  #wrap {margin: 0 auto;width: 1065px;}

  .content_page {background-color: #fff;width: 703px;float:left;padding:17px;}
  .seidbar
  {background-color: #fff;margin-left:28px;float:left;padding:17px 10px;}
  .seidbar_dest{background-color: #fff;clear:both;padding:17px 10px;}
  .bgban{background-repeat:no-repeat; height:433px;}
  .entete {background-color: #fff;margin-left: auto;margin-right: auto;position: relative;width: 1000px;padding: 25px;}

  .shadow-container2{-moz-box-shadow: 0 0 10px rgba(0,0,0,.25);box-shadow: 0 0 10px rgba(0,0,0,.25);}
  .shadow-container3{-moz-box-shadow: 0 0 10px rgba(0,0,0,.25);box-shadow:0 0 6px rgba(0, 0, 0, 0.37);;}
  .shadow-container3:hover{-moz-box-shadow: 0 0 10px rgba(0,0,0,.25);box-shadow:0 0 6px rgba(0, 0, 0, 0.78);;
  }
  .seidbar_left{float:left; background-color:#FFFFFF; padding:4px 0px;border-radius: 4px 4px 4px; width:25%;}
  .seidbar_left_f{float:left; padding:4px 0px; width:25%;}
  .seidbar_right{float:left; padding:4px 0px; width:72%; margin-left:3%}
  .enveloppe_produit{margin-bottom:1%;background-color:#FFFFFF; padding:4px 0px;border-radius: 4px 4px 4px; margin:8px;height:110px;margin-top:1.5%;}
  .margin_dehuit{margin:0px 12px 0px 12px}
  .etikette {clear:both;background-image:url(https://tn.tunisiebooking.com/theme/images/ligne_hgris.png);background-repeat:repeat-x; padding:0px 8px;}
  .top_etikette{margin-top:4px;0px -1px 3px 0px rgba(0, 0, 0, 0.28);}
  .titre_seidbar{font-family: Arial;font-size:18px;color: #262626;}
  .flech_bas{clear: both;
  padding-top: 11px;
  padding-left: 4px;}
  .icon_haut{float:left;padding: 10px 15px 0px 26px; color:#4e4f53}
  .conten{    margin: 0 auto;    padding-bottom: 10px;    padding-left: 2px;    padding-top: 7px;    width: 1000px;	}
  .champs_titre_hotel{ border-radius:5px; background-color:rgba(250, 247, 247, 0.78); clear: both; font-family: Arial; font-size: 16px; margin-right: 4px; padding-left: 4px; color:#262626; font-family:Arial; padding: 13px; left: 40px; top: 35px; position: absolute;  }
  .champs_titre_hotel h1{margin:0px; padding:0px; font-weight:normal}
  .float{float:left;}
  .marg_right{margin-right:160px}
  .marg_left{margin-left:20px}
  .coin_arrandi{}
  .titrep{clear:both; border-bottom:1px solid #eaeaea; margin-bottom:25px;}
  .titrep h2{ margin:0px; padding:0px; margin-bottom:15px; font-weight:normal; font-size:28px}

  .titrdest{clear:both; border-bottom:1px solid #eaeaea; margin-bottom:25px;}
  .titrdest h2{ margin:0px; padding:0px; margin-bottom:20px;font-weight:normal; font-size:21px}

  .titrdest_dest{clear:both; border-bottom:1px solid #eaeaea; margin-bottom:25px; color:#262626}
  .titrdest_dest h2{ margin:0px; padding:0px; margin-bottom:20px;font-weight:normal; font-size:24px}

  .prod{ width:332px; float:left; padding:3px 3px;margin-bottom:25px; background-color:#f7f9fa}
  .global{ clear:both; margin-bottom:20px}
  .img_hotel{ clear:both; background-repeat:no-repeat; padding-top:115px;}
  .liste_hotel{
		/*background-image: url(https://tn.tunisiebooking.com/theme/images/flech_liste.png);
		background-position: left center;
		background-repeat: no-repeat;
		font-size: 12px;
		height: 7px;
		padding:6px 2px 10px 12px;
		font-weight:bold;*/
		/*background-image: url(https://tn.tunisiebooking.com/theme/images/flech_liste.png);
	    background-position: left center;
	    background-repeat: no-repeat;*/
	    font-size: 12px;
	    height: 7px;
	    padding: 4px 2px 10px 12px;
	    font-weight: bold;
	    list-style: none;
	    line-height: 1;
	    font-family: Arial;
	}
  .ulprixhot{font-family:Arial;font-size:14px;position: relative;padding: 8px; margin: 0px;height:100px;border-bottom:1px solid #d9d9d9;	clear:both;	background:none; }
     .titre_cal{font-family:Arial;font-size:22px;color:#262626; margin: 0 0 0 5px; padding: 12px 0;border-bottom: 0px solid #BBBBBB; clear:both}
    .plan_moteur{background-color:#003581;top:18px; padding:20px}

    .ban_titrehot{line-height: 1.8em;font-family:Arial;font-size:19px; padding-left:4px; clear:both; height:50px;color:#FFFFFF;background-color:rgba(10, 10, 10, 0.62); cursor:pointer}
    .ban_titrehot:hover{background-color:rgba(10, 10, 10, 0.41);}
    .ban_titrehot a{line-height: 1.8em;font-family:Arial;font-size:19px; padding-left:4px; clear:both; height:50px;color:#FFFFFF;cursor:pointer}

  .titre_moteur {clear:both; border-bottom:1px solid #324a5e; border-bottom:1px solid rgba(72, 64, 60, 0.64); padding:4px; color:#FFFFFF;font-family:Arial;}
  .titre_moteur h1{ margin:0px; padding:0px 0px 4px 0px; font-size:27px; font-weight:normal;}
  /*.champs_dest{padding: 10px 0px 10px 0px;  border-bottom:1px solid rgba(72, 64, 60, 0.64);border-top: 1px solid rgba(250, 247, 247, 0.16); font-family:Arial; font-size:12px; color:#FFFFFF;font-weight:bold; height:40px}*/
  .champs_dest_bas{padding: 20px 0px 10px 0px;  border-bottom: 0px solid rgba(97, 138, 4, 0.64); border-top:1px solid rgba(250, 247, 247, 0.16); font-family:Arial; font-size:12px; color:#FFFFFF;}

	.champs_dest {
	    /*margin-top: 7%;
			margin-left:2%;*/
			width: 304px !important;
    	height: 55px;

		}
  .input {

  border: 1px solid #CCC;
  background: #f5f5f5;
  margin: 0 0 5px;
  padding: 5px;
  border-radius: 4px;

  }
  .checkbox_ul{ list-style:none; padding:5px 0px; color:000000; margin:0px 0px 20px 0px;font-weight:bold;}
  .checkbox_ul label{ color:#262626; line-height:1.2em;margin-left: 4px;vertical-align: top;}
  .checkbox_ul li{ clear:both; padding:8px 0px 8px 2px}
  .checkbox_ul input[type="checkbox"]
  {
      opacity: 0.9;

  }
  .input_width{width:84%;}
  .input:hover{-webkit-transition: border-color 0.3s ease-in-out;-moz-transition: border-color 0.3s ease-in-out;transition: border-color 0.3s ease-in-out;border: 1px solid #AAA}
  .date_m{float:left; font-size:12px; font-weight:bold; font-family:Arial; color:#ffffff; margin-right:32px}
  .icon_cal{ background-image:url(https://tn.tunisiebooking.com/theme/images/icon_cal122.png); background-repeat:no-repeat; background-position:right; width:130px}

  .styled-select_dest { background:#f5f5f5;   border: 1px solid #CCC;   border-radius: 4px;   overflow: hidden;   width:50%;}
  .styled-select_dest:hover { border-color: #BBCE3D;}
  .styled-select_dest select { background: none repeat scroll 0 0 transparent; border: 0 none; width:100%;}
  .styled-select_dest select:focus {
      outline: medium none;
  }
  .styled-select_age { background: url(https://tn.tunisiebooking.com/theme/images/ic_22.png) no-repeat scroll right center #f5f5f5; border: 1px solid #CCC;   margin: 0 0 5px;   padding: 3px;     overflow: hidden;   width:88%; height:27px;}
  .styled-select_age:hover {	 border-color: #BBCE3D;}
  .styled-select_age select {background: none repeat scroll 0 0 transparent; border: 0 none;    width:158%;}
  .styled-select_age select:focus { outline: medium none;}


  	.styled-select:hover { border-color: #BBCE3D;}
  .styled-select select { background: none repeat scroll 0 0 transparent; border: 0 none; width:180%; /*height:37px;*/}
  .styled-select select:focus {outline: medium none;}

  .styled-select-detail { background: url(https://tn.tunisiebooking.com/theme/images/ic_22.png) no-repeat scroll right center #f5f5f5; border: 1px solid #CCC; margin: 0 0 5px 15px;padding: 3px;overflow: hidden; height:27px; /* width:50%;*/}
  .champs_dest_ch{padding: 15px 0px 10px 0px; border-bottom:1px solid rgba(72, 64, 60, 0.64); border-top: 1px solid rgba(250, 247, 247, 0.16); font-family:Arial; font-size:12px; color:#FFFFFF;font-weight:bold;}
  .champs_dest_ch_detail{/*padding: 10px 0px 10px 0px;*/font-family:Arial; font-size:12px; color:#FFFFFF;font-weight:bold;}

  .styled-select-detail:hover {border-color: #BBCE3D;}
  .styled-select-detail select {  background: none repeat scroll 0 0 transparent; border: 0 none; width:150%; /*height:37px*/}
  .styled-select-detail select:focus { outline: medium none;}
  /**/
  .styled-select_age {background: url(https://tn.tunisiebooking.com/theme/images/ic_22.png) no-repeat scroll right center #f5f5f5; border: 1px solid #CCC; margin: 0 0 5px;padding: 3px;overflow: hidden;  width:88%; height:27px;}
  .styled-select_age:hover {
  	 border-color: #BBCE3D;
  }
  .styled-select_age select {
      background: none repeat scroll 0 0 transparent;
      border: 0 none;
      width:158%;
  	/*height:37px;*/
  }
  .styled-select_age select:focus {
      outline: medium none;
  }
  .gf-form label
  {
      font: normal normal 11px/13px Arial;
      color: #555555;
      cursor: pointer;
  }
  .gf-checkbox{ list-style:none; padding:3px 8px; margin:0px;font-weight:bold;}
  .gf-form label,
  .gf-checkbox input[type="checkbox"] + label::before,
  .gf-radio input[type="radio"] + label::before
  {
      vertical-align: middle;
  }
  .gf-checkbox li{ padding:4px;}

  .gf-checkbox input[type="checkbox"],
  .gf-radio input[type="radio"]
  {
      position: absolute;
      opacity: 0;
  }

  .gf-checkbox input[type="checkbox"] + label::before,
  .gf-radio input[type="radio"] + label::before
  {
      content: "";
      display: inline-block;
      width: 13px;
      height: 13px;
      line-height: 13px;
      margin: 0 8px 0 0;
      background: url("https://tn.tunisiebooking.com/theme/images/sprite-radio-checkbox.png") no-repeat 0 0;
      vertical-align: middle;

  }

  .gf-form input[type="checkbox"]:disabled + label,
  .gf-form input[type="radio"]:disabled + label
  {
      opacity: .5;
      cursor: default;
  }

  .gf-checkbox input[type="checkbox"]:not(:checked):hover + label::before
  {
      background-position: 0 -13px;
  }

  .gf-checkbox input[type="checkbox"]:checked + label::before
  {
      background-position: 0 -26px;
  }

  .gf-radio input[type="radio"] + label::before
  {
      background-position: -13px 0;
  }

  .gf-radio input[type="radio"]:hover + label::before
  {
      background-position: -13px -13px;
  }


  .gf-radio input[type="radio"]:checked + label::before
  {
      background-position: -13px -26px;
  }

  .gf-form input[type="checkbox"]:focus + label,
  .gf-form input[type="radio"]:focus + label
  {
      outline: dotted 1px;
  }

  @media \0screen {
      .gf-checkbox input[type="checkbox"],
      .gf-radio input[type="radio"]
          {
          position: static;
      }
  }

  .entete_prod{border-bottom:1px solid #dedede; height:41px; margin-top:10px}
  .bloc_titre{float:left;text-decoration:underline}
  .bloc_titre h1{float:left;text-decoration:underline;margin: 0 0 15px; padding:0px; font-weight:normal;font-size:28px}

  .img_p{margin-top:10px;background-image:url(https://tn.tunisiebooking.com/theme/images/img_p.png); background-repeat:no-repeat; height:179px; width:164px}
  .etickette_p{background-image:url(https://tn.tunisiebooking.com/theme/images/etickette_p.png); background-repeat:no-repeat; height:30px; width:68px;left:-19px;; position: relative;top: 12px;}
  .sous_et_p{background-image: url(https://tn.tunisiebooking.com/theme/images/sous_et_p.png); background-repeat:no-repeat; height:9px; width:7px;left: -19px; position: relative;top: 10px;}
  .etickette_e{background-image: url(https://tn.tunisiebooking.com/theme/images/etickette_e.png); background-repeat:no-repeat; height:30px; width:119px;left: -19px; position: relative;top: 12px;padding:1px 0px 0px 8px;font-size:17px; color:#ffffff; text-decoration: blink;}
  .etickette_ep{background-image:url(https://tn.tunisiebooking.com/theme/images/etickette_promo.png);background-repeat: no-repeat;color: #FFFFFF;font-size: 14px;font-weight: bold;height: 24px;left: 98px;padding: 1px 0 0 8px;position: relative;text-decoration: blink;top: 1px;width: 66px;}

  .sous_et_e{background-image: url(https://tn.tunisiebooking.com/theme/images/sous_et_e.png); background-repeat:no-repeat; height:9px; width:7px;left: -19px; position: relative;top: 10px;}

  .header_coordonnee
  {
  margin-top: 44px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 30px;
  position: relative;
  width: 1065px;

  }
  .enveloppe_produit_coordonnee{background-color:#FFFFFF; padding:4px 0px 0px 0px;border-radius: 4px 4px 4px; margin:0px 0px 15px 0px}
  .enveloppe_total_coordonnee{background-color:#FFFFFF; padding:0px;border-radius: 4px 4px 4px; margin:0px 0px 15px 0px}

  .contene
  {
  margin:0px auto;
  width:999px;
  padding-top:7px;
  padding-bottom:10px;
  }
  .l{
  float:left;
  padding-left:40px;padding-top:10px;
  }
  .inscri_text_left
  {
  float:left;
  }
  .l1{
  float:left;
  padding-left:10px;
  }
  .l1o{
  float:left;
  padding-left:120px;padding-top:20px;
  }
  .l2{
  float:left;

  }
  .l22{
  float:left;
  padding-top:15px;
  }
  .l3{
  float:left;


  padding-left:15px;padding-right:15px;
  padding-top:15px;
  font-family:Arial;
  font-size:18px;
  font-weight:normal;
  color:#010101;
  }
  .l4{
  float:left;
  padding-top:50px;
  }
  .l5{
  float:left;
  border-right:1px solid #262626;
  }
  .l5_1{
  float:left;
  height:34px;
  width:4px;
  font-size:2px;
  background-image:url(https://tn.tunisiebooking.com/images/m07.gif);
  }
  .l5_2{
  float:left;
  height:30px;
  padding-top:4px;padding-left:2px;padding-right:10px;
  background-image:url(https://tn.tunisiebooking.com/images/m08.gif);
  }
  .l5_3{
  float:left;
  padding-top:4px;padding-left:5px;
  font-family:Arial;
  text-decoration:underline;
  font-size:13px;
  }
  .l5_3 a{
  color:#262626;
  font-family:Arial;
  text-decoration:underline;
  font-size:13px;
  }
  .l5_3 a:hover{
  color:#eb2314;
  font-family:Arial;
  text-decoration:underline;
  font-size:13px;
  }

  .l5_31{
  float:left;
  color:#eb2314;
  padding-top:4px;padding-left:5px;
  font-family:Arial;
  text-decoration:underline;
  font-size:13px;
  }
  .l5_31 a{
  color:#eb2314;
  font-family:Arial;
  text-decoration:underline;
  font-size:13px;
  }
  .l5_31 a:hover{
  color:#eb2314;
  font-family:Arial;
  text-decoration:underline;
  font-size:13px;
  }
  .l6{
  float:left;
  }
  .l6_1{
  float:left;
  height:30px;padding-top:4px;padding-left:4px;padding-right:10px;
  background-image:url(https://tn.tunisiebooking.com/images/m08.gif);
  }
  .l6_2{
  float:left;
  height:34px;
  width:3px;
  font-size:2px;
  background-image:url(https://tn.tunisiebooking.com/images/m09.gif);
  }
  .m{
  margin:0px;
  width:990px;
  clear:both;
  float:left;
  background-color:#ec2216;
  }
  .ofc{
  margin:0px;
  height:15px;
  width:990px;
  clear:both;
  float:left;
  background-color:#ec2216;
  }
  .m1{
  float:left;
  cursor:pointer;height:20px;padding-top:2px;
  padding-right:8px;padding-left:5px;
  border-right:1px solid #ec2216;
  }
  .m1_c{
  float:left;
  cursor:pointer;height:20px;padding-top:2px;
  padding-right:8px;padding-left:5px;
  background-color:#a10a00;
  border-right:1px solid #ec2216;
  }
  .m1_1{
  float:left;height:20px;padding-top:2px;border-right:1px solid #ec2216;
  padding-right:5px;padding-left:5px;width:90px;
  }
  .m1_2{
  float:left;cursor:pointer;height:20px;padding-top:2px;
  padding-right:5px;padding-left:5px;width:145px;border-right:1px solid #ec2216;
  }
  .m1_2c{
  float:left;cursor:pointer;height:20px;padding-top:2px;background-color:#a10a00;
  padding-right:5px;padding-left:5px;width:145px;border-right:1px solid #ec2216;
  }
  .m1_3{
  float:left;cursor:pointer;height:20px;padding-top:2px;
  padding-right:5px;padding-left:5px;width:135px;border-right:1px solid #ec2216;
  }
  .m1_3c{
  float:left;cursor:pointer;height:20px;padding-top:2px;background-color:#a10a00;
  padding-right:5px;padding-left:5px;width:135px;border-right:1px solid #ec2216;
  }
  .m1_4{
  float:left;cursor:pointer;height:20px;padding-top:2px;
  padding-right:30px;width:60px;padding-left:10px;border-right:1px solid #ec2216;
  }
  .m1_4c{
  float:left;cursor:pointer;height:20px;padding-top:2px;background-color:#a10a00;
  padding-right:30px;width:60px;padding-left:10px;border-right:1px solid #ec2216;
  }
  .m2{
  float:left;
  padding-top:4px;
  }
  .m3{
  float:left;
  padding-left:8px;
  font-family:Arial;
  text-decoration:underline;
  font-size:12px;
  color:#FFFFFF;
  }
  .mb{
  float:left;
  clear:both;
  height:20px;
  width:990px;
  background-color:#f3f3f3;
  }
  .mbof{
  float:left;
  clear:both;
  padding-top:15px;padding-bottom:10px;
  width:990px;
  background-color:#f3f3f3;
  }
  .mo{
  float:left;
  clear:both;
  padding-left: 00px;
  margin-top:1px;

  width:990px;
  background-color:#FFFFFF;
  }
  .mofc{
  float:left;
  clear:both;
  padding-left: 55px;
  margin-top:1px;
  padding-top:5px;
  padding-bottom:5px;
  width:935px;

  }
  #submenu {
  	float:left;
  	padding-top: 4px;
  	padding-right: 0px;
  	padding-bottom: 0px;
  	padding-left: 0px;
  	position: static;
  	left: 0px;
  	top: 0px;
  	margin-top: 0px;
  	margin-right: auto;
   	width:992px;
  	height:22px;
  background-image: url(https://tn.tunisiebooking.com/images/img_top.jpg);
  	background-repeat: repeat-x;
  	background-position:bottom;
  	padding-bottom:9px;
  }
  .bg_top_acc
  {
  	background-image:url(https://tn.tunisiebooking.com/images/img_top.jpg);
  	background-repeat:no-repeat;
  	background-position:center;
  	width:993px;
  	height:5px;

  }
  .bg_bottomm_acc
  {
  	background-image:url(https://tn.tunisiebooking.com/images/fond.jpg);
  	background-repeat:no-repeat;
  	background-position:left;
  	width:992px;
  	height:15px;
  }
  #submenu .bal1 {
  	background-image: url(https://tn.tunisiebooking.com/images/bg_gauche_noir.jpg);
  	background-repeat: no-repeat;
  	background-position: left top;
  	font-size:12px;
  	float: left;
  	width: 120px;
  	padding-left: 5px;
  	padding-top: 0px;
  	padding-right: 0px;
  	border-bottom:1px solid #C9C9CB;
  	padding-bottom: 0px;
  	height: 25px;
  	margin-left:1px;
  	margin-bottom:1px;
  }
  .autrement
  {
  float:left;
  margin-left:1px;
  width: 102px;
  font-size:13px;
  padding-top:5px;
  padding-bottom:2px;
  color:#FFFFFF;
  background-image: url(https://tn.tunisiebooking.com/images/bg_top_noir_aut.jpg);
  	background-repeat: no-repeat;
  	background-position:top;
  	text-align:center;
  	background-color:#262626;
  	margin-top:2px;
  	font-family:Arial, Helvetica, sans-serif;
  }
  .div_videvvv
  {
  float:left;
  margin-left:1px;
  width: 102px;
  font-size:13px;
  padding-top:5px;
  padding-bottom:2px;

  }
  .autrement a
  {

  color:#FFFFFF;
  text-decoration:none;
  }
  .autrement a:hover
  {
  color:#FFFFFF;
  text-decoration:none;
  }
  #submenu .comment_ca_marche
  {
  width: 760px;
  float: left;
  text-align:right;
  padding-top:6px;
  color:#FF0F11;
  font-size:15px;
  font-weight:bold;
  }
  #submenu .comment_ca_marche a
  {
  color:#FF0F11;
  font-family:Arial, Helvetica, sans-serif;
  font-size:15px;
  font-weight:bold;
  }
  #submenu .bal1 p {
  	background-image: url(https://tn.tunisiebooking.com/images/ar02.jpg) ;
  	background-repeat:repeat;
  	font-family:arial;
  	font-size:12px;
  	color:#FFFFFF;
  	font-weight:bold;
  	background-position: right top;
  	padding-right: 0px;

  	width: 115px;
  	margin: 0px;
  	float:left;
  	padding-top: 6px;

  	padding-bottom: 0px;
  	padding-left: 0px;
  	white-space: nowrap;
  }
  #submenu .bal1 a {
  	color: #ffffff;
  	width: 115px;
  	text-align:center;
  	text-decoration: none;
  	font-weight: normal;;
  	float: left;
  }
  #submenu .bal1 a:hover {

  }
  #submenu .bal1 span {

  	background-image: url(https://tn.tunisiebooking.com/images/bg_droite_noir.jpg);
  	height: 26px;
  	width: 5px;
  	display: block;
  	float: left;
  }
  #submenu .bal2 {
  	background-image: url(https://tn.tunisiebooking.com/images/bg_gauche_gris.jpg);
  	background-repeat: no-repeat;
  	background-position: left top;

  	float: left;
  	width: 120px;
  	padding-left: 6px;
  	text-align:center;
  	padding-top: 0px;

  	padding-bottom: 0px;
  	height: 28px;

  }
  #submenu .bal2 p {
  	background-image: url(https://tn.tunisiebooking.com/images/bg_gris.jpg);
  	background-repeat: repeat-x;
  	background-position: right top;

  	font-family:Arial, Helvetica, sans-serif;
  	font-size:14px;
  	color:#262626;
  	font-weight:bold;
  	margin: 0px;
  	float:left;
  	width: 115px;
  	text-align:center;
  	padding-top: 4px;
  	padding-bottom: 0px;

  	height: 24px;

  }
  #submenu .bal2 a {
  	color: #FF0101;
  	text-decoration: none;
  	font-weight: bold;
  	float: left;
  	width: 115px;
  	text-align:center;
  }
  #submenu .bal2 a:hover {

  }
  #submenu .bal2 span {
  	background-image: url(https://tn.tunisiebooking.com/images/bg_droite_gris.jpg);
  	height: 26px;
  	width: 5px;
  	display: block;
  	float: left;
  }
  /*///*/
  #submenu .bal3 {
  	background-image: url(https://tn.tunisiebooking.com/images/arb01ov.gif);
  	background-repeat: no-repeat;
  	background-position: left top;
  	font-size:2px;
  	float: left;
  	width: auto;
  	padding-left: 6px;
  	padding-top: 0px;
  	padding-right: 0;
  	padding-bottom: 0px;
  	height: 26px;
  }
  #submenu .bal3 p {
  	background-image: url(https://tn.tunisiebooking.com/images/arb02.gif);
  	background-repeat: repeat-x;
  	background-position: right top;
  	padding-right: 2px;
  	border-top:2px solid #323232;
  	font-family:Arial, Helvetica, sans-serif;
  	font-size:12px;
  	color:#262626;
  	font-weight:bold;
  	margin: 0px;
  	float:left;
  	padding-top: 3px;

  	padding-bottom: 0px;
  	padding-left: 2px;
  	white-space: nowrap;
  }
  #submenu .bal3 a {
  	color: #262626;
  	text-decoration: none;
  	font-weight: bold;
  	float: left;
  }
  #submenu .bal3 a:hover {

  }
  #submenu .bal3 span {
  	background-image: url(https://tn.tunisiebooking.com/images/arb03ov.gif);
  	height: 26px;
  	width: 6px;
  	display: block;
  	float: left;
  }
  .mo1{
  float:left;padding-left: 56px;
  clear:both;
  height:36px;
  width:934px;
  background-color:#f3f3f3;
  }
  .mo11{
  float:left;padding-left: 56px;
  clear:both;
  height:50px;
  width:934px;
  background-color:#f3f3f3;
  }
  .mo1_1{
  float:left;
  height:36px;
  width:5px;
  background-image:url(https://tn.tunisiebooking.com/images/ar04.gif);
  background-repeat:no-repeat;
  }
  .imar{
  float:left;
  height:36px;
  width:5px;
  background-image:url(https://tn.tunisiebooking.com/images/imar.gif);
  background-repeat:no-repeat;
  }
  .mo1_1d{
  float:left;
  height:50px;
  width:5px;
  background-image:url(https://tn.tunisiebooking.com/images/ar040.gif);
  background-repeat:no-repeat;
  }
  .mo1_2{
  float:left;
  height:36px;
  width: 858px;
  background-color:#333333;
  }
  .mo1_22{
  float:left;
  height:50px;
  width: 858px;
  background-color:#333333;
  }
  #mo1_3{
  float:right;
  padding-top:10px;

  padding-right:10px;
  font-family:Arial, Helvetica, sans-serif;
  color:#FFFFFF;
  font-size:12px;
  font-weight:bold;
  }
  #mo1_3 span{
  float:left;
  color:#fe0201;
  }
  .mo1_3{
  float:left;
  height:36px;
  width: 5px;
  background-image:url(https://tn.tunisiebooking.com/images/ar05.gif);
  background-repeat:no-repeat;
  }
  .mo1_3d{
  float:left;
  height:50px;
  width: 5px;
  background-image:url(https://tn.tunisiebooking.com/images/ar050.gif);
  background-repeat:no-repeat;
  }
  .rs_ind{
  float:left;
  clear:both;

  padding-left:16px;
  padding-bottom:20px;
  width:974px;
  background-color:#F1F1F1;
  margin-top:0px; padding-top:20px;

  border-right:1px solid #D6D6D6;
  border-left:1px solid #D6D6D6;
  }
  .rs_ind22{
  float:left;
  clear:both;

  padding-left:16px;
  padding-bottom:20px;
  width:980px;
  background-color:#F1F1F1;
  margin-top:0px;
   padding-top:20px;

  border-right:1px solid #D6D6D6;
  border-left:1px solid #D6D6D6;
  border-bottom:1px solid #D6D6D6;
  }
  .rs_ind222{
  padding-left:10px;
  padding-right:10px;
  padding-bottom:20px;
  width:977px;
  background-color:#F4F2F3;
  margin-top:0px;
   padding-top:10px;
   border-right:1px solid #D6D6D6;
  border-left:1px solid #D6D6D6;
  border-bottom:1px solid #D6D6D6;
  font-family:Arial, Helvetica, sans-serif;
  }
  .cont_det_se_f_gau
  {
  width:663px;
  float:left;
  margin-top:6px;
  background-color:#FFFFFF;
   }
  .cont_tit_comp_sj
  {
  width:653px;
  padding:5px 5px 5px 5px;
  background-color:#828081;
  color:#ffffff;
  }
  .cont_sj_t_face
  {
  width:423px;
  float:left;
  }

  .cont_sj_compt
  {
  float:left;
  width:204px;
  border-left:1px solid #999798;
  margin-left:16px;
  }

  .icon_cerle_gris{float:left;
   font-family:Arial;
     color:#FFFFFF;
     width:28px;
      height:28px;
      background: url("https://tn.tunisiebooking.com/theme/images/icon_cercle_gris.png") no-repeat scroll 0 0 transparent;
      font-size: 20px;
      font-weight: bold;
  	}
  .cont_det_se_f_droit
  {
  width:304px;


  padding-left:3px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_left_res_m.gif);
  background-repeat:repeat-y;
  background-position:left;
  background-color:#FFFFFF;
   }
  .cont_det_se_f_droit_total
  {
  width:307px;
  margin-left:7px;
  float:left;
  margin-top:3px;
  }
  .contenu_loop
  {
  width:248px;
  height:50px;
  padding-left:56px;
  padding-top:3px;
  background-image:url(https://tn.tunisiebooking.com/images/puce_loop.gif);
  background-repeat:no-repeat;
  background-position:left;
  }
  .test_loop
  {
  width:243px;
  height:45px;
  padding-top:5px;
  padding-left:5px;
  background-color:#D42D59;
  color:#FFFFFF;
  font-size:15px;
  font-weight:bold;
  }
  .cont_det_se_f_droit2
  {
  width:301px;
  padding-right:3px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_right_res_m.gif);
  background-repeat:repeat-y;
  background-position:right;
  }
  .titre_produi_det_h_sej
  {
  width:75px;
  float:left;
  background-image:url(https://tn.tunisiebooking.com/images/puce_sej_hotel.gif);
  background-repeat:no-repeat;
  background-position:right;
  color:#656766;
  font-size:12px;
  }
  .titre_produi_det
  {
  width:890px;
  margin-left:5px;
  float:left;
  color:#656766;
  font-size:12px;
  font-weight:bold;
  }
  .rs{
  float:left;
  clear:both;
  padding-left: 15px;
  padding-bottom: 300px;
  width:975px;
  background-color:#F3F3F3;
  border-radius: 10px;
  }
  .contenu_intern
  {
  width:960px;
  font-family:Arial;
  }
  .contenu_internf
  {
  font-family:Arial;
  width:960px;
  }
  .dt1{
  float:left;
  margin:0px;width:900px;padding-top:8px;padding-right:8px;
  }

  .cordonner
  {
  float:left;
  clear:both;
  padding-left: 55px;
  padding-bottom: 300px;
  width:935px;
  background-color:#F3F3F3;
  border-radius: 10px;
  }
  .rs_vol{
  float:left;
  clear:both;
  padding-left: 55px;
  padding-bottom: 450px;
  width:935px;
  background-color:#f3f3f3;
  }
  .rs1{
  float:left;
  cursor:pointer;
  width:226px;
  padding-top:8px;
  padding-right:4px;
  padding-left:4px;
  margin-right:9px;
  }
  .rs1 .h1{
  margin:0px;
  font-size:1px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_haut.jpg);
  background-repeat:no-repeat;
  float:left;
  height:6px;
  width:211px;
  }
  .bg_top_acc_n{
  margin:0px;
  font-size:1px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_top_noir.gif);
  background-repeat:no-repeat;
  height:6px;
  width:211px;
  }
  .rs1 .h2{
  float:left;
  margin:0px;
  padding-top:0px;
  padding-bottom:5px;
  font-family:Arial;
  font-size:12px;
  padding-left:9px;
  background-color:#FFFFFF;
  height:60px;
  width:200px;
  border-left:1px solid #DEDEDE;
  border-right:1px solid #DEDEDE;
  }
  .lib_art_acc{

  margin:0px;
  padding-top:5px;
  padding-bottom:5px;
  font-family:Arial;
  font-size:12px;
  padding-left:9px;
  background-color:#FFFFFF;
  height:60px;
  width:200px;
  border-left:1px solid #DEDEDE;
  border-right:1px solid #DEDEDE;
  }
  .libelle_ville
  {
  margin:0px;

  padding-top:0px;
  font-family:Arial;
  font-size:18px;

  padding-left:0px;
  background-color:#262626;
  color:#FFFFFF;
  height:27px;
  text-align:center;
  width:209px;
  border-left:1px solid #DEDEDE;
  border-right:1px solid #DEDEDE;
  }
  .rs1 .h22{
  float:left;
  margin:0px;
  padding-top:0px;
  padding-bottom:5px;
  font-family:Arial;
  font-size:12px;
  padding-left:9px;
  background-color:#d1d2d4;
  height:50px;;
  width:200px;
  border-left:1px solid #DEDEDE;
  border-right:1px solid #DEDEDE;
  }
  .rs1 .h3{
  float:left;
  margin:0px;
  text-align:center;
  padding-top:10px;
  padding-bottom:1px;
  padding-right:20px;
  padding-left:23px;
  height:164px;
  background-color:#FFFFFF;
  border-left:1px solid #DEDEDE;
  border-right:1px solid #DEDEDE;
  width:166px;

  }
  .h3 .h3_1{
  float:left;width:159px;height:167px;

  }
  .h3 .py{
  width:860px;
  border-left:3px solid #d1d2d4;
  border-right:3px solid #d1d2d4;
  float:left;height:auto;
  font-family:Arial;
  font-size:12px;
  }
  .h3 .h3_2{
  float:left;
  font-family:Arial;
  font-size:18px;
  color:#FFFFFF;
  background-color:#FE0201;
  text-align:center;
  padding-left:2px;
  padding-right:2px;

  padding-top:5px;
  height:30px;
  }
  .rs1 .h4{
  float:left;
  margin:0px;
  padding-bottom:10px;
  padding-top:0px;
  font-family:Arial;
  font-size:12px;
  padding-left:9px;
  background-color:#ffffff;
  height:50px;
  width:200px;
  border-left:1px solid #DEDEDE;
  border-right:1px solid #DEDEDE;

  }
  .prix_vente
  {
  width:105px;
  text-align:center;
  float:left;
  font-size:28px;
  color:#FB0102;

  font-weight:bold;
  padding-left:1px;
  padding-top:0px;
  }
  .au_lieu2
  {
  width:85px;
  margin-left:15px;
  text-align:left;
  font-size:11px;
  font-family:Arial, Helvetica, sans-serif;
  font-weight:normal;
  color:#262626;
  }
  .prix_ventef
  {
  width:105px;
  text-align:center;
  float:left;
  font-size:28px;
  color:#FB0102;

  font-weight:bold;
  padding-left:1px;
  padding-top:1px;
  }
  .taille_15
  {
  font-size:13px;
  font-weight:normal;

  }
  .taille_12
  {
   font-size:15px;
   font-weight:bold;
   text-decoration:line-through;

  }

  .prix_bare
  {
  float:left;
  width:80px;
  margin-left:5px;
  color:#262626;
  }
  .au_lieu
  {
  width:60px;
  text-align:right;
  font-size:11px;
  font-family:Arial, Helvetica, sans-serif;
  font-weight:normal;
  color:#262626;
  }
  .text_prix_b
  {
  width:70px;
  padding-left:10px;
  padding-top:8px;
  font-size:13px;
  font-weight:bold;
  color:#262626;

   }
  .h4 span{
  color:red;
  font-weight:bold;
  }
  .h4 a{
  color:red;
  font-weight:bold;
  text-decoration:underline;
  }
  .h4 a:hover{
  color:red;
  font-weight:bold;
  text-decoration:underline;
  }
  .rs1 .h5{
  float:left;
  margin:0px;
  padding-top:15px;
  padding-bottom:10px;
  font-family:Arial;
  font-size:12px;
  color:#FFFFFF;
  padding-left:34px;
  background-color:#262626;
  height:25px;
  width:175px;
  border-left:1px solid #262626;
  border-right:1px solid #262626;
  background-image: url(https://tn.tunisiebooking.com/images/bg_temp.jpg);
  background-repeat:no-repeat;
  }
  .rs1 .h6{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image: url(https://tn.tunisiebooking.com/images/bg_bas.jpg);
  background-repeat:no-repeat;
  float:left;
  height:6px;
  width:211px;
  }
  .bg_bot_gris{
  margin:0px;

  font-size:2px;
  padding:0px;
  background-image: url(https://tn.tunisiebooking.com/images/bg_bot_gris.gif);
  background-repeat:no-repeat;
  float:left;
  height:3px;
  width:211px;
  }
  /*////////////////////style detail///////////////////////*/

  .dt1 .h1{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/dt01.gif);
  background-repeat:no-repeat;
  float:left;
  height:9px;
  width:868px;
  }
  .dt1 .h3{
  float:left;
  margin:0px;
  padding-top:0px;
  padding-bottom:0px;
  padding-right:0px;
  padding-left:0px;
  height:auto;
  width:866px;


  }
  .dt1 .h6{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image: url(https://tn.tunisiebooking.com/images/dt02.gif);
  background-repeat:no-repeat;
  float:left;
  height:9px;
  width:868px;
  }
  .commad9{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image: url(https://tn.tunisiebooking.com/images/dt02.gif);
  background-repeat:no-repeat;
  float:left;
  height:9px;
  width:868px;
  }
  .dt1 .h3_1{
  float:left;
  width:866px;
   height:auto;
  font-family:Arial;
  font-size:12px;
  }

  .dt2{
  margin:0px;
  height:auto;
  float:left;
  width:546px;
  padding-top:5px;
  padding-left:15px;
  padding-bottom:15px;

  }
  .mod01{
  margin:0px;
  height:auto;
  float:left;
  width:630px;
  padding-top:5px;
  padding-left:15px;
  padding-bottom:15px;
  }
  .mod{
  float:left;clear:both;border:1px solid #c7c7c7;width:820px;padding-left:5px;
  font-weight:bold;color:#c3c3c3;
  }
  .mod span{
  color:#ec2313;
  }
  .tt{
  float:left;padding-bottom:10px;
  }
  .md_resv{
  float:left;padding-bottom:10px;padding-top:5px;
  }
  .commad3{
  float:left;padding-bottom:20px;padding-top:10px;padding-left:5px;
  clear:both;
  }
  .dt2_1{
  float:left;
  height:auto;
  width:415px;padding-left:13px;
  padding-bottom:5px;
  }
  .detail_gauche
  {
  width:500px;
  float:left;
  }
  .detail_gauche2
  {
  width:534px;
  float:left;
  }
  .detail_droite2
  {
  width:356px;

  margin-left:5px;
  float:left;
  margin-top:5px;

  }
  .bg_det
  {
  width:356px;
  height:9px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_det.gif);
  background-position:center;
  background-repeat:no-repeat;
  }
  .bg_b_det
  {
  width:356px;
  height:5px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_b_det22.gif);
  background-position:center;
  background-repeat:no-repeat;
  }
  .det_intern
  {
  width:343px;
  border-left:1px solid #DADADA;
  border-right:1px solid #DADADA;
  background-color:#EFEDEE;
  padding:2px 6px 5px 5px;
  }
  .tittre_der_droite
  {
  width:336px;
  padding-left:4px;
  font-size:22px;
  font-family:Arial;
  color:#262626;
  }
  .contenu_de_bl
  {
  width:343px;
  }
  .bg_in_d_in
  {
  width:343px;
  height:8px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_det_d_in.gif);
  background-position:center;
  background-repeat:no-repeat;
  }
  .bg_b_d_in
  {
  width:343px;
  height:8px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_b_de_in.gif);
  background-position:center;
  background-repeat:no-repeat;
  }
  .inter_2_detail
  {
  width:331px;
  border-left:1px solid #DADADA;
  border-right:1px solid #DADADA;
  background-color:#FAF8F9;
  padding-left:10px;
  padding-top:10px;
  padding-bottom:10px;
  }
  .detail_droite
  {
  width:270px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_detail_droite.jpg);
  background-position:left;
  background-repeat:repeat-y;
  margin-left:55px;
  float:left;
  padding-top:15px;
  padding-left:75px;
  }
  .detail_prix
  {
  margin-top:5px;
  width:495px;
  }
  .detail_offre
  {
  width:240px;
  float:left;
  color:#010101;
  }
  .champ_prix_offre
  {
  width:242px;
  margin-left:10px;
  float:left;
  }
  .rouge
  {
  color:#E42721;
  }
  .chamop_rix_barer
  {
  padding-left:5px;
  padding-right:5px;
  padding-top:7px;
  padding-bottom:7px;
  background-color:#F5F6F8;
  float:left;
  width:75px;
  margin-left:1px;
  }
  .chamop_rix_vente
  {
  padding-left:5px;
  padding-right:5px;
  padding-top:6px;
  padding-bottom:5px;
  background-color:#F5F6F8;
  float:left;
  width:75px;
  margin-left:1px;
  }
  .champ_pourcentage
  {
  width:55px;
  padding:14px 5px 14px 5px;
  background-color:#8F8F8F;
  color:#FE0000;
  text-align:center;
  float:left;
  font-size:22px;
  margin-left:1px;
  }
  .text_prix_det
  {
  font-size:22px;
  font-weight:bold;
  color:#010101;
  width:75px;
  text-align:center;
  }
  .text_prix_det_rouge
  {
  font-size:24px;
  font-weight:bold;
   color:#E72621;
  width:75px;
  text-align:center;
  }
  .prix_initial
  {
  text-align:center;
  font-size:11px;
  font-weight:normal;
  width:75px;
  }
  .reservat{
  float:left;
  height:auto;
  width:450px;
  padding-bottom:5px;
  }
  .ressg{
  float:left;
  height:auto;
  width:450px;
  padding-bottom:15px;
  }
  .ajv{
  float:left;
  height:auto;
  clear:both;
  width:775px;border-bottom:1px solid #333333;
  padding-bottom:10px;
  }
  .dt2_1_t {
  margin:0px;
  padding:0px;
  font-size:22px;
  font-weight:bold;
  color:#020202;
  }
  .resv {
  margin:0px;
  padding:0px;
  font-size:20px;

  }
  .ressg1 {
  float:left;
  clear:both;
  font-size:12px;width:500px;
  padding-top:5px;
  padding-bottom:10px;
  }
  .ressg2 {
  float:left;
  clear:both;width:500px;
  font-size:20px;
  padding-top:5px;
  padding-bottom:10px;

  }
  .sp{
  color:#ed3f34;
  }
  .sp1{
  font-family:Arial;
  font-size:17px;
  padding-bottom:3px;
  font-weight:bold;
  }
  .resv1{
  font-family:Arial;
  font-size:15px;
  padding-bottom:3px;
  font-weight:bold;
  }
  .sp2{
  font-size:16px;
  font-weight:bold;
  color:#ed3f34;

  }
  .dt2_2{
  float:left;
  height:auto;
  padding-top:5px;
  padding-left:10px;
  }
  .dt2_21{
  float:left;
  padding-left:10px;
  padding-top:20px;
  }
  .dt2_22{
  float:left;
  width:62px;
  padding-top:17px;
  height:45px;
  background-image:url(https://tn.tunisiebooking.com/images/icon.gif);
  text-align:center;
  font-size:20px;
  font-weight:bold;
  color:#FFFFFF;
  }
  .dt2_23{
  padding-top:5px;
  float:left;
  clear:both;
  }
  .dt2_3{
  clear:both;
  float:left;
  height:auto;
  padding-bottom:5px;
  }
  .dt2_31{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/dt05.gif);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:518px;
  }
  .dt2_32{
  margin:0px;
  float:left;
  padding-left:10px;
  height:auto;
  border-left:1px solid #d9d9d9;
  border-right:1px solid #d9d9d9;
  width:506px;
  }
  .dt2_h{
  margin:0px;
  float:left;
  padding-left:10px;
  height:auto;
  width:506px;
  }
  .dt2_33{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/dt06.gif);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:518px;
  }
  .hs{
  float:left;font-size:22px;width:490px;padding-bottom:2px;border-bottom:2px solid #ec2214;
  }
  .hs1{
  clear:both;float:left;font-size:18px;width:490px;padding-top:8px;
  }
  .hs1_2{
  float:left;font-size:12px;font-weight:normal;width:250px; margin-top:5px;
  }
  .avantage_myzen_club
  {
  width:490px;
  }
  .prix_par_nui
  {
  width:490px;
  border-top:1px solid #DADADA;
  margin-top:20px;
  }
  .ligne_prix_nuit
  {
  width:470px;
  padding:5px 5px 5px 15px;
  border-bottom:1px solid #DADADA;
  background-color:#FFFFFF;
  background-image:url(https://tn.tunisiebooking.com/images/puce_prix_nuit.gif);
  background-position:left top;
  background-repeat:no-repeat;
  }
  .ligne_prix_nuit:hover
  {
  width:470px;
  padding:5px 5px 5px 15px;
  border-bottom:1px solid #DADADA;
  background-color:#F9F7F7;
  background-image:url(https://tn.tunisiebooking.com/images/puce_gris.gif);
  background-position:left top;
  background-repeat:no-repeat;
  }
  .ligne_av_myzen
  {
  width:472px;
  background-image:url(https://tn.tunisiebooking.com/images/puce_av_myzen.gif);
  background-position:left;
  background-repeat:no-repeat;
  padding-left:18px;
  color:#010100;
  font-size:12px;
  font-family:Arial;
  margin-top:7px;
  }
  .nb_nuit_formule
  {
  width:170px;
  float:left;
  font-size:12px;

  font-family:Arial, Helvetica, sans-serif;
  }
  .prix_vente_f
  {
  width:135px;
  float:left;
  font-size:18px;
  font-weight:bold;
  font-family:Arial, Helvetica, sans-serif;
  color:#E72621;
  }
  .prix_bare_f
  {
  width:70px;
  float:left;
  font-size:13px;
  font-weight:bold;
  font-family:Arial, Helvetica, sans-serif;
  color:#0D0D0D;
  text-decoration:line-through;
  padding-top:5px;
  }
  .pouc_r
  {
  width:50px;
  padding:3px 5px 3px 5px;
  background-color:#E72726;
  color:#FFFFFF;
  font-family:Arial;
  margin-left:30px;
  float:left;
  }
  .contenu_avatage
  {
  width:280px;
  float:left;
  font-family:Arial, Helvetica, sans-serif;
  }
  .contenu_poucentage
  {
  width:73px;
  height:38px;
  color:#656565;
  font-size:26px;
  font-weight:bold;
  padding-top:57px;
  padding-left:115px;
  font-family:Arial, Helvetica, sans-serif;

  margin-left:10px;
  float:left;
  background-image:url(https://tn.tunisiebooking.com/images/tompon.gif);
  background-repeat:no-repeat;
  }
  .hs1_3{
  float:left;font-size:14px;font-weight:bold;width:190px;
  }
  .hs1_4{
  float:left;font-size:14px;font-weight:bold;
  }
  .hs2{
  clear:both;float:left;font-size:18px;width:490px;padding-top:5px;
  }
  .sv{
  clear:both;float:left;font-size:13px;width:70px;padding-top:10px;
  color:#ec2214;
  cursor:pointer;
  padding-left:408px;
  text-decoration:underline;
  }
  .hs3{
  clear:both;float:left;font-size:18px;width:490px;padding-top:5px;
  display:none;
  }
  .hs2_2{
  float:left;font-size:13px;width:210px;padding-left:8px;padding-top:2px;
  }
  .hs2_3{
  float:left;font-size:13px;width:190px;padding-top:2px;
  }
  .hs2_4{
  float:left;font-size:17px;color:#ec2214;
  }
  .dt3{
  margin:0px;
  padding-top:5px;
  padding-bottom:10px;
  float:left;
  height:auto;
  width:278px;
  }
  .mod2{
  margin:0px;
  padding-top:10px;
  padding-bottom:10px;
  float:left;
  text-align:center;
  height:auto;
  height:180px;
  width:195px;
  }
  .mod2-1{
  float:left;padding-left:40px;
  padding-right:30px;width:121px;padding-bottom:15px;}
  .mod2-2{
  float:left;padding-left:15px;clear:both;}
  .mod2-3{
  float:left;padding-top:5px; font-weight:bold;
  background-image:url(https://tn.tunisiebooking.com/images/bgres.gif);
  height:36px; width:171px;}
  .modpy-3{
  float:left;padding-top:5px; font-weight:bold;
  text-align:center;
  background-image:url(https://tn.tunisiebooking.com/images/bgres.gif);
  height:36px; width:171px;}
  .mod3{
  padding-left:15px;float:left;clear:both;padding-top:10px;padding-bottom:250px;
  }
  .modpy{
  float:left;clear:both;padding-top:20px;padding-bottom:50px;
  }
  .mod3-1{
  float:left;border:1px solid #c3c3c3;width:830px;
  }
  .mod3-2{
  float:left; background-image:url(https://tn.tunisiebooking.com/images/bgres1.gif); height:80px; width:820px; font-size:16px; font-weight:bold; padding-left:10px;padding-top:5px;
  }
  .mod3py-2{
  float:left; background-color:#f0f0f0; width:820px; font-size:16px; font-weight:bold; padding-left:10px;padding-top:5px;padding-bottom:10px;
  }
  .mod3-3{
  float:left;padding-left:10px;padding-bottom:5px;
  }
  .commad{
  float:left; font-weight:bold;
  }
  .commad0{
  float:left;border:1px solid #c3c3c3;margin-top:20px;width:826px;
  }
  .commad01{
  float:left; background-color:#f0f0f0;width:816px;padding-left:10px;
  }
  .commad1{
  float:left;padding-left:20px;padding-bottom:5px;background-image:url(https://tn.tunisiebooking.com/images/bg_cd.gif);padding-top:5px; height:20px;width:806px; font-size:16px;
  }
  .commad4{
  float:left;padding-left:10px;padding-top:5px;
  font-size:13px;border:1px solid red;
  clear:both;
  background-color:#f0f0f0;padding-top:5px;width:816px;
  }
  .cmmade4{
  float:left;padding-top:5px;
  font-size:13px;
  clear:both;
  background-color:#f0f0f0;padding-top:5px;width:816px;
  }
  .commad04{
  float:left;padding-top:5px;
  font-size:13px;
  clear:both;
  background-color:#f0f0f0;padding-bottom:10px;width:806px;
  }

  .commad4-1{
  float:left; font-weight:bold;padding-top:15px;padding-bottom:5px;
  }
  .ass{
  float:left;padding-top:2px;padding-bottom:2px;border-bottom:1px solid #f4f4f4;
  }
  .asscd{
  color:#262626;
  text-decoration:underline;
  }
  .asscd a{
  color:#262626;
  text-decoration:underline;
  }
  .asscd a:hover{
  color:#262626;
  text-decoration:underline;
  }

  .commad4-01{
  float:left;padding-bottom:2px;border-bottom:1px solid #f4f4f4;padding-top:2px;
  }
  .cont_ch
  {
  width:460px;padding-left:15px;
  font-weight:bold;
  margin-top:10px;

  }
  .ligne_chambre
  {
  width:800px;
  padding-top:5px;
  padding-left:5px;
  font-size:12px;
  padding-bottom:5px;
  background-color:#FFFFFF;
  border-bottom:1px solid #f4f4f4;
  }
  .commad4-2{
  float:left;width:460px;
  }
  .commadRP-2{
  float:left;width:600px;
  clear:both;padding-top:5px;padding-bottom:5px;
  }
  .comd4-2{
  float:left;width:460px;padding-left:10px;
  }
  .commad4-02{
  float:left;width:460px;padding-left:10px;
  }
  .commad4-0{
  float:left;width:693px;padding-left:10px;
  }
  .comd4-0{
  float:left;width:693px;
  }
  .crep{
  float:left;width:600px;padding-left:10px;
  }
  .crept{
  float:left; width:170px;text-align:right;padding-right:20px;padding-top:3px;
  font-weight:bold;
  }
  .commad4-3{
  float:left; width:235px;text-align:center;}
  .commad4-4{
  float:left;width:80px;padding-right:10px; text-align:right;
  }
  .crept01{
  float:left;width:170px;padding-right:20px; text-align:right;
  }
  .commad5{
  float:left;
  clear:both;padding-left:10px;
  font-weight:bold;
  height:20px;width:806px; font-size:16px;
  }
  .commad05{
  float:left;
  clear:both;padding-left:10px;
  font-weight:bold;padding-bottom:5px;
  height:20px;width:806px; font-size:16px;
  }
  .cmmade05{
  float:left;
  clear:both;padding-left:10px;
  font-weight:bold;padding-bottom:10px;padding-top:10px;
  width:796px; font-size:16px;
  }
  .commad7{
  float:right;
  clear:both;
  font-weight:bold;
  text-decoration:underline;
  height:20px;padding-right:20px;font-size:12px;
  }
  .commad8{
  float:right;
  clear:both;
  color:#ec2216;
  cursor:pointer;
  font-weight:bold;padding-top:5px;
  height:20px;padding-right:20px;font-size:12px;
  }
  .cdd8{
  float:right;
  color:#ec2216;
  cursor:pointer;
  font-weight:bold;padding-top:10px;padding-bottom:15px;
  height:20px;font-size:12px;
  }
  .commad-8{
  float:right;
  clear:both;
  color:#ec2216;
  cursor:pointer;
  font-weight:bold;padding-top:5px;padding-bottom:20px;
  height:20px;padding-right:20px;font-size:12px;
  }
  .mod3-4{
  float:left; clear:both; height:41px;padding-left:10px; background-color:#FFFFFF;width:800px;
  padding-top:2px;padding-bottom:2px; font-size:12px; font-weight:normal;
  }
  .modpy-4{
  float:left; clear:both; height:auto;padding-left:10px; background-color:#FFFFFF;width:800px;
  padding-top:2px;padding-bottom:2px; font-size:12px; font-weight:normal;
  }
  .commad2{
  float:left; clear:both;padding-left:10px; background-color:#FFFFFF;width:796px;
  padding-top:2px;padding-bottom:20px; font-size:12px; font-weight:normal;
  }
  .commad6{
  float:left; clear:both;padding-left:10px; background-color:#FFFFFF;width:796px;
  padding-top:10px; font-size:12px; font-weight:normal;height:auto;

  }
  .commad-6{
  float:left; clear:both;padding-left:10px; background-color:#FFFFFF;width:796px;
  padding-top:10px;padding-bottom:20px; font-size:12px; font-weight:normal;height:auto;

  }
  .commad06{
  float:left; clear:both;padding-left:10px; background-color:#F8F8F8;width:796px;
  color:#333333;
  padding-top:10px;padding-bottom:10px; font-size:11px; font-weight:normal;height:auto;
  }
  .commad06 span{
  text-decoration:underline;
  }
  .commad06 a{
  text-decoration:underline;color:#333333;font-size:11px; font-weight:normal;
  }
  .commad06 a:hover{
  text-decoration:underline;color:#333333;font-size:11px; font-weight:normal;
  }
  .vg{

  float:left;clear:both;padding-top:2px;padding-bottom:4px;
  color:#333333;width:785px;padding-left:3px;
  }
  .vgfocus{
  float:left;clear:both;padding-top:2px;padding-bottom:4px;
  color:#333333;width:785px;padding-left:3px;
  background-color:#FFCCCC;
  }
  .vg1{
  float:left;clear:both;
  }
  .vg01{
  float:left;width:50px;
  }
  .vg2{
  float:left;width:50px;
  }
  .vg02{
  border:1px solid #262626;
  width:40px;
  font-family:Arial;
  font-size:12px;
  }
  .vg0-3{
  border:1px solid #262626;
  width:40px;
  font-family:Arial;
  font-size:12px;
  }
  .vg0-4{
  border:1px solid #262626;
  width:85px;
  font-family:Arial;
  font-size:12px;
  }
  .vg0-5{
  border:1px solid #262626;
  width:60px;
  font-family:Arial;
  font-size:12px;
  }
  .vg3{
  float:left;padding-left:5px;width:120px;
  }
  .vg4{
  float:left;width:110px;
  }
  .vg04{
  float:left;padding-left:10px;width:130px;
  }
  .vg5{
  float:left;padding-left:5px;width:210px;
  }
  .vg6{
  float:left; background-color:#a4a4a4;padding-left:8px;padding-right:8px;padding-top:2px;padding-bottom:3px;color:#FFFFFF; text-decoration:underline;
  }
  .mod3-5{
  float:left;width:535px;border-right:1px solid #d2d2d2;padding-top:5px; height:35px;
  }
  .modpy-5{
  float:left;width:800px;padding-top:5px;
  }
  .mod3-6{
  float:left;padding-left:30px;
  }
  .dt3_1{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image: url(https://tn.tunisiebooking.com/images/dt03.gif);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:278px;
  }
  .dt3_2{
  float:left;
  margin:0px;
  padding-left:10px;
  padding-bottom:20px;
  height:auto;
  border-left:1px solid #ec2214;
  border-right:1px solid #ec2214;
  background-color:#FFFFFF;
  width:266px;
  }
  .dt3_3{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/dt04.gif);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:278px;
  }
  .dt4{
  margin:0px;
  padding-top:0px;
  float:left;
  clear:both;
  width:845px;
  padding-left:15px;
  height:auto;
  }
  .dt4_1{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image: url(https://tn.tunisiebooking.com/images/dt07.jpg);
  background-repeat:no-repeat;

  height:4px;
  width:960px;
  }
  .bg_top{
  margin-top:15px;
  background-image: url(https://tn.tunisiebooking.com/images/bg_top_c.jpg);
  background-repeat:no-repeat;
  height:4px;
  width:960px;
  }
  .bg_bottom{
  background-image: url(https://tn.tunisiebooking.com/images/bg_bottom_cordonn.jpg);
  background-position:left;
  background-repeat:no-repeat;
  height:4px;
  width:960px;
  }
  .text_titre{clear:both; font-family: Arial; padding:10px 10px 8px 10px; background-color:#fdfcfc}
  .contenu_intern_blanche
  {
   padding:0px 0px 10px 0px;
   background-color:#FFFFFF;
   border:1px solid #D9D9D9;
   margin-bottom:40px;
   margin-left:35px;
   clear:both;
  }
  .contenu_intern_blanche_paiement
  {
   padding:0px 0px 0px 0px;
   background-color:#FFFFFF;
   border:1px solid #D9D9D9;
   margin-bottom:40px;
   margin-left:35px;
   clear:both;
  }
  .contenu_intern_blanche_san_margin
  {
   background-color:#FFFFFF;
   border:1px solid #D9D9D9;
   clear:both;
   margin-left:35px;
  }
  .contenu_intern_blanchetotal
  {
   background-color:#FFFFFF;
   border-top: 0px solid #D9D9D9;
   border-right: 1px solid #D9D9D9;;
   border-bottom: 1px solid #D9D9D9;
   border-left: 1px solid #D9D9D9;
   clear:both;
   margin-bottom:40px;
   margin-left:35px;
   height:42px;

  }

  .contenu_intern_blanche_sans_pading
  {
  background-color:#FFFFFF;
  border:1px solid #D9D9D9;
  margin-bottom:40px;
  margin-left:35px;
  }
  .ch_option
  {
   pading-top:10px;
  }
  .ch_acompte
  {
  width:840px;
  padding-left:10px;
  margin-top:10px;
  background-image: url(https://tn.tunisiebooking.com/images/puce_rouge_intern.jpg);
  background-position:left;
  background-repeat:no-repeat;
  }
  .info_acomptef
  {
  clear:both;
  margin-top:5px;
  font-size:11px;
  color:#161616;
  }
  .ligne_interne
  {
  width:840px;
  padding-left:10px;
  }
  .ligne_internef
  {
  clear:both;
  }
  .ligne_interne_code
  {
   clear:both;
   border-top:1px solid #D9D9D9;
   border-right:0px solid #D9D9D9;
   border-bottom:0px solid #D9D9D9;
   margin-top:8px;
  }
  .ligne_interne_code1
  {
   clear:both;
   border-top:1px solid #D9D9D9;
  /* border-right:1px solid #D9D9D9;
   border-bottom:1px solid #D9D9D9;*/
   margin-top:8px;
  }
  .bloc_info_paiement
  {
   background-image:url(https://tn.tunisiebooking.com/theme/images/info_paiement.png);
   background-repeat:no-repeat;
   width:325px;
   height:145px;
   padding:3px;
   float:left;
  }
  .bloc_paiement{
   float:left;
   width: 580px;
   border-top:0px solid #D9D9D9;
   border-right:1px solid #D9D9D9;
   border-left:0px solid #D9D9D9;
   padding-left: 0px;}
  .ligne_paiement_act2f
  {
  width:580px;
  border-bottom:1px solid #DADADA;
  padding:10px 0px 0px 0px;
  background-color:#f7fff3;
  }
  .ligne_paiementf
  {
  width:580px;
  border-bottom:1px solid #DADADA;
  padding:10px 0px 0px 0px;
  }
  .ligne_paiementf3
  {
  width:580px;
  border-bottom:1px solid #DADADA;
  padding:10px 0px 0px 0px;
  }
  .ligne_interne_code_red
  {
   clear:both;
   padding-left:10px;
   border-top:0px solid #D9D9D9;
  }
  .ligne_interne_total
  {
  clear:both;}

  .ligne_paiement_act
  {
  width:840px;
  border-bottom:1px solid #DADADA;
  padding:10px 0px 10px 0px;
  background-color:#F9F7F8;
  }

  .ligne_paiement2
  {
  width:840px;
  border-bottom:1px solid #DADADA;
  padding:12px 0px 0px 0px;
  }
  .bt_radio_p
  {
  padding-left:10px;
  width:25px;
  float:left;
  }

  .text_radio_p
  {
  padding-top:2px;
  width:315px;
  float:left;
  font-size:12px;
  font-weight:bold;
  font-family:Arial;
  }
  .text_radio_p_secf
  {
  padding-top:2px;
  /*width:255px;*/
  float:left;
  font-size:12px;
  height:25px;
  font-weight:bold;
  font-family:Arial;
  }
  .ligne1_cordonnef
  {
  margin-top:10px;
  padding-top:5px;
  padding-left:10px;
  color:#262626;
  font-family:Arial;
  font-size:12px;
  font-weight:bold;
  width:810px;
  }
  .ch_obli
  {
  width:840;
  font-size:11px;
  color:#FD0402;
  padding-left:10px;
  }
  .ch_continuer
  {
  float:left;
  }
  .tel_tn{ padding-bottom:15px;}
  .ligne2_cordonne
  {
  margin-top:5px;
  padding-top:5px;
  padding-left:190px;
  color:#262626;
  font-family:Arial;
  font-size:12px;
  width:630px;
  }
  .text_nom
  {
  width:100px;
  float:left;
  font-weight:bold;
  }
  .div_input
  {
  width:140px;
  float:left;
  margin-left:10px;
  }
  .div_input input
  {
  width:120px;
  }
  .div_input select
  {
  width:123px;
  }
  .text_civi
  {
  width:80px;
  float:left;
  }
  .delect_civi
  {
  width:100px;
  float:left;
  }
  .delect_civi select
  {

  width:50px;
  color:#414141;
  }
  .ligne_intern_contenu1
  {
  clear:both;
   padding-bottom:8px;
   padding-top:12px;
   padding-top:10px;
  }
  .icon_promoCode
  {
     float:left;
       background: url("https://tn.tunisiebooking.com/images/reservasion/icons-sprite.png") no-repeat scroll 0 -45px transparent;
      display: inline-block;
      height: 25px;
      margin: 0 5px 0 2px;
      vertical-align: bottom;
      width: 25px;
   background-position: -108px 0;

  }
  .cod_red{
      border: 1px solid #C1C1C1;
      color: #262626;
      font-size: 14px;
      height: 18px;
      margin-right: 4px;
      width: 120px;}
  .ligne_choix_ch
  {
  width:840px;
  border-bottom:1px solid #D9D9D9;
  padding-bottom:2px;
  padding-top:2px;
  }
  .ligne_total_prixf
  {
  clear:both;
  padding-top:4px;
  border-top:1px solid #d2d1d1;

  }
  .ligne_total_prixf2
  {
  clear:both;
  padding-top:4px;
  border-top:0px solid #d2d1d1;

  }
  .ligne_total_prix1
  {
  clear:both;

  }
  .ligne_total_prix_restant
  {
  width:840px;
  background-color:#F3F3F3;
  border-top:1px solid #DBDBDB;
  }
  .ligne_haut_acompte
  {
  width:840px;
  background-color:#F6F6F6;
  border-top:1px solid #FBFBFB;
  }
  .ligne_taux_acompte
  {
  width:840px;
  background-color:#FFFFFF;
  border-bottom:1px solid #DBDBDB;
  }
  .text_total
  {
   padding-bottom:3px;
   font-size:18px;
   color:#262626;
   width:730px;
   padding-left:10px;
   float:left;
   text-align:left;
  }
  .text_shadow{text-shadow: 0 0 1px rgba(0, 0, 0, 0.44);}
  .text_total1
  {
   font-family:Arial;
   font-size:18px;
   color:#262626;
   padding:10px;
   text-align:right;
   float:left;
   width:752px;
   border-right: 1px solid #D2D1D1;
   height:32px;
   line-height: 1.8;
  }
  .text_total1_face
  {
   font-family:Arial;
   font-size:18px;
   color:#262626;
   padding:10px;
   text-align:right;
   float:left;
   width:752px;

   height:32px;
   line-height: 1.8;
  }
  .m_toutsuite{float:left; width:762px;border-right:1px solid #d2d1d1; padding:10px}
  .text_prix_restantf
  {
   float:left;
   font-size:18px;
   color:#262626;
   font-family:Arial;
   width:762px;
   border-right:1px solid #d2d1d1;
    padding:10px;
   text-align:left;
  }
  .text_pension{clear:both;height:35px; color:#262626; padding-top:4px; border-top:1px solid #f2f2f2}
  .colone_description
  {
  padding-top:6px;
  padding-bottom:6px;
  font-size:12px;
  font-weight:bold;
  color:#6F6F6F;
  width:636px;
  padding-right:10px;
  text-align:right;
  float:left;
  }

  .colone_prix
  {
  width:188px;
  font-size:12px;
  padding-top:6px;
  padding-bottom:6px;
  color:#6F6F6F;
  float:left;
  margin-left:5px;
  border-left:1px solid #DADADA;
  font-weight:bold;
  text-align:center;
  }
  .colone_prix_taux
  {
  width:188px;
  font-size:16px;
  padding-top:7px;
  padding-bottom:7px;
  color:#010101;
  float:left;
  margin-left:5px;
  border-left:1px solid #DADADA;
  font-weight:bold;
  text-align:center;
  }
  .colone_taux
  {
  padding-top:7px;
  padding-bottom:7px;
  font-size:16px;
  font-weight:bold;
  color:#010101;
  width:636px;
  padding-right:10px;
  text-align:right;
  float:left;
  }
  .prix_total2
  {
  font-size:24px;
  padding-top:7px;
  padding-bottom:3px;
  color:#bc2b87;
  float:left;
  margin-left:5px;
  padding-left:60px;
  font-weight:bold;
  font-family:Arial;
  }
  .prix_total1
  {
    font-family:Arial;
   font-size:24px;
   color:#262626;
   padding:10px;
   text-align:right;
   float:left;
   height:32px;
   line-height: 1.8;
   width: 132px;
  }
  .prix_total1_face
  {
    font-family:Arial;
   font-size:24px;
   color:#262626;
   text-align:right;
   float:left;
   height:32px;
   line-height: 1.8;
   width: 132px;
  }
  .prix_total_restant
  {
   font-family:Arial;
   font-size:24px;
   color:#fd0694;
   padding:10px;
   text-align:right;
   float:left;
   height:32px;
   line-height: 1.8;
   width: 132px;
  }
  .chekbox_option
  {
  width:20px;
  padding-top:7px;
  float:left;
  }
  .text_chekbox_option
  {
  padding-top:9px;
  width:300px;
  float:left;
  }
  .si_pour_adulte
  {
  padding-top:9px;
  width:326px;
  float:left;
  }
  .si_pour_adulte select
  {
  width:50px;
  }
  .champ_vides
  {
  width:128px;
  font-size:22px;
  font-weight:bold;
  float:left;
  margin-left:5px;
  padding-left:60px;
  padding-top:1px;
  color:#DD0218;
  border-left:1px solid #D9D9D9;
  }
  .detail_chambre2
  {
  float: right;
  color:#676767;
  font-size:12px;
  }
  .detail_chambref{
      clear:both;
      color: #6C6C6C;
      font-size: 12px;
      font-weight: bold;
      padding-top: 7px;

  }
  .detail_prixchambre
  {
  width:646px;
  float:left;
  color:#020202;
  font-size:12px;
  padding-top:7px;
  }
  .traux_res
  {
  width:45px;
  background-color:#6D6D6D;
  color:#FDFDFD;
  padding:3px 3px 4px 3px;
  font-size:18px;
  float:left;
  text-align:center;
  }
  .prix_res
  {
  width:128px;
  font-size:22px;
  font-weight:bold;
  float:left;
  margin-left:5px;
  padding-left:60px;
  padding-top:1px;
  color:#262626;
  border-left:1px solid #D9D9D9;

  }
  .recalcelez{
   font-family:Arial;
   font-size:16px;
   color:#444444;
   cursor:pointer;
   float:left;
   border-left:0px solid #D9D9D9;
   margin-left:5px;
   padding-top: 4px;
   background:url(https://tn.tunisiebooking.com/theme/images/b_recalculer.png);
   background-repeat:no-repeat;
   font-weight: bold;
   width:134px;
    height:32px;
   text-align: center;
   }
  .recalceler
  {
  width:128px;
  font-size:12px;
  float:left;
  margin-left:5px;
  padding-left:15px;
  padding-top:1px;
  color:#6a9f13;
  font-weight:bold;
  border-left:1px solid #D9D9D9;
  text-decoration:underline;
  background-image: url(https://tn.tunisiebooking.com/images/flech_vert.gif);
  background-repeat:no-repeat;
  background-position: left;
  cursor:pointer;


  }
  .prix_supl
  {
  width:128px;
  font-size:20px;
  float:left;
  margin-left:5px;
  padding-left:60px;
  padding-top:1px;
  color:#262626;
  border-left:1px solid #D9D9D9;
  }
  .contenu_ch_options
  {
  padding:10px;
  font-size:22px;
  border-bottom:1px solid #d2d1d1;
  background-color:#fdfcfc;
  }
  .titre_coordonne{clear:both; font-family:Arial; height:20px; font-size:20px;background-color:#fdfcfc; padding:10px 0px 10px 10px}
  .mode_p{clear:both; font-family:Arial; font-size:20px;background-color:#fdfcfc;height:20px;
      padding: 10px 0 10px 10px;}
  .choix_option
  {
  width:840px;
  padding-left:10px;
  background-image: url(https://tn.tunisiebooking.com/images/puce_rouge_intern.jpg);
  background-position:left;
  background-repeat:no-repeat;
  font-size:18px;
  margin-top:10px;
  }
  .contenu_image_p
  {
   width:190px;
   /*border:4px solid #F2F4F3;*/
   float:left;
   margin: 4px 6px 10px 10px;
  }
  .det_sejour_f
  {
  float:left;
  }
  .lib_pays_sejour
  {
  width:640px;
  font-size:16px;
  font-weight:bold;
  color:#333333;
  margin-top:5px;
  }
  .lib_art_det
  {
  width:640px;
  font-size:18px;
  font-weight:bold;
  color:#262626;
  }
  .det_total_sejou
  {
  border:0px solid #EC2214;
  padding-top:10px;
  padding-left:10px;
  height:80px;
  margin-top:10px;
  }
  .img_ligne_detai
   {
      background-image:url(https://tn.tunisiebooking.com/images/reservasion/icons-sprite.png);
  	background-repeat:no-repeat;
  	background-position: -35px -45px;
  	display: inline-block;
  	height: 19px;
      margin: 0 5px 0 2px;
      vertical-align: bottom;
      width: 18px;
  	float:left
  }
  .img_ligne_nuit
   {
      background-image:url(https://tn.tunisiebooking.com/images/reservasion/icons-sprite.png);
  	background-repeat:no-repeat;
  	display: inline-block;
  	background-position: 0 -45px;
  	height: 19px;
      margin: 0 5px 0 6px;
      vertical-align: bottom;
      width: 18px;
  	float:left;
  }
  .img_ligne_participant
   {
      background-image:url(https://tn.tunisiebooking.com/images/reservasion/icons-sprite.png);
  	background-repeat:no-repeat;
  	display: inline-block;
  	background-position: -19px -45px;
  	height: 19px;
      margin: 0 8px 0 0px;
      vertical-align: bottom;
      width: 15px;
  	float:left;
  }
  .img_ligne_formule1
   {
      background-image:url(https://tn.tunisiebooking.com/images/reservasion/icons-sprite.png);
  	background-repeat:no-repeat;
  	display: inline-block;
  	background-position: -375px -32px;
  	height: 22px;
  	padding-top:3px;
      margin: 0 5px 0 10px;
      vertical-align: bottom;
      width: 24px;
  	float:left;
   }
  .bloc_date
  {
  float: left;margin: 0 6px 0 0; font-size:16px; font-weight:bold;
  }

  .bloc_date_det
  {
  	float: left;
  	margin: 0 6px 0 0;
  	font-size:18px;
  	line-height:0.9em;
      background-image:url(https://tn.tunisiebooking.com/images/icone_cal.png);
  	background-repeat:no-repeat;
  	background-position:left;
  	padding-left:20px;
  	padding-top:4px;
  }
  .bloc_deur_det
  {
  	float: left;
  	margin: 0 6px 0 0;
  	font-size:18px;
  	line-height:0.9em;
      background-image:url(https://tn.tunisiebooking.com/images/icone_montre.png);
  	background-repeat:no-repeat;
  	background-position:left;
  	padding-left:24px;
  	height:18px;
  	padding-top:4px;
  }
  .div_participan_det{
      background-image:url(https://tn.tunisiebooking.com/images/icone_pass.png);
  	background-repeat:no-repeat;
  	background-position:left;
  	padding-left:25px;
  	height:18px;
  float:left;padding-top:2px; font-size:18px;
  }


  .ligne_detai2
  {
  	margin-top:35px;
  	clear:both;
  	color:#010101;
  	font-size:12px;
  	font-family:Arial, Helvetica, sans-serif;
  }
  .div_participan{float:left;padding-top:4px; font-size:18px}
  .div_chambre
  {
  float:left;
  width:455px;
  }
  .un_chambre{margin:4px 5px 2px 2px; font-size:16px}
  .dt4_2{
  margin:0px;
  padding-left:10px;
  height:auto;
  float:left;
  border-left:1px solid #d9d9d9;
  border-right:1px solid #d9d9d9;
  background-color:#FFFFFF;
  width:913px;
  }
  .dt4_33{
  margin:0px;
  padding:10px 30px 10px 30px;
  border-left:1px solid #d9d9d9;
  border-right:1px solid #d9d9d9;
  background-color:#FFFFFF;
  width:863px;
  text-align:justify;
  font-family:Verdana, Arial, Helvetica, sans-serif;
  }
  .dt4_44{
  margin:0px;
  padding:10px 30px 10px 30px;
  border-left:1px solid #d9d9d9;
  border-right:1px solid #d9d9d9;
  background-color:#FFFFFF;
  width:863px;

  }
  .qui_nous
  {
  width:863px;
  margin-top:10px;
  margin-bottom:20px;
  text-align:center;
  font-size:14px;
  color:#FF0000;
  font-weight:bold;
  }

  .dt4h{
  margin:0px;
  padding-left:10px;
  height:auto;
  float:left;
  width:813px;
  }
  .dt4_3{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/dt08.jpg);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:925px;
  }
  .det{
  float:left;font-size:18px;width:255px;padding-bottom:3px;border-bottom:1px solid #ec2214;
  }
  .det0{
  float:left;clear:both;padding-top:15px;width:260px;
  padding-left:5px;
  }
  .contenu_temps_restant
  {
  width:160px;
  padding:5px 0px 5px 40px;
  border-left:1px solid #D2D1D6;
  border-top:1px solid #D2D1D6;
  border-bottom:2px solid #D2D1D6;
  border-right:2px solid #D2D1D6;
  background-image:url(https://tn.tunisiebooking.com/images/montre_rouge.jpg);
  background-position:left;
  background-repeat:no-repeat;
  color:#020202;
  font-size:14px;
  font-weight:bold;

  }
  .det1{
  float:left;clear:both;width:260px;
  }
  .sl{
  color:#eb2115;
  font-size:14px;
  font-weight:bold;
  }
  .det1_1{
  float:left;width:125px;
  }
  .date_dpart_prix2
  {
  width:300px;
  color:#010101;
  font-weight:bold;
  font-size:12px;

  font-family:Arial, Helvetica, sans-serif;
  }
  .date_dpart_prix2 select
  {
  font-size:12px;
  }

  .date_dpart_prix
  {
  width:125px;
  color:#010101;
  font-weight:bold;
  font-size:12px;
  margin-top:5px;
  font-family:Arial, Helvetica, sans-serif;
  }
  .date_dpart_prix3
  {
  width:300px;
  color:#010101;
  font-weight:bold;
  font-size:12px;
  margin-top:5px;
  font-family:Arial, Helvetica, sans-serif;

  margin-top:15px;
  }
  .select_date_prix
  {
  width:260px;
  }
  .select_date_prix select
  {
  width:250px;
  font-size:11px;
  border:1px solid #A5ACB2;
  color:#010101;
  margin-top:5px;

  }
  .select_date_prix select .test
  {
  text-decoration:line-through;
  }
  .contenu_participant
  {
  width:270px;
  }
  .contenu_participant2
  {
  width:270px;
  margin-top:15px;
  }
  .contenu_participant22
  {
  width:315px;
  margin-top:15px;
  }
  .champ_participant_ad
  {
  float:left;
  width:52px;
  margin-left:62px;
  font-size:11px;
  font-family:Arial;
  }
  .champ_participant_en
  {
  float:left;
  width:55px;
  margin-left:17px;
  font-size:11px;
  font-family:Arial;
  }
  .champ_participant_en2
  {
  float:left;
  width:100px;
  margin-left:17px;
  font-size:11px;
  font-family:Arial;
  }
  .champ_participant
  {
  float:left;
  width:70px;
  margin-left:10px;
  font-size:12px;
  }
  .champ_participant select
  {
  width:50px;
  }
  .champ_participantf
  {
  float:left;
  width:115px;
  margin-left:10px;
  font-size:12px;
  }
  .champ_participantf select
  {
  width:50px;
  }
  .champ_participant22
  {
  float:left;
  width:60px;
  margin-left:1px;
  font-size:11px;
  font-family:Arial, Helvetica, sans-serif;
  font-weight:bold;
  padding-top:2px;
  }
  .champ_participant2
  {
  float:left;
  width:60px;
  margin-left:1px;
  font-size:11px;
  font-family:Arial, Helvetica, sans-serif;
  font-weight:bold;
  }
  .champ_participant2 select
  {
  width:50px;
  font-size:12px;
  }

  .action_form
  {
  width:250px;
  margin-top:50px;
  text-align:center;
  }
  .action_form2
  {
  width:331px;
  margin-top:50px;
  text-align:center;
  }
  .det1_2{
  float:left;width:130px;font-size:13px;
  }
  .det1_3{
  float:left;width:80px;font-size:16px;color:#ec2214;padding-bottom:2px;
  }
  .Enc{
  float:left;width:160px;font-size:13px;padding-bottom:5px;
  clear:both;padding-top:5px;padding-left:8px;
  font-family:Arial, Helvetica, sans-serif;
  }
  .det1_4{
  float:left;width:130px;font-size:12px;
  }
  .voy{
  height:18px;
  width:60px;
  font-family:arial;
  font-size:12px;
  border:1px solid #262626;
  }
  .cab{
  height:18px;
  width:40px;
  font-family:arial;
  font-size:12px;
  border:1px solid #262626;
  }
  .voy1{
  height:18px;
  width:40px;
  font-family:arial;
  font-size:12px;
  border:1px solid #262626;
  }
  .but{
  border:0px;
  background-image: url(https://tn.tunisiebooking.com/images/b_1.gif);
  width:92px;
  cursor:pointer;
  color:#FFFFFF;
  font-family:Arial, Helvetica, sans-serif;
  font-size:13px;
  padding-bottom:3px;
  height:21px;
  }
  .but1{
  border:0px;
  background-image: url(https://tn.tunisiebooking.com/images/achat.gif);
  width:115px;
  cursor:pointer;
  height:21px;
  }
  .but2{
  border:0px;
  background-image: url(https://tn.tunisiebooking.com/images/b_2.gif);
  width:124px;
  color:#FFFFFF;
  cursor:pointer;
  font-family:Arial, Helvetica, sans-serif;
  font-size:13px;
  padding-bottom:3px;
  height:21px;
  }
  .ds{
  float:left;font-size:22px;width:885px;padding-bottom:2px;border-bottom:2px solid #ec2214;
  margin-left:10px;
  }
  .ds_d{
  float:left;font-size:22px;padding-left:10px;width:800px;padding-bottom:2px;border-bottom:2px solid #ec2214;
  }
  .dsmcp{
  float:left;font-size:20px;width:825px;padding-bottom:2px;border-bottom:2px solid #ec2214;
  padding-top:20px;padding-left:20px;border-top:2px solid #4f4f4f;
  font-weight:bold;

  }
  .ccm1{
  float:left;font-size:20px;width:208px;
  padding-top:20px;padding-left:30px;color:#ea2215;font-weight:bold;
  }
  .ccm1m{
  float:left;font-size:20px;width:160px;
  padding-top:20px;padding-left:30px;color:#ea2215;font-weight:bold;
  }
  .ccm1c{
  float:left;font-size:20px;width:220px;
  padding-top:20px;padding-left:30px;color:#ea2215;font-weight:bold;
  }
  .ccm1p{
  float:left;font-size:20px;width:230px;
  padding-top:20px;padding-left:30px;color:#ea2215;font-weight:bold;
  }
  .ccm1e{
  float:left;font-size:20px;width:290px;
  padding-top:20px;padding-left:30px;color:#ea2215;font-weight:bold;
  }
  .ccm1em{
  float:left;font-size:20px;width:340px;
  padding-top:20px;padding-left:30px;color:#ea2215;font-weight:bold;
  }
  .ccm{
  margin:0px;
  padding-top:0px;
  float:left;
  clear:both;
  width:850px;
  padding-left:7px;
  height:auto;
  }
  .dth{
  margin:0px;
  padding-top:0px;
  float:left;
  clear:both;
  width:850px;
  padding-left:7px;
  height:auto;
  }
  .ccmp0{
  margin:0px;
  padding-top:0px;
  float:left;
  clear:both;border:1px solid blue;
  width:820px;
  padding-left:7px;
  height:auto;
  }
  .pwf{
  margin:0px;
  padding-top:0px;
  float:left;
  clear:both;
  width:830px;
  padding-left:15px;
  height:auto;
  }
  .dsh{
  float:left;font-size:22px;width:845px;padding-bottom:2px;border-bottom:2px solid #262626;
  font-size:22px; font-weight:bold;
  }
  .det2{
  float:left;clear:both;padding-left:80px;padding-top:10px;
  }
  .det02{
  float:left;clear:both;padding-left:68px;padding-top:5px;
  }
  .det3{
  float:left;clear:both;padding-top:25px;width:260px;
  }
  .ds1{
  float:left;clear:both;width:910px;
  }
  .dsh1{
  float:left;clear:both;width:845px;
  padding-top:20px;padding-bottom:5px;
  }
  .dsh01{
  float:left;clear:both;width:850px;
  padding-top:20px;
  }
  .ccm3{
  float:left;clear:both;width:810px;padding-bottom:40px;
  padding-top:20px;padding-left:30px;
  }
  .ccm3pr{
  float:left;clear:both;width:810px;padding-bottom:5px;
  padding-top:20px;padding-left:30px;
  }
  .dsh01_1{
  float:left;
  height:33px;
  width:2px;
  background-image:url(https://tn.tunisiebooking.com/images/bg03.gif);
  background-repeat:no-repeat;
  }
  .ccm_1{
  float:left;
  height:5px;
  font-size:2px;
  width:793px;
  background-image:url(https://tn.tunisiebooking.com/images/ccm.gif);
  background-repeat:no-repeat;
  }
  .dsh01_2{
  float:left;
  height:25px;
  padding-top:8px;
  color:#333333;
  width: 842px;
  font-family:arial;
  text-decoration:underline;
  font-size:12px;
  background-color:#f4f4f4;
  }
  .dsh01_2 a{
  color:#333333;
  font-family:arial;
  font-size:12px;
  }
  .dsh01_2 a:hover{
  color:#a10a03;
  font-weight:bold;
  font-family:arial;
  font-size:12px;
  }
  .dsh01_3{
  float:left;
  height:33px;
  width:2px;
  background-image:url(https://tn.tunisiebooking.com/images/bg04.gif);
  background-repeat:no-repeat;
  }
  .ccm_2{
  float:left;
  width:761px;
  padding-left:20px;padding-bottom:60px;padding-top:25px;
  border-left:1px solid #dad9d7;padding-right:10px;
  border-right:1px solid #dad9d7;
  }
  .ccm_3{
  float:left;
  height:5px;
  width:793px;font-size:2px;
  background-image:url(https://tn.tunisiebooking.com/images/ccm2.gif);
  background-repeat:no-repeat;
  }

  .dsh2{
  float:left;
  height:33px;
  clear:both;
  width:846px;
  padding-bottom:5px;
  }
  .dsh02{
  float:left;
  height:33px;
  clear:both;
  width:846px;border-top:2px solid #4f4f4f;
  padding-bottom:5px;
  }
  .dsh2_1{
  float:left;
  height:33px;
  width:4px;
  background-image:url(https://tn.tunisiebooking.com/images/h1.gif);
  background-repeat:no-repeat;
  }
  .dsh2_2{
  float:left;
  height:33px;
  width: 838px;
  font-family:arial;
  font-size:12px;
  font-weight:bold;
  color:#FFFFFF;
  background-color:#ec2216;
  }
  .dsh2_3{
  float:left;
  height:33px;
  width:4px;
  background-image:url(https://tn.tunisiebooking.com/images/h2.gif);
  background-repeat:no-repeat;
  }
  .ds1_1{
  float:left;width:445px;padding-left:10px;padding-right:20px;padding-top:10px;padding-bottom:20px;
  }
  .ds1_1 p
  {
  text-align:justify;
  }
  .ce_prix_comp
  {
  font-size:18px;
  padding-bottom:2px;
  border-bottom:2px solid #ec2214;

  }
  /*////////////////////////////////////////////popup/////////////////////////////////////////////////////*/
  <!-- style de popup
  .textviol {color: #783cc0}
  #divLogin {
  	visibility: hidden;
  	position: absolute;
  	width: 220px;
  	height: 178px;
  	left: 58%;
  	top: 255px;
  	margin-left: -337px;
  	z-index: 100;
  	text-align: left;
  }
  #divMail {
  	visibility: hidden;
  	position: absolute;
  	width: 220px;
  	height: 178px;
  	left: 65%;
  	top: 20px;
  	margin-left: -237px;
  	z-index: 100;
  	text-align: left;
  }

  #divLogin #entete #fermer, #divMail #entete #fermer {
  	width: 172px;
  	height: 42px;
  }

  #divLogin #formul {
  	background: #b6d3f4;
  	z-index:1000;
  }
  #divLogin #entete #fermer #lienfermer, #divMail #entete #fermer #lienfermer {
  	display: block;
  	width: 172px;
  	height: 42px;
  	z-index:1000;
  }

  #divOver {
  	visibility: hidden;
  	position: absolute;
  	top: 0;
  	left: 0;
  	z-index: 80;
  	width: 100%;
  	/*height: 178px;*/
  	background: #262626;
  }
  /*//////style interne/////*/
  .fer_zen{
  margin:0px;
  float:left;
  height:27px;
  width:470px;
  font-size: 12px;
  font-family: Arial;
  background-image: url(https://tn.tunisiebooking.com/images/bg02.gif);
  color: #262626;
  cursor:pointer;
  }
  .fer_voy{
  margin:0px;
  float:left;
  height:27px;
  width:470px;

  font-size: 12px;
  font-family: Arial;
  background-image: url(https://tn.tunisiebooking.com/images/bg02.gif);
  color: #262626;
  }
  .pop1{
  float:right;padding-right:10px;padding-top:5px;
  }
  .pop2{
  width:470px;float:left;clear:both;padding-top:5px;padding-bottom:5px;background-color:#ec2216; font-size:12px;font-weight:bold;font-family:arial;color:#FFFFFF; text-align:center;
  }
  .pop3{
  width:466px;;float:left;clear:both;border-bottom:2px solid #ec2216;border-left:2px solid #ec2216;border-right:2px solid #ec2216;padding-top:30px; background-color:#FFFFFF;
  }
  .pop4{
  float:left;clear:both;width:466px;padding-top:5px;
  }
  .pop4_1{
  float:left;padding-top:3px;text-align:right;width:135px;
  }
  .pop4_2{
  float:left; padding-left:10px;
  }
  .inp{
  border:1px solid #54585b; height:18px;width:170px;
  }
  .pop_b{
  border:0px;
  width:25px;
  height:24px;
  cursor:pointer;
  background-image:url(https://tn.tunisiebooking.com/images/ok.gif);
  }
  .pop5{
  float:left; width:200px;padding-top:5px;color:#535353;clear:both;padding-left:145px; text-decoration:underline;
  }
  .pop5 a{
  color:#535353;text-decoration:underline;
  }
  .pop5 a:hover{
  color:#535353;text-decoration:underline;
  }
  .pop6{
  float:left;padding-top:20px;padding-left:40px;
  }
  .pop7{
  float:left;
  font-size:2px;
  height:30px;clear:both;
  }
  .pop6_1{
  color:#e92318; font-size:15px; text-decoration:underline;
  cursor:pointer;
  }
  .insp1{
  float:left;padding-top:3px;width:100px;
  }
  .chk{
  float:left;padding-top:3px;width:20px;
  }
  .inx{
  float:left;padding-top:3px;width:120px;
  }
  .insp_info{
  float:left;padding-top:3px;width:115px;
  }
  .conex1{
  float:left;padding-top:3px;width:100px;padding-right:8px;
  font-weight:bold; text-align:right;color:#333333;
  }
  .pw02{
  float:left;padding-top:5px;width:70px;padding-right:8px;
  color:#333333;padding-left:20px;
  }
  .insp4{
  float:left;padding-top:5px;padding-left:5px;width:120px;
  font-size:11px;
  }
  .insp2{
  float:left;
  }
  .ccmp01{
  float:left;width:150px;
  }
  .chk2{
  float:left;width:230px;padding-left:5px;padding-top:5px;
  }
  .mccp7{
  float:left;width:300px;padding-left:5px;padding-top:5px;
  }
  .insp3{
  border:1px solid #54585b; height:15px;width:150px;
  }
  .fx{
  border:1px solid #54585b; height:15px;width:100px;
  }
  .fx1{
  border:1px solid #54585b; height:15px;width:130px;
  }
  .insp3_1{
  border:1px solid #54585b; height:18px;width:153px;
  font-family:Arial;
  font-size:12px;
  }
  .pop8{
  clear:both;float:left;padding-bottom:20px;
  }
  .pop9{
  float:left;width:200px;clear:both;padding-bottom:15px;padding-left:40px;font-size:13px;
  }
  .pop10{
  clear:both;float:left;padding-left:40px;width:300px;padding-bottom:8px;
  }
  .pop11{
  clear:both;float:left;padding-left:160px;padding-bottom:8px;
  }
  .valid{
  border:0px;
  width:122px;
  height:21px;
  cursor:pointer;
  background-image:url(https://tn.tunisiebooking.com/images/valider.gif);
  }
  .imprimer{
  border:0px;
  width:71px;
  height:22px;
  cursor:pointer;
  background-image:url(https://tn.tunisiebooking.com/images/imp.jpeg);
  }
  .imprimer2{
  border:0px;
  width:116px;
  height:42px;
  cursor:pointer;
  background-image:url(https://tn.tunisiebooking.com/images/impr.gif);
  }
  /*///////////////////////////////////////////////container popup///////////////////////////////////////////////*/
  .cont1{
  clear:both;
  float:left;
  width:909px;
  }
  .cont2{
  float:left;
  width:909px;
  }
  .cont3{
  clear:both;
  float:left;
  width:909px;
  }
  .cont03{
  clear:both;
  float:left;
  width:470px;
  font-family:Arial;
  font-size:12px;
  color:#333333;
  border-bottom:3px solid #d1d2d6;
  border-left:3px solid #d1d2d6;
  border-right:3px solid #d1d2d6;
  background-color:#FFFFFF;
  }
  .cont003{
  clear:both;
  padding-top:30px;
  float:left;
  padding-left:20px;
  }
  .ong1{
  float:left;width:290px;padding-left:25px;padding-top:8px;
  }
  .ong2{
  float:left;width:92px;
  border-left:1px solid #b70515;padding-right:5px;padding-left:8px;padding-top:2px;
  }
  .ong3{
  float:left;width:72px;
  border-left:1px solid #b70515;padding-right:8px;padding-left:8px;padding-top:2px;
  }
  .ong4{
  height:22px;float:left;width:84px;border-left:1px solid #b70515;padding-right:8px;padding-left:8px;padding-top:10px;
  }
  .ong5{
  float:left;width:75px;
  border-left:1px solid #b70515;padding-right:8px;padding-left:8px;padding-top:2px;
  }
  .ong6{
  height:22px;float:left;width:90px;border-left:1px solid #b70515;padding-right:8px;padding-left:8px;padding-top:10px;
  }
  .ong7{
  float:left;width:75px;height:30px;
  border-left:1px solid #b70515;padding-right:10px;padding-left:20px;padding-top:2px;
  }
  .pd{
  clear:both;float:left;border-top:1px solid #ec2216;width:845px;padding-bottom:15px;
  }
  .pd1{
  float:left;width:315px;padding-left:5px;padding-top:10px;height:80px;
  }
  .pd1_1{
  float:left;width:215px;padding-left:7px;
  }
  .pd1_2{
  float:left;width:215px;clear:both; color:#323232;font-weight:bold;
  }
  .pd1_3{
  float:left;width:215px;clear:both;
  }
  .pd2{
  float:left;width:104px;
  color:#333333;
  font-size:13px;
  font-weight:bold;
  background-color:#f3f3f5;text-align:center;
  height:75px;
  border-left:1px solid #ffffff;padding-top:10px;
  }
  .pd3{
  color:#333333;
  font-weight:bold;
  font-size:13px;
  float:left;width:88px;background-color:#f3f3f5;text-align:center;height:75px;
  border-left:1px solid #ffffff;padding-top:10px;
  }
  .pd4{
  color:#333333;
  font-size:13px;
  font-weight:bold;
  float:left;width:100px;border-left:1px solid #ffffff;padding-top:10px;background-color:#f3f3f5;text-align:center;height:75px;
  }
  .pd5{
  color:#333333;
  font-weight:bold;
  font-size:16px;
  float:left;width:91px;background-color:#fcecef;text-align:center;height:75px;
  border-left:1px solid #ffffff;padding-top:10px;
  }
  .pd6{
  color:#ec2216;
  font-weight:bold;
  font-size:16px;background-color:#fcecef;
  float:left;width:106px;border-left:1px solid #ffffff;padding-top:10px; text-align:center;height:75px;
  }
  .pd7{
  color:#333333;
  font-size:12px;
  font-weight:bold;
  float:left;width:122px;background-color:#f3f3f5;text-align:center;height:75px;
  border-left:1px solid #ffffff;padding-top:10px;
  }
  .pd7_1{
  font-weight:bold;padding-top:5px; text-decoration:underline;color:#262626;
  }
  .pd7_2{
  float:left; clear:both; padding-top:20px;padding-left:15px;
  }
  .nmp{
  float:left; clear:both; padding-top:20px;padding-left:8px;
  }
  .pag2{
  float:left;
  height:23px;
  padding-top:5px;
  border-top:1px solid #ec2216;
  clear:both;
  width:846px;
  padding-bottom:5px;
  }
  .pagrs{
  float:left;
  height:23px;
  padding-top:5px;
  clear:both;
  width:900px;
  padding-bottom:5px;
  }
  .pag_1{
  float:left;
  height:23px;
  width:3px;
  background-image:url(https://tn.tunisiebooking.com/images/pg.gif);
  background-repeat:no-repeat;
  }
  .pag_2{
  float:left;
  height:23px;
  width: 840px;
  font-family:arial;
  font-size:12px;
  color:#FFFFFF;
  background-color:#ec2216;
  }
  .pagrs_2{
  float:left;
  height:23px;
  width: 863px;
  font-family:arial;
  font-size:12px;
  color:#FFFFFF;
  background-color:#ec2216;
  }
  .pag_21{
  float:right;
  padding-top:3px;
  height:20px;
  font-family:arial;
  font-size:12px;
  color:#FFFFFF;
  background-color:#ec2216;
  }
  .pag01{
  font-family:arial;
  font-size:12px;
  text-decoration:none;
  color:#FFFFFF;
  }
  .pag01 a{
  font-family:arial;
  font-size:12px;text-decoration:none;
  color:#FFFFFF;
  }
  .pag01 a:hover{
  font-family:arial;
  font-size:12px;text-decoration:none;
  color:#FFFFFF;
  }
  .pag02{
  font-family:arial;
  font-size:12px;text-decoration:none;
  color:#FFFFFF;
  }
  .pag02:hover{
  font-family:arial;
  font-size:12px;
  color:#FFFFFF;
  text-decoration:none;
  background:#323232;
  }
  .pag03{
  font-family:arial;

  font-size:12px;
  text-decoration:none;
  color:#FFFFFF;
  background:#323232;
  }
  .pag_3{
  float:left;
  height:23px;
  width:3px;
  background-image:url(https://tn.tunisiebooking.com/images/pg1.gif);
  background-repeat:no-repeat;
  }
  .mcp_s{
  float:left; text-align:center;width:150px;
  }
  .mcp_pg{
  float:left; text-align:center;width:170px;border-left:1px solid #333333;
  }
  .mcp_sl{
  float:left; text-align:center;width:170px;border-left:1px solid #333333;color:#a20800;font-weight:bold; text-decoration:underline;
  }
  .mcp_sl1{
  float:left; text-align:center;width:150px;color:#a20800;font-weight:bold; text-decoration:underline;
  }
  .px1{float:left;color:#ec2216;padding-left:430px; font-size:11px;}
  .px2{float:left;color:#ec2216;padding-left:40px; font-size:11px;}
  .px3{float:left;color:#ec2216;padding-left:55px; font-size:11px;}
  .alt{
  clear:both;
  float:left;
  height:auto;
  width:520px;
  padding-bottom:5px;padding-left:4px;
  }
  .alt1{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/ar06.gif);
  background-repeat:no-repeat;
  float:left;
  height:42px;
  width:4px;
  }
  .alt2{
  margin:0px;
  float:left;
  height:35px;
  font-size:12px;
  font-weight:bold;
  padding-top:5px;
  padding-left:10px;
  border-top:1px solid #ec2216;
  border-bottom:1px solid #ec2216;
  background-color:#fcecef;
  width:490px;
  }
  .alt3{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/ar07.gif);
  background-repeat:no-repeat;
  float:left;
  height:42px;
  width:4px;
  }
  .reg{
  float:left;clear:both;width:850px;
  padding-top:20px;
  }
  .pwo{
  float:left;clear:both;width:820px;
  }
  .ctc{
  float:left;clear:both;width:840px;
  padding-top:20px;padding-left:10px;
  }
  .reg_1{
  float:left;
  height:68px;
  width:4px;
  background-image:url(https://tn.tunisiebooking.com/images/ar08.gif);
  background-repeat:no-repeat;
  }
  .ctc_1{
  float:left;
  height:88px;
  width:4px;
  background-image:url(https://tn.tunisiebooking.com/images/ctc.gif);
  background-repeat:no-repeat;
  }
  .reg_2{
  float:left;
  height:66px;
  color:#333333;
  border-bottom:1px solid #c3c3c3;
  border-top:1px solid #c3c3c3;
  width: 842px;
  font-family:arial;
  font-size:12px;
  }
  .pw{
  float:left;
  height:66px;
  color:#333333;
  border-bottom:1px solid #d80113;
  width: 822px;
  font-family:arial;
  font-size:12px;
  }
  .ctc_2{
  float:left;
  color:#333333;
  border-bottom:1px solid #c3c3c3;
  border-top:1px solid #c3c3c3;
  width: 820px;
  height:86px;
  font-family:arial;
  font-size:12px;
  }
  .reg_3{
  float:left;
  height:68px;
  width:4px;
  background-image:url(https://tn.tunisiebooking.com/images/ar09.gif);
  background-repeat:no-repeat;
  }
  .ctc_3{
  float:left;
  height:88px;
  width:4px;
  background-image:url(https://tn.tunisiebooking.com/images/ctc1.gif);
  background-repeat:no-repeat;
  }
  .reg1{
  clear:both;float:left;padding-bottom:40px;
  padding-top:30px;padding-left:250px;
  }
  .reginfo{
  clear:both;float:left;padding-bottom:10px;
  padding-top:30px;padding-left:250px;
  }
  .mccp{
  clear:both;float:left;padding-bottom:10px;padding-left:0px;
  background-color:#FFFFFF;
  }
  .reg1_1{
  margin:0px;
  font-size:1px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/rg1.gif);
  background-repeat:no-repeat;
  float:left;
  height:6px;
  width:301px;
  }
  .reg1_2{
  margin:0px;
  padding:0px;
  border-left:1px solid #ec2216;
  border-right:1px solid #ec2216;
  background-repeat:no-repeat;
  float:left;clear:both;
  height:auto;
  width:299px;
  }
  .reg1_3{
  margin:0px;
  font-size:1px;
  padding:0px;
  clear:both;
  background-image:url(https://tn.tunisiebooking.com/images/rg2.gif);
  background-repeat:no-repeat;
  float:left;
  height:6px;
  width:301px;
  }
  .reg1_4{
  clear:both;float:left;padding-left:20px;width:279px;padding-bottom:8px;
  }
  .mccp6{
  clear:both;float:left;padding-left:25px;width:400px;padding-bottom:8px;
  }
  .reg_ctc{
  clear:both;float:left;padding-left:20px;width:400px;padding-bottom:8px;
  }
  .reg1_41{
  clear:both;float:left;padding-left:20px;width:279px;padding-bottom:8px;padding-top:10px;
  }
  .reg1_5{
  float:left;width:200px;clear:both;padding-bottom:15px;padding-left:20px;font-size:13px;
  color:#a30901;padding-top:10px;
  }
  .reg1_6{
  clear:both;float:left;padding-left:100px;padding-bottom:8px;
  }
  .cbd{
  float:left;clear:both;width:195px;height:15px;

  }
  .cbd_insc{
  float:left;clear:both;width:195px;height:15px;
   padding-left:10px;
  }
  .cbd_insc a
  {
  color:#474747;
  }
  .cbd2{
  float:left;clear:both;width:197px;
  font-size:14px;
  font-weight:bold;
  font-family:Arial;
  }
  .fl-dr2{
  font-family:arial;
  font-size:12px;
  clear:both;
  height:15px;
  color:#FFFFFF;
  }
  .trf{
  float:left;clear:both;width:400px;
  }
  .resv3{
  float:left;clear:both;width:450px;padding-top:20px;
  }
  .resv3 span{
  color:#eb2115; font-size:16px;
  }
  .cnx_1{
  margin:0px;
  font-size:1px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/conx1.gif);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:378px;
  }
  .cnx_2{
  margin:0px;
  padding-left:40px;
  padding-right:20px;
  border-left:1px solid #ec2216;
  border-right:1px solid #ec2216;
  background-repeat:no-repeat;
  float:left;clear:both;

  height:auto;
  width:316px;
  }
  .cnx_3{
  margin:0px;
  font-size:1px;
  padding:0px;
  clear:both;
  background-image:url(https://tn.tunisiebooking.com/images/conx2.gif);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:378px;
  }
  .cnx_4{
  clear:both;float:left;width:279px;padding-bottom:25px;padding-top:5px;
  }
  .cnx_41{
  clear:both;float:left;width:279px;padding-bottom:8px;padding-top:10px;
  }
  .pw03{
  clear:both;float:left;width:400px;padding-bottom:8px;padding-top:10px;
  }
  .cnx2{
  float:left;
  }
  .pw05{
  float:left;color:#990000;padding-left:100px;clear:both;padding-bottom:10px;width:300px;
  }
  .cnxn{
  border:0px;
  width:122px;
  cursor:pointer;
  height:21px;
  background-image:url(https://tn.tunisiebooking.com/images/conx3.gif);
  }
  .cnx_5{
  clear:both;float:left;padding-left:110px;padding-bottom:15px;
  }
  .pw04{
  clear:both;float:left;padding-left:100px;padding-bottom:165px;
  }
  .cnx_6{
  margin:0px;
  font-size:12px;
  color:#343434;
  text-decoration:underline;
  text-align:right;
  padding-right:10px;
  padding-top:5px;
  clear:both;
  float:left;
  width:368px;
  }
  .cnx_6 a{
  margin:0px;
  font-size:12px;
  color:#343434;
  text-decoration:underline;
  text-align:right;
  padding-right:10px;
  padding-top:5px;
  clear:both;
  float:left;
  width:368px;
  }
  .cnx_6 a:hover{
  margin:0px;
  font-size:12px;
  color:#343434;
  text-decoration:underline;
  text-align:right;
  padding-right:10px;
  padding-top:5px;
  clear:both;
  float:left;
  width:368px;
  }
  .cnx_7{
  margin:0px;
  font-size:13px;
  font-weight:bold;
  color:#343434;
  padding-top:30px;
  padding-bottom:60px;
  clear:both;
  float:left;
  width:420px;
  }
  .cnx_8 a{
  font-size:15px;
  font-weight:bold;
  color:#e82313;
  text-decoration:underline;
  }
  .cnx_8 a:hover{
  font-size:15px;
  font-weight:bold;
  color:#e82313;
  text-decoration:underline;
  }
  .frd{
  float:left;clear:both;padding-top:5px;padding-left:8px;width:246px;
  border:1px dashed #262626;margin-top:10px;
  background:#ededed;
  }
  .frd1{
  float:left; clear:both;padding-bottom:8px;padding-top:5px;width:240px;
  }
  .mfd{
  border:1px solid #262626;
  width:130px;
  height:15px;
  }
  .envoyer{
  border:0px;
  background-image: url(https://tn.tunisiebooking.com/images/envoyer.gif);
  width:97px;
  cursor:pointer;
  height:21px;
  }
  .flcl{
  float:left;clear:both;
  }
  .loi{
  margin:0px;
  font-size:11px;
  color:#343434;
  text-align:center;
  padding-top:30px;
  padding-left:250px;
  padding-bottom:20px;
  clear:both;
  float:left;
  width:378px;
  }
  .inf_1{
  margin:0px;
  font-size:1px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/bg05.gif);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:331px;
  }
  .inf_2{
  margin:0px;
  padding:0px;
  border-left:1px solid #ec2216;
  border-right:1px solid #ec2216;
  background-repeat:no-repeat;
  float:left;clear:both;
  height:auto;
  width:329px;
  }
  .mccp2{
  margin:0px;
  padding:0px;
  background-repeat:no-repeat;
  float:left;clear:both;
  height:auto;
  width:450px;
  background-color:#FFFFFF;
  }
  .inf_3{
  margin:0px;
  font-size:1px;
  padding:0px;
  clear:both;
  background-image:url(https://tn.tunisiebooking.com/images/bg06.gif);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:331px;
  }
  .inf_4{
  clear:both;float:left;padding-left:20px;width:279px;padding-bottom:8px;
  }
  .mccp3{
  clear:both;float:left;padding-left:25px;width:279px;padding-bottom:8px;
  }
  .inf_41{
  clear:both;float:left;padding-left:20px;width:279px;padding-bottom:8px;padding-top:15px;
  }
  .mccp4{
  clear:both;float:left;padding-left:25px;width:279px;padding-bottom:8px;padding-top:15px;
  }
  .inf_5{
  float:left;width:280px;clear:both;padding-bottom:5px;font-size:16px;
  color:#eb3021;padding-top:10px;border-bottom:1px solid #d2d1d6;

  font-weight:bold;
  }
  .mccp5{
  float:left;width:280px;clear:both;padding-bottom:5px;font-size:12px;
  padding-top:20px;
  font-weight:bold;

  }
  .inf_6{
  clear:both;float:left;padding-left:175px;padding-bottom:8px;padding-top:10px;
  }
  .modif{
  border:0px;
  width:112px;
  height:21px;
  cursor:pointer;
  background-image:url(https://tn.tunisiebooking.com/images/modifier.gif);
  }
  .sty{
  float:left;padding-top:5px;padding-left:15px; font-size:12px; width:500px;
  }
  .sty01{
  float:left;padding-top:5px;padding-left:15px; font-size:15px; font-weight:bold;
  }
  .pw01{
  float:left;padding-top:35px;font-size:15px; font-weight:bold;
  }
  .sty02{
  float:right;padding-right:15px;padding-top:3px; font-size:15px; font-weight:bold;
  }
  .sty03{
  float:left;padding-top:30px;padding-right:30px;
  }
  .sty1{
  font-size:22px; font-weight:bold;
  }
  .sty2{
  float:right;padding-right:15px;padding-top:3px; font-size:15px; font-weight:bold;
  }
  .sty3{
  float:left;padding-top:30px;padding-right:30px;
  }
  .sty4{
  float:left;clear:both;padding-top:20px;padding-left:20px;
  }
  .sty5{
  font-size:16px; font-weight:bold;border-bottom:1px solid #EC018A;width:830px;
  }
  .sty6{
  float:left;
  padding-top:20px;
  padding-left:20px;
  clear:both;width:800px;
  background-color:#FFFFFF;
  }
  .sty7{
  float:left;clear:both;color:#d40114;padding-left:20px;padding-top:10px;width:600px;
  }
  .sty8{
  float:left;clear:both;padding-left:315px;padding-top:20px;width:600px;
  }
  .ccmp8{
  float:left;clear:both;padding-left:330px;padding-top:20px;width:300px;
  color:#eb2115;
  }
  .inx1{
  border:1px solid #262626;
  font-family:arial;
  font-size:12px;
  }
  .inx2{
  clear:both;float:left;padding-left:140px;padding-bottom:8px;padding-top:10px;
  }
  .pied{
  clear:both;border-right:1px solid #e3e3e3;
  padding-top:2px;border-left:1px solid #e3e3e3;
  height:63px;width:997px;border-bottom:1px solid #e3e3e3;
  background-image:url(https://tn.tunisiebooking.com/images/bg_down.gif);
  }
  .cts{
  font-family:Arial;
  font-size:11px;
  color:#343233;
  margin-top:15px;
  text-align:center;
  }
  .cts span{
  color:#ec2216;
  }
  .cts a{
  font-family:Arial;
  font-size:11px;
  color:#343233;
  margin-top:15px;
  text-align:center;
  }
  .cts a:hover{
  font-family:Arial;
  font-size:11px;
  color:#343233;
  margin-top:15px;
  text-align:center;
  }
  .bb{
  float:left;border-bottom:1px solid #ec2216;width:582px;padding-top:36px;font-size:2px;
  }
  .bb1{
  float:left;border-bottom:1px solid #ec2216;width:630px;padding-top:36px;font-size:2px;
  }
  .bb2{
  float:left;border-bottom:1px solid #ec2216;width:570px;padding-top:36px;font-size:2px;
  }
  .bb3{
  float:left;border-bottom:1px solid #ec2216;width:500px;padding-top:36px;font-size:2px;
  }
  .bb4{
  float:left;border-bottom:1px solid #ec2216;width:560px;padding-top:36px;font-size:2px;
  }
  .bb5{
  float:left;border-bottom:1px solid #ec2216;width:450px;padding-top:36px;font-size:2px;
  }
  .pid{
  float:left;clear:both;padding-top:5px;padding-bottom:10px;
  }
  .dd{
  float:left;color:#FFFFFF; font-family:arial; font-size:11px;padding-top:10px;width:325px;
  }
  .dd a{
  color:#FFFFFF; font-family:arial; font-size:11px;
  text-decoration:none;
  }
  .dd a:hover{
  color:#FFFFFF; font-family:arial; font-size:11px;text-decoration:none;
  }
  .dtt{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/det.gif);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:518px;
  }
  .dtt2{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/det2.gif);
  background-repeat:no-repeat;
  float:left;
  height:4px;
  width:518px;
  }
  .gg{
  float:left;border-left:1px solid #d9d9d9;border-right:1px solid #d9d9d9;width:516px;
  background-color:#FFFFFF;
  }
  .ww{
  clear:both; float:left;padding-top:2px;padding-bottom:2px;width:700px;
  }
  .ww0{
  float:left;width:320px;
  }
  .ww1{
  float:left;width:150px; text-align:right;
  }
  .ww2{
  float:left;color:#ffffff; background:#ec2019;padding-left:10px;padding-right:10px;padding-top:2px;padding-bottom:2px; width:130px;text-align:right;
  }
  .yy{
  float:left;padding-top:15px;padding-left:60px;color:#eb2115; font-weight:bold; text-decoration:underline;
  }
  .vv{
  float:left; clear:both;padding-left:755px;padding-bottom:20px;
  }
  .vv2{
  float:left; clear:both;padding-left:550px;padding-bottom:10px;padding-top:10px;
  }
  .ace{
  text-decoration:underline;color:#ed2214;
  }
  .ace a{
  text-decoration:underline;color:#ed2214;
  }
  .ace a:hover{
  color:#ed2214;text-decoration:underline;
  }
  .paiey{
  float:left;
  margin:0px;width:868px;padding-top:8px;padding-right:8px;
  }
  .paiey .h1{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image:url(https://tn.tunisiebooking.com/images/dt01.gif);
  background-repeat:no-repeat;
  float:left;
  height:9px;
  width:868px;
  }
  .paiey .py{
  float:left;
  margin:0px;
  padding-top:0px;
  padding-bottom:0px;
  padding-right:0px;
  padding-left:0px;
  height:auto;
  width:866px;
  background-color:#FFFFFF;
  border-left:1px solid #464646;
  border-right:1px solid #464646;
  }
  .paiey .py_1{
  float:left;
  width:860px;height:auto;
  border-left:3px solid #d1d2d4;
  border-right:3px solid #d1d2d4;

  font-family:Arial;
  font-size:12px;
  }
  .paiey .h6{
  margin:0px;
  font-size:2px;
  padding:0px;
  background-image: url(https://tn.tunisiebooking.com/images/dt02.gif);
  background-repeat:no-repeat;
  float:left;
  height:9px;
  width:868px;
  }
  .rs1 .py{
  float:left;
  margin:0px;
  text-align:center;
  padding-top:10px;
  height:auto;
  padding-bottom:10px;
  padding-right:10px;
  padding-left:25px;
  background-color:#FFFFFF;
  border-left:1px solid #464646;
  border-right:1px solid #464646;
  }
  .ov{
  float:left;clear:both; width:835px;padding:5px 0px 8px 15px;
  }
  .ov1{
  float:left;background-image:url(https://tn.tunisiebooking.com/images/bgov.gif); width:4px;height:181px;
  }
  .ov2{
  float:left;border-top:1px solid #3f3f3f;border-bottom:1px solid #3f3f3f;background:#f9fbfb;width:805px;padding:12px 5px 12px 5px;height:155px;
  }
  .ov3{
  float:left;width:150px;padding-left:10px;padding-right:10px;padding-top:2px;
  }
  .ov4{
  float:left;padding-left:20px;padding-right:20px; font-family:arial; font-size:12px; width:570px;
  }
  .ov5{
  float:left;background-image:url(https://tn.tunisiebooking.com/images/bgov2.gif); width:4px;height:181px;
  }
  .contenu_time
  {
  width:192px;
  font-size:12px;
  font-family:Arial;
  border:1px solid #D4D4D4;
  background-color:#EFEFEF;
  padding-bottom:3px;
  padding-top:3px;
  margin-left:40px;
  }
  .text_temp_res
  {
  width:192px;
  text-align:center;
  font-size:12px;
  color:#626262;
  }
  .cont_heur
  {
  width:164px;
  border:1px solid #414141;
  margin-top:2px;
  margin-left:13px;
  color:#EFEFEF;
  font-weight:bold;
  font-size:16px;

  }
  .cont_heur_acc
  {
  width:164px;
  border:1px solid #414141;
  margin-top:2px;
  margin-left:22px;
  color:#EFEFEF;
  font-weight:bold;
  font-size:16px;

  }
  .text_temp_res_acc
  {
  width:209px;
  font-size:12px;
  text-align:center;
  font-family:Arial, Helvetica, sans-serif;
   color:#626262;
  }
  .text_h_acc
  {
  width:41px;
  margin-left:22px;
  float:left;
  text-align:center;
  font-size:11px;
  color:#636363;
  font-family:Arial, Helvetica, sans-serif;
  }
  .text_m_acc
  {
  width:41px;
  float:left;
  text-align:center;
  font-size:11px;
  color:#636363;
  font-family:Arial, Helvetica, sans-serif;
  }
  .cont_temp_rest
  {
  width:209px;
  border-left:1px solid #DEDEDE;
  border-right:1px solid #DEDEDE;
  background-color:#DEDEDE;
  }
  .div_h
  {
  width:40px;
  float:left;
  text-align:center;
  height:24px;
  padding-top:4px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_t.gif);
  background-position:center;
  background-repeat:repeat-x;
  border-right:1px solid #414141;
  font-weight:bold;
  }
  .div_s
  {
  width:41px;
  float:left;
  text-align:center;
  height:24px;
  padding-top:4px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_t.gif);
  background-position:center;
  background-repeat:repeat-x;
  }
  .div_h_acc
  {
  width:40px;
  float:left;
  text-align:center;
  height:24px;
  padding-top:4px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_t.gif);
  background-position:center;
  background-repeat:repeat-x;
  border-right:1px solid #414141;
  font-family:Arial, Helvetica, sans-serif;
  font-weight:bold;
  }
  .div_s_acc
  {
  font-family:Arial, Helvetica, sans-serif;
  width:41px;
  float:left;
  text-align:center;
  height:24px;
  padding-top:4px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_t.gif);
  background-position:center;
  background-repeat:repeat-x;
  }
  .text_h
  {
  width:41px;

  margin-left:13px;

  float:left;
  text-align:center;
  font-size:12px;
  color:#636363;

  }
  .text_m
  {
  width:41px;
  float:left;
  text-align:center;
  font-size:12px;
  color:#636363;

  }
  .text_cher
  {
  font-size:12px;
  margin-top:10px;
  font-family:Arial, Helvetica, sans-serif;
  }
  .text_ch{
   float:left; font-family:Arial; font-size:12px; min-width:330px; max-width:332;
  }
  .text_spring
  {
  font-size:16px;
  font-weight:bold;
  margin-top:10px;
  font-family:Arial, Helvetica, sans-serif;
  margin-bottom:10px;
  }
  .entet_page
  {
  width:999px;
  }
  .con_logo
  {
  width:265px;
  height:114px;
  padding-top:09px;
  float:left;

  }
  .connect_plus_pub
  {
  width:728px;
  margin-left:6px;
  float:left;
  }
  .cont_connect
  {
  width:728px;
  }
  .moncompte
  {
  white-space:120px;
  padding-left:13px;
  float:right;
  background-image:url(https://tn.tunisiebooking.com/new_images/puce_mc.gif);
  background-position:left;
  background-repeat:no-repeat;
  color:#646567;
  font-size:12px;
  font-family:Arial;
  text-align:center;
  }
  .moncompte:hover
  {
  white-space:120px;
  padding-left:13px;
  float:right;
  background-image:url(https://tn.tunisiebooking.com/new_images/puce_mc.gif);
  background-position:left;
  background-repeat:no-repeat;
  color:#646567;
  font-size:12px;
  font-family:Arial;
  text-align:center;
  cursor:pointer;
  text-decoration:underline;
  }
  .connect_deconn
  {
  float:right;
  padding-left:5px;
  padding-right:10px;
  text-align:center;
  color:#646567;
  font-size:12px;
  background-image:url(https://tn.tunisiebooking.com/new_images/puce_connect.gif);
  background-position:right;
  background-repeat:no-repeat;
  font-family:Arial;
  cursor:pointer;
  }
  .connect_deconn:hover
  {
  float:right;
  padding-left:5px;
  padding-right:10px;
  text-align:center;
  color:#646567;
  font-size:12px;
  background-image:url(https://tn.tunisiebooking.com/new_images/puce_connect.gif);
  background-position:right;
  background-repeat:no-repeat;
  font-family:Arial;
  cursor:pointer;
  text-decoration:underline;
  }
  .connect_conn
  {
  float:right;
  padding-left:5px;
  padding-right:10px;
  text-align:center;
  color:#646567;
  font-size:12px;

  font-family:Arial;
  cursor:pointer;
  }
  .connect_conn:hover
  {
  float:right;
  padding-left:5px;
  padding-right:10px;
  text-align:center;
  color:#646567;
  font-size:12px;

  font-family:Arial;
  cursor:pointer;
  text-decoration:underline;
  }
  .menu_haut
  {
  margin-top:10px;
  width:999px;
  background-image:url(https://tn.tunisiebooking.com/new_images/bg_menu.gif);
  background-position:center;
  background-repeat:repeat-x;
  height:36px;
  padding-top:1px;
  }
  .menu_acc
  {
  height:30px;
  padding-top:5px;
  width:156px;
  background-image:url(https://tn.tunisiebooking.com/new_images/bg_r_men.gif);
  background-position:right;
  background-repeat:no-repeat;
  float:left;
  cursor:pointer;
   }
   .men_intern_acc
   {
   width:117px;
   text-align:center;
   margin-left:19px;
   border-bottom:4px solid #E92529;
   padding-bottom:3px;
   color:#E92529;
   font-size:12px;
   font-family:Arial;
   }

   .menu_desactive
  {
  height:30px;
  padding-top:5px;
  width:156px;
  background-image:url(https://tn.tunisiebooking.com/new_images/bg_r_men.gif);
  background-position:right;
  background-repeat:no-repeat;
  float:left;
  cursor:pointer;
   }
   .men_intern_desactive
   {
   width:117px;
   text-align:center;
   margin-left:19px;
   border-bottom:4px solid #B8B8B8;
   padding-bottom:3px;
   color:#686767;
   font-size:12px;
   font-family:Arial;
   }
    .men_intern_desactive a
   {
   color:#686767;
   text-decoration:none;
   }

    .men_intern_desactive a:hover
   {
   color:#686767;
   text-decoration:none;
   }





   .men_intern_desactive22
   {
   width:117px;
   text-align:center;
   margin-left:19px;
   border-bottom:4px solid #79A51A;
   padding-bottom:3px;
   color:#79A51A;
   font-size:12px;
   font-family:Arial;
   }
    .men_intern_desactive22 a

   {
   color:#79A51A;
   text-decoration:none;
   }

    .men_intern_desactive22 a:hover
   {
   color:#79A51A;
   text-decoration:none;
   }

   .menu_beaute
  {
  height:30px;
  padding-top:5px;
  width:156px;
  background-image:url(https://tn.tunisiebooking.com/new_images/bg_r_men.gif);
  background-position:right;
  background-repeat:no-repeat;
  float:left;
  background-color:#02B6CD;
  cursor:pointer;
   }
    .men_intern_beute
   {
   width:117px;
   text-align:center;
   margin-left:19px;
   border-bottom:4px solid #ffffff;
   padding-bottom:3px;
   color:#ffffff;
   font-size:12px;
   font-family:Arial;
   }
     .men_intern_beute a
   {

   color:#ffffff;
  text-decoration:none
   }
      .men_intern_beute a:hover
   {

   color:#ffffff;
  text-decoration:none
   }

    .menu_sejour
  {
  height:30px;
  padding-top:5px;
  width:156px;
  background-image:url(https://tn.tunisiebooking.com/new_images/bg_r_men.gif);
  background-position:right;
  background-repeat:no-repeat;
  float:left;
  background-color:#EE2829;
  cursor:pointer;
   }
    .men_intern_sejour
   {
   width:117px;
   text-align:center;
   margin-left:19px;
   border-bottom:4px solid #FB9A0B;
   padding-bottom:3px;
   color:#FB9A0B;
   font-size:12px;
   font-family:Arial;
   }
    .menu_sejour_act
  {
  height:30px;
  padding-top:5px;
  width:156px;
  background-image:url(https://tn.tunisiebooking.com/new_images/bg_r_men.gif);
  background-position:right;
  background-repeat:no-repeat;
  float:left;

  cursor:pointer;
   }
    .men_intern_sejour_act
   {
   width:117px;
   text-align:center;
   margin-left:19px;
   border-bottom:4px solid #FB9A0B;
   padding-bottom:3px;
   color:#FB9A0B;
   font-size:12px;
   font-family:Arial;
   }
     .menu_restaurant
  {
  height:30px;
  padding-top:5px;
  width:156px;
  background-image:url(https://tn.tunisiebooking.com/new_images/bg_r_men.gif);
  background-position:right;
  background-repeat:no-repeat;
  float:left;

  cursor:pointer;
   }
    .men_intern_restaurant
   {
   width:117px;
   text-align:center;
   margin-left:19px;
   border-bottom:4px solid #117986;
   padding-bottom:3px;
   color:#117986;
   font-size:12px;
   font-family:Arial;
   }
      .menu_loisir
  {
  height:30px;
  padding-top:5px;
  width:156px;
  float:left;
   cursor:pointer;
   }
    .men_intern_loisir
   {
   width:117px;
   text-align:center;
   margin-left:19px;
   border-bottom:4px solid #E5259F;
   padding-bottom:3px;
   color:#E5259F;
   font-size:12px;
   font-family:Arial;
   }
   .baniere_acc
   {
   text-align:right;
    height:90px;
    margin-top:10px;
   }
   .contenu_central
   {
    width:977px;
    background-color:#F3F3F3;
    border-left:1px solid #EAEAE7;
    border-right:1px solid #EAEAE7;
    border-bottom:1px solid #EAEAE7;
    padding:1px 10px 50px 10px;
   }

   .contetnu_res_gauche
   {
   width:735px;
   float:left;
   }
   .contetnu_res_gauche_art
   {
    width:735px;
   float:left;
   margin-top:10px;
   }
   .menu_haut_sj
  {
  margin-top:10px;
  width:999px;
  padding-top:1px;
  height:41px;
  font-family:Arial, Helvetica, sans-serif;
  }
  .text_onglet_des_men_sejour_f
  {
  text-align:center;
  width:96px;
  margin-left:20px;
  border-bottom:2px solid #CDCDCD;
  color:#FEFEFE;
  font-size:13px;
  font-weight:bold;
  padding-bottom:1px;
  padding-top:7px;

  }
  .text_onglet_des_men_sejour_f a
  {
  color:#FEFEFE;
  text-decoration:none;
  }
  .text_onglet_des_men_sejour_f a:hover
  {
  color:#FEFEFE;
  text-decoration:none;
  }
  .onglet_des_men_sejour_des
  {
  cursor:pointer;
  width:184px;
  float:left;
  border-right:1px solid #D6D6D6;
  height:35px;
  background-color:#FFFFFF;
  text-align:center;
  }
  .text_onglet_des_men_sejour_act
  {
  text-align:center;
  width:134px;
  margin-left:25px;
  border-bottom:2px solid #02B6CD;
  color:#02B6CD;
  font-size:13px;
  font-weight:bold;
  padding-bottom:1px;
  padding-top:7px;

  }
  .text_onglet_des_men_sejour_act a
  {
  color:#02B6CD;
  text-decoration:none;
  }
  .text_onglet_des_men_sejour_act a:hover
  {
  color:#02B6CD;
  text-decoration:none;
  }
  .text_onglet_des_men_sejour a
  {
  color:#FEFEFE;
  text-decoration:none;
  }
  .text_onglet_des_men_sejour a:hover
  {
  color:#FEFEFE;
  text-decoration:none;
  }
  .onglet_desactive_men_sejour
  {
  width:136px;
  float:left;
  border-left:1px solid #D6D6D6;
  height:35px;
  cursor:pointer;
  background-image:url(https://tn.tunisiebooking.com/images/bg_ong_men_des.gif);
  background-position:center;
  background-repeat:repeat-x;
  }
  .onglet_men_h_b
  {
  width:322px;

  height:35px;
  padding-top:6px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_men_top_b.gif);
  background-position:top;
  background-repeat:no-repeat;
  float:left;
  }
  .onglet_men_h_sj
  {
  width:322px;
  height:35px;
  padding-top:6px;
  background-image:url(https://tn.tunisiebooking.com/images/bg_top_men_sej.gif);
  background-position:top;
  background-repeat:no-repeat;
  float:left;
  }
  .onglet_actif_men_sejour
  {
  width:136px;
  float:left;
  border-left:1px solid #D6D6D6;
  height:35px;
  cursor:pointer;

  }

  .text_onglet_actif_men_sejour
  {
  text-align:center;
  width:96px;
  margin-left:20px;
  border-bottom:4px solid #EE2829;
  color:#EE2829;
  font-size:13px;
  font-weight:bold;
  padding-bottom:3px;
  padding-top:5px;

  }
  .text_onglet_actif_men_sejour a
  {
  color:#EE2829;
  text-decoration:none;
  }
  .text_onglet_actif_men_sejour a:hover
  {
  color:#EE2829;
  text-decoration:none;
  }
  .onglet_des_men_sejour
  {
  cursor:pointer;
  width:184px;
  float:left;
  border-left:1px solid #414141;
  background-image:url(https://tn.tunisiebooking.com/images/bg_ong_men_des.gif);
  background-position:center;
  background-repeat:repeat-x;
  height:35px;
  text-align:center;
  }
  .text_onglet_des_men_sejour
  {
  text-align:center;
  width:134px;
  margin-left:25px;
  border-bottom:2px solid #CDCDCD;
  color:#FEFEFE;
  font-size:13px;
  font-weight:bold;
  padding-bottom:1px;
  padding-top:7px;

  }
  .text_onglet_des_men_sejour a
  {
  color:#FEFEFE;
  text-decoration:none;
  }
  .text_onglet_des_men_sejour a:hover
  {
  color:#FEFEFE;
  text-decoration:none;
  }
  .vide_men_h_sej
  {
  float:left;
  height:40px;
  border-bottom:1px solid #414141;
  width:677px;
  }
   .rs_ind223{
  padding-left:10px;
  padding-right:10px;
  padding-bottom:20px;
  width:977px;
  background-color:#F4F2F3;
  margin-top:0px;
   padding-top:10px;
   border-right:1px solid #D6D6D6;
  border-left:1px solid #D6D6D6;
  border-bottom:1px solid #D6D6D6;
  font-family:Arial, Helvetica, sans-serif;
  background-image: url(https://tn.tunisiebooking.com/images/bg_sej_hot.gif);
  background-position:top;
  background-repeat:repeat-x;
  padding-top:20px;
  }
  .onglet_men_rest
  {
  width:442px;
  height:35px;
  padding-top:5px;
  background-image:url(https://tn.tunisiebooking.com/new_images/bg_men_top_rest.gif);
  background-position:top;
  background-repeat:no-repeat;
  float:left;
  }
  .onglet_desactive_men_sejour_rest
  {
  width:129px;
  float:left;
  height:35px;
  cursor:pointer;
  background-image:url(https://tn.tunisiebooking.com/new_images/puce_v_menuu_rest.gif);
  background-position:center;
  background-repeat:repeat-x;
  }
  .text_onglet_des_men_sejour_f_rest
  {
  text-align:center;
  width:88px;
  margin-left:20px;
  border-bottom:2px solid #ffffff;
  color:#FEFEFE;
  font-size:13px;
  font-weight:bold;
  padding-bottom:1px;
  padding-top:7px;

  }
  .vide_violet
  {

  width:2px;
  background-color:#FFFFFF;
  height:34px;
  border-bottom:1px solid #BC2B88;
  float:left;
  }
  .vide_gris
  {
  width:2px;
  background-color:#FFFFFF;
  height:34px;
  border-bottom:1px solid #F3F3F3;
  float:left;
  }
  .onglet_des_men_sejour_des_res
  {
  cursor:pointer;
  width:180px;
  float:left;
  height:35px;
  background-image:url(https://tn.tunisiebooking.com/new_images/puce_v_menuu_rest.gif);
  background-position:center;
  background-repeat:repeat-x;
  text-align:center;
  }
  .text_onglet_des_men_sejour_act_rest
  {
  text-align:center;
  width:129px;
  margin-left:25px;
  border-bottom:2px solid #ffffff;
  color:#ffffff;
  font-size:13px;
  font-weight:bold;
  padding-bottom:1px;
  padding-top:7px;

  }
  .text_onglet_des_men_sejour_act_rest a
  {
  color:#ffffff;
  text-decoration:none;
  }


  .vide_men_h_rest
  {
  float:left;
  height:40px;
  border-bottom:1px solid #B2217C;
  width:557px;
  }
  .text_onglet_des_men_sejour_f_rest a
  {
  color:#FEFEFE;
  text-decoration:none;
  }
     .contenu_central_rest_sej
   {
    width:977px;
    background-color:#F3F3F3;
    border-left:1px solid #EAEAE7;
    border-right:1px solid #EAEAE7;
    border-bottom:1px solid #EAEAE7;
    padding:10px 10px 50px 10px;

   }
   .flechbas{

       background:url(https://tn.tunisiebooking.com/images/reservasion/flechebas.png) no-repeat scroll  transparent;
       top: 14.5%;
       display: block;
       height: 45px;
       margin: 0px auto 0px -42px;
       position: absolute;
       width: 37px;}
  	 .flechbas2{
       background:url(https://tn.tunisiebooking.com/images/reservasion/flechebas.png) no-repeat scroll  transparent;
       top: 50.5%;
       display: block;
       height: 45px;
       margin: 0px auto 0px -42px;
       position: absolute;
       width: 37px;}
  	 .flechbas4{
       background:url(https://tn.tunisiebooking.com/images/reservasion/flechebas.png) no-repeat scroll  transparent;
       top:65.5%;
       display: block;
       height: 45px;
       margin: 0px auto 0px -42px;
       position: absolute;
       width: 37px;}
  	 .text_etape{
  		clear:both;
  		background-color:#ffffff;
  		margin: 17px 0 0px 22px;
  		font-family:Arial;
  		font-size:22px;
  		color:#309901;
  		width:930px;
  		height:32px;
  		padding:8px 0px 2px 8px;
  		background-color: #F9FDF7;
  		border: 1px solid #C0E973;
        }
  	  .ombre_etape{clear:both;margin: 0 0 10px 22px; background:url(https://tn.tunisiebooking.com/theme/images/pxel_etape.png); background-repeat:repeat-x}
     .ombre_etape_left{margin:0px 10px 0px 10px;background-image:url(https://tn.tunisiebooking.com/theme/images/ombre_coordonnee.png); background-repeat:no-repeat; width:264px; height:9px}
  	.ombre_etape_right{margin:-9px 0px 0px 0px;float:right;background-image:url(https://tn.tunisiebooking.com/theme/images/ombre_coordonnee_r.png); background-repeat:no-repeat; width:264px; height:9px}
  	.text_hotel{clear:both;font:24px/25px Arial; padding-left:10px}
  	.etape{
  	  background: url("https://tn.tunisiebooking.com/theme/images/icon_cercle.png") no-repeat scroll 0 0 transparent;
       color: white;
       font-size: 20px;
       font-weight: bold;
       height: 35px;

       line-height: 30px;
       position: absolute;
      text-align: center;
  	margin: 0px auto 0px 0px;
      width: 35px;
  	}
  	.etape2{
  	  background: url("https://tn.tunisiebooking.com/theme/images/icon_cercle.png") no-repeat scroll 0 0 transparent;
       color: white;
       font-size: 20px;
       font-weight: bold;
       height: 35px;

       line-height: 30px;
       position: absolute;
      text-align: center;
  	top: 32%;
  	margin: 0px auto 0px -35px;
      width: 35px;
  	}
  	.etape3{
  	  background: url("https://tn.tunisiebooking.com/theme/images/icon_cercle.png") no-repeat scroll 0 0 transparent;
       color: white;
       font-size: 20px;
       font-weight: bold;
       height: 35px;

       line-height: 30px;
       position: absolute;
      text-align: center;
  	top: 55%;
  	margin: 0px auto 0px -38px;
      width: 35px;
  	}
  	.etape4{
  	  background: url("https://tn.tunisiebooking.com/theme/images/icon_cercle.png") no-repeat scroll 0 0 transparent;
       color: white;
       font-size: 20px;
       font-weight: bold;
       height: 35px;

       line-height: 30px;
       position: absolute;
      text-align: center;
  	top: 68%;
  	margin: 0px auto 0px 0px;
      width: 35px;
  	}
  	.etape_detail{
  	  background: url("https://tn.tunisiebooking.com/theme/images/icon_cercle_gris.png") no-repeat scroll 0 0 transparent;
       color: white;
       font-size: 18px;
       font-weight: bold;
       height: 28px;

       line-height: 28px;
       position: absolute;
      text-align: center;
  	margin: 10px auto 0px 0px;
      width: 28px;
  	}
  	.bloc_mtotal{
  	border-right: 1px solid #D2D1D1;
  	float: left;
      padding: 10px;
      width: 752px;

  	}
  	.pixel_bas
  	 {float:left;
  	  background-image:url(https://tn.tunisiebooking.com/theme/images/pixel_bas.png);
  	   width:40px;
  	   height:69px;
  	   margin-left:15px;
  	 }
  	 .pixel_bas_face
  	 {float:left;
  	   width:40px;
  	   height:69px;
  	   margin-left:15px;
  	 }
  	 .continuez_resa{line-height: 2em;clear:both;cursor: pointer;text-align: center; border:0px;font-family:Arial; font-size:24px; color:#FFFFFF;background-image: url(https://tn.tunisiebooking.com/theme/images/bt_continer_reserv.png); background-repeat:no-repeat; width:436px; margin-left: 0px; height:56px}
  	.etape5{
  	  background: url("https://tn.tunisiebooking.com/images/reservasion/icon_cercle.png") no-repeat scroll 0 0 transparent;
       color: white;
       font-size: 20px;
       font-weight: bold;
       height: 35px;

       line-height: 30px;
       position: absolute;
      text-align: center;
  	top: 80%;
  	margin: 0px auto 0px 0px;
      width: 35px;
  	}
    .contenu_central_rest_sejf
   {
     clear:both;
      background-image:url(https://tn.tunisiebooking.com/theme/images/pixel.png);
     background-repeat:repeat-y;


   }
    .contenu_central_rest_sejface
   {
     clear:both;
   }

    .contenu_central_rest_sejdetailf
   {
     clear:both;
     background-color:#f3f3f3;
     padding-left:33px;
     background-image:url(https://tn.tunisiebooking.com//images/reservasion/pixel.png);
     background-repeat:repeat-y;


   }
      .contenu_central_rest
   {
    width:977px;
    background-color:#F3F3F3;
    border-left:1px solid #EAEAE7;
    border-right:1px solid #EAEAE7;
    border-bottom:1px solid #EAEAE7;
    padding:1px 10px 50px 10px;

   }
   .onglet_rest_actif
  {
  cursor:pointer;
  width:129px;
  float:left;
  height:35px;
  text-align:center;
  background-color:#F3F3F3;
  border-bottom:1px solid #F3F3F3;
  margin-left:2px;
  }

  .onglet_rest_actif_intern
  {
  text-align:center;
  width:89px;
  margin-left:20px;
  border-bottom:2px solid #6C514A;
  color:#6E534C;
  font-size:13px;
  font-weight:bold;
  padding-bottom:1px;
  padding-top:7px;

  }
  .onglet_rest_actif_intern a
  {
  color:#6E534C;
  text-decoration:none;
  }
  .onglet_rest_actif_intern a:hover
  {
  color:#6E534C;
  text-decoration:none;
  }



  .onglet_rest_desact
  {
  cursor:pointer;
  width:129px;
  float:left;
  height:35px;
  text-align:center;
  background-image:url(https://tn.tunisiebooking.com/new_images/puce_v_menuu_rest.gif);
  background-position:center;
  background-repeat:repeat-x;

  }

  .onglet_rest_desact_intern
  {
  text-align:center;
  width:89px;
  margin-left:20px;
  border-bottom:2px solid #ffffff;
  color:#ffffff;
  font-size:13px;
  font-weight:bold;
  padding-bottom:1px;
  padding-top:7px;

  }
  .onglet_rest_desact_intern a
  {
  color:#ffffff;
  text-decoration:none;
  }
  .onglet_rest_desact_intern a:hover
  {
  color:#ffffff;
  text-decoration:none;
  }




   .onglet_sejour_actif_final
  {
  cursor:pointer;
  width:128px;
  float:left;
  height:35px;
  text-align:center;
  background-color:#F3F3F3;
  border-bottom:1px solid #F3F3F3;
  border-left:1px solid #EAEAE7;

  }
  .onglet_sejour_actif_intern_final
  {

  text-align:center;
  width:89px;
  margin-left:20px;
  border-bottom:2px solid #262626;
  color:#262626;
  font-size:13px;
  font-weight:bold;
  padding-bottom:1px;
  padding-top:7px;

  }
  .onglet_sejour_actif_intern_final a
  {
  color:#262626;
  text-decoration:none;
  }
  .onglet_sejour_actif_intern_final a:hover
  {
  color:#262626;
  text-decoration:none;
  }

  .onglet_men_bien_actif
  {
  cursor:pointer;
  width:180px;
  float:left;
  height:35px;
  background-color:#F3F3F3;
  border-bottom:1px solid #F3F3F3;
  text-align:center;
  }
  .onglet_men_bien_intern_actif
  {

  text-align:center;
  width:129px;
  margin-left:25px;
  border-bottom:2px solid #02B6CD;
  color:#02B6CD;
  font-size:13px;
  font-weight:bold;
  padding-bottom:1px;
  padding-top:7px;

  }
  .onglet_men_bien_intern_actif a
  {
  color:#02B6CD;
  text-decoration:none;
  }
  .onglet_men_bien_intern_actif a:hover
  {
  color:#02B6CD;
  text-decoration:none;
  }
  .sup{font-size:12px}

  .text_prix_br{font-weight:normal;color:#727272;  text-align:center;color:#727272; float:left; font-size:20px;text-decoration:line-through}


  .text_prix_total_b{font-weight:normal;color:#727272;  text-align:center;float:right; font-size:24px;text-decoration:line-through; margin:0px 2px 0px 4px}

  .text_prix_total_n{font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;color:#FF0097;text-align:center;float:right; font-size:30px;font-weight: 600;margin:0px 2px 0px 14px}
	.devise{font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;color:#FF0097;text-align:center;float:right; font-size:30px;font-weight: 600;}

	.aulieude{font-size:11px; float:right;padding-top:8px;text-decoration:none}
  .enveloppe_prix{
		float:right;
		margin:0px 8px;
		top:-2px;
		font-family:Arial;
		font-size:16px;
		color:#262626;
		padding:0px 0px 0px 0px;
		margin-top:-0.6%;
		margin-bottom: 1%;
	}
  .div_frais{
		float: right;
		color: #4D4D4D;
		font-family: 'Roboto';
		font-size: 15px;
		font-weight: 400;
		line-height: 23px;
		letter-spacing: 0.005em;
		text-align: left;
		margin-right: -16%;
		padding-top: 2%;
		padding-bottom: 1%;
	}
	.div_frais span{
		font-weight: 500 !important;
	}

  .line_result{
		clear: both;
		padding: 2px 0px;
		padding: 6px 11px;
		/* border-top: 1px solid #c7c7c7; */
		font-size: 14px;
		height: fit-content;
		background: #f5f5f5;
		width: 996px;
		margin-top: 0.2%;
		margin-left: 1.5%;
		margin-bottom: 0.8%;
		padding-top:0.7%;
    cursor:pointer;
	 }
	 .line_result:hover{

		background: #E7E7E7;

	 }
  .line_result_sans_border{ clear:both; padding:2px 0px; padding:5px 0px; border-bottom:0px solid #dedede; }

  .entete_hotel{margin:10px 12px}
	.localisation{
		position: relative;
		margin-top: 0.5%;
		margin-left:-0.5%;
		white-space: nowrap;
		margin-bottom: 1%;
	}
	.adresse_hotel{
		margin-top: 0.8%;
		left: 1%;
		position: relative;
		font-weight: 400;
		font-size: 14px;
		font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
		color: #6B6B6B;
		line-height: 17.143px;
	}
	.bloc-top-conditions
	{
		float: left;
		margin: 7px -9px 0px 1.6%;
		border-radius: 2px;
		border: 1px solid #CDCDCD;
		padding: 6px;
	}
	.bloc-top-conditions div:nth-child(2){float:right;}
	.condition-text
	{
		float:left;
		font-size: 14px;
		font-weight: 400;
		font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
		/*margin:4px 0px 0px 5px;*/
		line-height: 10px; /* 76.923% */
		letter-spacing: -0.13px;
		color:#262626;
	}
  .bloc_titre_hotels{float:left;}
  .bloc_titre_hotels h1{text-decoration:underline;margin: 0 0 0px; padding:0px; font-weight:normal;font-size:28px}
  .line_prix_vert{clear:both; font-family:Arial; font-size:12px; font-weight:bold; height:32px;background:#f4f4f4}
  .line_prix_blanche{clear:both; font-family:Arial; font-size:12px; font-weight:bold; height:32px;background:#ffffff}

  .div_prix{color:#ff199d;padding:2px 6px; font-size:24px; font-weight:bold;float: right;}

  .bloc_titre_detail{ margin: 0 0 10px; padding: 0 0 4px;clear:both; height:40px; border-bottom:1px solid #4f4e53}
  .img_offre
  {
  width:207px;
  height:89px;
  float:left;
  margin-left:250px;
  background-image:url(https://tn.tunisiebooking.com/images/offre_hambra.png);
  background-repeat:no-repeat;
  }
  .etickette_detail{background-image:url(https://tn.tunisiebooking.com/theme/images/etickette_detaille.png); background-repeat:no-repeat; height:39px; width:111px;margin-left: 930px; right:-19px; position: relative;top: 3px;}
  .sous_et_detail{background-image: url(https://tn.tunisiebooking.com/theme/images/triangle_detaille.png); background-repeat:no-repeat; height:9px;margin-left:1034px; width:7px;right: -19px; position: relative;top:3px;}

  .style_menu1formul {
      background: none repeat scroll 0 0 #FFFFFF;
      color: #262626;
      float: left;
      font-size: 17px;
      font-weight: bold;
      height: 54px;
      margin-right: 3px;
       padding: 4px 22px 8px 22px;
      text-align: center;

  	 border-left: 1px solid #D5D6D8;
  	border-top: 1px solid #D5D6D8;
  	border-right: 1px solid #D5D6D8;
  	z-index: 100;
  	position: relative;
  	box-shadow: -1px -3px 4px rgba(0, 0, 0, 0.27);

  }
  .style_menu2formul {
   background-color: #D9D9D9;
      background-image: url(https://tn.tunisiebooking.com/theme/images/bg.png);
      background-repeat: repeat;

      border: 1px solid #D5D6D8;

      color: #262626;
      cursor: pointer;
      float: left;
      font-size: 17px;
      height: 54px;
      margin-right: 3px;
       padding:4px 22px 8px 22px;
      text-align: center;

  	 z-index:10;
  }
  .titre_ang_formul{clear:both; font-size:14px; text-decoration:underline}
  .apartirede{clear:both; font-size:11px; padding: 3px 0 0;}
  .prix_angl{text-align:center;color:#262626;font-size:24px; color:#f40191}
  .cache {
      clear: both;
      display: none;
  }
  .info_paiement {
      background-color: #FFFFFF;
      border: 1px solid #D5D6D8;
      box-shadow: 0 0 2px 1px #D5D6D8;
      clear: both;
      margin-left: 4px;
      margin-top: 10px;
      padding-left: 10px;
  	border-radius: 4px 4px 0px 0px;
  }
  .text_info_p{
     border-bottom: 1px solid #E4EECA;
      clear: both;
      height: 38px;
      line-height: 1.2em;
      margin-bottom: 8px;
   }
   .text_number{
       background: url("https://tn.tunisiebooking.com/theme/images/icon_liste_detail.png") no-repeat scroll 0 0 transparent;
      color: #262626;
      float: left;
      font-family: Arial;
      font-size: 16px;
      font-weight: bold;
      height: 38px;
      line-height: 2.5em;
      text-align: center;
      width: 33px;
  	}
  	.textinfo_noir{
      font-size:14px;
      font-family:Arial;
      color:#262626;

  	}





  .normal {
      background-color: #ffffff;
      color: #555555;
      cursor: pointer;
      float: left;
      font-family: Arial;
      font-size: 12px;
      padding: 1px;
      text-align: center;
      text-decoration: underline;
      width: 25px;
  	font-weight:bold;
  	border-radius: 4px 4px 4px 4px;

  	margin: 4px;
  }
  .normal1 {
      border: 0 solid #277E9C;
      color: #3C3B37;
      cursor: pointer;
      float: left;
      font-family: Arial;
      font-size: 11px;
      margin: 2px;
      padding: 1px;
      text-align: left;
      text-decoration: underline;
      width: 95px;
  }
  .over {
      background-color: #ffffff;
      color: #cf3f9e;
      cursor: pointer;
      float: left;
      font-family: Arial;
      font-size: 12px;
      padding: 1px;
      text-align: center;
      text-decoration: underline;
      width: 25px;
  	font-weight:bold;
  	border-radius: 4px 4px 4px 4px;
  	box-shadow: 0 0 6px rgba(0, 0, 0, 0.28);
  	margin: 4px;
  }
  .over1 {
      border: 0 solid #277E9C;
      color: #3C3B37;
      cursor: pointer;
      float: left;
      font-family: Arial;
      font-size: 11px;
      margin: 2px;
      padding: 1px;
      text-align: left;
      text-decoration: underline;
      width: 95px;
  }
  .out {
      background-color: #ffffff;
      color: #555555;
      cursor: pointer;
      float: left;
      font-family: Arial;
      font-size: 12px;
      padding: 1px;
      text-align: center;
      text-decoration: underline;
      width: 25px;
  	font-weight:bold;
  	border-radius: 4px 4px 4px 4px;
  	margin: 4px;
  }
  .out1 {
      border: 0 solid #277E9C;
      color: #3C3B37;
      cursor: pointer;
      float: left;
      font-family: Arial;
      font-size: 11px;
      margin: 2px;
      padding: 1px;
      text-align: left;
      text-decoration: underline;
      width: 95px;
  }
  .over a:hover {
      color: #FFFFFF;
      cursor: pointer;
      font-size: 12px;
      font-weight: bold;
      text-decoration: none;
  }
  .over1 a:hover {
      color: #FFFFFF;
      cursor: pointer;
      font-size: 12px;
      font-weight: bold;
      text-decoration: none;
  }
  .act {
      background-color: #555555;
      color: #FFFFFF;
      cursor: pointer;
      float: left;
      font-family: Arial;
      font-size: 12px;
      font-weight: bold;
       padding: 1px;
      text-align: center;
      width: 25px;
  	border-radius: 4px 4px 4px 4px;
  	margin: 4px;
  }
  .act:hover{box-shadow: 0 0 6px rgba(0, 0, 0, 0.37);}
  .lienstyle {
      color: #0C6D8D;
      font-size: 13px;
      font-weight: bold;
      text-decoration: underline;
  }
  .lienstyle:hover {
      color: #25AEE2;
      font-weight: bold;
  }
  .ul_dest
  {
      background: none repeat scroll 0 0 transparent;

      clear: both;
      font-family: Arial;
      font-size: 14px;
      margin: 0;
      padding: 8px;
  	}
  .liste_dest{
   background-image: url("https://tn.tunisiebooking.com/theme/images/flech_li.png");
      background-position: left center;
      background-repeat: no-repeat;
      font-family: Arial;
      font-size: 12px;
      font-weight: bold;
      height: 7px;
      line-height: 1;
      list-style: none outside none;
      padding: 8px 2px 0 12px;
     background-color:#f6f6f6; height:25px; color:#262626; font-weight:bold; font-family:Arial; font-size:14px; border-bottom:1px solid #ececec
  }
  .liste_dest a{
      font-family: Arial;
  	color:#262626;
      font-size: 12px;
      font-weight: bold;
      height: 7px;
      line-height: 1;
      list-style: none outside none;
     text-decoration: underline;
  }

  .info_sup{font-family:Arial; font-size:12px; color:#FF0000}
  .filtre_prix{
   background-color: #FFFFFF;
      clear: both;
      margin-bottom: 15px;
      padding: 5px;
  	}
  .ulprixhot_dest{background: none repeat scroll 0 0 transparent;
      clear: both;
      font-family: Arial;
  	margin: 0;
      padding: 0px 8px;}
  .liste_prix_mois{
      background-image: url(https://tn.tunisiebooking.com/theme/images/flech_liste.png);
      background-position: left center;
      background-repeat: no-repeat;
      font-size: 12px;
      height: 25px;
      padding:6px 2px 6px 12px;
  	list-style:none;
  	line-height:1;
  	font-family:Arial;
  	color:#262626;
  	border-bottom: 1px solid #eeeeee;
  	border-top:1px solid #ffffff;
  	}
  	.minprixp_dest{float:right; font-family:Arial; font-size:24px; color:#262626}
  	.minprixp_dest_slect{float:right; font-family:Arial; font-size:24px; color:#f50090}
  .box_tarif_dispo{float:left;
  	 width:200px;margin: 25px 0px 25px 10px;
  	  background-color:#f5f5f5;
  	  box-shadow: 2px 2px 4px 0px rgba(160, 158, 158, 0.77);
  	-moz-box-shadow: 2px 2px 4px 0px rgba(160, 158, 158, 0.77);
  	-webkit-box-shadow: 2px 2px 4px 0px rgba(160, 158, 158, 0.77);}
  .box_tarif_dispo_modif{float:left; width:200px;margin: 97px 0px 25px 10px;}
  .titre_box_tarif{clear:both;color:#262626;border-bottom: 1px solid #eeeeee;height: 21px;padding: 4px 0px;text-align: center;}
  .box_hotel_guide{float:left; width:230px; margin:0px 6px}
  .titre_dest_guide{font-family:Arial; font-size:16px; text-align:center; line-height:1.5em; color:#FFFFFF;clear:both; height:25px; background-color:#333333}
  .titre_dest_guide a{font-family:Arial; font-size:16px; text-align:center; line-height:1.5em; color:#FFFFFF;clear:both; height:25px; background-color:#333333}
  .titre_hotel_guide{float:left; width:80%; color:#262626; text-decoration:underline}
  .titre_hotel_guide a{float:left; width:80%; color:#262626; text-decoration:underline}
  .box_hotel_conselter{clear:both;margin:0px; padding:0px 4px 0px 0px; border-bottom:1px solid #d6d6d6;border-top:1px solid #fbfbfb}
  .box_hotel_conselter:hover{clear:both; margin:0px; padding:0px 4px 0px 0px; background-color:#ffffff;border-bottom:1px solid #d6d6d6; border-top:1px solid #fbfbfb}
  .titrdest_hotel_conselte{clear:both; margin-bottom:10px; color:#262626}

  .titrdest_hotel_similaire{clear:both; margin-bottom:10px; color:#262626}
  .titrdest_hotel_similaire h2{ margin:0px; padding:0px; margin-bottom:10px;font-weight:normal; font-size:22px}
  .avantage{
		margin-left: 2%;
		margin-top: 3.5%;
		clear:both;
		/*border-bottom:1px solid #cccccc;*/
		/*margin: 15px 0;*/
		padding: 4px;
	}
  .avantage_san_border{clear:both;margin: 15px 0; padding: 4px;}


  .pus_vert{
		color:#262626;
		font-size:38px;
	}
  .text_avantage{
		float:left;
		color:#262626;
		font-style: normal;
		font-weight: 400;
		font-size: 16px;
		line-height: 25px;
		font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
		margin-top: -0.9%;
	}
  .seidbar_hotel_coninter
  {
	  /*background-color: #f5f5f5;*/
	  clear:both;
	  padding:4px;
  }

  .similaires{ margin: 20px 0; padding: 10px;width: auto}
  .btvoir{float:right;
  		 background-repeat:no-repeat;
  		  width:100px; background-position:right;
  		   color: #FFFFFF;
      float: right;
      font-family: Arial;
      font-size: 20px;
      height: 36px;
      line-height: 1.7em;
      padding-right: 21px;
      text-align: right;
      width: 100px;
  	cursor:pointer;
  	}

  .ul_bnface
  {
      background: none repeat scroll 0 0 transparent;

      clear: both;
      font-family: Arial;
      font-size: 14px;
      margin: 0;
      padding: 8px;
  	}
  .liste_bnface{
      background-image: url("https://tn.tunisiebooking.com/theme/images/pus_vert.png");
      background-position: left center;
      background-repeat: no-repeat;
      font-family: Arial;
      font-size: 15px;

      line-height: 1;
      list-style: none outside none;
      padding: 4px 2px 0 15px;
    height:23px; color:#262626;
  }
  .fb_login{padding-left: 10px;}
  .text_code_red { color: #262626;    font-family: Arial;    font-size: 16px;    font-weight: bold;  height: 30px;  line-height: 1.8em;
       }
  .text_code_red_cord{clear:both; border-bottom:dashed 1px #262626;border-radius: 0px 0px 5px 5px; margin:0px 0px 0px 1px; background-color:#f1f1f1; font-family:Arial; font-size:16px;
  		  border-right:dashed 1px #262626;
  		  border-left:dashed 1px #262626;height:30px;width:145px;top:-3px;position: relative;text-align: center;font-weight: bold;color: #262626;line-height: 1.8em;}
  .tex_etape1{color:#262626;height:41px;width: 260px;border-bottom: 1px solid #777777;border-left: 1px solid #777777;border-top: 1px solid #777777;float: left;padding: 6px 14px 0px 14px;}
  .tex_etape2{color:#ffffff;height:41px;width: 320px;border-bottom: 1px solid #777777;border-top: 1px solid #777777;float: left;background-image: url(https://tn.tunisiebooking.com/theme/images/ech_2.png);background-repeat: no-repeat;background-position: right;padding: 6px 14px 0px 34px;}
  .tex_etape3{color:#262626;height:41px;width: 240px;border-bottom: 1px solid #777777;border-top: 1px solid #777777;float: left;padding: 6px 14px 0px 14px;}
  .img_etape{vertical-align:text-bottom; margin-right:15px}
  .titre_coordonne{clear:both; font-family:Arial; height:20px; font-size:20px;background-color:#fdfcfc; padding:10px 0px 10px 10px}
  .text_code_red_detail{clear:both; border-bottom:dashed 1px #262626;border-radius: 0px 0px 5px 5px; margin:0px 0px 0px 1px; background-color:#f1f1f1; font-family:Arial; font-size:16px;
  		  border-right:dashed 1px #262626;
  		  border-left:dashed 1px #262626;height:30px;width:278px;top:-3px;position: relative;text-align: center;font-weight: bold;color: #262626;line-height: 1.8em;}
  		  .titre_mention
  {
  width:1025px;
  border-bottom:1px solid #EAEAEA;
  padding-bottom:6px;
  font-size:28px;
  color:#262626;
  font-weight:bold;
  }
  .tit_d_ment
  {
  font-size:18px;
  font-weight:bold;
  color:#262626;
  text-decoration:underline;
  margin-top:30px;
  margin-bottom:15px;
  }
  .ligne_mention
  {
  width:1025px;
  font-size:14px;
  color:#262626;
  text-align:justify;

  }

  .shadow_menu{
  -moz-box-shadow: 0 0 10px rgba(0,0,0,.25);
   box-shadow:0 2px 4px rgba(0, 0, 0, 0.37);
  }

  .menu_li{border-radius:0px 0px 0px 0px;float:left;text-decoration:underline; cursor:pointer;font-size:15px; color:#262626; width: auto; margin:30px 0px 0px 0px; padding:0px 10px;height:41px; line-height:41px;list-style: none; border-right: 0px solid #111; border-right: 0px solid rgba(46, 45, 45, 0.32);}
  .menu_li:hover{ color:#FFFFFF; text-decoration:underline; background-color:#4e4f53;}
  .menu_li a{ color:#262626; text-decoration:underline}
  .menu_li a:hover{ color:#ffffff; text-decoration:underline}

  #menu > menu_ligr:hover { color:#FFFFFF; }
  .menu_lip{float:left; font-size:15px; color:#FFFFFF; width: auto; padding:0px 10px;height:40px; line-height:40px;list-style: none;border-left: 1px solid #3c3c3c; border-left: 1px solid rgba(255,255,255, 0.08); border-right: 1px solid #111; border-right: 1px solid rgba(46, 45, 45, 0.32);background-image:url(https://tn.tunisiebooking.com/theme/images/bg_menu_promo.jpg); background-repeat:repeat-x}
  .menu_lip a{ color:#FFFFFF; text-decoration:underline}
  .menu_lip:hover{ color:#FFFFFF; text-decoration:underline; background-color:#747477;background-image:url(https://tn.tunisiebooking.com/theme/images/bg_menu_promo.jpg); background-repeat:repeat-x}
  .m_activep{float:left; font-size:15px; color:#444444; background-image:url(https://tn.tunisiebooking.com/theme/images/bg_menu_promo.jpg); background-repeat:repeat; width: auto; padding:0px 10px;height:40px; line-height:40px;list-style: none;border-left: 0px solid #3c3c3c; border-left: 0px solid rgba(255,255,255, 0.08); border-right: 0px solid #111; border-right: 0px solid rgba(46, 45, 45, 0.32);}
  .m_activep a{ color:#444444; text-decoration:underline}
  .m_active{float:left; font-size:15px; color:#444444; background-image:url(https://tn.tunisiebooking.com/theme/images/bg.png); background-repeat:repeat; width: auto; padding:0px 10px;height:40px; line-height:40px;list-style: none;border-left: 0px solid #3c3c3c; border-left: 0px solid rgba(255,255,255, 0.08); border-right: 0px solid #111; border-right: 0px solid rgba(46, 45, 45, 0.32);}
  .m_active a{ color:#444444; text-decoration:underline}
  .sb_menu_li{float:left; font-size:15px; color:#FFFFFF; width: auto; padding:0px 10px;height:40px; line-height:39px;list-style: none;border-left: 1px solid #3c3c3c; border-left: 1px solid rgba(255,255,255, 0.08); border-right: 1px solid #111; border-right: 1px solid rgba(46, 45, 45, 0.32);}
  .sb_menu_li a{ color:#FFFFFF; text-decoration:underline}
  .sb_menu_li:hover{ color:#FFFFFF; text-decoration:underline;}
  .menu_lig{float:left; font-size:15px; color:#FFFFFF; width: auto; padding:0px 2px;height:40px; line-height:40px;list-style: none;border-left: 1px solid #3c3c3c; border-left: 1px solid rgba(255,255,255, 0.08); border-right: 1px solid #111; border-right: 1px solid rgba(46, 45, 45, 0.32);}
  .menu_lig a{ color:#FFFFFF; text-decoration:underline}
  .menu_lig:hover{ color:#FFFFFF; text-decoration:underline; background-color:#747477}
  .menu_lir{float:left;text-decoration:underline; background-color:#4e4f53; cursor:pointer;font-size:15px; color:#feed01; width: auto; padding:0px 10px;height:40px; line-height:40px;list-style: none;border-left: 1px solid #3c3c3c; border-left: 1px solid rgba(255,255,255, 0.08); border-right: 1px solid #111; border-right: 1px solid rgba(46, 45, 45, 0.32);}
  .menu_lir a{ color:#feed01; text-decoration:underline}
  .menu_lir:hover{ color:#feed01; text-decoration:underline; background-color:#4e4f53}


  .menu_lir2{float:left;text-decoration:underline; background-color:#4e4f53; cursor:pointer;font-size:15px; color:#feed01; width: auto; padding:0px;height:40px; line-height:40px;list-style: none;border-left: 1px solid #3c3c3c; border-left: 1px solid rgba(255,255,255, 0.08); border-right: 1px solid #111; border-right: 1px solid rgba(46, 45, 45, 0.32);}
  .menu_lir2 a{ color:#4E4F53; text-decoration:underline}
  .menu_lir2:hover{ color:#feed01; text-decoration:underline; background-color:#4E4F53}
  .menu_lir2 li{ background-color:#4E4F53}
  .menu_lir2 li:hover{ background-color:#fff}
  #menu a {

  }
  #menu > li,
  #menu > li li {
      position: relative;

  }
  #menu > li li { background: transparent none; height: 35px; }

  #menu > li li:hover { color:#FFFFFF;    }
  #menu2 > li:hover {background-color:#747477; color:#FFFFFF;  }
  #menu > li:hover { color:#FFFFFF;  }
  #menu > li:first-child {


  }
  #menu > li + li {

  }
  #menu > li + li:hover {
   color:#FFFFFF;

  }
  #menu > li:last-child {

  }
  #menu > li:hover {
      color:#FFFFFF;


  }

  #menu ul {
      position: absolute;
  	left:0;
      max-height:0em;
      margin:0; padding:0;
      background-color:#4E4F53;
      overflow:hidden;
      transition: 1s max-height 0.3s;
  	z-index:999999;
  	border-right:1px solid rgba(0,0,0, 0.7));
  	 border-radius: 0px 0px 4px 4px;
  }

  #menu > li:hover ul {

      max-height:30em;

  }

  .sbmenu{ width:250px}
  .sbmenu:hover{background-color:#747477}
  .sbmenu_th{ width:300px}
  .sbmenu_th:hover{background-color:#4E4F53}
  .sbm_desctive{float:left; font-size:15px; color:#3f4044; background-image:url(https://tn.tunisiebooking.com/theme/images/bg.png); padding:0px 10px;height:40px; line-height:40px;list-style: none;border-left: 0px solid #3c3c3c; border-left: 0px solid rgba(255,255,255, 0.08); border-right: 0px solid #111; border-right: 0px solid rgba(46, 45, 45, 0.32);border-top: 1px solid rgba(255,255,255, 0.08);border-bottom: 1px solid rgba(0, 0, 0, 0.45); margin:0px 4px;}
  .sbm_desctive a{ color:#ffffff; text-decoration: none}
  .sbm_desctive_vac{float:left; font-size:15px; color:#3f4044; padding:0px 10px;height:40px; line-height:40px;list-style: none;border-left: 0px solid #3c3c3c; border-left: 0px solid rgba(255,255,255, 0.08); border-right: 0px solid #111; border-right: 0px solid rgba(46, 45, 45, 0.32);
  border-top: 1px solid rgba(255,255,255, 0.08);
  border-bottom: 1px solid rgba(0, 0, 0, 0.45);
   margin:0px 4px;}
  .sbm_desctive_vac a{ color:#ffffff; text-decoration: none}
  .sbm_desctive_vac:hover{background-color:#4E4F53}
  .sbm_active{float:left; font-size:15px; color:#262626; background-image:url(https://tn.tunisiebooking.com/theme/images/bg.png); padding:0px 10px;height:40px; line-height:40px;list-style: none;border-left: 0px solid #3c3c3c; border-left: 0px solid rgba(255,255,255, 0.08); border-right: 0px solid #111; border-right: 0px solid rgba(46, 45, 45, 0.32);border-top: 1px solid rgba(255,255,255, 0.08);
  border-bottom: 1px solid rgba(0, 0, 0, 0.45); margin:0px 4px;}
  .sbm_active a{ color:#ffffff; font-weight:bold; text-decoration:underline}
  .exposant {
  font-size: 5px;
  vertical-align: text-top
  }
  .titre_moteur_dd {text-align:center; border-bottom:1px solid #fff;  padding:4px; color:#FFFFFF;font-family:Arial;font-size:24px; font-weight:normal;}
   .plan_dest{background-color: #85b919;margin-left: 6px; padding:8px}
    .plan_dest_or{background-color: #394041;margin-left: 6px; padding:8px}
   .champs_dest_ff{padding: 6px;border-bottom:1px solid rgba(97, 138, 4, 0.64);border-top: 1px solid rgba(250, 247, 247, 0.16); font-family:Arial; font-size:12px; color:#FFFFFF;}
  .champs_dest_ff:hover{ background:#76a612}

  .champs_dest_or{padding: 6px; border-top: 1px solid rgba(250, 247, 247, 0.16);  font-family:Arial; font-size:12px; color:#FFFFFF;}
  .champs_dest_or:hover{ background:#747477}
  .li_groupe{ background:url(https://tn.tunisiebooking.com/theme/images/icon_groupe.jpg); background-repeat:no-repeat; background-position:left;padding-left: 30px;}
  .li_groupe:hover{background: none}
  .menu_li_logo{float:left;text-decoration:underline; cursor:pointer;font-size:15px; color:#FFFFFF; width: auto; padding:0px 0px; height: 41px; margin-right:10px; list-style: none outside none;}
  .menu_li_logo a{color:#262626; text-decoration: none; background-color:#FFFFFF}
  .menu_li_logo a:hover{color:#ffffff; text-decoration:none;background-color:#FFFFFF}
  .menu_li_jeu{color: #FFFFFF; cursor: pointer; float: left; font-size: 15px; height: 37px;list-style: none outside none;margin-right: 0px;padding: 0; text-decoration: underline; width: auto;margin-top:25px;}
  #menu > menu_li_logo:hover {background-color:#747477; color:#FFFFFF;background-color:#FFFFFF  }
  .flech_menu{border-radius:0px 0px 0px 0px;background:url(https://tn.tunisiebooking.com/theme/images/flech_menuv1.png);background-position: right 18px; width: auto; padding-right:20px; height:38px; background-repeat:no-repeat;cursor:pointer;}
  .flech_menu a{ color:#262626; text-decoration:underline}
  .flech_menu:hover{color:#ffffff;background:url(https://tn.tunisiebooking.com/theme/images/flech_menuv1.png);background-position:right -14px;  background-repeat:no-repeat;}
  .flech_menu a:hover{ color:#ffffff; text-decoration:underline}
  .menu_ligr{border-radius:0px 0px 0px 0px;background:url(https://tn.tunisiebooking.com/theme/images/group3.png);background-position: right 0px; background-repeat:no-repeat;text-decoration:underline; cursor:pointer;font-size:15px; color:#262626; width: auto; height:38px; padding-right:38px; }
  .menu_ligr a{ color:#262626; text-decoration:underline}
  .menu_ligr:hover{color:#ffffff;background:url(https://tn.tunisiebooking.com/theme/images/group3.png);background-position: right -37px;  background-repeat:no-repeat; text-decoration:underline;}
  .menu_ligr a:hover{ color:#ffffff; text-decoration:underline}

  .cadremsgerreur{clear:both; background-color:#ffe169; border:1px solid #f8d33d;border-radius:3px; font-weight:bold;color:#262626;text-align:center; font-family: Arial; font-size:17px; max-width:700px; min-width:400px}
  .cadremsgerreur_cache{clear:both; background-color:#ffe169; border:1px solid #f8d33d;border-radius:3px; font-weight:bold;color:#262626;text-align:center; font-family: Arial; font-size:17px; display:none; max-width:700px; min-width:400px}
  .voir_autre_h{height: 1px; position: relative; top: -50px; float: right; padding: 0px 10px 0px 0px;}
  .voir_autre_h_cache{height: 1px; position: relative; top: -50px; float: right; padding: 0px 10px 0px 0px; display:none}
  .cache_prix_par_nuit{float:right;margin: 40px 0px 0px; display:none}
  .prix_par_nuit{float:right;}


  	 .h1style{
			 font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
			 font-style: normal;
			 font-weight: 400;
			 font-size: 12px;
			 line-height: 17px;
			 color: #6B6B6B;
			 text-decoration: underline;
		 }
  	 .h2styles{
       /*text-decoration: underline;*/
       margin: 0 0 0px;padding: 0px;
       font-weight: 600;
       font-style: normal;
       color:#262626;
       font-size: 32px;
       float:left;
       line-height: 36px;
			 margin-left:0.5%;
     }
    .h2styless{
      margin: 0 11px 0px;
      padding: 5px;
      font-weight: normal;
      font-size: 20px;
      float:left;
    }

  .fbbootan{cursor:pointer;margin:0 8px}.fbbootand{float:right;margin:0 8px}.fb_wantgo{float:left;background-image:url(https://tn.tunisiebooking.com/theme/images/fb_wantgo.gif);background-repeat:no-repeat;height:37px}.fb_wantgo:hover{background-image:url(https://tn.tunisiebooking.com/theme/images/fb_wantgo_g.gif);background-repeat:no-repeat}.fb_jaime:hover{float:left;background-image:url(https://tn.tunisiebooking.com/theme/images/fb_jaime_g_ha.gif);background-repeat:no-repeat;height:37px}.fb_jaime{float:left;background-image:url(https://tn.tunisiebooking.com/theme/images/fb_jaime_g.gif);background-repeat:no-repeat;height:37px}.fb_wantgo_d{float:left;background-image:url(https://tn.tunisiebooking.com/theme/images/fb_wantgo_d.gif);background-repeat:no-repeat;height:37px}.fb_jaime_d{float:left;background-image:url(https://tn.tunisiebooking.com/theme/images/fb_jaime_d.gif);background-repeat:no-repeat;height:37px}.blocfb{top:-7px;position:absolute;}.b_border{border-bottom:2px solid #abb9d0;border-right:2px solid #abb9d0;border-top:2px solid #abb9d0;float:left;height:22px;margin:3px 0 0 35px;line-height:1.8em;padding:0 8px;font-family:Arial;font-size:12px;color:#274e98;border-radius:0 4px 4px 0;background-color:#e7edf7;font-weight:700; text-align:center; width:250px;}.b_border_d{border-bottom:2px solid #abb9d0;border-right:2px solid #abb9d0;border-top:2px solid #abb9d0;float:left;height:22px;margin:3px 0 0 35px;line-height:1.8em;padding:0 8px;font-family:Arial;font-size:12px;color:#274e98;border-radius:0 4px 4px 0;background-color:#e7edf7;font-weight:700}
  .goBackAvailability {
  background-color: #def0fc;
  border: 1px solid #9acbe9;
  cursor: pointer;
  display: table;
  width: 100%;
  }
  .goBackAvailability .changeSearch .boton:hover {
  background: transparent;
  }
  .goBackAvailability .changeSearch .boton {
  background: transparent;
  border: 0 none;
  box-shadow: none;
  color: #005591;
  font-size: 14px;
  font-weight: normal;
  text-shadow: 0 0;
  }
  .boton-azul:hover, a.boton-azul:hover, span.boton-azul:hover, input[type='text'].boton-azul:hover {
  background: #0098e7;
  background: -moz-linear-gradient(top, #007dbe 20%, #0098e7 65%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #007dbe), color-stop(65%, #0098e7));
  background: -webkit-linear-gradient(top, #007dbe 20%, #0098e7 65%);
  background: -o-linear-gradient(top, #007dbe 20%, #0098e7 65%);
  background: -ms-linear-gradient(top, #007dbe 20%, #0098e7 65%);
  background: linear-gradient(to bottom, #007dbe 20%, #0098e7 65%);

  }
  .texte
  {
      border:1px solid #333333;
      background:#eeeeee;
      padding:10px;
      color:#333333;
  }
  .texte:hover
  {
      border:1px solid #262626;
      background:#cccccc;
      color:#262626;
  }

  .txt_etiquette {
      float: left;
      color: #282828;
      font-size: 12px;
      padding: 3px 5px;
  }
  .optoffredujoureb {
      float: left;
      width: 69%;
      min-height: 29px;
      padding: 9px 0px 0px 20%;
      font-size: 12px;
  	margin-left:25px;
      font-family: arial;
      color: #003581;
      background-image: url(https://tn.tunisiebooking.com/theme/images/icon_earlybooking_thematique.png);
      background-repeat: no-repeat;
  }
  body {
  /* désactiver la sélection pour copier/coller */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-family: BlinkMacSystemFont,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
  }
  .accordion {
    background-color: #fff;
    border:0px;
    color: #000;
    cursor: pointer;
    padding: 18px;
    width: 96%;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    font-weight:bold;
    border-bottom: 1px solid #E0E0E0;
    font-family: BlinkMacSystemFont,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
  	margin-right: 2%;
  	padding-left: 1%;
  }

  .active, .accordion:hover {
   /* background-color: #e8e8eb; */
   /*background-image: url(https://tn.tunisiebooking.com/theme/images/bg.png);
      background-repeat: repeat;*/

  	background-color: #fff;
  	border-bottom:1px solid #E0E0E0;
  	font-family: BlinkMacSystemFont,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
  }

  .panel1 {
    padding: 0 3%;
    display: none;
  	background:#FFF;
    overflow: hidden;
    text-align:justify;
    width:100%;
  	font-style: normal;
  	font-weight: 400;
  	font-size: 14px;
  	line-height: 21px;
  	letter-spacing: 0.004em;
  	color: #262626;
    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  }


  #countdown{background-image:url(https://tn.tunisiebooking.com/images/ic-wowfinal1.png);  background-repeat: no-repeat; width: 103px; height: 60px; margin-left:-10px; position: absolute; top:10px; font-size: 13px; font-weight:bold; color:#fff;padding:0px 0px 0px 37px; z-index:9;background-size: 90%;}

  #countdown1{background-image:url(https://tn.tunisiebooking.com/theme/images/chronodea.png);  background-repeat: no-repeat; width: 221px; height: 54px; margin-left:-10px; position: absolute; top:30px; font-size: 13px; font-weight:bold; color:#fff;padding:0px 0px 0px 40px; z-index:9}

  #countdown4{background-image:url(https://tn.tunisiebooking.com/theme/images/ICONE-LASTMINUTEFINAL.svg);  background-repeat: no-repeat; width: 238px; height: 54px; margin-left:-10px; position: absolute; top:30px; font-size: 13px; font-weight:bold; color:#fff;padding:0px 0px 0px 40px; z-index:9;background-size: 90%;}

  #countdown2{clear: both; margin-left: 52px;width: 170px;background: #fff;
      color: #e9008f;
      font-weight:600; height:23px; margin-top:30px; padding:2px;

  	border-bottom:1px solid #e9008f;
  	border-right:1px solid #e9008f;
  	border-top:1px solid #e9008f; /*border:1px solid #fb0665*/}
  #countdown3{clear: both; padding-top:12px;}

  .infobulle{
    color: #fff;
    position: absolute;
    visibility : hidden;
    z-index:1;
    border:1px solid #fff;
  -moz-border-radius-bottomright: 20px;
  border-bottom-right-radius: 20px;
  -moz-border-radius-topright: 20px;
  border-top-right-radius: 20px;
  -moz-border-radius-bottomleft: 20px;
  border-bottom-left-radius: 20px;
  -moz-border-radius-topleft: 20px;
  border-top-left-radius: 20px;
    padding: 5px;
    font-family: Arial;
    align: center;
    font-size: 9pt;
    background-color: #000;
  }
  .product .media .thumbnailsBg{ display:none;z-index:1;margin:0;padding:0;bottom:0;left:0;width:514px;height:80px;background:#4A4F63;opacity:.4;-moz-opacity:.4;-ms-filter:"alpha(opacity=40)";filter:alpha(opacity=40);}
  .product .media .thumbnails{z-index:2;margin:0;padding:13px 14px 13px 0px;bottom:0;left:0;/*width:500px;*/height:54px;list-style:none; display:none;}
  .product .media .thumbnails li{float:left;margin:0 0 0 2px;padding:0;width:94px;height:59px;cursor:pointer;}
  .product .media .thumbnails li.first{/*margin:0;*/}

  body#product .product{float:left;position:relative;margin:0;padding:0;width:514px;height:356px;}
  body#product .product .media{float:left;position:relative;margin:0;padding:0;width:514px;height:356px;}
  body#product .product .media #pictureMedia{position:absolute;z-index:0;margin:0;padding:0;left:0;top:0;width:514px;height:356px;border:none;}
  body#product .product .header{float:left;position:relative;margin:0;padding:0;width:514px;height:356px;}
  body#product .product .header .line1,body#product .product .header .line2,body#product .product .header .line3{position:absolute;margin:0;padding:0;right:25px;width:430px;text-align:right;color:#fff;}
  body#product .product .header .line1{z-index:1;top:13px;font-size:18px;line-height:18px;height:36px;text-transform:uppercase;letter-spacing:1px;}
  body#product .product .header .line2{z-index:2;top:50px;font-size:27px;line-height:27px;height:55px;text-transform:uppercase;letter-spacing:1px;}
  body#product .product .header .line3{z-index:3;top:114px;font-size:16px;font-weight:bold;line-height:32px;height:32px;background:#333;padding:0 17px 0 0;width:413px;}
@media(max-width:767px){
	.navbar-inverse .navbar-brand{color:#999}.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-brand:focus{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#999}
	.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:hover,.navbar-inverse .navbar-toggle:focus{background-color:#333}.navbar-inverse.navbar-toggle .icon-bar{background-color:#fff}
	 @media(max-width:767px){

	}.navbar-inverse .navbar-link{color:#999}.navbar-inverse .navbar-link:hover{color:#fff}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}
	 .breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}
	 .breadcrumb>.active{color:#999}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}
	 .pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.428571429;text-decoration:none;background-color:#fff;border:1px solid #ddd}
	 .pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-bottom-left-radius:4px;border-top-left-radius:4px}
	 .pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:hover,.pagination>li>span:hover,.pagination>li>a:focus,.pagination>li>span:focus{/*background-color:#eee*/}.pagination>.active>a,.pagination>.active>span,.pagination>.active>a:hover,.pagination>.active>span:hover,.pagination>.active>a:focus,.pagination>.active>span:focus{z-index:2;color:#fff;cursor:default;background-color:#428bca;border-color:#428bca}.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus{color:#999;cursor:not-allowed;background-color:#fff;border-color:#ddd}
	 .pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px}
	 .pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-bottom-left-radius:6px;border-top-left-radius:6px}
	 .pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}
	 .pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-bottom-left-radius:3px;border-top-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager:before,.pager:after{display:table;content:" "}.pager:after{clear:both}.pager:before,.pager:after{display:table;content:" "}.pager:after{clear:both}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:hover,.pager li>a:focus{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:hover,.pager .disabled>a:focus,.pager .disabled>span{color:#999;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:bold;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}.label[href]:hover,.label[href]:focus{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.label-default{background-color:#999}.label-default[href]:hover,.label-default[href]:focus{background-color:#808080}.label-primary{background-color:#428bca}.label-primary[href]:hover,.label-primary[href]:focus{background-color:#3071a9}.label-success{background-color:#5cb85c}.label-success[href]:hover,.label-success[href]:focus{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:hover,.label-info[href]:focus{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:hover,.label-warning[href]:focus{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:hover,.label-danger[href]:focus{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:bold;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;background-color:#999;border-radius:10px}.badge:empty{display:none}a.badge:hover,a.badge:focus{color:#fff;text-decoration:none;cursor:pointer}.btn .badge{position:relative;top:-1px}a.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#428bca;background-color:#fff}.nav-pills>li>a>.badge{margin-left:3px}
	.jumbotron{padding:20px;margin-bottom:10px;font-size:21px;font-weight:200;line-height:1;color:inherit;/*background-color:#eee*/}

	.jumbotron h1{line-height:1;color:inherit; font-size:23px;}.jumbotron p{line-height:1.4}.container .jumbotron{border-radius:6px}
	@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron{/*padding-right:60px;padding-left:60px*/}.jumbotron h1{/*font-size:63px*/}}.thumbnail{display:inline-block;display:block;height:auto;max-width:100%;padding:4px;margin-bottom:20px;line-height:1.428571429;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.thumbnail>img{display:block;height:auto;max-width:100%;margin-right:auto;margin-left:auto}a.thumbnail:hover,a.thumbnail:focus,a.thumbnail.active{border-color:#428bca}

	 .thumbnail .caption{padding:9px;color:#333}
	 .alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}
	 .alert h4{margin-top:0;color:inherit}
	 .alert .alert-link{font-weight:bold}
	 .alert>p,.alert>ul{margin-bottom:0}
	 .alert>p+p{margin-top:5px}
	 .alert-dismissable{padding-right:35px}
	 .alert-dismissable .close{position:relative;top:-2px;right:-21px;color:inherit}
	 .alert-success{color:#468847;background-color:#dff0d8;border-color:#d6e9c6}
	 .alert-success hr{border-top-color:#c9e2b3}
	 .alert-success .alert-link{color:#356635}
	 .alert-info{color:#3a87ad;background-color:#d9edf7;border-color:#bce8f1}
	 .alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#2d6987}
	 .alert-warning{color:#c09853;background-color:#fcf8e3;border-color:#faebcc}
	 .alert-warning hr{border-top-color:#f7e1b5}
	 .alert-warning .alert-link{color:#a47e3c}
	 .alert-danger{color:#b94a48;background-color:#f2dede;border-color:#ebccd1}
	 .alert-danger hr{border-top-color:#e4b9c0}
	 .alert-danger .alert-link{color:#953b39}
	 @-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}
	 @-moz-keyframes progress-bar-stripes{from{background-position:40px 0}
	 to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:0 0}to{background-position:40px 0}}
	 @keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1)}
	 .progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#428bca;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);-webkit-transition:width .6s ease;transition:width .6s ease}
	 .progress-striped .progress-bar{background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-size:40px 40px}
	 .progress.active .progress-bar{-webkit-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}
	 .progress-bar-success{background-color:#5cb85c}
	 .progress-striped .progress-bar-success{background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-bar-info{background-color:#5bc0de}.progress-striped .progress-bar-info{background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-bar-warning{background-color:#f0ad4e}.progress-striped .progress-bar-warning{background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-bar-danger{background-color:#d9534f}.progress-striped .progress-bar-danger{background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.media,.media-body{overflow:hidden;zoom:1}.media,.media .media{margin-top:15px}


	 .media-object{display:block}.media-heading{margin:0 0 5px}.media>.pull-left{margin-right:10px}.media>.pull-right{margin-left:10px}.media-list{padding-left:0;list-style:none}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-right-radius:4px;border-top-left-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}a.list-group-item{color:#555}a.list-group-item .list-group-item-heading{color:#333}a.list-group-item:hover,a.list-group-item:focus{text-decoration:none;background-color:#f5f5f5}a.list-group-item.active,a.list-group-item.active:hover,a.list-group-item.active:focus{z-index:2;color:#fff;background-color:#428bca;border-color:#428bca}a.list-group-item.active .list-group-item-heading,a.list-group-item.active:hover .list-group-item-heading,a.list-group-item.active:focus .list-group-item-heading{color:inherit}a.list-group-item.active .list-group-item-text,a.list-group-item.active:hover .list-group-item-text,a.list-group-item.active:focus .list-group-item-text{color:#e1edf7}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.05);box-shadow:0 1px 1px rgba(0,0,0,0.05)}.panel-body{padding:15px}.panel-body:before,.panel-body:after{display:table;content:" "}.panel-body:after{clear:both}.panel-body:before,.panel-body:after{display:table;content:" "}.panel-body:after{clear:both}.panel>.list-group{margin-bottom:0}.panel>.list-group .list-group-item{border-width:1px 0}.panel>.list-group .list-group-item:first-child{border-top-right-radius:0;border-top-left-radius:0}.panel>.list-group .list-group-item:last-child{border-bottom:0}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.panel>.table,.panel>.table-responsive{margin-bottom:0}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive{border-top:1px solid #ddd}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.panel>.table-bordered>thead>tr:last-child>th,.panel>.table-responsive>.table-bordered>thead>tr:last-child>th,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th,.panel>.table-bordered>thead>tr:last-child>td,.panel>.table-responsive>.table-bordered>thead>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-right-radius:3px;border-top-left-radius:3px}.panel-title{margin-top:0;margin-bottom:0;font-size:16px}.panel-title>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel-group .panel{margin-bottom:0;overflow:hidden;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse .panel-body{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#d9d9d9;}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse .panel-body{border-top-color:#ddd}.panel-default>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#428bca}.panel-primary>.panel-heading{color:#fff;background-color:#428bca;border-color:#428bca}.panel-primary>.panel-heading+.panel-collapse .panel-body{border-top-color:#428bca}.panel-primary>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#428bca}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#468847;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse .panel-body{border-top-color:#d6e9c6}.panel-success>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#d6e9c6}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#c09853;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse .panel-body{border-top-color:#faebcc}.panel-warning>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#b94a48;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse .panel-body{border-top-color:#ebccd1}
	 .panel-danger>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#ebccd1}
	 .panel-info{/*border-color:#bce8f1*/ -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.55);
	box-shadow: 0 0 4px rgba(0, 0, 0, 0.55);}
	 .panel-info>.panel-heading{color:#3a87ad;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse .panel-body{border-top-color:#bce8f1}
	 .panel-info>.panel-footer+.panel-collapse .panel-body{border-bottom-color:#bce8f1}
	 .well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,0.15)}
	 .well-lg{padding:24px;border-radius:6px}
	 .well-sm{padding:9px;border-radius:3px}
	 .close{float:right;font-size:21px;font-weight:bold;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.2;filter:alpha(opacity=20)}
	.close:hover,.close:focus{color:#000;text-decoration:none;cursor:pointer;opacity:.5;filter:alpha(opacity=50)}
	button.close{padding:0;cursor:pointer;background:transparent;border:0;-webkit-appearance:none}
	.modal-open{overflow:hidden}
	.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;display:none;overflow:auto;overflow-y:scroll}
	.modal.fade .modal-dialog{-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);transform:translate(0,-25%);-webkit-transition:-webkit-transform .3s ease-out;-moz-transition:-moz-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out}
	.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0)}
	.modal-dialog{position:relative;z-index:1050;width:auto;padding:10px;margin-right:auto;margin-left:auto}
	.modal-content{position:relative;background-color:#fff;border:1px solid #999;border:1px solid rgba(0,0,0,0.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,0.5);box-shadow:0 3px 9px rgba(0,0,0,0.5);background-clip:padding-box}
	.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1030;background-color:#000}
	.modal-backdrop.fade{opacity:0;filter:alpha(opacity=0)}
	.modal-backdrop.in{opacity:.5;filter:alpha(opacity=50)}
	.modal-header{min-height:16.428571429px;padding:15px;border-bottom:1px solid #e5e5e5}
	.modal-header .close{margin-top:-2px}
	.modal-title{margin:0;line-height:1.428571429}
	.modal-body{position:relative;padding:20px}
	.modal-footer{padding:19px 20px 20px;margin-top:15px;text-align:right;border-top:1px solid #e5e5e5}
	.modal-footer:before,.modal-footer:after{display:table;content:" "}.modal-footer:after{clear:both}
	.modal-footer:before,.modal-footer:after{display:table;content:" "}.modal-footer:after{clear:both}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}

	@media screen and (min-width:768px){.modal-dialog{width:600px;padding-top:30px;padding-bottom:30px}
	.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,0.5);box-shadow:0 5px 15px rgba(0,0,0,0.5)}

	}
	.tooltip{/*position:absolute;z-index:1030;display:block;font-size:12px;line-height:1.4;opacity:0;filter:alpha(opacity=0);visibility:visible*/}
	.tooltip.in{opacity:.9;filter:alpha(opacity=90)}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;text-decoration:none;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-top-color:#000;border-width:5px 5px 0}
	.tooltip.top-left .tooltip-arrow{bottom:0;left:5px;border-top-color:#000;border-width:5px 5px 0}
	.tooltip.top-right .tooltip-arrow{right:5px;bottom:0;border-top-color:#000;border-width:5px 5px 0}
	.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-right-color:#000;border-width:5px 5px 5px 0}
	.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-left-color:#000;border-width:5px 0 5px 5px}
	.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-bottom-color:#000;border-width:0 5px 5px}
	.tooltip.bottom-left .tooltip-arrow{top:0;left:5px;border-bottom-color:#000;border-width:0 5px 5px}.tooltip.bottom-right .tooltip-arrow{top:0;right:5px;border-bottom-color:#000;border-width:0 5px 5px}.popover{position:absolute;top:0;left:0;z-index:1010;display:none;max-width:276px;padding:1px;text-align:left;white-space:normal;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.2);box-shadow:0 5px 10px rgba(0,0,0,0.2);background-clip:padding-box}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}
	.popover-title{padding:8px 14px;margin:0;font-size:14px;font-weight:normal;line-height:18px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}
	.popover-content{padding:9px 14px}
	.popover .arrow,.popover .arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}
	.popover .arrow{border-width:11px}
	.popover .arrow:after{border-width:10px;content:""}
	.popover.top .arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,0.25);border-bottom-width:0}
	.popover.top .arrow:after{bottom:1px;margin-left:-10px;border-top-color:#fff;border-bottom-width:0;content:" "}
	.popover.right .arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,0.25);border-left-width:0}
	.popover.right .arrow:after{bottom:-10px;left:1px;border-right-color:#fff;border-left-width:0;content:" "}
	.popover.bottom .arrow{top:-11px;left:50%;margin-left:-11px;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,0.25);border-top-width:0}.popover.bottom .arrow:after{top:1px;margin-left:-10px;border-bottom-color:#fff;border-top-width:0;content:" "}.popover.left .arrow{top:50%;right:-11px;margin-top:-11px;border-left-color:#999;border-left-color:rgba(0,0,0,0.25);border-right-width:0}.popover.left .arrow:after{right:1px;bottom:-10px;border-left-color:#fff;border-right-width:0;content:" "}.carousel{position:relative}.carousel-inner{position:relative;width:90%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;height:auto;max-width:100%;line-height:1}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,0.6);opacity:.5;filter:alpha(opacity=50)}.carousel-control.left{background-image:-webkit-gradient(linear,0 top,100% top,from(rgba(0,0,0,0.5)),to(rgba(0,0,0,0.0001)));background-image:-webkit-linear-gradient(left,color-stop(rgba(0,0,0,0.5) 0),color-stop(rgba(0,0,0,0.0001) 100%));background-image:-moz-linear-gradient(left,rgba(0,0,0,0.5) 0,rgba(0,0,0,0.0001) 100%);background-image:linear-gradient(to right,rgba(0,0,0,0.5) 0,rgba(0,0,0,0.0001) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000',endColorstr='#26262600',GradientType=1)}.carousel-control.right{right:0;left:auto;background-image:-webkit-gradient(linear,0 top,100% top,from(rgba(0,0,0,0.0001)),to(rgba(0,0,0,0.5)));background-image:-webkit-linear-gradient(left,color-stop(rgba(0,0,0,0.0001) 0),color-stop(rgba(0,0,0,0.5) 100%));background-image:-moz-linear-gradient(left,rgba(0,0,0,0.0001) 0,rgba(0,0,0,0.5) 100%);background-image:linear-gradient(to right,rgba(0,0,0,0.0001) 0,rgba(0,0,0,0.5) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#26262600',endColorstr='#80000000',GradientType=1)}
	.carousel-control:hover,.carousel-control:focus{color:#fff;text-decoration:none;opacity:.9;filter:alpha(opacity=90)}
	.carousel-control .icon-prev,.carousel-control .icon-next,.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right{position:absolute;top:50%;z-index:5;display:inline-block}
	.carousel-control .icon-prev,.carousel-control .glyphicon-chevron-left{left:50%}
	.carousel-control .icon-next,.carousel-control .glyphicon-chevron-right{right:50%}
	.carousel-control .icon-prev,.carousel-control .icon-next{width:20px;height:20px;margin-top:-10px;margin-left:-10px;font-family:serif}.carousel-control .icon-prev:before{content:'\2039'}
	.carousel-control .icon-next:before{content:'\203a'}
	.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}
	.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000 \9;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}
	.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}
	.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,0.6)}
	.carousel-caption .btn{text-shadow:none}
	@media screen and (min-width:768px){
	.carousel-control .glyphicons-chevron-left,.carousel-control .glyphicons-chevron-right,.carousel-control .icon-prev,.carousel-control .icon-next{width:30px;height:30px;margin-top:-15px;margin-left:-15px;font-size:30px}
	.carousel-caption{right:20%;left:20%;padding-bottom:30px}
	.carousel-indicators{bottom:20px}}
	.clearfix:before,.clearfix:after{display:table;content:" "}
	.clearfix:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{/*display:block!important*/}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important;visibility:hidden!important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-xs,tr.visible-xs,th.visible-xs,td.visible-xs{display:none!important}
	@media(max-width:767px){.visible-xs{display:block!important}
	tr.visible-xs{display:table-row!important}th.visible-xs,td.visible-xs{display:table-cell!important}

	}
	@media(min-width:768px) and (max-width:991px){.visible-xs.visible-sm{display:block!important}tr.visible-xs.visible-sm{display:table-row!important}th.visible-xs.visible-sm,td.visible-xs.visible-sm{display:table-cell!important}}
	@media(min-width:992px) and (max-width:1199px){.visible-xs.visible-md{display:block!important}tr.visible-xs.visible-md{display:table-row!important}th.visible-xs.visible-md,td.visible-xs.visible-md{display:table-cell!important}}
	@media(min-width:1200px){
	.visible-xs.visible-lg{display:block!important}tr.visible-xs.visible-lg{display:table-row!important}th.visible-xs.visible-lg,td.visible-xs.visible-lg{display:table-cell!important}}
	.visible-sm,tr.visible-sm,th.visible-sm,td.visible-sm{display:none!important}
	@media(max-width:767px){
	.visible-sm.visible-xs{display:block!important}tr.visible-sm.visible-xs{display:table-row!important}th.visible-sm.visible-xs,td.visible-sm.visible-xs{display:table-cell!important}}@media(min-width:768px) and (max-width:991px){.visible-sm{display:block!important}tr.visible-sm{display:table-row!important}th.visible-sm,td.visible-sm{display:table-cell!important}}
	@media(min-width:992px) and (max-width:1199px){
	.visible-sm.visible-md{display:block!important}tr.visible-sm.visible-md{display:table-row!important}th.visible-sm.visible-md,td.visible-sm.visible-md{display:table-cell!important}}
	@media(min-width:1200px){.visible-sm.visible-lg{display:block!important}tr.visible-sm.visible-lg{display:table-row!important}th.visible-sm.visible-lg,td.visible-sm.visible-lg{display:table-cell!important}}.visible-md,tr.visible-md,th.visible-md,td.visible-md{display:none!important}
	@media(max-width:767px){
	#aime{ display:none;}
	.visible-md.visible-xs{display:block!important}tr.visible-md.visible-xs{display:table-row!important}th.visible-md.visible-xs,td.visible-md.visible-xs{display:table-cell!important}}@media(min-width:768px) and (max-width:991px){.visible-md.visible-sm{display:block!important}
	tr.visible-md.visible-sm{display:table-row!important}th.visible-md.visible-sm,td.visible-md.visible-sm{display:table-cell!important}}
	@media(min-width:992px) and (max-width:1199px){.visible-md{display:block!important}tr.visible-md{display:table-row!important}th.visible-md,td.visible-md{display:table-cell!important} }
	@media(min-width:1200px){
	.visible-md.visible-lg{display:block!important}tr.visible-md.visible-lg{display:table-row!important}th.visible-md.visible-lg,td.visible-md.visible-lg{display:table-cell!important}}.visible-lg,tr.visible-lg,th.visible-lg,td.visible-lg{display:none!important}
	@media(max-width:767px){
	.visible-lg.visible-xs{display:block!important}tr.visible-lg.visible-xs{display:table-row!important}th.visible-lg.visible-xs,td.visible-lg.visible-xs{display:table-cell!important}}
	@media(min-width:768px) and (max-width:991px){#menuresp{display:none;}}
	}
	@media(min-width:992px) and (max-width:1199px){
	.visible-lg.visible-md{display:block!important}tr.visible-lg.visible-md{display:table-row!important}th.visible-lg.visible-md,td.visible-lg.visible-md{display:table-cell!important}}
	@media(min-width:1200px){.visible-lg{display:block!important}tr.visible-lg{display:table-row!important}
	th.visible-lg,td.visible-lg{display:table-cell!important}}
	.hidden-xs{display:block!important}tr.hidden-xs{display:table-row!important}th.hidden-xs,td.hidden-xs{display:table-cell!important}
	@media(max-width:767px){.hidden-xs,tr.hidden-xs,th.hidden-xs,td.hidden-xs{display:none!important}}@media(min-width:768px) and (max-width:991px){.hidden-xs.hidden-sm,tr.hidden-xs.hidden-sm,th.hidden-xs.hidden-sm,td.hidden-xs.hidden-sm{display:none!important}}@media(min-width:992px) and (max-width:1199px){.hidden-xs.hidden-md,tr.hidden-xs.hidden-md,th.hidden-xs.hidden-md,td.hidden-xs.hidden-md{display:none!important}}@media(min-width:1200px){.hidden-xs.hidden-lg,tr.hidden-xs.hidden-lg,th.hidden-xs.hidden-lg,td.hidden-xs.hidden-lg{display:none!important}}.hidden-sm{display:block!important}tr.hidden-sm{display:table-row!important}th.hidden-sm,td.hidden-sm{display:table-cell!important}
	@media(max-width:767px){.hidden-sm.hidden-xs,tr.hidden-sm.hidden-xs,th.hidden-sm.hidden-xs,td.hidden-sm.hidden-xs{display:none!important}}
	@media(min-width:768px) and (max-width:991px){.hidden-sm,tr.hidden-sm,th.hidden-sm,td.hidden-sm{display:none!important}}@media(min-width:992px) and (max-width:1199px){.hidden-sm.hidden-md,tr.hidden-sm.hidden-md,th.hidden-sm.hidden-md,td.hidden-sm.hidden-md{display:none!important}}@media(min-width:1200px){.hidden-sm.hidden-lg,tr.hidden-sm.hidden-lg,th.hidden-sm.hidden-lg,td.hidden-sm.hidden-lg{display:none!important}}.hidden-md{display:block!important}tr.hidden-md{display:table-row!important}th.hidden-md,td.hidden-md{display:table-cell!important}@media(max-width:767px){.hidden-md.hidden-xs,tr.hidden-md.hidden-xs,th.hidden-md.hidden-xs,td.hidden-md.hidden-xs{display:none!important}}@media(min-width:768px) and (max-width:991px){.hidden-md.hidden-sm,tr.hidden-md.hidden-sm,th.hidden-md.hidden-sm,td.hidden-md.hidden-sm{display:none!important}}@media(min-width:992px) and (max-width:1199px){.hidden-md,tr.hidden-md,th.hidden-md,td.hidden-md{display:none!important}}
	@media(min-width:1200px){.hidden-md.hidden-lg,tr.hidden-md.hidden-lg,th.hidden-md.hidden-lg,td.hidden-md.hidden-lg{display:none!important}}
	.hidden-lg{display:block!important}
	tr.hidden-lg{display:table-row!important}
	th.hidden-lg,td.hidden-lg{display:table-cell!important}
	@media(max-width:767px){
	 .media:first-child{margin-top:0; height:250px;}
	.sidebar{ display:none;}
.product .media .thumbnails li img{float:left;margin:0;padding:0;width:94px;height:57px;border:none;cursor:pointer; display:none;}

{position:absolute;z-index:1;margin:18px;padding:0;top:5%;width:80px;/*height:80px;*/background:#4A4F63;opacity:.3;-moz-opacity:.3;-ms-filter:"alpha(opacity=30)";filter:alpha(opacity=30);}
.product .media .arrowLeftBg{left:2.5%;}
.product .media .arrowRightBg{
	right:-1.3%;
}
.product .media .arrowLeft,.product .media .arrowRight{position:absolute;z-index:2;margin:18px;padding:0;top:5%;width:80px;/*height:80px;*/color:#fff;font-size:60px;line-height:80px;text-align:center;cursor:pointer;}
.product .media .arrowLeft{
	left:3%;
	background-image: url(https://tn.tunisiebooking.com/flech-left.svg);
	background-size: 42px;
	/*left: 89%;*/
	background-repeat: no-repeat;
	margin-top: 7%;
}
.product .media .arrowRight{
	right:0;
	background-image: url(https://tn.tunisiebooking.com/flech-right.svg);
  background-size: 42px;
  left: 90%;
  background-repeat: no-repeat;
  margin-top:7%;
}
.bannierereveiall{float:left; font-size:20px; color:#ffffff; padding:4px 0 3px 45px; background-image:url('https://tn.tunisiebooking.com/theme/images/img_even_detail.jpg'); }
.hidden-lg.hidden-xs,tr.hidden-lg.hidden-xs,th.hidden-lg.hidden-xs,td.hidden-lg.hidden-xs{display:none!important} #my-content { display: none; } #moterdroit { display: none; } #countdown { position: relative; margin-top:-20px;width: 100%; }  #motree { display: none; }
#image{border: 0;
max-width: 90%;
height: auto;
margin-left: 15px;
/*margin-top:-22px;*/}
.ecranordinateur{display:none}
.formule_slectione{font-size:10px; background-color:#F5F5F5; height:60px;}

.titre_hotel_similaire{clear:both;text-decoration:underline;cursor:pointer;font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-size:15px;height:35px;font-weight:700;color:#000}
.mois_sej{width:200px;margin-top:2px;text-align:right;color:#878787;font-size:12px;padding-bottom:4px}.txt_avis_tb{width:210px;font-size:12px;color:#000;padding-bottom:5px}.titre_av{width:200px;padding-left:10px;font-size:16px;font-weight:700}.ligne_img_clien{width:180px}.ligne_part_av{width:180px;margin-top:8px}.img_client_av{ background:url(https://tn.tunisiebooking.com/theme/images/icon_avis.jpg); background-repeat:no-repeat;width:41px;float:left;height:43px}.img_parten_av{ background:url(https://tn.tunisiebooking.com/theme/images/icon_avis.jpg); background-position:-42px 0px; background-repeat:no-repeat;width:41px;float:left;height:37px}.lib_client_av{width:120px;margin-left:10px;padding-top:8px;float:left;font-size:16px;font-weight:700}.lib_parte_av{width:120px;margin-left:10px;padding-top:8px;float:left;font-size:12px;color:#656565}.acont_av_top{width:220px;padding:20px 10px 0 17px;height:34px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_top.png);background-position:center}.acont_av_centre{width:210px;padding:0 10px 5px 27px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_centre.png);background-position:center;background-repeat:repeat-y}.acont_av_bas{width:247px;height:8px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_bas.png);background-position:center}.contenu_av_tb{width:247px;float:left}.img_c_av_tb{width:180px;padding-top:20px;padding-left:3px;float:left}.ligne_av_tnb{width:230px;margin-top:20px}.txt_lib_note{width:200px;text-align:right;font-size:30px;font-weight:700}.nb_pers_nite{width:200px;text-align:right;font-size:12px;margin-top:5px}.ligne_txt_note_av{width:243px;margin-top:5px}.txt_note_av{width:200px;float:left;color:#012243}.note_note_av{width:75px;float:left;text-align:center;font-size:30px;font-weight:700;padding-top:10px;height:50px;margin-left:10px;background-color:#F1F1F1;color:#012243}.tit_note_av_h{width:244px;padding:10px;font-size:18px;color:#000;text-align:center}.contenu_avis_tnb{width:230px;font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;}
.titr_hot_av{width:300px;font-size:12px;font-weight:700;color:#000;padding:10px; height:50px;}
.cont_top_av_h{width:728px;border:1px solid #DDD;border-bottom:6px solid #DDD}.stat_av_h{width:343px;border-right:1px solid #DDD;padding:10px;float:left}.note_av_h{float:left;width:244px;padding:10px}.ligne_stat_av{width:343px;margin-top:7px}.lib_stat_av_h{font-size:13px;color:#000;float:left;width:176px}.img_stat_av_h{float:left;width:70px}

#arrangement{
	background: none repeat scroll 0 0 #FFFFFF;
	border:1px solid #cdcdcd;
	border-radius: 0px;
	color: #262626;
	font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
	display: block;
	padding: 2px 3px;
	font-size:14px;
	font-weight: 400;
	line-height: 16px;
	width:120px;
}

.bloc_anglet_formule{
	clear: both;
	padding: 2px;
	/* padding: 2px 8px 0px 15px; */
	/* border-top: 0px solid #D5D6D8; */
	position: relative;
	z-index: 0;
	background-color: #ffffff;
	margin-top: -10px;
	box-sizing: border-box;
	position: relative;
	width: 1033px;
	height: auto;
	left: 14px;
	/*top: 4px;*/
	background: #FFFFFF;
	border: 1.2px solid #262626;
	border-radius: 6px;
}
#chambre_div{
	white-space: nowrap;
	float: left;
	position: relative;
	left: 3%;
  font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
  font-size: 18px;
  font-weight: 400;
  line-height: 20px;
  color: #6B6B6B;
	width: max-content;
	}
#Agee1{ font-size:12px; color:#262626;}
#Agee12{ font-size:12px; color:#262626;}
#Agee13{ font-size:12px; color:#262626;}
#agenf_1_1{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
#agenf_1_2{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
#agenf_1_3{ float: left; margin: 0px 8px 0px 211px; width: 19.5%;}
#agenf_2_1{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
#agenf_2_2{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
#agenf_2_3{ float: left; margin: 0px 8px 0px 211px; width: 19.5%;}
#agenf_3_1{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
#agenf_3_2{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
#agenf_3_3{ float: left; margin: 0px 8px 0px 211px; width: 19.5%;}
#agenf_4_1{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
#agenf_4_2{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
#agenf_4_3{ float: left; margin: 0px 8px 0px 211px; width: 19.5%;}
#agenf_5_1{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
#agenf_5_2{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
#agenf_5_3{ float: left; margin: 0px 8px 0px 211px; width: 19.5%;}

.styled-select {
    background: url(https://tn.tunisiebooking.com/theme/images/ic_22.png) no-repeat scroll right center #f5f5f5;   border: 1px solid #CCC;   margin: 0 0 5px;   padding: 3px;     overflow: hidden;   width:50%; height:27px;}


.zone_info_resa{
	border-right: 0px solid #dedede;
	padding:4px 4px 5px 2px;
	float:left;
	font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
	font-style: normal;
	font-weight: 400;
	font-size: 15px;
	line-height: 20px;
}
#disponible{
	font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
	line-height: 20px;
}
#sprite_detail{
	margin-left:5%;
	float: left;
	position: relative;
	width: max-content;
	/*padding: 2px 0px 0px 14px;*/
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
	font-size: 18px;
	font-weight: 700;
	line-height: 20px;
	/* background-image: url(https://tn.tunisiebooking.com/theme/images/sprite_detaill_hot1.png); */
	background-repeat: no-repeat;
	background-position: -490px 0px;
	color: #262626;
}
.capitulatif {/*clear:both;margin:10px 0px 10px 35px;*/}
.bloc_m_anglet_formule{ }
.ligne_detaif
{
display:none;
}
.ligne_detail_recap{
	display:none;
}
#light6{background-color:#eeeaeb}
#resultat{clear:both; margin:0px ;}
.plan_moteur_modif{margin:1px;top:18px; /*padding:8px*/}
#contain{ width: 30%}
#menuresp1{display:none;}
#afairdown { margin-left:-99px;}
.carousel-inner{position:relative;width:100%;overflow:hidden}
#hotelsaffaire { float:left; color:#FFFFFF; font-size:12px; font-weight:bold; width:50px; }
#offrespecial { /*margin-left:-50px;*/}
#hotelsaffairesz { float:left; color:#1d1c1c;text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.24); text-decoration:underline; width:50px; font-size:14px; margin-top:-20px;}
#hotelspartir{ width: 80px;
font-size: 25px;
margin-top: 0px;
margin-left: -100px; }
#hotelaulieu{ width: 80px;
font-size: 25px;
margin-top: 0px;
}
#gallerys { background:#FFFFFF; float:left;}

#drapeautunisie
{
float:right; background-image:url(https://tn.tunisiebooking.com/theme/images/drapeau.gif); background-repeat:no-repeat; height:23px;background-position:0px 0px; width:34px; margin:-20px 0px 0px 10px;
}
#drapeaufrance
{
float:right; background-image:url(https://tn.tunisiebooking.com/theme/images/drapeau.gif); background-position:-34px 0px; background-repeat:no-repeat; height:23px; width:34px; margin: -20px 40px 0px 5px;cursor:pointer
}
#hotelsprtir {
width: 80px;
font-size: 25px;
margin-top: -25px;
}
#hotelsspartes
{
float: right;
font-size: 30px;
color: #262626;
margin-top: -10px;
}
#photos {
background-color: rgba(0,0,0,0.5);
position: absolute;
width: 95%;
z-index: 1000;
color: #fff;
float: left;
line-height: 1.4em;
margin: 0;
padding: 5px 0 8px 5px;
font-size:15px;
font-weight:bold;
height:30px;
display:none;

}
#photos1 {
background-color: rgba(0,0,0,0.5);
position: absolute;
width: 95%;
z-index: 1000;
color: #fff;
float: left;
line-height: 1.4em;
margin: 0;
padding: 5px 0 8px 5px;
font-size:15px;
font-weight:bold;
height:30px;

}
#iconephoto {
clear:both; height:35px;/*margin-left: 6px; */}
.bloc_m_anglet{border:0px solid #262626; /*padding-top:4px;*/ float:left;}
#divas {
/*clear:both; padding:10px 10px 0px 10px*/}
#chambress{ display:none;}
#produit_affair{ width:100% }
#age1{float: left;
width: 10%;
margin: 20px 2px 0px 30px;}
#motersza{ height:350px; margin-bottom:10px;}
#Arriv{ float:left;height:25px;margin:0px 8px 0px 0px;}
#Dur{ float:left;height:25px;  margin:0px 8px 0px 0px}
#chambr{ float:left;height:25px; margin:40px 28px 0px 10px}
#Adult{ float:left;height:25px; margin:27px 18px 0px 0px}
#Enfant{ float:left;height:25px; margin:27px 18px 0px 0px}
#Adultes{ float:left;width:20.5%;margin:20px 8px 0px 0px;}
#Enfants{ float:left;width:10.5%;margin:20px 8px 0px 0px;}
#pax_adulte{ float:left;width:20.5%;margin:0px 8px 0px 0px;}
#pax_enfant{ float:left;width:20.5%;margin:0px 8px 0px 0px;}
#imagereher{ border: 0;
max-width: 70%;
height: auto;
margin-bottom: 5px;
margin-top: -65px;
margin-left: 180px;}
.navbar-fixed-top,.navbar-fixed-bottom{/*position:fixed;*/right:0;left:0;z-index:1030}
#voiroffres{ margin-left:95px; font-size:14px; margin-top:-140px;}
#derniereser{ font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-size: 12px;color: #1D1C1C;text-shadow: none;float: left;}
.margin_dehuit{margin:-3px 12px 0px 12px}
#ofrespecials{ display:none;}
#flecheid{ display:none;}
#colonese{ display:none;}
#wrap-ville{ display:none;}
#countdown{ font-size:12px; width:200px;}
/*#plus_res{ display:none;}*/
#dernierereservation{ font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-size: 12px;color: #1D1C1C;text-shadow: none;float: left;margin-left: -99px;  margin-top:25px; margin-bottom:10px; }
#icon_vue{ display:none;}
#pension{ font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
font-size: 12px;
margin-bottom: 10px;
color: #1D1C1C;}
.entete_prod{/*border-bottom:1px solid #dedede; height:42px; margin-top:10px*/}
#promosz{font-size:12px;}
#chronoday{font-size:12px;}
#produit_hoteeels{cursor: pointer;
float: left;
margin-top: -20px;
background-repeat: no-repeat;
background-size: 80% auto;
height: 80px;
width: 120px;
}
#produit_dehuit {
width: 100%;
height: 80px;
}
#flechecs {
float:right;

}
#dispoinfostock {
clear:both; font-size:12px; font-weight:bold;
}
.box.light6 {
background-color: rgba(255,255,255,0.6);
}
.table {
margin: 0;
}
.txtMedio, .txtBMedio, p {
font-size: 1.2em;
line-height: 16px;
}
p, .txtGrande, .txtMedio, .txtPeque, .txtMini, .txtGrande a, .txtMedio a, .txtPeque a, .txtMini a {
color: #555;
margin: 0;
}
table {
max-width: 100%;
background-color: transparent;
}
.table {
width: 100%;
margin-bottom: 20px;
}
table {
border-collapse: collapse;
border-spacing: 0;
}
.table tbody tr td {
/*border-top: 1px dotted #d7d7d7;*/
vertical-align: middle;
}
.table-condensed tbody>tr>td, .table-condensed tbody>tr>th, .table-condensed tfoot>tr>td, .table-condensed tfoot>tr>th, .table-condensed thead>tr>td, .table-condensed thead>tr>th {
padding: 5px;
}
.table tbody>tr>td, .table tbody>tr>th, .table tfoot>tr>td, .table tfoot>tr>th, .table thead>tr>td, .table thead>tr>th {
/*padding: 8px;*/
line-height: 1.428571429;
vertical-align: top;
/*border-top: 1px solid #ddd;*/
font-size:12px;
width:100%
}
.table tr td, .table tr th {
color: #000;
padding: 8px 10px;
vertical-align: middle;
}
#infostock{ margin-top: 10px;font-size:12px; font-weight:bold;color:#fefe00;}
#countrouge{ clear:both;font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; height:36px;line-height: 1.5em; font-size:12px; font-weight:bold;color:#000; background-color:#ffcc01;padding:4px 10px;width:298px;border-radius: 4px 4px 0px 0px;}
#ecrangrand{ display:none;}
#ecranpetit{ clear:both;margin:-10px 0px 10px 0px; background-color:#384042; width: 100%;position: relative;
min-height: 1px;
padding-right: 10px;
padding-left: 5px; margin-top:-92px;}
.mobile-header [class*="btn-"] {
height: 80px;
width: 80px;
top: 0;
}

#accueils { display:none;}
.mobile-header [class*="btn-"]>i {
font-size: 2.8em;
line-height: 48px;
}
.mobile-header .btn-buscadorMobile, .mobile-header .btn-phoneMobile {
right: 0;
}
#smartphone { display: none; }
#boutan_resllt { display: none; }
#etoliess { display: none; }
#etolieess { font-size:14px; font-weight:bold; color:#FFF; margin-top:8px; }
#tailleprix{clear: both; padding:40px 0px 0px 55px;color: #262626;font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-size:24px;}

#goToBook{
padding: 12px 16px;
font-size: 1.4em;
letter-spacing: -1px;
color:#FFFFFF;
background: #85b919;
background: -moz-linear-gradient(top, #85b919 20%, #85b919 20%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #85b919), color-stop(20%, #85b919));
background: -webkit-linear-gradient(top, #85b919 20%, #85b919 20%);
background: -o-linear-gradient(top, #85b919 20%, #85b919 20%);
background: -ms-linear-gradient(top, #85b919 20%, #85b919 20%);
background: linear-gradient(to bottom, #85b919 0%, #85b919 0%);
bottom: 0;
-webkit-box-shadow: -1px 3px 8px #555;
-moz-box-shadow: -1px 3px 8px #555;
box-shadow: -1px 3px 8px #555;
left: 0;
/*padding: 20px;*/
position: fixed;
text-align: center;
width: 100%;
z-index: 50;
}
#wrap-ville{ display:none;}
#similairesss{float:left; background-color:#ffffff; padding:6px; border:1px solid #cccccc; width:90%; margin:10px 6px 0px 6px;}
.titre_avantage{
	float: left;
	font-size: 18px;
	font-weight: 500;
	width: 32%;
	line-height: 25px;
	font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	color:#262626;
}
#moteur_rech{ display:none}
#prix_par_nuits{ display:none}
.titre_aventage{ border-bottom: 1px solid #BBBBBB;
    clear: both;
    color: #262626;
    font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
    font-size: 15px;
    line-height: 1.8em;
    margin: 0 10px 20px 0;
    padding-top: 10px;
	font-weight:bold;}
#jaime{ display:none;}
.style_menu1f {
    background: none repeat scroll 0 0 #FFFFFF;
    color: #262626;
    float: left;
    font-size: 17px;
    font-weight: bold;
    /*height: 17px;*/
    margin-right: 3px;
    padding: 10px;
    text-align: center;
	 /*border-radius: 4px 4px 0px 0px;*/
	 border-left: 1px solid #D5D6D8;
	border-top: 1px solid #D5D6D8;
	border-right: 1px solid #D5D6D8;
	z-index: 100;
	position: relative;

}
#hoteldiv{display:none;}
.style_menu2f {
	background-color: #E7E7E7;
	border-top:1px solid #DDDDDD;
	border:left:1px solid #DDDDDD;
	border-right: 1px solid #DDDDDD;
	border-radius: 4px 4px 0px 0px;
	color: #262626;
	cursor: pointer;
	float: left;
	font-size: 17px;
	margin-right: 3px;
	padding: 10px;
	text-align: center;
	z-index:10;
}
.bloc_anglet
{
	/*margin-bottom: -2%;*/
	clear: both;
padding: 2px;
/*padding: 8px 8px 8px 15px;*/
/*left: -10px;*/
/*top: -2px;*/
/*border-top: 1px solid #D5D6D8;*/
position: relative;
z-index: 0;
background-color: #ffffff;
width: 100%;
}
.photos_div{
	/*border-top: 1px solid #D5D6D8;*/
	padding: 25px 0px 8px 15px;
	position: relative;
	left: -16px;
	top: -8px;
}
.shadow-container {/*-moz-box-shadow:0 0 7px rgba(0, 0, 0, 0.55);box-shadow:0 0 7px rgba(0, 0, 0, 0.55);*/}
#disponible{
margin-left:-50px;

}
.text_prix_n{
	color:#262626;
	font-weight: 700;
	font-size: 24px;
	line-height: 37px;
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
	margin-top: -20px;
	margin-left: -30px;
}
#sup{
	float:left;
	margin-top: 4%;
  font-style: normal;
  font-weight: 500;
  font-size: 13px;
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;

 }
.pass_ticket{/*float:left; width:550px*/}
}

@media(min-width:768px) and (max-width:991px){
 .media:first-child{margin-top:0}
.product .media .thumbnails li img{float:left;margin:0;padding:0;width:94px;height:57px;border:none;cursor:pointer;}
.product .media .arrowLeftBg,.product .media .arrowRightBg{cursor:pointer;position:absolute;z-index:1;margin:18px;padding:0;top:45%;width:50px;height:50px;background:#fff;border-radius: 100px;/*opacity:.3;-moz-opacity:.3;-ms-filter:"alpha(opacity=30)";filter:alpha(opacity=30);*/}
.product .media .arrowLeftBg{left:2.5%;}
.product .media .arrowRightBg{
	right:-1.3%;
}
.product .media .arrowLeft,.product .media .arrowRight{position:absolute;z-index:2;margin:18px;padding:0;top:45%;width:80px;height:80px;color:#fff;font-size:60px;line-height:80px;text-align:center;cursor:pointer;}
.product .media .arrowLeft{
	left:3%;
	background-image: url(https://tn.tunisiebooking.com/flech-left.svg);
	background-size: 42px;
	/*left: 89%;*/
	background-repeat: no-repeat;
	margin-top: 7%;
}
.product .media .arrowRight{
	right:0;
	background-image: url(https://tn.tunisiebooking.com/flech-right.svg);
	background-size: 42px;
	left: 90%;
	background-repeat: no-repeat;
	margin-top: 7%;
}
.bannierereveiall{float:left; font-size:20px; color:#ffffff; padding:4px 0 3px 45px; background-image:url('https://tn.tunisiebooking.com/theme/images/img_even_detail.jpg'); width:584px; height:26px;}
.pass_ticket{float:left; width:550px}
#menuresp{display:none;}
#bodyresponsive { clear:both; margin: 8px auto 0px auto;width: 1065px; }
.zone_info_resa{
	border-right: 0px solid #dedede;
	padding:4px 4px 5px 4px;
	float:left;width:400px;}
	#disponible{
		font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
	}
.formule_slectione{border:0px 1px 1px 1px solid #e6e6e6;font-size:15px; background-color:#F5F5F5;}
#drapeautunisie
{
background-image:url(https://tn.tunisiebooking.com/theme/images/drapeau.gif); background-repeat:no-repeat; height:23px;background-position:0px 0px; width:34px; margin:-20px 0px 0px 10px;margin-left: 960px;
}
.styled-select {
    background: url(https://tn.tunisiebooking.com/theme/images/ic_22.png) no-repeat scroll right center #f5f5f5;   border: 1px solid #CCC;   margin: 0 0 5px;   padding: 3px;      overflow: hidden;   width:50%; height: 27px;}
#drapeaufrance
{
float: left; background-image:url(https://tn.tunisiebooking.com/theme/images/drapeau.gif); background-position:-34px 0px; background-repeat:no-repeat; height:23px; width:34px; margin: -20px 40px 0px 5px;cursor:pointer;margin-left: 1000px;
}
#dernierereservation{ display:none;}
.margin_dehuit{margin:0px 12px 0px 12px}
#flechecs {
display:none;

}
#ecranportbale{ display:none}
#dispoinfostock {
clear:both; font-size:14px; font-weight:bold;
}
#tailleprix{clear: both; padding:0px 0px 0px 55px;color: #262626;font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-size:38px;}
#etolieess { display: none; }
#ecranpetit{ display:none;}
#pax_adulte{ float:left;width:10.5%;margin:0px 8px 0px 0px;}
#pax_enfant{ float:left;width:10.5%;margin:0px 8px 0px 0px;}
#Adultes{ float:left;width:10.5%;margin:20px 8px 0px 0px;}
#Enfants{ float:left;width:10.5%;margin:20px 8px 0px 0px;}
#countrouge{ clear:both;font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; height:25px;line-height: 1.5em; font-size:18px; font-weight:bold;color:#000; background-color:#ffcc01;padding:4px 10px;width:450px;border-radius: 4px 4px 0px 0px;}
#Arriv{ float:left;height:25px;margin:0px 8px 0px 0px;}
#Dur{ float:left;height:25px;  margin:0px 8px 0px 0px}
#chambr{ float:left;height:25px; margin:0px 28px 0px 0px}
#Adult{ float:left;height:25px; margin:0px 18px 0px 0px}
#Enfant{ float:left;height:25px; margin:0px 18px 0px 0px}
.navbar-fixed-top{top:100px;border-width:0 0 1px}
#motersza{ min-width: 400px; max-width: 1090px; width: 100%; margin: 0px auto; }
.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030}
#footeres { margin-left:100px;}
#hotelsspartes
{
float:right;font-size:36px; color:#262626; margin-top:-10px;
}
#similairesss{float:left; background-color:#ffffff; padding:6px; border:1px solid #cccccc; width:29%; margin:10px 6px 0px 6px;}
.titrdest_hotel_conselte h2{
	margin:0px;
	padding:0px;
	margin-bottom:10px;
	font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	font-style: normal;
	font-weight: 600;
	font-size: 24px;
	line-height: 26px;
	color:#262626;
	margin-left:1.5%;
}
#produit_hoteeels{cursor:pointer; float:left;margin-top:10px; background-repeat:no-repeat;background-size: 250% auto; height:179px; width:164px; }
#aime{ float: left;
width: 100%;
height: 40px;
text-align: right;
margin-top: -32px; }
#offrespecial { margin-left:60px;}
#gallerys { background:#FFFFFF; float:left; width:750px;margin-bottom: 0%; }
.titre_avantage{
	float:left;
	font-size: 18px;
	font-weight: 500;
	width: 32%;
	line-height: 25px;
	font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	color:#262626;
}
#goToBook{ display:none}
.hidden-lg,tr.hidden-lg,th.hidden-lg,td.hidden-lg{display:none!important}.visible-print,tr.visible-print,th.visible-print,td.visible-print{display:none!important}
.titre_aventage{ border-bottom: 1px solid #BBBBBB;
    clear: both;
    color: #262626;
    font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
    font-size: 22px;
    line-height: 1.8em;
    margin: 0 10px 20px 0;
    padding-top: 10px;}
	#jaime{ position: absolute; margin-left:550px; margin-top:20px;}
.style_menu1f {
    background: none repeat scroll 0 0 #FFFFFF;
    color: #262626;
    float: left;
    font-size: 17px;
    font-weight: bold;
    /*height: 17px;*/
    margin-right: 3px;
    padding: 10px;
    text-align: center;
	 border-radius: 4px 4px 0px 0px;
	 border-left: 1px solid #D5D6D8;
	border-top: 1px solid #D5D6D8;
	border-right: 1px solid #D5D6D8;
	z-index: 100;
	position: relative;

}
.capitulatif {clear:both;margin:-14px 0px 10px 28px;}
.style_menu2f {
	background-color: #E7E7E7;
	border-top:1px solid #DDDDDD;
	border:left:1px solid #DDDDDD;
	border-right: 1px solid #DDDDDD;
	border-radius: 4px 4px 0px 0px;
	color: #262626;
	cursor: pointer;
	float: left;
	font-size: 17px;
	margin-right: 3px;
	padding: 10px;
	text-align: center;
	z-index:10;
}
#photos { display:none;}
.shadow-container {-moz-box-shadow:0 0 7px rgba(0, 0, 0, 0.55);box-shadow:0 0 7px rgba(0, 0, 0, 0.55);}
.bloc_anglet{
	/*margin-bottom: -2%;*/
	clear:both;
	padding:2px;
	padding:8px 8px 8px 15px;
	left: -10px;
	top: -2px;
	/*border-top:1px solid #D5D6D8;*/
	position: relative;
	z-index:0;
	background-color: #ffffff;}
	.photos_div{
		/*border-top: 1px solid #D5D6D8;*/
		padding: 25px 0px 8px 15px;
		position: relative;
		left: -16px;
		top: -8px;
	}
#divas {
clear:both; padding:10px 10px 0px 10px}
#iconephoto {
clear:both; height:35px;margin-left: 6px; }
.bloc_m_anglet{border:0px solid #262626; padding-top:4px; float:left;}
.ligne_detaif
{
	clear:both;
	padding-left:0px;
	color:#010101;
	padding-top:4px;
	font-size:12px;
	font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
  padding-bottom: 2%;
}
.ligne_detail_recap{
	background-color: #262626;
	position: relative;
	margin-top: 2.5%;
	margin-left: -3%;
	display: flex;
	width: 717px;
	height: 55px;
	padding-top: 3px !important;
	padding-bottom: 3px !important;
	padding-left:0px !important;
	padding-right: 1px !important;
	padding: 2px;
	justify-content: center;
	align-items: center;
	flex-shrink: 0;
	border-radius: 6px;
	border:0.5px solid #262626;
	margin-bottom: -2%;
}
#resultat{clear:both; margin:0px}
.plan_moteur_modif{background-color: #ffffff;margin:8px;top:18px; padding:8px}
#light6{display:none;}
.bloc_m_anglet_formule{border:0px solid #262626; padding-top:4px; float:left; width:100%;margin-top:-1%;}
#sprite_detail{
	margin-left:5%;
	float: left;
	position: relative;
	width: max-content;
	/*padding: 2px 0px 0px 14px;*/
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
	font-size: 18px;
	font-weight: 700;
	line-height: 20px;
	/* background-image: url(https://tn.tunisiebooking.com/theme/images/sprite_detaill_hot1.png); */
	background-repeat: no-repeat;
	background-position: -490px 0px;
	color: #262626;
}
#chambre_div{
	white-space: nowrap;
	float: left;
	position: relative;
	left: 3%;
	/*top: -53%;
    left: 46%;
    position: relative;*/
    font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 20px;
    color: #6B6B6B;
		width: max-content;
		/*margin-top: -12%;
		margin-left: 58%;*/
}
.bloc_anglet_formule{
	clear: both;
	padding: 2px;
	/* padding: 2px 8px 0px 15px; */
	/* border-top: 0px solid #D5D6D8; */
	position: relative;
	z-index:0;
	background-color: #ffffff;
	margin-top: -10px;
	box-sizing: border-box;
	position: relative;
	width: 1033px;
	height: auto;
	left: 14px;
	top: 4px;
	background: #FFFFFF;
	border: 1.2px solid #262626;
	border-radius: 6px;
}
#arrangement{
	background: none repeat scroll 0 0 #FFFFFF;
	border:1px solid #cdcdcd;
	border-radius: 0px;
	color: #262626;
	font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
	display: block;
	padding: 2px 4px;
	font-size:14px;
	font-weight: 400;
	line-height: 16px;
}
#ecrangallery_photo{ display:none; }
.titre_hotel_similaire{clear:both;text-decoration:underline;cursor:pointer;text-align:center;font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-size:15px;height:35px;font-weight:700;color:#000}
.mois_sej{width:500px;margin-top:2px;text-align:right;color:#878787;font-size:12px;padding-bottom:4px}.txt_avis_tb{width:510px;font-size:12px;color:#000;padding-bottom:5px}.titre_av{width:500px;padding-left:10px;font-size:16px;font-weight:700}.ligne_img_clien{width:180px}.ligne_part_av{width:180px;margin-top:8px}.img_client_av{ background:url(https://tn.tunisiebooking.com/theme/images/icon_avis.jpg); background-repeat:no-repeat;width:41px;float:left;height:43px}.img_parten_av{ background:url(https://tn.tunisiebooking.com/theme/images/icon_avis.jpg); background-position:-42px 0px; background-repeat:no-repeat;width:41px;float:left;height:37px}.lib_client_av{width:120px;margin-left:10px;padding-top:8px;float:left;font-size:16px;font-weight:700}.lib_parte_av{width:120px;margin-left:10px;padding-top:8px;float:left;font-size:12px;color:#656565}.acont_av_top{width:520px;padding:20px 10px 0 17px;height:34px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_top.png);background-position:center}.acont_av_centre{width:510px;padding:0 10px 5px 27px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_centre.png);background-position:center;background-repeat:repeat-y}.acont_av_bas{width:547px;height:8px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_bas.png);background-position:center}.contenu_av_tb{width:547px;float:left}.img_c_av_tb{width:180px;padding-top:20px;padding-left:3px;float:left}.ligne_av_tnb{width:730px;margin-top:20px}.txt_lib_note{width:200px;text-align:right;font-size:30px;font-weight:700}.nb_pers_nite{width:200px;text-align:right;font-size:12px;margin-top:5px}.ligne_txt_note_av{width:343px;margin-top:5px}.txt_note_av{width:200px;float:left;color:#012243}.note_note_av{width:75px;float:left;text-align:center;font-size:30px;font-weight:700;padding-top:10px;height:50px;margin-left:10px;background-color:#F1F1F1;color:#012243}.tit_note_av_h{width:344px;padding:10px;font-size:18px;color:#000;text-align:center}.contenu_avis_tnb{width:730px;font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif}.titr_hot_av{width:700px;font-size:18px;font-weight:700;color:#000;padding:10px}.cont_top_av_h{width:728px;border:1px solid #DDD;border-bottom:6px solid #DDD}.stat_av_h{width:343px;border-right:1px solid #DDD;padding:10px;float:left}.note_av_h{float:left;width:344px;padding:10px}.ligne_stat_av{width:343px;margin-top:7px}.lib_stat_av_h{font-size:13px;color:#000;float:left;width:176px}.img_stat_av_h{float:left;width:70px}
.text_prix_n{
	color:#262626;
	text-align:center;
	float:left;
	font-weight: 700;
	font-size: 24px;
	line-height: 37px;
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;}
#sup{
	margin-top: 4%;
	float:left;
	font-style: normal;
	font-weight: 500;
	font-size: 13px;
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;

}
}
@media(min-width:992px) and (max-width:1199px){
 .media:first-child{margin-top:0}
.product .media .thumbnails li img{float:left;margin:0;padding:0;width:94px;height:57px;border:none;cursor:pointer;}
.product .media .arrowLeftBg,.product .media .arrowRightBg{position:absolute;z-index:1;margin:18px;padding:0;top:45%;width:50px;height:50px;background:#fff;border-radius: 100px;/*opacity:.3;-moz-opacity:.3;-ms-filter:"alpha(opacity=30)";filter:alpha(opacity=30);*/}
.product .media .arrowLeftBg{left:2.5%;}
.product .media .arrowRightBg{
	right:-1.3%;
}
.product .media .arrowLeft,.product .media .arrowRight{position:absolute;z-index:2;margin:18px;padding:0;top:45%;width:80px;height:80px;color:#fff;font-size:60px;line-height:80px;text-align:center;cursor:pointer;}
.product .media .arrowLeft{
	left:3%;
	background-image: url(https://tn.tunisiebooking.com/flech-left.svg);
	background-size: 42px;
	/*left: 89%;*/
	background-repeat: no-repeat;
	margin-top: 7%;
}
.product .media .arrowRight{
	right:0;
	background-image: url(https://tn.tunisiebooking.com/flech-right.svg);
  background-size: 42px;
	left: 90%;
  background-repeat: no-repeat;
  margin-top: 7%;
}
.bannierereveiall{float:left; font-size:20px; color:#ffffff; padding:4px 0 3px 45px; background-image:url('https://tn.tunisiebooking.com/theme/images/img_even_detail.jpg'); width:584px; height:26px;}
.pass_ticket{float:left; width:550px}
#menuresp{display:none;}
#bodyresponsive { clear:both; margin: 8px auto 0px auto;width: 1065px; }
.zone_info_resa{border-right: 0px solid #dedede; padding:4px 4px 5px 4px; float:left;width:400px;}
#disponible{
	font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
}
.formule_slectione{border:0px 1px 1px 1px solid #e6e6e6;font-size:15px; background-color:#F5F5F5;}
#drapeautunisie
{
background-image:url(https://tn.tunisiebooking.com/theme/images/drapeau.gif); background-repeat:no-repeat; height:23px;background-position:0px 0px; width:34px; margin:-20px 0px 0px 10px;margin-left: 960px;
}
.styled-select {
    background: url(https://tn.tunisiebooking.com/theme/images/ic_22.png) no-repeat scroll right center #f5f5f5;   border: 1px solid #CCC;   margin: 0 0 5px;   padding: 3px;      overflow: hidden;   width:50%; height:27px;}
#drapeaufrance
{
float: left; background-image:url(https://tn.tunisiebooking.com/theme/images/drapeau.gif); background-position:-34px 0px; background-repeat:no-repeat; height:23px; width:34px; margin: -20px 40px 0px 5px;cursor:pointer;margin-left: 1000px;
}
#dernierereservation{ display:none;}
.margin_dehuit{margin:0px 12px 0px 12px}
#flechecs {
display:none;

}
#ecranportbale{ display:none}
#dispoinfostock {
clear:both; font-size:14px; font-weight:bold;
}
#tailleprix{clear: both; padding:0px 0px 0px 55px;color: #262626;font-family: Arial;font-size:38px;}
#etolieess { display: none; }
#ecranpetit{ display:none;}
#pax_adulte{ float:left;width:10.5%;margin:0px 8px 0px 0px;}
#pax_enfant{ float:left;width:10.5%;margin:0px 8px 0px 0px;}
#Adultes{ float:left;width:10.5%;margin:20px 8px 0px 0px;}
#Enfants{ float:left;width:10.5%;margin:20px 8px 0px 0px;}
#countrouge{ clear:both;font-family:Arial; height:25px;line-height: 1.5em; font-size:18px; font-weight:bold;color:#000; background-color:#ffcc01;padding:4px 10px;width:450px;border-radius: 4px 4px 0px 0px;}
#Arriv{ float:left;height:25px;margin:0px 8px 0px 0px;}
#Dur{ float:left;height:25px;  margin:0px 8px 0px 0px}
#chambr{ float:left;height:25px; margin:0px 28px 0px 0px}
#Adult{ float:left;height:25px; margin:0px 18px 0px 0px}
#Enfant{ float:left;height:25px; margin:0px 18px 0px 0px}
.navbar-fixed-top{top:100px;border-width:0 0 1px}
#motersza{ min-width: 400px; max-width: 1090px; width: 100%; margin: 0px auto; }
.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030}
#footeres { margin-left:100px;}
#hotelsspartes
{
float:right;font-size:36px; color:#262626; margin-top:-10px;
}
#similairesss{float:left; background-color:#ffffff; padding:6px; border:1px solid #cccccc; width:29%; margin:10px 6px 0px 6px;}
.titrdest_hotel_conselte h2{
	margin:0px;
	padding:0px;
	margin-bottom:10px;
	font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	font-style: normal;
	font-weight: 600;
	font-size: 24px;
	line-height: 26px;
	color:#262626;
	margin-left:1.5%;
}
#produit_hoteeels{cursor:pointer; float:left;margin-top:10px; background-repeat:no-repeat;background-size: 250% auto; height:179px; width:164px; }
#aime{ float: left;
width: 100%;
height: 40px;
text-align: right;
margin-top: -32px; }
#offrespecial { margin-left:60px;}
#gallerys { background:#FFFFFF; float:left; width:750px;margin-bottom: 0%; }
.titre_avantage{
	float: left;
	font-size: 18px;
	font-weight: 500;
	width: 32%;
	line-height: 25px;
	font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	color:#262626;
}
#goToBook{ display:none}
.hidden-lg,tr.hidden-lg,th.hidden-lg,td.hidden-lg{display:none!important}.visible-print,tr.visible-print,th.visible-print,td.visible-print{display:none!important}
.titre_aventage{ border-bottom: 1px solid #BBBBBB;
    clear: both;
    color: #262626;
    font-family: Arial;
    font-size: 22px;
    line-height: 1.8em;
    margin: 0 10px 20px 0;
    padding-top: 10px;}
	#jaime{ position: absolute; margin-left:550px; margin-top:20px;}
.style_menu1f {
    background: none repeat scroll 0 0 #FFFFFF;
    color: #262626;
    float: left;
    font-size: 17px;
    font-weight: bold;
    /*height: 17px;*/
    margin-right: 3px;
    padding: 10px;
    text-align: center;
	 border-radius: 4px 4px 0px 0px;
	 border-left: 1px solid #D5D6D8;
	border-top: 1px solid #D5D6D8;
	border-right: 1px solid #D5D6D8;
	z-index: 100;
	position: relative;

}
.capitulatif {clear:both;margin:-14px 0px 10px 28px;}
.style_menu2f {
	background-color: #E7E7E7;
	border-top:1px solid #DDDDDD;
	border:left:1px solid #DDDDDD;
	border-right: 1px solid #DDDDDD;
	border-radius: 4px 4px 0px 0px;
	color: #262626;
	cursor: pointer;
	float: left;
	font-size: 17px;
	margin-right: 3px;
	padding: 10px;
	text-align: center;
	z-index:10;
}

#photos { display:none;}
.shadow-container {-moz-box-shadow:0 0 7px rgba(0, 0, 0, 0.55);box-shadow:0 0 7px rgba(0, 0, 0, 0.55);}
.bloc_anglet{
	    /*margin-bottom: -2%;*/
	clear:both;
	padding:2px;
	padding:8px 8px 8px 15px;
	left: -10px;
	top: -1px;
	/*border-top:1px solid #D5D6D8;*/
	position: relative;
	z-index:0;
	background-color: #ffffff;
}
.photos_div{
	/*border-top: 1px solid #D5D6D8;*/
	padding: 25px 0px 8px 15px;
	position: relative;
	left: -16px;
	top: -8px;
}
#divas {
clear:both; padding:10px 10px 0px 10px}
#iconephoto {
clear:both; height:35px;margin-left: 6px; }
.bloc_m_anglet{border:0px solid #262626; padding-top:4px; float:left;}
.ligne_detaif
{
     clear:both;
	padding-left:0px;
	color:#010101;
	padding-top:4px;
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
  padding-bottom: 2%;
}
.ligne_detail_recap{
	background-color: #262626;
	position: relative;
	margin-top: 2.5%;
	margin-left: -3%;
	display: flex;
	width: 717px;
	height: 55px;
	padding-top: 3px !important;
	padding-bottom: 3px !important;
	padding-left: 0px !important;
	padding-right: 1px !important;
	padding: 2px;
	justify-content: center;
	align-items: center;
	flex-shrink: 0;
	border-radius: 6px;
	border: 0.5px solid #262626;
	margin-bottom: -2%;
}

#resultat{clear:both; margin:0px}
.plan_moteur_modif{background-color: #ffffff;margin:8px;top:18px; padding:8px}
#light6{display:none;}
.bloc_m_anglet_formule{border:0px solid #262626; padding-top:4px; float:left; width:100%;margin-top:-1%;}
#sprite_detail{
	margin-left:5%;
	float: left;
	position: relative;
	width: max-content;
	/*padding: 2px 0px 0px 14px;*/
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
	font-size: 18px;
	font-weight: 700;
	line-height: 20px;
	/* background-image: url(https://tn.tunisiebooking.com/theme/images/sprite_detaill_hot1.png); */
	background-repeat: no-repeat;
	background-position: -490px 0px;
	color: #262626;
}
#chambre_div{
	white-space: nowrap;
	float: left;
	position: relative;
	left: 3%;
	/*top: -53%;
    left: 46%;
    position: relative;*/
    font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 20px;
    color: #6B6B6B;
		width: max-content;
		/*margin-top: -12%;
		margin-left: 58%;*/
}
.bloc_anglet_formule{
	clear: both;
	padding: 2px;
	/* padding: 2px 8px 0px 15px; */
	/* border-top: 0px solid #D5D6D8; */
	position: relative;
	z-index: 0;
	background-color: #ffffff;
	margin-top: -10px;
	box-sizing: border-box;
	position: relative;
	width: 1033px;
	height: auto;
	left: 14px;
	top: 4px;
	background: #FFFFFF;
	border: 1.2px solid #262626;
	border-radius: 6px;
}
#arrangement{
	background: none repeat scroll 0 0 #FFFFFF;
	border:1px solid #cdcdcd;
	border-radius: 0px;
	color: #262626;
	font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
	display: block;
	padding: 2px 4px;
	font-size:14px;
	font-weight: 400;
	line-height: 16px;
}
#ecrangallery_photo{ display:none; }
.titre_hotel_similaire{clear:both;text-decoration:underline;cursor:pointer;text-align:center;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;font-size:15px;height:35px;font-weight:700;color:#000}
.mois_sej{width:500px;margin-top:2px;text-align:right;color:#878787;font-size:12px;padding-bottom:4px}.txt_avis_tb{width:510px;font-size:12px;color:#000;padding-bottom:5px}.titre_av{width:500px;padding-left:10px;font-size:16px;font-weight:700}.ligne_img_clien{width:180px}.ligne_part_av{width:180px;margin-top:8px}.img_client_av{ background:url(https://tn.tunisiebooking.com/theme/images/icon_avis.jpg); background-repeat:no-repeat;width:41px;float:left;height:43px}.img_parten_av{ background:url(https://tn.tunisiebooking.com/theme/images/icon_avis.jpg); background-position:-42px 0px; background-repeat:no-repeat;width:41px;float:left;height:37px}.lib_client_av{width:120px;margin-left:10px;padding-top:8px;float:left;font-size:16px;font-weight:700}.lib_parte_av{width:120px;margin-left:10px;padding-top:8px;float:left;font-size:12px;color:#656565}.acont_av_top{width:520px;padding:20px 10px 0 17px;height:34px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_top.png);background-position:center}.acont_av_centre{width:510px;padding:0 10px 5px 27px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_centre.png);background-position:center;background-repeat:repeat-y}.acont_av_bas{width:547px;height:8px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_bas.png);background-position:center}.contenu_av_tb{width:547px;float:left}.img_c_av_tb{width:180px;padding-top:20px;padding-left:3px;float:left}.ligne_av_tnb{width:730px;margin-top:20px}.txt_lib_note{width:200px;text-align:right;font-size:30px;font-weight:700}.nb_pers_nite{width:200px;text-align:right;font-size:12px;margin-top:5px}.ligne_txt_note_av{width:343px;margin-top:5px}.txt_note_av{width:200px;float:left;color:#012243}.note_note_av{width:75px;float:left;text-align:center;font-size:30px;font-weight:700;padding-top:10px;height:50px;margin-left:10px;background-color:#F1F1F1;color:#012243}.tit_note_av_h{width:344px;padding:10px;font-size:18px;color:#000;text-align:center}.contenu_avis_tnb{width:730px;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif}.titr_hot_av{width:700px;font-size:18px;font-weight:700;color:#000;padding:10px}.cont_top_av_h{width:728px;border:1px solid #DDD;border-bottom:6px solid #DDD}.stat_av_h{width:343px;border-right:1px solid #DDD;padding:10px;float:left}.note_av_h{float:left;width:344px;padding:10px}.ligne_stat_av{width:343px;margin-top:7px}.lib_stat_av_h{font-size:13px;color:#000;float:left;width:176px}.img_stat_av_h{float:left;width:70px}
.text_prix_n{
	color:#262626;
	text-align:center;
	float:left;
	font-weight: 700;
	font-size: 24px;
	line-height: 37px;
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
}
#sup{
	float:left;
	font-style: normal;
	font-weight: 500;
	font-size: 13px;
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
	margin-top: 4%;

}
}
@media(min-width:1200px)
{
 .media:first-child{ object-fit: cover;height:450px;margin-top:0}
.product .media .thumbnails li img{float:left;margin:0;padding:0;width:94px;height:57px;border:none;cursor:pointer;}
.product .media .arrowLeftBg,.product .media .arrowRightBg{cursor:pointer;position:absolute;z-index:1;margin:18px;padding:0;top:45%;width:50px;height:50px;background:#fff;border-radius: 100px;/*opacity:.3;-moz-opacity:.3;-ms-filter:"alpha(opacity=30)";filter:alpha(opacity=30);*/}
.product .media .arrowLeftBg{left:2.5%;}
.product .media .arrowRightBg{
	right:-1.3%;
}
.product .media .arrowLeft,.product .media .arrowRight{
	position:absolute;
	z-index:2;
	margin:18px;
	padding:0;
	top:45%;
	width:62px;
	height:62px;
	color:#fff;
	font-size:60px;
	line-height:80px;
	text-align:center;
	cursor:pointer;
}
.product .media .arrowLeft{
	left:3%;
	background-image: url(https://tn.tunisiebooking.com/flech-left.svg);
	background-size: 42px;
	/*left: 89%;*/
	background-repeat: no-repeat;
	margin-top: 7%;
}
.product .media .arrowRight{
	right:0;
	background-image: url(https://tn.tunisiebooking.com/flech-right.svg);
  background-size: 42px;
  left: 90%;
  background-repeat: no-repeat;
  margin-top: 7%;
}
.bannierereveiall{float:left; font-size:20px; color:#ffffff; padding:4px 0 3px 45px; background-image:url('https://tn.tunisiebooking.com/theme/images/img_even_detail.jpg'); width:584px; height:26px;}
.pass_ticket{float:left; width:550px}
#menuresp{display:none;}
#bodyresponsive { clear:both; margin: 8px auto 0px auto;width: 1065px; }
.formule_slectione{border:0px 1px 1px 1px solid #e6e6e6;font-size:15px; background-color:#F5F5F5;}
#drapeautunisie
{
background-image:url(https://tn.tunisiebooking.com/theme/images/drapeau.gif); background-repeat:no-repeat; height:23px;background-position:0px 0px; width:34px; margin:-20px 0px 0px 10px;margin-left: 960px;
}
#drapeaufrance
{
float: left; background-image:url(https://tn.tunisiebooking.com/theme/images/drapeau.gif); background-position:-34px 0px; background-repeat:no-repeat; height:23px; width:34px; margin: -20px 40px 0px 5px;cursor:pointer;margin-left: 1000px;
}
#dernierereservation{ display:none;}
.margin_dehuit{margin:0px 12px 0px 12px}
#flechecs {
display:none;

}
#ecranportbale{ display:none}
#dispoinfostock {
clear:both; font-size:14px; font-weight:bold;
}
#tailleprix{clear: both; padding:0px 0px 0px 55px;color: #262626;font-family: Arial;font-size:38px;}
#etolieess { display: none; }
#ecranpetit{ display:none;}
#pax_adulte{ float:left;width:10.5%;margin:0px 8px 0px 0px;}
#pax_enfant{ float:left;width:10.5%;margin:0px 8px 0px 0px;}
#Adultes{ float:left;width:10.5%;margin:20px 8px 0px 0px;}
#Enfants{ float:left;width:10.5%;margin:20px 8px 0px 0px;}
#countrouge{ clear:both;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif; height:25px;line-height: 1.5em; font-size:18px; font-weight:bold;color:#000; background-color:#ffcc01;padding:4px 10px;width:450px;border-radius: 4px 4px 0px 0px;}
#Arriv{ float:left;height:25px;margin:0px 8px 0px 0px;}
#Dur{ float:left;height:25px;  margin:0px 8px 0px 0px}
#chambr{ float:left;height:25px; margin:0px 28px 0px 0px}
#Adult{ float:left;height:25px; margin:0px 18px 0px 0px}
#Enfant{ float:left;height:25px; margin:0px 18px 0px 0px}
.navbar-fixed-top{top:100px;border-width:0 0 1px}
#motersza{ min-width: 400px; max-width: 1090px; width: 100%; margin: 0px auto; }
.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030}
#footeres { margin-left:100px;}
#hotelsspartes
{
float:right;font-size:36px; color:#262626; margin-top:-10px;
}
#similairesss{float:left; background-color:#ffffff; padding:10px; border:1px solid #cccccc; width:30%; margin:10px 6px 0px 6px;}
.titrdest_hotel_conselte h2{
	margin:0px;
	padding:0px;
	margin-bottom:10px;
	font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	font-style: normal;
	font-weight: 600;
	font-size: 24px;
	line-height: 26px;
	color:#262626;
	margin-left:1.5%;
}
#produit_hoteeels{cursor:pointer; float:left;margin-top:10px; background-repeat:no-repeat;background-size: 250% auto; height:179px; width:164px; }
#aime{ float: left;
width: 100%;
height: 40px;
text-align: right;
margin-top: -32px; }
#offrespecial { margin-left:60px;}
#gallerys { background:#FFFFFF; float:left; width:750px;margin-bottom: 0%; }
.titre_avantage{
	float: left;
	font-size: 18px;
	font-weight: 500;
	width: 32%;
	line-height: 25px;
	font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	color:#262626;
}
#goToBook{ display:none}
.hidden-lg,tr.hidden-lg,th.hidden-lg,td.hidden-lg{display:none!important}.visible-print,tr.visible-print,th.visible-print,td.visible-print{display:none!important}
.titre_aventage{ border-bottom: 1px solid #BBBBBB;
    clear: both;
    color: #262626;
    font-family: Arial;
    font-size: 22px;
    line-height: 1.8em;
    margin: 0 10px 20px 0;
    padding-top: 10px;}
	#jaime{ position: absolute; margin-left:550px; margin-top:20px;}
.style_menu1f {
    background: none repeat scroll 0 0 #FFFFFF;
    color: #262626;
    float: left;
    font-size: 17px;
    font-weight: bold;
    /*height: 17px;*/
    margin-right: 3px;
    padding: 10px;
    text-align: center;
	 border-radius: 4px 4px 0px 0px;
	 border-left: 1px solid #D5D6D8;
	border-top: 1px solid #D5D6D8;
	border-right: 1px solid #D5D6D8;
	z-index: 100;
	position: relative;

}
.capitulatif {clear:both;margin:-17px 0px 10px 28px;}
.style_menu2f {
	background-color: #E7E7E7;
	border-top:1px solid #DDDDDD;
	border:left:1px solid #DDDDDD;
	border-right: 1px solid #DDDDDD;
	border-radius: 4px 4px 0px 0px;
	color: #262626;
	cursor: pointer;
	float: left;
	font-size: 17px;
	margin-right: 3px;
	padding: 10px;
	text-align: center;
	z-index:10;
}
#photos { display:none;}
.shadow-container {-moz-box-shadow:0 0 7px rgba(0, 0, 0, 0.55);box-shadow:0 0 7px rgba(0, 0, 0, 0.55);}
.bloc_anglet{
	/*margin-bottom: -2%;*/
	clear:both;
	padding:2px;
	padding:8px 8px 8px 15px;
	left: -10px;
	top: -1px;
	 /*border-top:1px solid #D5D6D8;*/
	 position: relative;
	 z-index:0;
	 background-color: #ffffff;}
	 .photos_div{
	 	/*border-top: 1px solid #D5D6D8;*/
	 	padding: 25px 0px 8px 15px;
	 	position: relative;
	 	left: -16px;
	 	top: -8px;
	 }
#divas {
clear:both; padding:0px 10px 0px 10px; margin-top:-5px}
#iconephoto {
clear:both; height:35px;margin-left: 6px; }
.bloc_m_anglet{border:0px solid #262626; padding-top:4px; float:left;}
.ligne_detaif
{
     clear:both;
	padding-left:0px;
	color:#010101;
	padding-top:4px;
	font-size:12px;
	font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
  padding-bottom: 2%;
}
.ligne_detail_recap{
	background-color: #262626;
	position: relative;
	margin-top: 2.5%;
	margin-left: -3%;
	display: flex;
	width: 717px;
	height: 55px;
	padding-top: 3px !important;
	padding-bottom: 3px !important;
	padding-left: 0px !important;
	padding-right: 1px !important;
	padding: 2px;
	justify-content: center;
	align-items: center;
	flex-shrink: 0;
	border-radius: 6px;
	border: 0.5px solid #262626;
	margin-bottom: -2%;
}
#resultat{clear:both; margin:0px}
.plan_moteur_modif{background-color: #ffffff;margin:8px;top:18px; padding:8px}
#light6{display:none;}
.bloc_m_anglet_formule{border:0px solid #262626; padding-top:4px; float:left; width:100%;margin-top:-1%;}
#sprite_detail{
	margin-left:5%;
	float: left;
	position: relative;
	width: max-content;
	/*padding: 2px 0px 0px 14px;*/
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
	font-size: 18px;
	font-weight: 700;
	line-height: 20px;
	/* background-image: url(https://tn.tunisiebooking.com/theme/images/sprite_detaill_hot1.png); */
	background-repeat: no-repeat;
	background-position: -490px 0px;
	color: #262626;
}
#chambre_div{
	white-space: nowrap;
	float: left;
	position: relative;
	left: 3%;
	/*top: -53%;
    left: 46%;
    position: relative;*/
    font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 20px;
    color: #6B6B6B;
		width: max-content;
		/*margin-top: -12%;
		margin-left: 58%;*/
}
.bloc_anglet_formule{
	clear: both;
	padding: 2px;
	/* padding: 2px 8px 0px 15px; */
	/* border-top: 0px solid #D5D6D8; */
	position: relative;
	z-index: 0;
	background-color: #ffffff;
	margin-top: -10px;
	box-sizing: border-box;
	position: relative;
	width: 1033px;
	height: auto;
	left: 14px;
	top: 4px;
	background: #FFFFFF;
	border: 1.2px solid #262626;
	border-radius: 6px;
}
#arrangement{
	background: none repeat scroll 0 0 #FFFFFF;
	border:1px solid #cdcdcd;
	border-radius: 0px;
	color: #262626;
	font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
	display: block;
	padding: 2px 4px;
	font-size:14px;
	font-weight: 400;
	line-height: 16px;
}
#ecrangallery_photo{ display:none; }
.zone_info_resa{border-right: 0px solid #dedede; padding:4px 4px 5px 4px; float:left;width:400px;}
#disponible{
	font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
}
.styled-select {
    background: url(https://tn.tunisiebooking.com/theme/images/ic_22.png) no-repeat scroll right center #f5f5f5;   border: 1px solid #CCC;   margin: 0 0 5px;   padding: 3px;     overflow: hidden;   width:80%; height:27px;}

.titre_hotel_similaire{ float:left;text-decoration:underline;cursor:pointer;text-align:center;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;font-size:15px;height:35px;font-weight:700;color:#000}
.mois_sej{width:500px;margin-top:2px;text-align:right;color:#878787;font-size:12px;padding-bottom:4px}.txt_avis_tb{width:510px;font-size:12px;color:#000;padding-bottom:5px}.titre_av{width:500px;padding-left:10px;font-size:16px;font-weight:700}.ligne_img_clien{width:180px}.ligne_part_av{width:180px;margin-top:8px}.img_client_av{ background:url(https://tn.tunisiebooking.com/theme/images/icon_avis.jpg); background-repeat:no-repeat;width:41px;float:left;height:43px}.img_parten_av{ background:url(https://tn.tunisiebooking.com/theme/images/icon_avis.jpg); background-position:-42px 0px; background-repeat:no-repeat;width:41px;float:left;height:37px}.lib_client_av{width:120px;margin-left:10px;padding-top:8px;float:left;font-size:16px;font-weight:700}.lib_parte_av{/*width:120px;*/margin-left:10px;padding-top:8px;float:left;font-size:12px;color:#656565}.acont_av_top{/*width:520px;*/padding:20px 10px 0 17px;/*height:34px;*/background-image:url(https://tn.tunisiebooking.com/images/bg_av_top.png);background-position:center}.acont_av_centre{/*width:510px;*/padding:0 10px 5px 27px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_centre.png);background-position:center;background-repeat:repeat-y}.acont_av_bas{/*width:547px;*/height:8px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_bas.png);background-position:center}.contenu_av_tb{width:547px;float:left}.img_c_av_tb{width:180px;padding-top:20px;padding-left:3px;float:left}.ligne_av_tnb{width:730px;margin-top:20px}.txt_lib_note{width:200px;text-align:right;font-size:30px;font-weight:700}.nb_pers_nite{width:200px;text-align:right;font-size:12px;margin-top:5px}.ligne_txt_note_av{width:343px;margin-top:5px}.txt_note_av{width:200px;float:left;color:#012243}.note_note_av{width:75px;float:left;text-align:center;font-size:30px;font-weight:700;padding-top:10px;height:50px;margin-left:10px;background-color:#F1F1F1;color:#012243}.tit_note_av_h{width:344px;padding:10px;font-size:18px;color:#000;text-align:center}.contenu_avis_tnb{width:730px;font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif}.titr_hot_av{width:700px;font-size:18px;font-weight:700;color:#000;}.cont_top_av_h{width:728px;border:1px solid #DDD;border-bottom:6px solid #DDD}.stat_av_h{width:343px;border-right:1px solid #DDD;padding:10px;float:left}.note_av_h{float:left;width:344px;padding:10px}.ligne_stat_av{width:343px;margin-top:7px}.lib_stat_av_h{font-size:13px;color:#000;float:left;width:176px}.img_stat_av_h{float:left;width:70px}
.disponible{width:175px; text-align:center;}
.text_prix_n{
	color:#262626;
	text-align:center;
	float:left;
	font-weight: 700;
	font-size: 24px;
	line-height: 37px;
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
}
#sup{float:left;
	font-style: normal;
	font-weight: 500;
	font-size: 13px;
	font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
	margin-top: 4%;

}
}
@media print{.visible-print{display:block!important}
tr.visible-print{display:table-row!important}
th.visible-print,td.visible-print{display:table-cell!important}
.hidden-print,tr.hidden-print,th.hidden-print,td.hidden-print{display:none!important}
}
@media(max-width:767px){
  .media:first-child{margin-top:0; height:250px;}
  .sidebar{ display:none;}
  .product .media .thumbnails li img{float:left;margin:0;padding:0;width:94px;height:57px;border:none;cursor:pointer; display:none;}
  {position:absolute;z-index:1;margin:18px;padding:0;top:5%;width:80px;/*height:80px;*/background:#4A4F63;opacity:.3;-moz-opacity:.3;-ms-filter:"alpha(opacity=30)";filter:alpha(opacity=30);}
  .product .media .arrowLeftBg{left:2.5%;}
  .product .media .arrowRightBg{
  	right:-1.3%;
  }
  .product .media .arrowLeft,.product .media .arrowRight{position:absolute;z-index:2;margin:18px;padding:0;top:5%;width:80px;/*height:80px;*/color:#fff;font-size:60px;line-height:80px;text-align:center;cursor:pointer;}
  .product .media .arrowLeft{
  	left:3%;
  	background-image: url(https://tn.tunisiebooking.com/flech-left.svg);
  	background-size: 42px;
  	/*left: 89%;*/
  	background-repeat: no-repeat;
  	margin-top: 7%;
  }
  .product .media .arrowRight{
  	right:0;
  	background-image: url(https://tn.tunisiebooking.com/flech-right.svg);
    background-size: 42px;
    left: 90%;
    background-repeat: no-repeat;
    margin-top:7%;
  }
  .bannierereveiall{float:left; font-size:20px; color:#ffffff; padding:4px 0 3px 45px; background-image:url('https://tn.tunisiebooking.com/theme/images/img_even_detail.jpg'); }
  .hidden-lg.hidden-xs,tr.hidden-lg.hidden-xs,th.hidden-lg.hidden-xs,td.hidden-lg.hidden-xs{display:none!important} #my-content { display: none; } #moterdroit { display: none; } #countdown { position: relative; margin-top:-20px;width: 100%; }  #motree { display: none; }
  #image{border: 0;
  max-width: 90%;
  height: auto;
  margin-left: 15px;
  /*margin-top:-22px;*/}
  .ecranordinateur{display:none}
  .formule_slectione{font-size:10px; background-color:#F5F5F5; height:60px;}

  .titre_hotel_similaire{clear:both;text-decoration:underline;cursor:pointer;font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-size:15px;height:35px;font-weight:700;color:#000}
  .mois_sej{width:200px;margin-top:2px;text-align:right;color:#878787;font-size:12px;padding-bottom:4px}.txt_avis_tb{width:210px;font-size:12px;color:#000;padding-bottom:5px}.titre_av{width:200px;padding-left:10px;font-size:16px;font-weight:700}.ligne_img_clien{width:180px}.ligne_part_av{width:180px;margin-top:8px}.img_client_av{ background:url(https://tn.tunisiebooking.com/theme/images/icon_avis.jpg); background-repeat:no-repeat;width:41px;float:left;height:43px}.img_parten_av{ background:url(https://tn.tunisiebooking.com/theme/images/icon_avis.jpg); background-position:-42px 0px; background-repeat:no-repeat;width:41px;float:left;height:37px}.lib_client_av{width:120px;margin-left:10px;padding-top:8px;float:left;font-size:16px;font-weight:700}.lib_parte_av{width:120px;margin-left:10px;padding-top:8px;float:left;font-size:12px;color:#656565}.acont_av_top{width:220px;padding:20px 10px 0 17px;height:34px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_top.png);background-position:center}.acont_av_centre{width:210px;padding:0 10px 5px 27px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_centre.png);background-position:center;background-repeat:repeat-y}.acont_av_bas{width:247px;height:8px;background-image:url(https://tn.tunisiebooking.com/images/bg_av_bas.png);background-position:center}.contenu_av_tb{width:247px;float:left}.img_c_av_tb{width:180px;padding-top:20px;padding-left:3px;float:left}.ligne_av_tnb{width:230px;margin-top:20px}.txt_lib_note{width:200px;text-align:right;font-size:30px;font-weight:700}.nb_pers_nite{width:200px;text-align:right;font-size:12px;margin-top:5px}.ligne_txt_note_av{width:243px;margin-top:5px}.txt_note_av{width:200px;float:left;color:#012243}.note_note_av{width:75px;float:left;text-align:center;font-size:30px;font-weight:700;padding-top:10px;height:50px;margin-left:10px;background-color:#F1F1F1;color:#012243}.tit_note_av_h{width:244px;padding:10px;font-size:18px;color:#000;text-align:center}.contenu_avis_tnb{width:230px;font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;}
  .titr_hot_av{width:300px;font-size:12px;font-weight:700;color:#000;padding:10px; height:50px;}
  .cont_top_av_h{width:728px;border:1px solid #DDD;border-bottom:6px solid #DDD}.stat_av_h{width:343px;border-right:1px solid #DDD;padding:10px;float:left}.note_av_h{float:left;width:244px;padding:10px}.ligne_stat_av{width:343px;margin-top:7px}.lib_stat_av_h{font-size:13px;color:#000;float:left;width:176px}.img_stat_av_h{float:left;width:70px}

  #arrangement{
  	background: none repeat scroll 0 0 #FFFFFF;
  	border:1px solid #cdcdcd;
  	border-radius: 0px;
  	color: #262626;
  	font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
  	display: block;
  	padding: 2px 3px;
  	font-size:14px;
  	font-weight: 400;
  	line-height: 16px;
  	width:120px;
  }

  .bloc_anglet_formule{
  	clear: both;
  	padding: 2px;
  	/* padding: 2px 8px 0px 15px; */
  	/* border-top: 0px solid #D5D6D8; */
  	position: relative;
  	z-index: 0;
  	background-color: #ffffff;
  	margin-top: -10px;
  	box-sizing: border-box;
  	position: relative;
  	width: 1033px;
  	height: auto;
  	left: 14px;
  	/*top: 4px;*/
  	background: #FFFFFF;
  	border: 1.2px solid #262626;
  	border-radius: 6px;
  }
  #chambre_div{
  	white-space: nowrap;
  	float: left;
  	position: relative;
  	left: 3%;
    font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 20px;
    color: #6B6B6B;
  	width: max-content;
  	}
  #Agee1{ font-size:12px; color:#262626;}
  #Agee12{ font-size:12px; color:#262626;}
  #Agee13{ font-size:12px; color:#262626;}
  #agenf_1_1{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
  #agenf_1_2{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
  #agenf_1_3{ float: left; margin: 0px 8px 0px 211px; width: 19.5%;}
  #agenf_2_1{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
  #agenf_2_2{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
  #agenf_2_3{ float: left; margin: 0px 8px 0px 211px; width: 19.5%;}
  #agenf_3_1{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
  #agenf_3_2{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
  #agenf_3_3{ float: left; margin: 0px 8px 0px 211px; width: 19.5%;}
  #agenf_4_1{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
  #agenf_4_2{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
  #agenf_4_3{ float: left; margin: 0px 8px 0px 211px; width: 19.5%;}
  #agenf_5_1{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
  #agenf_5_2{ float: left; margin: 0px 8px 0px 2px; width: 19.5%;}
  #agenf_5_3{ float: left; margin: 0px 8px 0px 211px; width: 19.5%;}

  .styled-select {
      background: url(https://tn.tunisiebooking.com/theme/images/ic_22.png) no-repeat scroll right center #f5f5f5;   border: 1px solid #CCC;   margin: 0 0 5px;   padding: 3px;     overflow: hidden;   width:50%; height:27px;}


  .zone_info_resa{
  	border-right: 0px solid #dedede;
  	padding:4px 4px 5px 2px;
  	float:left;
  	font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
  	font-style: normal;
  	font-weight: 400;
  	font-size: 15px;
  	line-height: 20px;
  }
  #disponible{
  	font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
  	line-height: 20px;
  }
}
.fermer_ch1_active{
  display: block !important;
}
.label_ages_active{
  display: block !important;
}
.validation-error_active{
  display:block !important;
}
.tous_les_chambres_active1{
  overflow-y: auto !important;
  overflow-x: hidden !important;
  max-height: 400px !important;
  width: 38.5% !important;
}
.tous_les_chambres_active{
  overflow-y: auto !important;
  overflow-x: hidden !important;
  max-height: 500px !important;
  width:38.5% !important;
}
.v194_28_active{
  display:block !important;
}
.ajout_ch_activ{
  display:block !important;
}
.bt_modifier{
  display: none;
  line-height: 19px;
  float: right;
  font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
  font-weight: 600;
  font-size:16px;
  color: #262626;
  margin: 0 0px;
  padding:18px 18px;
  width:147px;
  height: 55px;
  text-align:center;
  cursor:pointer;
  border-radius: 4px 4px 4px 4px;
  background: #F3F5F7;
  margin-top: -3.1%;
  position: absolute;
  margin-left: 71.5%;
  background-repeat: no-repeat;
}
.bt_modifier_active{
  display:block !important;
}
.bt_modifier font{
  font-size: 31px !important;
  position: absolute;
  margin-top: -6.1%;
  margin-left: 0%;
}
.bt_rechercher{
  display:none;
  line-height: 19px;
  float: right;
  font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
  font-weight: 600;
  font-size:16px;
  color: #FF0097 ;
  margin: 0 0px;
  padding:18px 18px;
  width:175px;
  height: 55px;
  text-align:center;
  cursor:pointer;
  border-radius: 4px 4px 4px 4px;
  border: 2px solid #FF0097;
  background-color: #FFF4F9;
  margin-top: -3.1%;
  position: absolute;
  margin-left: 71.5%;
  background-repeat: no-repeat;
  filter: drop-shadow(0px 4px 3px rgba(38, 38, 38, 0.13));
  padding: 17px;
}

.bt_rechercher_active{
  display:block !important;
}
article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{
  display:block;
}
audio,canvas,video{
  display:inline-block;
}
audio:not([controls]){
  display:none;height:0;
}
[hidden],template{
  display:none;
}
html{
  font-family:sans-serif;
  -webkit-text-size-adjust:100%;
  -ms-text-size-adjust:100%;
}
a{
  background:transparent
}
a:focus{
  outline:thin dotted
}
a:active,a:hover{
  outline:0
}
h1{
  margin:.67em 0;
  font-size:2em
}
abbr[title]{
  border-bottom:1px dotted
}
b,strong{
  font-weight:bold
}
dfn{
  font-style:italic
}
hr{
  height:0;
  -moz-box-sizing:content-box;
  box-sizing:content-box
}
mark{
  color:#000;
  background:#ff0
}
code,kbd,pre,samp{
  font-family:monospace,serif;
  font-size:1em
}
pre{
  white-space:pre-wrap
  }
  q{
    quotes:"\201C" "\201D" "\2018" "\2019"
  }
small{
  font-size:80%
}
sub,sup{
  position:relative;
  font-size:75%;
  line-height:0;
  vertical-align:baseline
}
sup{
  top:-0.5em
}
sub{
  bottom:-0.25em
}
img{
  border: 0;
  max-width: 100%;
  height: auto;
}
#footeres {
  margin-left:0px;
}
#drapeau {
  width:100px;
}
svg:not(:root){
  overflow:hidden
}
figure{
  margin:0
}
fieldset{
  padding:.35em .625em .75em;
  margin:0 2px;
  border:1px solid #c0c0c0
}
legend{
  padding:0;
  border:0
}
button,input,select,textarea{
  margin:0;
  font-family:inherit;
  font-size:100%
}
button,input{
  line-height:normal
}
button,select{
  text-transform:none
}
button,html input[type="button"],input[type="reset"],input[type="submit"]{
  cursor:pointer;
  -webkit-appearance:button;
   float:right;
 }
button[disabled],html input[disabled]{
  cursor:default
}
input[type="checkbox"],input[type="radio"]{
  padding:0;
  box-sizing:border-box
}
input[type="search"]{
  -webkit-box-sizing:content-box;
  -moz-box-sizing:content-box;
  box-sizing:content-box;
  -webkit-appearance:textfield
}
input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{
  -webkit-appearance:none
}
button::-moz-focus-inner,input::-moz-focus-inner{
  padding:0;
  border:0
}
textarea{
  overflow:auto;
  vertical-align:top
}
table{
  border-collapse:collapse;
  border-spacing:0
}
.b-button.b-searchbox-button_legacy, .b-button.b-searchbox-button_legacy .b-button__text {
  color: #fff!important;
  font-size: 23px!important;
  line-height: 1.5;
  font-weight: bold;
  -webkit-font-smoothing: antialiased;
}
@media print{
  *{
    color:#000!important;
    text-shadow:none!important;
    background:transparent!important;
    box-shadow:none!important
  }
  a,a:visited{
    text-decoration:underline
  }
  a[href]:after{
    content:" (" attr(href) ")"
  }
  abbr[title]:after{
    content:" (" attr(title) ")"
  }
  a[href^="javascript:"]:after,a[href^="#"]:after{
    content:""
  }
  pre,blockquote{
    border:1px solid #999;page-break-inside:avoid
  }
  thead{
    display:table-header-group
  }
  tr,img{
    page-break-inside:avoid
  }
  img{
    max-width:100%!important
  }
  @page{
    margin:2cm .5cm
  }
  p,h2,h3{
    orphans:3;widows:3
  }
  h2,h3{
    page-break-after:avoid
  }
  select{
    background:#fff!important
  }
  .table td,.table th{
    background-color:#fff!important
  }
  .btn>.caret,.dropup>.btn>.caret{
    border-top-color:#000!important
  }
  .label{
    border:1px solid #000
  }
  .table{
    border-collapse:collapse!important
  }
  .table-bordered th,.table-bordered td{
    border:1px solid #ddd!important
  }
}
html{
  font-size:62.5%;
  -webkit-tap-highlight-color:rgba(0,0,0,0)
}
body{
  font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
  font-size:14px;
  line-height:1.428571429;
  color:#333;
  background-color:#fff
}
input,button,select,textarea{
  font-family:inherit;
  font-size:inherit;
  line-height:inherit
}
a{
  text-decoration:none
}
a:hover,a:focus{
  color:#fff;
  text-decoration:none
}
a:focus{
  outline:thin dotted #333;
  outline:5px auto -webkit-focus-ring-color;
  outline-offset:-2px
}
.img-responsive{
  display:block;
  height:auto;
  max-width:100%
}
.img-rounded{
  border-radius:6px
}
.img-thumbnail{
  display:inline-block;
  height:auto;
  max-width:100%;
  padding:4px;
  line-height:1.428571429;
  background-color:#fff;
  border:1px solid #ddd;
  border-radius:4px;
  -webkit-transition:all .2s ease-in-out;
  transition:all .2s ease-in-out
}
.img-circle{
  border-radius:50%
}
hr{
  margin-top:20px;
  margin-bottom:20px;
  border:0;
  border-top:1px solid #eee
}
.sr-only{
  position:absolute;
  width:1px;
  height:1px;
  padding:0;
  margin:-1px;
  overflow:hidden;
  clip:rect(0,0,0,0);
  border:0
}
p{
  margin:0 0 10px
}
.lead{
  margin-bottom:20px;
  font-size:16px;
  font-weight:200;
  line-height:1.4
}
@media(min-width:768px){
  .lead{
    font-size:21px
  }
}
small,.small{
  font-size:85%
}
cite{
  font-style:normal
}
.text-muted{
  color:#999
}
.text-primary{
  color:#428bca
}
.text-primary:hover{
  color:#3071a9
}
.text-warning{
  color:#c09853
}
.text-warning:hover{
  color:#a47e3c
}
.text-danger{
  color:#b94a48
}
.text-danger:hover{
  color:#953b39
}
.text-success{
  color:#468847
}
.text-success:hover{
  color:#356635
}
.text-info{
  color:#3a87ad
}
.text-info:hover{
  color:#2d6987
}
.text-left{
  text-align:left
}
.text-right{
  text-align:right
}
.text-center{
  text-align:center
}
h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-weight:500;line-height:1.1;color:inherit}
h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small{font-weight:normal;line-height:1;color:#999}
h1,h2,h3{/*margin-top:20px;margin-bottom:10px*/}
h1 small,h2 small,h3 small,h1 .small,h2 .small,h3 .small{font-size:65%}h4,h5,h6{margin-top:10px;margin-bottom:10px}
h4 small,h5 small,h6 small,h4 .small,h5 .small,h6 .small{font-size:75%}
h1,.h1{font-size:36px}
h2,.h2{font-size:18px}
h3,.h3{font-size: 13.1px;
font-weight: bold;}
h4,.h4{font-size:18px}
h5,.h5{font-size:14px}
h6,.h6{font-size:12px}
.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}
ul,ol{margin-top:0;margin-bottom:10px}
ul ul,ol ul,ul ol,ol ol{margin-bottom:0}
.list-unstyled{padding-left:0;list-style:none}
.list-inline{padding-left:0;list-style:none}
.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}
.list-inline>li:first-child{padding-left:0}
dl{margin-bottom:20px}
dt,dd{line-height:1.428571429}
dt{font-weight:bold}
dd{margin-left:0}
@media(min-width:768px)
{.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}
.dl-horizontal dd{margin-left:180px}
.dl-horizontal dd:before,.dl-horizontal dd:after{display:table;content:" "}
.dl-horizontal dd:after{clear:both}
.dl-horizontal dd:before,.dl-horizontal dd:after{display:table;content:" "}
.dl-horizontal dd:after{clear:both}}
abbr[title],abbr[data-original-title]
{cursor:help;border-bottom:1px dotted #999}
abbr.initialism{font-size:90%;text-transform:uppercase}
blockquote{padding:10px 20px;margin:0 0 20px;border-left:5px solid #eee}
blockquote p{font-size:17.5px;font-weight:300;line-height:1.25}
blockquote p:last-child{margin-bottom:0}
blockquote small{display:block;line-height:1.428571429;color:#999}
blockquote small:before{content:'\2014 \00A0'}
blockquote.pull-right{padding-right:15px;padding-left:0;border-right:5px solid #eee;border-left:0}
blockquote.pull-right p,blockquote.pull-right small,blockquote.pull-right .small{text-align:right}
blockquote.pull-right small:before,blockquote.pull-right .small:before{content:''}blockquote.pull-right small:after,blockquote.pull-right .small:after{content:'\00A0 \2014'}
blockquote:before,blockquote:after{content:""}
address{margin-bottom:20px;font-style:normal;line-height:1.428571429}
code,kbd,pre,samp{font-family:Monaco,Menlo,Consolas,"Courier New",monospace}
code{padding:2px 4px;font-size:90%;color:#c7254e;white-space:nowrap;background-color:#f9f2f4;border-radius:4px}
pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.428571429;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}
pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}
.pre-scrollable{max-height:340px;overflow-y:scroll}
.container{padding-right:1px;padding-left:1px;margin-right:auto;margin-left:auto; /*padding-top:15px;*/}
.container:before,.container:after{display:table;content:" "}
.container:after{clear:both}
.container:before,.container:after{display:table;content:" "}
.container:after{clear:both}
.row{margin-right:-15px;margin-left:-15px; margin-top:85px;}
.row:after{clear:both}

.row:after{clear:both}
.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-right:10px;padding-left:10px; }
.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11{float:left}
.col-xs-12{width:100%}
.col-xs-11{width:91.66666666666666%}
.col-xs-10{width:83.33333333333334%}
.col-xs-9{width:75%}
.col-xs-8{width:66.66666666666666%}
.col-xs-7{width:58.333333333333336%}
.col-xs-6{width:50%}
.col-xs-5{width:41.66666666666667%}
.col-xs-4{width:33.33333333333333%}
.col-xs-3{width:25%}
.col-xs-2{width:16.666666666666664%}
.col-xs-1{width:8.333333333333332%}
.col-xs-pull-12{right:100%}
.col-xs-pull-11{right:91.66666666666666%}
.col-xs-pull-10{right:83.33333333333334%}
.col-xs-pull-9{right:75%}
.col-xs-pull-8{right:66.66666666666666%}
.col-xs-pull-7{right:58.333333333333336%}
.col-xs-pull-6{right:50%}
.col-xs-pull-5{right:41.66666666666667%}
.col-xs-pull-4{right:33.33333333333333%}
.col-xs-pull-3{right:25%}
.col-xs-pull-2{right:16.666666666666664%}
.col-xs-pull-1{right:8.333333333333332%}
.col-xs-pull-0{right:0}
.col-xs-push-12{left:100%}
.col-xs-push-11{left:91.66666666666666%}
.col-xs-push-10{left:83.33333333333334%}
.col-xs-push-9{left:75%}
.col-xs-push-8{left:66.66666666666666%}
.col-xs-push-7{left:58.333333333333336%}
.col-xs-push-6{left:50%}
.col-xs-push-5{left:41.66666666666667%}
.col-xs-push-4{left:33.33333333333333%}
.col-xs-push-3{left:25%}
.col-xs-push-2{left:16.666666666666664%}
.col-xs-push-1{left:8.333333333333332%}
.col-xs-push-0{left:0}
.col-xs-offset-12{margin-left:100%}
.col-xs-offset-11{margin-left:91.66666666666666%}
.col-xs-offset-10{margin-left:83.33333333333334%}
.col-xs-offset-9{margin-left:75%}
.col-xs-offset-8{margin-left:66.66666666666666%}
.col-xs-offset-7{margin-left:58.333333333333336%}
.col-xs-offset-6{margin-left:50%}
.col-xs-offset-5{margin-left:41.66666666666667%}
.col-xs-offset-4{margin-left:33.33333333333333%}
.col-xs-offset-3{margin-left:25%}
.col-xs-offset-2{margin-left:16.666666666666664%}
.col-xs-offset-1{margin-left:8.333333333333332%}
.col-xs-offset-0{margin-left:0}
@media(min-width:768px){
.container{width:750px}
.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11{float:left}
.col-sm-12{width:100%}
.col-sm-11{width:91.66666666666666%}
.col-sm-10{width:83.33333333333334%}
.col-sm-9{width:65%}
.col-sm-8{width:66.66666666666666%}
.col-sm-7{width:58.333333333333336%}
.col-sm-6{/*width:30%;*/}
.col-sm-5{width:41.66666666666667%}
.col-sm-4{width:33.33333333333333%}
.col-sm-3{width:70%;}
.col-sm-2{width:16.666666666666664%}
.col-sm-1{width:8.333333333333332%}
.col-sm-pull-12{right:100%}
.col-sm-pull-11{right:91.66666666666666%}
.col-sm-pull-10{right:83.33333333333334%}
.col-sm-pull-9{right:75%}
.col-sm-pull-8{right:66.66666666666666%}
.col-sm-pull-7{right:58.333333333333336%}
.col-sm-pull-6{right:50%}
.col-sm-pull-5{right:41.66666666666667%}
.col-sm-pull-4{right:33.33333333333333%}
.col-sm-pull-3{right:25%}
.col-sm-pull-2{right:16.666666666666664%}
.col-sm-pull-1{right:8.333333333333332%}
.col-sm-pull-0{right:0}
.col-sm-push-12{left:100%}
.col-sm-push-11{left:91.66666666666666%}
.col-sm-push-10{left:83.33333333333334%}
.col-sm-push-9{left:75%}
.col-sm-push-8{left:66.66666666666666%}
.col-sm-push-7{left:58.333333333333336%}
.col-sm-push-6{left:50%}
.col-sm-push-5{left:41.66666666666667%}
.col-sm-push-4{left:33.33333333333333%}
.col-sm-push-3{left:25%}
.col-sm-push-2{left:16.666666666666664%}
.col-sm-push-1{left:8.333333333333332%}
.col-sm-push-0{left:0}
.col-sm-offset-12{margin-left:100%}
.col-sm-offset-11{margin-left:91.66666666666666%}
.col-sm-offset-10{margin-left:83.33333333333334%}
.col-sm-offset-9{margin-left:75%}
.col-sm-offset-8{margin-left:66.66666666666666%}
.col-sm-offset-7{margin-left:58.333333333333336%}
.col-sm-offset-6{margin-left:50%}
.col-sm-offset-5{margin-left:41.66666666666667%}
.col-sm-offset-4{margin-left:33.33333333333333%}
.col-sm-offset-3{margin-left:25%}
.col-sm-offset-2{margin-left:16.666666666666664%}
.col-sm-offset-1{margin-left:8.333333333333332%}
.col-sm-offset-0{margin-left:0}}
@media(min-width:992px){.container{width:970px}
.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11{float:left}
.col-md-12{width:100%}
.col-md-11{width:91.66666666666666%}
.col-md-10{width:83.33333333333334%}
.col-md-9{width:75%}
.col-md-8{width:66.66666666666666%}
.col-md-7{width:58.333333333333336%}
.col-md-6{width:50%}
.col-md-5{width:41.66666666666667%}
.col-md-4{width:33.33333333333333%}
.col-md-3{width:25%}
.col-md-2{width:16.666666666666664%}
.col-md-1{width:8.333333333333332%}
.col-md-pull-12{right:100%}
.col-md-pull-11{right:91.66666666666666%}
.col-md-pull-10{right:83.33333333333334%}
.col-md-pull-9{right:75%}
.col-md-pull-8{right:66.66666666666666%}
.col-md-pull-7{right:58.333333333333336%}
.col-md-pull-6{right:50%}
.col-md-pull-5{right:41.66666666666667%}
.col-md-pull-4{right:33.33333333333333%}
.col-md-pull-3{right:25%}
.col-md-pull-2{right:16.666666666666664%}
.col-md-pull-1{right:8.333333333333332%}
.col-md-pull-0{right:0}
.col-md-push-12{left:100%}
.col-md-push-11{left:91.66666666666666%}
.col-md-push-10{left:83.33333333333334%}
.col-md-push-9{left:75%}
.col-md-push-8{left:66.66666666666666%}
.col-md-push-7{left:58.333333333333336%}
.col-md-push-6{left:50%}
.col-md-push-5{left:41.66666666666667%}
.col-md-push-4{left:33.33333333333333%}
.col-md-push-3{left:25%}
.col-md-push-2{left:16.666666666666664%}
.col-md-push-1{left:8.333333333333332%}
.col-md-push-0{left:0}
.col-md-offset-12{margin-left:100%}
.col-md-offset-11{margin-left:91.66666666666666%}
.col-md-offset-10{margin-left:83.33333333333334%}
.col-md-offset-9{margin-left:75%}
.col-md-offset-8{margin-left:66.66666666666666%}
.col-md-offset-7{margin-left:58.333333333333336%}
.col-md-offset-6{margin-left:50%}
.col-md-offset-5{margin-left:41.66666666666667%}
.col-md-offset-4{margin-left:33.33333333333333%}
.col-md-offset-3{margin-left:25%}
.col-md-offset-2{margin-left:16.666666666666664%}
.col-md-offset-1{margin-left:8.333333333333332%}
.col-md-offset-0{margin-left:0}}
@media(min-width:1200px){.container{width:1170px}
.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11{float:left}
.col-lg-12{width:100%}
.col-lg-11{width:91.66666666666666%}
.col-lg-10{width:83.33333333333334%}
.col-lg-9{width:75%}
.col-lg-8{width:66.66666666666666%}
.col-lg-7{width:58.333333333333336%}
.col-lg-6{width:50%}
.col-lg-5{width:41.66666666666667%}
.col-lg-4{width:33.33333333333333%}
.col-lg-3{width:25%}
.col-lg-2{width:16.666666666666664%}
.col-lg-1{width:8.333333333333332%}
.col-lg-pull-12{right:100%}
.col-lg-pull-11{right:91.66666666666666%}
.col-lg-pull-10{right:83.33333333333334%}
.col-lg-pull-9{right:75%}
.col-lg-pull-8{right:66.66666666666666%}
.col-lg-pull-7{right:58.333333333333336%}
.col-lg-pull-6{right:50%}
.col-lg-pull-5{right:41.66666666666667%}
.col-lg-pull-4{right:33.33333333333333%}
.col-lg-pull-3{right:25%}

.col-lg-pull-2{right:16.666666666666664%}
.col-lg-pull-1{right:8.333333333333332%}

.col-lg-pull-0{right:0}
.col-lg-push-12{left:100%}
.col-lg-push-11{left:91.66666666666666%}
.col-lg-push-10{left:83.33333333333334%}
.col-lg-push-9{left:75%}
.col-lg-push-8{left:66.66666666666666%}
.col-lg-push-7{left:58.333333333333336%}
.col-lg-push-6{left:50%}
.col-lg-push-5{left:41.66666666666667%}
.col-lg-push-4{left:33.33333333333333%}
.col-lg-push-3{left:25%}
.col-lg-push-2{left:16.666666666666664%}
.col-lg-push-1{left:8.333333333333332%}
.col-lg-push-0{left:0}
.col-lg-offset-12{margin-left:100%}
.col-lg-offset-11{margin-left:91.66666666666666%}
.col-lg-offset-10{margin-left:83.33333333333334%}
.col-lg-offset-9{margin-left:75%}
.col-lg-offset-8{margin-left:66.66666666666666%}
.col-lg-offset-7{margin-left:58.333333333333336%}
.col-lg-offset-6{margin-left:50%}
.col-lg-offset-5{margin-left:41.66666666666667%}
.col-lg-offset-4{margin-left:33.33333333333333%}
.col-lg-offset-3{margin-left:25%}
.col-lg-offset-2{margin-left:16.666666666666664%}
.col-lg-offset-1{margin-left:8.333333333333332%}
.col-lg-offset-0{margin-left:0}}
table{max-width:100%;background-color:transparent}
th{text-align:left}
.table{width:100%;margin-bottom:20px}
.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td{padding:8px;line-height:1.428571429;vertical-align:top;/*border-top:1px solid #ddd*/}
.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}
.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>th,.table>caption+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>td,.table>thead:first-child>tr:first-child>td{border-top:0}
.table>tbody+tbody{border-top:2px solid #ddd}
.table .table{background-color:#fff}
.table-condensed>thead>tr>th,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>tbody>tr>td,.table-condensed>tfoot>tr>td{padding:5px}
.table-bordered{border:1px solid #ddd}
.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border:1px solid #ddd}
.table-bordered>thead>tr>th,.table-bordered>thead>tr>td{border-bottom-width:2px}
.table-striped>tbody>tr:nth-child(odd)>td,.table-striped>tbody>tr:nth-child(odd)>th{background-color:#f9f9f9}
.table-hover>tbody>tr:hover>td,.table-hover>tbody>tr:hover>th{background-color:#f5f5f5}
table col[class*="col-"]{display:table-column;float:none}
table td[class*="col-"],table th[class*="col-"]{display:table-cell;float:none}
.table>thead>tr>td.active,.table>tbody>tr>td.active,.table>tfoot>tr>td.active,.table>thead>tr>th.active,.table>tbody>tr>th.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>tbody>tr.active>td,.table>tfoot>tr.active>td,.table>thead>tr.active>th,.table>tbody>tr.active>th,.table>tfoot>tr.active>th{background-color:#f5f5f5}
.table>thead>tr>td.success,.table>tbody>tr>td.success,.table>tfoot>tr>td.success,.table>thead>tr>th.success,.table>tbody>tr>th.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>tbody>tr.success>td,.table>tfoot>tr.success>td,.table>thead>tr.success>th,.table>tbody>tr.success>th,.table>tfoot>tr.success>th{background-color:#dff0d8}.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover,.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th{background-color:#d0e9c6}.table>thead>tr>td.danger,.table>tbody>tr>td.danger,.table>tfoot>tr>td.danger,.table>thead>tr>th.danger,.table>tbody>tr>th.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>tbody>tr.danger>td,.table>tfoot>tr.danger>td,.table>thead>tr.danger>th,.table>tbody>tr.danger>th,.table>tfoot>tr.danger>th{background-color:#f2dede}.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover,.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th{background-color:#ebcccc}.table>thead>tr>td.warning,.table>tbody>tr>td.warning,.table>tfoot>tr>td.warning,.table>thead>tr>th.warning,.table>tbody>tr>th.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>tbody>tr.warning>td,.table>tfoot>tr.warning>td,.table>thead>tr.warning>th,.table>tbody>tr.warning>th,.table>tfoot>tr.warning>th{background-color:#fcf8e3}.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover,.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th{background-color:#faf2cc}@media(max-width:767px){
.table-responsive{width:100%;margin-bottom:15px;overflow-x:scroll;overflow-y:hidden;border:1px solid #ddd;-ms-overflow-style:-ms-autohiding-scrollbar;-webkit-overflow-scrolling:touch}
.table-responsive>.table{margin-bottom:0}
.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}
.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}
fieldset{padding:0;margin:0;border:0}
legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}
label{display:inline-block;margin-bottom:5px;font-weight:bold}
input[type="search"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
input[type="radio"],input[type="checkbox"]{margin:4px 0 0;margin-top:1px \9;line-height:normal}
input[type="file"]{display:block}
select[multiple],select[size]{height:auto}
select optgroup{font-family:inherit;font-size:inherit;font-style:inherit}
input[type="file"]:focus,input[type="radio"]:focus,input[type="checkbox"]:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}
input[type="number"]::-webkit-outer-spin-button,input[type="number"]::-webkit-inner-spin-button{height:auto}
output{display:block;padding-top:7px;font-size:14px;line-height:1.428571429;color:#555;vertical-align:middle}
.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.428571429;color:#555;vertical-align:middle;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}
.form-control:focus{
border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6)}
.form-control:-moz-placeholder{color:#999}
.form-control::-moz-placeholder{color:#999}
.form-control:-ms-input-placeholder{color:#999}
.form-control::-webkit-input-placeholder{color:#999}
.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{cursor:not-allowed;background-color:#eee}
textarea.form-control{height:auto}
.form-group{margin-bottom:15px}
.radio,.checkbox{display:block;min-height:20px;padding-left:20px;margin-top:10px;margin-bottom:10px;vertical-align:middle}
.radio label,.checkbox label{display:inline;margin-bottom:0;font-weight:normal;cursor:pointer}
.radio input[type="radio"],.radio-inline input[type="radio"],.checkbox input[type="checkbox"],.checkbox-inline input[type="checkbox"]{float:left;margin-left:-20px}
.radio+.radio,.checkbox+.checkbox{margin-top:-5px}
.radio-inline,.checkbox-inline{display:inline-block;padding-left:20px;margin-bottom:0;font-weight:normal;vertical-align:middle;cursor:pointer}.radio-inline+.radio-inline,.checkbox-inline+.checkbox-inline{margin-top:0;margin-left:10px}input[type="radio"][disabled],input[type="checkbox"][disabled],.radio[disabled],.radio-inline[disabled],.checkbox[disabled],.checkbox-inline[disabled],fieldset[disabled] input[type="radio"],fieldset[disabled] input[type="checkbox"],fieldset[disabled] .radio,fieldset[disabled]
.radio-inline,fieldset[disabled] .checkbox,fieldset[disabled]
.checkbox-inline{cursor:not-allowed}
.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}
 select.input-sm{height:30px;line-height:30px}
textarea.input-sm{height:auto}
.input-lg{height:45px;padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}
select.input-lg{height:45px;line-height:45px}
textarea.input-lg{height:auto}
.has-warning .help-block,.has-warning .control-label,.has-warning .radio,.has-warning .checkbox,.has-warning .radio-inline,.has-warning .checkbox-inline{color:#c09853}.has-warning .form-control{border-color:#c09853;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-warning .form-control:focus{border-color:#a47e3c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #dbc59e;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #dbc59e}
.has-warning .input-group-addon{color:#c09853;background-color:#fcf8e3;border-color:#c09853}
.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline{color:#b94a48}.has-error .form-control{border-color:#b94a48;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-error .form-control:focus{border-color:#953b39;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #d59392;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #d59392}
.has-error .input-group-addon{color:#b94a48;background-color:#f2dede;border-color:#b94a48}
.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline{color:#468847}
.has-success .form-control{border-color:#468847;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}
.has-success .form-control:focus{border-color:#356635;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #7aba7b;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #7aba7b}
.has-success .input-group-addon{color:#468847;background-color:#dff0d8;border-color:#468847}
.form-control-static{margin-bottom:0}
.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}
@media(min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}
.form-inline .form-control{display:inline-block}.form-inline .radio,.form-inline .checkbox{display:inline-block;padding-left:0;margin-top:0;margin-bottom:0}
.form-inline .radio input[type="radio"],.form-inline .checkbox input[type="checkbox"]{float:none;margin-left:0}}
.form-horizontal .control-label,.form-horizontal .radio,.form-horizontal .checkbox,.form-horizontal .radio-inline,.form-horizontal .checkbox-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}.form-horizontal .form-group:before,.form-horizontal .form-group:after{display:table;content:" "}.form-horizontal .form-group:after{clear:both}.form-horizontal .form-group:before,.form-horizontal .form-group:after{display:table;content:" "}.form-horizontal .form-group:after{clear:both}.form-horizontal .form-control-static{padding-top:7px}
@media(min-width:768px){.form-horizontal .control-label{text-align:right}}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:normal;line-height:1.428571429;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;background-image:none;border:1px solid transparent;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}.btn:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}
.btn:hover,.btn:focus{color:#333;text-decoration:none}
.btn:active,.btn.active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}
.btn.disabled,.btn[disabled],fieldset[disabled] .btn{pointer-events:none;cursor:not-allowed;opacity:.65;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none}
.btn-default{color:#333;background-color:#fff;border-color:#ccc}
.btn-default:hover,.btn-default:focus,.btn-default:active,.btn-default.active,.open .dropdown-toggle.btn-default{color:#333;background-color:#ebebeb;border-color:#adadad}
.btn-default:active,.btn-default.active,.open .dropdown-toggle.btn-default{background-image:none}
.btn-default.disabled,.btn-default[disabled],fieldset[disabled] .btn-default,.btn-default.disabled:hover,.btn-default[disabled]:hover,fieldset[disabled] .btn-default:hover,.btn-default.disabled:focus,.btn-default[disabled]:focus,fieldset[disabled] .btn-default:focus,.btn-default.disabled:active,.btn-default[disabled]:active,fieldset[disabled] .btn-default:active,.btn-default.disabled.active,.btn-default[disabled].active,fieldset[disabled] .btn-default.active{background-color:#fff;border-color:#ccc}
.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd}
.btn-primary:hover,.btn-primary:focus,.btn-primary:active,.btn-primary.active,.open .dropdown-toggle.btn-primary{color:#fff;background-color:#3276b1;border-color:#285e8e}
.btn-primary:active,.btn-primary.active,.open .dropdown-toggle.btn-primary{background-image:none}
.btn-primary.disabled,.btn-primary[disabled],fieldset[disabled] .btn-primary,.btn-primary.disabled:hover,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary:hover,.btn-primary.disabled:focus,.btn-primary[disabled]:focus,fieldset[disabled] .btn-primary:focus,.btn-primary.disabled:active,.btn-primary[disabled]:active,fieldset[disabled] .btn-primary:active,.btn-primary.disabled.active,.btn-primary[disabled].active,fieldset[disabled] .btn-primary.active{background-color:#428bca;border-color:#357ebd}
.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}
.btn-warning:hover,.btn-warning:focus,.btn-warning:active,.btn-warning.active,.open .dropdown-toggle.btn-warning{color:#fff;background-color:#ed9c28;border-color:#d58512}
.btn-warning:active,.btn-warning.active,.open .dropdown-toggle.btn-warning{background-image:none}
.btn-warning.disabled,.btn-warning[disabled],fieldset[disabled] .btn-warning,.btn-warning.disabled:hover,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning:hover,.btn-warning.disabled:focus,.btn-warning[disabled]:focus,fieldset[disabled] .btn-warning:focus,.btn-warning.disabled:active,.btn-warning[disabled]:active,fieldset[disabled] .btn-warning:active,.btn-warning.disabled.active,.btn-warning[disabled].active,fieldset[disabled] .btn-warning.active{background-color:#f0ad4e;border-color:#eea236}
.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger:hover,.btn-danger:focus,.btn-danger:active,.btn-danger.active,.open .dropdown-toggle.btn-danger{color:#fff;background-color:#d2322d;border-color:#ac2925}
.btn-danger:active,.btn-danger.active,.open .dropdown-toggle.btn-danger{background-image:none}
.btn-danger.disabled,.btn-danger[disabled],fieldset[disabled] .btn-danger,.btn-danger.disabled:hover,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger:hover,.btn-danger.disabled:focus,.btn-danger[disabled]:focus,fieldset[disabled] .btn-danger:focus,.btn-danger.disabled:active,.btn-danger[disabled]:active,fieldset[disabled] .btn-danger:active,.btn-danger.disabled.active,.btn-danger[disabled].active,fieldset[disabled] .btn-danger.active{background-color:#d9534f;border-color:#d43f3a}
.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}
.btn-success:hover,.btn-success:focus,.btn-success:active,.btn-success.active,.open .dropdown-toggle.btn-success{color:#fff;background-color:#47a447;border-color:#398439}
.btn-success:active,.btn-success.active,.open .dropdown-toggle.btn-success{background-image:none}
.btn-success.disabled,.btn-success[disabled],fieldset[disabled] .btn-success,.btn-success.disabled:hover,.btn-success[disabled]:hover,fieldset[disabled] .btn-success:hover,.btn-success.disabled:focus,.btn-success[disabled]:focus,fieldset[disabled] .btn-success:focus,.btn-success.disabled:active,.btn-success[disabled]:active,fieldset[disabled] .btn-success:active,.btn-success.disabled.active,.btn-success[disabled].active,fieldset[disabled]
 .btn-success.active{background-color:#5cb85c;border-color:#4cae4c}
 .btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info:hover,.btn-info:focus,.btn-info:active,.btn-info.active,.open .dropdown-toggle.btn-info{color:#fff;background-color:#39b3d7;border-color:#269abc}
 .btn-info:active,.btn-info.active,.open .dropdown-toggle.btn-info{background-image:none}
 .btn-info.disabled,.btn-info[disabled],fieldset[disabled] .btn-info,.btn-info.disabled:hover,.btn-info[disabled]:hover,fieldset[disabled] .btn-info:hover,.btn-info.disabled:focus,.btn-info[disabled]:focus,fieldset[disabled] .btn-info:focus,.btn-info.disabled:active,.btn-info[disabled]:active,fieldset[disabled] .btn-info:active,.btn-info.disabled.active,.btn-info[disabled].active,fieldset[disabled] .btn-info.active{background-color:#5bc0de;border-color:#46b8da}
 .btn-link{font-weight:normal;color:#428bca;cursor:pointer;border-radius:0}
 .btn-link,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:hover,.btn-link:focus,.btn-link:active{border-color:transparent}
 .btn-link:hover,.btn-link:focus{color:#2a6496;text-decoration:underline;background-color:transparent}.btn-link[disabled]:hover,fieldset[disabled] .btn-link:hover,.btn-link[disabled]:focus,fieldset[disabled] .btn-link:focus{color:#999;text-decoration:none}.btn-lg{padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}.btn-sm,.btn-xs{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-xs{padding:1px 5px}.btn-block{display:block;width:100%;padding-right:0;padding-left:0}.btn-block+.btn-block{margin-top:5px}input[type="submit"].btn-block,input[type="reset"].btn-block,input[type="button"].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition:height .35s ease;transition:height .35s ease}@font-face{font-family:'Glyphicons Halflings';}.glyphicon{position:relative;/*top:1px;*/display:inline-block;-webkit-font-smoothing:antialiased;font-style:normal;font-weight:normal;line-height:1;-moz-osx-font-smoothing:grayscale}.glyphicon:empty{width:1em}.glyphicon-asterisk:before{content:"\2a"}
 .glyphicon-plus:before{content:"\2b"}
 .glyphicon-euro:before{content:"\20ac"}
 .glyphicon-minus:before{content:"\2212"}
 .glyphicon-cloud:before{content:"\2601"}
 .glyphicon-envelope:before{content:"\2709"}
 .glyphicon-pencil:before{content:"\270f"}
 .glyphicon-glass:before{content:"\e001"}
 .glyphicon-music:before{content:"\e002"}
 .glyphicon-search:before{content:"\e003"}
 .glyphicon-heart:before{content:"\e005"}
 .glyphicon-star:before{content:"\e006"}
 .glyphicon-star-empty:before{content:"\e007"}
 .glyphicon-user:before{content:"\e008"}
 .glyphicon-film:before{content:"\e009"}
 .glyphicon-th-large:before{content:"\e010"}
 .glyphicon-th:before{content:"\e011"}
 .glyphicon-th-list:before{content:"\e012"}
 .glyphicon-ok:before{content:"\e013"}
 .glyphicon-remove:before{content:"\e014"}
 .glyphicon-zoom-in:before{content:"\e015"}
 .glyphicon-zoom-out:before{content:"\e016"}
 .glyphicon-off:before{content:"\e017"}
 .glyphicon-signal:before{content:"\e018"}
 .glyphicon-cog:before{content:"\e019"}
 .glyphicon-trash:before{content:"\e020"}
 .glyphicon-home:before{/*content:"\e021"*/}
 .glyphicon-file:before{content:"\e022"}
 .glyphicon-time:before{content:"\e023"}
 .glyphicon-road:before{content:"\e024"}
 .glyphicon-download-alt:before{content:"\e025"}
 .glyphicon-download:before{content:"\e026"}
 .glyphicon-upload:before{content:"\e027"}
 .glyphicon-inbox:before{content:"\e028"}
 .glyphicon-play-circle:before{content:"\e029"}
 .glyphicon-repeat:before{content:"\e030"}
 .glyphicon-refresh:before{content:"\e031"}
 .glyphicon-list-alt:before{content:"\e032"}
 .glyphicon-lock:before{content:"\e033"}
 .glyphicon-flag:before{content:"\e034"}
 .glyphicon-headphones:before{content:"\e035"}
 .glyphicon-volume-off:before{content:"\e036"}
 .glyphicon-volume-down:before{content:"\e037"}
 .glyphicon-volume-up:before{content:"\e038"}
 .glyphicon-qrcode:before{content:"\e039"}
 .glyphicon-barcode:before{content:"\e040"}
 .glyphicon-tag:before{content:"\e041"}
 .glyphicon-tags:before{content:"\e042"}
 .glyphicon-book:before{content:"\e043"}
 .glyphicon-bookmark:before{content:"\e044"}
 .glyphicon-print:before{content:"\e045"}
 .glyphicon-camera:before{content:"\e046"}
 .glyphicon-font:before{content:"\e047"}
 .glyphicon-bold:before{content:"\e048"}
 .glyphicon-italic:before{content:"\e049"}
 .glyphicon-text-height:before{content:"\e050"}
 .glyphicon-text-width:before{content:"\e051"}
 .glyphicon-align-left:before{content:"\e052"}
 .glyphicon-align-center:before{content:"\e053"}
 .glyphicon-align-right:before{content:"\e054"}
 .glyphicon-align-justify:before{content:"\e055"}
 .glyphicon-list:before{content:"\e056"}
 .glyphicon-indent-left:before{content:"\e057"}
 .glyphicon-indent-right:before{content:"\e058"}
 .glyphicon-facetime-video:before{content:"\e059"}
 .glyphicon-picture:before{content:"\e060"}
 .glyphicon-map-marker:before{content:"\e062"}
 .glyphicon-adjust:before{content:"\e063"}
 .glyphicon-tint:before{content:"\e064"}
 .glyphicon-edit:before{content:"\e065"}
 .glyphicon-share:before{content:"\e066"}
 .glyphicon-check:before{content:"\e067"}
 .glyphicon-move:before{content:"\e068"}
 .glyphicon-step-backward:before{content:"\e069"}
 .glyphicon-fast-backward:before{content:"\e070"}
 .glyphicon-backward:before{content:"\e071"}
 .glyphicon-play:before{content:"\e072"}
 .glyphicon-pause:before{content:"\e073"}
 .glyphicon-stop:before{content:"\e074"}
 .glyphicon-forward:before{content:"\e075"}
 .glyphicon-fast-forward:before{content:"\e076"}
 .glyphicon-step-forward:before{content:"\e077"}
 .glyphicon-eject:before{content:"\e078"}
 .glyphicon-chevron-left:before{content:"\e079"}
 .glyphicon-chevron-right:before{content:"\e080"}
 .glyphicon-plus-sign:before{content:"\e081"}
 .glyphicon-minus-sign:before{content:"\e082"}
 .glyphicon-remove-sign:before{content:"\e083"}
 .glyphicon-ok-sign:before{content:"\e084"}
 .glyphicon-question-sign:before{content:"\e085"}
 .glyphicon-info-sign:before{content:"\e086"}
 .glyphicon-screenshot:before{content:"\e087"}
 .glyphicon-remove-circle:before{content:"\e088"}
 .glyphicon-ok-circle:before{content:"\e089"}
 .glyphicon-ban-circle:before{content:"\e090"}
 .glyphicon-arrow-left:before{content:"\e091"}
 .glyphicon-arrow-right:before{content:"\e092"}
 .glyphicon-arrow-up:before{content:"\e093"}
 .glyphicon-arrow-down:before{content:"\e094"}
 .glyphicon-share-alt:before{content:"\e095"}
 .glyphicon-resize-full:before{content:"\e096"}
 .glyphicon-resize-small:before{content:"\e097"}
 .glyphicon-exclamation-sign:before{content:"\e101"}
 .glyphicon-gift:before{content:"\e102"}
 .glyphicon-leaf:before{content:"\e103"}
 .glyphicon-fire:before{content:"\e104"}
 .glyphicon-eye-open:before{content:"\e105"}
 .glyphicon-eye-close:before{content:"\e106"}
 .glyphicon-warning-sign:before{content:"\e107"}
 .glyphicon-plane:before{content:"\e108"}
 .glyphicon-calendar:before{content:"\e109"}
 .glyphicon-random:before{content:"\e110"}
 .glyphicon-comment:before{content:"\e111"}
 .glyphicon-magnet:before{content:"\e112"}
 .glyphicon-chevron-up:before{content:"\e113"}
 .glyphicon-chevron-down:before{content:"\e114"}
 .glyphicon-retweet:before{content:"\e115"}
 .glyphicon-shopping-cart:before{content:"\e116"}
 .glyphicon-folder-close:before{content:"\e117"}
 .glyphicon-folder-open:before{content:"\e118"}
 .glyphicon-resize-vertical:before{content:"\e119"}
 .glyphicon-resize-horizontal:before{content:"\e120"}
 .glyphicon-hdd:before{content:"\e121"}
 .glyphicon-bullhorn:before{content:"\e122"}
 .glyphicon-bell:before{content:"\e123"}
 .glyphicon-certificate:before{content:"\e124"}
 .glyphicon-thumbs-up:before{content:"\e125"}
 .glyphicon-thumbs-down:before{content:"\e126"}
 .glyphicon-hand-right:before{content:"\e127"}
 .glyphicon-hand-left:before{content:"\e128"}
 .glyphicon-hand-up:before{content:"\e129"}
 .glyphicon-hand-down:before{content:"\e130"}
 .glyphicon-circle-arrow-right:before{content:"\e131"}
 .glyphicon-circle-arrow-left:before{content:"\e132"}
 .glyphicon-circle-arrow-up:before{content:"\e133"}
 .glyphicon-circle-arrow-down:before{content:"\e134"}
 .glyphicon-globe:before{content:"\e135"}
 .glyphicon-wrench:before{content:"\e136"}
 .glyphicon-tasks:before{content:"\e137"}
 .glyphicon-filter:before{content:"\e138"}
 .glyphicon-briefcase:before{content:"\e139"}
 .glyphicon-fullscreen:before{content:"\e140"}
 .glyphicon-dashboard:before{content:"\e141"}
 .glyphicon-paperclip:before{content:"\e142"}
 .glyphicon-heart-empty:before{content:"\e143"}
 .glyphicon-link:before{content:"\e144"}
 .glyphicon-phone:before{content:"\e145"}
 .glyphicon-pushpin:before{content:"\e146"}
 .glyphicon-usd:before{content:"\e148"}
 .glyphicon-gbp:before{content:"\e149"}
 .glyphicon-sort:before{content:"\e150"}
 .glyphicon-sort-by-alphabet:before{content:"\e151"}
 .glyphicon-sort-by-alphabet-alt:before{content:"\e152"}
 .glyphicon-sort-by-order:before{content:"\e153"}
 .glyphicon-sort-by-order-alt:before{content:"\e154"}
 .glyphicon-sort-by-attributes:before{content:"\e155"}
 .glyphicon-sort-by-attributes-alt:before{content:"\e156"}
 .glyphicon-unchecked:before{content:"\e157"}
 .glyphicon-expand:before{content:"\e158"}
 .glyphicon-collapse-down:before{content:"\e159"}
 .glyphicon-collapse-up:before{content:"\e160"}
 .glyphicon-log-in:before{content:"\e161"}
 .glyphicon-flash:before{content:"\e162"}
 .glyphicon-log-out:before{content:"\e163"}
 .glyphicon-new-window:before{content:"\e164"}
 .glyphicon-record:before{content:"\e165"}
 .glyphicon-save:before{content:"\e166"}
 .glyphicon-open:before{content:"\e167"}
 .glyphicon-saved:before{content:"\e168"}
 .glyphicon-import:before{content:"\e169"}
 .glyphicon-export:before{content:"\e170"}
 .glyphicon-send:before{content:"\e171"}
 .glyphicon-floppy-disk:before{content:"\e172"}
 .glyphicon-floppy-saved:before{content:"\e173"}
 .glyphicon-floppy-remove:before{content:"\e174"}
 .glyphicon-floppy-save:before{content:"\e175"}
 .glyphicon-floppy-open:before{content:"\e176"}
 .glyphicon-credit-card:before{content:"\e177"}
 .glyphicon-transfer:before{content:"\e178"}
 .glyphicon-cutlery:before{content:"\e179"}
 .glyphicon-header:before{content:"\e180"}
 .glyphicon-compressed:before{content:"\e181"}
 .glyphicon-earphone:before{content:"\e182"}
 .glyphicon-phone-alt:before{content:"\e183"}
 .glyphicon-tower:before{content:"\e184"}
 .glyphicon-stats:before{content:"\e185"}
 .glyphicon-sd-video:before{content:"\e186"}
 .glyphicon-hd-video:before{content:"\e187"}
 .glyphicon-subtitles:before{content:"\e188"}
 .glyphicon-sound-stereo:before{content:"\e189"}
 .glyphicon-sound-dolby:before{content:"\e190"}
 .glyphicon-sound-5-1:before{content:"\e191"}
 .glyphicon-sound-6-1:before{content:"\e192"}
 .glyphicon-sound-7-1:before{content:"\e193"}
 .glyphicon-copyright-mark:before{content:"\e194"}
 .glyphicon-registration-mark:before{content:"\e195"}
 .glyphicon-cloud-download:before{content:"\e197"}
 .glyphicon-cloud-upload:before{content:"\e198"}
 .glyphicon-tree-conifer:before{content:"\e199"}
 .glyphicon-tree-deciduous:before{content:"\e200"}
 .caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px solid #000;border-right:4px solid transparent;border-bottom:0 dotted;border-left:4px solid transparent}

 .dropdown-toggle:focus{outline:0}

 .open>a{outline:0}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.428571429;color:#999}
 .dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}



.ac_active{
  display: block;
}

.arrowLeftBg>i{
  font-size: 20px;
  margin-left: 40%;
  margin-top: 33%;
}
.arrowRightBg>i{
  font-size: 20px;
  margin-left: 40%;
  margin-top: 33%;
}
/** txt_menu***/
.bloc_titre_hotels{
  margin-bottom: -0.5%;
}
.descriptif_td_active{
  height: 52px;
  width:167px;
  font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: 700 !important;
  font-size: 18px !important;
  line-height: 18px;
  text-align: center;
  letter-spacing: 0.4px;
  color: #262626;
  padding-top: 2%;
}


/*** presentation menu****/
.col_presentation_txt_active{
font-weight:600 !important;
font-size:18px !important;
color:#262626
}
.v153_33_presentation_active{
display:block !important;
}
.presentation_active{
  padding-top:8% !important;
}
/*** equipement menu****/
.col_equipements_txt_active{
font-weight:600 !important;
font-size:18px !important;
color:#262626
}
.v153_33_equipements_active{
display:block !important;
}

/*** avis menu ***/

.col_liste_avis_txt_active{
font-weight:600 !important;
font-size:18px !important;
color:#262626
}
.v153_33_liste_avis_active{
display:block !important;
}

.owl-up_active > i {
    margin-top: 24%;
    margin-left: 27%;
    font-size: 30px;
}
.skeleton {
  width:97%;
  height: 96px;
  margin: 8px auto;
  border-radius: 6px;
  overflow: hidden;
}
.skeleton-image {
  width: 100%;
  height: 150px;
  background-color: #DDD;
  margin-bottom: 16px;
}
.skeleton-text {
  width: 80%;
  height: 16px;
  background-color: #ddd;
}
.skeleton-text + .skeleton-text {
  margin-top: 8px;
}
.skeleton_prix {
  width: 26%;
  margin: 0 auto;
  border-radius: 8px;
  overflow: hidden;
  padding: 16px;
  clear: both;
  position: relative;
  margin-right: 2.3%;
}
.skeleton-image_prix {
  width: 100%;
  height: 48px;
  background-color: #DDD;
}
.skeleton-text_prix {
  width: 80%;
  height: 16px;
  background-color: #ddd;
}
.skeleton-text_prix + .skeleton-text_prix {
  margin-top: 8px;
}
.skeleton_button_je_paye {
  width: 35%;
  margin: 0 auto;
  border-radius: 8px;
  overflow: hidden;
  padding: 16px;
  clear: both;
  border-radius: 4px;
  border: 0px;
  margin-top: -7.5%;
  margin-left: 33%;
  position: absolute;
}
.skeleton-image_button_je_paye {
  width: 100%;
  height: 48px;
  background-color: #DDD;
}
.skeleton-text_button_je_paye {
  width: 80%;
  height: 16px;
  background-color: #ddd;
}
.skeleton-text_button_je_paye + .skeleton-text_button_je_paye {
  margin-top: 8px;
}
.skeleton_button_je_passe {
  width: 30%;
  margin: 0 auto;
  border-radius: 8px;
  overflow: hidden;
  padding: 16px;
  clear: both;
  margin-top: 0%;
  margin-right: 2.5%;
}
.skeleton-image_button_je_passe {
  width: 100%;
  height: 48px;
  background-color: #DDD;
}
.skeleton-text_button_je_passe {
  width: 80%;
  height: 16px;
  background-color: #ddd;
}
.skeleton-text_button_je_passe + .skeleton-text_button_je_passe {
  margin-top: 8px;
}
/* Animation for a subtle pulsing effect */
@keyframes pulse {
  0% {
    opacity: 0.6;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0.6;
  }
}
.skeleton .skeleton-image, .skeleton .skeleton-text {
  animation: pulse 1.5s infinite;
}
.skeleton_prix .skeleton-image_prix, .skeleton_prix .skeleton-text_prix {
  animation: pulse 1.5s infinite;
}
/*Ellipsis*/
.lds-ellips {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
  top:-65% ;
  left:40%;
}
.lds-ellips div {
  position: absolute;
  top: 30px;
  width: 11px;
  height: 11px;
  border-radius: 50%;
  background: #fff;
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.lds-ellips div:nth-child(1) {
  left: 6px;
  animation: lds-ellips1 0.6s infinite;
}
.lds-ellips div:nth-child(2) {
  left: 6px;
  animation: lds-ellips2 0.6s infinite;
}
.lds-ellips div:nth-child(3) {
  left: 26px;
  animation: lds-ellips2 0.6s infinite;
}
.lds-ellips div:nth-child(4) {
  left: 45px;
  animation: lds-ellips3 0.6s infinite;
}
@keyframes lds-ellips1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes lds-ellips3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes lds-ellips2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(19px, 0);
  }
}
/** ellips**/
/*Ellipsis*/
.lds-ellips1 {
	display: inline-block;
	position: relative;
	width: 64px;
	height: 64px;
	margin-top: -18%;
  left: 33%;
}
.lds-ellips1 div {
	position: absolute;
	top: 30px;
	width: 11px;
	height: 11px;
	border-radius: 50%;
	background: #FF0097;
	animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.lds-ellips1 div:nth-child(1) {
	left: 6px;
	animation: lds-ellips1 0.6s infinite;
}
.lds-ellips1 div:nth-child(2) {
	left: 6px;
	animation: lds-ellips2 0.6s infinite;
}
.lds-ellips1 div:nth-child(3) {
	left: 26px;
	animation: lds-ellips2 0.6s infinite;
}
.lds-ellips1 div:nth-child(4) {
	left: 45px;
	animation: lds-ellips3 0.6s infinite;
}
@keyframes lds-ellips1 {
	0% {
		transform: scale(0);
	}
	100% {
		transform: scale(1);
	}
}
@keyframes lds-ellips3 {
	0% {
		transform: scale(1);
	}
	100% {
		transform: scale(0);
	}
}
@keyframes lds-ellips2 {
	0% {
		transform: translate(0, 0);
	}
	100% {
		transform: translate(19px, 0);
	}
}
/** ellips pink**/
.vertical-line_equip{
  border: none;
  border-left: 1px solid #DDDDDD;
  height: 85%;
  transform: rotate(180deg);
  margin: 0 auto;
  margin-left: -73.6%;
  margin-top: 6.5%;
}
.repations_chambres {
  margin-left:19.2%;
  position: relative;
  z-index: 3;
  border-radius: 8px;
  box-shadow: rgb(0 0 0 / 4%) 0px 10px 20px, rgb(0 0 0 / 4%) 0px 2px 10px, rgb(0 0 0 / 2%) 0px 0px 4px;
  display: none;
}
.trianglebulle {
  width: 100%;
}
.une_chambre {
  float: left;
  width: 100%;
  height: 238px;
}
.num_chambre {
  color: #000;
  float: left;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  font-size: 18px;
  font-weight: 500;
  background-color: #FFFFFF;
  width: 100%;
  height: 40px;
  line-height: 16px;
  padding-left: 23px;
  padding-top: 4%;
  border-bottom: 1px solid #E2E7EB;
}
.fermer_ch1 {
  display: none;
  margin-right: 0%;
  float: right;
  height: 20px;
  width: 20px;
  cursor: pointer;
  background: url(https://tn.tunisiebooking.com/theme/images/ic-fermer-ch.svg) no-repeat;
  margin-top: -25px;
}
.groupe_adultes {
  float: left;
  width: 100%;
  margin-top: 8px;
  height: 60px;
}
.label_ad {
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  color: #262626;
  float: left;
  margin: 8px 5px 0 23px;
  font-size: 15px;
  font-weight: 400;
  line-height: 20px;
}
.nombre_adultes {
  float: right;
  width: 50%;
  margin-top: 1%;
  margin-right: -9%;
}
.moins {
  float: left;
  cursor: pointer;
  background-color: #e9ebee;
  width: 38px;
  height: 38px;
  padding: 4px 6px 16px 6px;
  text-align: center;
  font-size: 20px;
  border-left: none;
  background: url(https://tn.tunisiebooking.com/images/img5.svg) no-repeat;
  background-position: center;
  background-size: contain;
}
.input_ad {
  float: left;
  width: 30%;
  height: 30%;
  text-align: center;
  padding: 10px 6px 11px 6px;
  color: #262626;
  font-weight: 500;
  font-size: 18px;
  line-height: 20px;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
}
.plus {
  float: left;
  cursor: pointer;
  background-color: #e9ebee;
  width: 38px;
  height: 38px;
  padding: 4px 6px 16px 6px;
  text-align: center;
  font-size: 20px;
  border-left: none;
  background: url(https://tn.tunisiebooking.com/images/img4.svg) no-repeat;
  background-position: center;
  background-size: contain;
}
.groupe_enfants {
  float: left;
  width: 100%;
  margin-top: 8px;
  height: 60px;
}
.label_en {
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  float: left;
  font-size: 15px;
  margin: 8px 0px 0 23px;
  font-weight: 400;
  line-height: 20px;
  color: #262626;
}
.nombre_enfants {
  float: right;
  width: 50%;
  margin-right: -9%;
}
.input_en {
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  font-weight: 500;
  float: left;
  width: 30%;
  height: 30%;
  text-align: center;
  padding: 10px 6px 11px 6px;
  color: #262626;
  font-size: 18px;
  line-height: 20px;
}
.label_enf {
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  float: left;
  font-size: 13px;
  margin: -29px 0px 0 23px;
  font-weight: 400;
  line-height: 18px;
  color: #6B7280;
}
.groupe_ages {
  float: left;
  margin-top: 8px;
  clear: both;
  width: 100%;
  margin-left: 0%;
}
.label_ages {
  display:none;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  float: left;
  font-size: 15px;
  margin-bottom: 6px;
  font-weight: 400;
  line-height: 20px;
  margin-left: 23px;
  color: #262626;
  width:100%;
}
.age {
  float: left;
  width: 80px;
  height: 32px;
  margin-right: 3px;
  margin-left: 8px;
  display: none;
}
.age select {
  float: left;
  width: 100%;
  height: 100%;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: url(https://tn.tunisiebooking.com/theme/images/bg-select-age-thematique.png) no-repeat right;
  font-size: 16px;
  padding: 0 0 0 5px;
}
.ajouter_ch {
  display: none;
  font-family: roboto,sans-serif;
  line-height: 16px;
  float: right;
  height: 20px;
  padding: 19px 0 0 20px;
  clear: both;
  cursor: pointer;
  margin: 10px 18px 10px 6px;
  font-size: 16px;
  color: #FF0097;
  font-weight: 500;
  margin-top:-21%;
  margin-right:1%;
  text-decoration: underline;
  text-decoration-thickness: 2px;
  text-underline-offset: 4px;
}
.fermer_ch {
  margin-right: 0%;
  float: right;
  height: 20px;
  width: 20px;
  cursor: pointer;
  background: url(https://tn.tunisiebooking.com/theme/images/ic-fermer-ch.svg) no-repeat;
  margin-top: -25px;
}
.slick-prev:hover:before {
  background-image: url(https://tn.tunisiebooking.com/flech-right.svg) !important;
  background-size: 48px 46px !important;
  background-position: 43% 43%;
}
.slick-next:hover:before {
  background-image: url(https://tn.tunisiebooking.com/flech-right.svg) !important;
  background-size: 48px 46px !important;
  background-position: 43% 43%;
}
.enveloppe_prix sup{
	top:-0.3em !important;
}
sup{
  top: 0.2em !important;
}
.v87_280 {
	width: 16px;
	height: 30px;
	opacity: 1;
	position: relative;
	top: 11px;
	left: 4%;
	overflow: hidden;
}
.v87_280_pers {
  cursor:pointer;
	width: 16px;
	height: 30px;
	opacity: 1;
	position: relative;
	top: 26%;
	left: 4%;
	overflow: hidden;
}
.v64_170_ch {
	width: 304px;
	height: 55px;
  color: rgba(0,0,0,1);
  position: absolute;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  font-weight: 400;
  font-size: 16px;
  opacity: 1;
  text-align: left;
}
.chambres {
  float: left;
  width: 100%;
  clear: both;
  padding: 11px 32px 0;
}
.validation-error {
  display: none;
    clear: left;
    position: relative;
    width: 92%;
    background: #FFF0F0;
    border: 1px solid #BA1F1A;
    /*box-shadow: 0px 4px 16px rgba(38, 38, 38, 0.1);*/
    border-radius: 2px;
    padding: 8px;
    margin-left:8%;
    margin-top: 6.5%;
}
.validation-error__content {
  font-size: 14px;
  color: #BA1F1A;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  font-weight: 400;
  line-height: 136.19%;
  letter-spacing: 0.005em;
  padding-left: 0.5%;
  text-align: center;
}
#carre1{
	margin-left: 7%;
	margin-top: 4.7%;
	position: relative;
	z-index: 7;
	color: #CDCDCD;
	background: #F3F5F7;
	width: 14.93px;
	height: 14.93px;
	transform: rotate(45deg);
}
#carre{
	margin-left: -50.7%;
	margin-top: 1.7%;
	position: relative;
	z-index: 7;
	color: #CDCDCD;
	background: #F3F5F7;
	width: 14.93px;
	height: 14.93px;
	transform: rotate(317deg);
	border-top: 1px solid #CDCDCD;
	border-left: 1px solid #CDCDCD;
}
.box_avis {
	box-sizing: border-box;
	position: relative;
	width: 291px;
	height: auto;
	background-color: #F3F5F7;
	border-radius: 3px;
  padding:5%;
	/*padding-top: 1%;
	padding-right: 1%;
	padding-left: 1.2%;*/
	z-index: 5;
	margin-top: -2.8%;
	/*padding-bottom: 3.5%;*/
}
.cnaNlO {
  margin: 0px 16px 16px 0px;
}
.cnaNlO {
	white-space: nowrap;
	display: inline-flex;
	background: #FFFFFF;
	border: 1px solid #C6C6C6;
	border-radius: 100px;
	margin: 0px 8px 8px 0px;
	padding: 9px;
	-webkit-box-align: center;
	align-items: center;
	font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
	font-style: normal;
	font-weight: 400;
	font-size: 14px;
	line-height: 92%;
	color:#262626;
	height: 36px;
	padding-right: 5%;
}
.cnaNlO:hover{
	cursor:pointer;
	background: #F3F5F7;
	box-shadow: 0px 1px 2px 0px rgba(31, 41, 55, 0.08);
}
.vertical-line {
	 border: none;
	 border-left: 1px solid #DDDDDD; /* Adjust the color and thickness as needed */
	 height: 85%; /* Adjust the height as needed */
	 transform: rotate(180deg); /* Rotate the line to make it vertical */
	 margin: 0 auto; /* Center the line horizontally */
 }
 .horizontal-line {
 	 border-left: 1px solid #DDDDDD; /* Adjust the color and thickness as needed */
 	 height: 85%; /* Adjust the height as needed */
 	 margin: 0 auto; /* Center the line horizontally */
	 width:96%;
  }
  .presentation{
    background: #FFFFFF;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13), 0px 0px 10px rgba(0, 0, 0, 0.13);
    border-radius: 2px;
    padding-top: 2%;
    margin-bottom:2%;
    padding-bottom: 1%;
  }
  .div_rightscroll {
    border: 0px;
    background: #FFFFFF;
    filter: blur(8px);
    width: 100%;
    height: 21px;
    /* float: right; */
    margin-top: -15px;
    margin-left: -1%;
  }
  #ruslt_descriptif1 > h2,#ruslt_descriptif1 > h3,#ruslt_descriptif2 > h2,#ruslt_descriptif2 > h3{
		font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 25.71px;
		color: #262626;
		margin-bottom:2%;
	}
	#ruslt_descriptif1 > p,#ruslt_descriptif2 > p{
		font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
		font-style: normal;
		font-weight: 400;
		font-size: 16px;
		line-height: 26px;
		color: #262626;
		padding-right: 1.5%;
		margin: 0cm 0cm 3pt 0cm !important;
	}
  .equipements{
  	background: #FFFFFF;
  	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13), 0px 0px 10px rgba(0, 0, 0, 0.13);
  	border-radius: 2px;
  	padding-top: 2%;
  	margin-bottom:2%;
  }
  .mesure_securite{
  	background: #FFFFFF;
  	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13), 0px 0px 10px rgba(0, 0, 0, 0.13);
  	border-radius: 2px;
  	padding-top: 2%;
  	margin-bottom: 2%;
  }
  .desc_sec{
  	margin-left:1%;
  }
  .desc_sec>p{
  	font-family:-apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
  	font-style: normal;
  	font-weight: 400;
  	font-size: 16px;
  	line-height: 26px;
  	color: #262626;
  }
  #avantages{
  	background: #FFFFFF;
  	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13), 0px 0px 10px rgba(0, 0, 0, 0.13);
  	border-radius: 2px;
  	padding-top: 2%;
  	padding-bottom: 3%;
  	margin-bottom: 0.5%;
  }
  .autre_hotels{
  	background: #FFFFFF;
  	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13), 0px 0px 10px rgba(0, 0, 0, 0.13);
  	border-radius: 2px;
  	padding-top: 2%;
  	margin-top:2%;
  	height: max-content;
  	padding-bottom: 2%;
  }
  #sous_services{
  	font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
  	font-style: normal;
  	font-weight: 400;
  	font-size: 16px;
  	line-height: 20px;
  	color: #262626;
  }
  .recap{
  	font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
  	font-style: normal;
  	font-weight: 500;
  	font-size: 24px;
  	line-height: 23px;
  	color: #262626;
  	margin-left: -3%;
  }
  .arrivee,.dates,.nbre_chambre{
  	font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
  	font-style: normal;
  	font-weight: 600;
  	font-size: 15px;
  	line-height: 17.58px;
  	color: #262626;
  }
  .arrivee > span,.nuits,.col_chambres > font{
  	font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
  	font-style: normal;
  	font-weight: 400;
  	font-size: 15px;
  	line-height: 17.58px;
  	color: #262626;
  }
  .vertical-line1{
  	content: "";
    display: inline-block;
    border-left: 1px solid #C6C6C6;
    height: 18px;
  	margin-left: 1%;
  }
  .choix_formule:checked{
  	background-color: transparent; /* Change the background color as per your preference */
    color: transparent;
  	margin-top: 0.2%;
  	margin-bottom: 3%;
  }

  input[type=radio] {
    cursor:pointer;
  	color:#9FA0A2;
  	width: 26px;
  	height: 26px;
  	appearance: none;
  	-webkit-appearance: none;
  	-moz-appearance: none;
  	border-width: 2px;
  	border-style: solid;
  	border-image-source:rgba(159, 160, 162, 1),rgba(107, 107, 107, 1),rgba(38, 38, 38, 1);
  	border-image-slice: 1;
  	border-radius: 6px;
  	border-image-repeat: stretch;
  	outline: none;
  	vertical-align: middle;
  	position: relative;
  	top: 3px;
  	background-color: #ffffff;
  	margin-top: -0.5%;
  	margin-right: 2%;
    margin-top: 0.2%;
margin-bottom: 3%;
  }
  input[type=radio]:checked::before {
    content: url('https://tn.tunisiebooking.com/images/icone-moteur/ic_check2.svg');
    display: block;
    position: absolute;
    text-align: center;
    height: 26px;
    width: 26px;
    background-color: #fff;
    border-radius: 6px;
    margin-top: -7.5%;
    margin-left: -2px;
    border: 2px solid #FF0097;
    padding: 13% 0% 0% 0%;
  }
  input[type=checkbox] {
    width: 30px;
    height: 30px;
    background: #fff;
    border: 2px solid #FF0097;
    background-size:2px;
    margin-top: -0.5%;
    margin-right: 2%;
  }
  input[type=checkbox]:checked::before {
    margin-top: -0.5%;
    padding: 2px;
    content: url('https://tn.tunisiebooking.com/images/icone-moteur/ic-check.svg');
    display: block;
    position: absolute;
    text-align: center;
    height: 30px;
    width: 30px;
    background-color: #fff;
    border-radius: 2px;
    border: 2px solid #FF0097;
    background-size:2px;
  }
  .zone_info_resa>b{
    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    padding-top: 2.2%;
  }
  .zone_info_resa>img{
    margin-top: -1%;
  }
  #photos_td{
    height: 52px;
    width:136px;
    font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 19px;
    line-height: 18px;
    text-align: center;
    letter-spacing: 0.4px;
    color: #262626;
    padding-top: 2%;
  }
  #descriptif_td,#equipement_td,#avis_td{
    height: 52px;
    width:167px;
    font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 18px;
    text-align: center;
    letter-spacing: 0.4px;
    color: #262626;
    padding-top: 2%;
  }
  #pictureMedia{
    object-fit: cover;
    height: 450px;
    border-radius: 4px;
  }
  .monnaie{
    font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 13px;
    line-height: 0px;
  }
  .sec_vig > div{
    font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 26px;
    color: #262626;
    margin-top: -5.5%;
    margin-left: 7.5%;
  }
  .sec_alimentaire > div{
    font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 26px;
    color: #262626;
    margin-top: -5.5%;
    margin-left: 7.5%;
  }
  .sec_distance > div{
    font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 26px;
    color: #262626;
    margin-top: -5.5%;
    margin-left: 7.5%;
  }
  .sec_nettoyage > div{
    font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 26px;
    color: #262626;
    margin-top: -5.5%;
    margin-left: 7.5%;
  }
  .sec_vig_txt{
    margin-top:4%;
  }
  #sous_sec_vig_txt{
    height: 77px;
    margin-left: 6%;
  }
  #sous_sec_vig_txt > i{
    margin-top: 0.5% !important;
  }
  .sec_alimentaire_txt{
    margin-top:4%;
  }
  #sous_sec_alimentaire_txt{
    height: 56px;
    /*margin-top: 2%;*/
    margin-left: 6%;
  }
  #sous_sec_alimentaire_txt > i{
    margin-top: 0.5% !important;
  }
  .sec_distance_txt{
    margin-top:4%;
  }
  #sous_sec_distance_txt{
    height: 57px;
    margin-left: 6%;
  }
  #sous_sec_distance_txt > i{
    margin-top: 0.5% !important;
  }
  .sec_nettoyage_txt{
    margin-top:4%;
  }
  #sous_sec_nettoyage_txt{
    height: 61px;
    margin-left: 6%;
  }
  #sous_sec_nettoyage_txt > i{
    margin-top: 0.5% !important;
  }
  .liste_avis{
    background: #FFFFFF;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13), 0px 0px 10px rgba(0, 0, 0, 0.13);
    border-radius: 2px;
    padding-top: 2%;
    padding-bottom: 3%;
    margin-bottom: 2%;
  }
  .nom_client{
    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    line-height: 23px;
    width: 100%;
    position: absolute;
    margin-left: 6%;
    margin-top: 5%;
  }
  .lib_parte_av{
    font-family:  -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #6B6B6B;
    margin-left:1%;
  }
  .desc_avis{
    box-sizing: border-box;
    position: absolute;
    width: 530px;
    height: auto;
    margin-left: 6%;
    background: #FFFFFF;
    border: 1px solid #CDCDCD;
    border-radius: 3px;
    padding-top: 1.5%;
    padding-bottom: 1.5%;
    background: #F3F5F7;
    box-shadow: 0px 0px 2px rgba(99, 99, 99, 0.1);
  }
  .note_avis >span {
    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 18px;
    color: #444444;
  }
  .desc_avis_txt{
    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 17px;
    color: #000000;
    margin-bottom:1%;
    margin-top:2%;
  }
  .desc_avis_date{
    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 13px;
    line-height: 17px;
    text-align: right;
    color: #878787;
  }
  .list_questions{
    background: #FFFFFF;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13), 0px 0px 10px rgba(0, 0, 0, 0.13);
    border-radius: 2px;
    padding-top: 2%;
    margin-bottom: 2%;
  }
  .accordion{
    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
    font-style: normal;
    font-weight: 600 !important;
    font-size: 16px !important;
    line-height: 17px;
    letter-spacing: 0.004em;
    color: #262626 !important;
    position: relative;
  }
  .accordion:focus {
    outline: none; /* Remove the outline */
    border: none; /* Remove the border */
  }
  .hotels_similaires{
    /*background: #F5F5F5;*/
    /*box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13), 0px 0px 10px rgba(0, 0, 0, 0.13);*/
    border-radius: 2px;
    padding-top: 1.5%;
    padding-bottom: 0.5%;
  }
  .bui-carousel__inner {
    list-style: none;
    padding: 0 16px;
    margin: 0;
    display: flex;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    justify-content: flex-start;
    width: 100%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    backface-visibility: hidden;
    box-sizing: border-box;
    padding-bottom: 0.5%;
}
.libelhot{
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 25px;
  /*text-decoration-line: underline;*/
  color: #000000;
  width: max-content;
  height: 23px;
}
.destination1{
  width:280px;
  height: auto;
  background: #FFFFFF;
  box-shadow: 0px 3px 6px rgba(38, 38, 38, 0.13);
  border-radius: 2px;
  margin-left: 2%;
}
.titre-hotel1{
  float: left;
  clear: both;
  width:100%;
  margin:15px 5px 5px 2.6%;
}
.titre-hotel1>h3{
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 600;
  font-size: 18px;
  line-height: 21px;
  color:#262626;
  text-decoration:none;
}
.etoiles1{
  margin-left: 3%;
}
.virgule_hotsim{
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 15px;
  line-height: 20px;
  color: #6B7280;
  width: 5px;
  margin-left: 35.5%;
  height: 20px;
  float: left;
  margin-top: -7%;
}
.adresse{
  float: left;
  /* position: absolute; */
  margin-top: -5.5%;
  margin-left: 1.5%;
}
.adresse > div{
  display: inline;
  position: relative;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  line-height: 20px;
  letter-spacing: 0.4px;
  align-items: center;
  color:#6B6B6B;
  margin-top: -3%;
  left: 7%;
}
.span_tripadv1,.notetrip1{
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 18.75px;
  letter-spacing: 0.005px;
}
.span_tripadv_y1{
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 18.75px;
  letter-spacing: 0.005px;
}

.img_destination>img{
  height:174.4px;

}
.tooltiptext{
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  line-height: 25px;
  color:#000000;
}
.note-adresse-hotel{
  float: left;
  clear: both;
  width:110%;
  /*margin:0px 0px 8px 2.6%;*/
  padding: 3%;
  margin-left: 0%;
}
.dispo11{
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  line-height: 25px;
  color:#000000;
  float:left;
  width:86%;
  margin-left: -2%;
}
.owl-nextt,.owl-prevv{
  cursor:pointer;
  position: absolute;
  width: 43px;
  height: 43px;
  left: 6px;
  /*top: 3px;*/
  background: #FFFFFF;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.17);
  border-radius: 26px;
}
.owl-nextt >i, .owl-prevv >i{
  color: #262626;
  font-size: 18px;
  margin-left: 38%;
  margin-top: 29%;
}
.libelhot >a{
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 25px;
  color:#000000;
}
.col_photos_txt{
  position: absolute;
  width: 63px;
  height: 18px;
  left: calc(50% - 63px/2);
  top: -37%;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 18px;
  text-align: center;
  letter-spacing: 0.4px;
  color: #262626;
}
.col_presentation_txt{
  position: absolute;
  width: 132px;
  height: 18px;
  left: 0px;
  top: -15%;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 18px;
  text-align: center;
  letter-spacing: 0.4px;
  color: #262626;
}
.col_equipements_txt{
  position: absolute;
  width: 117px;
  height: 18px;
  left: 0px;
  top: -15%;
  font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 18px;
  text-align: center;
  letter-spacing: 0.4px;
  color: #262626;
}
.col_liste_avis_txt{
  position: absolute;
  width: 100px;
  height: 18px;
  left: 0px;
  top: -15%;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 18px;
  text-align: center;
  letter-spacing: 0.4px;
  color: #262626;
}

.menu_detail{
  position: fixed;
  z-index: 1000;
}
.owl-up {
  position: fixed;
  width: 56px;
  height: 56px;
  left: 6px;
  top: 80%;
  background: #9D9D9D;
  border-radius: 90px;
  z-index: 9999;
}
.owl-up:hover {
  box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
}
.owl-up > i{
  margin-top: 24%;
  margin-left: 27%;
  font-size: 30px;
}
.menu_accueil{
  font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 17px;
  color: #6B6B6B;
}
.menu_accueil>u{
  /*text-decoration: none;*/
}
.menu_accueil>u:hover{
  color:#6B6B6B;
  text-decoration: none;
}
.menu_hotel>u{
  text-decoration: none;
}
.h1style1
{
  font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 17px;
  color: #262626;
}
.row>* {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x)/ 2);
  padding-left: calc(var(--bs-gutter-x)/ 2);
  margin-top: var(--bs-gutter-y);
}

#arrangement {
  cursor:pointer;
  width: 268px;
  padding: 5px;
  font-size: 16px;
  line-height: 1;
  border: 0;
  border-radius: 5px;
  height: 34px;
  background-position: 10px 20px, 30px 40px; /* First image positioned at 10px 20px, second at 30px 40px */
  background: url(https://tn.tunisiebooking.com/images/icone-moteur/ic-flech.svg) no-repeat right #FFFFFF !important;
  -webkit-appearance: none;
  background-position-x: 147px !important;
  background-size: 9% 37%, cover !important;
}
.slick-prev,.slick-next
{
  background: #fff !important;
  border-radius: 26px !important;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.17);
}
.v194_23 {
  /*width: 93px;*/
  color: rgba(255,255,255,1);
  position: relative;
  /*top: -1%;
  left: -5%;*/
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  font-weight: Bold;
  font-size: 18px;
  opacity: 1;
  text-align: left;
}
.v194_27 {
  color: rgba(255,255,255,1);
  position: relative;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  font-weight: Bold;
  font-size: 18px;
  opacity: 1;
  text-align: left;
}
.v194_27_btn {
  color: rgba(255,255,255,1);
  position: relative;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  font-weight: Bold;
  font-size: 18px;
  opacity: 1;
  text-align: left;
}
.v194_27_btn_moteur {
  color: rgba(255,255,255,1);
  position: absolute;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  font-weight: Bold;
  font-size: 18px;
  opacity: 1;
  text-align: left;
}
.v194_22:hover{
  background-color: #f40091;
  background-image: -moz-linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-image: -webkit-linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-image: linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-size: 300px;
}
.v194_22_btn:hover{
  background-color: #f40091;
  background-image: -moz-linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-image: -webkit-linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-image: linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-size: 300px;
}
.v194_29 {
  width: 13%;
  height:58px;
  border-radius: 6px;
  background: #FFF;
  color: #FF0097 !important;
  border: 1.2px solid #FF0097;
  background-size: 300px;
  background-repeat: no-repeat;
  background-position: 0%;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out;
  position: absolute;
  font-size: 18px !important;
  font-weight:500 !important;
  letter-spacing: 0.5px;
  line-height: 21px;
  -webkit-font-smoothing: antialiased;
}
.v194_29:hover{
  background: #FFF4F9;
}
.v194_22 {
  width: 13%;
  height:48px;
  border-radius: 5px;
  background-color: #f40091;
  background-image: -moz-linear-gradient(90deg, #FF5555 0%, #F40091 100%);
  background-image: -webkit-linear-gradient(90deg, #FF5555 0%, #F40091 100%);
  background-image: linear-gradient(90deg, #FF5555 0%, #F40091 100%);
  background-size: 300px;
  background-repeat: no-repeat;
  background-position: 0%;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out;
  border: 0px;
  position: absolute;
  font-size: 20px;
  font-weight:700;
  letter-spacing: 0.5px;
  line-height: 23px;
}
.v194_22_btn_moteur {
  width: 13%;
  height:59px;
  border-radius: 5px;
  background-color: #f40091;
  background-image: -moz-linear-gradient(90deg, #FF5555 0%, #F40091 100%);
  background-image: -webkit-linear-gradient(90deg, #FF5555 0%, #F40091 100%);
  background-image: linear-gradient(90deg, #FF5555 0%, #F40091 100%);
  background-size: 300px;
  background-repeat: no-repeat;
  background-position: 0%;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out;
  border: 0px;
  position: relative;
  font-size: 20px;
  font-weight:700;
  letter-spacing: 0.5px;
  line-height: 23px;
}
.v194_26 {
  border-radius: 4px;
  background-color: #f40091;
  background-image: -moz-linear-gradient(90deg, #FF5555 0%, #F40091 100%);
  background-image: -webkit-linear-gradient(90deg, #FF5555 0%, #F40091 100%);
  background-image: linear-gradient(90deg, #FF5555 0%, #F40091 100%);
  background-size: 300px;
  background-repeat: no-repeat;
  background-position: 0%;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out;
  border: 0px;
  margin-top:-2.2%;
  margin-left:-3.4%;
  position: absolute;
  font-size: 18px;
  font-weight:700;
  letter-spacing: 0.4px;
  line-height: 21px;
}
.v194_25 {
  color:#fff;
  width: 343px;
  height:48px;
  border-radius: 4px;
  border: 0px;
  margin-top:0%;
  margin-left:34%;
  position: absolute;
  font-size: 18px;
  font-weight:700;
  letter-spacing: 0.4px;
  line-height: 21px;
  border: 2px solid #FF0097 !important;
  cursor:pointer;
}
.v194_25:hover{
  color:#fff !important;
  background-color: #f40091;
  background-image: -moz-linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-image: -webkit-linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-image: linear-gradient(90deg, #F40091 0%, #F40091 100%);
}
.v194_25:hover img {
  content: url("https://tn.tunisiebooking.com/images/icone-moteur/ic_carte_bnc_white.svg"); /* Change the source image on hover */
}
.v194_25:hover p {
  color:#fff;
}

.v194_25.clicked{
  color:#fff !important;
  background-color: #f40091;
  background-image: -moz-linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-image: -webkit-linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-image: linear-gradient(90deg, #F40091 0%, #F40091 100%);
}
.v194_25.clicked img {
  content: url("https://tn.tunisiebooking.com/images/icone-moteur/ic_carte_bnc_white.svg"); /* Change the source image on hover */
}
.v194_25.clicked p {
  color:#fff;
}
.v194_26:hover{

  background-color: #f40091;
  background-image: -moz-linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-image: -webkit-linear-gradient(90deg, #F40091 0%, #F40091 100%);
  background-image: linear-gradient(90deg, #F40091 0%, #F40091 100%);
}

.notetrip {
  font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size:20px;
    line-height: 23px;
    color: #262626;
    margin-left: 0.5%;
    margin-top: 0.3%;
    position: absolute;
}
.span_tripadv {
  font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size:20px;
    line-height: 20px;
    color: #262626;
    margin-left: 0.5%;
    margin-top: 0.5%;
    position: absolute;
    text-align: center;
}
.span_tripadv_y{
  font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size:20px;
    line-height: 20px;
    color: #262626;
    margin-left: 3.2%;
    position: absolute;
    margin-top: 0.5%;
    text-align: center;
}
.notetrip{
  margin-left: 5.5%;
}

body {
background-color: #f5f5f5 !important;
/*background-image: url("https://tn.tunisiebooking.com/theme/images/bg.png");
background-repeat: repeat;*/
margin-bottom: 25px;
font-size: 13px;
/*line-height: 1.5em;*/
color: #444;
font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
margin:0px;
/*font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif;;*/
}
.slick-slide{ width:306!important; height:350px;background-color:#FFFFFF; }
.un_destination {
    width: 306px;
    height: 445px;
    float: left;
    margin-top: 20px;
    background-color: #FFFFFF;

}
.un_destination:hover {
  box-shadow: 0px 3px 6px 0px #555;
}

.destination1:hover {
  /*box-shadow: 0px 3px 6px 0px #555;*/
}
.un_destination1 {
    width: 306px!important;
    height: 445px;
    float: left;
    margin-top: 20px;
    background-color: #FFFFFF;
    /*box-shadow: 0px 3px 6px 0px #555;*/
}


.img_destination {
    width: 280px;
    /*height: 197px;*/
}
@media only screen and (min-width:1241px) and (max-width:1880px) {
  .equipement_active{
    padding-top:16% !important;
  }
  .avis_active{
    padding-top:7% !important;
  }
  .owl-up{
    display: none;
    margin-left: 86.2%
    position: fixed;
      width: 56px;
      height: 56px;
      left: 6px;
      top: 80%;
      background: #9D9D9D;
      border-radius: 90px;
      z-index: 9999;
  }
  .owl-up_active{
    cursor:pointer;
    margin-left: 86.2%;
    display:block;
    position: fixed;
      width: 56px;
      height: 56px;
      left: 6px;
      top: 80%;
      background: #9D9D9D;
      border-radius: 90px;
      z-index: 9999;
  }
  .bloc_date_arr{
    cursor:pointer;
    z-index:2;
    background-color: #fff;
    float: left;
    margin-left: 0%;
    font-size:16px;
    font-weight:bold;
    width: 207px;
    height: 53px;
    border-radius: 6px;
    border-left: 1.5px solid #262626;
    border-right: 1.5px solid #262626;
     border-top: 0.5px solid #262626;
    border-bottom: 0.5px solid #262626;
  }
  .bloc_date_dep{
    cursor:pointer;
    z-index: 2;
    background-color: #fff;
    float: left;
    font-size:16px;
    font-weight:bold;
    width: 204px;
    height: 53px;
    border-radius: 6px;
    border-left: 0.5px solid #262626;
    border-right: 0px solid #262626;
     border-top: 0.5px solid #262626;
    border-bottom: 0.5px solid #262626;
  }
  .bloc_repartition_chambre{
    cursor:pointer;
    float: left;
    font-size:16px;
    font-weight:bold;
    width: 304px;
    height: 53px;
    border-radius: 6px;
    border-left: 2px solid #262626;
    border-right: 1px solid #262626;
    border-top: 0.5px solid #262626;
    border-bottom: 0.5px solid #262626;
    z-index: 2;
    background-color: #fff;

  }
  .autre_hotels{
   background: #FFFFFF;
   box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13), 0px 0px 10px rgba(0, 0, 0, 0.13);
   border-radius: 2px;
   padding-top: 2%;
   margin-top:2%;
   height: max-content;
   padding-bottom: 2%;
  }
  #promosz{
    font-weight: 400 !important;
    font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
  }
  .chronoday {
     position: absolute;
     font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
     font-style: normal;
     font-weight:600;
     font-size: 14px;
     line-height: 17.58px;
     color: #FFFFFF;
     margin-left: 24%;
     padding-top: 1.8%;
  }
  .titley {
    background: rgba(255, 255, 255, 0.9);
    box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.24);
    border-radius: 1px;
    font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 13px;
    line-height: 13px;
    text-align: center;
    letter-spacing: 0.01em;
    color: #262626;
    padding: 10px;
    position: absolute;
    width: 83px;
    height: 85px;
    margin-left: 3%;
    margin-top: 47.5%;
  }
  .col_venteflash{
    top: 11%;
    left: 5%;
    width: 207px;
    height: 34px;
    position: absolute !important;
  }
  .entete_sous_menu{
   left: -3% !important;
  }
  .menu_detail{
    min-height: 78px !important;
  }
  .v153_33_presentation{
   width: 10.2%;
   opacity: 1;
   position: absolute;
   margin-top: -21.4%;
   left: 20.2%;
   border: 3px solid rgba(255,0,151,1);
   background: #FF0097;
   display: none;
 }
 .v153_33_equipements{
   width: 10.5%;
   opacity: 1;
   position: absolute;
   margin-top: -21.4%;
   left: 35.7%;
   border: 3px solid rgba(255,0,151,1);
   background: #FF0097;
   display:none;
 }
 .v153_33_liste_avis{
   width: 3.5%;
   opacity: 1;
   position: absolute;
   margin-top: -21.4%;
   left: 55%;
   border: 3px solid rgba(255,0,151,1);
   background: #FF0097;
   display: none;
 }
 .button_header{
   margin-left: -15%;
   padding-top: 1.7%;
 }
 .menu_detail{
   height: 27px;
 }
 .col_photos{
   cursor: pointer;
   position: absolute;
   width: 63px;
   height: 18px;
   left: 7%;
   margin-top: -24.5%;
 }
 .col_presentation{
   cursor:pointer;
   position: absolute;
   width: 132px;
   height: 18px;
   left: 19%;
   margin-top: -24.5%;
 }
 .col_equipements{
   cursor:pointer;
   position: absolute;
   width: 117px;
   height: 18px;
   left: 35.5%;
   margin-top: -24.5%;
 }
 .col_avis{
   cursor:pointer;
   position: absolute;
   width: 100px;
   height: 18px;
   left: 52%;
   margin-top: -24.5%;
 }
  #rep_ch{
    margin-top: 25%;
    margin-left:-4%;
  }
 .repations_chambres {
   right: -35% !important;
   margin-top: -66% ;
 }
 .tous_les_chambres {
   float: left;
   width: 37.5%;
   height: 100%;
   background-color: #fff;
   background: rgb(255, 255, 255);
   border-radius: 8px;
   box-shadow: rgba(38, 38, 38, 0.24) 0px 8px 16px;
   margin-top: 45%;
   margin-left: -14% !important;
   overflow-y: hidden;
   overflow-x: hidden;
   max-height:none;

 }
 .repartition_une_ch{
   float: left;
   width: 304px;
   height: 298px;
   border-right:none;
 }
 .v194_22{
   width: 280px !important;
   margin-top: -239% ;
   margin-left: -883.1% ;
   z-index:1000;
 }
 .v194_22_btn_moteur{
   width: 59px !important;
   margin-top: -239% ;
   margin-left: -883.1% ;
   z-index:1;
 }
 .v194_29{
   width: 286px !important;
   margin-top: -239% ;
   margin-left: -883.1% ;
   z-index:1000;
 }
 .v_tarif_dsp_moteur{
   height:47px !important;
   margin-top: -249% !important;
   margin-left: -577% !important;
 }
 .v194_23{
   margin-top: 61%;
   width: 20% !important;
   left: 179.5% !important;
	 z-index: -1;
 }
 .v194_27{
   margin-top: 51%;
   width: 20% !important;
   left: 186% !important;
 }
 .v194_27_btn{
   margin-top: 51.5%;
   width: 20% !important;
   left: 187% !important;
 }
 .v194_27_btn_moteur{
   margin-top: 44.5%;
   width: 20% !important;
   left: 248% !important;
 }
 .v194_28 {
   color: rgba(255,255,255,1);
   position: relative;
   font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
   font-weight: Bold;
   font-size: 18px;
   opacity: 1;
   text-align: left;
   display:none;
 }
 .v194_28:hover {
   color: rgba(255,255,255,1);
   position: relative;
   font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
   font-weight: Bold;
   font-size: 18px;
   opacity: 1;
   text-align: left;
 }
 .v194_28{
   margin-top:30.5%;
   width: 20% !important;
   left: 188.5% !important;
 }
 .v_terminer_ch{
   height:47px !important;
   margin-top: 239% !important;
   margin-left: -913% !important;
   font-size: 16px !important;
   font-weight: 500 !important;
   text-align: center;
   padding-top:19%;
 }
 .slick-prev{
   margin-left: -1.8%
 }
 .slick-next{
   margin-right: 1.2%
 }
 .slick-prev:before{
   display: inline-flex !important;
   content: '';
   background-image: url('https://tn.tunisiebooking.com/flech-left.svg') !important;
   background-size: 43px 43px !important;
   height: 43px !important ;
   width: 43px !important;
   border-radius: 46px;
 }
 .slick-next:before{
   display: inline-flex !important;
   content: '';
   background-image: url('https://tn.tunisiebooking.com/images/icone-moteur/flechslide-gris.svg') !important;
   background-size: 9px 48px !important;
   height: 43px !important;
   width: 43px !important;
   border-radius: 46px;
   background-position: 57% 44%;
   background-repeat: no-repeat;
 }
 .v37_74 {
   width: 20%;
   color: rgba(0,0,0,1);
   position: absolute;
   top: 13px;
   left: 43px;
   font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
   font-weight: Medium;
   font-size: 15px;
   opacity: 1;
   text-align: left;
 }
 .v37_74_col_arr {
  width: 100%;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 13px;
  left: 43px;
  font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  font-weight: Medium;
  font-size: 15px;
  opacity: 1;
  text-align: left;
}
.v37_74_col_dep{
  width: 100%;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 13px;
  left: 45px;
  font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
  font-weight: Medium;
  font-size: 15px;
  opacity: 1;
  text-align: left;
}
 .v37_74_dep{
   width: 20%;
   color: rgba(0,0,0,1);
   position: absolute;
   top: 13px;
   left: 253px;
   font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
   font-weight: Medium;
   font-size: 15px;
   opacity: 1;
   text-align: left;
 }
 .v37_75 {
   width: 44px;
   color: rgba(107,107,107,1);
   position: absolute;
   top: 5px;
   left: 48px;
   font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
   font-weight: 400;
   font-size: 14px;
   opacity: 1;
   text-align: left;
   -webkit-font-smoothing: antialiased;
 }
 .v37_75_dep {
    width: 44px;
    color: rgba(107,107,107,1);
    position: absolute;
    top: 5px;
    left: 35.5%;
    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-weight: 400;
    font-size: 14px;
    opacity: 1;
    text-align: left;
   -webkit-font-smoothing: antialiased;
 }
 .v162_15 {
   width: 16px;
   height: 29px;
   opacity: 1;
   position: absolute;
   top: 16px;
   left: 96%;
   overflow: hidden;
 }
 .v162_15_repch {
   width: 16px;
   height: 29px;
   opacity: 1;
   position: absolute;
   top: 26%;
   left: 91%;
   overflow: hidden;
 }
 /*style form*/
 .v312_1355 {
   width: 100%;
   min-height: 115px;
   background: url();
   background-repeat: no-repeat;
   background-position: center center;
   background-size: cover;
   opacity: 1;
   position: relative;
   top: -18%;
   left: 0px;
   overflow: hidden;
   margin-bottom: 2%;
   padding-top: 1%;
 }
 .v37_34 {
   width: 97% !important;
   height: 87px;
   background: url();
   background-repeat: no-repeat;
   background-position: center center;
   background-size: cover;
   opacity: 1;
   position: absolute;
   left: 1.5%;
   overflow: hidden;
   background: #fff !important;
   border: 1.4px solid #262626;
   box-shadow: 0px 4px 16px 0px rgba(38, 38, 38, 0.1);
   border-radius: 4px;
 }
 .v37_67 {
    width: 72.5%;
    height: 55px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 17px;
    left: -1.5%;
    overflow: hidden;
 }
 .v37_72{
   width: 58.2%;
   height: 55px;
   background-repeat: no-repeat;
   background-position: center center;
   background-size: cover;
   opacity: 1;
   position: relative;
   top: 0px;
   left: 2.4%;
   overflow: hidden;
 }
 .v37_73 {
   cursor: pointer;
   width: 192px !important;
   height: 50px;
   background: #f3f5f7;
   opacity: 1;
   position: relative;
   top: 0px;
   left: 8px !important;
   border: 1.2px solid #DDDDDD;
   border-radius: 4px;
   overflow: hidden;
 }
 .colonne_depart{
   cursor:pointer;
   width: 192px;
   height: 50px;
   background: rgba(243,245,247,1);
   opacity: 1;
   position: relative;
   top: -90%;
   left: 48% ;
   border-radius: 4px;
   overflow: hidden;
   border:1.2px solid #DDDDDD;
 }
 .colonne_destination{
   width: 305px;
   height: 50px;
   background: rgba(243,245,247,1);
   opacity: 1;
   position: relative;
   top: -100%;
   left: 57%;
   border: 1.2px solid #DDDDDD;
   border-radius: 4px;
   overflow: hidden;
 }
 /* end style form */


}
@media only screen  and (min-width : 1881px) {
  .equipement_active{
    padding-top:16% !important;
  }
  .avis_active{
    padding-top:7% !important;
  }
  .owl-up{
    display: none;
    margin-left: 83.2%
    position: fixed;
      width: 56px;
      height: 56px;
      left: 6px;
      top: 80%;
      background: #9D9D9D;
      border-radius: 90px;
      z-index: 9999;
  }
  .owl-up_active{
    cursor:pointer;
    margin-left: 83.2%;
    display:block;
    position: fixed;
      width: 56px;
      height: 56px;
      left: 6px;
      top: 80%;
      background: #9D9D9D;
      border-radius: 90px;
      z-index: 9999;
  }
  .bloc_date_arr{
    cursor:pointer;
    z-index:2;
    background-color: #fff;
    float: left;
    margin-left: 0%;
    font-size:16px;
    font-weight:bold;
    width: 207px;
    height: 53px;
    border-radius: 6px;
    border-left: 1.5px solid #262626;
    border-right: 1px solid #262626;
    border-top: 1.5px solid #262626;
    border-bottom: 1.5px solid #262626;
  }
  .bloc_date_dep{
    cursor:pointer;
    z-index: 2;
    background-color: #fff;
    float: left;
    font-size:16px;
    font-weight:bold;
    width: 204px;
    height: 53px;
    border-radius: 6px;
    border-left: 1px solid #262626;
    border-right: 0px solid #262626;
    border-top: 1.5px solid #262626;
    border-bottom: 1.5px solid #262626;
  }
  .bloc_repartition_chambre{
    cursor:pointer;
    float: left;
    font-size:16px;
    font-weight:bold;
    width: 304px;
    height: 53px;
    border-radius: 6px;
    border-left: 2px solid #262626;
    border-right: 0px solid #262626;
    border-top: 1.5px solid #262626;
    border-bottom: 1.5px solid #262626;
    z-index: 2;
    background-color: #fff;

  }
  /*style form*/
  .v312_1355 {
    width: 100%;
    min-height: 115px;
    background: url();
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: relative;
    top: -18%;
    left: 0px;
    overflow: hidden;
    margin-bottom: 2%;
    padding-top: 1%;
  }
  .v37_34 {
    width: 97% !important;
    height: 87px;
    background: url();
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    /*margin-top: 2% !important;*/
    left: 1.5%;
    overflow: hidden;
    background: #fff !important;
    border: 1.4px solid #262626;
    box-shadow: 0px 4px 16px 0px rgba(38, 38, 38, 0.1);
    border-radius: 4px;
  }
  .v37_67 {
    width: 72.5%;
    height: 55px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 19px;
    left: -1%;
    overflow: hidden;
  }
   .v37_72{
     width: 58.2%;
     height: 55px;
     background-repeat: no-repeat;
     background-position: center center;
     background-size: cover;
     opacity: 1;
     position: relative;
     top: 0px;
     left: 2.4%;
     overflow: hidden;
   }
   .v37_73 {
     cursor: pointer;
     width: 192px !important;
     height: 50px;
     background: #f3f5f7;
     opacity: 1;
     position: relative;
     top: 0px;
     left: 8px !important;
     border: 1.2px solid #DDDDDD;
     border-radius: 4px;
     overflow: hidden;
  }
  .colonne_depart{
    cursor:pointer;
    width: 192px;
    height: 50px;
    background: rgba(243,245,247,1);
    opacity: 1;
    position: relative;
    top: -90%;
    left: 48% ;
    border-radius: 4px;
    overflow: hidden;
    border:1.2px solid #DDDDDD;
  }
  .colonne_destination{
    width: 305px;
    height: 50px;
    background: rgba(243,245,247,1);
    opacity: 1;
    position: relative;
    top: -100%;
    left: 57%;
    border: 1.2px solid #DDDDDD;
    border-radius: 4px;
    overflow: hidden;
  }
  .v194_27_btn{
    margin-top: 51.5%;
    width: 20% !important;
    left: 187% !important;
  }
  /* end style form */
  .v153_33_presentation{
    width: 10.2%;
    opacity: 1;
    position: absolute;
    margin-top: -22.3%;
    left: 20%;
    border: 3px solid rgba(255,0,151,1);
    background: #FF0097;
    display: none;
  }
  .v153_33_equipements{
    width: 10.5%;
    opacity: 1;
    position: absolute;
    margin-top: -22.3%;
    left: 35.7%;
    border: 3px solid rgba(255,0,151,1);
    background: #FF0097;
    display:none;
  }
  .v153_33_liste_avis{
    width: 3.5%;
    opacity: 1;
    position: absolute;
    margin-top: -22.3%;
    left: 55%;
    border: 3px solid rgba(255,0,151,1);
    background: #FF0097;
    display: none;
  }
  .button_header{
    margin-left: -15%;
  }
  .menu_detail{
    height: 27px;
  }
  .col_photos{
    cursor:pointer;
    position: absolute;
    width: 63px;
    height: 18px;
    left: 7%;
    margin-top: -25%;
  }
  .col_presentation{
    cursor:pointer;
    position: absolute;
    width: 132px;
    height: 18px;
    left: 19%;
    margin-top: -25%;
  }
  .col_equipements{
    cursor:pointer;
    position: absolute;
    width: 117px;
    height: 18px;
    left: 35.5%;
    margin-top: -25%;
  }
  .col_avis{
    cursor:pointer;
    position: absolute;
    width: 100px;
    height: 18px;
    left: 52%;
    margin-top: -25%;
  }
  #rep_ch{
    margin-top: 27%;
  }
  .repations_chambres {
    right: -36% !important;
    margin-top: -66% ;
  }
  .tous_les_chambres {
    float: left;
    width: 37.5%;
    height: 100%;
    background-color: #fff;
    background: rgb(255, 255, 255);
    border-radius: 8px;
    box-shadow: rgba(38, 38, 38, 0.24) 0px 8px 16px;
    margin-top: 43%;
    margin-left: -20%;
    overflow-y: hidden;
    overflow-x: hidden;
    max-height:none;

  }
  .repartition_une_ch{
    float: left;
    width: 304px;
    height: 298px;
    border-right:none;
  }
  .v194_22{
    width: 280px !important;
    margin-top: -239% ;
    margin-left: -883.1% ;
    z-index:1000;
  }
  .v194_22_btn_moteur{
    width: 59px !important;
    margin-top: -239% ;
    margin-left: -883.1% ;
    z-index:1;
  }
  .v194_29{
    width: 286px !important;
    margin-top: -239% ;
    margin-left: -883.1% ;
    z-index:1000;
  }
  .v_tarif_dsp_moteur{
    height:50px !important;
    margin-top: -249% !important;
    margin-left: -577% !important;
  }
  .v194_23{
    margin-top: 61%;
    width: 20% !important;
    left: 179.5% !important;
		z-index: -1;
  }
  .v194_27{
    margin-top: 52.5%;
    width: 20% !important;
    left: 186% !important;
  }


  .v194_27_btn_moteur{
    margin-top: 44.5%;
    width: 20% !important;
    left: 248% !important;
  }
  .v194_28 {
    color: rgba(255,255,255,1);
    position: relative;
    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-weight: Bold;
    font-size: 18px;
    opacity: 1;
    text-align: left;
    display: none;
  }
  .v194_28{
    margin-top:30.5%;
    width: 20% !important;
    left: 187.5% !important;
  }
  .v_terminer_ch{
    height:47px !important;
    margin-top: 239% !important;
    margin-left: -906% !important;
    font-size: 16px !important;
    font-weight: 500 !important;
    text-align: center;
    padding-top:19%;
  }
  #promosz{
    font-weight: 400 !important;
    font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
  }
  .chronoday {
    position: absolute;
    font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight:600;
    font-size: 14px;
    line-height: 17.58px;
    color: #FFFFFF;
    margin-left: 26%;
    padding-top: 1.8%;
  }
  .titley {
    background: rgba(255, 255, 255, 0.9);
    box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.24);
    border-radius: 1px;
    font-family: -apple-system, "Roboto", Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 13px;
    line-height: 13px;
    text-align: center;
    letter-spacing: 0.01em;
    color: #262626;
    padding: 10px;
    position: absolute;
    width: 83px;
    height: 85px;
    margin-left: 3%;
    margin-top: 47.5%;
  }
  .col_venteflash{
    top: 11%;
    left: 5%;
    width: 207px;
    height: 34px;
    position: absolute !important;
  }
  .slick-prev{
    margin-left: -1.8%
  }
  .slick-next{
    margin-right: 1.2%
  }
  .slick-prev:before{
    display: inline-flex !important;
    content: '';
    background-image: url('https://tn.tunisiebooking.com/images/icone-moteur/flechslide-gris.svg') !important;
    background-size: 9px 48px !important;
    height: 43px !important ;
    width: 43px !important;
    border-radius: 46px;
    background-position: 57% 44%;
    background-repeat: no-repeat;
    transform: rotate(180deg);
  }
  .slick-next:before{
    display: inline-flex !important;
    content: '';
    background-image: url('https://tn.tunisiebooking.com/images/icone-moteur/flechslide-gris.svg') !important;
    background-size: 9px 48px !important;
    height: 43px !important ;
    width: 43px !important;
    border-radius: 46px;
    background-position: 57% 44%;
    background-repeat: no-repeat;
  }
  .v37_74 {
    width: 20%;
    color: rgba(0,0,0,1);
    position: absolute;
    top: 13px;
    left: 43px;
    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-weight: Medium;
    font-size: 15px;
    opacity: 1;
    text-align: left;
  }
  .v37_74_col_arr {
    width: 100%;
    color: rgba(0,0,0,1);
    position: absolute;
    top: 13px;
    left: 43px;
    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-weight: Medium;
    font-size: 15px;
    opacity: 1;
    text-align: left;
  }
  .v37_74_col_dep{
    width: 100%;
    color: rgba(0,0,0,1);
    position: absolute;
    top: 13px;
    left: 45px;
    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-weight: Medium;
    font-size: 15px;
    opacity: 1;
    text-align: left;
  }
  .v37_74_dep{
    width: 20%;
    color: rgba(0,0,0,1);
    position: absolute;
    top: 13px;
    left: 253px;
    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-weight: Medium;
    font-size: 15px;
    opacity: 1;
    text-align: left;
  }
  .v37_75 {
     width: 44px;
     color: rgba(107,107,107,1);
     position: absolute;
     top: 5px;
     left: 48px;
     font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
     font-weight: 400;
     font-size: 14px;
     opacity: 1;
     text-align: left;
    -webkit-font-smoothing: antialiased;
  }
  .v37_75_dep {
     width: 44px;
     color: rgba(107,107,107,1);
     position: absolute;
     top: 5px;
     left: 35.5%;
     font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
     font-weight: 400;
     font-size: 14px;
     opacity: 1;
     text-align: left;
    -webkit-font-smoothing: antialiased;
  }
  .v162_15 {
    width: 16px;
    height: 29px;
    opacity: 1;
    position: absolute;
    top: 26%;
    left: 96%;
    overflow: hidden;
  }
  .v162_15_repch {
   width: 16px;
   height: 29px;
   opacity: 1;
   position: absolute;
   top: 31%;
   left: 91%;
   overflow: hidden;
 }
  .v64_170 {
    width: 301px;
    color: rgba(0,0,0,1);
    position: absolute;
    top: 9px;
    left: 16px;
    font-family: Roboto,sans-serif;
    font-weight: Regular;
    font-size: 15px;
    opacity: 1;
    text-align: left;
  }


}

</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;457;500;600;700&display=swap">
<link rel="stylesheet" type="text/css" href="https://tn.tunisiebooking.com/theme/styles/datepicker_detail.css"  />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
<meta property="og:locale" content="fr_FR" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z1XN6CSX2D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z1XN6CSX2D');
</script>

<script>
window.dataLayer = window.dataLayer || [];

</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5VPNTQ');</script>
<!-- End Google Tag Manager -->
<script>

gtag("event", "view_item", {


    items: [
     {
      item_id: "36",
      item_name: "Houda Yasmine Hammamet",

      item_brand: "Hotel"

    }
   ]
});
</script>
<script type="application/ld+json">{"@context":"https://schema.org",
"@type":"FAQPage",
"mainEntity":[{"@type":"Question","name":"Quels sont les équipements de l'établissement Yasmine Hammamet ?",
"acceptedAnswer":{"@type":"Answer","text":"Dans cet h&ocirc;tel vous aurez droit &agrave; :- Parking- Wi-fi- Piscine- Centre de remise en forme- Salle de sport- Court de tennis<a href=https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html> Voir tous les &eacute;quipements</a>."}},
{"@type":"Question","name":"Quelles sont les activités proposées par Yasmine Hammamet ?",
"acceptedAnswer":{"@type":"Answer","text":"L'&eacute;tablissement propose des activit&eacute;s pour les petits et les grands : - Piscines - Salle de sport- Bateau &agrave; moteur- Discoth&egrave;que- Aires de jeux- Court de tennis <a href=https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html> Voir toutes les activit&eacute;s</a>."}},
{"@type":"Question","name":"Quel est le tarif moyen d'une nuitée à l'établissement ?",
"acceptedAnswer":{"@type":"Answer","text":"La nuit&eacute;e chez Houda Yasmine est en moyenne de 30 euros. <a href=https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html>En savoir plus</a>."}},
{"@type":"Question","name":"Quel type de chambre propose cet établissement ?",
"acceptedAnswer":{"@type":"Answer","text":"Avec ses 250 chambres r&eacute;parties sur plusieurs &eacute;tages cet h&ocirc;tel s'adapte &agrave; tous vos besoins et propose :- Chambres standards- Chambres triples- Chambres Quadruples<a href=https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html> En savoir plus</a>."}},
{"@type":"Question","name":"Quelles sont les lieux d'attractions appréciés proche de l'hôtel ?",
"acceptedAnswer":{"@type":"Answer","text":"Id&eacute;al pour des vacances en famille, Houda Hammamet profite d'une belle situation g&eacute;ographique. L'&eacute;tablissement se trouve seulement &agrave; quelques minutes &agrave; pieds de : - Zizou Paintball club - Port Yasmine<a href=https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html> Voir toutes les attractions &agrave; proximit&eacute;</a>."}},
{"@type":"Question","name":"Y-a-t-il un centre de thalasso et spa à Houda Hammamet ?",
"acceptedAnswer":{"@type":"Answer","text":"Etablissement &eacute;toil&eacute;, propose un centre de remise en forme et des salles de massages &agrave; ses pensionnaires. Outre les 3 salles de soins, vous aurez &eacute;galement droit &agrave; des soins manucures et p&eacute;dicures.&nbsp;<a href=https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html>En savoir plus</a>."}},
{"@type":"Question","name":"Quels sont les restaurants proches de l'hôtel ?",
"acceptedAnswer":{"@type":"Answer","text":"Pour gouter &agrave; quelques sp&eacute;cialit&eacute;s internationales, on vous recommande le Dar-Elezz qui propose un menu sous forme de buffet.&nbsp;<a href=https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html>Voir tous les restaurants &agrave; proximit&eacute;</a>."}},
{"@type":"Question","name":"Y a-t-il des sites historiques à visiter proche de l'hôtel ?",
"acceptedAnswer":{"@type":"Answer","text":"Choisir Houda Yasmine comme h&eacute;bergement vous donne acc&egrave;s facile au :- Fort de Hammamet - Statue des Sir&egrave;nes qui ne se trouvent qu'&agrave; quelques minutes &agrave; pieds. <a href=https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html> Voir tous les sites historiques &agrave; proximit&eacute;</a>."}},
{"@type":"Question","name":"L'hôtel Houda Yasmine propose-t-il une navette d'aéroport Voir tous les sites historiques à proximité ?",
"acceptedAnswer":{"@type":"Answer","text":"Oui, et ce, &agrave; l'arriv&eacute;e comme au d&eacute;part. Mais elle est payante. <a href=https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html>En savoir plus</a>."}},
{"@type":"Question","name":"Quels sont les horaires d'arrivée et de départ à l'établissement ?",
"acceptedAnswer":{"@type":"Answer","text":"L'&eacute;tablissement est ouvert 24 h/24 pour accueillir les touristes. Par contre, il vous faudra lib&eacute;rer les chambres avant midi pour le d&eacute;part au risque de devoir payer une nuit&eacute;e de plus. <a href=https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html>En savoir plus</a>."}}
	]}</script><!--FAQPage Code Generated by https://saijogeorge.com/json-ld-schema-generator/faq/>-->
	
<!--<script>
(function(w) {
  "use strict";
  w.matchMedia = w.matchMedia || function(doc, undefined) {
    var bool, docElem = doc.documentElement, refNode = docElem.firstElementChild || docElem.firstChild, fakeBody = doc.createElement("body"), div = doc.createElement("div");
    div.id = "mq-test-1";
    div.style.cssText = "position:absolute;top:-100em";
    fakeBody.style.background = "none";
    fakeBody.appendChild(div);
    return function(q) {
      div.innerHTML = '&shy;<style media="' + q + '"> #mq-test-1 { width: 42px; }</style>';
      docElem.insertBefore(fakeBody, refNode);
      bool = div.offsetWidth === 42;
      docElem.removeChild(fakeBody);
      return {
        matches: bool,
        media: q
      };
    };
  }(w.document);
})(this);

(function(w) {
  "use strict";
  var respond = {};
  w.respond = respond;
  respond.update = function() {};
  var requestQueue = [], xmlHttp = function() {
    var xmlhttpmethod = false;
    try {
      xmlhttpmethod = new w.XMLHttpRequest();
    } catch (e) {
      xmlhttpmethod = new w.ActiveXObject("Microsoft.XMLHTTP");
    }
    return function() {
      return xmlhttpmethod;
    };
  }(), ajax = function(url, callback) {
    var req = xmlHttp();
    if (!req) {
      return;
    }
    req.open("GET", url, true);
    req.onreadystatechange = function() {
      if (req.readyState !== 4 || req.status !== 200 && req.status !== 304) {
        return;
      }
      callback(req.responseText);
    };
    if (req.readyState === 4) {
      return;
    }
    req.send(null);
  }, isUnsupportedMediaQuery = function(query) {
    return query.replace(respond.regex.minmaxwh, "").match(respond.regex.other);
  };
  respond.ajax = ajax;
  respond.queue = requestQueue;
  respond.unsupportedmq = isUnsupportedMediaQuery;
  respond.regex = {
    media: /@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi,
    keyframes: /@(?:\-(?:o|moz|webkit)\-)?keyframes[^\{]+\{(?:[^\{\}]*\{[^\}\{]*\})+[^\}]*\}/gi,
    comments: /\/\*[^*]*\*+([^/][^*]*\*+)*\//gi,

    urls: /(url\()['"]?([^\/\)'"][^:\)']+)['"]?(\))\//,
    findStyles: /@media *([^\{]+)\{([\S\s]+?)$/,
    only: /(only\s+)?([a-zA-Z]+)\s?/,
    minw: /\(\s*min\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/,
    maxw: /\(\s*max\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/,
    minmaxwh: /\(\s*m(in|ax)\-(height|width)\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/gi,
    other: /\([^\)]*\)/g
  };
  respond.mediaQueriesSupported = w.matchMedia && w.matchMedia("only all") !== null && w.matchMedia("only all").matches;
  if (respond.mediaQueriesSupported) {

    return;
  }
  var doc = w.document, docElem = doc.documentElement, mediastyles = [], rules = [], appendedEls = [], parsedSheets = {}, resizeThrottle = 30, head = doc.getElementsByTagName("head")[0] || docElem, base = doc.getElementsByTagName("base")[0], links = head.getElementsByTagName("link"), lastCall, resizeDefer, eminpx, getEmValue = function() {
    var ret, div = doc.createElement("div"), body = doc.body, originalHTMLFontSize = docElem.style.fontSize, originalBodyFontSize = body && body.style.fontSize, fakeUsed = false;
    div.style.cssText = "position:absolute;font-size:1em;width:1em";
    if (!body) {
      body = fakeUsed = doc.createElement("body");
      body.style.background = "none";
    }
    docElem.style.fontSize = "100%";
    body.style.fontSize = "100%";
    body.appendChild(div);
    if (fakeUsed) {
      docElem.insertBefore(body, docElem.firstChild);
    }
    ret = div.offsetWidth;
    if (fakeUsed) {
      docElem.removeChild(body);
    } else {
      body.removeChild(div);
    }
    docElem.style.fontSize = originalHTMLFontSize;
    if (originalBodyFontSize) {
      body.style.fontSize = originalBodyFontSize;
    }
    ret = eminpx = parseFloat(ret);
    return ret;
  }, applyMedia = function(fromResize) {
    var name = "clientWidth", docElemProp = docElem[name], currWidth = doc.compatMode === "CSS1Compat" && docElemProp || doc.body[name] || docElemProp, styleBlocks = {}, lastLink = links[links.length - 1], now = new Date().getTime();
    if (fromResize && lastCall && now - lastCall < resizeThrottle) {
      w.clearTimeout(resizeDefer);
      resizeDefer = w.setTimeout(applyMedia, resizeThrottle);
      return;
    } else {
      lastCall = now;
    }
    for (var i in mediastyles) {
      if (mediastyles.hasOwnProperty(i)) {
        var thisstyle = mediastyles[i], min = thisstyle.minw, max = thisstyle.maxw, minnull = min === null, maxnull = max === null, em = "em";
        if (!!min) {
          min = parseFloat(min) * (min.indexOf(em) > -1 ? eminpx || getEmValue() : 1);
        }
        if (!!max) {
          max = parseFloat(max) * (max.indexOf(em) > -1 ? eminpx || getEmValue() : 1);
        }
        if (!thisstyle.hasquery || (!minnull || !maxnull) && (minnull || currWidth >= min) && (maxnull || currWidth <= max)) {
          if (!styleBlocks[thisstyle.media]) {
            styleBlocks[thisstyle.media] = [];
          }
          styleBlocks[thisstyle.media].push(rules[thisstyle.rules]);
        }
      }
    }
    for (var j in appendedEls) {
      if (appendedEls.hasOwnProperty(j)) {
        if (appendedEls[j] && appendedEls[j].parentNode === head) {
          head.removeChild(appendedEls[j]);
        }
      }
    }
    appendedEls.length = 0;
    for (var k in styleBlocks) {
      if (styleBlocks.hasOwnProperty(k)) {
        var ss = doc.createElement("style"), css = styleBlocks[k].join("\n");
        ss.type = "text/css";
        ss.media = k;
        head.insertBefore(ss, lastLink.nextSibling);
        if (ss.styleSheet) {
          ss.styleSheet.cssText = css;
        } else {
          ss.appendChild(doc.createTextNode(css));
        }
        appendedEls.push(ss);
      }
    }
  }, translate = function(styles, href, media) {
    var qs = styles.replace(respond.regex.comments, "").replace(respond.regex.keyframes, "").match(respond.regex.media), ql = qs && qs.length || 0;
    href = href.substring(0, href.lastIndexOf("/"));
    var repUrls = function(css) {
      return css.replace(respond.regex.urls, "$1" + href + "$2$3");
    }, useMedia = !ql && media;
    if (href.length) {
      href += "/";
    }
    if (useMedia) {
      ql = 1;
    }
    for (var i = 0; i < ql; i++) {
      var fullq, thisq, eachq, eql;
      if (useMedia) {
        fullq = media;
        rules.push(repUrls(styles));
      } else {
        fullq = qs[i].match(respond.regex.findStyles) && RegExp.$1;
        rules.push(RegExp.$2 && repUrls(RegExp.$2));
      }
      eachq = fullq.split(",");
      eql = eachq.length;
      for (var j = 0; j < eql; j++) {
        thisq = eachq[j];
        if (isUnsupportedMediaQuery(thisq)) {
          continue;
        }
        mediastyles.push({
          media: thisq.split("(")[0].match(respond.regex.only) && RegExp.$2 || "all",
          rules: rules.length - 1,
          hasquery: thisq.indexOf("(") > -1,
          minw: thisq.match(respond.regex.minw) && parseFloat(RegExp.$1) + (RegExp.$2 || ""),
          maxw: thisq.match(respond.regex.maxw) && parseFloat(RegExp.$1) + (RegExp.$2 || "")
        });
      }
    }
    applyMedia();
  }, makeRequests = function() {
    if (requestQueue.length) {
      var thisRequest = requestQueue.shift();
      ajax(thisRequest.href, function(styles) {
        translate(styles, thisRequest.href, thisRequest.media);
        parsedSheets[thisRequest.href] = true;
        w.setTimeout(function() {
          makeRequests();
        }, 0);
      });
    }
  }, ripCSS = function() {
    for (var i = 0; i < links.length; i++) {
      var sheet = links[i], href = sheet.href, media = sheet.media, isCSS = sheet.rel && sheet.rel.toLowerCase() === "stylesheet";
      if (!!href && isCSS && !parsedSheets[href]) {
        if (sheet.styleSheet && sheet.styleSheet.rawCssText) {
          translate(sheet.styleSheet.rawCssText, href, media);
          parsedSheets[href] = true;
        } else {
          if (!/^([a-zA-Z:]*\/\/)/.test(href) && !base || href.replace(RegExp.$1, "").split("/")[0] === w.location.host) {
            if (href.substring(0, 2) === "//") {
              href = w.location.protocol + href;
            }
            requestQueue.push({
              href: href,
              media: media
            });
          }
        }
      }
    }
    makeRequests();
  };
  ripCSS();
  respond.update = ripCSS;
  respond.getEmValue = getEmValue;
  function callMedia() {
    applyMedia(true);
  }
  if (w.addEventListener) {
    w.addEventListener("resize", callMedia, false);
  } else if (w.attachEvent) {
    w.attachEvent("onresize", callMedia);
  }
})(this);
</script>-->
<meta property="og:title" content="Houda Yasmine Hammamet à prix promos" />
<meta property="og:category" content="4 etoiles" />
<meta property="og:description" content="Hotel Houda Yasmine Hammamet parmi les meilleurs hôtels Tunisie: hotel hammametCet hotel se situe en plein centre de la zone touristique de&nbsp;Yasmine Hammamet, en face de la Marina et &agrave; seulement 200 m&egrave;tres de la plage ainsi que du port de plaisance." />
<link rel="canonical" href="https://tn.tunisiebooking.com/detail_hotel_36/"/>
<meta property="og:url" content="https://tn.tunisiebooking.com/detail_hotel_36/" />
<meta property="og:image" content="https://image.resabooking.com/images/image_panoramique/Houda_Yasmine_Hammamet_3.jpg" />
<meta property="fb:page_id" content="311740685604449"/>
<link rel="alternate" href="https://tn.tunisiebooking.com/detail_hotel_36/" hreflang="fr-tn" />
<link rel="alternate" href="https://www.tunisiebooking.com/hotel-tunisie/hammamet/hotels/hotel-houda-yasmine-hammamet-hammamet.html" hreflang="fr-fr" />
<meta property="og:site_name" content="tunisiebooking" />
<meta property="fb:app_id" content="1407266759536593" />
<meta property="og:type"   content="viptunisiebooking:hotels" />
<script>
/****lazy loading ****/
document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;
  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");

    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) {
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})
</script>


<script src="https://tn.tunisiebooking.com/theme/js/jquery.min_detail.js" type="text/javascript"></script>
<script type="text/javascript" src="https://tn.tunisiebooking.com/theme/js/bootstrape.min.js" ></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://tn.tunisiebooking.com/theme/js/datepicker_cal.js" defer></script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "url": "https://tn.tunisiebooking.com/",
  "logo": "https://tn.tunisiebooking.com/images/logo31.png"
}
</script>
</head>
<body style="overflow-x: hidden;"  class="home page page-id-1946 page-template page-template-template-home-php no-font-smoothing">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5222931-5', 'auto');
  ga('send', 'pageview');

</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VPNTQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="fb-root"></div>
<div id="bulle" class="infobulle" style="margin-top:20px; margin-left:-70px;"></div>
<div id="menuresp">

<nav class="navbar navbar-default navbar-static">

        <div class="navbar-header">
            <button class="navbar-toggle" style="display:none;" type="button" data-toggle="collapse" data-target="#b-menu-2">
            
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
		
		 <a id="btn-phoneMobile" class="btn-phoneMobile visible-xs" style="border: 1px solid transparent;
border-radius: 4px;  float:right"title="Appeler" href="tel:71 124 124"><img src="https://tn.tunisiebooking.com/theme/images/phone22.png" style="border:0px; display:none;" alt="hotligne"></a>
			
        </div>
		 
 <ul id="image" class="nav navbar-nav navbar-left">
           <a href="https://tn.tunisiebooking.com/" >  <img src="https://tn.tunisiebooking.com/theme/images/logo.png"  id="image" alt="hotligne"></a>
		   
          </ul>
		  
		
        <!-- submenu elements for #b-menu-2 -->
        <!-- /.nav-collapse -->
		
      </nav>
</div>
<div id="menuresp1">


				<style>
	    			/*	.row>* {
	    				    flex-shrink: 0;
	    				    width: 100%;
	    				    max-width: 100%;
	    				    padding-right: calc(var(--bs-gutter-x)/ 2);
	    				    padding-left: calc(var(--bs-gutter-x)/ 2);
	    				    margin-top: var(--bs-gutter-y);
	    				}*/
	              .navbar-expand-md .navbar-nav {
	    					    flex-direction: row;
	    					}
						    .navbar-nav {
							    display: flex;
							    flex-direction: column;
							    padding-left: 0;
							    margin-bottom: 0;
							    list-style: none;
						    }
						    .navbar {
						      flex-direction: row;
						      position: relative;
						      display: flex;
						      flex-wrap: wrap;
						      align-items: center;
						      justify-content: space-between;
						      padding-top: 0.5rem;
						      padding-bottom: 0.5rem;
						    }
						    .mega-dropdown {
						    	position: static!important;
						    }
								.nav-item {
							    cursor: pointer;
								}
		    				.list-group-item-action:focus, .list-group-item-action:hover {
			    				z-index: 1;
			    				color: #495057;
			    				text-decoration: none;
			    				background-color: rgb(243, 245, 247) !important;
		    				}
		    				#nav_hotel{
		    					border-bottom: none !important;
		    				}
								.rows>* {
								    flex-shrink: 0;
								    width: 100%;
								    max-width: 100%;
								    padding-right: calc(var(--bs-gutter-x)/ 2);
								    padding-left: calc(var(--bs-gutter-x)/ 2);
								    margin-top: var(--bs-gutter-y);
								}
	              @media only screen and (min-width:1241px) and (max-width:1880px) {
									.sou_bodym {
										 width: 100%;
										 height: 70px;
										 background-color: #fff;
										 margin-bottom: 14%;
										 box-shadow: inset 0 -5px 5px -5px rgba(0,0,0,0.5);
									 }
									 .menu{
										 min-height: 69px !important;
									 }
									 .logo{
										 z-index: 3;
										 float: left;
										 margin-left: -36%;
										 margin-top: 0.9%;
										 position: relative;
									 }
									 .logo img{
										 padding-top:2%;
										 z-index: 3;
										 float: left;
										 margin-left: 86%;
										 margin-top: -0.8%;
										 position: relative;
									 }
									 .cordonne{
										 position: relative;
										 width: 43%;
										 margin-left: 71.5%;
										 height: 50%;
										 padding-top: 1%;
									 }
									 .phone{
											z-index: 1;
											width: 23.36px;
											height: 29px;
											float: left;
											background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/phone.svg);
											background-repeat: no-repeat;
											background-position: right;
											min-height: 100%;
											background-size: 25px 35px;
											margin-right: 20px;
											color: #262626;
											position: absolute;
											top: 65%;
											left: 22.5%;
											margin-top: 3.5%;
											/* margin: 5% 2% 0 0;*/
									 }
									 .tlf
									 {
										 font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
										 font-weight: 600;
										 font-size: 24px;
										 line-height: 8.53px;
										 color: #262626;
										 position: absolute;
										 margin-top: 4.5%;
										 /* border-left: 1px solid #262626; */
										 height: 30px;
										 left: 28%;
										 width: 26%;
										 -webkit-font-smoothing: antialiased;
										 /* padding-top: 21%;*/
									 }

									 .info{
										 width: 202px;
										 width: 202px;
										 height: 36px;
										 padding-left: -3%;
										 margin-left: 95.8%;
										 margin-top: 1.5%;
										 position: relative;
										 z-index: 10;
											 /*position: absolute;*/
											 background-repeat: no-repeat;
											 background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-inform.svg);

									 }
									 .horaire{
										 padding-top: 2.5%;
										 /* padding-bottom: 0.6%; */
										 z-index: 21;
										 position: absolute;
										 width: 257px;
										 height: 88px;
										 left: 7%;
										 margin-top: 10%;
										 background: #FFFFFF;
										 box-shadow: 0px 8px 16px rgb(38 38 38 / 34%);
										 border-radius: 6px;
										 z-index: 1000;
									 }
									 .horaire p{
										 font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
										 font-style: normal;
										 font-weight: 400;
										 font-size: 14px;
										 line-height: 72.69%;
										 text-align: center;
										 color: #6B6B6B;
									 }

			 #nav_span_voy_org,#nav_span_hotel{
				 font-style: normal;
				 font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif;
					font-weight: 457;
					font-size: 15px;
					line-height: 18px;
					-webkit-font-smoothing: antialiased;
			 }


			 #autre_pays{
						width: 228px;
						position: absolute;
						height: 316px;
						left: 29%;
						margin-top:-12.5%;
						/*border-right: 1px solid #DDDDDD;*/
				}
				#offres_pays{
						width: 243px;
						position: absolute;
						height: 316px;
						left: 64%;
						margin-top:-12.5%;
						/*border-right: 1px solid #DDDDDD;*/
				}
				.span_vorg{
					position: absolute;
					width: 162px;
					height: 12px;
					left: 20px;
					top: 21px;
					font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
					font-style: normal;
					font-weight: 600;
					font-size: 18px;
					line-height: 12px;
					color: #262626;
					padding-left:2%;
				}
				.megamenu_vorg{
					height: 338px !important;
				}
			 .col-megamenu{
				 margin-top:37%;
			 }
			 #col_vorg{
				 margin-top:21%!important;
			 }
			 .vertical-line {
				 border-left: 1px solid #DDDDDD;
				 height: 458px;
				 /* margin: 0 20px; */
				 margin-left: 28.4%;
				 margin-top: 6.5%;
				 width:3%;
				}
				.vertical-line_1{
				border-left: 1px solid #DDDDDD;
				height: 448px;
				/* margin: 0 20px; */
				margin-left: 63.2%;
				margin-top: -59%;

				}

			.vertical-line_vorg {
				 border-left: 1px solid #DDDDDD;
				 height: 234px;
				 /* margin: 0 20px; */
				 margin-left: 29.4%;
				 margin-top: -4.5%;
				}
				.vertical-line_1_vorg{
				border-left: 1px solid #DDDDDD;
				height: 234px;
				/* margin: 0 20px; */
				margin-left: 63.2%;
				margin-top: -29.5%;
			}

			 .dropdown-toggle::after {
						display: none;
				}
				#navbarCollapse{
						display: block !important;
						width: 420px;
						margin-left: 238px;
						position: relative;
						margin-top: 3.5%;
						float: left;
				}
				#nav_span_hotel{
					margin-top: -22%;
				}
				#nav_span_voy_org{
					margin-top: 20%;
				}
				.icon_dropdown_topdest{
					margin-top: -21%;
					margin-left: 108%;
				}
				.icon_dropdown_topdest img{
					max-width: 11.19px;
					height: 6px;
				}
				#navbar_menu{
						display: block;
						width: 762px;
						height: 569px;
						position: absolute;
						z-index: 2000;

				}
				#row_navhotel{
						margin-left: 0%;
						margin-top: -1%;
				}
				.top_destination1{
						position: absolute;
						width: 243px;
						height: 318px !important;
						left: 0px;
						top: -4% !important;
						/*background: #F3F5F7;*/
						border-radius: 6px 0px 0px 6px;
						/*border-right:1px solid #DDDDDD;*/
				}
				#top_destination{
						position: absolute;
						width: 243px;
						height: 318px !important;
						left: 0px;
						top: -2%;
						/*background: #F3F5F7;*/
						border-radius: 6px 0px 0px 6px;
						/*border-right:1px solid #DDDDDD;*/
				}

				#autre_hotels{
						width: 228px;
						position: absolute;
						height: 316px;
						top: -3%;
						left: 36%;
						/*border-right: 1px solid #DDDDDD;*/
				}
				#offres_spec{
						width: 243px;
						height: 316px;
						top: -4%;
    				left: 70%;
						position: absolute;
				}

				.list-unstyled li{margin-bottom:13px;}
			 .ic_hotel{
				 height: auto;
			 }
			 .dropdown-menu{
				 position: absolute;
					width: 729px;
					height: 316px;
					left: -2px;
					top: 22px;
					background: #FFFFFF;
					box-shadow: 0px 8px 16px rgba(38, 38, 38, 0.24);
					border-radius: 6px;
					display: block;
			 }

			 .nav-item  a{
				 font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
					font-style: normal;
					font-weight: 457;
					font-size: 15px;
					line-height: 18px;
					color: #262626;
					font-stretch: 100;
			 }
			 .nav-item  a:hover{
				 color: #262626 !important;
				 font-stretch: 100;
			}
			#navbar_menu_vorg{
				display: block;
				width: 257px;
			height: 300px;
			position: absolute;
			z-index: 1001;
			left: 58%;
			}
			#col_offres_vorg{
				position: absolute;
				width: 257px;
				height: 817px !important;
				left: 23px;
				top: 14px !important;
				border-radius: 6px 0px 0px 6px;
			}
			#nav_vorg{
				margin-top: -14%;
			}
			.col_offres_vorg div{
				margin-left: 9%;
				margin-top: 6%;
			}
			.icon_dropdown_vog{
				margin-top: -17%;
				margin-left: 108%;
			}

			.icon_dropdown_vog img{
				max-width: 11.19px;
				height: 6px;
			}
			.icon_dropdown_vplus{
				margin-top: -9%;
				margin-left: 28%
			}
			.icon_dropdown_vplus img{
				width: 5.19px;
			height: 9px;
			}

			.icon_dropdown_vol{
				margin-top: -84%;
				margin-left: 135%;
				float: left;
			}

			.icon_dropdown_vol img{
				width: 11.19px;
				height: 6px;
			}
			#nav_vol{
				margin-top: -7%;
			}

	                 }
	                 @media only screen  and (min-width : 1881px) {
                                .sou_bodym {
                                   width: 100%;
                                   height: 70px;
                                   background-color: #fff;
                                   margin-bottom: 14%;
                                   box-shadow: inset 0 -5px 5px -5px rgba(0,0,0,0.5);
                                 }
                                 .menu{
                                   min-height: 69px !important;
                                 }
                                 .logo{
                                   z-index: 3;
                                   float: left;
                                   margin-left: -36%;
                                   margin-top: 0.9%;
                                   position: relative;
                                 }
                                 .logo img{
                                   padding-top:2%;
                                   z-index: 3;
                                   float: left;
                                   margin-left: 86%;
                                   margin-top: -0.8%;
                                   position: relative;
                                 }
                                 .cordonne{
                                   position: relative;
                                   width: 43%;
                                   margin-left: 71.5%;
                                   height: 50%;
                                   padding-top: 1%;
                                 }
                                 .phone{
                                    z-index: 1;
                                    width: 23.36px;
                                    height: 29px;
                                    float: left;
                                    background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/phone.svg);
                                    background-repeat: no-repeat;
                                    background-position: right;
                                    min-height: 100%;
                                    background-size: 25px 35px;
                                    margin-right: 20px;
                                    color: #262626;
                                    position: absolute;
                                    top: 65%;
                                    left: 22.5%;
                                    margin-top: 3.5%;
                                    /* margin: 5% 2% 0 0;*/
                                 }
                                 .tlf
                                 {
                                   font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
                                   font-weight: 600;
                                   font-size: 24px;
                                   line-height: 8.53px;
                                   color: #262626;
                                   position: absolute;
                                   margin-top: 4.5%;
                                   /* border-left: 1px solid #262626; */
                                   height: 30px;
                                   left: 28%;
                                   width: 26%;
                                   -webkit-font-smoothing: antialiased;
                                   /* padding-top: 21%;*/
                                 }

                                 .info{
                                   width: 202px;
                                   width: 202px;
                                   height: 36px;
                                   padding-left: -3%;
                                   margin-left: 95.8%;
                                   margin-top: 1.5%;
                                   position: relative;
                                   z-index: 10;
                                     /*position: absolute;*/
                                     background-repeat: no-repeat;
                                     background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-inform.svg);

                                 }
                                 .horaire{
                                   padding-top: 2.5%;
                                   /* padding-bottom: 0.6%; */
                                   z-index: 21;
                                   position: absolute;
                                   width: 257px;
                                   height: 88px;
                                   left: 7%;
                                   margin-top: 10%;
                                   background: #FFFFFF;
                                   box-shadow: 0px 8px 16px rgb(38 38 38 / 34%);
                                   border-radius: 6px;
                                   z-index: 1000;
                                 }
                                 .horaire p{
                                   font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
                                   font-style: normal;
                                   font-weight: 400;
                                   font-size: 14px;
                                   line-height: 72.69%;
                                   text-align: center;
                                   color: #6B6B6B;
                                 }

										 #nav_span_voy_org,#nav_span_hotel{
											 font-style: normal;
											 font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif;
												font-weight: 457;
												font-size: 15px;
												line-height: 18px;
												-webkit-font-smoothing: antialiased;
										 }


										 #autre_pays{
	                        width: 228px;
	                        position: absolute;
	                        height: 316px;
	                        left: 29%;
													margin-top:-12.5%;
	                        /*border-right: 1px solid #DDDDDD;*/
	                    }
											#offres_pays{
	                        width: 243px;
	                        position: absolute;
	                        height: 316px;
	                        left: 64%;
													margin-top:-12.5%;
	                        /*border-right: 1px solid #DDDDDD;*/
	                    }
											.span_vorg{
												position: absolute;
												width: 162px;
												height: 12px;
												left: 20px;
												top: 21px;
												font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
												font-style: normal;
												font-weight: 600;
												font-size: 18px;
												line-height: 12px;
												color: #262626;
												padding-left:2%;
											}
											.megamenu_vorg{
												height: 338px !important;
											}
										 .col-megamenu{
											 margin-top:37%;
										 }
										 #col_vorg{
											 margin-top:21%!important;
										 }
	    							 .vertical-line {
	    								 border-left: 1px solid #DDDDDD;
	    								 height: 458px;
	    								 /* margin: 0 20px; */
	    								 margin-left: 28.4%;
	    								 margin-top: 6.5%;
											 width: 3%;
	    						    }
	    								.vertical-line_1{
											border-left: 1px solid #DDDDDD;
											height: 448px;
											/* margin: 0 20px; */
											margin-left: 63.2%;
											margin-top: -59%;

	    								}

										.vertical-line_vorg {
	    								 border-left: 1px solid #DDDDDD;
	    								 height: 234px;
	    								 /* margin: 0 20px; */
	    								 margin-left: 29.4%;
	    								 margin-top: -4.5%;
	    						    }
	    								.vertical-line_1_vorg{
											border-left: 1px solid #DDDDDD;
											height: 234px;
											/* margin: 0 20px; */
											margin-left: 63.2%;
											margin-top: -29.5%;
										}

	                   .dropdown-toggle::after {
	                        display: none;
	                    }
	                    #navbarCollapse{
	                        display: block !important;
	                        width: 420px;
	                        margin-left: 238px;
	                        position: relative;
	                        margin-top: 3.5%;
	                        float: left;
	                    }
	                    #nav_span_hotel{
	                      margin-top: -22%;
	                    }
											#nav_span_voy_org{
	                      margin-top: 20%;
	                    }
	                    .icon_dropdown_topdest{
	                      margin-top: -21%;
	                      margin-left: 108%;
	                    }
	                    .icon_dropdown_topdest img{
	                      max-width: 11.19px;
	                      height: 6px;
	                    }
	                    #navbar_menu{
	                        display: block;
	                        width: 762px;
	                        height: 569px;
	                        position: absolute;
													z-index: 2000;

	                    }
	                    #row_navhotel{
	                        margin-left: 0%;
	                        margin-top: -1%;
	                    }
											.top_destination1{
													position: absolute;
													width: 243px;
													height: 318px !important;
													left: 0px;
													top: -4% !important;
													/*background: #F3F5F7;*/
													border-radius: 6px 0px 0px 6px;
													/*border-right:1px solid #DDDDDD;*/
											}
	                    #top_destination{
	                        position: absolute;
	                        width: 243px;
	                        height: 318px !important;
	                        left: 0px;
	                        top: -2% ;
	                        /*background: #F3F5F7;*/
	                        border-radius: 6px 0px 0px 6px;
	                        /*border-right:1px solid #DDDDDD;*/
	                    }

	                    #autre_hotels{
	                        width: 228px;
	                        position: absolute;
	                        height: 316px;
													top: -3%;
	                        left: 36%;
	                        /*border-right: 1px solid #DDDDDD;*/
	                    }
	                    #offres_spec{
	                        width: 243px;
	                        height: 316px;
													top: -4%;
    											left: 70%;
	                        position: absolute;
	                    }

	                    .list-unstyled li{margin-bottom:13px;}
	                   .ic_hotel{
	                     height: auto;
	                   }
	                   .dropdown-menu{
	                     position: absolute;
	                      width: 729px;
	                      height: 316px;
	                      left: -2px;
	                      top: 22px;
	                      background: #FFFFFF;
	                      box-shadow: 0px 8px 16px rgba(38, 38, 38, 0.24);
	                      border-radius: 6px;
	                      display: block;
	                   }

	    							 .nav-item  a{
	    								 font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	    									font-style: normal;
	    									font-weight: 457;
	    									font-size: 15px;
	    									line-height: 18px;
	    									color: #262626;
	    									font-stretch: 100;
	    							 }
	                   .nav-item  a:hover{
	                     color: #262626 !important;
	                     font-stretch: 100;
	                  }
	                  #navbar_menu_vorg{
	                    display: block;
	                    width: 257px;
	                  height: 300px;
	                  position: absolute;
	                  z-index: 1001;
	    							left: 58%;
	                  }
	                  #col_offres_vorg{
	                    position: absolute;
	                    width: 257px;
	                    height: 817px !important;
	                    left: 23px;
	                    top: 14px !important;
	                    border-radius: 6px 0px 0px 6px;
	                  }
	                  #nav_vorg{
	                    margin-top: -14%;
	                  }
	                  .col_offres_vorg div{
	                    margin-left: 9%;
	                    margin-top: 6%;
	                  }
	                  .icon_dropdown_vog{
	                    margin-top: -17%;
	                    margin-left: 108%;
	                  }

	                  .icon_dropdown_vog img{
	                    max-width: 11.19px;
	                    height: 6px;
	                  }
										.icon_dropdown_vplus{
											margin-top: -9%;
	    								margin-left: 28%
										}
										.icon_dropdown_vplus img{
											width: 5.19px;
    								height: 9px;
	                  }

										.icon_dropdown_vol{
											margin-top: -84%;
											margin-left: 135%;
											float: left;
	                  }

	                  .icon_dropdown_vol img{
	                    width: 11.19px;
	                    height: 6px;
	                  }
	                  #nav_vol{
	                    margin-top: -7%;
	                  }

	                 }


	        </style>

        <!-- header-->
<div class="sous_body sous_body_coordonne" id="" >
        <div id="menuresp1">
            <div  class="menu" >

                <div class="menuf container">
                    <div class="logo" >
                        <a onClick="ga('send','event','Retour home','home','clic Logo via résultat')" href="https://tn.tunisiebooking.com/" >
                            <img class="img_logo" src="https://tn.tunisiebooking.com/images/icons-menu-moteur/logo-TunisieBooking1.svg" alt="logo tunisiebooking"  style="width: 254px;border:0px;height: 43px;"/>
                        </a>
                    </div>

      <div class="collapse navbar-collapse principal-navbar animate__animated animate__backInLeft" id="navbarCollapse" style="display:block ">
    <ul class="navbar navbar-nav ms-auto mb-2 mb-md-0" style="width:76%;">
      <li class="nav-item dropdown has-megamenu  mega-dropdown active" id="nav_hotel">
        <span id="nav_span_hotel" class="nav-link dropdown-toggle ico-4" >Hôtels Tunisie</span>
        <div class="icon_dropdown_topdest">
          <img src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech.svg" alt="flèche" width="15px" height="20px">
        </div>
        <div class="dropdown-menu megamenu" role="menu" id="navbar_menu" style="display:none; padding-top: 6%;">
            <div class="row rows" id="row_navhotel">
                <div class="col-md-3 top_destination1" id="top_destination">
                      <div class="col-megamenu">
                  <span  style="position: absolute;width: 162px;height: 12px;left: 30px;top: 56px;font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;font-style: normal;font-weight: 600;font-size: 18px;line-height: 12px;color: #262626;">Top Destinations</span>
                  <ul class="list-unstyled" style="margin-top: 20%;margin-left: 14%;">
                    <li>
															<a  onclick="ga('send','event','Destination','via side barre','')" href="https://tn.tunisiebooking.com/hotels-tunisie.html" >Hôtel Tunisie</a>
									</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Hammamet')" href="https://tn.tunisiebooking.com/hotels_hammamet.html" >Hôtel Hammamet</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Tabarka')" href="https://tn.tunisiebooking.com/hotels_tabarka.html" >Hôtel Tabarka</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Sousse')" href="https://tn.tunisiebooking.com/hotels_sousse.html" >Hôtel Sousse</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Monastir')" href="https://tn.tunisiebooking.com/hotels_monastir.html" >Hôtel Monastir</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Mahdia')" href="https://tn.tunisiebooking.com/hotels_mahdia.html" >Hôtel Mahdia</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Djerba')" href="https://tn.tunisiebooking.com/hotels_djerba.html" >Hôtel Djerba</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Tunis')" href="https://tn.tunisiebooking.com/hotels_tunis.html" >Hôtel Tunis</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Tozeur')" href="https://tn.tunisiebooking.com/hotels_tozeur.html" >Hôtel Tozeur</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Korbous')" href="https://tn.tunisiebooking.com/hotels_korbous.html" >Hôtel Korbous</a>
											</li>

                  </ul>
                </div>
              </div>
							<div class="vertical-line"></div>

              <div class="col-md-3 border-start" id="autre_hotels">
                <div class="col-megamenu">
                  <span style="position: absolute;width: 100%;height: 12px;left: -11px;top: 51px;font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;;font-style: normal;font-weight: 600;font-size: 18px;line-height: 12px;color: #262626;">Autres Hôtels Tunisie</span>
                  <ul class="list-unstyled" style="margin-top: 21%;margin-left: -4%;">
										<li>
																	<a  onclick="ga('send','event','Destination','via side barre','Kelibia')" href="https://tn.tunisiebooking.com/hotels_kelibia.html" >Hôtel Kelibia</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Zarzis')" href="https://tn.tunisiebooking.com/hotels_zarzis.html" >Hôtel Zarzis</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Sfax')" href="https://tn.tunisiebooking.com/hotels_sfax.html" >Hôtel Sfax</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Nabeul')" href="https://tn.tunisiebooking.com/hotels_nabeul.html" >Hôtel Nabeul</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Gammarth')" href="https://tn.tunisiebooking.com/hotels_gammarth.html" >Hôtel Gammarth</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Douz')" href="https://tn.tunisiebooking.com/hotels_douz.html" >Hôtel Douz</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Bizerte')" href="https://tn.tunisiebooking.com/hotels_bizerte.html" >Hôtel Bizerte</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Ain Draham')" href="https://tn.tunisiebooking.com/hotels_ain_draham.html" >Hôtel Ain Draham</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','El Jem')" href="https://tn.tunisiebooking.com/hotels_el_jem.html" >Hôtel El Jem</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Kairouan')" href="https://tn.tunisiebooking.com/hotels_kairouan.html" >Hôtel Kairouan</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Gafsa')" href="https://tn.tunisiebooking.com/hotels_gafsa.html" >Hôtel Gafsa</a>
											</li><li>
																	<a  onclick="ga('send','event','Destination','via side barre','Kerkanah')" href="https://tn.tunisiebooking.com/hotels_kerkanah.html" >Hôtel Kerkanah</a>
											</li>
                  </ul>
                </div>  <!-- col-megamenu.// -->
              </div><!-- end col-3 -->
							<div class="vertical-line_1"></div>
              <div class="col-md-3 border-start" id="offres_spec">
                <div class="col-megamenu">
                  <span style="position: absolute;width: 100%;height: 12px;left:-21px;top: 58px;font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;;font-style: normal;font-weight: 600;font-size: 18px;line-height: 12px;color: #262626;">Nos Offres Spéciales</span>
                  <ul class="list-unstyled" style="margin-top: 19%;margin-left: -8%;">
										<li><a href="https://tn.tunisiebooking.com/hotel-early-booking.html">Early Booking </a></li>
										<li><a href="https://tn.tunisiebooking.com/hotel-avec-toboggan.html">Hôtel avec Toboggan </a></li>
                    <li><a href="https://tn.tunisiebooking.com/hotels-hammamet-special_couple.html">Spécial Couple</a></li>
                    <li><a href="https://tn.tunisiebooking.com/hotels-hammamet-early_booking.html">Spécial ÉTÉ </a></li>
                  </ul>
                </div>  <!-- col-megamenu.// -->
              </div>


          </div><!-- end row -->

      </div></li>

      <li class="nav-item dropdown has-megamenu  mega-dropdown" id="nav_vorg">
        <span id="nav_span_voy_org" class="nav-link dropdown-toggle ico-4" >Voyage organisé</span>
        <div class="icon_dropdown_vog">
          <img src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech.svg" alt="flèche" width="15px" height="20px">
        </div>
        <div class="dropdown-menu megamenu" role="menu" id="navbar_menu_vorg" style="display:none;">
					<span style="z-index:2;position: absolute;width: 91%;height: 12px;left: 20px;top: 30px;font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;font-style: normal;font-weight: 600;font-size: 18px;line-height: 12px;color: #262626;-webkit-font-smoothing: antialiased;"><a href="https://tn.tunisiebooking.com/voyage_organise/"><b>Nos Voyages Organisés</b></a></span>
          <div class="row rows">
            <div class="col-md-4 border-end" id="col_offres_vorg">
              <div class="col-megamenu" id="col_vorg">

                <ul class="list-unstyled">
                                   <li><a href="https://tn.tunisiebooking.com/voyage_organise/turquie.html">Turquie</a></li>
                                  <li><a href="https://tn.tunisiebooking.com/voyage_organise/omra.html">Omra</a></li>
                                  <li><a href="https://tn.tunisiebooking.com/voyage_organise/egypte.html">Egypte</a></li>
                 								 <li><a href="https://tn.tunisiebooking.com/voyage_organise/tunisie.html ">Circuit Sud</a></li>
								  <li><a href="https://tn.tunisiebooking.com/voyage_organise/tunisie.html">Circuit Nord</a></li>

                </ul>
								<div class="span_vplus">
									<span id="nav_span_voirplus" class="nav-link dropdown-toggle ico-4" data-bs-toggle="dropdown" aria-expanded="false" style="font-weight: 400;font-size: 15px;    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;color: #4972D1;text-decoration: underline;">Voir plus</span>
									<div class="icon_dropdown_vplus">
	          			<img src="https://tn.tunisiebooking.com/images/icone-moteur/flesh_vplus.svg" width="15px" height="20px" style="transform: rotate(360deg);">
	        			</div>
					</div>
							</div>
            </div>

          </div>
        </div>

				<div class="dropdown-menu megamenu megamenu_vorg" role="menu" id="navbar_menu" style="display:none;">
				<div class='row'><span class='span_vorg' style='position: absolute;
				z-index:2;
				width: 90%;
				height: 12px;
				left: 9px;
				top: 21px;
				font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
				font-style: normal;
				font-weight: 600;
				font-size: 18px;
				line-height: 12px;
				color: #262626;padding-left:2%; -webkit-font-smoothing: antialiased;'>
				<a href='https://tn.tunisiebooking.com/voyage_organise/'><b>Nos Voyages Organisés</b></a>
				</span><div class='col-md-3 border-start' id='top_destination'><div class='col-megamenu'><ul class='list-unstyled' style='margin-top: 20%;margin-left: 14%;'><li><a href='https://tn.tunisiebooking.com/voyage_organise/omra.html'>Omra</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/turquie.html'>Turquie</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/iran.html'>Iran</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/france.html'>France</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/italie.html'>Italie</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/tunisie.html'>Tunisie</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/grece.html'>Grece</a></li></ul></div></div><div class='vertical-line_vorg'></div><div class='col-md-3 border-start' id='autre_pays'><div class='col-megamenu'><ul class='list-unstyled' style='margin-top: 20%;margin-left: 14%;'><li><a href='https://tn.tunisiebooking.com/voyage_organise/egypte.html'>Egypte</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/espagne.html'>Espagne</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/maroc.html'>Maroc</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/tcheque.html'>Tcheque</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/autriche.html'>Autriche</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/portugal.html'>Portugal</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/dubai.html'>Dubai</a></li></ul></div></div><div class='vertical-line_1_vorg'></div><div class='col-md-3 border-start' id='offres_pays'><div class='col-megamenu'><ul class='list-unstyled' style='margin-top: 20%;margin-left: 14%;'><li><a href='https://tn.tunisiebooking.com/voyage_organise/malaisie.html'>Malaisie</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/liban.html'>Liban</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/pays_bas.html'>Pays Bas</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/thailande.html'>Thailande</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/serbie.html'>Serbie</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/bresil.html'>Bresil</a></li><li><a href='https://tn.tunisiebooking.com/voyage_organise/etas_unis.html'>Etas Unis</a></li></ul></div></div></div>

			</div>

      </li>

    </ul>
    </div>
		<div class=" flex h-full header_humberger" style="display:none">
		 <button class="h-full p-15 text-black" id="NavigationNarrow-toggleSideNav-button" data-testid="NavigationNarrow-toggleSideNav-button" type="button">
			 <span class="sr-only">Ouvrir le menu</span>
			 <div class="hamburger">
				 <span class="hamburger-span"></span>
			 </div>
		 </button>
	 </div>


 	 <div aria-hidden="false" class="bg-white bottom-0 fixed ltr:left-0 rtl:right-0 transform w-full w-full_menu1 translate-x-0" id="rootSideNav" style="display:none !important;max-width: 31rem; top: 100px; transition: transform 330ms linear 0s;">
 		 <div class="bg-white h-full overflow-y-scroll p-15">
 			 <ul>
 				 <li class="list_menu_hotel">
 					 <button class="w-full button_hotel" data-testid="SideNavigationItem-subitem-button" tabindex="0" type="button">
 						 <span class="flex h-full items-center justify-between py-15 w-full">
 							 <span class="text-blueWave  font-bold font-sans text-16 uppercase" id="text-blueWaveHotel">Hôtels Tunisie</span>
 							 <span class="inline-block leading-0 overflow-hidden duration-250 ease-in transition-all icon-monochrome text-black" data-name="arrowRight" data-testid="icon" style="height: 0.625rem; width: 0.625rem;">
 								 <span class="icon_menu_hotel block relative w-full" style="padding-bottom: 100%;">
 									 <img src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech.svg" alt="flèche" width="15px" height="20px">
 								 </span>
 							 </span>
 						 </span>
 					 </button>
 				 </li>
 				 <li class="list_menu_vorg">
 					 <button class="w-full button_voyage_org" data-testid="SideNavigationItem-subitem-button" tabindex="0" type="button">
 						 <span class="flex h-full items-center justify-between py-15 w-full">
 							 <span class="text-blueWave text-blueWavevorg1 font-bold font-sans text-16 uppercase">Voyage organisé</span>
 							 <span class="inline-block leading-0 overflow-hidden duration-250 ease-in transition-all icon-monochrome text-black" data-name="arrowRight" data-testid="icon" style="height: 0.625rem; width: 0.625rem;">
 								 <span class="icon_menu_vorg block relative w-full" style="padding-bottom: 100%;">
 									 <img src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech.svg" alt="flèche" width="15px" height="20px">
 								 </span>
 							 </span>
 						 </span>
 					 </button>
 				 </li>

 			 </ul>
 		 </div>
 	 </div>







  <div class="cordonne" >
     <div class="phone">
     </div>
     <p class="tlf" style="/*padding-top:21%;*/">71 124 124</p>
     <div class="horaire" style="display:none">
       <p>Un conseiller à votre écoute 7/7</p>
       <!--<p>Du Lundi au samedi</p>
       <p>de 8h à 18h | Dim. de 9h à 17h</p>-->
			 <!--<p>Du Lun. au Ven. de 8h à 18h</p>
			 <p>Sam. et Dim de 9h à 17h</p>-->
			 <p>Du Lundi au Dimanche</p>
			 <p> de 9h00 à 16h00</p>
     </div>
 </div>
 <div class="info"></div>
                </div>
            </div>
        </div>
        <!-- /header -->
        <!--moteur -->

				</div>

        <script type="text/javascript">

  var trackOutboundLink = function(url,outbound,click_labell,detaill_event) {  ga('send', 'event', outbound, click_labell, detaill_event, url, { 'transport': 'beacon', 'hitCallback': function(){document.location = url;} });
  }
  var trackOutboundLink2 = function(url,outbound,click_labell,detaill_event) {   ga('send', 'event', outbound, click_labell, detaill_event); document.location = url;}

  function sousrecherche_moteur()
  { var cookValue = "" ; cookValue=recup_cookie('historique_tn');	if(cookValue){var tab=cookValue.split("##");	ga('send','event','Destination',' via moteur',tab[0]); }document.hotel.submit();}
  function recherche()
  {
    if(document.hotel.search.value=='')
    {	alert(" Veuillez choisir votre destination !!");

    document.hotel.ville.focus();
    verif=1;return false;}
    else if(document.getElementById("nbr_nuit").value>20){	alert("pour tout séjour > à 20 nuits, merci de contacter notre service clients !!");document.hotel.checkout.focus();verif=1;return false;}
      else if(document.hotel.checkin.value=='' || document.hotel.depart.value=='jj/mm/aaaa')
      {
      alert(" Veuillez choisir votre date de départ !!");
      document.hotel.depart.focus();
      verif=1;
      return false;
      }

    if(document.hotel.depart.value!='' || document.hotel.depart.value!='jj/mm/aaaa')
    {
    var dep= document.hotel.depart.value.split("/");


    var Date1 = new Date(dep[2],dep[1],dep[0]);


    document.getElementById("nbr_nuit").value = diffdate(Date1,Date2);

    }
      var nbcham=document.hotel.chambres.value;
      if(nbcham==0)
      {
      alert(" Veuillez choisir nombre de chambres");
      document.hotel.chambres.focus();
      verif=1;
      return false;}
       for(var z=1;z<=nbcham;z++)
{
	if((document.getElementById("enfants"+z).value=="0")&&(document.getElementById("adultes"+z).value=='0'))
{
alert(" Veuillez choisir le nombre d'enfant !!");
document.getElementById("enfants"+z).focus();
document.getElementById("adultes"+z).focus();
return false;
}



        for(var k=1;k<=document.getElementById("enfants"+z).value;k++)
          {

           if(document.getElementById("age"+z+"_"+k).value=='')
         {

          alert(" Veuillez choisir l'age de votre enfant !!");

          document.getElementById("age"+z+"_"+k).focus();
          return false;
         }
                  }
       // params_ch+="bebe"+z+"="+document.getElementById("bebe"+z).value+"&";
      }
          var nb_passage=0;
       for(var z=1;z<=nbcham;z++)
         {
           nb_passage=(document.getElementById("enfants"+z).value)*1+(document.getElementById("adultes"+z).value)*1;
         if(nb_passage==0){alert("Repartition des chambre non valide");document.hotel.chambres.focus(); return false;}
         }
        //document.getElementById("boutonr").style.display="none";
        //document.getElementById("rechload").style.display="block";
  }
    </script>

    <!-- /moteur -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$('.plus').bind("mouseenter", function() {
	$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/+rose.svg)");
});
$('.plus').bind("mouseleave", function() {
	$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/+noir.svg)");
});
$('.adresse').bind("mouseenter", function() {
	$('.adresse').css("background-image", "url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-infor.svg)");
	$('.horaire').css("display","block");
});
$('.adresse').bind("mouseleave", function() {
	$('.adresse').css("background-image", "url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-inform.svg)");
	$('.horaire').css("display","none");
});
var isContentVisible = false;
  $('#nav_hotel').click(function() {
    if (isContentVisible) {
			$("#navbar_menu").css("display","none");
			$("#nav_span_hotel").css("color","#262626");
			$('.icon_dropdown_topdest > img').css("transform","rotate(360deg)");
				$("#navbar_menu_vorg").css("display","none");
				$(".megamenu_vorg").css("display","none");

				$("#nav_span_voy_org").css("color","#262626");
				$('.icon_dropdown_vog > img').css("transform","rotate(360deg)");

      isContentVisible = false;
      //$(this).text('Open');
    } else {
    $("#navbar_menu").css("display","block");
		$("#nav_span_hotel").css("color","#FF0097");
		$('.icon_dropdown_topdest > img').css("transform","rotate(180deg)");
			$("#navbar_menu_vorg").css("display","none");
			$(".megamenu_vorg").css("display","none");
			$("#nav_span_voy_org").css("color","#262626");
			$('.icon_dropdown_vog > img').css("transform","rotate(360deg)");
      isContentVisible = true;
      //$(this).text('Close');
    }
  });

	var isContentVisible1 = false;
	  $('#nav_vorg').click(function() {
	    if (isContentVisible1) {
				$("#navbar_menu").css("display","none");
				$("#navbar_menu_vorg").css("display","none");
				$(".megamenu_vorg").css({"display":"none !important"});
				$("#nav_span_hotel").css("color","#262626");
				$('.icon_dropdown_topdest > img').css("transform","rotate(360deg)");
				$("#nav_span_voy_org").css("color","#262626");
				$('.icon_dropdown_vog > img').css("transform","rotate(360deg)")
	      isContentVisible1 = false;
	      //$(this).text('Open');
	    } else {
				$("#navbar_menu").css("display","none");
				$("#navbar_menu_vorg").css("display","block");
				//$(".megamenu_vorg").css("display","none");
				$("#nav_span_hotel").css("color","#262626");
				$('.icon_dropdown_topdest > img').css("transform","rotate(360deg)");
				$("#nav_span_voy_org").css("color","#FF0097");
				$('.icon_dropdown_vog > img').css("transform","rotate(180deg)")
	      isContentVisible1 = true;
	    }
	  });
  /*$('#nav_hotel').off().on("click",function() {
    $("#navbar_menu").css("display","block");
    $("#nav_span_hotel").css("color","#FF0097");
    $('.icon_dropdown_topdest > img').css("transform","rotate(180deg)");
		  $("#navbar_menu_vorg").css("display","none");
			$(".megamenu_vorg").css("display","none");
			$("#nav_span_voy_org").css("color","#262626");
			$('.icon_dropdown_vog > img').css("transform","rotate(360deg)");
  });*/

  /*$('#nav_vorg').click(function() {
    $("#navbar_menu").css("display","none");
    $("#navbar_menu_vorg").css("display","block");
    $("#nav_span_hotel").css("color","#262626");
		$('.icon_dropdown_topdest > img').css("transform","rotate(360deg)");
    $("#nav_span_voy_org").css("color","#FF0097");
    $('.icon_dropdown_vog > img').css("transform","rotate(180deg)")
  });*/
	/*$('#nav_vol').click(function() {
		$("#navbar_menu_vorg").css("display","none");
		$(".megamenu_vorg").css("display","none");
		  $("#navbar_menu").css("display","none");

	});*/


	$(document).mouseup(function(e) {
				var container = $("#nav_hotel");
				var container_vorg = $("#nav_vorg");
				var cont_v2_502=$('.v2_502');
				var cont_body=$('.v312_1355');
				if (!container.is(e.target) && container.has(e.target).length === 0) {
	 				$("#navbar_menu").css("display","none");
	 				$("#nav_span_hotel").css("color","#262626");
	 				$('.icon_dropdown_topdest > img').css("transform","rotate(360deg)");
	         // Do something here
	     }
	 		if (!container_vorg.is(e.target) && container_vorg.has(e.target).length === 0) {
	 				$("#navbar_menu_vorg").css("display","none");
	 				$(".megamenu_vorg").css("display","none");

	 				$("#nav_span_voy_org").css("color","#262626");
	 				$('.icon_dropdown_vog > img').css("transform","rotate(360deg)");
	 				// Do something here
	 		}
	 		if (cont_v2_502.is(e.target) && container_vorg.has(e.target).length === 0) {
	 				$("#navbar_menu_vorg").css("display","none");
	 				$(".megamenu_vorg").css("display","none");

	 				// Do something here
	 		}
	 		if (cont_body.is(e.target) && container_vorg.has(e.target).length === 0) {
	 				$("#navbar_menu_vorg").css("display","none");
	 				$(".megamenu_vorg").css("display","none");

	 				// Do something here
	 		}

});
$('.v153_11').click(function() {
    // redirect to another page
    window.location.href = 'https://tn.tunisiebooking.com/voyage_organise/';
  });
	$('.v153_16').click(function() {
	    // redirect to another page
	    window.location.href = 'https://tn.tunisiebooking.com/vol/';
	  });

		$('.v153_11_cir').click(function() {
				// redirect to another page
				window.location.href = 'https://tn.tunisiebooking.com/voyage_organise/tunisie.html';
			});
		$('.icon_menu_hotel,#text-blueWaveHotel').click(function() {
			//var element = $('#rootSideNav:first');
			var style_ch =$('.w-full_menu1').attr('style'); //it will return string
			style_ch += ';display:none !important';
			$('.w-full_menu1').attr('style',style_ch);
			var style_ch2 =$('.w-full_menu2').attr('style'); //it will return string
			style_ch2 += ';display:block !important';
			$('.w-full_menu2').attr('style',style_ch2);
			//$(this).parent().parent().parent().parent().parent().hide();
		$('.bbpressloginurl').eq(1).hide();
		var element2 = $('.bbpressloginurl').eq(1);
		var style_ch2 =$("#rootSideNav").attr('style'); //it will return string
		style_ch2 += ';display:block !important';
		$("#rootSideNav").attr('style',style_ch)
		  });
		$('.span_vplus').click(function() {
			//$(".megamenu_vog").css("display","none");
			$(".megamenu_vorg").css("display","block");
			$('#nav_vorg').trigger('click');
	  });

			$('#NavigationNarrow-toggleSideNav-button').click(function() {
				if ($('#NavigationNarrow-toggleSideNav-button').css('background-image').indexOf('https://tn.tunisiebooking.com/images/icone-moteur/close-menu.svg') !== -1) {
					var style_ch =$('#rootSideNav:first').attr('style'); //it will return string
					style_ch += ';display:none !important;';
					$('#rootSideNav:first').attr('style',style_ch);
					var style_body =$('.v312_1355,.conteneur_footer1').attr('style'); //it will return string
					style_body += ';filter:none;';
					$('.v312_1355,.conteneur_footer1').attr('style',style_body);
					var style_body1 =$('.sous_body').attr('style'); //it will return string
					style_body1 += ';filter:none;';
					$('.sous_body').attr('style',style_body1);
					$('.text-black').css('background', '');

}
else{
	var style_ch =$('#rootSideNav:first').attr('style'); //it will return string
	style_ch += ';display:block !important;';
	$('#rootSideNav:first').attr('style',style_ch);
	var style_body =$('.v312_1355,.conteneur_footer1').attr('style'); //it will return string
	style_body += ';filter:brightness(0.7);';
	$('.v312_1355,.conteneur_footer1').attr('style',style_body);
	var style_body1 =$('.sous_body').attr('style'); //it will return string
	style_body1 += ';filter:brightness(0.7);';
	$('.sous_body').attr('style',style_body1);
	$('.text-black').css({'background':'url(https://tn.tunisiebooking.com/images/icone-moteur/close-menu.svg)','background-repeat':'no-repeat','animation-name': 'scale-up','animation-duration': '1s','animation-timing-function': 'ease-out','animation-fill-mode': 'forwards'});
}

			});
			$('.icon_menu_dest1,.text-blueWave_hotel1').click(function() {
				//var element = $('#rootSideNav:first');
				var style_ch =$('.w-full_menu1').attr('style'); //it will return string
				style_ch += ';display:block !important';
				$('.w-full_menu1').attr('style',style_ch);
				var style_ch2 =$('.w-full_menu2').attr('style'); //it will return string
				style_ch2 += ';display:none !important';
				$('.w-full_menu2').attr('style',style_ch2);
			});
			/* click voyage organiser*/
			$('.icon_menu_vorg,.text-blueWavevorg1').click(function() {
				//var element = $('#rootSideNav:first');
				var style_ch =$('.w-full_menu3').attr('style'); //it will return string
				style_ch += ';display:block !important';
				$('.w-full_menu3').attr('style',style_ch);
				var style_ch2 =$('.w-full_menu2').attr('style'); //it will return string
				style_ch2 += ';display:none !important';
				$('.w-full_menu2').attr('style',style_ch2);
			});


			$('.icon_menu_voyage_org,.text-blueWave_vorg').click(function() {
				//var element = $('#rootSideNav:first');
				var style_ch =$('.w-full_menu2').attr('style'); //it will return string
				style_ch += ';display:block !important';
				$('.w-full_menu3').attr('style',style_ch);
				var style_ch2 =$('.w-full_menu3').attr('style'); //it will return string
				style_ch2 += ';display:none !important';
				$('.w-full_menu3').attr('style',style_ch2);
			});


</script>

<div class="sous_body sous_body_detail" id="sous_body_detail" style="display:none;">
<div id="menuresp1">
 <div class="menu menu_detail">
	 <div class="entete_menu" style="position: relative;/*height: 66px;left: 0px;top: 0px;background: #FFFFFF;box-shadow: 0px 7px 20px rgba(0, 0, 0, 0.24)*/">
	 		<div class="entete_sous_menu" id="bodyresponsive" style="position: relative;top:-6%;left:-2%;">
				<div class="col_photos" style="position: absolute;width: 63px;height: 18px;">
				 <p class="col_photos_txt">Photos</p>
				</div>
				<div class="col_presentation" onClick="menu_detail('div_presentation');"  style="position: absolute;width: 132px;height: 48px;">
					<p class="col_presentation_txt">Présentation</p>
				</div>
				<div class="v153_33_presentation"></div>
				<div class="col_equipements" onClick="menu_detail('div_equipement');" style="position: absolute;width: 132px;height: 48px;">
					<p class="col_equipements_txt">Équipements</p>
				</div>
				<div class="v153_33_equipements"></div>
				<div class="col_avis" onClick="menu_detail('div_liste_avis');" style="position: absolute;width: 132px;height: 48px;">
					<p class="col_liste_avis_txt">Avis</p>
				</div>
				<div class="v153_33_liste_avis"></div>
				<div class="col_tarif" style="margin-top: -0.7%;margin-left: 45%;">
					<div class="v194_27 button_header">
	         <div onClick="scrollt2();" type="button" class="v194_22 v_tarif_dsp_moteur" id="v194_22" style="font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif; color:#FFFFFF;padding-top: 12%;text-align:center;">
	         		<span id="span_btn_224">Tarifs &amp; Dispos</span>
	         </div>
	        </div>
				</div>
			</div>
	 </div>
 </div>
 </div>
 </div>
</div>
<div id="bodyresponsive">
<div id="wrap-ville" style="clear:both; position:relative;left:-1%;display:inline-block;margin-bottom:-2%;">
<div style="float:left; padding:4px 0px 0px 28px;width:max-content">
	<a onClick="ga('send','event','Retour home','home','clic lien accueil')" class="menu_accueil" href="https://tn.tunisiebooking.com/"><u>Accueil</u></a>
	<i class="fa-solid fa-angle-right" style="color:#262626;left: 36.5%;
	margin-top: 1.7%;position: relative;font-size:10px;"></i>
</div>
<div style="float: left;
    position: relative;
		margin-left: -4%;">
   <ul style="">
		<li class="liste_hotel" style="">
			<a onClick="ga('send','event','Destination','Hammamet','retour page destination')" class="menu_hotel" style="color:#262626; font-weight:bold; " href="https://tn.tunisiebooking.com/hotels_hammamet.html"><span class="h1style"> Hotels Hammamet</span></a>
			<i class="fa-solid fa-angle-right" style="    color: #262626;
			left: 11.5%;
			margin-top: 1.7%;
			position: relative;
			font-size: 10px;"></i>
		</li>

	</ul>
</div>

		<div style="float:left;position:relative;margin-left: -6%;">
		  <ul style=" ">
			<li  class="liste_hotel" style="">
			 	<h1 class="h1style1">Hôtel Houda Yasmine Hammamet</h1>
			 </li>
			</ul>&nbsp;
		</div>
		</div>
<div class="header_detail clearfix header-style-one pattern-bg shadow-container" style="border-radius: 2px" >
  <div id="hoteldiv" class="entete_hotel" style="padding-top: 3px;">
	    <div class="bloc_titre_hotels" style="width:70%">
		 <h2 class="h2styles" style="font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;" >Houda Yasmine Hammamet</h2>

				<span class="h2styless" style="float:none">
								<!--<span class="etoliess">4</span>-->
				<img class="lazy" data-src="https://tn.tunisiebooking.com/theme/images/star4.svg"  alt="star4" width="93.38px" height="18px" style="margin-top: 1px;"/>
						 </span>
	   <div id="shareAdaptive" style=" clear:both; margin:0px 8px 0px 0px" ></div>
	  	  <div style="font-size:14px; font-weight:bold; display:none;"><img data-src="https://tn.tunisiebooking.com/theme/images/indicateurr.png" class="lazy"  alt="indicateur"  style="vertical-align:middle; margin-top:0px;" />B P 97 Yasmine, Hammamet, 8050 , Tunisie <img data-src="https://tn.tunisiebooking.com/theme/images/sephotel.png" class="lazy" alt="line_v" /> <div class="fb-like" data-href="https://tn.tunisiebooking.com/detail_hotel_36/" data-width="55" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></div>
	  </div>
	 		<div id="prix_par_nuits" class="cache_prix_par_nuit" style="display:none;">
 		 </div>

	 <div style="clear:both"></div>
    </div>
		<div class="localisation">
		 <div  style="float: left;margin-left: 2%;display: inline-block;width: max-content;">
		 <img class="lazy" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" width="13.038px" height="18px" style="float: left;">
		 	<div class="adresse_hotel" style="">
			B P 97 Yasmine, Hammamet, 8050, <u class="adresse_hotel"> Hammamet</u>

			</div>
		 </div>
		 <hr style="
			 border-left: 1px solid #DDD;
	     height: 25px;
	     margin: 0 10px;
	     border-top: none;
	     position: relative;
	     margin-top: 0%;
	     display: inline-block;
	     left: 2%;"
		 >
		 <div style="position: relative;display: inline-flex;width: 100%;margin-top:-1%;">
		 		 </div>

		</div>


 <div id="goToBook"  style="clear:both; z-index:99999;">
</div>

 <div id="vdautrehotel"  class="voir_autre_h_cache" style="display:none;"><div style="float:right; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; font-size:16px; color:#262626;margin: 0 10px; padding:4px 8px;cursor:pointer;" onClick="changer_hotel('Hammamet')"> <u> &laquo; Voir d	&apos;autres h&ocirc;tels</u></div></div>

<div id="divas">
<div  class="bloc_m_anglet">
  		<div id="gallerys">
			<div id="iconephoto">
		     <div id="photos_td" onClick="menu_detail('photos')" class="style_menu1f">Photos</div>
         <div  id="descriptif_td" onClick="menu_detail('div_presentation');" class="style_menu2f" style="" >Présentation</div>
				 <div  id="equipement_td" onClick="menu_detail('div_equipement');" class="style_menu2f" style="" >Équipements</div>

			  
			   			     
			   
	    </div>
			<hr style="border-top: 1px solid #DDD;margin-top: 2.3%;width: 75%;margin-left: 19.5%;">
	     <div class="bloc_anglet">
		  <div  class="photos_div" >
		  <div style="clear:both; /*padding:2px;*/;width:102%;">
		   <div id="photos">
Houda Yasmine Hammamet		 <div style="width:33%; float:right;">
			  <i class="icon-star-1" style="color:#c9c7c7;font-size: 14px; padding: 0px; margin: -5px;"></i>   <i class="icon-star-1" style="color:#c9c7c7;font-size: 14px; padding: 0px; margin: -5px;"></i>   <i class="icon-star-1" style="color:#c9c7c7;font-size: 14px; padding: 0px; margin: -5px;"></i>   <i class="icon-star-1" style="color:#c9c7c7;font-size: 14px; padding: 0px; margin: -5px;"></i> </div>
</div>
<div class="titr_hot_av" style="margin-top:-29px;margin-bottom: 1%;"><span style="font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;

    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 36px;
    color: #262626;
">
Photos hôtel Yasmine Hammamet </span> </div>
 		  							 <div class="titley" style="z-index:9999;" >
 								 <div style="margin-bottom:6%;">
 									<img class="img_promoy lazy" data-src="https://www.resabooking.com/marketing/Categorie_promo/images/636d1975ba6329.83889505.svg" alt="img_promoy" width="24px" height="25px">
 								 </div>
 								 <div>
 									<span>1er Enfant -6 ans Gratuit </span>
 								 </div>
 							 </div>
 						 	<div class="blocfb">
	</div>

		     
		  <script type="text/javascript" src="https://tn.tunisiebooking.com/voyage_organise/include/jquery.timers_v2.js"></script>

<link rel="stylesheet" type="text/css" href="https://tn.tunisiebooking.com/theme/gallery_slide/style.min.css"  media="print" onload="this.media='all'" />

<div class="list_img_detail">
		<div class="list_img">

			<div class="product">
      <div class="media">
			<img  id="pictureMedia" src="" title="Houda Yasmine Hammamet" alt="Houda Yasmine Hammamet , Hammamet - Hôtel Photo " width="100%" height="100%" />
			</div>
  </div>
  <script type="text/javascript">
/* json à construire en freemarker */


var _thumbs = {"items":[
{"id": "1", "src": "images/uploads/660b45c278dab1712014786.jpg", "srcmini": "images/uploads/660b45c278dab1712014786.jpg"},  

]}
function verif_data(){
if(localStorage.getItem("datdep")){
var depart=localStorage.getItem("datdep");
}else{
var depart="";
}

if(localStorage.getItem("retour")){
var retour=localStorage.getItem("retour");
}else{
var retour="";
}

if(localStorage.getItem("nbnuit")){
var nbrnuit=localStorage.getItem("nbnuit");
}else{
var nbrnuit="";
}

document.getElementById('depart').value=depart;
document.getElementById('dfin').value=retour;
document.getElementById('nbr_nuit').value=nbrnuit;
}

$(document).ready(function() {
	initMedia();
	});
</script>
<script type="text/javascript" src="https://tn.tunisiebooking.com/voyage_organise/include/liste_img_detail.js"></script>
</div>
<div style="clear:both"></div>
	</div>
</div>
<div style="clear:both">
  <div style=" margin:0px 10px 0px 10px;"></div>
  <div style=" margin:-9px 10px 0px 10px;"></div>
</div>
		</div>
          <div id="descriptif_div" class="cache">
       <div id="ruslt_descriptif">
	   <h2>Infos Pratiques :</h2>
<p>Pour ces vacances en Tunisie, vous pouvez envisager de s&eacute;journer &agrave; Hammamet.</p>
<p>Vous aurez l&rsquo;occasion de visiter le site arch&eacute;ologique de Pupput et la M&eacute;dina de Hammamet.</p>
<p>Pour ce faire, vous devez vous trouver un h&ocirc;tel dans cette ville.&nbsp;</p>
<p>&nbsp;</p>
<h3>Situation de l'hotel :</h3>
<p>Houda Yasmine est un h&ocirc;tel de 4 &eacute;toiles situ&eacute; &agrave; proximit&eacute; d&rsquo;une des plages de Hammamet.</p>
<p>Les vacances les pieds dans l&rsquo;eau y sont garantis, l&rsquo;h&ocirc;tel est &agrave; 5 minutes &agrave; pied de la plage.</p>
<p>Il est &agrave; seulement 8 km du centre-ville d&rsquo;Yasmine Hammamet et &agrave; environ 200 m&egrave;tres du port de plaisance de la r&eacute;gion.</p>
<p>L&rsquo;&eacute;tablissement est &agrave; 100 km de l&rsquo;a&eacute;roport de Monastir, &agrave; 60 km de l&rsquo;a&eacute;roport de Tunis Carthage et &agrave; 20 km de l&rsquo;a&eacute;roport d&rsquo;Enfidha.&nbsp;</p>
<p>Notamment, vous b&eacute;n&eacute;ficierez d'un acc&egrave;s facile &agrave; des sites touristiques populaires de la r&eacute;gion.</p>
<p>&nbsp;</p>
<h3>Les types d'h&eacute;bergements que puis-je r&eacute;server &agrave; l'&eacute;tablissement :</h3>
<p>L'h&ocirc;tel Houda Yasmine dispose de 250 chambres, meubl&eacute;es et d&eacute;cor&eacute;es pour offrir luxe et confort.&nbsp;</p>
<p>Cet h&ocirc;tel offre une gamme de choix pour r&eacute;pondre &agrave; tous vos besoins.</p>
<p>Vous pouvez v&eacute;rifier les types de chambres disponibles ici :</p>
<p>-Chambres standards : Ces chambres offrent un h&eacute;bergement confortable pour une ou deux personnes.</p>
<p>-Les chambres triples sont id&eacute;ales pour les familles ou les groupes d'amis, elles sont spacieuses et peuvent accueillir jusqu'&agrave; trois personnes.</p>
<p>-Les chambres quadruples : Les chambres quadruples sont con&ccedil;ues pour les familles ou les groupes plus nombreux.</p>
<p style="background: white; margin: 0cm 0cm 15.0pt 0cm;">Elles offrent suffisamment d'espace pour accueillir jusqu'&agrave; quatre personnes, avec des installations adapt&eacute;es pour garantir un s&eacute;jour confortable pour tous les occupants.</p>
<p>Chaque chambre est &eacute;quip&eacute;e par des &eacute;quipements suivants :</p>
<p>- Un balcon , chaque chambre dispose d'un balcon priv&eacute;, offrant un espace ext&eacute;rieur o&ugrave; vous pourrez vous d&eacute;tendre, profiter de la vue et prendre l'air frais.</p>
<p>-Chaque chambre dispose d'une salle de bains privative avec des &eacute;quipements modernes, vous y trouverez une douche ou une baignoire, des toilettes, un lavabo avec des articles de toilette de qualit&eacute;.</p>
<p>- Une climatisation, toutes les chambres sont &eacute;quip&eacute;es d'un syst&egrave;me de climatisation pour vous permettre de r&eacute;guler la temp&eacute;rature et de vous assurer un s&eacute;jour confortable.</p>
<p>- Une t&eacute;l&eacute;vision par satellite, chaque chambre est &eacute;quip&eacute;e d'une t&eacute;l&eacute;vision avec des cha&icirc;nes satellites, vous offrant une vari&eacute;t&eacute; de programmes et de divertissements pour vous d&eacute;tendre et vous divertir.</p>
<p>Vous trouverez aussi un minibar dans chaque chambre, vous permettant de garder vos boissons et collations pr&eacute;f&eacute;r&eacute;es &agrave; port&eacute;e de main.</p>
<p>Un petit dressing, chaque chambre comprend un petit dressing o&ugrave; vous pouvez ranger vos v&ecirc;tements et effets personnels de mani&egrave;re ordonn&eacute;e et pratique.</p>
<p>Un ensemble douche baignoire, la salle de bain de chaque chambre est &eacute;quip&eacute;e d'une combinaison douche/baignoire.</p>
<p>Offrant ainsi une flexibilit&eacute; pour r&eacute;pondre &agrave; vos pr&eacute;f&eacute;rences personnelles lors de votre toilette quotidienne.</p>
<p>Un s&egrave;che-cheveux est disponible dans chaque chambre pour votre commodit&eacute;s.</p>
<p>Ces &eacute;quipements dans chaque chambre garantissent un s&eacute;jour confortable, pratique et luxueuse pour vous rafra&icirc;chir.</p>
<p>&nbsp;</p>
<h3>Restaurants et bars sur place :</h3>
<p>Pour ce s&eacute;jour &agrave; Hammamet, Houda Yasmin Hotel a &eacute;galement pens&eacute; &agrave; offrir &agrave; vos papilles une d&eacute;couverte.&nbsp;</p>
<p>Le complexe dispose d'un restaurant servant une cuisine tunisienne et internationale.</p>
<p>Les repas sont servis sous forme de buffet avec des horaires limit&eacute;s.</p>
<p>Si vous avez une petite soif en cours ou en fin de journ&eacute;e, &eacute;tanchez votre soif dans l'un des deux bars de l'h&ocirc;tel.</p>
<p>Le bar du hall accueille souvent des soir&eacute;es dansantes, des soir&eacute;es folkloriques et des jeux ap&eacute;ritifs.</p>
<p>Pour gouter &agrave; quelques sp&eacute;cialit&eacute;s internationales, on vous recommande le Dar-Elezz qui propose un menu sous forme de buffet.</p>
<p>Que vous recherchiez des saveurs internationales ou que vous souhaitiez explorer diff&eacute;rentes cuisine.</p>
<p>Notamment, l'h&ocirc;tel en mentionnant quelques endroits int&eacute;ressants &agrave; proximit&eacute; de l'h&ocirc;tel :</p>
<p>- Kitchenette &agrave; seulement 14 minutes &agrave; pied de l'h&ocirc;tel, le restaurant Kitchenette propose une vari&eacute;t&eacute; de plats locaux et internationaux.</p>
<p>- Oggi &agrave;14 minutes de marche est un autre restaurant que vous pourrez explorer.</p>
<p>Pour ceux qui pr&eacute;f&egrave;rent une option plus proche, "Le Mistral" est &agrave; seulement 6 minutes &agrave; pied de l'h&ocirc;tel.</p>
<p>- Le Cap Food &amp; Drink, ce restaurant se trouve &agrave; 9 minutes &agrave; pied de l'h&ocirc;tel et offre une vari&eacute;t&eacute; de plats.</p>
<p>Ainsi qu'une s&eacute;lection de boissons, ou vous pouvez profiter d'une exp&eacute;rience culinaire sans avoir &agrave; parcourir une grande distance.</p>
<p>Aussi bien, "Le Barberousse Beach Club" &agrave; 9 minutes de marche de l'h&ocirc;tel, est un endroit id&eacute;al pour ceux qui souhaitent se d&eacute;tendre sur la plage.</p>
<p>&nbsp;</p>
<h3>Activit&eacute;s et loisirs disponibles &agrave; l'&eacute;tablissement :</h3>
<p style="background: white; margin: 0cm 0cm 15.0pt 0cm;">L'h&ocirc;tel Houda Yasmine propose une vaste gamme d'activit&eacute;s pour r&eacute;pondre &agrave; tous les go&ucirc;ts.</p>
<p>Vous pourrez profiter d'un parcours de minigolf sur place, id&eacute;al pour une journ&eacute;e d&eacute;tente en famille ou entre amis.</p>
<p>L'h&ocirc;tel offre la possibilit&eacute; de faire de l'&eacute;quitation, permettant aux amateurs de d&eacute;couvrir les environs &agrave; dos de cheval.</p>
<p>Pour les amateurs de chant, l'h&ocirc;tel propose des soir&eacute;es karaok&eacute; o&ugrave; vous pourrez montrer vos talents vocaux et vous amuser en musique.</p>
<p>Les passionn&eacute;s de tennis de table pourront s'affronter lors de parties amicales sur les tables disponibles dans l'&eacute;tablissement .</p>
<p>L'h&ocirc;tel propose des installations &eacute;questres et des possibilit&eacute;s d'&eacute;quitation pour ceux qui souhaitent explorer la r&eacute;gion &agrave; cheval.</p>
<p>Vous pourrez passer un bon moment en jouant au billard, que ce soit en solo ou en compagnie d'autres clients de l'h&ocirc;tel.</p>
<p>Les plus jeunes pourront profiter d'une aire de jeux d&eacute;di&eacute;e o&ugrave; ils pourront s'amuser en toute s&eacute;curit&eacute;.</p>
<p>L'h&ocirc;tel dispose d'une discoth&egrave;que o&ugrave; vous pourrez danser et vous divertir jusqu'au bout de la nuit.</p>
<p>Si vous aimez les jeux de hasard, un casino est disponible sur place pour tenter votre chance et profiter d'une soir&eacute;e excitante.</p>
<p>L'h&ocirc;tel met &agrave; votre disposition un centre de remise en forme bien &eacute;quip&eacute; avec des &eacute;quipements modernes.</p>
<p>Houda Yasmine propose une vari&eacute;t&eacute; d'activit&eacute;s aquatiques pour agr&eacute;menter votre s&eacute;jour ;</p>
<p>Profitez d'une piscine ext&eacute;rieure spacieuse o&ugrave; vous pourrez vous d&eacute;tendre, nager et profiter du soleil.</p>
<p>Si vous souhaitez profiter de la piscine m&ecirc;me lorsque les temp&eacute;ratures sont plus fra&icirc;ches, une piscine chauff&eacute;e est disponible pour que vous.</p>
<p>Les amateurs de natation pourront profiter d'une piscine couverte, id&eacute;ale pour faire quelques longueurs ou simplement se relaxer dans l'eau.</p>
<p>Pour les plus jeunes pourront s'amuser en toute s&eacute;curit&eacute; dans une piscine sp&eacute;cialement con&ccedil;ue pour eux, o&ugrave; ils pourront barboter et jouer dans l'eau.</p>
<p>Notamment l'h&ocirc;tel propose d'autres installations et activit&eacute;s pour votre divertissement mentionn&eacute;es pr&eacute;c&eacute;demment.</p>
<p>Telles que les options de restauration, les sports nautiques comme la plong&eacute;e et le ski nautique.</p>
<p>&nbsp;</p>
<h2>Les plus de l'h&ocirc;tel Houda Hammamet 4*, TunisieBooking :</h2>
<p>&Agrave; la r&eacute;ception, vous aurez un personnel multilingue pour vous accompagner tout au long de votre s&eacute;jour.</p>
<p>Vous pourrez le contacter de jour comme de nuit pour avoir le service de concierge et le service d&rsquo;&eacute;tage.</p>
<p>Il vous apportera &eacute;galement son aide pour l&rsquo;organisation des excursions et des visites dans les alentours.&nbsp;</p>
<p>L'h&ocirc;tel Yasmine Hammamet propose une gamme compl&egrave;te de commodit&eacute;s pour r&eacute;pondre aux besoins de ses clients :&nbsp;</p>
<p>- Un service de change o&ugrave; vous pouvez &eacute;changer votre devise contre la monnaie locale.</p>
<p>- Un service de blanchisserie et de repassage.</p>
<p>- Un service d&rsquo;affaires comprenant des services de fax, de photocopie et d'impression.</p>
<p>- Des salles de r&eacute;unions et de conf&eacute;rence sont disponibles pour accueillir vos &eacute;v&eacute;nements d'affaires ou vos r&eacute;unions professionnelle.</p>
<p>- Un service de location de voitures pour votre commodit&eacute;.</p>
<p>- Une navette d'a&eacute;roport pour faciliter votre transfert depuis et vers l'a&eacute;roport.</p>
<p>- Des boutiques de souvenirs et de cadeaux pourrez acheter des souvenirs ou des cadeaux pour vos proches.</p>
<p>- Salon de coiffure vous pourrez prendre soin de votre apparence et profiter de services de coiffure professionnels.</p>
<p>Notamment, une institut de beaut&eacute; vous pourrez b&eacute;n&eacute;ficier de soins esth&eacute;tiques et de bien-&ecirc;tre tels que des massages, des soins du visage et des manucures.</p>
<p>Pour plus d'inforamtions, rendez-vous &agrave; l'une de nos <a href="/">agences de voyage</a> les proches de chez-vous.&nbsp;</p>
<p><strong>Remarque:</strong>&nbsp;</p>
<p>L'<a href="/hotels_hammamet.html">h&ocirc;tel Hammamet</a> propose une navette d'a&eacute;roport, mais elle est payante.</p>
<p>L&rsquo;&eacute;tablissement est ouvert 24 h/24 pour accueillir les touristes.</p>
<p>Taxe impos&eacute;e par l'h&ocirc;tel &agrave; 3.00 TND par personne et par nuit, cette taxe ne s'applique pas aux enfants de moins de 12 ans.</p>
<p>Par contre, il vous faudra lib&eacute;rer les chambres avant midi pour le d&eacute;part au risque de devoir payer une nuit&eacute;e de plus.</p>
<p>&nbsp;</p>
<h3>Cet hotel est connu aussi sous le nom :</h3>
<p>Houda Hammamet Yasmine</p>
<p>h&ocirc;tel yasmine hammamet</p>
<p>hotel yasmine hammamet avis&nbsp;</p>
<p>hotel yasmine hammamet 4 &eacute;toiles</p>


<p>&nbsp;</p>	   <div style="clear:both"></div>
          </div>
          

  <div style="clear:both"></div>
</div>
<div id="avis_div" class="cache">
       <div id="ruslt_avis">
	  <div class="contenu_avis_tnb">
		<div class="titr_hot_av"><h3 style="font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 36px;
    color: #262626;">Avis H&ocirc;tel Houda Yasmine Hammamet  </h3> </div>
						<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Ben slamia M</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Moyen </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											on pass? un s?jour correcte 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Février 2024</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">jedidi a</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">satisfaction de s&eacute;jour</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											satisfait de service, bon h&ocirc;tel, personnel chaleureux 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Septembre 2023</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Ali M</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Bon s&eacute;jour </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Bien pass&eacute;.									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Septembre 2023</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">MOHAMED N</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">moyen </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											sejour passable 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2023</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Taboui F</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Excellent s&eacute;jour </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											J&#039;ai pass&eacute;e des agr&eacute;ables jours , de tous les c&ocirc;t&eacute;s : restauration, animation, r&eacute;ception... Merci beaucoup &agrave; tous l&#039;&eacute;quipe de l&#039;h&ocirc;tel Houda Yasmine Hammamet 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2023</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">FRCHICHI H</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">moyen</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											sejour tres tres moyen a Houda Yasmine Hammamet									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Juillet 2023</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Hajri S</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">satisfait </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											tres bon rapport qualite prix  									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Juillet 2023</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Massoudi L</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">avis favorable</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											j&#039;ai bien appr&eacute;ci&eacute; le s&eacute;jour. en termes d&#039;hygi&egrave;ne, organisation et accueil du personnel, c&#039;est parfait. il manque un peu de choix sur la nourriture propos&eacute;e.									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Janvier 2023</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">bachar m</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">excellent </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											un s&eacute;jour exceptionnel buffet vari&eacute;s et tr&egrave;s bon, animation top merci fatma et kaloutcha chambre tr&egrave;s propre et femme de chambre tr&egrave;s professionnelle merci toutes l&#039;&eacute;quipe houda yassmine .									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Octobre 2022</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Ghouma Y</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Des jours d&#039;&eacute;vasion </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Toute la famille a fait quelques jours de repos &agrave; el Hammamet 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Septembre 2022</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Klai  S</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Juste un logement </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Vaut le prix donc ne pas s&#039;attendre &agrave; un 4 &eacute;toiles c&#039;est un 2 etoile
l&#039;accueil et tr&egrave;s professionnel
Les chambres sont agr&eacute;ables je vous conseille le logement seul
La note est seulement pour le personnel et la chambre qui est convenable									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Juillet 2022</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Mhenni  F</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">bien </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Personnels et r?ceptionniste aimable accueillant et tr?s compr?hensive 
Alors qu'on ?tait en vacances mais il n'y avait pas de programme de loisirs 
Pour l'animation des  soir?es tr?s moyenne 
Piscine couverte petite 
Pour le massage et les forfaits du hammam et sauna tr?s mauvais plan 
J'?tais en obligation de changer les chambres ? cause de leur ?tats 
Prix cher par rapport ?  ce que j'ai trouv? 
Seulement le personnel ?tait souriant ce qui m'a apais? mon s?jour et la rendu confortable 
Je ne le recommande pas malheureusement 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Mars 2022</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Abidi S</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">bien </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											bon s?jour 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Mars 2022</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Yosra  R</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">bon hotel </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Ambiance chaleureux, un bon service ,animation 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Decembre 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">asma m</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">chambres catastrophiques </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											la chambre &eacute;tait catastrophique fuite d&#039;eau salle de bain chambre glaciale et absence de descents de lit au bout de 10 appels t&eacute;l&eacute;phoniques et de r&eacute;clamations ils nous ont finalement chang&eacute; de chambre  									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Decembre 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Benmesssaoud O</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">UN WEEKEND A OBLI&eacute;</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											LE SERVICE DES CHAMBRE N&#039;ETAIS PAS PRESENT.
SERVICE TRES MODESTE ET ABSENCE DE CHALEUR D&#039;ACCUEILLEMENT									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Novembre 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Khemiri S</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Moyen </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Chambre moyenne, bien que l&#039;h&ocirc;tel &eacute;t&eacute; vide, on m&#039;a attribu&eacute; une chambre m&eacute;diocre, meubles anciens, sans tapis, chauffage ne marche pas, ne parlant pas du bain maure, mauvaise exp&eacute;rience &agrave; &eacute;viter absolument, pas de vapeur et chauffage non fonctionnel, avec un tarif exorbitant, de la pire arnaque. Un hommage au chef de cuisine qui a fait de son mieux pour retourner la situation, tr&egrave;s professionnel et &agrave; l&#039;&eacute;coute des clients, un hommage  au chef d&#039;animation &eacute;galement.									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Octobre 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Oueslati E</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Hotel bien</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Acceptable rapport qualit&eacute; prix les jours hors weekend 
Sinon durant le weekend il devient catastrophique 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">BOUNEB R</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Service et propret&eacute; remarquable</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											L&#039;accueil est chaleureux, les chambres sont soigneusement organis&eacute;es, la propret&eacute; est remarquable, et le restaurant est tr&egrave;s g&eacute;n&eacute;reux.
  									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">MEKKI B</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Avis</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_1.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Chambre 504 tellement nulle.
On a demand&eacute; une chambre avec un lit double ( voyage de noces). Ils nous ont donn&eacute; une chambre avec deux lits s&eacute;par&eacute;s, qu&#039;on a d&ucirc; les coll&eacute;s.
Les serviettes sont r&eacute;cup&eacute;r&eacute;s par les femmes de m&eacute;nage, et ne sont rendus qu&#039;apr&egrave;s 3 r&eacute;clamation &agrave; la r&eacute;ception ( une journ&eacute;e enti&egrave;re).
L&#039;&eacute;clairage est nul.
La nuit on frappe toujours &agrave; la porte.
Toujours le m&ecirc;me menu au restaurant.
Un des responsables de l&#039;h&ocirc;tel me parlait agressivement.
Par contre les serveurs essayaient de satisfaire les clients et r&eacute;pondre &agrave; leurs besoins par le peu de moyens qu&#039;il avaient.									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">mohamed ghazi k</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">avis sur H&ocirc;tel Houda Yasmine Hammamet</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Tout s&#039;est bien pass&eacute;  et il n&#039;y a rien &agrave; dire sur l&#039;h&ocirc;tel et sur le personnel. Mais il faut penser &agrave;  garder le bon service m&ecirc;me s&#039;il y a beaucoup de clients car l&#039;h&ocirc;tel &eacute;tait presque complet entre le 22 Ao&ucirc;t et le 24 Ao&ucirc;t et il y a avait toujours une longue  queue ( une attente ennuyante) pour avoir des beignets , les omelettes, les pizzas et en buffet aussi. Il faut penser &agrave; tout &ccedil;a sinon c&#039;&eacute;tait un bon s&eacute;jour et je ne l&#039;ai pas regrett&eacute; 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">gmati h</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">passable</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_1.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											service tres ordinaire memme moins									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Omar S</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Tr&egrave;s bien</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Il est tr&egrave;s bien surtout le c&ocirc;t&eacute; animation 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Ochi K</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Avis</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											C&#039;est bien pass&eacute;
Rapport qualit&eacute;-prix est bon									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Mai 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">abassi m</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">tr&egrave;s bien</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											un tr&egrave;s bon &eacute;tablissement									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Avril 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Karim  B</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Bon s&eacute;jour </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Bravo a toutes les &eacute;quipes de l&#039;h&ocirc;tel 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Avril 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Mabrouk A</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Bon sejour</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Bon rapports qualit? prix 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Mars 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Mohamed Ali  M</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Rapport Qualit?/Prix bien</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											En basse saison le rapport qualit?/prix de l'h?tel est acceptable, piscine couverte bien chaff?e, les repas sont acceptables									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Mars 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">mchiri w</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Tn booking</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Merci pour votre service									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Janvier 2021</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Abadi  A</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">De retour et toujours satisfait</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Htel proche et transport trs disponible. - Repas de qualit et quipe pro et aimable. - Sjour de 2 nuites trs bien pass (Bb et les 2 parents)
									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Decembre 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Hatem  </div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">royal</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											excellent									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Octobre 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Jaouher Z</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Bravo top</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Bon sejour merci tunisiebooking									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Octobre 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Ben Mabrouk M</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Remercie</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Excellent service									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Octobre 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Bennour  B</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Toujours pareil</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Dommage pour les buffets. Les desserts sont toujours les mmes ??
									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Septembre 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">TURKI H</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Moyen</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Moyen									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Abdimi Y</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Tunisi</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Le prix il tait bon mais le reste ne suit pas									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Messaoudi R</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Bon s?jour</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Bien rapport qualit? prix									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Khemiri t</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Bon</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Bon									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">KSENTINI M</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">htel correcte</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											htel correcte									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Dridi  Y</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Bon htel</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Correct									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">BEN ROMDHANE H</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">EXCELLENT</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											HOUDA YASMINE HAMMAMET									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Dhaw  R</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Bien</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Rapport qualit?/ prix est bien									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Bezzine R</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">propre</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											hotel correcte tres bien cote hygiene									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Juillet 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">mahjoub ep kaboura  </div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Un sejour formidable</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Un bon hotel sur tous les niveaux Personnel chaleureux et accueillant Gastronomie delicieuse Animation au top surtout Doudou (khouloud). Bonne continuation
									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Mars 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">KARAOULI  Y</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">BON HOTEL</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											BON HOTEL A RECOMMANDER
									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Février 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">ABADI A</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Excellent un grand merci</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Excellent un grand merci									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Janvier 2020</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">mejri  m</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">bonne affaire</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											rapport prix/qualit parfait									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Novembre 2019</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Walha  M</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Services</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Satisfait									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Octobre 2019</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">LAJILI  C</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Htel sympa</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Juste proposer plus de plats locaux . Mais htel trs sympa comme pour le personnel
									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2019</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">mohamed Kamel  l</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">bon sejour</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Personnel tres aimable et service bien organise
									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Juillet 2019</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">ben mosbeh  </div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Satisfaite</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Satisfaite									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Février 2019</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Haythem H</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Pas mal</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Pas mal visiter									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Janvier 2019</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">barhoumi  s</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Excellent </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Excellent service et trs bon accueil
									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Janvier 2019</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Yassine G</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">excellent sejour</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											une tres belle vacance dans un Hotel tres correct.
									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Janvier 2019</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Bousdira W</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">MOYEN</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											MOYEN									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Decembre 2018</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Aymen   </div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Moyen</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Tres moyen comme qualite j esperais mieux pour un 4 etoiles, chambres tres standard, menu tres restreint et pas assez de choix, bon accueil et personnels, pas assez de activites a l hotel, bref tres moyen									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Novembre 2018</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Hadji  A</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Problme</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											La cuisine de l hotel houda est moyenne, les repas ne sont pas varis. Pas assez de choix avec une qualit? moyenne ou m?me pas. Le service est bon dans l ensemble . Les chambres ne sont pas spacieuses									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Septembre 2018</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">jemai m</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Hotel moyen</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Hotel moyen									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Mars 2018</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Lemsi  A</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">hotel moyen</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											hotel moyen									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Février 2018</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">trabelsi H</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">hotel moyen</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											hotel moyen									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Février 2018</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Masmoudi   </div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">les plats sont varies et delicieux</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											les plats sont varies et delicieux, service maintenance rapide, on a passe un bon sejour La piscine chauff? est petite et peine chauff?, il manque une s?che-cheveux dans la salle de bain									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Janvier 2018</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Selmi M</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Moyen</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Manque un schoir, des serviettes, des tlcommandes de TV sont obtenues sous condition de payer une caution de 20 DT par tlcommande. Porte se bloque frquemment. repas de moyenne qualit.Manque un s?choir, des serviettes, des t?l?commandes de TVs et obtenues sous condition de payer une caution de 20 DT par t?l?commande. Porte se bloque fr?quemment. repas de moyenne qualit?.									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Janvier 2018</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Jalloul J</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Tr?s trs bien Tunisie booking </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											 Tunisie booking									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Septembre 2017</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Jalloul  J</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Tr?s trs bien Tunisie booking </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Tous va bien									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Septembre 2017</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">salah  </div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Bon hotel je conseille</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											Cet personnel sont tous souriants chambre correct mais pas chaleureuse ct d?co manque de tableaux, de tapis a part cela tout est bon .on a pass? un agr?able weekend en famille .et en plus c est a Yasmine Hammamet									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Mai 2017</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Moez N</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">bon rapport qualit?/prix</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											un bon rapport qualit?/prix, le personnel est tr?s accueillant, la propret? y est, les repas sont vari?s, juste les chambres sont pas spacieuses surtout pour les familles avec 1 ou 2 enfants... je le recommande...									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Avril 2016</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">Anissa S</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Excellent s?jour</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											On a pass? des moments inoubliables, pour nous comme pour nos enfants,tout est excellent : le petit d?jeuner,le repas, les animateurs, le piscine couverte, le personnel , vraiment un grand merci pour tout le monde.
Bravoooooooooooooooooooooooooooooooooooooooooooooooooo									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Mars 2016</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">ADEL T</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">Tres bien</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_4.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											personnel tr?s chaleureux et malgr? les circonstances du pays et du couvre feu, ils ont gard? sourire et accueil parfait. propret? chambre et hotel, disponibilitr? personnel femme de chambre, repas vari?s malgr? le nombre reduit des visiteurs.
 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Janvier 2016</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">slim s</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">remarque</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_2.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											- manque un lit a deux adulte il y a deux lit s?pare elle ne pas confort.
- le chambre manque beaucoup des chose comme tv plasma le chaine ne fonctionne pas.
- service est moyen. 
- r?ception moyen.
- restaurant ne pas malle.  
									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2015</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">ADNENE A</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">SEJOUR AGREABLE</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											MERCI TUNISIEBOOKING
SEJOUR AGREABLE .HOTEL PROPRE,les serveurs sont tres serviables,les repas sont bons 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Aout 2015</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">sofien b</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">tr?s bon h?tel</h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											un tr?s bon h?tel c?t? rapport qualit?/prix. son point fort ?tait son personnel accueillant et souriant. la chambre spacieuse et propre, les repas pas mal. merci houda yasmine hammamet et ? tr?s bient?t 									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Juillet 2015</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
								<div class="ligne_av_tnb">
 					<div class="img_c_av_tb">
							 <div class="ligne_img_clien">
							 		<div class="img_client_av"></div>
									<div class="lib_client_av">ahmed t</div>
									<div style="clear:both"></div>
							 </div>
							  <div class="ligne_part_av">
							 		<div class="img_parten_av"></div>
									<div class="lib_parte_av">Client Tunisie Booking</div>
									<div style="clear:both"></div>
							 </div>
					</div>
					<div class="contenu_av_tb">
							<div class="acont_av_top">
							<div class="titre_av">
									<div style="float:left"><h4 style="font-size:16px; font-weight:bold; margin-top:-2px;">bon hotel </h4></div>
									 <div style="padding-top:2px;float:left;width:70px; margin-left:10px;">
									 		<img class="lazy" data-src="https://tn.tunisiebooking.com/images/note_3.5.png"  alt="note" />
									 </div>
									 <div style="clear:both"></div>
							 </div>
							</div>
							<div class="acont_av_centre">
									<div class="txt_avis_tb">
											bon hotel et bon service et merci pour mon agence tnbooking et nchallah a prochaine. .....  
et merci de faire un service d appel le weekend en cas de besoin.............      
merci...                     
									</div>
									<div class="txt_avis_tb">
																				</div>
									<div class="mois_sej">avis Decembre 2014</div>
							</div>
							<div class="acont_av_bas"></div>
					</div>
			<div style="clear:both"></div>
		</div>
				<div id="avis_cacher" style="display:none">
</div>

<script type="text/javascript">
function afficher_avis(){document.getElementById('avis_cacher').style.display="";document.getElementById('plus_av').style.display="none";}
</script>
</div>
          </div>
  <div style="clear:both"></div>
</div>

          <div id="video_div" class="cache">
       <div id="ruslt_video">
          </div>
  <div style="clear:both"></div>
</div>

          <div id="situation_div" class="cache">
       <div id="ruslt_situation">

          </div>
  <div style="clear:both"></div>
</div>
          <div style="clear:both; height:1px; font-size:1px">&nbsp;</div>
      </div>
<div>
</div>
  </div>
  </div>

<div class="sidebar" style="float:left; width:292px; margin-top:-50px; border:0px solid #333333">
<div >
		 <div style="clear:both; padding:2px; margin-bottom:5px; margin-left:20px; ">
     <div style="margin-top: -7%;
    margin-left: 16%;
    margin-bottom: 1%;">
    <img class="icon__tripadv lazy" alt="icon__tripadv" data-src="/theme/images/icon_tripadvisor.svg" style="margin-top:1%;width:29.43px;height: 29.43px;"/>
    <span class="span_tripadv" style="/*display:block;*/">4.0</span>
    <span class="span_tripadv_y" style="/*display:block;*/">/5</span>
    <span class="notetrip">Très Bien</span>
    </div>

	</div>
		 </div>

     <div class="v194_23" id="tarifde" style="" >
       <div  onClick="scrollt2();" type="button" class="v194_22 v_tarif_dispo" id="v194_22" style="font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif; color:#FFFFFF ;padding-top: 20%;
    text-align:center;">
       <span id="span_btn_224">Tarifs & Dispos</span>

      </div>
    </div>

    <div class="v194_23" id="verifde" style="display: none;margin-left: -4%;">
      <div  onClick="scrollt2();" type="button" class="v194_22 v_tarif_dispo" id="v194_22" style="display: none;font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif; color:#FFFFFF;padding-top: 21%;
    font-style: normal;font-weight: 600;font-size: 20px;line-height: 23px;letter-spacing: 0.005em; width: 292px !important;height: 48px;text-align:center;">
      <span style="width: 100%;" id="span_btn_224">Vérifier la disponibilité</span>
     </div>
   </div>



	<div class="coin_arrandi" style="clear:both; padding:2px; margin-bottom:-20%; " >
	<div class="titrdest_hotel_conselte" style="font-size:22px; padding-left:10px; display:none;"><strong>Ce qu&apos;on aime ?</strong></div>
	<div class="accrochepar" style="display:none;">
		<div style="clear:both; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; padding:8px 5px 8px 20px; font-size:15px;  color:#262626; ">
	<img class='lazy' data-src='' align='absmiddle' alt='' /> Burkini autoris�</div>
    	<div style="clear:both; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; padding:8px 5px 8px 20px; font-size:15px;  color:#262626;border-top: 1px solid #eaeaea ">
	<img class='lazy' data-src='' align='absmiddle' alt='' /> Parfait pour les couples</div>
    	<div style="clear:both; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; padding:8px 5px 8px 20px; font-size:15px;  color:#262626;border-top: 1px solid #eaeaea ">
	<img class='lazy' data-src='' align='absmiddle' alt='' /> Plage a proximite</div>
    	<div style="clear:both; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; padding:8px 5px 8px 20px; font-size:15px;  color:#262626;border-top: 1px solid #eaeaea ">
	<img class='lazy' data-src='' align='absmiddle' alt='' /> Parfait pour les familles</div>
    	<div style="clear:both; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; padding:8px 5px 8px 20px; font-size:15px;  color:#262626;border-top: 1px solid #eaeaea ">
	<img class='lazy' data-src='' align='absmiddle' alt='' /> Sport nautique</div>
    	</div>
	</div>

<div >
		<div style="">
<div class="" style="">
	 <div style=""><img class="" data-src="" alt="" width="" height="" style=""/></div>
	</div>

	<!--<div style="background-image:url(https://tn.tunisiebooking.com/theme/images/avisiconee.png); width:295px; height:15px;">-->
<div id=""></div>
	</div>

	
	</div>
		<div style="margin-top:6%;margin-bottom:6%;">
		<div class="coin_arrandi" style="clear:both; padding:2px; margin-left: -1%;">
			<div style="clear:both; font-family:-apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif; padding:0px 5px 0px 0px; font-style: normal;font-weight: 600;font-size: 20px;line-height: 27px; color:#262626;">Principales Services</div>
		</div>
		<div style="margin-top:7%;">
			                <span data-type="couple" class="cnaNlO" onClick="menu_detail('div_equipement');" href="#">
	                    <img style="margin-right: 5%;" width="19.07px" height="13px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f7894a0a0d3.18526142.svg" />
	                    <span>Emplacement</span>
	                </span>

	                	                <span data-type="couple" class="cnaNlO" onClick="menu_detail('div_equipement');" href="#">
	                    <img style="margin-right: 5%;" width="19.07px" height="13px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f799878a1c6.67121555.svg" />
	                    <span>Chambres</span>
	                </span>

	                	                <span data-type="couple" class="cnaNlO" onClick="menu_detail('div_equipement');" href="#">
	                    <img style="margin-right: 5%;" width="19.07px" height="13px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f7858e07135.59832642.svg" />
	                    <span>Internet</span>
	                </span>

	                	                <span data-type="couple" class="cnaNlO" onClick="menu_detail('div_equipement');" href="#">
	                    <img style="margin-right: 5%;" width="19.07px" height="13px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/6555d3d46f59e2.41493131.svg" />
	                    <span>Restauration</span>
	                </span>

	                	                <span data-type="couple" class="cnaNlO" onClick="menu_detail('div_equipement');" href="#">
	                    <img style="margin-right: 5%;" width="19.07px" height="13px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/6555d434e31f23.21049297.svg" />
	                    <span>Piscines</span>
	                </span>

	                	                <span data-type="couple" class="cnaNlO" onClick="menu_detail('div_equipement');" href="#">
	                    <img style="margin-right: 5%;" width="19.07px" height="13px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f78b7eeb406.44088497.svg" />
	                    <span>Parking</span>
	                </span>

	                	                <span data-type="couple" class="cnaNlO" onClick="menu_detail('div_equipement');" href="#">
	                    <img style="margin-right: 5%;" width="19.07px" height="13px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f78c24f3748.45893917.svg" />
	                    <span>Activites et Animations</span>
	                </span>

	                				</br>
					<span onClick="menu_detail('div_equipement');" style="cursor:pointer;color: #4972D1;font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 450;font-size: 16px;line-height: 18px;position: absolute;padding-top: 1%;width: 27%;margin-left: 0.5%;">
						<u>Voir tous les services <img style="margin-left: 3%;" class="lazy" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech_bleu.svg" alt="flèche" width="6.17px" height="10px"></u>
					</span>
		</div>
	</div>
<div class="coin_arrandi" style="clear:both; padding:2px; margin-top:10px; display:none; ">
<div id="fbbootan_w" class="fbbootan" onClick="postLike('want_to_go')">
		 <div id="fb_iwantgo"  class="fb_wantgo">
		 <div id="b_borderw" class="b_border" style=" height:26px;"><span id="nbr_want" style="font-weight:normal">120</span>&nbsp; je veux y aller
		 </div>
		 </div>
		 </div>
</div>

<div class="coin_arrandi" style="clear:both; padding:2px; margin-top:10px; display:none;">
<div id="fbbootan_a" class="fbbootan" onClick="postLike('appreciate')">
		 <div id="fb_ijaime" class="fb_jaime">
		 <div id="b_borderj" class="b_border" style=" height:26px;" > <span id="nbr_app" style="font-weight:normal">169</span>&nbsp; j&apos;aime bien
		 </div>
		 </div>
		 </div>
</div>

</div>
<div style="clear:both; height:1px;font-size:1px">&nbsp;</div>
</div>
<div id="ereur" class="plan_moteur cadremsgerreur_cache">
Nous n&apos;avons plus le nombre ou le type de chambre qui satisfait votre demande.
 </div>

<div id="ruslt" style="margin-bottom:2%;" >
		 <div class="sidebar" style="margin-left:5px; ">
     </div>
		 <div id="moteur_rech" style="clear:both; z-index:1;height:88px; ">
	<div id="id_tarif"></div>

  <div style="display:none"></div>


    <form name="hotel" id ="hotel" method="get" >

		<div class="moteur_detail">
		<div class="ligne_detail_recape recape_moteur"  style="" >
			<div class="v312_1355">
				<div class="v2_597 container" style="/*width: 100%;*/">
					<div class="v37_34" id="bodyresponsive">
						 <div class="v37_67">
							 <div class="v37_72">
								 <div class="v37_73" id="col_arrivee">
									 <div id="icon_arriv" style="margin-left: 7%;float: left;margin-top: 6%;">
									 	<img class="lazy" alt="ic-cald.svg" width="24px" height="24px" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-cald.svg" style="background-image: url(&quot;https://tn.tunisiebooking.com/images/icone-moteur/ic-cald.svg&quot;);">
									 </div>
									 <span class="v37_75">Arrivée</span>
									 <div class="v37_74_col_arr">
										 <div id="check1">
										 <div id="cont_depart"></div>
										 <input type="text" id="checkin" class="checkin" name="dep" aria-label="checkin" value="03/04/2024" readonly="readonly" style="cursor:pointer;border:2px solid transparent;height:20px;width:100%;font-size:16px;line-height:18px;font-weight:500;outline:none;font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif;background:#f3f5f7;" />
										 <input type="hidden" id="departt"   value="03/04/2024"/>
										 </div>
									 </div>
								 </div>
								 <div class="colonne_depart" style="">
									 <div id="icon_arriv" style="margin-left: 7%;float: left;margin-top: 6%;">
						 				 <img class="lazy" alt="ic-cald.svg" width="24px" height="24px" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-cald.svg" style="background-image: url(&quot;https://tn.tunisiebooking.com/images/icone-moteur/ic-cald.svg&quot;);">
					 				 </div>
					 				 <span class="v37_75">Départ</span>
									 <div class="v37_74_col_dep">
					 					<div id="check_dep">
					 											 						<div id="cont_arrivee"></div>
					 						<input type="text" id="checkout" class="checkout1" aria-label="checkout" name="dfin" value="05/04/2024" readonly="readonly" style="cursor:pointer;border:2px solid transparent;height:20px;width:100%;font-family:-apple-system,'Roboto', Helvetica, Arial, sans-serif;font-size:16px;line-height:18px;font-weight:500;outline:none;background:#f3f5f7;" />

											<input type="hidden" id="dfin" value="05/04/2024" />

											<input type="hidden" id="col_arrive" name="" value="05/04/2024"/>

										</div>
					 				</div>
								 </div>
							 </div>
							 <div class="v165_156 colonne_destination" id="col_destination">
								 <div class="v162_15_repch">
									 <img  alt="flèche" width="15px" height="20px" class="lazy" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech.svg" style="background-image: url(&quot;https://tn.tunisiebooking.com/images/icone-moteur/ic-flech.svg&quot;);">
								 </div>
								 <div class="v64_170_ch">
									 <div class="champs_dest" id="chdest" style="float: left;cursor: pointer;font-size: 16px;color: #fff;width: 500px;">
										 <div class="chambres" style="float:left;">
											 <input name="retourh" type="hidden" id="retourh" value="" />
											 <div class="nombre_chambre" style="margin-top:0%;float:left;color:#262626;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-size:15px;font-weight:400;">
												 <div class="styled-select-nb-chambre" id="selectch" style="display:flex;">
													 <div id="text-chambres" style="float:left;">
														 <span id="span-ch" >
															 1															</span> Chambre ,</div>
													 <div id="text-pax_ad"><span id="span-pax">2</span> Adulte ,</div>
													 <div id="text-enfant" style="float:left;"><span id="span-en" > 0 </span>Enfant </div>
												 </div>
												 <input type="hidden" name="chambress" id="select_chh" value="1"/>

											 </div>
										 </div>
									 </div>
								 </div>
								 <div class="v87_280_pers">
									 <img class="lazy" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-adlt2.svg" alt="adulte" width="16.7px" height="16px">
								 </div>
							 </div>
						 </div>
						 <div class="v194_27_btn">
							 <div onClick="submit_auto_modif()" type="button" class="v194_22 v_tarif_dsp_moteur" id="v194_22" style="font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif; color:#FFFFFF;padding-top: 6%;text-align:center;">
							 	<span id="span_btn_224_t">Tarifs &amp; Dispos</span>
								<div id="loading_btn_224_t" class="lds-ellips" style="display:none;">
									<div></div><div></div><div></div><div></div>
								</div>
							 </div>
					 	 </div>
					</div>
<div class="scroll_presentation"></div>
				</div>
			</div>


		</div>
		</div>

		<div class="recap_moteur_detail" style="display:none;margin-top:0px;">
		<div class="recap recap_moteur" style="margin-left: 1.5%;">
			<!--<span>Modifier votre séjour Hammamet</span>-->
			<span>Chambres disponibles</span>
			<!--<div style="margin-top: -0.6%;float: left;margin-left: 50.5%;">
				<a onclick="changer_hotel('Hammamet')" style="cursor:pointer;">
					<span style="color: #4972D1;font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 500;font-size: 16px;line-height: 18px;position: absolute;padding-top: 1%;width: 27%;margin-left: 2.5%;">
						<img style="margin-left: 3%;transform: rotate(180deg);width: 8.075px;height: 14px;" src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech_bleu.svg" alt="flèche" width="6.17px" height="10px">
						<u style="margin-left: 2%;"> Voir d’autres hôtels </u>
					</span>
				</a>
			</div>-->
		</div>
		<div class="ligne_detail_recap recap_moteur" style="margin-left:1.5%;" >
			<input name="source_comm" type="hidden" value="web desktop" />
			<input type="hidden" id="test_clic" value="">
			<input type="hidden" id="formule_slect" value="">
						<input type="hidden" id="type_chambre" value="">			<input type="hidden" id="testsession" value="">
			<input type="hidden" name="id_xml_hotel" id="id_xml_hotel" value="36">
			<input type="hidden" name="ville" id="ville" value="Hammamet">
			<div class="bloc_date_arr"  id="arrivee">
				<div id="icon_arriv" style="margin-left: 7%;float: left;margin-top: 6%;">
					<img class="lazy" alt="ic-cald.svg" width="24px" height="24px" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-cald.svg" style="background-image: url(&quot;https://tn.tunisiebooking.com/images/icone-moteur/ic-cald.svg&quot;);">
				</div>
				<span class="v37_75">Arrivée</span>
				<div class="v37_74">
					<div id="check1">
										<div id="cont_depart"></div>
					<input type="text" id="checkin1" class="checkin2" name="dep" aria-label="checkin" value="03/04/2024" readonly="readonly" style="cursor:pointer;border:2px solid transparent;height:20px;width:100%;font-size:16px;line-height:18px;font-weight:500;outline:none;font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif;" />
					<input type="hidden" id="depart" name="depart" value="03/04/2024"/>
				</div>
				</div>
			</div>
			<div class="bloc_date_dep col_dep">
				<div id="icon_arriv" style="margin-left: 7%;float: left;margin-top: 6%;">
					<img class="lazy" alt="ic-cald.svg" width="24px" height="24px" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-cald.svg" style="background-image: url(&quot;https://tn.tunisiebooking.com/images/icone-moteur/ic-cald.svg&quot;);">
				</div>
				<span class="v37_75_dep">Départ</span>
				<div class="v37_74_dep">
					<div id="check_dep">
												<div id="cont_arrivee"></div>
						<input type="text" id="checkout1" class="checkout2" aria-label="checkout" name="dfin" value="05/04/2024" readonly="readonly" style="cursor:pointer;border:2px solid transparent;height:20px;width:100%;font-family:-apple-system,'Roboto', Helvetica, Arial, sans-serif;font-size:16px;line-height:18px;font-weight:500;outline:none" />
						<input type="hidden" id="arrive" name="arrivee" value="05/04/2024"/>
					</div>
				</div>
			</div>
			<div id="divnuit" style="display:none;">2 nuit(s) </div>
			<input type="hidden" id="nbr_nuit" name="nbr_nuit" value="2"/>
			<div class="bloc_repartition_chambre  v165_156" id="col_destination">
			<div class="v162_15">
				<img  alt="flèche" width="15px" height="20px" class="lazy" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech.svg" style="background-image: url(&quot;https://tn.tunisiebooking.com/images/icone-moteur/ic-flech.svg&quot;);">
			</div>
				<div class="v64_170_ch">
					<div class="champs_dest" id="chdest" style="float: left;cursor: pointer;font-size: 16px;color: #fff;width: 500px;">
						<div class="chambres" style="float:left;">
							<input name="retourh" type="hidden" id="retourh" value="" />
							<div class="nombre_chambre" style="margin-top:2%;float:left;color:#262626;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-size:15px;font-weight:400;">
								<div class="styled-select-nb-chambre" id="selectch" style="display:flex;">
									<div id="text-ch" style="float:left;position:relative;"><span id="span-ch" >1</span> Chambre ,</div>
									<div id="text-pax" style="float:left;position:relative;"><span id="span-pax" >2</span> Adulte ,</div>
									<div id="text-en" style="float:left;position:relative;"><span id="span-en" > 0 </span>Enfant </div>
								</div>
								<input type="hidden"  name="chambres" id="select_ch" value="1"/>
								<input type="hidden" name="lastch" id="lastch" value="1"/>
							</div>
						</div>
					</div>
				</div>
				<div class="v87_280">
					<img class="lazy" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-adlt2.svg" alt="adulte" width="16.7px" height="16px">
				</div>
			</div>
		</div>
		</div>
		<div class="bt_modifier" onClick="changer_recherche();">
			<div id="icon_pen" style=" margin-left: 9%;float: left;margin-top: -1%;">
				<img class="lazy" alt="ic_pen" width="18.08px" height="17px" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic_pen.svg" style="">
			</div>
			 <u style="margin-left: 2%;"> Modifier</u>
		 </div>


			<div onClick="submit_auto_modif()" type="button" class="bt_rechercher" id="v194_22" >
				<img id="icon_loop" style="margin-top: -2%;" class="lazy" data-src="https://tn.tunisiebooking.com/images/icone-moteur/icon_search_pink.svg" alt="loop" width="21.87px" height="22px">
				<span id="span_btn_224_re">Rechercher</span>
				<div id="loading_btn_224" class="lds-ellips1" style="display:none;">
					<div></div><div></div><div></div><div></div>
				</div>
			</div>

			<section id="rep_ch" style="position: absolute;z-index: 1;width: 100%;">
			<div class="repations_chambres" id="repch">
					<input type="hidden" name="active" id="active" value="0">
					<div class="trianglebulle"></div>
					<div class="tous_les_chambres" id="tous_les_chambres">

																<div class="repartition_une_ch" id="ch1" style=" display:block;">
											<div class="une_chambre">
													<div class="num_chambre">Chambre 1</div>
																												<div class="fermer_ch1 fermer_ch1_active" id="fc1" onClick="retirer_ch1()"></div>
																																								<div class="groupe_adultes">
															<div class="label_ad">Adulte(s)</div>
															<div class="nombre_adultes">
																	<div class="moins" id="admoins1" onClick="control_moins_ad(1)"></div>
																																		<div class="input_ad" id="adult1">2</div>
																	<input type="hidden" id="adultes1" name="adultes1" value="2"/>
																																		<div class="plus" id="adplus1" onClick="control_plus_ad(1)"></div>
															</div>
													</div>
													<div class="groupe_enfants">
															<div class="label_en">Enfant(s)</div>
															<div class="nombre_enfants">
																	<div class="moins" id="enmoins1" onClick="control_moins_en(1)" style="background-image:url(https://tn.tunisiebooking.com/images/img6.svg)"></div>
																	<div class="input_en" id="ens1">
																	0																	</div>
																	<input type="hidden" id="enfants1" name="enfants1" value="0"/>
																	<div class="plus" id="enplus1" onClick="control_plus_en(1)"></div>
															</div>
													</div>
													<div class="label_enf">De 1 à 11,99 ans</div>
													<div class="groupe_ages" id="groupe_ages1">
															<div class="label_ages" id="label_ages1" >&Acirc;ge(s) de l&apos;enfant(s)</div>
															<div style="float:left;margin-top:1%;margin-left:7%;">
																	<div class="age clear_both" id="age11" style=" ">
																			<select name="age1_1" id="age1_1">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>
																					<option  value="15">15</option>
																			</select>
																	</div>
																	<div class="age" id="age12" style=" ">
																			<select name="age1_2" id="age1_2">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>

																					<option  value="15">15</option>
																			</select>
																	</div>
																	<div class="age" id="age13" style=" ">
																			<select name="age1_3" id="age1_3">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>
																					<option  value="15">15</option>
																			</select>
																	</div>
															</div>
													</div>
											</div>
											<div class="validation-error" id="validation-error1" >
							          <div class="validation-error__content" id="validation-error__content1">
							            Le séjour devra durer une nuit minimum
							          </div>
							        </div>
											<div class="ajouter_ch ajout_ch_activ" id="ac1" onClick="ajouter_ch()"> + Ajouter une autre chambre</div>
											<div class="v194_28 v194_28_active" id="v194_281" >
													<div onClick="terminer_ch1()" type="button" class="v194_29 v_terminer_ch" id="v194_22" style="font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif; color:#FFFFFF">
														<span id="span_btn_224">Valider</span>
													</div>
												</div>
									</div>


																<div class="repartition_une_ch" id="ch2" style=" display:none;">
											<div class="une_chambre">
													<div class="num_chambre">Chambre 2</div>
																																									<div class="fermer_ch" id="fc2" onClick="retirer_ch()"></div>
																										<div class="groupe_adultes">
															<div class="label_ad">Adulte(s)</div>
															<div class="nombre_adultes">
																	<div class="moins" id="admoins2" onClick="control_moins_ad(2)"></div>
																																			<div class="input_ad" id="adult2">2</div>
																		<input type="hidden" id="adultes2" name="adultes2" value="2"/>
																																		<div class="plus" id="adplus2" onClick="control_plus_ad(2)"></div>
															</div>
													</div>
													<div class="groupe_enfants">
															<div class="label_en">Enfant(s)</div>
															<div class="nombre_enfants">
																	<div class="moins" id="enmoins2" onClick="control_moins_en(2)" style="background-image:url(https://tn.tunisiebooking.com/images/img6.svg)"></div>
																	<div class="input_en" id="ens2">
																	0																	</div>
																	<input type="hidden" id="enfants2" name="enfants2" value="0"/>
																	<div class="plus" id="enplus2" onClick="control_plus_en(2)"></div>
															</div>
													</div>
													<div class="label_enf">De 1 à 11,99 ans</div>
													<div class="groupe_ages" id="groupe_ages2">
															<div class="label_ages" id="label_ages2" >&Acirc;ge(s) de l&apos;enfant(s)</div>
															<div style="float:left;margin-top:1%;margin-left:7%;">
																	<div class="age clear_both" id="age21" style=" ">
																			<select name="age2_1" id="age2_1">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>
																					<option  value="15">15</option>
																			</select>
																	</div>
																	<div class="age" id="age22" style=" ">
																			<select name="age2_2" id="age2_2">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>

																					<option  value="15">15</option>
																			</select>
																	</div>
																	<div class="age" id="age23" style=" ">
																			<select name="age2_3" id="age2_3">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>
																					<option  value="15">15</option>
																			</select>
																	</div>
															</div>
													</div>
											</div>
											<div class="validation-error" id="validation-error2" >
							          <div class="validation-error__content" id="validation-error__content2">
							            Le séjour devra durer une nuit minimum
							          </div>
							        </div>
											<div class="ajouter_ch ajout_ch_activ" id="ac2" onClick="ajouter_ch()"> + Ajouter une autre chambre</div>
											<div class="v194_28 v194_28_active" id="v194_282" >
													<div onClick="terminer_ch1()" type="button" class="v194_29 v_terminer_ch" id="v194_22" style="font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif; color:#FFFFFF">
														<span id="span_btn_224">Valider</span>
													</div>
												</div>
									</div>


																<div class="repartition_une_ch" id="ch3" style=" display:none;">
											<div class="une_chambre">
													<div class="num_chambre">Chambre 3</div>
																																									<div class="fermer_ch" id="fc3" onClick="retirer_ch()"></div>
																										<div class="groupe_adultes">
															<div class="label_ad">Adulte(s)</div>
															<div class="nombre_adultes">
																	<div class="moins" id="admoins3" onClick="control_moins_ad(3)"></div>
																																			<div class="input_ad" id="adult3">2</div>
																		<input type="hidden" id="adultes3" name="adultes3" value="2"/>
																																		<div class="plus" id="adplus3" onClick="control_plus_ad(3)"></div>
															</div>
													</div>
													<div class="groupe_enfants">
															<div class="label_en">Enfant(s)</div>
															<div class="nombre_enfants">
																	<div class="moins" id="enmoins3" onClick="control_moins_en(3)" style="background-image:url(https://tn.tunisiebooking.com/images/img6.svg)"></div>
																	<div class="input_en" id="ens3">
																	0																	</div>
																	<input type="hidden" id="enfants3" name="enfants3" value="0"/>
																	<div class="plus" id="enplus3" onClick="control_plus_en(3)"></div>
															</div>
													</div>
													<div class="label_enf">De 1 à 11,99 ans</div>
													<div class="groupe_ages" id="groupe_ages3">
															<div class="label_ages" id="label_ages3" >&Acirc;ge(s) de l&apos;enfant(s)</div>
															<div style="float:left;margin-top:1%;margin-left:7%;">
																	<div class="age clear_both" id="age31" style=" ">
																			<select name="age3_1" id="age3_1">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>
																					<option  value="15">15</option>
																			</select>
																	</div>
																	<div class="age" id="age32" style=" ">
																			<select name="age3_2" id="age3_2">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>

																					<option  value="15">15</option>
																			</select>
																	</div>
																	<div class="age" id="age33" style=" ">
																			<select name="age3_3" id="age3_3">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>
																					<option  value="15">15</option>
																			</select>
																	</div>
															</div>
													</div>
											</div>
											<div class="validation-error" id="validation-error3" >
							          <div class="validation-error__content" id="validation-error__content3">
							            Le séjour devra durer une nuit minimum
							          </div>
							        </div>
											<div class="ajouter_ch ajout_ch_activ" id="ac3" onClick="ajouter_ch()"> + Ajouter une autre chambre</div>
											<div class="v194_28 v194_28_active" id="v194_283" >
													<div onClick="terminer_ch1()" type="button" class="v194_29 v_terminer_ch" id="v194_22" style="font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif; color:#FFFFFF">
														<span id="span_btn_224">Valider</span>
													</div>
												</div>
									</div>


																<div class="repartition_une_ch" id="ch4" style=" display:none;">
											<div class="une_chambre">
													<div class="num_chambre">Chambre 4</div>
																																									<div class="fermer_ch" id="fc4" onClick="retirer_ch()"></div>
																										<div class="groupe_adultes">
															<div class="label_ad">Adulte(s)</div>
															<div class="nombre_adultes">
																	<div class="moins" id="admoins4" onClick="control_moins_ad(4)"></div>
																																			<div class="input_ad" id="adult4">2</div>
																		<input type="hidden" id="adultes4" name="adultes4" value="2"/>
																																		<div class="plus" id="adplus4" onClick="control_plus_ad(4)"></div>
															</div>
													</div>
													<div class="groupe_enfants">
															<div class="label_en">Enfant(s)</div>
															<div class="nombre_enfants">
																	<div class="moins" id="enmoins4" onClick="control_moins_en(4)" style="background-image:url(https://tn.tunisiebooking.com/images/img6.svg)"></div>
																	<div class="input_en" id="ens4">
																	0																	</div>
																	<input type="hidden" id="enfants4" name="enfants4" value="0"/>
																	<div class="plus" id="enplus4" onClick="control_plus_en(4)"></div>
															</div>
													</div>
													<div class="label_enf">De 1 à 11,99 ans</div>
													<div class="groupe_ages" id="groupe_ages4">
															<div class="label_ages" id="label_ages4" >&Acirc;ge(s) de l&apos;enfant(s)</div>
															<div style="float:left;margin-top:1%;margin-left:7%;">
																	<div class="age clear_both" id="age41" style=" ">
																			<select name="age4_1" id="age4_1">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>
																					<option  value="15">15</option>
																			</select>
																	</div>
																	<div class="age" id="age42" style=" ">
																			<select name="age4_2" id="age4_2">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>

																					<option  value="15">15</option>
																			</select>
																	</div>
																	<div class="age" id="age43" style=" ">
																			<select name="age4_3" id="age4_3">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>
																					<option  value="15">15</option>
																			</select>
																	</div>
															</div>
													</div>
											</div>
											<div class="validation-error" id="validation-error4" >
							          <div class="validation-error__content" id="validation-error__content4">
							            Le séjour devra durer une nuit minimum
							          </div>
							        </div>
											<div class="ajouter_ch ajout_ch_activ" id="ac4" onClick="ajouter_ch()"> + Ajouter une autre chambre</div>
											<div class="v194_28 v194_28_active" id="v194_284" >
													<div onClick="terminer_ch1()" type="button" class="v194_29 v_terminer_ch" id="v194_22" style="font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif; color:#FFFFFF">
														<span id="span_btn_224">Valider</span>
													</div>
												</div>
									</div>


																<div class="repartition_une_ch" id="ch5" style=" display:none;">
											<div class="une_chambre">
													<div class="num_chambre">Chambre 5</div>
																																									<div class="fermer_ch" id="fc5" onClick="retirer_ch()"></div>
																										<div class="groupe_adultes">
															<div class="label_ad">Adulte(s)</div>
															<div class="nombre_adultes">
																	<div class="moins" id="admoins5" onClick="control_moins_ad(5)"></div>
																																			<div class="input_ad" id="adult5">2</div>
																		<input type="hidden" id="adultes5" name="adultes5" value="2"/>
																																		<div class="plus" id="adplus5" onClick="control_plus_ad(5)"></div>
															</div>
													</div>
													<div class="groupe_enfants">
															<div class="label_en">Enfant(s)</div>
															<div class="nombre_enfants">
																	<div class="moins" id="enmoins5" onClick="control_moins_en(5)" style="background-image:url(https://tn.tunisiebooking.com/images/img6.svg)"></div>
																	<div class="input_en" id="ens5">
																	0																	</div>
																	<input type="hidden" id="enfants5" name="enfants5" value="0"/>
																	<div class="plus" id="enplus5" onClick="control_plus_en(5)"></div>
															</div>
													</div>
													<div class="label_enf">De 1 à 11,99 ans</div>
													<div class="groupe_ages" id="groupe_ages5">
															<div class="label_ages" id="label_ages5" >&Acirc;ge(s) de l&apos;enfant(s)</div>
															<div style="float:left;margin-top:1%;margin-left:7%;">
																	<div class="age clear_both" id="age51" style=" ">
																			<select name="age5_1" id="age5_1">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>
																					<option  value="15">15</option>
																			</select>
																	</div>
																	<div class="age" id="age52" style=" ">
																			<select name="age5_2" id="age5_2">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>

																					<option  value="15">15</option>
																			</select>
																	</div>
																	<div class="age" id="age53" style=" ">
																			<select name="age5_3" id="age5_3">
																					<option></option>
																					<option  value="1"><=1</option>
																					<option  value="2">2</option>
																					<option  value="3">3</option>
																					<option  value="4">4</option>
																					<option  value="5">5</option>
																					<option  value="6">6</option>
																					<option  value="7">7</option>
																					<option  value="8">8</option>
																					<option  value="9">9</option>
																					<option  value="10">10</option>
																					<option  value="11">11</option>
																					<option  value="12">12</option>
																					<option  value="13">13</option>
																					<option  value="14">14</option>
																					<option  value="15">15</option>
																			</select>
																	</div>
															</div>
													</div>
											</div>
											<div class="validation-error" id="validation-error5" >
							          <div class="validation-error__content" id="validation-error__content5">
							            Le séjour devra durer une nuit minimum
							          </div>
							        </div>
											<div class="ajouter_ch ajout_ch_activ" id="ac5" onClick="ajouter_ch()"> + Ajouter une autre chambre</div>
											<div class="v194_28 v194_28_active" id="v194_285" >
													<div onClick="terminer_ch1()" type="button" class="v194_29 v_terminer_ch" id="v194_22" style="font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif; color:#FFFFFF">
														<span id="span_btn_224">Valider</span>
													</div>
												</div>
									</div>


												</div>
			</div>
			</section>
    </form>


<div style="clear:both; height:1px; font-size:1px">&nbsp;</div>
</div>



		   <div id="moteur_rech_load" style="clear:both; text-align:center; z-index:99999;;display:none "> <br />&nbsp;<img class="lazy" data-src="https://tn.tunisiebooking.com/theme/images/loader.gif" alt="loader" width="287" height="141" class="loading3" /><br /><br /></div>

<div id="recap_rech" style="display:none" class="plan_moteur_modif">
</div>
<div id="resultat" style="margin-bottom:2% !important;clear:both; margin:2px;display: flex;flex-direction: column;">
<div class="scroll_pres"></div>
</div>

<div id="id_tarif2">
         </div>

				 </div>


				 </div>


				 <!--presentation-->

				 <div class="presentation" id="div_presentation">
					 <div class="seidbar_hotel_coninter coin_arrandi">
						 <div class="titrdest_hotel_conselte" id="av_presentation" >
							 <span style="font-size:22px;">
								 <h2 style="float:left;">Présentation</h2>
							 </span>
						 </div>
						 <div style="clear:both">

							 <div style="float:left; height:4px; font-size:2px; background-color:#262626; width:5%;margin-left:1.5%;"></div>
						 </div>
					 </div>
					 <div class="content content_pres " style="margin-left: 2%;margin-top: 3%;">
						 <div id="descriptif_div" >
							 <div id="ruslt_descriptif1"  style="display:none">
								 <h2>Infos Pratiques :</h2>
<p>Pour ces vacances en Tunisie, vous pouvez envisager de s&eacute;journer &agrave; Hammamet.</p>
<p>Vous aurez l&rsquo;occasion de visiter le site arch&eacute;ologique de Pupput et la M&eacute;dina de Hammamet.</p>
<p>Pour ce faire, vous devez vous trouver un h&ocirc;tel dans cette ville.&nbsp;</p>
<p>&nbsp;</p>
<h3>Situation de l'hotel :</h3>
<p>Houda Yasmine est un h&ocirc;tel de 4 &eacute;toiles situ&eacute; &agrave; proximit&eacute; d&rsquo;une des plages de Hammamet.</p>
<p>Les vacances les pieds dans l&rsquo;eau y sont garantis, l&rsquo;h&ocirc;tel est &agrave; 5 minutes &agrave; pied de la plage.</p>
<p>Il est &agrave; seulement 8 km du centre-ville d&rsquo;Yasmine Hammamet et &agrave; environ 200 m&egrave;tres du port de plaisance de la r&eacute;gion.</p>
<p>L&rsquo;&eacute;tablissement est &agrave; 100 km de l&rsquo;a&eacute;roport de Monastir, &agrave; 60 km de l&rsquo;a&eacute;roport de Tunis Carthage et &agrave; 20 km de l&rsquo;a&eacute;roport d&rsquo;Enfidha.&nbsp;</p>
<p>Notamment, vous b&eacute;n&eacute;ficierez d'un acc&egrave;s facile &agrave; des sites touristiques populaires de la r&eacute;gion.</p>
<p>&nbsp;</p>
<h3>Les types d'h&eacute;bergements que puis-je r&eacute;server &agrave; l'&eacute;tablissement :</h3>
<p>L'h&ocirc;tel Houda Yasmine dispose de 250 chambres, meubl&eacute;es et d&eacute;cor&eacute;es pour offrir luxe et confort.&nbsp;</p>
<p>Cet h&ocirc;tel offre une gamme de choix pour r&eacute;pondre &agrave; tous vos besoins.</p>
<p>Vous pouvez v&eacute;rifier les types de chambres disponibles ici :</p>
<p>-Chambres standards : Ces chambres offrent un h&eacute;bergement confortable pour une ou deux personnes.</p>
<p>-Les chambres triples sont id&eacute;ales pour les familles ou les groupes d'amis, elles sont spacieuses et peuvent accueillir jusqu'&agrave; trois personnes.</p>
<p>-Les chambres quadruples : Les chambres quadruples sont con&ccedil;ues pour les familles ou les groupes plus nombreux.</p>
<p style="background: white; margin: 0cm 0cm 15.0pt 0cm;">Elles offrent suffisamment d'espace pour accueillir jusqu'&agrave; quatre personnes, avec des installations adapt&eacute;es pour garantir un s&eacute;jour confortable pour tous les occupants.</p>
<p>Chaque chambre est &eacute;quip&eacute;e par des &eacute;quipements suivants :</p>
<p>- Un balcon , chaque chambre dispose d'un balcon priv&eacute;, offrant un espace ext&eacute;rieur o&ugrave; vous pourrez vous d&eacute;tendre, profiter de la vue et prendre l'air frais.</p>
<p>-Chaque chambre dispose d'une salle de bains privative avec des &eacute;quipements modernes, vous y trouverez une douche ou une baignoire, des toilettes, un lavabo avec des articles de toilette de qualit&eacute;.</p>
<p>- Une climatisation, toutes les chambres sont &eacute;quip&eacute;es d'un syst&egrave;me de climatisation pour vous permettre de r&eacute;guler la temp&eacute;rature et de vous assurer un s&eacute;jour confortable.</p>
<p>- Une t&eacute;l&eacute;vision par satellite, chaque chambre est &eacute;quip&eacute;e d'une t&eacute;l&eacute;vision avec des cha&icirc;nes satellites, vous offrant une vari&eacute;t&eacute; de programmes et de divertissements pour vous d&eacute;tendre et vous divertir.</p>
<p>Vous trouverez aussi un minibar dans chaque chambre, vous permettant de garder vos boissons et collations pr&eacute;f&eacute;r&eacute;es &agrave; port&eacute;e de main.</p>
<p>Un petit dressing, chaque chambre comprend un petit dressing o&ugrave; vous pouvez ranger vos v&ecirc;tements et effets personnels de mani&egrave;re ordonn&eacute;e et pratique.</p>
<p>Un ensemble douche baignoire, la salle de bain de chaque chambre est &eacute;quip&eacute;e d'une combinaison douche/baignoire.</p>
<p>Offrant ainsi une flexibilit&eacute; pour r&eacute;pondre &agrave; vos pr&eacute;f&eacute;rences personnelles lors de votre toilette quotidienne.</p>
<p>Un s&egrave;che-cheveux est disponible dans chaque chambre pour votre commodit&eacute;s.</p>
<p>Ces &eacute;quipements dans chaque chambre garantissent un s&eacute;jour confortable, pratique et luxueuse pour vous rafra&icirc;chir.</p>
<p>&nbsp;</p>
<h3>Restaurants et bars sur place :</h3>
<p>Pour ce s&eacute;jour &agrave; Hammamet, Houda Yasmin Hotel a &eacute;galement pens&eacute; &agrave; offrir &agrave; vos papilles une d&eacute;couverte.&nbsp;</p>
<p>Le complexe dispose d'un restaurant servant une cuisine tunisienne et internationale.</p>
<p>Les repas sont servis sous forme de buffet avec des horaires limit&eacute;s.</p>
<p>Si vous avez une petite soif en cours ou en fin de journ&eacute;e, &eacute;tanchez votre soif dans l'un des deux bars de l'h&ocirc;tel.</p>
<p>Le bar du hall accueille souvent des soir&eacute;es dansantes, des soir&eacute;es folkloriques et des jeux ap&eacute;ritifs.</p>
<p>Pour gouter &agrave; quelques sp&eacute;cialit&eacute;s internationales, on vous recommande le Dar-Elezz qui propose un menu sous forme de buffet.</p>
<p>Que vous recherchiez des saveurs internationales ou que vous souhaitiez explorer diff&eacute;rentes cuisine.</p>
<p>Notamment, l'h&ocirc;tel en mentionnant quelques endroits int&eacute;ressants &agrave; proximit&eacute; de l'h&ocirc;tel :</p>
<p>- Kitchenette &agrave; seulement 14 minutes &agrave; pied de l'h&ocirc;tel, le restaurant Kitchenette propose une vari&eacute;t&eacute; de plats locaux et internationaux.</p>
<p>- Oggi &agrave;14 minutes de marche est un autre restaurant que vous pourrez explorer.</p>
<p>Pour ceux qui pr&eacute;f&egrave;rent une option plus proche, "Le Mistral" est &agrave; seulement 6 minutes &agrave; pied de l'h&ocirc;tel.</p>
<p>- Le Cap Food &amp; Drink, ce restaurant se trouve &agrave; 9 minutes &agrave; pied de l'h&ocirc;tel et offre une vari&eacute;t&eacute; de plats.</p>
<p>Ainsi qu'une s&eacute;lection de boissons, ou vous pouvez profiter d'une exp&eacute;rience culinaire sans avoir &agrave; parcourir une grande distance.</p>
<p>Aussi bien, "Le Barberousse Beach Club" &agrave; 9 minutes de marche de l'h&ocirc;tel, est un endroit id&eacute;al pour ceux qui souhaitent se d&eacute;tendre sur la plage.</p>
<p>&nbsp;</p>
<h3>Activit&eacute;s et loisirs disponibles &agrave; l'&eacute;tablissement :</h3>
<p style="background: white; margin: 0cm 0cm 15.0pt 0cm;">L'h&ocirc;tel Houda Yasmine propose une vaste gamme d'activit&eacute;s pour r&eacute;pondre &agrave; tous les go&ucirc;ts.</p>
<p>Vous pourrez profiter d'un parcours de minigolf sur place, id&eacute;al pour une journ&eacute;e d&eacute;tente en famille ou entre amis.</p>
<p>L'h&ocirc;tel offre la possibilit&eacute; de faire de l'&eacute;quitation, permettant aux amateurs de d&eacute;couvrir les environs &agrave; dos de cheval.</p>
<p>Pour les amateurs de chant, l'h&ocirc;tel propose des soir&eacute;es karaok&eacute; o&ugrave; vous pourrez montrer vos talents vocaux et vous amuser en musique.</p>
<p>Les passionn&eacute;s de tennis de table pourront s'affronter lors de parties amicales sur les tables disponibles dans l'&eacute;tablissement .</p>
<p>L'h&ocirc;tel propose des installations &eacute;questres et des possibilit&eacute;s d'&eacute;quitation pour ceux qui souhaitent explorer la r&eacute;gion &agrave; cheval.</p>
<p>Vous pourrez passer un bon moment en jouant au billard, que ce soit en solo ou en compagnie d'autres clients de l'h&ocirc;tel.</p>
<p>Les plus jeunes pourront profiter d'une aire de jeux d&eacute;di&eacute;e o&ugrave; ils pourront s'amuser en toute s&eacute;curit&eacute;.</p>
<p>L'h&ocirc;tel dispose d'une discoth&egrave;que o&ugrave; vous pourrez danser et vous divertir jusqu'au bout de la nuit.</p>
<p>Si vous aimez les jeux de hasard, un casino est disponible sur place pour tenter votre chance et profiter d'une soir&eacute;e excitante.</p>
<p>L'h&ocirc;tel met &agrave; votre disposition un centre de remise en forme bien &eacute;quip&eacute; avec des &eacute;quipements modernes.</p>
<p>Houda Yasmine propose une vari&eacute;t&eacute; d'activit&eacute;s aquatiques pour agr&eacute;menter votre s&eacute;jour ;</p>
<p>Profitez d'une piscine ext&eacute;rieure spacieuse o&ugrave; vous pourrez vous d&eacute;tendre, nager et profiter du soleil.</p>
<p>Si vous souhaitez profiter de la piscine m&ecirc;me lorsque les temp&eacute;ratures sont plus fra&icirc;ches, une piscine chauff&eacute;e est disponible pour que vous.</p>
<p>Les amateurs de natation pourront profiter d'une piscine couverte, id&eacute;ale pour faire quelques longueurs ou simplement se relaxer dans l'eau.</p>
<p>Pour les plus jeunes pourront s'amuser en toute s&eacute;curit&eacute; dans une piscine sp&eacute;cialement con&ccedil;ue pour eux, o&ugrave; ils pourront barboter et jouer dans l'eau.</p>
<p>Notamment l'h&ocirc;tel propose d'autres installations et activit&eacute;s pour votre divertissement mentionn&eacute;es pr&eacute;c&eacute;demment.</p>
<p>Telles que les options de restauration, les sports nautiques comme la plong&eacute;e et le ski nautique.</p>
<p>&nbsp;</p>
<h2>Les plus de l'h&ocirc;tel Houda Hammamet 4*, TunisieBooking :</h2>
<p>&Agrave; la r&eacute;ception, vous aurez un personnel multilingue pour vous accompagner tout au long de votre s&eacute;jour.</p>
<p>Vous pourrez le contacter de jour comme de nuit pour avoir le service de concierge et le service d&rsquo;&eacute;tage.</p>
<p>Il vous apportera &eacute;galement son aide pour l&rsquo;organisation des excursions et des visites dans les alentours.&nbsp;</p>
<p>L'h&ocirc;tel Yasmine Hammamet propose une gamme compl&egrave;te de commodit&eacute;s pour r&eacute;pondre aux besoins de ses clients :&nbsp;</p>
<p>- Un service de change o&ugrave; vous pouvez &eacute;changer votre devise contre la monnaie locale.</p>
<p>- Un service de blanchisserie et de repassage.</p>
<p>- Un service d&rsquo;affaires comprenant des services de fax, de photocopie et d'impression.</p>
<p>- Des salles de r&eacute;unions et de conf&eacute;rence sont disponibles pour accueillir vos &eacute;v&eacute;nements d'affaires ou vos r&eacute;unions professionnelle.</p>
<p>- Un service de location de voitures pour votre commodit&eacute;.</p>
<p>- Une navette d'a&eacute;roport pour faciliter votre transfert depuis et vers l'a&eacute;roport.</p>
<p>- Des boutiques de souvenirs et de cadeaux pourrez acheter des souvenirs ou des cadeaux pour vos proches.</p>
<p>- Salon de coiffure vous pourrez prendre soin de votre apparence et profiter de services de coiffure professionnels.</p>
<p>Notamment, une institut de beaut&eacute; vous pourrez b&eacute;n&eacute;ficier de soins esth&eacute;tiques et de bien-&ecirc;tre tels que des massages, des soins du visage et des manucures.</p>
<p>Pour plus d'inforamtions, rendez-vous &agrave; l'une de nos <a href="/">agences de voyage</a> les proches de chez-vous.&nbsp;</p>
<p><strong>Remarque:</strong>&nbsp;</p>
<p>L'<a href="/hotels_hammamet.html">h&ocirc;tel Hammamet</a> propose une navette d'a&eacute;roport, mais elle est payante.</p>
<p>L&rsquo;&eacute;tablissement est ouvert 24 h/24 pour accueillir les touristes.</p>
<p>Taxe impos&eacute;e par l'h&ocirc;tel &agrave; 3.00 TND par personne et par nuit, cette taxe ne s'applique pas aux enfants de moins de 12 ans.</p>
<p>Par contre, il vous faudra lib&eacute;rer les chambres avant midi pour le d&eacute;part au risque de devoir payer une nuit&eacute;e de plus.</p>
<p>&nbsp;</p>
<h3>Cet hotel est connu aussi sous le nom :</h3>
<p>Houda Hammamet Yasmine</p>
<p>h&ocirc;tel yasmine hammamet</p>
<p>hotel yasmine hammamet avis&nbsp;</p>
<p>hotel yasmine hammamet 4 &eacute;toiles</p>
<p>&nbsp;</p>							 	<div style="clear:both"></div>
							</div>
							<div id="ruslt_descriptif2">
								<h2>Infos Pratiques :</h2>
<p>Pour ces vacances en Tunisie, vous pouvez envisager de s&eacute;journer &agrave; Hammamet.</p>
<p>Vous aurez l&rsquo;occasion de visiter le site arch&eacute;ologique de Pupput et la M&eacute;dina de Hammamet.</p>
<p>Pour ce faire, vous devez vous trouver un h&ocirc;tel dans cette ville.&nbsp;</p>
<p>&nbsp;</p>
<h3>Situation de l'hotel :</h3>
<p>Houda Yasmine est un h&ocirc;tel de 4 &eacute;toiles situ&eacute; &agrave; proximit&eacute; d&rsquo;une des plages de Hammamet.</p>
<p>Les vacances les pieds dans l&rsquo;eau y sont garantis, l&rsquo;h&ocirc;tel est &agrave; 5 minutes &agrave; pied de la plage.</p>
<p>Il est &agrave; seulement 8 km du...
						 </div>
			 			  <div style="clear:both"></div>
	          </div>
						<div class="scroll_pres"></div>
						</br>
					<div class="plus_presentation" onClick="aff_suite()" style='cursor:pointer;margin-top: -2%;height: 66px;margin-left: -1%;'>
							<span style="color: #4972D1;font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 18px;position: absolute;padding-top: 1%;width: 27%;margin-left: 1%;">
								<u>Afficher plus<img style="margin-left: 3%;transform: rotate(90deg);" class="lazy" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech_bleu.svg" alt="flèche" width="6.17px" height="10px"></u>
							</span>
					</div>
					<div class="masquer_presentation" onClick="cache_suite()"  style=' cursor:pointer;display:none;margin-top: -2%;height: 66px;margin-left: 0%;'>
							<span style="color: #4972D1;font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 18px;position: absolute;padding-top: 1%;width: 27%;margin-left: 1%;">
								<u>Afficher moins<img style="margin-left: 3%;transform: rotate(269deg);" class="lazy" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech_bleu.svg" alt="flèche" width="6.17px" height="10px"></u>
							</span>
					</div>
					</div>
					</div>

				 <!-- Les equipements-->
				 <div class="equipements" id="div_equipement">
					 <div class="seidbar_hotel_coninter coin_arrandi">
						 <div class="titrdest_hotel_conselte" id="av_tnb" >
							 <span style="font-size:22px;">
								 <h2 style="float:left;">Équipements</h2>
							 </span>
						 </div>
						 <div style="clear:both">
							 <div style="float:left; height:4px; font-size:2px; background-color:#262626; width:5%;margin-left:1.5%;"></div>
						 </div>
					 </div>
					 <div class="content content_equip " style="margin-top: 3%;">
						 <div>
						 												<div class="row service1" style="width: 96%;height: 80%;margin-left: 2%;height:fit-content;margin-top: 2%;" >
										 		 <div class="col-2" style="max-width: 5.666667%;">
										 			<img style="position: absolute;margin-left: -25%;"  width="30px" height="30px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f7894a0a0d3.18526142.svg"/>
										 			<hr class="vertical-line_equip">
										 		 </div>
										 		 <div class="col-10">
										 			<div style="font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 500;font-size: 18px;line-height: 25px;">Emplacement</div>
										 			<div class="row" style="margin-top: 2%;margin-bottom: 2%;">
										 														 						<div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'>
										 	<i class="fa-solid fa-check" style="padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;"></i>
										 		<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">2eme position de la mer</span>
										 	</div>

										 															 			</div>
										 		 </div>
										 	 </div>
																							<hr class="horizontal-line">
																							<div class="row service2" style="width: 96%;height: 80%;margin-left: 2%;height:fit-content;margin-top: 2%;" >
										 		 <div class="col-2" style="max-width: 5.666667%;">
										 			<img style="position: absolute;margin-left: -25%;"  width="30px" height="30px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f799878a1c6.67121555.svg"/>
										 			<hr class="vertical-line_equip">
										 		 </div>
										 		 <div class="col-10">
										 			<div style="font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 500;font-size: 18px;line-height: 25px;">Chambres</div>
										 			<div class="row" style="margin-top: 2%;margin-bottom: 2%;">
										 				<div class='row' style='margin-top: 0%;margin-left: 1%;'><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>										 																		<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Chauffage</span>
										 																		</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>										 																		<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Climatisation</span>
										 																		</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>										 																		<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Coffre fort dans la chambre</span>
										 																		</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>										 																		<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Salle de bains avec douche </span>
										 																		</div></div>										 			</div>
										 		 </div>
										 	 </div>
																							<hr class="horizontal-line">
																							<div class="row service3" style="width: 96%;height: 80%;margin-left: 2%;height:fit-content;margin-top: 2%;" >
										 		 <div class="col-2" style="max-width: 5.666667%;">
										 			<img style="position: absolute;margin-left: -25%;"  width="30px" height="30px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f7858e07135.59832642.svg"/>
										 			<hr class="vertical-line_equip">
										 		 </div>
										 		 <div class="col-10">
										 			<div style="font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 500;font-size: 18px;line-height: 25px;">Internet</div>
										 			<div class="row" style="margin-top: 2%;margin-bottom: 2%;">
										 														 						<div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'>
										 	<i class="fa-solid fa-check" style="padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;"></i>
										 		<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">WIFI Gratuit dans les locaux communs</span>
										 	</div>

										 															 			</div>
										 		 </div>
										 	 </div>
																							 <div class="row service4" style=" display:none;width: 96%;height: 80%;margin-left: 2%;height:fit-content;margin-top: 2%;" >
													 <div class="col-2" style="max-width: 5.666667%;">
													 	<img style="position: absolute;margin-left: -25%;"  width="30px" height="30px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/6555d3d46f59e2.41493131.svg"/>
													 	<hr class="vertical-line_equip">
													 </div>
													 <div class="col-10">
													 	<div style="font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 500;font-size: 18px;line-height: 25px;">Restauration</div>
														<div class="row" style="margin-top: 2%;margin-bottom: 2%;">
															<div class='row' style='margin-top: 0%;margin-left: 1%;'><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Bar</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Restaurant (a la carte)</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Restaurant (Buffet)</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Restaurant</span>
																													</div></div>														</div>
													 </div>
												 </div>
												 												 <hr class="horizontal-line" style="display:none;">
																							 <div class="row service5" style=" display:none;width: 96%;height: 80%;margin-left: 2%;height:fit-content;margin-top: 2%;" >
													 <div class="col-2" style="max-width: 5.666667%;">
													 	<img style="position: absolute;margin-left: -25%;"  width="30px" height="30px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/6555d434e31f23.21049297.svg"/>
													 	<hr class="vertical-line_equip">
													 </div>
													 <div class="col-10">
													 	<div style="font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 500;font-size: 18px;line-height: 25px;">Piscines</div>
														<div class="row" style="margin-top: 2%;margin-bottom: 2%;">
																																<div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'>
												<i class="fa-solid fa-check" style="padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;"></i>
													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Piscine exterieure</span>
												</div>

																																	<div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'>
												<i class="fa-solid fa-check" style="padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;"></i>
													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Bassin pour enfants</span>
												</div>

																																	<div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'>
												<i class="fa-solid fa-check" style="padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;"></i>
													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Piscine couverte Bloc central</span>
												</div>

																														</div>
													 </div>
												 </div>
												 												 <hr class="horizontal-line" style="display:none;">
																							 <div class="row service6" style=" display:none;width: 96%;height: 80%;margin-left: 2%;height:fit-content;margin-top: 2%;" >
													 <div class="col-2" style="max-width: 5.666667%;">
													 	<img style="position: absolute;margin-left: -25%;"  width="30px" height="30px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f78b7eeb406.44088497.svg"/>
													 	<hr class="vertical-line_equip">
													 </div>
													 <div class="col-10">
													 	<div style="font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 500;font-size: 18px;line-height: 25px;">Parking</div>
														<div class="row" style="margin-top: 2%;margin-bottom: 2%;">
																																<div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'>
												<i class="fa-solid fa-check" style="padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;"></i>
													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Parking Gratuit Selon Disponibilite</span>
												</div>

																														</div>
													 </div>
												 </div>
												 												 <hr class="horizontal-line" style="display:none;">
																							 <div class="row service7" style=" display:none;width: 96%;height: 80%;margin-left: 2%;height:fit-content;margin-top: 2%;" >
													 <div class="col-2" style="max-width: 5.666667%;">
													 	<img style="position: absolute;margin-left: -25%;"  width="30px" height="30px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f78c24f3748.45893917.svg"/>
													 	<hr class="vertical-line_equip">
													 </div>
													 <div class="col-10">
													 	<div style="font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 500;font-size: 18px;line-height: 25px;">Activites et Animations</div>
														<div class="row" style="margin-top: 2%;margin-bottom: 2%;">
															<div class='row' style='margin-top: 0%;margin-left: 1%;'><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Parcours de Golf</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Aire de jeu pour enfants</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Tennis de table</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">sport nautique</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Flechettes</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">equitations</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Salle de jeux</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Billard</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Plongee sous marine</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Mini-Disco</span>
																													</div></div>														</div>
													 </div>
												 </div>
												 												 <hr class="horizontal-line" style="display:none;">
																							 <div class="row service8" style=" display:none;width: 96%;height: 80%;margin-left: 2%;height:fit-content;margin-top: 2%;" >
													 <div class="col-2" style="max-width: 5.666667%;">
													 	<img style="position: absolute;margin-left: -25%;"  width="30px" height="30px" alt="" class="lazy" data-src="https://www.resabooking.com/logos/icone/653f78cd21be34.93959566.svg"/>
													 	<hr class="vertical-line_equip">
													 </div>
													 <div class="col-10">
													 	<div style="font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 500;font-size: 18px;line-height: 25px;">Equipements</div>
														<div class="row" style="margin-top: 2%;margin-bottom: 2%;">
															<div class='row' style='margin-top: 0%;margin-left: 1%;'><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Plage Privee</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Terrasse exterieure</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Bar de piscine</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Blanchisserie</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Chambre non-fumeurs</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Concierge</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Parasols</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Plage a proximite</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Reception24h/24</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Services de chambre </span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Transats</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Boutiques sur place</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Bagagiste</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Enregistrement express</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Serviette de plage </span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Change</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Ascenseur</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Equipement Pour les Handicapees</span>
																													</div><div class='col-md-4 border-start' id='sous_services' style='max-width: 49%;height: 32px;'><i class='fa-solid fa-check' style=' padding-top:3% !important;color:#262626;font-size: 16px; padding: 0px; margin: -5px;margin-right: 1%;'></i>																													<span style="position:absolute;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 20px;">Location De Voiture</span>
																													</div></div>														</div>
													 </div>
												 </div>
												 						 </div>

						 <div class="scroll_equip"></div>
						 </br>
					 <div class="plus_equip" onClick="affiche_all_services();" style='cursor:pointer;margin-top: -1%;height: 66px;margin-left: 2%;'>
						 <span style="color: #4972D1;font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 18px;position: absolute;padding-top: 1%;width: 27%;margin-left: 0.5%;">
							 <u>Afficher plus<img style="margin-left: 3%;transform: rotate(90deg);" class="lazy" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech_bleu.svg" alt="flèche" width="6.17px" height="10px"></u>
						 </span>
					 </div>
					 <div class="moins_equip" onClick="affiche_moins_services();" style='cursor:pointer;display:none;margin-top: -1%;height: 66px;margin-left: 2%;'>
						<span style="color: #4972D1;font-family: -apple-system, 'Roboto', Segoe UI, Helvetica, Arial, sans-serif;font-style: normal;font-weight: 400;font-size: 16px;line-height: 18px;position: absolute;padding-top: 1%;width: 27%;margin-left: 0.5%;">
							<u>Afficher moins<img style="margin-left: 3%;transform: rotate(269deg);" class="lazy" data-src="https://tn.tunisiebooking.com/images/icone-moteur/ic-flech_bleu.svg" alt="flèche" width="6.17px" height="10px"></u>
						</span>
					</div>
					 </div>

				 </div>
				 
				 
				 
				
	


</div>

<div class="owl-up" id="owl-up">
 <i class="fa-solid fa-angle-up" style="color:#fff;"></i>
 </div>

<div class="ecranordinateur">
<div style="clear:both;margin-top: 44px;margin-left: auto;margin-right: auto;margin-bottom: 30px;position: relative;width: 1065px;">
</div>
</div>
<div style="clear:both; height:1px; font-size:1px">&nbsp;</div>
<div style="clear:both; height:20px">&nbsp;</div>
<!--/header_detail-->
</div>
	 <div id="menuresp">
<footer style="background-color:#333333">
        <div   id="footeres" class="jumbotron">
		
 <div style="clear:both;color:#333333; font-family:Arial">
  <div style="font-family:Arial; font-size:22px; color:#81b611">MODES DE PAIEMENT ACCEPT&Eacute;S:

  </div>
  <div id="drapeaufrance" onclick="location.href = 'http://www.tunisiebooking.com';"></div>
	<div id="drapeautunisie"></div>
  <div style="clear:both"><br/></div>
   <div style="float:left; height:120px; width:205px; margin:2px; background:url(https://tn.tunisiebooking.com/theme/images/img/icons_paiementv6.jpg); background-repeat:no-repeat; ">
   </div>
     <div style="float:left; margin:2px; height:120px; width:205px; background:url(https://tn.tunisiebooking.com/theme/images/img/icons_paiementv2.jpg); background-repeat:no-repeat; ">
    
   </div>
  <div style="float:left; margin:2px; height:120px; width:205px; background:url(https://tn.tunisiebooking.com/theme/images/img/icons_paiementv3.jpg); background-repeat:no-repeat; ">
     
   </div>
   <div style="float:left; margin:2px; height:120px; width:205px; background:url(https://tn.tunisiebooking.com/theme/images/img/icons_paiementv4.jpg); background-repeat:no-repeat; ">
     
   </div>
   <div style="float:left; margin:2px;height:120px; width:205px; background:url(https://tn.tunisiebooking.com/theme/images/img/icons_paiementv5.jpg); background-repeat:no-repeat; ">
     
   </div>
   <div style="clear:both;border-top:1px solid #282828; position: relative; padding:15px 0px; color: #FFFFFF;">
        <div style="float:left; width:250px"><img src="https://tn.tunisiebooking.com/theme/images/logo_tunisie.jpg" alt="logo tunisie" width="219" height="77" /></div>
        <div style="float:left; width:250px;">
		 <div style="float:left; width:37px; height:37px; background:url(https://tn.tunisiebooking.com/theme/images/icons_pv2.jpg);background-position:0px 0"></div>
		 <div style="float:left; color:#FFFFFF; font-size:15px; width:200px; padding:10px 0px 0px 10px">130000 Clients satisfaits <br /></div>
		</div>
		<div style="float:left; width:290px;">
		   <div style="float:left; width:38px;height:35px; background:url(https://tn.tunisiebooking.com/theme/images/icons_pv2.jpg);background-position:-49px 0"></div>
		   <div style="float:left;color:#FFFFFF;font-size:15px; width:240px; padding:10px 0px 0px 10px">Service clients &agrave; votre &eacute;coute<br /><br />T&eacute;l: <b>71 124 124</b><br /><br />  Du Lundi au Samedi 
8h � 18h <br/> Dimanche de 10h a 17h  </div>
		</div>
		<div style="float:left">
		<div style="clear:both">
		    <div style="float:left; width:28px;height:35px; background:url(https://tn.tunisiebooking.com/theme/images/icons_pv2.jpg);background-position:-106px 0"></div>
		   <div style="float:left;color:#FFFFFF;font-size:15px; width:240px; padding:10px 0px 0px 10px; text-decoration:underline; cursor:pointer" onClick="window.open('https://tn.tunisiebooking.com/nos_agences.html','_blank')">Retrouvez nos Agences<br /></div>
		</div>
		</div>
        </div>
   </div>
  <div style="clear:both"></div>  
 
   
	</div>
      </footer>
	  
</div>
<div id="menuresp1">


<div class="conteneur_footer2" style="background-color:#1d1d1d; font-size:14px;">

<style>
        /* A simple css reset */

        /* Add some padding for small screens */
        .wrapper {
            padding-left: 10px;
            padding-right: 10px;
        }

       .conteneur_footer2
	   {
	   margin-top:0px !important;
	   }
.footer2 {
    width: 1172px;

    margin: 0 auto;
    clear: both;
}

		B{/*font-size: 18px;color:#000000;*/}


		.annif{background-image:url("https://www.resabooking.com/marketing/anniv/img/ban_annif.jpg"); width:600px; height:306px; }

		.section_footer1  img{
		/*width:50px;*/
		margin:10px 0;
		}
		.section_footer1  span{
		font-family: Helvetica, Arial, sans-serif;
		font-size:11px;
		color:#FFFFFF;

		}

		.reso_sociaux  img{
		width:15px;
		margin:10px 0;
		}
		.drapeau  img{
		width:15px;
		margin-top:13px;
		margin-left:12px;
		}
		.plan{width:100;margin-left: 140px;}
		.plan  a{
		font-family: Helvetica, Arial, sans-serif;
		font-size:11px;
		color:#FFFFFF;
		float:right;
		}

		.tel {
		float: left;

		}
		.satis span{margin-left:-33px;text-align:center;}
		.paiement span{margin-left:-28px;text-align:center;}
		.paiement img{margin-right:18px;}
		.satis img{margin-right:15px;}
		.block1{width:100px;float:left;}
		.block2{width:240px;}
		.block3{width:240px;}

		.lienplan{padding-top:10px; padding-left:50px;}

.wrapper .column1 {
	width: 100%;
	display: block;
	 margin-left:10px;
	   }

.btn{
font:bold 20px/22px Arial, Helvetica, sans-serif;
color:#f9f9f9;
text-transform:uppercase;
border-radius:3px;
background-color: #f40091;
border: none;
text-align: center;
text-decoration: none;
display: inline-block;
margin: 4px 2px;
cursor: pointer;
padding: 10px 24px;
margin-top:20px;
}


@media(min-width:321px) and (max-width:767px){
.block1{ visibility: hidden;display:none;}

.annif{background-image:url("https://www.resabooking.com/marketing/anniv/img/img350_300.png"); width:350px; height:300px; }

.block2{display:block;width: 100%;margin-top:10px;padding-right:10px;}
.block2 td{width: 280px;}
.block2 tr{margin-top:0px;}


.block3{display:block;width: 100%; margin-top:0px;margin-bottom:10px;padding-right:10px;}
.block3 tr{margin-top:5px;}
.block3 td{width: 180px;}

.paiement img{ visibility: hidden !important;display:none;}
.paiement{padding-left:0px;
background-image: url("https://www.resabooking.com/marketing/anniv/img/sec_icone2.png" );
background-position: center top;
background-repeat: no-repeat;
background-size: 100px; border-right: 0.1px solid;border-top: 0.1px solid; border-color:#8d9092;}
.paiement span{font-size:12px;float:left;margin-top:80px;text-align: center; padding-left:40%}


.satis{padding-left:0px;
background-image: url("https://www.resabooking.com/marketing/anniv/img/sat_icone1.png" );background-position: center top;
background-repeat: no-repeat;
background-size: 100px;border-top: 0.1px solid; border-color:#8d9092;}
.satis img{ visibility: hidden !important;display:none;}
.satis span{font-size:12px;float:left;margin-top:80px;text-align: center;padding-left:40%}

.prix{padding-left:0px;
background-image: url("https://www.resabooking.com/marketing/anniv/img/garen1.png" );background-position: center top;
background-repeat: no-repeat;
background-size: 100px;border-right: 0.1px solid;border-color:#8d9092;}

.prix img{ visibility: hidden !important;display:none;}
.prix span{font-size:12px;float:left;margin-top:80px;margin-left:65px;margin-bottom:10px;text-align: center;}

.agences{padding-left:0px;
background-image: url("https://www.resabooking.com/marketing/anniv/img/agence_icone1.png" );background-position: center top;
background-repeat: no-repeat;
background-size: 100px;
}
.agences img{ visibility: hidden !important;display:none;}
.agences span{font-size:12px;float:left;margin-top:80px;margin-left:40px;margin-bottom:10px;text-align: center;}

table{/*margin-right:10px;*/}

.btn{
font:bold 16px/18px Arial, Helvetica, sans-serif;
color:#f9f9f9;
text-transform:uppercase;

border-radius:3px;
 padding: 10px 24px;
}

.wraper{width: 100%;}

.wrapper .section {
	width: 100%;
}
.wrapper .section_footer
{
	width: 100%;
}

h2{
font-size:18px;
}
p{
font-size: 16px; color:#000000;
}
B{}
.wrapper .column {
	width: 100%;
	display: block;
	 margin-left:10px;
}
	.wrapper .column1 {
	width: 100%;
	display: block;
    margin-left:10px;

}


.reso_sociaux {/*width: 100%;*/ margin-left:8px;}
.reso_sociaux span{ visibility: hidden;display:none;}
.reso_sociaux tr{width:50px;margin-left:100px;}
.reso_sociaux td{width:50px;margin-left:20px;}
.reso_sociaux img{width:20px;}

.plan {display:block;width: 100%;float:left;margin-left:50px;}
.plan a{font-family: Helvetica, Arial, sans-serif;
		font-size:12px;
	    color:#FFFFFF;}

.drapeau{display:block;width: 100%;margin-left:75px;}
.drapeau td{width:40px;}
.drapeau tr{display:block;width: 100%; margin-bottom:5px;margin-left:40px; }
.drapeau img{width:25px;}

		 }
		 .section_footer1{}

.svg-icon_face {
  width: 24px;
  height:24px;
  vertical-align:middle;
   fill: #9a9a9a;

}

.svg-icon_face:hover {
  width: 24px;
  height:24px;
  vertical-align:middle;
   fill: #1877f2;

}

.svg-icon_twiter {
  width: 24px;
  height:24px;
  vertical-align:middle;
   fill: #9a9a9a;

}

.svg-icon_twiter:hover {
  width: 24px;
  height:24px;
  vertical-align:middle;
   fill: #1da1f3;

}

.svg-icon_youtube {
  width: 24px;
  height:24px;
  vertical-align:middle;
   fill: #9a9a9a;

}

.svg-icon_youtube:hover {
  width: 24px;
  height:24px;
  vertical-align:middle;
   fill: #cf2323;

}

.svg-icon_instragram {
  width: 24px;
  height:24px;
  vertical-align:middle;
  background-image: url(https://tn.tunisiebooking.com/images/instagram-11.svg);
  background-repeat: no-repeat;

   background-position:10%;
 background-color:#9a9a9a;
 border-radius: 8px;

}

.svg-icon_instragram:hover {
  width: 24px;
  height:24px;
  vertical-align:middle;
  background-image: url(https://tn.tunisiebooking.com/images/instagram-new.png);
  background-repeat: no-repeat;
   background-position:10%;


}



    </style>
   <div class="footer2" style="background-color:#1d1d1d; height:120px;">
<table style="width:100%">
                        <tr bgcolor="#1d1d1d">
                            <td class="column1" >

                                <table class="section_footer1">
                                    <tbody>
                                        <tr>

										   <td align="left" class="block1">

                                            <td align="center" class ="tel">
                                         <img src="https://tn.tunisiebooking.com/images/phone2.png" alt="annif" style=" height:50px;"/>
											 <div style="color:#FFFFFF">Besoin d&apos;aide?<br/>71 124 124<br/>&nbsp;</div>
                                             </td>
										</td>

											<td align="left" class="block1">

                                            <td align="center" class ="tel">
                                             <svg  fill="#fff" width="100px" height="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;margin-top: 5px;" xml:space="preserve">
<g>
	<g>
		<path d="M450,118h-58.5c-5.523,0-10,4.477-10,10s4.477,10,10,10H450c12.131,0,22,9.869,22,22v114.121
			c0,13.069-10.633,23.702-23.702,23.702H438V224c0-23.159-18.841-42-42-42H248.5v-30.5c0-5.523-4.477-10-10-10s-10,4.477-10,10V182
			H62c-12.131,0-22-9.869-22-22s9.869-22,22-22h66.172c5.523,0,10-4.477,10-10s-4.477-10-10-10H62c-23.159,0-42,18.841-42,42
			c0,0.555,0.021,1.106,0.042,1.656C20.02,161.932,20,162.208,20,162.489V470c0,23.159,18.841,42,42,42l388-0.012
			c23.159,0,42-18.841,42-42V160C492,136.842,473.159,118,450,118z M418,470c0,11.976-9.62,21.741-21.538,21.988H396
			c-0.078,0-0.154,0.01-0.232,0.012H62c-12.131,0-22-9.869-22-22V195.759C46.403,199.712,53.938,202,62,202h334
			c12.131,0,22,9.869,22,22v73.823h-90c-34.187,0-62,27.813-62,62s27.813,62,62,62h90V470z M472,469.989c0,12.131-9.869,22-22,22
			h-18.234c3.949-6.4,6.234-13.931,6.234-21.988v-48.177h6c10.444,0,20.112-3.363,28-9.049V469.989z M472,373.824
			c0,15.439-12.561,28-28,28H328c-23.159,0-42-18.841-42-42s18.841-42,42-42h120.298c8.733,0,16.869-2.585,23.702-7.015V373.824z"/>
	</g>
</g>
<g>
	<g>
		<path d="M309,65.168c-25.908,0-46.985,21.077-46.985,46.985c0,25.908,21.078,46.985,46.985,46.985
			c25.908,0,46.985-21.077,46.985-46.985C355.985,86.245,334.908,65.168,309,65.168z M309,139.138
			c-14.88,0-26.985-12.105-26.985-26.985S294.121,85.168,309,85.168c14.879,0,26.985,12.105,26.985,26.985
			S323.88,139.138,309,139.138z"/>
	</g>
</g>
<g>
	<g>
		<path d="M212,0c-25.908,0-46.985,21.077-46.985,46.985c0,25.908,21.078,46.985,46.985,46.985
			c25.908,0,46.985-21.077,46.985-46.985S237.908,0,212,0z M212,73.97c-14.88,0-26.985-12.105-26.985-26.985S197.121,20,212,20
			c14.879,0,26.985,12.105,26.985,26.985S226.88,73.97,212,73.97z"/>
	</g>
</g>
<g>
	<g>
		<path d="M382.674,16.659H377v-5.674c0-5.523-4.477-10-10-10s-10,4.477-10,10v5.674h-5.674c-5.523,0-10,4.477-10,10s4.477,10,10,10
			H357v5.675c0,5.523,4.477,10,10,10s10-4.477,10-10v-5.675h5.674c5.523,0,10-4.477,10-10S388.197,16.659,382.674,16.659z"/>
	</g>
</g>
<g>
	<g>
		<path d="M179.667,97.75c-5.523,0-10,4.478-10,10v40.5c0,5.523,4.477,10,10,10c5.523,0,10-4.477,10-10v-40.5
			C189.667,102.227,185.19,97.75,179.667,97.75z"/>
	</g>
</g>
<g>
	<g>
		<path d="M341.15,354.001c-1.87-1.86-4.44-2.931-7.08-2.931c-2.63,0-5.2,1.07-7.07,2.931c-1.86,1.859-2.92,4.439-2.92,7.069
			c0,2.631,1.06,5.211,2.92,7.07c1.87,1.87,4.44,2.93,7.07,2.93c2.64,0,5.21-1.06,7.08-2.93c1.86-1.859,2.93-4.439,2.93-7.07
			C344.08,358.44,343.01,355.86,341.15,354.001z"/>
	</g>
</g>
<g>
	<g>
		<path d="M86.334,260c-5.523,0-10,4.478-10,10v82.333c0,5.522,4.477,10,10,10s10-4.478,10-10V270
			C96.334,264.478,91.857,260,86.334,260z"/>
	</g>
</g>
<g>
	<g>
		<path d="M93.4,379.77c-1.86-1.859-4.43-2.93-7.07-2.93c-2.63,0-5.21,1.07-7.07,2.93s-2.93,4.44-2.93,7.07s1.07,5.21,2.93,7.07
			c1.86,1.859,4.44,2.93,7.07,2.93c2.64,0,5.21-1.07,7.07-2.93c1.87-1.86,2.93-4.44,2.93-7.07S95.27,381.63,93.4,379.77z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
											 <div style="color:#FFFFFF; padding-top:5px;">Meilleur Prix <br/>GARANTI<br/>&nbsp;</div>
                                             </td>

											</td>
											<td align="left" class="block1">

                                            <td align="center" class ="tel" style="margin-top:3px;">
                                            <a href="https://tn.tunisiebooking.com/nos_agences.html" role="link" aria-label="33 Agences en Tunisie " target="_blank" style="color:#fff; text-decoration:none;"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff" width="100px" height="50px"  viewBox="0 0 148 107">
  <image id="Calque_2" data-name="Calque 2" x="21" y="6" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG0AAABgCAYAAAAXZvyIAAANKklEQVR4nO2deZAXxRXHvwssICggIqgBQYIcgXAshEMh4FpgFQSRS0MACxIlMWelojGpSlWuSipV/hOtwgvReIAYE6JiPIKJUQQREIMEZNH1BBXxwLDgsey+1HPfSO/rnt/O0b/d+cF8qrpqp7f79fzm9fTx+nVPGREhJm0A3AvgorgZc5ywAi4HsNz1TxdJlDYbwF+s2Jw0vAxgOICDUWS0smIKUwZgScEUOUnoC6AyshJivmljATwBoK1cc+anABxKUAGC/JzvHAAdJa4OwNMAahLK5PzDAJxhxG0HsAdAayt1NHm9AAwx4vYB2JpQXpjMvwGYZaV0wUqLEW6nxjxFRB0kf1mCwPn6ENEHhtRqIjolpczb1H0uSClvHBHVGfI2EFG5I20cmYOI6KAhk//uH0UXcWryFwHMUHHLAByWvylBYEYC6GLI3AHgvZQyw3CljyKP7+l1Q+ZAAF9wpI0j8wUA/zBknghgbsh9NyKO0hYD6GxcvwhgtZUqPmNVjo0eZJY1cR2X/wH4j5HnZBk4pOUulX8egPZNyYyqtK4ALlVxt0Yd7RSAy/+K+vf68OQtymZ1Pc5KER9+03YbuQZHGZBEVdol0nEGvAvgDitVfE6XGw14E8BOD3KLwSYA9YZc3UIkgQdwq1Q+/XJYRFEav67fVnEr5QGnhUdP3QwZ/zX6s6yxDcB+454GAejp4R7vNcYFzAUAzrJSGURR2hQAQ43rj6Rp9IFuYrao2pwl9qt+jSvblzzcH1fUx43rLmLACCWK0paojv1BqXU+0E3M057kFosthlx+JmM8laO7mnnGXNiiKaWNBjDZuOZJ4Y1WqmScqvqzD1RNziKb1LTCR7/GPAqg2rgeAeCrViqhKaUtURrnN+HfVqpkDJC5TgBbLd72JLtYcAtzwJA9TEbWafkQwF8NGfwWLwiTWUhpfQDMUXHXe+xzxqhm91kAR6xU2YIn2LuMO+qhTFFpWAHgYyP/dFWpP6eQ0hapyXQVgAesVMk5V+V8JuMKgzSNZr/Ly1SjrFTJ2C523YCuYRaSMKV1ccwXbpF5hQ9OUiPSQyXQnwXoyjXaSpEMrhB3qpxfdw1IwpQ2V80V3naYXNIwUE3Wd8uaUinwvLIEjRS7oQ8eBvCqIWeUa4TqUlo7WUk1WeV5kDBC1SAeldVaqbJJtRrp9ZaJtg/elyWaAF76WajlupRWqeyBh8Wa75NzlKxNJaIwSOUy7ZDlACqsVMlZqSrwDDH3fY5Lad9V1w94tge2U503j5ies1JlG20EsJqwFDyrBiTdAUwzxWmlVYjtK4A7xxs8P77+qr98TQ2jS4Gtang+MsqSSkRI3jaTRaautNK+I697wOPiTuATnpB2MORtEXtmKfGSGjD0Fz8PX3DrtteQNdrsskyl9XYYKpcVwYCrjcQbrBTZ55Cyv7b3OF+DrHSYC8zlYo/8DFNpC5RJhq3P91vi0tFa/bhaaWpKEV3ZfPZrzN0APjWuZwfLWIHSOos7gcnyIjRbvWWOFrC3BPuzgGfEgB4w0jURTinfdL3gtbuvwVDaLHHcCdjreTIdwAOdTsa1NsD6Qjv4FGONrkoGUQGD9NA8JfWOJZtvsPJYaf0AfEv9c7m4FPhGm3yeLEIZzcUBNVXpJG+bT+5TXmC8XDODffBuVO4EJPOyAymcMV2QNI0nG/+rksrhs5x6Gc2ZbgzVYtHxWc4RGTGaTrFvyEP2VU6drCKYhvu1rLRNDo+onOyysY3D5veK9DW+37J68RXsY8Svk+Gtr7KCcrjvPNOI3ySOSL7LGaP6sZ2yoOmyNCWhXtzlhxgy69nNeL1yob7B5YrsKSxXZU0sUjnaff0iRxof4RFVziQiauM5sEv6EaOM9fymvaVqQJ/0FSSUXuoffZSdzRdnKDm6XB+Ui5+LySlFWH3vqluIVmKgNOcbg9VgwRenOVypfU9IIQMQvVTia6HSpJeaJkGWnHwzVMk7yEr7p/jlB/Qs5AmUgimOmjlZVrF9MsHhWzHRkwOOSaUa1THneezPAiar6xdayUrsY0ZkmRiOfVIeIpPniDOt2HS4Nj32cthV08DP7TJH/tEO35c0VKi1R3aYXRt0xhOIqNbo7Hgv1iUeO+wrKJwXiKirI0+SMFPtIzPZbex7SxsWWdKP8qjH57ZKyb6TiDoH/2xFRGtUgj2y8c0lLE7g0c971k9rzM0eyulNRK9ZkhtzmyNf3DCQiN6xJDfm+x7KWagq4KfBaNtMVEFEh1ThO6PuTgwJo4joVSVzOxGtsH4m0a9DZEQJvYhos5K331ERmd+kKOcsItqm5L1BRP9ScYeJaI4jf9RQSUTvK5n3BHm1kKusn0j0ChFNT1DwPCJ615JGdCERnSjNlYbncd0dsgqFCVIRNFcT0UlE9Lz1H6JlRHRqAZmuUClNueYyIjpdnpPJx9ItlDlkFQrzHS3T20TUN0xpHG6xbqvhNb2DiMZIU+rKB5lUnkdE91kSGvi9kfZcx5vNVBHR5REe6mAiuo6IPrIkEP2ZiFpLupGOWkuiAH7g3RyyzfBlIrqeiD6xJDRUskApE0VRmvuJaLxDrg4jHEYBkrFGo5fGdboBj/RucqyvQSaOW8SxZZeYoGplOM1uBOMLrOBeA+CnKm6mLAF1sFI3LOc/KfPIPVI2+xf2lxHaOONEBJOHZBNkjRHH04171N7ugFeknC2yJFUn9zNIfs/YkPtbLUslnxhxC2WFpFylDU5seEyccvdJXHeZh1VKWdrPhH/zFeIofBSHxiG15xfS+aVlHxEtdpQRBG52XvJQDkkr0dFRBmRAVGXlSMZSImrvKAMygn0zgtR6K6Yxe4lolkN+qNKCwE3dE5a46HAzOcAhV4czpWmoTVhOtQzDXbLN0FOatKSV8UUiutQhVwcevK22ckejTpr30AGgFeEIbYnoYiJ6SEZFTVEjaac6ZDUV2OC6Up0rEka9jOR+LgOBOOVwH3NXyEBJUy+DGS6nh0NWoTBDRrCuvk7D93I3EZ1fQF5on1aIYdI3DJA0wYk91bL4t0OWdaoKyIhCHzFHjZKFxsBFgfuBfVLOevGjOJyinDPFZDdK7IhBOdyXvCPOTRtkaSfN5pPhYi05W8yEFyj77pXiyBNpH3uSA83WSacJ+XHD5SEWkzYim9eXirknu7nKWa/MUxVxvKzbWDGFaetYSPS5WBpGc202bI5yyh1GZdfoNBQfFmnfVu1jnbSnB+UPvBTJlVaC5EorQXKlNT9HlI9+bHKlNT+kfHJikyutBMmVVoLEnVy3NHxCzlBxCOro2B0ThzLpX14X56bqlPKajVJQWhs5cmi+rKOdZqVIT43YGP8k5y9m+rinrDePkz5zGWtYcJxdJIVBFlenyAb1tZ6PmPBOVpXGTdev5AFOsv5bXCbJUX7Tm/tHRyWLzSMboJc6juCFbCfeLPu096YcOpeJh3DgVmDufukmb920LG58zKLSfudQ2Edy0sLNRVoG6ikew1cbfhonir/HeFnDywxZax6ny4MzYQeiqQB+VMR1uz3SHM+UE14D+jmckVqcLCmN15R+q+J2SRPl6zTXpngEwPfUAugitUGxxcmS0qaJO0PAYWmymvtIQV72X2Ncdw2OgsgKWVOaycoW/BrGrWqiPdFK0YJkRWnt1Oa5eqnxLcVz6qMOZ2dp0JYVpXVUGw4PqAPDmpt96msX3UK8mVuErCittarJR1r4SxhHlLt3eTM5MEUiS32a2YeU+XCASYEuP1OG5HxppgTJldb8UNqmP1day/BJmlJzpZUgudJKkFxpJUiutBIkV1o2iDUn9aG0kvBgyjDkOHOzIHGVpr/azqadE6xUOYUoU6cY1MU9lT2u0mrl6+oBZZ4+G3w8cYLauntYHZ/RJEmax2p17fuE7GOdrmolfL9ycWiSJErTn8OvLEFP5ZZkqJzAGvBy3G8TJFHaOvU6j8hPG4/FVJV4c9zBXBKlvaocbXit6YdWqhwX3eQjdgEkzkSxSKI0tlDfruL4syfnWylzNIvVwG2bo7tpkqTztDWqMD6q4o8hB4blNNBbDnkxWa4+nldUpfHSwi9V3BDxAtYnsOU0zGevlVPnAnY7PpEciTQWkYfliEGTOeK67fOTVMcC16i+DOLR/GGS35bWjHWl48u5i2SPl/MT9scZPBW6DsCP1c9eIZ+hTkRapdXIZj894b5QdpvMP47ncDwV+juAH6j4rRKX2Gbrw2D8krz6+ouDfeXU1LVy4mgPK+dRDqofQXFNO56pU9uo6pX5LoxyOW1uqUyLpqh0/IwujmsB0fh6C3bIpPEmxxcbJkl4S4623SnOoDXiX1gno07zUC/++5tF+OZZFEjKNL+/1lE+BlGjKjqJ8beTHHdYIafyufr0jVJ5dasUmyRHBxaCa9rPpK/rVCDd8US9nEF8VcS3tUl8Ky2Ad7/8RCbdmXGnbgF4A8kfADzos+hiKS2AvxA1V7YK9XN8UOdYg5t6PuKClcUbSLg/j7XA2SQA/g9KzaHHQPjO/wAAAABJRU5ErkJggg=="/>
</svg>
											 <div style="color:#FFFFFF; padding-top:10px">33 Agences en <br/>Tunisie  </a>&nbsp;</div>
                                             </td>

											</td>
											<td align="left" class="block1">

                                            <td align="center" class ="tel">
<svg fill="#fff" width="100px" height="50px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">

<g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M728.5,4272.1c-298.7-83.1-546-342.3-609.3-644.9c-17.8-81.1-21.8-678.6-17.8-2334.4l5.9-2225.6l43.5-108.8c65.3-158.3,176.1-294.8,318.5-389.7c229.5-154.3,43.5-144.4,2736-144.4H5615l5.9-993.1l5.9-995.1l51.4-110.8c73.2-156.3,178-263.1,330.4-338.3l132.5-65.3h1622.2h1622.2l132.5,65.3c152.3,75.2,257.2,182,330.4,338.3L9900-3564v1157.3v1157.3l-55.4,112.8c-95,195.9-282.9,346.2-474.8,381.8l-73.2,13.9V-280c0,405.6-4,474.8-39.6,585.6c-69.2,221.6-247.3,409.5-459,486.7l-95,35.6v1339.3c0,908-7.9,1372.9-21.8,1444.2c-31.7,152.3-104.9,294.8-209.7,411.5c-104.8,116.7-219.6,187.9-383.8,239.4c-116.7,35.6-247.3,37.6-3693.5,35.6C1569.3,4295.8,799.7,4291.9,728.5,4272.1z M8085.9,3951.6c55.4-27.7,136.5-91,180-138.5c122.6-138.5,140.5-219.6,140.5-615.3v-342.2H4400.3H394.2v362c0,338.3,4,366,47.5,459c57.4,120.7,170.1,231.5,288.8,284.9c89,39.6,112.8,41.6,3671.8,41.6H7983L8085.9,3951.6z M8406.4,1730V879.3l-745.8-5.9c-714.2-7.9-753.7-9.9-864.5-51.4c-247.3-93-389.7-219.6-494.6-439.2l-61.3-128.6l-5.9-498.6c-5.9-411.5-11.9-500.5-33.6-500.5c-15.8,0-79.1-19.8-142.4-43.5c-164.2-61.3-344.2-243.3-393.7-397.6l-35.6-112.8l-2403.7,4c-2393.8,5.9-2405.6,5.9-2494.7,47.5c-122.7,57.4-207.7,132.5-273,243.3l-53.4,91l-5.9,1746.9l-4,1744.9h4006.1h4006.1V1730z M8685.3,529.1c124.6-57.4,225.5-152.3,278.9-261.1c41.5-87.1,45.5-120.7,51.4-542.1l7.9-451.1H7775.3H6527v451.1V177l55.4,106.8c63.3,126.6,154.3,203.8,300.7,257.2c102.9,37.6,152.3,39.6,910,33.6C8560.7,570.7,8598.3,568.7,8685.3,529.1z M9405.4-1073.3c43.5-21.8,106.8-79.1,138.5-124.6l59.3-85.1l5.9-1105.9c4-1058.4,4-1107.9-33.6-1179.1c-43.5-87-104.8-146.4-193.9-191.9c-57.4-27.7-223.5-31.6-1612.3-31.6c-1460,0-1553,2-1628.2,37.6c-96.9,43.5-180,136.5-207.7,235.4c-15.8,49.5-19.8,421.4-15.8,1153.4l5.9,1078.2l53.4,81.1c33.6,53.4,89,98.9,158.3,132.5l104.8,51.4l1543.1-4C9304.5-1031.8,9328.3-1031.8,9405.4-1073.3z"/><path d="M1296.3,1015.8c-100.9-31.7-203.8-118.7-261.1-223.5l-57.4-102.9V135.5c0-488.7,4-565.8,35.6-646.9c41.5-108.8,164.2-223.5,271-255.2c45.5-11.9,451.1-17.8,1159.3-13.9l1088.1,5.9l83.1,55.4c45.5,29.7,106.8,91,136.5,136.5l55.4,81.1l5.9,599.4c5.9,670.7,5.9,676.6-138.5,813.1c-128.6,124.6-128.6,124.6-1280,122.6C1822.5,1033.6,1328,1023.7,1296.3,1015.8z M3480.4,699.3c21.8-21.8,43.5-59.3,49.5-83.1c5.9-25.7,9.9-267.1,5.9-534.2c-5.9-478.7-5.9-490.6-51.4-534.1l-45.5-45.5H2400.2H1359.6l-47.5,55.4c-47.5,55.4-47.5,55.4-47.5,550c0,506.5,11.9,589.5,83.1,617.2c13.8,5.9,490.6,11.9,1060.4,11.9C3411.1,738.8,3442.8,736.9,3480.4,699.3z"/><path d="M7650.7-1459.1c-360.1-51.4-633.1-395.7-603.4-761.7c9.9-130.6,85.1-322.5,156.3-399.6c41.5-43.5,43.5-47.5,13.8-257.2c-15.8-116.7-27.7-271-27.7-344.2c0-122.7,4-138.5,61.3-195.8c81.1-81.1,162.2-96.9,512.4-96.9c364,0,435.2,15.8,520.3,106.8c77.2,85.1,79.1,128.6,29.7,488.6l-33.6,251.3l57.4,65.3c102.9,124.6,136.5,227.5,136.5,433.2c0,168.2-5.9,199.8-55.4,304.7c-69.2,142.4-191.9,269-322.5,336.3c-85.1,41.5-136.5,55.4-292.8,79.1C7781.2-1445.2,7712-1451.2,7650.7-1459.1z M7983-1803.3c122.7-73.2,191.9-184,201.8-326.4c11.9-152.3-19.8-237.4-128.6-344.2l-89-89l51.4-306.7c27.7-168.2,51.4-318.5,51.4-336.3c0-27.7-39.6-31.6-296.7-31.6c-350.2,0-316.5-49.5-255.2,381.8l41.6,290.8l-87.1,95c-104.8,110.8-142.4,209.7-130.6,338.3C7373.7-1811.2,7704.1-1641.1,7983-1803.3z"/></g></g>
</svg>
											 <div style="color:#FFFFFF; padding-top:5px;"> Paiement 100% <br/>s&eacute;curise<br/>&nbsp;</div>
                                             </td>

											</td>
											<td align="left" class="block1">

                                            <td align="center" class ="tel" style="margin-top:5px">
                                             <svg fill="#fff" width="80px" height="50px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">

<g><path d="M500,10.1C229.8,10.1,10,229.9,10,500c0,270.3,219.8,489.9,490,489.9c270.1,0,490-219.7,490-489.9C990,229.9,770.1,10.1,500,10.1z M500,949.1C252.3,949.1,50.9,747.6,50.9,500C50.9,252.4,252.3,50.9,500,50.9c247.7,0,449.2,201.4,449.2,449.1C949.2,747.7,747.7,949.1,500,949.1z"/><path d="M732.9,611.8c-10.5-3.7-22.2,1.6-26.1,12.4c-31.2,86.8-114.3,145.4-206.7,145.4c-92.8,0-175.9-58.7-207-146.2c-3.7-10.6-15.5-16.2-26.1-12.4c-10.6,3.7-16.2,15.5-12.4,25.9C291.4,740.8,390,810.5,500.1,810.5c109.6,0,208.1-69.2,245.2-172.5C749.1,627.4,743.5,615.6,732.9,611.8z"/><path d="M310.4,333.8c41,0,74.5,40.4,74.5,90c0,11.3,9.1,20.4,20.4,20.4c11.2,0,20.4-9.1,20.4-20.4c0-72.2-51.7-130.9-115.3-130.9c-63.6,0-115.2,58.7-115.2,130.9c0,11.3,9.2,20.4,20.4,20.4s20.5-9.1,20.5-20.4C236,374.1,269.3,333.8,310.4,333.8z"/><path d="M689.7,292.8c-63.6,0-115.4,58.7-115.4,130.9c0,11.3,9.3,20.4,20.5,20.4c11.2,0,20.4-9.1,20.4-20.4c0-49.6,33.4-90,74.5-90c41,0,74.3,40.4,74.3,90c0,11.3,9.2,20.4,20.4,20.4s20.4-9.1,20.4-20.4C804.9,351.5,753.2,292.8,689.7,292.8z"/></g>
</svg>
											 <div style="color:#FFFFFF; padding-top:5px;">+ 200000 Clients <br/>Satisfaits<br/>&nbsp;</div>
                                             </td>


											</td>



									   </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

						</table>
						</div>
						</div>
						<div class="conteneur_footer2" style="background-color:#1d1d1d; height:80px;">
						<div class="footer2" style=" background-color:#1d1d1d">
						<table>
						<tr bgcolor="#1d1d1d">
                            <td class="column1" >

                                <table class="section_footer1" style="border-top:1px solid #5b5b5b; margin-bottom:10px;">
                                    <tbody>
                                        <tr>

										   <td align="left" class="block1">

                                            <td align="center" style="color:#fff; font-size:18px;margin-top:10px;">
                                              <a href="https://tn.tunisiebooking.com" aria-label="tunisie">
											<svg fill="#fff" width="50px" height="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<rect y="85.331" style="fill:#D80027;" width="512" height="341.337"/>
<circle style="fill:#F0F0F0;" cx="256" cy="255.994" r="96"/>
<g>
	<polygon style="fill:#D80027;" points="267.826,219.291 284.296,241.986 310.969,233.337 294.473,256.013 310.941,278.708
		284.277,270.027 267.782,292.703 267.799,264.663 241.135,255.981 267.809,247.333 	"/>
	<path style="fill:#D80027;" d="M277.818,312.724c-31.33,0-56.727-25.397-56.727-56.727s25.397-56.727,56.727-56.727
		c9.769,0,18.96,2.47,26.985,6.819c-12.589-12.31-29.804-19.909-48.803-19.909c-38.558,0-69.818,31.259-69.818,69.818
		s31.26,69.818,69.818,69.818c18.999,0,36.215-7.599,48.803-19.909C296.777,310.254,287.587,312.724,277.818,312.724z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</a>
                                             </td>



											<td align="center" style="color:#fff; font-size:18px;margin-top:10px;">
                                              <a href="https://www.tunisiebooking.com" aria-label="france">
											<svg fill="#fff" width="50px" height="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<rect y="85.331" style="fill:#F0F0F0;" width="512" height="341.337"/>
<rect y="85.331" style="fill:#0052B4;" width="170.663" height="341.337"/>
<rect x="341.337" y="85.331" style="fill:#D80027;" width="170.663" height="341.337"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

</a>
                                             </td>

<td align="center" style="border-right:1px solid #595959;">

                                             </td>




                                           <td align="center" class ="tel" style="padding-left:2%; margin-top:10px;border-right:1px solid #595959; padding-right:2%">
                                             <span class="obf" data-o="aHR0cHM6Ly90bi50dW5pc2llYm9va2luZy5jb20vcGxhbi1zaXRlLmh0bWw" style="color:#FFFFFF; font-size:14px; cursor:pointer">Plan du site</span>

                                             </td>
											  <td align="center" class ="tel" style="padding-left:2%; margin-top:10px;">
                                             <span class="obf" data-o="aHR0cHM6Ly90bi50dW5pc2llYm9va2luZy5jb20vcXVpX3NvbW1lX25vdXMucGhw" style="color:#FFFFFF; font-size:14px; cursor:pointer">Mention L&eacute;gale</span>

                                             </td>
                                             <td align="center" class ="tel" style="padding-left:2%; margin-top:10px;">
                   	<span class="obf" data-o="aHR0cHM6Ly90bi50dW5pc2llYm9va2luZy5jb20vZnJhbmNoaXNlLmh0bWw=" style="color:#FFFFFF; font-size:14px; cursor:pointer">Devenir Franchisé</span>
                   </td>


											<td align="left" class="block1">

                                            <td align="center" class ="tel">


                                             </td>

											</td>

											<td align="left" class="block1">

                                            <td align="center" class ="tel">


                                             </td>

											</td>

											<td align="left" class="block1">

                                            <td align="center" class ="tel">


                                             </td>

											</td>
											<td align="left" class="block1">

                                            <td align="center" class ="tel">


                                             </td>

											</td>
											<td align="left" class="block1">

                                            <td align="center" class ="tel">


                                             </td>

											</td>
											<td align="left" class="block1">

                                            <td align="center" class ="tel">


                                             </td>

											</td>
											<td align="left" style="width:80px;">
											<span style=" color:#FFFFFF; font-size:14px;">Nous suivre:</span>
											</td>
											<td align="left">

                                            <td align="center" width="50px"  style="padding-top:2px;">
													    <span class="obf" data-o="aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL1R1bmlzaWVib29raW5nY29t" style="color:#FFFFFF; font-size:14px; cursor:pointer">
														<svg class="svg-icon_face" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">

<g><g transform="translate(0.000000,437.000000) scale(0.100000,-0.100000)"><path d="M5374.2,4245.3c-872.1-112.4-1438.5-640.6-1629.6-1515c-36-168.6-47.2-323.7-56.2-914.8l-13.5-714.8l-474.3-4.5l-474.3-6.7l-6.7-858.6l-4.5-860.9h483.3h483.3v-2450v-2450h1022.7h1022.7v2450v2450h685.5h685.5l9,51.7c6.7,27,42.7,368.6,80.9,757.5c38.2,388.8,76.4,755.2,83.2,815.9l13.5,105.6h-780h-779.9l6.7,591.1c6.7,669.8,18,712.5,182.1,820.4l89.9,60.7l627.1,6.7l624.9,6.8v842.9V4270l-869.9-2.2C5904.7,4265.5,5450.7,4256.5,5374.2,4245.3z"/></g></g>
</svg>
														</span>
													</td>
													<td align="center" width="50px" style="padding-top:4px;">
													<span class="obf" data-o="aHR0cHM6Ly90d2l0dGVyLmNvbS90dW5pc2llYm9va2luZzE" style="color:#FFFFFF; font-size:14px; cursor:pointer">
													  <svg class="svg-icon_twiter"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">

<g><g><path d="M990,196.5c-27.8,40.6-61.4,75.2-100.7,103.8c0.4,5.8,0.6,14.5,0.6,26.1c0,53.9-7.9,107.7-23.6,161.4c-15.8,53.7-39.7,105.2-71.8,154.5c-32.1,49.3-70.4,93-114.7,130.9c-44.4,37.9-97.8,68.2-160.4,90.8S389.7,898,318.4,898c-112.3,0-215.2-30.1-308.4-90.2c14.5,1.7,30.7,2.5,48.5,2.5c93.3,0,176.4-28.6,249.4-85.8c-43.5-0.8-82.5-14.2-116.9-40.1c-34.4-25.9-58-59-70.9-99.2c13.7,2.1,26.3,3.1,37.9,3.1c17.8,0,35.4-2.3,52.9-6.8c-46.4-9.5-84.9-32.6-115.3-69.3C65,475.4,49.8,432.8,49.8,384.3v-2.5c28.2,15.8,58.5,24.3,90.8,25.5c-27.4-18.2-49.1-42.1-65.3-71.5C59.1,306.4,51,274.5,51,240.1c0-36.5,9.1-70.3,27.4-101.4c50.2,61.8,111.2,111.2,183.1,148.3c71.9,37.1,148.9,57.7,231,61.9c-3.3-15.8-5-31.1-5-46c0-55.5,19.6-102.9,58.8-142.1c39.2-39.2,86.5-58.8,142.1-58.8c58,0,107,21.1,146.8,63.4c45.2-8.7,87.7-24.9,127.5-48.5c-15.3,47.7-44.8,84.6-88.3,110.7C912.9,223.5,951.4,213.1,990,196.5L990,196.5z"/></g></g>
</svg>
													   </span>
													</td>

													<td align="center" width="50px" style="padding-top:4px;">
													<span class="obf" data-o="aHR0cHM6Ly93d3cueW91dHViZS5jb20vY2hhbm5lbC9VQzcxaEJJU3A4V09QUDhyRUFlSGItcmc" style="color:#FFFFFF; font-size:14px; cursor:pointer">

<svg class="svg-icon_youtube"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
													   </span>
													</td>
													<td align="center" width="50px" style="padding-top:2px;">
													<span class="obf" data-o="aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS90dW5pc2llYm9va2luZ2NvbS8=" style="color:#FFFFFF; font-size:14px; cursor:pointer">
													<div class="svg-icon_instragram"></div>
													   </span>
													</td>

											</td>
                                       <td align="left" class="block1">

                                            <td align="center" class ="tel">


                                             </td>

											</td>
									   </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

					</table>
					</div>
</div>


<script type="text/javascript">
var nosagences = function(url,outbound,click_labell,detaill_event) {
   ga('send', 'event', outbound, click_labell, detaill_event, url, {
     'transport': 'beacon',
     'hitCallback': function(){ window.open(url,'_blank');}
   });
}

jQuery(document).on('click', '.obf', function(){
  var t = jQuery(this);
  var link = atob(t.data('o'));
  window.open(link);
});
	</script>
</div>
<script type="text/javascript" src="https://tn.tunisiebooking.com/theme/gallery_slide/slick/slick.min.js"></script>
<script src="https://tn.tunisiebooking.com/theme/js/bootstrap.min.js"  type="text/javascript"></script>
<script src="https://tn.tunisiebooking.com/theme/social/dist/jssocials.js" async type="text/javascript"></script>
<script src="https://kit.fontawesome.com/a59b9b09ab.js"></script>
<script src="https://kit.fontawesome.com/38a91e29db.js" crossorigin="anonymous"></script>
<script src="https://tn.tunisiebooking.com/theme/responsive-design/js/codes_js_thematique_detail_v2.js"></script>
<img height="1" width="1" style="border-style:none; visibility:hidden" alt="" class="lazy" data-src="https://tn.tunisiebooking.com/theme/impression_track_pixel.php?idhotel=36&session=">
<!-- hover on add and delete icon repch-->
<script>
$('.plus').bind("mouseenter", function() {
	$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/+rose.svg)");
});
$('.plus').bind("mouseleave", function() {
	$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/+noir.svg)");
});
var nbenfant=document.getElementById("enfants"+1).value;
var nbenfant=document.getElementById("enfants"+2).value;
var nbenfant=document.getElementById("enfants"+3).value;
var nbenfant=document.getElementById("enfants"+4).value;

if(nbenfant==0){
		$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/gris-claire.svg)");
}
else
{
	$('#enmoins'+5).bind("mouseenter", function() {
	$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/-rose.svg)");
	});
	$('#enmoins'+5).bind("mouseleave", function() {
		$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/-gris.fonce.svg)");
	});
}

var nbadulte=document.getElementById("adultes"+5).value;

if(nbadulte==1)
{
	$('#admoins'+5).bind("mouseenter", function() {
		$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/-gris.fonce.svg)");
	});
	$('#admoins'+5).bind("mouseleave", function() {
		$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/gris-claire.svg)");
	});
}
else{
	$('#admoins'+5).bind("mouseenter", function() {
		$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/-rose.svg)");
	});
	$('#admoins'+5).bind("mouseleave", function() {
		$(this).css("background-image", "url(https://tn.tunisiebooking.com/images/-gris.fonce.svg)");
	});
}

</script>
<script  type="text/javascript">
function submit_auto()
 {
verif_data();
 document.getElementById('verifde').style.display='none'; document.getElementById('tarifde').style.display='';

 document.getElementById("resultat").innerHTML='';
 if(localStorage.getItem("formule_slect")){
	var formule=localStorage.getItem("formule_slect");}
 else{
 var formule=document.hotel.formule_slect.value;}
 if(localStorage.getItem("type_chambre")){
	 var type_ch=localStorage.getItem("type_chambre");
 }
 else{
	 var type_ch=document.hotel.type_chambre.value;
 }
if(localStorage.getItem("chambres")){
var chambres=localStorage.getItem("chambres");
document.hotel.chambres.value=chambres;
}else{
var chambres="";
document.hotel.chambres.value=chambres;
}

for(var z=1;z<=chambres;z++){
if(localStorage.getItem("adultes"+z)){
var adult=localStorage.getItem("adultes"+z);
document.getElementById("adultes"+z).value=adult;}
else{
var adult="";
document.getElementById("adultes"+z).value=adult;
}

if(localStorage.getItem("enfants"+z)){
var enf=localStorage.getItem("enfants"+z);
document.getElementById("enfants"+z).value=enf;}
else{
var enf="";
document.getElementById("enfants"+z).value=enf;
}

for(var k=1;k<=document.getElementById("enfants"+z).value;k++)
{if(localStorage.getItem("age"+z+"_"+k)){
var age=localStorage.getItem("age"+z+"_"+k);}
else
var age="";
document.getElementById("age"+z+"_"+k).value=age;
}
}

	var params='';	 var params_ch='';
 var nbcham=document.hotel.chambres.value;
	var source_comm=document.hotel.source_comm.value;
params+="DOPBookingSystem_CheckIn1="+document.hotel.depart.value+"&";
params+="nbr_nuit="+document.hotel.nbr_nuit.value+"&";
params+="chambres="+document.hotel.chambres.value+"&";
params+="source_comm="+document.hotel.source_comm.value+"&";
		if(document.hotel.depart.value=='')
		{alert(" Veuillez choisir une date d'Arrivée !!");document.hotel.depart.focus();	return false;}
			if(document.hotel.nbr_nuit.value=='')
			{	alert(" Veuillez choisir nbr de nuits !!");	document.hotel.nbr_nuit.focus();return false;   }
	var nbcham=document.hotel.chambres.value;
	if(nbcham==0)
	{
alert(" Veuillez choisir nombre de chambres");
document.hotel.chambres.focus();
verif=1;
return false;}

	for(var z=1;z<=nbcham;z++)
	 {
		for(var k=1;k<=document.getElementById("enfants"+z).value;k++)
		{
		 if(document.getElementById("age"+z+"_"+k).value=='') { alert(" Veuillez choisir l'age de votre enfant !!"); document.getElementById("age"+z+"_"+k).focus(); return false;}
	 	 }

}

var nb_passage=0;
 for(var z=1;z<=nbcham;z++)
	 {
			nb_passage=(document.getElementById("ens"+z).innerHTML)*1+(document.getElementById("adult"+z).innerHTML)*1;
	 if(nb_passage==0){alert(document.getElementById("adult"+z).innerHTML);document.hotel.chambres.focus(); return false;}
			params_ch+="adultes"+z+"="+document.getElementById("adultes"+z).value+"&";
			params_ch+="enfants"+z+"="+document.getElementById("enfants"+z).value+"&";
			for(var k=1;k<=document.getElementById("enfants"+z).value;k++)
			{ params_ch+="age"+z+"_"+k+"="+document.getElementById("age"+z+"_"+k).value+"&"; }
	 }

document.getElementById("resultat").innerHTML='<span style="font-family:Arial; font-size:20px;"> Merci de patienter svp</span><br />&nbsp;<img src="https://tn.tunisiebooking.com/theme/images/loader.gif"  alt="loader"  width="287" height="141" class="loading3" /><br /><br />';
 for(var z=1;z<=nbcham;z++)
	 {
			params_ch+="adultes"+z+"="+document.getElementById("adultes"+z).value+"&";
			params_ch+="enfants"+z+"="+document.getElementById("enfants"+z).value+"&";
			for(var k=1;k<=document.getElementById("enfants"+z).value;k++)
			{ params_ch+="age"+z+"_"+k+"="+document.getElementById("age"+z+"_"+k).value+"&"; }
	 }
params+=params_ch;
var testmodif = document.getElementById('test_clic').value ;
var action=action; var myData = 'id_hotel_xml=36&formule='+formule+'&type_chambre='+type_ch+'&testmodif='+testmodif+'&ville=Hammamet&'+params;
jQuery.ajax({ type: "GET", url: "https://tn.tunisiebooking.com/theme/traitement_detailv_contre_proposition_new_v2.php",dataType:"html",data:myData,async : true,cache: false, success:function(response)
{
	retour1= response;
	var msi=retour1.split('~~~~~~~');
	var ms=msi[0].split('###');
	//recuperer session
	// console.log("https://tn.tunisiebooking.com/theme/traitement_detailv_contre_proposition.php?"+myData);
			var msesion=ms[2];
		document.getElementById('testsession').value=msesion;
	//
	if(ms[0]=='failure')
		{
		document.getElementById('prix_par_nuits').className ="prix_par_nuit";
		document.getElementById("resultat").innerHTML='';

			if(ms[1]!=""){
			 document.getElementById("ereur").innerHTML='<span>'+ms[1]+" </span>";
		 //document.getElementById('ereur').className ="plan_moteur cadremsgerreur";
			document.getElementById('vdautrehotel').className ="voir_autre_h";
			var np = ms[1].indexOf("Le nombre minimum de nuits");
		if((ms[1]=="Type de Chambre n est pas disponible") || (ms[1]=="pas de produit disponible") || (ms[1]=="pas de stock disponible")|| (ms[1]=="Pas de stock disponible pour le moment")|| (ms[1]=="Pas de chambre(s) disponible(s) pour le moment, veuillez contacter notre service client")|| (np*1>=0)|| (ms[1]=="Le type ou le nombre de chambre(s) demandé(s) est indisponible, vous pouvez voir d'autres hôtels ou contacter notre service Clients." )){changer_hotel('Hammamet')}}
							 else{ if(retour1.trim()=='@')alert('Pas de chambre(s) disponible(s) pour ces dates, veuillez modifier la recherche.'); }
				 }
				 else{

					 document.getElementById('ruslt').style.display='block';
			 					$('.moteur_detail').hide();
			 					$(".bt_modifier").addClass("bt_modifier_active");
			 					$('.recap_moteur_detail').show();
			 					var style_result=$('#ruslt').attr('style'); //it will return string
			 					style_result+= ';margin-bottom: 1%';
			 					$('#ruslt').attr('style',style_result);
								var style_bt =$('.v194_23').attr('style'); //it will return string
								style_bt+= ';z-index:0;';
								$('.v194_23').attr('style',style_bt);
			 					var style_btmodif =$('.bt_modifier').attr('style'); //it will return string
			 					style_btmodif += ';margin-top:-3% !important;';
			 					$('.bt_modifier').attr('style',style_btmodif);
			 					$(".bt_modifier").addClass("bt_modifier_active");
			 					document.getElementById('prix_par_nuits').className ="cache_prix_par_nuit";
			 					document.getElementById('ereur').className ="plan_moteur cadremsgerreur_cache";
			 					document.getElementById('vdautrehotel').className ="voir_autre_h_cache";
			 					document.getElementById('recap_rech').style.display='';
			 					document.getElementById("resultat").innerHTML=ms[1];
			 					document.getElementById("recap_rech").innerHTML= msi[1];
			 					document.getElementById('moteur_rech_load').style.display='none';
								/*var element = document.querySelector('#ruslt');
								var offset = element.offsetTop - 20;

					window.scrollTo({
							top: offset,
							behavior: 'smooth'
					});*/
			 				}
	if(document.getElementById('pass_slect'))
	{
if(document.getElementById('pass_slect').value!=0)
{
var nb_pass=document.getElementById('pass_slect').value;
var nb_ad= document.getElementById("adult_opt_1").value;
slect_passe(1,nb_pass,nb_ad);
}
}
} })
ga('send','event','Recherche','Moteur hotel','vérifier la disponibilité');
 }
/*** recuperation cookie****/
function recup_cookie(name) {
	if(document.cookie.length>0){
		start=document.cookie.indexOf(name+"=");
		pos = start+name.length+1;
		if(start!=0){
			start=document.cookie.indexOf("; "+name+"=");
			pos = start+name.length+3;
		}
		if(start!=-1){
			start=pos;
			end=document.cookie.indexOf(";",start);
			if(end==-1){
				end=document.cookie.length;
			}
			return unescape(document.cookie.substring(start,end));
		}
	}
	return '';
}

function remlire_moteur()
{
	var session='';
	var cookValue = "" ;
	cookValue=recup_cookie('historique_tn');
	if((cookValue)&&(session=='')){
		document.getElementById('moteur_rech_load').style.display='none';
		var tab=cookValue.split("##");
		var tab_date=tab[1].split("-");
		var dd=tab_date[2]+'/'+tab_date[1]+'/'+tab_date[0];
		document.getElementById("depart").value=dd;
		document.getElementById("nbr_nuit").value=tab[2];
		document.getElementById("select_ch").value=tab[3];
		var i=1;
		var liste_ch=tab[4];
		var tab_ch=liste_ch.split("@@");
		var ii=0;
		while(tab_ch[ii]){
		var tab_pass=tab_ch[ii].split("++");
		ii++;
		var ch_ad=tab_pass[0];
		var ch_passager=ch_ad.split("**");
		var nb_ad=ch_passager[0]*1;
		document.getElementById("adultes"+ii).value=nb_ad*1;
		var jj=1;
		var nb_ef=0;
		var indice=0;
		while(tab_pass[jj]){
		var ch_ef=tab_pass[jj].split("**");
		indice=jj+1;
		document.getElementById("age"+ii+"_"+jj).value=ch_ef[2];
		nb_ef++;
		jj++;
		}
		document.getElementById("enfants"+ii).value=nb_ef;
		}
		submit_auto();
	}
	else {
		submit_auto();
	}
}
</script>
<script  defer="defer" type="text/javascript">
/** menu et sous menu **/
function menu_detail(id_td){
	var targetDiv = document.getElementById(id_td);
	var rect = targetDiv.getBoundingClientRect();
	var additionalScroll = -50+window.scrollY;
	var newPosition = rect.top + additionalScroll;
	window.scrollTo(0, newPosition);
}
/*** select formule ***/
function slect_formule(formule,nbr_nuit,nb_chambres,session){
	var choix_radio=new Array; var radio =document.formcoord; var k=0;
	for (var i=0; i<radio.length;i++) {
		if (radio[i].checked){
			choix_radio[k]=radio[i].id;	k++;
		 }
	 }
	var myData='session='+session+'&id_hotel_xml=36&nb_nuit='+nbr_nuit+'&chambres='+nb_chambres+'&ville=Hammamet&formule='+formule;
	jQuery.ajax({ type: "GET", url: "https://tn.tunisiebooking.com/theme/traitment_rest_formule_contre_proposition_v2.php",dataType:"html",data:myData, async : true,cache: false, success:function(response){ retour1= response;
	if(retour1!='@'){
		var msi=retour1.split('###');
		var ms=msi[1].split('~~~~~~');
		$(".bloc_anglet_formule").remove();
		document.getElementById("result_par_arrangement").innerHTML=msi[0];
		document.getElementById("prix_total").innerHTML=ms[0];
		if(ms[1]>0){
			document.getElementById("prix_total_barre").innerHTML=ms[1];
			document.getElementById("prix_total_barre").style.display='';
			var x = document.getElementsByClassName("aulieude");
			var i;
			for (i = 0; i < x.length; i++){
				x[i].style.display='';
			}
		}
		else {
			document.getElementById("prix_total_barre").style.display='none';
			var x = document.getElementsByClassName("aulieude");var i;
			for (i = 0; i < x.length; i++) {
		  	x[i].style.display='none';
			}
		}
	}
	}
	})
	for (var j=0; j<choix_radio.length;j++) {var mon_chaine=choix_radio[j].split('_');  slectform(mon_chaine[1].replace("formule", ""),formule,mon_chaine[3],nb_chambres)}
	ga('send','event','Formule','choix de formule','formule via détail');
}
/*** select chambres dispo***/
function check_input(div,numero_room,formule,indicateur,nbroom){
var textInput = div.querySelector('input[type="radio"]');
textInput.checked = true;

slectform (numero_room,formule,indicateur,nbroom);
}

function slectform (numero_room,formule,indicateur,nbroom)
{
var valeur = '';var prix_total=document.getElementById("prix_total").innerHTML;var prix_total=0;var prix_total_barre=0;
    for (r=1; r<=nbroom; r++)
	 {
	    for (i=0; i<8 ;i++) {
		if (document.getElementById("choix_formule"+r+"_"+formule+"_"+(i*1+1*1))) {
		    if (document.getElementById("choix_formule"+r+"_"+formule+"_"+(i*1+1*1)).checked==true)
			 {		 document.getElementById("formule"+r+"_"+formule+"_"+(i*1+1*1)).className ="line_result formule_slectione";
		       if (document.formcoord.elements["price_"+formule+"_"+((i*1)+(1*1))+"_"+r]){
		            prix_total=(prix_total*1)+(document.formcoord.elements["price_"+formule+"_"+((i*1)+(1*1))+"_"+r].value)*1;
		            prix_total_barre=(prix_total_barre*1)+( document.formcoord.elements["pricebar_"+formule+"_"+((i*1)+(1*1))+"_"+r].value)*1;
		 }
		}
		else document.getElementById("formule"+r+"_"+formule+"_"+(i*1+1*1)).className ="line_result ";
		}
	}
	 }
	 document.getElementById("prix_total").innerHTML=prix_total;
	 if(document.getElementById("prix_total_barre").value!=''){document.getElementById("prix_total_barre").innerHTML=prix_total_barre;document.getElementById("total_barre").style.display='';}
	  if(prix_total_barre==0) {document.getElementById("prix_total_barre").innerHTML='';document.getElementById("total_barre").style.display='none'; }
}
function afficher_masquer_age(j,k){
	for(var d=1;d<=4;d++){
		for(var i=1;i<=j;i++){
			document.getElementById('agenf_'+k+'_'+i).style.display='';
			document.getElementById('age'+i).style.display='';
		}
		if(j<4){
			for(var z=((j*1)+(1*1));z<=4;z++){
				document.getElementById('agenf_'+k+'_'+z).style.display='none';
				document.getElementById('age'+z).style.display='none';
			}
		}
	}
}
function afficher_masquer_select(j)
	 {
	    if(j!=0){  for(var i=1;i<=j;i++){document.getElementById('select_'+i).style.display='';}
				  for(var z=i;z<=5;z++){document.getElementById('select_'+z).style.display='none';}document.getElementById('select_0').style.display='';document.getElementById('titre_ch').style.display='';
				}else{document.getElementById('select_0').style.display='none';document.getElementById('titre_ch').style.display='none';}
	}
   function submit_form()
   {
		 $('.v194_25').addClass('clicked');
		 $('.v194_25 img').addClass('clicked');
		 $('.v194_25 p').addClass('clicked');
		 $(".ld_button_carteb").css({"display":"block"});
		 $(".content_button").css({"display":"none"});
      	 ga('send', 'event', 'pré-réservation', 'passage coordonné', 'je réserve');
      var choi=0;  var nbchambres=document.formcoord.nbchambres.value;
	  for(var z=1;z<=nbchambres;z++)  { var name="choix_formule"+z; var elements = document.getElementsByName(name); for (var i=0, len=elements.length; i<len; ++i) { if (elements[i].checked) choi++;} }
	  if(choi==nbchambres){
	  	     /////////////////
 if(window.XMLHttpRequest)   xhr_object = new XMLHttpRequest();
	 else if(window.ActiveXObject)
	 { // Internet Explorer
	   try { xhr_object = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {xhr_object= new ActiveXObject("Microsoft.XMLHTTP"); }
	}
	else { // XMLHttpRequest non supporté par le navigateur
	   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
	   xhr_object = false;
	  }


	  var ttt = document.getElementById('testsession').value ;
	fichierrr2='https://tn.tunisiebooking.com/theme/devis_track_pixel_test.php?id_hotel_xml=36&session='+ttt;
	xhr_object.open("GET", fichierrr2,false);  xhr_object.send(null);


	  //////////////////////
	   document.forms["formcoord"].action='https://tn.tunisiebooking.com/theme/coordonnee.php#coordonnees'; document.forms["formcoord"].submit();} else  alert("veuillez choisissez votre formule stpl !!");
	 }
	 	  function submit_form_agence()
   {
		 $(".ld_button_ag").css({"display":"block"});
		 $(".content-buttonag").css({"display":"none"});
      	 ga('send', 'event', 'pré-réservation', 'passage coordonné', 'je réserve');
      var choi=0;  var nbchambres=document.formcoord.nbchambres.value;
	  for(var z=1;z<=nbchambres;z++)  { var name="choix_formule"+z; var elements = document.getElementsByName(name); for (var i=0, len=elements.length; i<len; ++i) { if (elements[i].checked) choi++;} }
	  if(choi==nbchambres
	  ){
	  	     /////////////////
 if(window.XMLHttpRequest)   xhr_object = new XMLHttpRequest();
	 else if(window.ActiveXObject)
	 { // Internet Explorer
	   try { xhr_object = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {xhr_object= new ActiveXObject("Microsoft.XMLHTTP"); }
	}
	else { // XMLHttpRequest non supporté par le navigateur
	   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
	   xhr_object = false;
	  }


	    var ttt = document.getElementById('testsession').value ;

	fichierrr='https://tn.tunisiebooking.com/theme/devis_track_pixel_test.php?id_hotel_xml=36&session='+ttt;
	xhr_object.open("GET", fichierrr,false);  xhr_object.send(null);



	  //////////////////////
	  		 document.forms["formcoord"].action='https://tn.tunisiebooking.com/theme/coordonnee_agence.php#coordonnees';
			   document.forms["formcoord"].submit();
	   }
	   else  alert("veuillez choisissez votre formule stpl !!");
	 }

	   function submit_form_devis()
   {
      ga('send', 'event', 'formulaire', 'devis', 'obtenir un devis');
      var choi=0;  var nbchambres=document.formcoord.nbchambres.value;
	  for(var z=1;z<=nbchambres;z++)  { var name="choix_formule"+z; var elements = document.getElementsByName(name); for (var i=0, len=elements.length; i<len; ++i) { if (elements[i].checked) choi++;} }
	  if(choi==nbchambres){ document.forms["formcoord"].action='https://tn.tunisiebooking.com/theme/coordonnee_devis.php'; document.forms["formcoord"].submit();} else  alert("veuillez choisissez votre formule stpl !!");
	 }
   function changer_recherche (d)
   {
		 $('#arrivee').trigger('click');
   }
  function affiche_moteur(){
		document.getElementById('moteur_rech').style.display='';
		document.getElementById('moteur_rech_load').style.display='none';
	}
	function urlencode(s) {
	  s = encodeURIComponent(s);
	  return s.replace(/~/g,'%7E').replace(/%20/g,'+');
	}
	function changer_hotel(ville,session){
	ga('send','event','Recherche','Recherche destination','autres hotels');
	let form = document.forms['hotel'];
	let formData = new FormData(form);
	let searchy = new URLSearchParams(formData);
	let queryString = searchy.toString();
	var data="";
	document.location.href='https://tn.tunisiebooking.com/theme/rsltv2_new_v2.php?item='+queryString;
	}

 function rech_autre_hot_dispo(ville)
 {    document.getElementById('chdate').style.display='';
 	if(window.XMLHttpRequest)
	   xhr_object = new XMLHttpRequest();  else if(window.ActiveXObject){  try { xhr_object = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) { xhr_object= new ActiveXObject("Microsoft.XMLHTTP");} }
	   else {  alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); xhr_object = false;  }
	     fichier2='https://tn.tunisiebooking.com/theme/traitement_hoteldispo_sesion.php?id_hotel_xml=36&ville=Hammamet';
    	xhr_object.open("GET", fichier2,false); xhr_object.send(null);
	    if(xhr_object.readyState == 4){	  retour1= xhr_object.responseText;

					 document.getElementById("resultat").innerHTML="retour1";
			 /*document.getElementById('moteur_rech').style.display='none';*/
					 document.getElementById('moteur_rech_load').style.display='none';
					    }
}

function submit_auto_modif(){
	localStorage.clear();
	if (!$('.recape_moteur').is(':hidden')) {
		var nbcham=document.hotel.chambres.value;
	}

	//var nbcham=document.hotel.chambres.value;
	for(var z=1;z<=nbcham;z++){
		for(var k=1;k<=document.getElementById("enfants"+z).value;k++){
			if(document.getElementById("age"+z+"_"+k).value==''){
				alert(" Veuillez choisir l'age de votre enfant !!");
				document.getElementById("repch").style.display="block";
				document.getElementById("age"+z+"_"+k).focus();
				return false;
			}
		}
	}
	var params='';
	var params_ch='';
	var nbcham=document.hotel.chambres.value;
	var source_comm=document.hotel.source_comm.value;
	params+="DOPBookingSystem_CheckIn1="+document.hotel.depart.value+"&";
	params+="nbr_nuit="+document.hotel.nbr_nuit.value+"&";
	params+="chambres="+document.hotel.chambres.value+"&";
	params+="source_comm="+document.hotel.source_comm.value+"&";
	if(document.hotel.depart.value==''){
		alert(" Veuillez choisir votre date de Arrivée !!");
		document.hotel.depart.focus();
		return false;
	}
	var nbcham=document.hotel.chambres.value;
	if(nbcham==0){
		alert(" Veuillez choisir nombre de chambres");
		document.hotel.chambres.focus();
		verif=1;
		return false;
	}

	var nb_passage=0;
	for(var z=1;z<=nbcham;z++){
		nb_passage=(document.getElementById("ens"+z).innerHTML)*1+(document.getElementById("adult"+z).innerHTML)*1;
		if(nb_passage==0){
			alert("Repartition des chambre non valide");
			document.hotel.chambres.focus(); return false;
			document.getElementById("repch").style.display="block";
		}
		params_ch+="adultes"+z+"="+document.getElementById("adultes"+z).value+"&";
		params_ch+="enfants"+z+"="+document.getElementById("enfants"+z).value+"&";
		for(var k=1;k<=document.getElementById("enfants"+z).value;k++){
			params_ch+="age"+z+"_"+k+"="+document.getElementById("age"+z+"_"+k).value+"&";
		}
	}
	if(document.hotel.nbr_nuit.value>20){
		alert("pour tout séjour > à 20 nuits, merci de contacter notre service clients !!");
		document.hotel.nbr_nuit.focus();return false;
	}
	else{
		if ($('.bt_rechercher').is(':visible')) {
			document.getElementById("prix_total").innerHTML="0";
			$("#loading_btn_224").css({"display":"block"});
			$("#span_btn_224_re").css({"display":"none"});
			$("#icon_loop").css({"display":"none"});
			$(".skeleton").css({"display":"block"});
			$(".skeleton_prix").css({"display":"block"});
			$(".skeleton_button_je_paye").css({"display":"block"});
			$(".skeleton_button_je_passe").css({"display":"block"});
			$(".box_enveloppe_prix").hide();
			$(".bloc_anglet_formule").hide();
			$(".v194_25").hide();
			$(".v194_26").hide();
		}
		else {
			$("#loading_btn_224_t").css({"display":"block"});
			$("#span_btn_224_t").css({"display":"none"});
		}
		setTimeout(function() {
				//document.getElementById('ruslt').style.display='none';
				$(".bt_modifier").addClass("bt_modifier_active");
			$("#loading_btn_224").css({"display":"none"});
			$("#icon_loop").css({"display":"inline-block"});
			$("#span_btn_224_re").css({"display":"inline-block"});
			$(".skeleton").css({"display":"none"});
			$(".bloc_anglet_formule").show();
			$(".skeleton_prix").css({"display":"none"});
			$(".skeleton_button_je_paye").css({"display":"none"});
			$(".skeleton_button_je_passe").css({"display":"none"});
			$(".box_enveloppe_prix").show();
			$(".v194_25").show();
			$(".v194_26").show();
			if(($(window).width()>=1241)&&($(window).width()<1880)){
				$(".bloc_repartition_chambre").css({"border-left":"2px solid #262626","border-right":"1px solid #262626","border-top":"0.5px solid #262626","border-bottom":"0.5px solid #262626","z-index":"1"});
			}
			else{
			$(".bloc_repartition_chambre").css({"border-left":"2px solid #262626","border-right":"0px solid #262626","border-top":"1.5px solid #262626","border-bottom":"1.5px solid #262626","z-index":"1"});
			}
			$(".bt_rechercher").removeClass("bt_rechercher_active");
			var style_btrech =$('.v194_27_btn_moteur').attr('style'); //it will return string
			style_btrech += ';display:none;';
			$('.v194_27_btn_moteur').attr('style',style_btrech);
			document.getElementById('verifde').style.display='none';
			document.getElementById('tarifde').style.display='';
			if(localStorage.getItem("formule_slect")){
				var formule=localStorage.getItem("formule_slect");
			}
			else{
				var formule=document.hotel.formule_slect.value;
			}
			if(localStorage.getItem("type_chambre")){
				var type_ch=localStorage.getItem("type_chambre");
			}
			else{
				var type_ch=document.hotel.type_chambre.value;
			}

			var style_result=$('#resultat').attr('style'); //it will return string
			style_result+= ';margin-top: 0%';
			$('#resultat').attr('style',style_result);
			for(var z=1;z<=nbcham;z++){
				params_ch+="adultes"+z+"="+document.getElementById("adultes"+z).value+"&";
				params_ch+="enfants"+z+"="+document.getElementById("enfants"+z).value+"&";
				for(var k=1;k<=document.getElementById("enfants"+z).value;k++){
					params_ch+="age"+z+"_"+k+"="+document.getElementById("age"+z+"_"+k).value+"&";
				}
			}
			params+=params_ch;
			var testmodif = document.getElementById('test_clic').value ;
			var action=action;
			var action=action; var myData = 'id_hotel_xml=36&formule='+formule+'&type_chambre='+type_ch+'&testmodif='+testmodif+'&ville=Hammamet&'+params;
			jQuery.ajax({ type: "GET", url: "https://tn.tunisiebooking.com/theme/traitement_detailv_contre_proposition_new_v2.php",dataType:"html",data:myData,async : true,cache: false, success:function(response){
			retour1= response;
			var style_result=$('#ruslt').attr('style'); //it will return string
			style_result+= ';margin-bottom: 1%';
			$('#ruslt').attr('style',style_result);
			var msi=retour1.split('~~~~~~~');
			var ms=msi[0].split('###');
			var msesion=ms[2];
			document.getElementById('testsession').value=msesion;
			if(ms[0]=='failure'){

				document.getElementById('prix_par_nuits').className ="prix_par_nuit";
				if(ms[1]!=""){
					var style_rep =$('.repations_chambres').attr('style'); //it will return string
					style_rep += 'margin-top:-60% ';
					$('.repations_chambres').attr('style',style_rep);
					document.getElementById('vdautrehotel').className ="voir_autre_h";
					var np = ms[1].indexOf("Le nombre minimum de nuits");
					document.getElementById("resultat").innerHTML="";
					if((ms[1]=="Type de Chambre n est pas disponible") || (ms[1]=="pas de produit disponible") || (ms[1]=="pas de stock disponible")|| (ms[1]=="Pas de stock disponible pour le moment")|| (ms[1]=="Pas de chambre(s) disponible(s) pour le moment, veuillez contacter notre service client")|| (np*1>=0)|| (ms[1]=="Le type ou le nombre de chambre(s) demandé(s) est indisponible, vous pouvez voir d'autres hôtels ou contacter notre service Clients." )){
						changer_hotel('Hammamet');
					}
				}
				else{
					if(retour1.trim()=='@'){}
				}

				let form = document.forms['hotel'];
				let formData = new FormData(form);
				let searchy = new URLSearchParams(formData);
				let queryString = searchy.toString();
				var data="";
			 document.location.href='https://tn.tunisiebooking.com/theme/rsltv2_new_v2.php?item='+queryString;
			}
			else{


						document.getElementById('ruslt').style.display='block';

						var style_bt =$('.v194_23').attr('style'); //it will return string
						style_bt+= ';z-index:0;';
						$('.v194_23').attr('style',style_bt);
				$(".bt_modifier").addClass("bt_modifier_active");
				$('.recap_moteur_detail').show();
				var style_result=$('#ruslt').attr('style'); //it will return string
				style_result+= ';margin-bottom: 1%';
				$('#ruslt').attr('style',style_result);
				var style_btmodif =$('.bt_modifier').attr('style'); //it will return string
				style_btmodif += ';margin-top:-3% !important;';
				$('.bt_modifier').attr('style',style_btmodif);
				$(".bt_modifier").addClass("bt_modifier_active");
				document.getElementById('prix_par_nuits').className ="cache_prix_par_nuit";
				document.getElementById('ereur').className ="plan_moteur cadremsgerreur_cache";
				document.getElementById('vdautrehotel').className ="voir_autre_h_cache";
				document.getElementById('recap_rech').style.display='';
				document.getElementById("resultat").innerHTML=ms[1];
				document.getElementById("recap_rech").innerHTML= msi[1];
				document.getElementById('moteur_rech_load').style.display='none';

			/*	var element = document.querySelector('#ruslt');
				var offset = element.offsetTop - 20;

	window.scrollTo({
			top: offset,
			behavior: 'smooth'
	});*/
				// Scroll to the element if it exists

			}
			if(document.getElementById('pass_slect')){
				if(document.getElementById('pass_slect').value!=0){
					var nb_pass=document.getElementById('pass_slect').value;
					var nb_ad= document.getElementById("adult_opt_1").value;
					slect_passe(1,nb_pass,nb_ad);
				}
			}
			}
			})
		ga('send','event','Recherche','Moteur hotel','vérifier la disponibilité');
		$('.recape_moteur').hide();

		}, 2000);
	}
}

</script>

<script type="text/javascript">
function slect_passe(id,nbt,nb_ad){
	var id=id;var nbt=nbt;
	var name_adult="adult_opt_";
	var price=0;
	document.getElementById("box_mentant_total").innerHTML="+"+price;
	var nb_ad= document.getElementById("adult_opt_"+id).value;
	for (i=1;i<=nbt; i++){
		var name_adult="adult_opt_"+i;
		if(i==id){
			document.getElementById("pass"+id).style.border = "3px solid #85b919";  document.getElementById("img_pass"+id).src ='https://tn.tunisiebooking.com/theme/images/b_radio_active.jpg';  document.getElementById("minprixp_dest_"+id).className  ="minprixp_dest_slect"; var price=$("#price_"+id).html()*nb_ad; document.getElementById("price_t_"+id).innerHTML="+"+price; document.getElementById("box_mentant_total").innerHTML="+"+price;
			document.getElementById("pass_slect").value=id;
		}
		else{
			document.getElementById("pass"+i).style.border = "0px solid #85b919";  document.getElementById("img_pass"+i).src ='https://tn.tunisiebooking.com/theme/images/b_radio_desactive.jpg';document.getElementById("minprixp_dest_"+i).className  ="minprixp_dest"; document.getElementById("price_t_"+i).innerHTML="+"+"0";
		}
	}
}
$(document).ready(function(){
	function gcookie(name){
		if(document.cookie.length>0){
			start=document.cookie.indexOf(name+"=");
			pos = start+name.length+1;
			if(start!=0){
				start=document.cookie.indexOf("; "+name+"=");
				pos = start+name.length+3;
			}
			if(start!=-1){
				start=pos;
				end=document.cookie.indexOf(";",start);
				if(end==-1){
					end=document.cookie.length;
				}
				return unescape(document.cookie.substring(start,end));
			}
		}
		return '';
	}
	function scookie(name,value,days){
		var cookValue = "" ; cookValue=gcookie(name);var egal=new Array(); egal=cookValue.split("@") ;
		if(egal.indexOf(value)=='-1'){
			var expire=new Date();
			expire.setDate(expire.getDate()+days);
			document.cookie=name+'='+escape(value+"@"+cookValue)+';expires='+expire.toGMTString()+";domain =tn.tunisiebooking.com;path =/";  return true;
		}
		else{
			var expire=new Date();
			expire.setDate(expire.getDate()+days);
			document.cookie=name+'='+escape(cookValue)+';expires='+expire.toGMTString()+";domain =tn.tunisiebooking.com;path =/";  return true;
		}
	}
	function auto_rech_session(){
		if(localStorage.getItem("formule_slect")){
			var formule=localStorage.getItem("formule_slect");
		}
		else{
			var formule=document.hotel.formule_slect.value;
		}

		if(localStorage.getItem("type_chambre")){
			var type_ch=localStorage.getItem("type_chambre");
		}
		else{
			var type_ch=document.hotel.type_chambre.value;
		}

		document.getElementById('moteur_rech_load').style.display='';
		var cookValue = "" ; cookValue=recup_cookie('historique_tn');
		var myData='session=&id_hotel_xml=36&formule='+formule+'&type_chambre='+type_ch+'&nb_nuit=&chambres=&ville=Hammamet';
		jQuery.ajax({ type: "GET", url: "https://tn.tunisiebooking.com/theme/recherche_avec_sesion_contre_proposition_new_v2.php",dataType:"html",data:myData, async : true,cache: false, success:function(response){
			retour1= response;
			var msi=retour1.split('~~~~~~~');
			var ms=msi[0].split('###');
			if(ms[0]!='failure') {
				var style_bt =$('.v194_23').attr('style'); //it will return string
				style_bt+= ';z-index:0;';
				$('.v194_23').attr('style',style_bt);

				var style_result=$('#ruslt').attr('style'); //it will return string
				style_result+= ';margin-bottom:1%';
				$('#ruslt').attr('style',style_result);
				$('.recape_moteur').hide();
				$(".bt_modifier").addClass("bt_modifier_active");
				$('.recap_moteur_detail').show();
				document.getElementById("resultat").innerHTML=ms[1];
				document.getElementById('prix_par_nuits').className ="cache_prix_par_nuit";
				document.getElementById('ereur').className ="plan_moteur cadremsgerreur_cache";
				document.getElementById('vdautrehotel').className ="voir_autre_h_cache";
				document.getElementById('recap_rech').style.display='';
				document.getElementById('goToBook').style.display='none';
				document.getElementById('moteur_rech_load').style.display='none';
				if(document.getElementById('pass_slect')){
					if(document.getElementById('pass_slect').value!=0){
						var nb_pass=document.getElementById('pass_slect').value;
						var nb_ad= document.getElementById("adult_opt_1").value;
						slect_passe(1,nb_pass,nb_ad);
					}
				}
				/*var element = document.querySelector('#ruslt');
				var offset = element.offsetTop - 20;

	window.scrollTo({
			top: offset,
			behavior: 'smooth'
	});*/
			}
			else if(ms[0]=='failure'){
				$('#col_arrivee').data('daterangepicker').hide();
				document.getElementById('prix_par_nuits').className ="prix_par_nuit"; /*document.getElementById("resultat").innerHTML=''*/;
				if(ms[1]!=""){
					document.getElementById('moteur_rech').style.display='';
					document.getElementById('goToBook').style.display='';
					document.getElementById('moteur_rech_load').style.display='none';
					document.getElementById("ereur").innerHTML='<span>'+ms[1]+" </span>";
					//document.getElementById('ereur').className ="plan_moteur cadremsgerreur";
					document.getElementById('vdautrehotel').className ="voir_autre_h";
					var np = ms[1].indexOf("Le nombre minimum de nuits");
					if((ms[1]=="Type de Chambre n est pas disponible") || (ms[1]=="pas de produit disponible") || (ms[1]=="pas de stock disponible")|| (ms[1]=="Pas de stock disponible pour le moment")|| (ms[1]=="Type de Chambre demande ou bien stock n est pas disponible")|| (np*1>=0)){
						rech_autre_hot_dispo('Hammamet')
					}
				}
				else{
					if(retour1.trim()=='@')
					alert('Pas de chambre(s) disponible(s) pour ces dates, veuillez modifier la recherche.');
				}
				let form = document.forms['hotel'];
				let formData = new FormData(form);
				let searchy = new URLSearchParams(formData);
				let queryString = searchy.toString();
				var data="";
				document.location.href='https://tn.tunisiebooking.com/theme/rsltv2_new_v2.php?item='+queryString;
			}
			var tarf2 = document.getElementById('id_tarif2');
			window.scrollTo(tarf2.offsetLeft,tarf2.offsetTop);
			}
		})
	}
	function hotels_consultes1(name){
		var cookValue = "" ;
		cookValue=gcookie(name);
		var pageact=0;	var str = cookValue.split("@",6);var mstr='';var myRegEx=new RegExp(",","gm");
		for(var d=0;d<=6;d++){
			mstr=mstr+str[d]+'@';
		}
		var myData='cokvalue='+mstr.replace(myRegEx ,"@");
		jQuery.ajax({ type: "GET", url: "https://tn.tunisiebooking.com/theme/hotels_consultesv2http.php",dataType:"html",data:myData, async : true,cache: false, success:function(response){ retour1= response; document.getElementById('hotel_consulte').innerHTML=retour1; } })
	}
	function remplir_formulaire(){
		var cookValue = "" ;
		var session='';
		cookValue=recup_cookie('historique_tn');
		if((cookValue)||(session!='')){
			remlire_moteur();
			affiche_moteur();
			document.getElementById('prix_par_nuits').className ="prix_par_nuit";
		}
		else{
			affiche_moteur();
			document.getElementById('prix_par_nuits').className ="prix_par_nuit";
		}
	}
	scookie('hotelsHammamet','36',30);
	var num_session="0";
	var numcom="";
	if(num_session>0 && numcom==0){
		auto_rech_session();
	}
	else{
		remplir_formulaire();
	}
});

</script>
<script>
function scrollt(element)
{
	var tarf = document.getElementById('id_tarif');
	window.scrollTo(tarf.offsetLeft,tarf.offsetTop);
}
function scrollToDiv(element) {
	$(".sous_body_detail").css({"display":"none"});
	var targetElement = $(element);
	if (targetElement.length) {
			// Calculate the middle of the element
			var middlePosition = targetElement.offset().top + targetElement.outerHeight() / 2;
			// Scroll to the middle position with animation
			//$('html, body').animate({ scrollTop: middlePosition }, 'slow');
			$('html, body').animate({ scrollTop: 250 }, 'slow');
	}
}
function scrollt2(element)
{
	//scrollToDiv('.header_detail');
	var element = document.querySelector('#ruslt');

	// Scroll to the element if it exists
	if (element) {
			element.scrollIntoView({
					behavior: 'smooth',
					block: 'start'
			});
		}
}
</script>
<!----click accordion list_questions---->
<script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel1 = this.nextElementSibling;
		var flech =  $(this).children().first();
		if (panel1.style.display === "block") {
			panel1.style.display = "none";
			var style_accordion =$(this).attr('style'); //it will return string
			style_accordion += ';background:#fff;border-bottom: 1px solid #E0E0E0;';
			$(this).attr('style',style_accordion);
			var style_flech =flech.attr('style'); //it will return string
			style_flech += ';transform: rotate(0deg);margin-top: 0%;';
			flech.attr('style',style_flech);
		} else {
			panel1.style.display = "block";
			var style_accordion =$(this).attr('style'); //it will return string
			style_accordion += ';background:#F6F7F9;border-bottom: 1px solid #E0E0E0;';
			$(this).attr('style',style_accordion);
			var style_flech =flech.attr('style'); //it will return string
			style_flech += ';transform: rotate(180deg);margin-top: -0.8%;';
			flech.attr('style',style_flech);
		}
	});
}
</script>
<!---- click on previous and next in  div Les hôtels similaires ---->
<script>
const nb=document.getElementById("list_dest").getElementsByClassName("bui-carousel__item_rec").length;
 if(nb>3){
	 $('.owl-prevv').css("display", "block");
	 $('.owl-nextt').css("display", "block");
 }
const prevv = document.querySelector('.owl-prevv');
const nxtt = document.querySelector('.owl-nextt');
const list_dest = document.querySelector('.bui-carousel__inner').children;
const dest = document.getElementById("list_dest");
/*** click on previous ***/
prevv.addEventListener('click', () => {
	var ch= document.getElementById("list_dest").firstElementChild;
	var n = document.getElementById("list_dest").lastElementChild;
	let div = document.getElementById("list_dest");
	let children = div.children;
	for (let i = 0; i < children.length; i++) {
		if(i>4){
			children[i].style.display = "none";
		}
		else{
			children[i].style.display = "block";
		}
		dest.insertBefore(n, dest.childNodes[0]);
	}
},{passive: true});
/*** click on next ***/
nxtt.addEventListener('click', () => {
	let div = document.getElementById("list_dest");
	let children = div.children;
	var ch= document.getElementById("list_dest").firstElementChild;
	var n = document.getElementById("list_dest").lastElementChild;
	var c= document.getElementById("list_dest").firstElementChild;
	for (let i = 0; i < list_dest.length; i++) {
		first_child=children[i];
		c=children[i+1];
		dest.insertBefore(ch,this.nextSibling);
		list_dest[i].style.display="block";
		for(let j=5;j<list_dest.length;j++){
			list_dest[j].style.display="none";
		}
	}
})
</script>
<script type="text/javascript">
	$('.autoplay').slick({
		slidesToShow: 3.5,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
	});
</script>
<!---- click retour to top page ---->
<script>
	const up = document.querySelector('.owl-up');
	up.addEventListener('click', () => {
		$('html, body').animate({ scrollTop: 0 }, 'slow');
	});
</script>
<script type="application/ld+json">
{
 "telephone" : "+216 71 124 124",
 "@context" : "http://schema.org",
 "description" : "Houda Yasmine Hammamet Hotel Hammamet sur Tunisiebooking! Nous offrons des avis fiables, photos récentes et meilleur prix garanti pour réservez votre Hotel !",
 "hasMap" : "",
 "address" : {
		"addressRegion" : "Hammamet",
		"addressCountry" : "Tunisie",
		"@type" : "PostalAddress",
		"postalCode" : "",
		"addressLocality" : "B P 97 Yasmine, Hammamet, 8050",
		"streetAddress" : "B P 97 Yasmine, Hammamet, 8050 "
 },
 "aggregateRating" : {
		"reviewCount" : "",
		"@type" : "AggregateRating",
		"ratingValue" : "4.0",
		"ratingCount" : "72",
		"bestRating" : "5"
 },


 "priceRange" : "Prix disponible dès 66 TND",
 "@type" : "Hotel",
 "name" : "Houda Yasmine Hammamet",
 "image" : "https://image.resabooking.com/images/image_panoramique/Houda_Yasmine_Hammamet_3.jpg",
 "url" : "https://tn.tunisiebooking.com/detail_hotel_36/"

}
</script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "Houda Yasmine Hammamet Hotel Hammamet",
      "image": [
        "https://image.resabooking.com/images/image_panoramique/Houda_Yasmine_Hammamet_3.jpg",
        "https://image.resabooking.com/images/image_panoramique/Houda_Yasmine_Hammamet_3.jpg",
        "https://image.resabooking.com/images/image_panoramique/Houda_Yasmine_Hammamet_3.jpg"
       ],
	   "@id": "https://tn.tunisiebooking.com/detail_hotel_36/",
      "description": "Houda Yasmine Hammamet Hotel Hammamet sur Tunisiebooking",
      "sku": "36",
      "mpn": "36",
      "brand": {
        "@type": "Brand",
        "name": "tunisiebooking"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "4.0",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "tunisiebooking"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.0",
        "reviewCount": "72"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://tn.tunisiebooking.com/detail_hotel_36/",
        "priceCurrency": "TND",
        "price": "66",
        "priceValidUntil": "2024-04-03",
        "itemCondition": "https://schema.org/NewCondition",

      "availability": "https://schema.org/InStock"
      }
    }
    </script>
<script type="text/javascript">
/**** display menu ****/
$(window).scroll(function() {
	if ($(this).scrollTop()) { // Adjust the value to control when the button appears
		if ($('#moteur_rech').is(':visible') || $('#moteur_rech_load').is(':visible')) {
	  	$('.sous_body_detail').hide();
		}
  }
  var scrollPos = $(window).scrollTop();
	if (scrollPos === 0) {
	$(".sous_body_coordonne").css({"display":"block"});
	$(".sous_body_detail").css({"display":"none","margin-top":"0%"});
	var elements = $(".style_menu1f");
	if (elements.length > 0) {
		elements.each(function() {
			$(elements).removeClass("style_menu1f").addClass("style_menu2f");
			$(elements).removeClass("descriptif_td_active");
		});
	}
	$("#photos_td").removeClass("style_menu2f").addClass("style_menu1f");
	$("#photos_td").addClass("descriptif_td_active");
	$("#descriptif_td,#equipement_td,#avis_td").removeClass("descriptif_td_active");
	}
});
var trackOutboundLink2 = function(url,outbound,click_labell,detaill_event) {
	ga('send', 'event', outbound, click_labell, detaill_event);
	document.location = url;
}
var parentElement = $("#ruslt_descriptif2");
var lastParagraph = parentElement.find("p:last");
//lastParagraph.addClass("blur");
lastParagraph.after("<div class='div_rightscroll'></div>");
var myElement = $('.slick-track');
myElement.attr({
	'aria-label': "destiation"
});
var myElement1 = $('.slick-slide');

function get_services(){
	var targetElement = $(".equipements");
	var targetOffset = targetElement.offset().top;
	$('html, body').animate({
		scrollTop: targetOffset
	}, 50);
}
/*** afficher plus des equipements***/
function affiche_all_services(){
	$('.row').each(function(index, element) {
		if(index==3){
			var newElement = $("<hr class='horizontal-line' style='display: block;'/>");
			$('.service'+index).after(newElement);
		}
		if($('.service'+index).is(':hidden')) {
			$(".service"+index).css({"display":""});
			$(".horizontal-line").css({"display":"block"});
			$('.plus_equip').css({"display":"none"});
			$('.moins_equip').css({"display":"block"});
		}
	});
}
/*** afficher moins des equipements***/
function affiche_moins_services(){
	$('.row').each(function(index, element) {
		if(index>3){
			$(".service"+index).css({"display":"none"});
			$(".horizontal-line").css({"display":"none"});
			$('.plus_equip').css({"display":"block"});
			$('.moins_equip').css({"display":"none"});
		}
		var liste_services = document.querySelector('.equipements');
		liste_services.scrollIntoView({ behavior: 'smooth' });
	});
}

/*** afficher plus d'information sur l'hotel***/
function aff_suite(){
	$("#ruslt_descriptif1").css({"display":"block"});
	$("#ruslt_descriptif2").css({"display":"none"});
	$(".plus_presentation").css({"display":"none"});
	$(".masquer_presentation").css({"display":"block"});
}
/*** afficher moins d'information sur l'hotel***/
function cache_suite(){
	$("#ruslt_descriptif1").css({"display":"none"});
	$("#ruslt_descriptif2").css({"display":"block"});
	$(".plus_presentation").css({"display":"block"});
	$(".masquer_presentation").css({"display":"none"});
	var presentations = document.querySelector('.presentation');
	presentations.scrollIntoView({ behavior: 'smooth' });
}
/****click on menu photos ****/
$(".col_photos").click(function(e) {
	$("#photos_td").addClass("descriptif_td_active");
	$("#descriptif_td").removeClass("descriptif_td_active");
	$("#equipement_td").removeClass("descriptif_td_active");
	$("#avis_td").removeClass("descriptif_td_active");
	var targetElement = $("#bodyresponsive");
	$("#equipement_td,#descriptif_td,#avis_td").removeClass("descriptif_td_active");
	var targetOffset = targetElement.offset().top;
	$('html, body').animate({ scrollTop: 0 });
	$(".sous_body_coordonne").css({"display":"block"});
	$(".sous_body_detail").css({"display":"none","margin-top":"0%"});
	var elements = $(".style_menu1f");
	if (elements.length > 0) {
		elements.each(function() {
		$(elements).removeClass("style_menu1f").addClass("style_menu2f");
		$(elements).removeClass("descriptif_td_active");
		});
	}
	$("#photos_td").removeClass("style_menu2f").addClass("style_menu1f");
	$("#photos_td").addClass("descriptif_td_active");
	$("#descriptif_td,#equipement_td,#avis_td").removeClass("descriptif_td_active");
});
/**** click on botton verifier la disponibilite****/
$(".v_tarif_dsp_moteur").click(function(e) {
	var targetElement = $(".capitulatif ");
	var targetOffset = targetElement.offset().top;
	$('html, body').animate({
		scrollTop: targetOffset
	}, 50);
	$(".sous_body_coordonne").css({"display":"block"});
	$(".sous_body_detail").css({"display":"none","margin-top":"0%"});
});

/**** check if element is visible****/
function isVisible($el) {
	let docViewTop = $(window).scrollTop();
	let docViewBottom = docViewTop + $(window).height();
	let elTop = $el.offset().top;
	let elBottom = elTop + $el.height();
	return(((elBottom <= docViewBottom) && (elTop >= docViewTop))||((elTop < docViewTop) && (elBottom >= 0)));
}
/**** check if element is not visible****/
function isElementNotVisible(element) {
	var $element = $(element);
	var windowHeight = $(window).height();
	var scrollTop = $(window).scrollTop();
	var elementTop = $element.offset().top;
	var elementBottom = elementTop + $element.outerHeight();
	// Check if the element is outside the viewport
	if (elementBottom < scrollTop || elementTop > scrollTop + windowHeight) {
		return true;
	}
	return false;
}

$(window).on('scroll', function(event) {

if(isElementNotVisible('#resultat') && isElementNotVisible('#ruslt')){
		$(".sous_body_detail").css({"display":"block","position": "fixed","top": "0","z-index":"1001"});
		$(".v153_33_presentation").addClass("v153_33_presentation_active");
		$(".col_presentation_txt").addClass("col_presentation_txt_active");
		$(".v153_33_equipements").removeClass("v153_33_equipements_active");
		$(".col_equipements_txt").removeClass("col_equipements_txt_active");
		$(".v153_33_liste_avis").removeClass("v153_33_liste_avis_active");
		$(".col_liste_avis_txt").removeClass("col_liste_avis_txt_active");
	}
	if((isElementNotVisible('.content_pres'))||(isVisible($('.content_equip')))){
		$(".v153_33_equipements").addClass("v153_33_equipements_active");
		$(".col_equipements_txt").addClass("col_equipements_txt_active");
		$(".v153_33_presentation").removeClass("v153_33_presentation_active");
		$(".col_presentation_txt").removeClass("col_presentation_txt_active");
		$(".v153_33_liste_avis").removeClass("v153_33_liste_avis_active");
		$(".col_liste_avis_txt").removeClass("col_liste_avis_txt_active");
	}
	if((isElementNotVisible('.content_equip'))||isVisible($('#avantages'))){
		$(".v153_33_equipements").removeClass("v153_33_equipements_active");
		$(".col_equipements_txt").removeClass("col_equipements_txt_active");
		$(".v153_33_liste_avis").removeClass("v153_33_liste_avis_active");
		$(".col_liste_avis_txt").removeClass("col_liste_avis_txt_active");
	}
	if((isElementNotVisible('.scroll_avis'))&&(isElementNotVisible('#div_presentation'))&&(isElementNotVisible('.content_equip'))){
		$(".v153_33_equipements").removeClass("v153_33_equipements_active");
		$(".col_equipements_txt").removeClass("col_equipements_txt_active");
		$(".v153_33_liste_avis").addClass("v153_33_liste_avis_active");
		$(".col_liste_avis_txt").addClass("col_liste_avis_txt_active");
	}
	if(isVisible($('.list_questions'))){
		$(".v153_33_liste_avis").removeClass("v153_33_liste_avis_active");
		$(".col_liste_avis_txt").removeClass("col_liste_avis_txt_active");
	}
	var element_photo = $('.header_detail ').offset().top;
	var y_scroll_pos = window.pageYOffset;
	var scroll_pos_photo = element_photo;
	if(y_scroll_pos < scroll_pos_photo) {
		$(".sous_body_coordonne").css({"display":"block"});
		$(".sous_body_detail").css({"display":"none"});
		$("#owl-up").addClass("owl-up");
		$("#owl-up").removeClass("owl-up_active");
	}
});
	$(window).on('scroll', function() {
	  if($(window).scrollTop() >= $('.page').offset().top + $('.page').outerHeight() - window.innerHeight) {
			var style_owl_up =$('.owl-up').attr('style');
			style_owl_up+= ';top:30%;';
			$('.owl-up').attr('style',style_owl_up);
	  }
  });
	var element_footer = $('.conteneur_footer2').offset().top;
	$(window).on('scroll', function() {
		var y_scroll_pos = window.pageYOffset;
		var scroll_pos_test = element_footer;
		if(y_scroll_pos > scroll_pos_test) {
			var style_owl_up =$('.owl-up').attr('style');
			style_owl_up+= ';top:65% !important;';
			$('.owl-up').attr('style',style_owl_up);
		}
		else{
			if(isVisible($('.presentation'))){
				$("#owl-up").removeClass("owl-up");
				$("#owl-up").addClass("owl-up_active");
			}
		}
	});
</script>
<script>
/**** mouse event sur icone info ****/
$('.info').bind("mouseenter", function() {
	$('.info').css("background-image", "url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-infor.svg)");
	$('.horaire').css("display","block");
});
$('.info').bind("mouseleave", function() {
	$('.info').css("background-image", "url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-inform.svg)");
	$('.horaire').css("display","none");
});
/**** repartition chambres****/
var ch_target_ch=document.getElementById("lastch").value;
var int_target_ch=parseInt(ch_target_ch);
function getScreenWidth() {
var screenWidth = $(window).width();
var screenHeight = $(window).height();
for (var i = 1; i <= 5; i++) {
	var divValue = $("#adult"+i).text();
	// Set the value of the hidden input field
	$("#adultes"+i).val(divValue);
	var divValue1 =  $.trim($("#ens"+i).text());
	// Set the value of the hidden input field
	$("#enfants"+i).val(divValue1);
}
if(int_target_ch==1)
{

var age = $('[id*="age1"]')
var displayage = age.css('display');
if (displayage !== 'none') {
	$('#label_ages1').addClass("label_ages_active");
	var style_ajouter_ch =$('#ac1').attr('style'); //it will return string
	style_ajouter_ch += ';margin-top:0%;margin-right:0%';
	$('#ac1').attr('style',style_ajouter_ch);
	var style_btn_terminer =$('#v194_281').attr('style'); //it will return string
	style_btn_terminer += ';margin-top: 50.5%;';
	$('#v194_281').attr('style',style_btn_terminer);
}
else{

	var style_btn_terminer =$('#v194_281').attr('style'); //it will return string
	style_btn_terminer += ';margin-top: 30.5%;';
	$('#v194_281').attr('style',style_btn_terminer);
}
$(".fermer_ch1").addClass("fermer_ch1_active");
	 if((screen.width>=1241)&&(screen.width<=1880)){
	 $("#tous_les_chambres").removeClass("tous_les_chambres_active");
	 var myElement1 = $('#label_ages1');
	 var displayValue1 = myElement1.css('display');
	 var myElementerror1 = $('#validation-error1');
	 var displayValueError1 = myElementerror1.css('display');
	 var style_rep1=$('#ch1').attr('style');
	 if ((displayValue1 !== 'none')&&(displayValueError1 !== 'none')) {
		style_rep1 += ';border-right:none;';
	 }
	 else if ((displayValue1 !== 'none')||(displayValueError1 !== 'none')) {
		style_rep1 += ';height:365px !important;border-right:none;';
	 }
	 else {
	 style_rep1 += ';height:300px !important;border-right:none;';
	 }
	 $('#ch1').attr('style',style_rep1);

		$("#v194_281").addClass("v194_28_active");
	  $("#ac1").addClass("ajout_ch_activ");

		var style_tous_ch =$('#tous_les_chambres').attr('style'); //it will return string
		style_tous_ch += ';margin-top:46% !important';
		$('#tous_les_chambres').attr('style',style_tous_ch);
	}
	else if((screen.width>=1241)&&(screen.width<=1880)){
		var style_ch =$('#tous_les_chambres').attr('style'); //it will return string
				 style_ch += ';margin-left:-15%;';
				 $('#tous_les_chambres').attr('style',style_ch);
				 $("#tous_les_chambres").removeClass("tous_les_chambres_active");
	}
	else{
		if(screen.width>=1881){
			$("#tous_les_chambres").removeClass("tous_les_chambres_active");
			if(screen.width>2000){
				var style_ch =$('#tous_les_chambres').attr('style'); //it will return string
				style_ch += ';margin-left:-21% !important';
				$('#tous_les_chambres').attr('style',style_ch);
				$("#tous_les_chambres").removeClass("tous_les_chambres_active");
			}
			else{
				$("#tous_les_chambres").removeClass("tous_les_chambres_active");
			}
	var myElement1 = $('#label_ages1');
	var displayValue1 = myElement1.css('display');
	var style_rep1 =$('#ch1').attr('style');
	if (displayValue1 !== 'none') {
		 style_rep1 += ';height:365px !important;border-right:none;';
	} else {
	 style_rep1 += ';height:300px !important;border-right:none;';
	}
	$('#ch1').attr('style',style_rep1);
		$("#v194_281").addClass("v194_28_active");
		$("#ac1").addClass("ajout_ch_activ");
		}
	}

}
if(int_target_ch==2){
	for(j=1;j<=int_target_ch;j++){
		$('[id*="age'+j+'"]').each(function(index, element) {
	    var displayage = $('[id*="age'+j+'"]').css('display');
			if (displayage !== 'none') {
				$('#label_ages'+j).addClass("label_ages_active");
		 		var style_ajouter_ch =$('#ac1').attr('style'); //it will return string
		 		style_ajouter_ch += ';display:none;margin-top:0%;margin-right:0%';
		 		$('#ac1').attr('style',style_ajouter_ch);
		 		var style_btn_terminer =$('#v194_281').attr('style'); //it will return string
		 		style_btn_terminer += ';display:none;margin-top: 50.5%;';
		 		$('#v194_281').attr('style',style_btn_terminer);
				var age = $('[id*="age2"]')
				var displayage = age.css('display');
				if (displayage !== 'none') {
					var style_ajouter_ch2 =$('#ac2').attr('style'); //it will return string
					style_ajouter_ch2 += ';margin-top:0%;margin-right:0%';
					$('#ac2').attr('style',style_ajouter_ch2);
					var style_btn_terminer =$('#v194_282').attr('style'); //it will return string
					style_btn_terminer += ';margin-top: 50.5%;';
					$('#v194_282').attr('style',style_btn_terminer);
				}
				else{
					var style_btn_terminer =$('#v194_282').attr('style'); //it will return string
					style_btn_terminer += ';margin-top: 30.5%;';
					$('#v194_282').attr('style',style_btn_terminer);
				}
		 	}
	});
	}
 if((screenWidth>=1241)&&(screenWidth<=1880)){

var myElement1 = $('#label_ages1');
var displayValue1 = myElement1.css('display');
var style_rep1 =$('#ch1').attr('style');
if (displayValue1 !== 'none') {
	style_rep1 += ';height:260px !important;border-right:none;';
}
else {
	style_rep1 += ';height:200px !important;border-right:none;';
}
$('#ch1').attr('style',style_rep1);
var myElement1 = $('#label_ages1');
var displayValue1 = myElement1.css('display');
var myElementerror1 = $('#validation-error1');
var displayValueError1 = myElementerror1.css('display');
var style_rep1 =$('#ch1').attr('style');
if ((displayValueError1 !== 'none')&&(displayValue1 === 'none')){
	style_rep1 += ';height:250px !important;border-right:none;';
}
$('#ch1').attr('style',style_rep1);
var myElement2 = $('#label_ages2');
var displayValue2 = myElement2.css('display');
var myElementerror2 = $('#validation-error2');
var displayValueError2 = myElementerror2.css('display');
var style_rep2=$('#ch2').attr('style');
if ((displayValue2 !== 'none')&&(displayValueError2 !== 'none')) {
	style_rep2 += ';border-right:none;';
}
else if ((displayValue2 !== 'none')||(displayValueError2 !== 'none')) {
	style_rep2 += ';height:365px !important;border-right:none;';
}
else {
	style_rep2 += ';height:300px !important;border-right:none;';
}
$('#ch2').attr('style',style_rep2);
$("#v194_281").removeClass("v194_28_active");
$("#v194_282").addClass("v194_28_active");
$("#ac1").removeClass("ajout_ch_activ");
$("#ac2").addClass("ajout_ch_activ");
}
	else if((screenWidth>=1881)&&(screenWidth<2000)){
	$('#ch1').attr('style',style_rep1);
	var myElement2 = $('#label_ages2');
	var myElement1 = $('#label_ages1');
	var displayValue1 = myElement1.css('display');
	var myElementerror1 = $('#validation-error1');
	var displayValueError1 = myElementerror1.css('display');
	var style_rep1 =$('#ch1').attr('style');
	if ((displayValueError1 !== 'none')&&(displayValue1 === 'none')){
	style_rep1 += ';height:250px !important;border-right:none;';
	}
	if((displayValueError1 !== 'block')&&(displayValue1 === 'none')){
	style_rep1 += ';height:200px !important;border-right:none;';
	}
	if((displayValueError1 !== 'block')&&(displayValue1 === 'block')){
	style_rep1 += ';height:260px !important;border-right:none;';
	}
	$('#ch1').attr('style',style_rep1);
	var displayValue2 = myElement2.css('display');
	var style_rep2 =$('#ch2').attr('style');
	var myElementerror2 = $('#validation-error2');
	var displayValueError2 = myElementerror2.css('display');
	if (displayValue2 !== 'none') {
		style_rep2 += ';height:365px !important;border-right:none;';
	}
	if((displayValueError2 !== 'block')&&(displayValue2 === 'block')){
		style_rep2 += ';height:365px !important;border-right:none;';
	}
	else if((displayValueError2 !== 'block')&&(displayValue2 !== 'block')){
		style_rep2 += ';height:300px !important;border-right:none;';
	}
	else{
		style_rep2 += ';border-right:none;';
	}
	$('#ch2').attr('style',style_rep2);
	$("#v194_281").removeClass("v194_28_active");
	$("#v194_282").addClass("v194_28_active");
	$("#ac1").removeClass("ajout_ch_activ");
}
else if(screenWidth>2000){
	$('#ch1').attr('style',style_rep1);
	var myElement2 = $('#label_ages2');
	var myElement1 = $('#label_ages1');
	var displayValue1 = myElement1.css('display');
	var myElementerror1 = $('#validation-error1');
	var displayValueError1 = myElementerror1.css('display');
	var style_rep1 =$('#ch1').attr('style');
	if ((displayValueError1 !== 'none')&&(displayValue1 === 'none')){
		style_rep1 += ';height:250px !important;border-right:none;';
	}
	$('#ch1').attr('style',style_rep1);
	var displayValue2 = myElement2.css('display');
	var style_rep2 =$('#ch2').attr('style');
	if (displayValue2 !== 'none') {
		style_rep2 += ';height:365px !important;border-right:none;';
	} else {
		style_rep2 += ';height:300px !important;border-right:none;';
	}
	$('#rech2').attr('style',style_rep2);
	$("#v194_281").removeClass("v194_28_active");
	$("#v194_282").addClass("v194_28_active");
	var style_ac2 =$('#ac2').attr('style'); //it will return string
	style_ac2 += ';margin-top:-21%;';
	$('#ac2').attr('style',style_ac2);
	$("#ac1").removeClass("ajout_ch_activ");
	$("#ac2").addClass("ajout_ch_activ");
}
}
if((int_target_ch==3)||(int_target_ch==4)){
	for(j=1;j<=int_target_ch;j++){
		$('[id*="age'+j+'"]').each(function(index, element) {
			var displayage = $('[id*="age'+j+'"]').css('display');
			if (displayage !== 'none') {
				$('#label_ages'+j).addClass("label_ages_active");
				var style_ajouter_ch =$('#ac1').attr('style'); //it will return string
				style_ajouter_ch += ';margin-top:0%;margin-right:0%';
				$('#ac1').attr('style',style_ajouter_ch);
				$("#ac1").removeClass("ajout_ch_activ");
				var style_btn_terminer =$('#v194_281').attr('style'); //it will return string
				style_btn_terminer += ';display:none;margin-top: 50.5%;';
				$('#v194_281').attr('style',style_btn_terminer);
				var style_ajouter_ch2 =$('#ac2').attr('style'); //it will return string
				style_ajouter_ch2 += ';margin-top:0%;margin-right:0%';
				$('#ac2').attr('style',style_ajouter_ch2);
				var style_btn_terminer =$('#v194_282').attr('style'); //it will return string
				style_btn_terminer += ';margin-top: 50.5%;';
				$('#v194_282').attr('style',style_btn_terminer);

			}
	});
	}
var style_chambre =$('#ch1,#ch2').attr('style');
var style_chambree =$('#ch3').attr('style');
if((screen.width>=1241)&&(screen.width<=1880)){
	var style_ajouter_ch =$('#ac1').attr('style'); //it will return string
	style_ajouter_ch += ';margin-top:0%;margin-right:0%';
	$('#ac1').attr('style',style_ajouter_ch);
	$("#ac1").removeClass("ajout_ch_activ");
	var style_btn_terminer =$('#v194_281').attr('style'); //it will return string
	style_btn_terminer += ';display:none;margin-top: 50.5%;';
	$('#v194_281').attr('style',style_btn_terminer);
	$("#tous_les_chambres").addClass("tous_les_chambres_active");
	$('#tous_les_chambres').animate({scrollTop:500}, 'slow');
if(int_target_ch==3){
var myElement1 = $('#label_ages1');
var displayValue1 = myElement1.css('display');
var style_rep1 =$('#ch1').attr('style');
if (displayValue1 !== 'none') {
	style_rep1 += ';height:260px !important;border-right:none;';
}
else {
	style_rep1 += ';height:200px !important;border-right:none;';
}
$('#ch1').attr('style',style_rep1);
var myElement2 = $('#label_ages2');
var myElement1 = $('#label_ages1');
var displayValue1 = myElement1.css('display');
var myElementerror1 = $('#validation-error1');
var displayValueError1 = myElementerror1.css('display');
var style_rep1 =$('#ch1').attr('style');
if ((displayValueError1 !== 'none')&&(displayValue1 === 'none')){
	style_rep1 += ';height:250px !important;border-right:none;';
}
$('#ch1').attr('style',style_rep1);
var myElement2 = $('#label_ages2');
 var displayValue2 = myElement2.css('display');
 var myElementerror2= $('#validation-error2');
 var displayValueError2 = myElementerror2.css('display');
 var style_rep2 =$('#ch2').attr('style');
 if ((displayValue2 !== 'none')&&(displayValueError2 !== 'none')) {
 	style_rep2 += ';height:365px !important;border-right:none;';
 }
 else if ((displayValue2 !== 'none')||(displayValueError2 !== 'none')) {
 	style_rep2 += ';height:260px !important;border-right:none;';
 }
	else {
	 style_rep2 += ';height:300px !important;border-right:none;';
 }
 $('#ch2').attr('style',style_rep2);
 var myElement3 = $('#label_ages3');
 var displayValue3 = myElement3.css('display');
 var myElementerror3 = $('#validation-error3');
 var displayValueError3 = myElementerror3.css('display');
 var style_rep3=$('#ch3').attr('style');
 if ((displayValue3 !== 'none')&&(displayValueError3 !== 'none')) {
 	style_rep3+= ';height:365px !important;border-right:none;';
 }
 else if ((displayValue3 !== 'none')||(displayValueError3 !== 'none')) {
 	style_rep3 += ';height:300px !important;border-right:none;';
 }
 else {
 	style_rep3 += ';height:300px !important;border-right:none;';
 }
 $('#ch3').attr('style',style_rep3);

$("#v194_281,#v194_282").removeClass("v194_28_active");
$("#v194_283").addClass("v194_28_active");
$("#ac2").removeClass("ajout_ch_activ");
$("#ac3").addClass("ajout_ch_activ");

}
else{
var myElement2 = $('#label_ages2');
var displayValue2 = myElement2.css('display');
var myElementerror2 = $('#validation-error2');
var displayValueError2 = myElementerror2.css('display');
var style_rep2 =$('#ch2').attr('style');
if (displayValue2 !== 'none') {
style_rep2 += ';height:260px !important;border-right:none;';
}
else {
style_rep2 += ';height:200px !important;border-right:none;';
}
if ((displayValueError2 !== 'none')&&(displayValue2 === 'none')){
style_rep2 += ';height:250px !important;border-right:none;';
}
$('#ch2').attr('style',style_rep2);
var myElement3 = $('#label_ages3');
var displayValue3 = myElement3.css('display');
var myElementerror3 = $('#validation-error3');
var displayValueError3 = myElementerror3.css('display');
var style_rep3 =$('#ch3').attr('style');
if (displayValue3 !== 'none') {
style_rep3 += ';height:260px !important;border-right:none;';
} else {
style_rep3 += ';height:200px !important;border-right:none;';
}
if ((displayValueError3 !== 'none')&&(displayValue3 === 'none')){
style_rep3 += ';height:250px !important;border-right:none;';
}
$('#ch3').attr('style',style_rep3);
var myElement4 = $('#label_ages4');
var displayValue4 = myElement4.css('display');
var style_rep4 =$('#ch4').attr('style');
if (displayValue4 !== 'none') {
style_rep4 += ';height:365px !important;border-right:none;';
var style_ajouter_ch4 =$('#ac4').attr('style'); //it will return string
style_ajouter_ch4 += ';margin-top:0%;margin-right:0%';
$('#ac4').attr('style',style_ajouter_ch4);
var style_btn_terminer =$('#v194_284').attr('style'); //it will return string
style_btn_terminer += ';margin-top: 50.5%;';
$('#v194_284').attr('style',style_btn_terminer);
} else {
style_rep4 += ';height:300px !important;border-right:none;';
}
$('#ch4').attr('style',style_rep4);
$("#v194_281,#v194_282,#v194_283").removeClass("v194_28_active");
$("#v194_284").addClass("v194_28_active");
$("#ac2,#ac3").removeClass("ajout_ch_activ");
$("#ac4").addClass("ajout_ch_activ");
}
}
else{
	var style_ajouter_ch =$('#ac1').attr('style'); //it will return string
	style_ajouter_ch += ';margin-top:0%;margin-right:0%';
	$('#ac1').attr('style',style_ajouter_ch);
	$("#ac1").removeClass("ajout_ch_activ");
	var style_btn_terminer =$('#v194_281').attr('style'); //it will return string
	style_btn_terminer += ';display:none;margin-top: 50.5%;';
	$('#v194_281').attr('style',style_btn_terminer);
if(screen.width>2000){
	$("#tous_les_chambres").addClass("tous_les_chambres_active");
}
else{
$("#tous_les_chambres").addClass("tous_les_chambres_active");
}
$('#tous_les_chambres').animate({scrollTop:500}, 'slow');
if(int_target_ch==3){
var myElement1 = $('#label_ages1');
var displayValue1 = myElement1.css('display');
var style_rep1 =$('#ch1').attr('style');
if (displayValue1 !== 'none') {
style_rep1 += ';height:260px !important;border-right:none;';
}
else {
style_rep1 += ';height:200px !important;border-right:none;';
}
$('#ch1').attr('style',style_rep1);
var myElement2 = $('#label_ages2');
var myElement1 = $('#label_ages1');
var displayValue2 = myElement2.css('display');
var style_rep2 =$('#ch2').attr('style');
if (displayValue2 !== 'none') {
style_rep2 += ';height:260px !important;border-right:none;';
}
else{
style_rep2 += ';height:200px !important;border-right:none;';
}
$('#ch2').attr('style',style_rep2);
var myElementerror1 = $('#validation-error1');
var displayValueError1 = myElementerror1.css('display');
var style_rep1 =$('#ch1').attr('style');
if ((displayValueError1 !== 'none')&&(displayValue1 === 'none')){
style_rep1 += ';height:250px !important;border-right:none;';
}
$('#ch1').attr('style',style_rep1);
var myElement3 = $('#label_ages3');
var displayValue3 = myElement3.css('display');
var style_rep3 =$('#ch3').attr('style');
if (displayValue3 !== 'none') {
style_rep3 += ';height:365px !important;border-right:none;';
var style_ajouter_ch3 =$('#ac3').attr('style'); //it will return string
style_ajouter_ch3 += ';margin-top:0%;margin-right:0%';
$('#ac3').attr('style',style_ajouter_ch3);
var style_btn_terminer =$('#v194_283').attr('style'); //it will return string
style_btn_terminer += ';margin-top: 50.5%;';
$('#v194_283').attr('style',style_btn_terminer);
}
else {
style_rep3 += ';height:300px !important;border-right:none;';
}
$('#ch3').attr('style',style_rep3);
$("#v194_281,#v194_282").removeClass("v194_28_active");
$("#v194_283").addClass("v194_28_active");
$("#ac1,#ac2").removeClass("ajout_ch_activ");
$("#ac3").addClass("ajout_ch_activ");
}
else{
var myElement1 = $('#label_ages1');
var displayValue1 = myElement1.css('display');
var style_rep1 =$('#ch1').attr('style');
if (displayValue1 !== 'none') {
style_rep1 += ';height:260px !important;border-right:none;';
}
else{
style_rep1 += ';height:200px !important;border-right:none;';
}
$('#ch1').attr('style',style_rep1);
var myElement2 = $('#label_ages2');
var myElement1 = $('#label_ages1');
var displayValue1 = myElement1.css('display');
var myElementerror1 = $('#validation-error1');
var displayValueError1 = myElementerror1.css('display');
var style_rep1 =$('#ch1').attr('style');
if ((displayValueError1 !== 'none')&&(displayValue1 === 'none')){
style_rep1 += ';height:250px !important;border-right:none;';
}
$('#ch1').attr('style',style_rep1);
var myElement2 = $('#label_ages2');
var displayValue2 = myElement2.css('display');
var myElementerror2 = $('#validation-error2');
var displayValueError2 = myElementerror2.css('display');
var style_rep2 =$('#ch2').attr('style');
if (displayValue2 !== 'none') {
style_rep2 += ';height:260px !important;border-right:none;';
}
else{
style_rep2 += ';height:200px !important;border-right:none;';
}
if ((displayValueError2 !== 'none')&&(displayValue2 === 'none')){
style_rep2 += ';height:250px !important;border-right:none;';
}
$('#ch2').attr('style',style_rep2);
var myElement3 = $('#label_ages3');
var displayValue3 = myElement3.css('display');
var myElementerror3 = $('#validation-error3');
var displayValueError3 = myElementerror3.css('display');
var style_rep3 =$('#ch3').attr('style');
if (displayValue3 !== 'none') {
style_rep3 += ';height:260px !important;border-right:none;';
} else {
style_rep3 += ';height:200px !important;border-right:none;';
}
if ((displayValueError3 !== 'none')&&(displayValue3 === 'none')){
style_rep3 += ';height:250px !important;border-right:none;';
}
$('#ch3').attr('style',style_rep3);
var myElement4 = $('#label_ages4');
var displayValue4 = myElement4.css('display');
var style_rep4 =$('#ch4').attr('style');
if (displayValue4 !== 'none') {
style_rep4 += ';height:365px !important;border-right:none;';
var style_ajouter_ch4 =$('#ac4').attr('style'); //it will return string
style_ajouter_ch4 += ';margin-top:0%;margin-right:0%';
$('#ac4').attr('style',style_ajouter_ch4);
var style_btn_terminer =$('#v194_284').attr('style'); //it will return string
style_btn_terminer += ';margin-top: 50.5%;';
$('#v194_284').attr('style',style_btn_terminer);
} else {
style_rep4 += ';height:300px !important;border-right:none;';
}
$('#ch4').attr('style',style_rep4);
$("#v194_281,#v194_282,#v194_283").removeClass("v194_28_active");
$("#v194_284").addClass("v194_28_active");
$("#ac2,#ac3").removeClass("ajout_ch_activ");
$("#ac4").addClass("ajout_ch_activ");
}
}
}
if(int_target_ch>4){
	var style_ch =$('#tous_les_chambres').attr('style'); //it will return string
	style_ch += ';margin-left:-21%;';
	$('#tous_les_chambres').attr('style',style_ch);
	$("#tous_les_chambres").addClass("tous_les_chambres_active");
	for(j=1;j<=int_target_ch;j++){
		if(j<=4){
			$('#ac'+j).removeClass("ajout_ch_activ");
			$('#v194_28'+j).removeClass("v194_28_active");

		}
		$('[id*="age'+j+'"]').each(function(index, element) {
			var displayage = $('[id*="age'+j+'"]').css('display');
			if (displayage !== 'none') {

				$('#label_ages'+j).addClass("label_ages_active");
				var style_ajouter_ch =$('#ac1').attr('style'); //it will return string
				style_ajouter_ch += ';margin-top:0%;margin-right:0%';
				$('#ac1').attr('style',style_ajouter_ch);
				$("#ac1").removeClass("ajout_ch_activ");
				var style_btn_terminer =$('#v194_281').attr('style'); //it will return string
				style_btn_terminer += ';display:none;margin-top: 50.5%;';
				$('#v194_281').attr('style',style_btn_terminer);
				var style_ajouter_ch2 =$('#ac2').attr('style'); //it will return string
				style_ajouter_ch2 += ';margin-top:0%;margin-right:0%';
				$('#ac2').attr('style',style_ajouter_ch2);
				var style_btn_terminer =$('#v194_282').attr('style'); //it will return string
				style_btn_terminer += ';margin-top: 50.5%;';
				$('#v194_282').attr('style',style_btn_terminer);

				var style_ajouter_ch3 =$('#ac3').attr('style'); //it will return string
				style_ajouter_ch3 += ';margin-top:0%;margin-right:0%';
				$('#ac3').attr('style',style_ajouter_ch3);
				var style_btn_terminer =$('#v194_283').attr('style'); //it will return string
				style_btn_terminer += ';margin-top: 50.5%;';
				$('#v194_283').attr('style',style_btn_terminer);

				var style_ajouter_ch4 =$('#ac4').attr('style'); //it will return string
				style_ajouter_ch4 += ';margin-top:0%;margin-right:0%';
				$('#ac4').attr('style',style_ajouter_ch4);
				$("#ac4").removeClass("ajout_ch_activ");

				var style_btn_terminer =$('#v194_284').attr('style'); //it will return string
				style_btn_terminer += 'display:none;;margin-top: 50.5%;';
				$('#v194_284').attr('style',style_btn_terminer);
			}
	});
	}
	var myElement1 = $('#label_ages1');
	var displayValue1 = myElement1.css('display');
	var style_rep1 =$('#ch1').attr('style');
	if (displayValue1 !== 'none') {
	style_rep1 += ';height:300px !important;border-right:none;';
	}
	else{
	style_rep1 += ';height:200px !important;border-right:none;';
	}
	$('#ch1').attr('style',style_rep1);
	var myElement2 = $('#label_ages2');
	var myElement1 = $('#label_ages1');
	var displayValue1 = myElement1.css('display');
	var myElementerror1 = $('#validation-error1');
	var displayValueError1 = myElementerror1.css('display');
	var style_rep1 =$('#ch1').attr('style');
	if ((displayValueError1 !== 'none')&&(displayValue1 === 'none')){
	style_rep1 += ';height:250px !important;border-right:none;';
	}
	$('#ch1').attr('style',style_rep1);
	var myElement2 = $('#label_ages2');
	var displayValue2 = myElement2.css('display');
	var myElementerror2 = $('#validation-error2');
	var displayValueError2 = myElementerror2.css('display');
	var style_rep2 =$('#ch2').attr('style');
	if (displayValue2 !== 'none') {
	style_rep2 += ';height:300px !important;border-right:none;';
	}
	else{
	style_rep2 += ';height:200px !important;border-right:none;';
	}
	if ((displayValueError2 !== 'none')&&(displayValue2 === 'none')){
	style_rep2 += ';height:250px !important;border-right:none;';
	}
	$('#ch2').attr('style',style_rep2);
	var myElement3 = $('#label_ages3');
	var displayValue3 = myElement3.css('display');
	var myElementerror3 = $('#validation-error3');
	var displayValueError3 = myElementerror3.css('display');
	var style_rep3 =$('#ch3').attr('style');
	if (displayValue3 !== 'none') {
	style_rep3 += ';height:300px !important;border-right:none;';
	} else {
	style_rep3 += ';height:200px !important;border-right:none;';
	}
	if ((displayValueError3 !== 'none')&&(displayValue3 === 'none')){
	style_rep3 += ';height:250px !important;border-right:none;';
	}
	$('#ch3').attr('style',style_rep3);
	var myElement4 = $('#label_ages4');
	var displayValue4 = myElement4.css('display');
	var myElementerror4 = $('#validation-error4');
	var displayValueError4 = myElementerror4.css('display');
	var style_rep4 =$('#ch4').attr('style');
	if (displayValue4 !== 'none') {
	style_rep4 += ';height:300px !important;border-right:none;';
	} else {
	style_rep4 += ';height:200px !important;border-right:none;';
	}
	if ((displayValueError4 !== 'none')&&(displayValue4 === 'none')){
	style_rep4 += ';height:250px !important;border-right:none;';
	}
	$('#ch4').attr('style',style_rep4);
	var myElement5 = $('#label_ages5');
	var displayValue5 = myElement5.css('display');
	var style_rep5 =$('#ch5').attr('style');
	if (displayValue5 !== 'none') {
	style_rep5 += ';height:365px !important;border-right:none;';
	var style_ajouter_ch5 =$('#ac5').attr('style'); //it will return string
	style_ajouter_ch5 += ';margin-top:0%;margin-right:0%';
	$('#ac5').attr('style',style_ajouter_ch5);
	var style_btn_terminer =$('#v194_285').attr('style'); //it will return string
	style_btn_terminer += ';margin-top: 50.5%;';
	$('#v194_285').attr('style',style_btn_terminer);
	} else {
	style_rep5 += ';height:300px !important;border-right:none;';
	}
	$('#ch5').attr('style',style_rep5);
	$("#v194_282,#v194_283").removeClass("v194_28_active");
	$("#v194_284").removeClass("v194_28_active");
	$("#ac2,#ac3,#ac4").removeClass("ajout_ch_activ");
}
}
$(window).resize(function() {
 getScreenWidth();
});
// Call the function on page load
$(document).ready(function() {
 getScreenWidth();
});
</script>
<script>
/**** header menu****/
$('.icon_menu_hotel,#text-blueWaveHotel').click(function() {
  var style_ch =$('.w-full_menu1').attr('style'); //it will return string
  style_ch += ';display:none !important';
  $('.w-full_menu1').attr('style',style_ch);
  var style_ch2 =$('.w-full_menu2').attr('style'); //it will return string
  style_ch2 += ';display:block !important';
  $('.w-full_menu2').attr('style',style_ch2);
  $('.bbpressloginurl').eq(1).hide();
  var element2 = $('.bbpressloginurl').eq(1);
  var style_ch2 =$("#rootSideNav").attr('style'); //it will return string
  style_ch2 += ';display:block !important';
  $("#rootSideNav").attr('style',style_ch);
});
$('.span_vplus').click(function() {
  $(".megamenu_vorg").css("display","block");
  $('#nav_vorg').trigger('click');
});
$('#NavigationNarrow-toggleSideNav-button').click(function() {
  if ($('#NavigationNarrow-toggleSideNav-button').css('background-image').indexOf('https://tn.tunisiebooking.com/images/icone-moteur/close-menu.svg') !== -1) {
    var style_ch =$('#rootSideNav:first').attr('style'); //it will return string
    style_ch += ';display:none !important;';
    $('#rootSideNav:first').attr('style',style_ch);
    var style_body =$('.v312_1355,.conteneur_footer1').attr('style'); //it will return string
    style_body += ';filter:none;';
    $('.v312_1355,.conteneur_footer1').attr('style',style_body);
    var style_body1 =$('.sous_body').attr('style'); //it will return string
    style_body1 += ';filter:none;';
    $('.sous_body').attr('style',style_body1);
    $('.text-black').css('background', '');
  }
  else{
    var style_ch =$('#rootSideNav:first').attr('style'); //it will return string
    style_ch += ';display:block !important;';
    $('#rootSideNav:first').attr('style',style_ch);
    var style_body =$('.v312_1355,.conteneur_footer1').attr('style'); //it will return string
    style_body += ';filter:brightness(0.7);';
    $('.v312_1355,.conteneur_footer1').attr('style',style_body);
    var style_body1 =$('.sous_body').attr('style'); //it will return string
    style_body1 += ';filter:brightness(0.7);';
    $('.sous_body').attr('style',style_body1);
    $('.text-black').css({'background':'url(https://tn.tunisiebooking.com/images/icone-moteur/close-menu.svg)','background-repeat':'no-repeat','animation-name': 'scale-up','animation-duration': '1s','animation-timing-function': 'ease-out','animation-fill-mode': 'forwards'});
  }
});
$('.icon_menu_dest1,.text-blueWave_hotel1').click(function() {
  var style_ch =$('.w-full_menu1').attr('style'); //it will return string
  style_ch += ';display:block !important';
  $('.w-full_menu1').attr('style',style_ch);
  var style_ch2 =$('.w-full_menu2').attr('style'); //it will return string
  style_ch2 += ';display:none !important';
  $('.w-full_menu2').attr('style',style_ch2);
});
/**** click on voyage organiser header ****/
$('.icon_menu_vorg,.text-blueWavevorg1').click(function() {
  var style_ch =$('.w-full_menu3').attr('style'); //it will return string
  style_ch += ';display:block !important';
  $('.w-full_menu3').attr('style',style_ch);
  var style_ch2 =$('.w-full_menu2').attr('style'); //it will return string
  style_ch2 += ';display:none !important';
  $('.w-full_menu2').attr('style',style_ch2);
});
$('.icon_menu_voyage_org,.text-blueWave_vorg').click(function() {
  var style_ch =$('.w-full_menu2').attr('style'); //it will return string
  style_ch += ';display:block !important';
  $('.w-full_menu3').attr('style',style_ch);
  var style_ch2 =$('.w-full_menu3').attr('style'); //it will return string
  style_ch2 += ';display:none !important';
  $('.w-full_menu3').attr('style',style_ch2);
});
</script>

</body>
</html>
<?php
}