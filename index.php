<!DOCTYPE html>
<!--Copyright (c) 2012 Max Vergelli
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the “Software”), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.-->

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Velkommen til Partner Publishing - skræddersyet kommunikation" />
	<meta name="keywords" content="temabaseret,informations-journalistik,partnerudgivelser,temaudgivelser,alternativ,online,eksponering,projektledelse,kommunikation" />
	<meta name="author" content="Partner Publishing" />

<!-- <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Droid+Sans' rel='stylesheet' type='text/css' /> -->
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

<!--BUBBLE-->

<script src="bubblepopup/scripts/jquery-bubble-popup-v3.min.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
$(document).ready(function(){

		//create default Bubble Popups for all buttons...
		$('.button').CreateBubblePopup({
											selectable: false,
		
											position : 'top',
											align	 : 'center',
											
											innerHtml: 'Denne boks forsvinder inden <br /> \
														man kan nå at vælge tekst!',
		
											innerHtmlStyle: {
																color:'#FFFFFF', 
																'text-align':'center'
															},
																				
											themeName: 	'all-grey',
											themePath: 	'bubblepopup/themes'
										 
										});

		//save new settings for the selectable bubble popup...
		$('#button_with_popup_selectable,').SetBubblePopupOptions({
																	selectable: false,
																	distance :'5px',								
																	position: 'top',
																	align	: 'left',	
																	innerHtml: 'Relevant, grundig<br>og aktuel',
								
																	innerHtmlStyle: {
																						color:'#FFFFFF', 
																						'text-align':'center',
																					},
																										
																	themeName: 	'all-orange',
																	themePath: 	'bubblepopup/themes',
																 
																});
		$('#button_with_popup_selectable2,').SetBubblePopupOptions({
																	selectable: false,
																	distance :'5px',
																	position : 'top',
																	align	 : 'center',
																	
																	innerHtml: 'Din udgivelse<br>til din målgruppe,<br>vi gør benarbejdet',
								
																	innerHtmlStyle: {
																						color:'#FFFFFF', 
																						'text-align':'center',
																						
																					},
																										
																	themeName: 	'all-grey',
																	themePath: 	'bubblepopup/themes',
																 
																});
		$('#button_with_popup_selectable3,').SetBubblePopupOptions({
																	selectable: false,
																	distance :'5px',
																	position : 'top',
																	align	 : 'left',
																	
																	innerHtml: 'Ét tema, ét fokus,<br>mange læsere',
								
																	innerHtmlStyle: {
																						color:'#FFFFFF', 
																						'text-align':'center',
																						
																					},
																										
																	themeName: 	'all-azure',
																	themePath: 	'bubblepopup/themes',
																 
																});
		$('#button_with_popup_selectable4,').SetBubblePopupOptions({
																	selectable: false,
																	distance :'5px',
																	position : 'top',
																	align	 : 'right',
																	
																	innerHtml: 'Har du brug for et talerør?<br>Plads til at udfolde<br>de gode argumenter',
								
																	innerHtmlStyle: {
																						color:'#FFFFFF', 
																						'text-align':'center',
																						
																					},
																										
																	themeName: 	'all-orange',
																	themePath: 	'bubblepopup/themes',
																 
																});
		$('#button_with_popup_selectable5,').SetBubblePopupOptions({
																	selectable: false,
																	distance :'5px',
																	position : 'top',
																	align	 : 'left',
																	
																	innerHtml: 'Når det passer<br>i jeres planer – og med<br>lang holdbarhed',
								
																	innerHtmlStyle: {
																						color:'#FFFFFF', 
																						'text-align':'center',
																						
																					},
																										
																	themeName: 	'all-grey',
																	themePath: 	'bubblepopup/themes',
																 
																});
		$('#button_with_popup_selectable6,').SetBubblePopupOptions({
																	selectable: false,
																	distance :'5px',
																	position : 'top',
																	align	 : 'right',
																	
																	innerHtml: 'Både til brede og til smalle<br>– Berlingske Media dækker<br>alle målgrupper',
								
																	innerHtmlStyle: {
																						color:'#FFFFFF', 
																						'text-align':'center',
																						
																					},
																										
																	themeName: 	'all-azure',
																	themePath: 	'bubblepopup/themes',
																 
																});
		$('#button_with_popup_selectable7,').SetBubblePopupOptions({
																	selectable: false,
																	distance :'5px',
																	position : 'top',
																	align	 : 'left',
																	
																	innerHtml: 'Vi skræddersyer<br>dine udgivelser<br>efter dine ønsker',
								
																	innerHtmlStyle: {
																						color:'#FFFFFF', 
																						'text-align':'center',
																						
																					},
																										
																	themeName: 	'all-orange',
																	themePath: 	'bubblepopup/themes',
																 
																});
		$('#button_with_popup_selectable8,').SetBubblePopupOptions({
																	selectable: false,
																	distance :'5px',
																	position : 'top',
																	align	 : 'right',
																	
																	innerHtml: 'Vi har alle kompetencerne samlet<br>under ét tag - du har én kontaktperson,<br>som indgang til det hele',
								
																	innerHtmlStyle: {
																						color:'#FFFFFF', 
																						'text-align':'center',
																						
																					},
																										
																	themeName: 	'all-grey',
																	themePath: 	'bubblepopup/themes',
																 
																});
		$('#button_with_popup_selectable9,').SetBubblePopupOptions({
																	selectable: false,
																	distance :'5px',
																	position : 'top',
																	align	 : 'left',
																	
																	innerHtml: 'Mere end 200 online-<br>og printmedier,<br>hvem vil du have fat i?',
								
																	innerHtmlStyle: {
																						color:'#FFFFFF', 
																						'text-align':'center',
																						
																					},
																										
																	themeName: 	'all-azure',
																	themePath: 	'bubblepopup/themes',
																 
																});
});
//-->
</script>
<link href="bubblepopup/css/jquery-bubble-popup-v3.css" rel="stylesheet" type="text/css" />
<!--BUBBLE END-->


	<link rel="stylesheet" type="text/css" media="all" href="css/meyerreset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/inland-wood.css" />

	<link rel="icon" href="favicon.ico" type="image/x-icon"> 
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
	

