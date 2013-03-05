<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Ancient Egypt</title>

</head>
<body>

<div id="header">
<div id="logo">
<img src="header.jpg" />
</div>
<ul id="nav">
<li><a href= "#history">History</a></li>
<li><a href= "#media">Media</a></li>
<li><a href= "#forums">Forums</a></li>
<li><a href= "#news">Ancient News</a></li>
</ul>

</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" charset="utf-8">
$("a").click(function(){
   $("a.active").removeClass("active");
   $(this).addClass("active");
});
</script>

<script type="text/javascript">
$('a').click(function() {
    var elementClicked = $(this).attr("href");
    var destination = $(elementClicked).offset().top;
    $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination-15}, 500 );
    return false;
});
 </script>
