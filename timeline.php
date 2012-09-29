<html>
   <head>
      <title>Prototype Edition: The Comic Book</title>

   <!--metadata-->
      <meta name="title" content="Prototype Edition: The Comic Book"></meta>
      <meta name="rating" content="General"></meta>
      <meta name="distribution" content="Global"></meta>
      <meta name="robots" content="index,follow"></meta>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></meta>
   <!--metadata-->
   <link href="css/comics.css" rel="stylesheet" type="text/css"></link>

   <style type="text/css">
      <!--
      -->
   </style>


      <script language="javascript">
      <!--
         function photo_open(link, width, height)
         {
            var photoWindow = window.open(link,"photo",'toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,width='+width+',height='+height,"text");
         }
      //-->
      </script>

   </head>

   <body>

      <div align="center"><img src="images/timeline.jpg" height=473 width=728 usemap="#maptime" border="none"></img>
         <a name="#maptime">
            <map name="maptime">
            
			<?PHP 
				$image_size = getimagesize(trim('engraving.jpg'));
				print(" <area shape='18,152,167,116' href=\"javascript:photo_open('photo_display.php?photo=".trim('engraving.jpg&text=1362BC: Pharaoh Akhenaten and his family adoring the Aten: A Sun God in Egyptian Mythology.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='EGYPTIAN' coords='18,152,167,116'></area> ");
				$image_size = getimagesize(trim('etruscanhunting.jpg'));               
				print(" <area shape='91,221,210,187' href=\"javascript:photo_open('photo_display.php?photo=".trim('etruscanhunting.jpg&text=A Fresco Painting discovered in the Tomba Delle Iscrizioni, depicting Etruscan tribes men hunting at sea.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='ETRUSCAN' coords='91,221,210,187'></area> ");
				$image_size = getimagesize(trim('animalscrolls.jpg'));   
				print(" <area shape='249,191,398,158' href=\"javascript:photo_open('photo_display.php?photo=".trim('animalscrolls.jpg&text=Choujuugiga - Literally meaning animal scrolls - They depict animals behaving as Buddhist priests.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='EARLY JAPANESE' coords='249,191,398,158'></area> ");
				$image_size = getimagesize(trim('bayeuxtapestry.jpg'));
				print(" <area shape='280,112,429,79' href=\"javascript:photo_open('photo_display.php?photo=".trim('bayeuxtapestry.jpg&text=A scene from the bayeux tapestry. The tapestry depicts the event of the battle of hastings in 1066. It follows Williams Men crossing the sea, and landing in england, right through to the surrender of english troops. This scene shows Harold the King of England with an arrow in his eye.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='MIDDLE AGES' coords='280,112,429,79'></area> ");
				$image_size = getimagesize(trim('greatwave.jpg'));
				print(" <area shape='421,168,530,139' href=\"javascript:photo_open('photo_display.php?photo=".trim('greatwave.jpg&text=The Great Wave: For Hokusai, manga (whimsical pictures) was not about attention to detail or creating art pieces, rather the drawing of a picture the way his brush or drawing materials glided across the page at random.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='EDO' coords='421,168,530,139'></area> ");
				$image_size = getimagesize(trim('gilraynelson.jpg'));
				print(" <area shape='439,88,608,50' href=\"javascript:photo_open('photo_display.php?photo=".trim('gilraynelson.jpg&text=James Gilray - The Death of Admiral Lord Nelson.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='GEORGIAN' coords='439,88,608,50'></area> ");
				$image_size = getimagesize(trim('peanuts1977.gif'));
				print(" <area shape='590,154,719,124' href=\"javascript:photo_open('photo_display.php?photo=".trim('peanuts1977.gif&text=Charles Schulz - Peanuts (1977): One of many famous strips appearing regulary in American newspapers.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='MODERN AGE' coords='590,154,719,124'></area> ");   
				$image_size = getimagesize(trim('engraving.jpg'));
				print(" <area shape='135,244,273,257' href=\"javascript:photo_open('photo_display.php?photo=".trim('engraving.jpg&text=1362BC: Pharaoh Akhenaten and his family adoring the Aten: A Sun God in Egyptian Mythology.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='PICTURE ENGRAVINGS' coords='135,244,273,257'></area> ");
				$image_size = getimagesize(trim('etruscanhunting.jpg'));
				print(" <area shape='168,271,285,287' href=\"javascript:photo_open('photo_display.php?photo=".trim('etruscanhunting.jpg&text=A Fresco Painting discovered in the Tomba Delle Iscrizioni, depicting Etruscan tribes men hunting at sea.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='FRESCO PAINTINGS' coords='168,271,285,287'></area> ");
				$image_size = getimagesize(trim('animalscrolls.jpg'));
				print(" <area shape='339,246,462,258' href=\"javascript:photo_open('photo_display.php?photo=".trim('animalscrolls.jpg&text=Choujuugiga - Literally meaning animal scrolls - They depict animals behaving as Buddhist priests.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='ANIMAL SCROLLS' coords='339,246,462,258'></area> ");
				$image_size = getimagesize(trim('bayeuxtapestry.jpg'));
				print(" <area shape='339,270,467,285' href=\"javascript:photo_open('photo_display.php?photo=".trim('bayeuxtapestry.jpg&text=A scene from the bayeux tapestry. The tapestry depicts the event of the battle of hastings in 1066. It follows Williams Men crossing the sea, and landing in england, right through to the surrender of english troops. This scene shows Harold the King of England with an arrow in his eye.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='BAYEUX TAPESTRY' coords='339,270,467,285'></area> ");
				$image_size = getimagesize(trim('greatwave.jpg'));
				print(" <area shape='340,297,395,308' href=\"javascript:photo_open('photo_display.php?photo=".trim('greatwave.jpg&text=The Great Wave: For Hokusai, manga (whimsical pictures) was not about attention to detail or creating art pieces, rather the drawing of a picture the way his brush or drawing materials glided across the page at random.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='HOKUSAI' coords='340,297,395,308'></area> ");
				$image_size = getimagesize(trim('punch1876.jpg'));
				print(" <area shape='422,298,551,307' href=\"javascript:photo_open('photo_display.php?photo=".trim('punch1876.jpg&text=European Influence lead Japanese artists to release humour books such as Marumaru Chimbun.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='MARUMARU CHIMBUN' coords='422,298,551,307'></area> ");
				$image_size = getimagesize(trim('gilraynile.jpg'));
				print(" <area shape='343,319,495,329' href=\"javascript:photo_open('photo_display.php?photo=".trim('gilraynile.jpg&text=James Gilray - Cleansing of the mouth of the Nile.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='POLITICAL CARICATURE' coords='343,319,495,329'></area> ");
				$image_size = getimagesize(trim('gilraybulls.gif'));
				print(" <area shape='525,318,622,331' href=\"javascript:photo_open('photo_display.php?photo=".trim('gilraybulls.gif&text=James Gilray - John Bulls Progress.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='JAMES GILRAY' coords='525,318,622,331'></area> ");
				$image_size = getimagesize(trim('manga1920.jpg'));
				print(" <area shape='591,244,682,255' href=\"javascript:photo_open('photo_display.php?photo=".trim('manga1920.jpg&text=An example of manga from early in the 20th Century.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='MANGA 1920' coords='591,244,682,255'></area> ");
				$image_size = getimagesize(trim('atom1950.jpg'));
				print(" <area shape='594,262,687,274' href=\"javascript:photo_open('photo_display.php?photo=".trim('atom1950.jpg&text=Tezuka Osamus, Tetsuwa Atom (Mighty Atom) - The U.S. Knows The Mighty Atom as Astro Boy.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='MANGA 1950' coords='594,262,687,274'></area> ");
				$image_size = getimagesize(trim('peanuts1950.gif'));
				print(" <area shape='593,283,705,295' href=\"javascript:photo_open('photo_display.php?photo=".trim('peanuts1950.gif&text=Charles Schulz - The first episode of Peanuts, 1950.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='PEANUTS' coords='593,283,705,295'></area> ");
				$image_size = getimagesize(trim('nixon.jpg'));
				print(" <area shape='592,301,726,311' href=\"javascript:photo_open('photo_display.php?photo=".trim('nixon.jpg&text=Ralph Steadman - Caricature of Richard Nixon in the 70s.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='NIXON' coords='592,301,726,311'></area> ");
			?>
            </map>
         </a>
      </div>

      <div class="timelinemenu"><img src="images/menubuttonssized.jpg" height=39 width=498 usemap="#map" border="none"></img>      
         <a name="#map">
            <map name="map">
               <area shape="9,9,63,25" href="index.html" alt="HOME" coords="9,9,63,25"></area>
               <area shape="114,11,200,27" href="contents.html" alt="CONTENTS" coords="114,11,200,27"></area>
               <area shape="241,10,282,25" href="brainstorm.html" alt="BACK" coords="241,10,282,25"></area>
               <area shape="336,10,378,27" href="features.php" alt="NEXT" coords="336,10,378,27"></area>
               <area shape="423,8,479,25" href="index.html" alt="INDEX" coords="423,8,479,25"></area>
            </map>
         </a>
      </div>

   </body>
</html>