<title>Partner Publishing - en del af Berlingske Media</title>
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
<!--
	<div id="toplinks">
		<ul class="toplinks_links">
			<li><a href="#">Top link #1</a></li>
			<li><a href="#">Top link #2</a></li>
			<li><a href="#">Top link #3</a></li>
			<li><a href="#">Top link #4</a></li>
		</ul>
	</div>

OVERSKRIFT + LOGO-->
	<div id="header" class="clearfix shadow">
		<div class="clearfix">
			<h1><a href="http://www.partnerpublishing.dk">Partner <br><em>Publishing</em></a><a href="http://www.berlingskemedia.dk" target="_BLANK"><img src="images/berlingskemedia.gif" width="157" height="21" alt="Berlingske Media"></a></h1>
		</div>
	
<!-- SCROLLEREN hentes ind her -->
		<div class="clearfix">
		<div id="header-image">
			<?php include 'thumbscroller.html'; ?>
		</div>
		</div>

<!-- MENU hentes ind her -->
		<div id="nav" class="clearfix">
			
				<?php include 'mainmenu.html'; ?>
							
		</div>
</div>

<!-- INDHOLD HER -->
	
	<div id="content" class="clearfix">
		<div id="trio1" style="background-color:#eeeeee;">
	
			<div class="inner">
			
			<div style="height:65px; padding-bottom:20px;">
				<h2 style="font-size:32px;text-decoration:none;">
				<p>VELKOMMEN TIL<br>PARTNER PUBLISHING</p>
				</h2>
			</div>
			
			<div class="button" id="button_with_popup_selectable">
				<font style="font-size:15px;text-decoration:none;line-height:1.3em;">
				<a href="udgivelser.php" style="color:#70aba7">TEMABASERET INFORMATIONSJOURNALISTIK</a></font>
			</div>

			<div class="button" id="button_with_popup_selectable2">
				<font style="font-size:32px;text-decoration:none;line-height:1.3em;">
				<a href="udgivelser.php" style="color:#534e92">PARTNERUDGIVELSER</a></font>
			</div>

			<div class="button" id="button_with_popup_selectable3">				
				<font style="font-size:16px;text-decoration:none;line-height:1.3em;">
				<a href="skabbehov.php" style="color:#776b62">ALTERNATIV TIL TRADITIONEL ANNONCERING</a></font>
			</div>

			<div class="button" id="button_with_popup_selectable4">				
				<font style="font-size:40px;text-decoration:none;line-height:1.1em;">
				<a href="tema.php" style="color:#5e5e5d">TEMAUDGIVELSER</a></font>
			</div>

			<div class="button" id="button_with_popup_selectable5">
				<font style="font-size:24px;text-decoration:none;line-height:1.5em;">
				<a href="ambassadoreffekt.php" style="color:#717171">STRATEGISK KOMMUNIKATION</a></font>
			</div>

			<div class="button" id="button_with_popup_selectable6">
				<font style="font-size:32px;text-decoration:none;line-height:1.1em;">
				<a href="kompetencer.php" style="color:#a8998d">ONLINE EKSPONERING</a></font>
			</div>

			<div class="button" id="button_with_popup_selectable7">
				<font style="font-size:28px;text-decoration:none;line-height:1.2em;">
				<a href="skraeddersyetindhold.php" style="color:#adc557">FORMATER EFTER BEHOV</a></font>
			</div>

			<div class="button" id="button_with_popup_selectable8">
				<font style="font-size:26px;text-decoration:none;line-height:1.3em;">
				<a href="kompetencer.php" style="color:#db9f41">PROJEKTLEDELSE FRA A-Å</a></font>
			</div>

			<div class="button" id="button_with_popup_selectable9">
				<font style="font-size:21px;text-decoration:none;line-height:1.3em;">
				<a href="skraeddersyetindhold.php" style="color:#a6bfd3">SKRÆDDERSYET KOMMUNIKATION</a></font>	
			</div>
		</div>
	</div>

		<div id="trio2" style="background-color:#fff;">
			<div class="inner">
				<h2 style="font-size:21px;">Udgivelser</h2>
				<h3><a href="alleudgivelser.php" style="color:#5d5d5d">Seneste</a></h3> 
					<h4 style="font-weight:400">

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
              $tempTitel=$xml->paper[$i]->attributes()->title;
              $titel = $tempTitel;
              
              if(strlen($tempTitel) >= 27)
              {
                $titel = substr($tempTitel, 0, 27) . "...";
              }

              $katalog='http://www.e-pages.dk/berlingskemedia/' . $xml->paper[$i]->attributes()->catalog . '/teasers/medium.jpg';
              $katalogLink='http://www.e-pages.dk/berlingskemedia/' . $xml->paper[$i]->attributes()->catalog;
              echo 
              "<a href='$katalogLink' target='blank'>$titel</a><br>";
              $antPapers++;

           }
       }
       
   }
