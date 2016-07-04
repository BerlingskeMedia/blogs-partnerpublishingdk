<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<!--	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Droid+Sans' rel='stylesheet' type='text/css' /> -->
	<link rel="stylesheet" type="text/css" media="all" href="css/inland-wood.css" />

	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>


	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
	



<title>Alle kommende udgivelser</title>



</head>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35264676-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<body>

<div id="sitecontainer">
<div id="wrapper960" class="clearfix">

<!--OVERSKRIFT + LOGO-->
	<div id="header" class="clearfix shadow">
		<div class="clearfix">
			<h1><a href="http://www.partnerpublishing.dk">Partner <br><em>Publishing</em></a><a href="http://www.berlingskemedia.dk" target="_BLANK"><img src="images/berlingskemedia.gif" width="157" height="21" alt="Berlingske Media"></a></h1>
		</div>
	


<!-- MENU hentes ind her -->
		<div id="nav" class="clearfix" style="border-top:1px solid #000">
			
				<?php include 'mainmenu.html'; ?>
							
		</div>
</div>




<div id="contentUdg" class="clearfix">

<div id="yearDiv">
	
	<h1 style="margin-left:15px;">
	Udgivelser 
	<a href="alleudgivelser.php">2013</a> /
	<a href="alleudgivelser2012.php">2012</a> / 
	<a href="alleudgivelser2011.php">2011</a> /
	<a href="alleudgivelserfaste.php">Faste udgivelser</a> / 
	<a href="alleudgivelserkommende.php" style="color:#4f4f4f">Kommende udgivelser</a>
	</h1>
	
</div>

<?php
	$xml = simplexml_load_file('http://payment.e-pages.dk/external/berlingskemedia/archive.php');
	
	$numbPapers = count($xml->children());
		
	for($i=0; $i<$numbPapers; $i++)
	{
		if(($xml->paper[$i]->attributes()->folder == "4644") || ($xml->paper[$i]->attributes()->folder == "4635"))
		{
			$titel=$xml->paper[$i]->attributes()->title;
			$katalog='http://www.e-pages.dk/berlingskemedia/' . $xml->paper[$i]->attributes()->catalog . '/teasers/medium.jpg';
			$katalogLink='http://www.e-pages.dk/berlingskemedia/' . $xml->paper[$i]->attributes()->catalog;
			echo
			"<div class='coverDiv'>
			<center>
			<a href='$katalogLink' target='blank'><img src='$katalog'></a>
			<center>
			</div>";

		}
		
	}


?>

<!--
<p>Titel: <?=$titel?></p>
<p>ID: <?=$katalog?></p>

<img src=<?=$katalog?> border="0" height="200" />
-->

</div>
<div id="contentUdg" style="height:15px;margin:-15px 0px 0px 0px;padding:0px;border-top:0px;"></div>
</div>
</div>


<?php include 'footer.html'; ?>

<script>
$(document).ready(function(){   
    $("img").each(function(index) {  
        $(this).error(function() {  
            $(this).unbind("error").attr("src", ""); // If you want to replace with any blank image.  
  
            $(this).hide();//You can simply Hide it using this.  
        });  
        $(this).attr("src", $(this).attr("src"));  
  });      
});  

</script>


</body>
</html>


