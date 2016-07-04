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
	



<title>Untitled Document</title>
</head>

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

<?php
   $xml = simplexml_load_file('http://payment.e-pages.dk/external/berlingskemedia/archive.php');
   $maxPapers = 8;
   $antPapers = 0;
   $numbPapers = count($xml->children());
       
   for($i=0; $i<$numbPapers; $i++)
   {
       if($antPapers<$maxPapers)
       {  
           if($xml->paper[$i]->attributes()->folder == "4463")
           {
               $titel=$xml->paper[$i]->attributes()->title;
               $katalog='http://www.e-pages.dk/berlingskemedia/' . $xml->paper[$i]->attributes()->catalog . '/teasers/medium.jpg';
               $katalogLink='http://www.e-pages.dk/berlingskemedia/' . $xml->paper[$i]->attributes()->catalog;
               echo 
               "<a href='$katalogLink' target='blank'>$titel</a><br>";
               $antPapers++;

           }
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

</body>
</html>