?>

					</h4>
				
				<h3><a href="alleudgivelserkommende.php" style="color:#5d5d5d">Kommende</a></h3> 
					<h4 style="font-weight:400">
<?php
   $xml = simplexml_load_file('http://payment.e-pages.dk/external/berlingskemedia/archive.php');
   $maxPapers = 8;
   $antPapers = 0;
   $numbPapers = count($xml->children());
       
   for($i=0; $i<$numbPapers; $i++)
   {
       if($antPapers<$maxPapers)
       {  
           if($xml->paper[$i]->attributes()->folder == "4644")
           {
              $tempTitel=$xml->paper[$i]->attributes()->title;
              $titel = $tempTitel;
              
              if(strlen($tempTitel) >= 27)
              {
                $titel = substr($tempTitel, 0, 27) . "...";
              }

              $katalog='http://www.e-pages.dk/berlingskemedia/' . $xml->paper[$i]->attributes()->catalog . '/teasers/medium.jpg';
              $katalogLink='http://www.e-pages.dk/berlingskemedia/' . $xml->paper[$i]->attributes()->catalog;
              echo 
              "<a href='$katalogLink' target='blank'>$titel</a><br>";
              $antPapers++;

           }
       }
       
   }
?>
					</h4>
						<b><a href="alleudgivelser.php" style="line-height:0em;">Klik og se alle nuværende og kommende udgivelser</a></b>
			</div>
		</div>




		<div id="trio3">
			<div class="inner">
				<h2 style="font-size:21px; margin-left:28px;"><a href="kontakt.php">Kontakt os</a></h2>
					<?php include 'kontakt2.html'; ?>
			</div>
		</div>
	</div>


	<div id="content2" class="clearfix shadow">
		<div id="faste1" style="background-color:#efddf1;">
			<div class="inner">
				<h2 style="font-size:15px;">Faste udgivelser</h2>
					<p>Vi kan også producere jeres faste udgivelser.</p>
					<b><a href="tryksager.php" title="Læs mere her">Klik her <br>for at læse mere</a></b>
			</div>
		</div>

		<div id="faste2" style="background-color:#efddf1;">
			<div class="inner">
					<a href="http://www.e-pages.dk/berlingskemedia/628/" target="_BLANK">
					<img src="http://www.e-pages.dk/berlingskemedia/628/teasers/small.jpg" width="106.5" height="150">
					</a>
			</div>
		</div>

		<div id="faste3" style="background-color:#efddf1;">
			<div class="inner">
					<a href="http://www.e-pages.dk/berlingskemedia/627" title="test demo" target="_BLANK">
					<img src="http://www.e-pages.dk/berlingskemedia/627/teasers/small.jpg" width="106.5" height="150">
					</a>
			</div>
		</div>


		<div id="onlinekampagner1" style="background-color:#e1f1dd;">
			<div class="outer"><h2 style="font-size:15px;">Online kampagner</h2></div>
				<div class="inner">Vi kombinerer alle trykte udgivelser med online kampagner på relevante Berlingske Media sites.</div>
		</div>

	<div id="onlinekampagner2" style="background-color:#e1f1dd;">
		<div class="inner"><img src="images/banner-forside.png" width="282" height="150"</img></div>
	</div>

<!-- Testimonials er sat på stdby.
		<div id="testimonials1" style="background-color:#e1f1dd;">
			<div class="outer"><h2 style="font-size:15px;">Testimonials</h2></div>
			<li>
				<p>Udtalelse<br>på vej</p>
				<i>Navn, firma</i>
			</li>

		</div>



		<div id="testimonials2" style="background-color:#e1f1dd;">
			<li>
				<p>Udtalelse<br>på vej</p>
				<i>Navn, firma</i>
			</li>
		</div>
-->
	</div>
</div>

</div>


<?php include 'footer.html'; ?>



</body>
</html>