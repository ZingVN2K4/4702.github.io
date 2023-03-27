<?php
//code by
if(isset($_GET['url'])){
$url = $_GET ['url'] ;
}
?>

<html>

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

<meta name="robots" content="noindex">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript" src="https://ssl.p.jwpcdn.com/player/v/8.23.1/jwplayer.js"></script>

<script type="text/javascript">jwplayer.key="XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo";</script>

<style type="text/css" media="screen">html,body{padding:0;margin:0;height:100%}#encrpyt{width:100%!important;height:100%!important;overflow:hidden;background-color:#000}</style>

</head>

<body>

<div id="encrpyt">


<video class="lazy" width="100%" height="100%" controls autoplay controlsList="nodownload" oncontextmenu="return false;">
    <source src="<?php echo $url; ?>" type="video/mp4" />
</video>
<script>

  window.lazyLoadOptions = {
 
    elements_selector: ".lazy"

  };

</script>

<script

  async

  src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@16.1.0/dist/lazyload.min.js">

</script>
