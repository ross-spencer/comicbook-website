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

   <head>

   <body>

      <div align="center"><img src="images/features.jpg" height=455 width=658 usemap="#mapfeature" border="none"></img>
         <a name="#mapfeature">
            <map name="mapfeature">

            <?PHP $image_size = getimagesize(trim('artwork.jpg'));
               print(" <area shape='246,180,421,210' href=\"javascript:photo_open('photo_display.php?photo=".trim('artwork.jpg&text=Although the original alien character was designed by H.R. Giger in the early 70s, the alien is regulary re-created within comic book series and combined with modern techniques to create a different vision of an other world species.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='ART' coords='246,180,421,210'></area> ");
            ?>

            <?PHP $image_size = getimagesize(trim('subject.jpg'));
               print(" <area shape='248,226,378,237' href=\"javascript:photo_open('photo_display.php?photo=".trim('subject.jpg&text=Cross referencing the time in history a comic was read, along with the content/subject matter could give us an insight into the state of mind of the population. For example escapist material, which still focuses on good vs. evil may identify a period of time immediately after war.')."','".$image_size[0]."','".($image_size[1]+75)."');\" alt='SUBJECT' coords='248,226,378,237'></area> ");
            ?>

            <?PHP $image_size = getimagesize(trim('adverts.jpg'));
               print(" <area shape='251,248,475,266' href=\"javascript:photo_open('photo_display.php?photo=".trim('adverts.jpg&text=Again an interesting insight into popular culture can be found in advertisments within comics. The blood curdling vampire bat goes a long way to confirming comic stereotypes, but the dungeons and dragons advert from the 1980s x-men comes from a time when role play games such as these were popular but also at the advent of the computer games console revolution.')."','".$image_size[0]."','".($image_size[1]+105)."');\" alt='ADVERTISMENTS' coords='251,248,475,266'></area> ");
            ?>

            <?PHP $image_size = getimagesize(trim('letter.jpg'));
               print(" <area shape='253,275,380,294' href=\"javascript:photo_open('photo_display.php?photo=".trim('letter.jpg&text=Although often comic series specific, and issue specific, fan mail could possibly give us an idea about the issues on the mind of a comic book reader at the time the comic was read.')."','".$image_size[0]."','".($image_size[1]+60)."');\" alt='FAN MAIL' coords='253,275,380,294'></area> ");
            ?>

            </map>
         </a>
      </div>


      <div class="timelinemenu"><img src="images/menubuttonssized.jpg" height=39 width=498 usemap="#map" border="none"></img>      
         <a name="#map">
            <map name="map">
               <area shape="9,9,63,25" href="index.html" alt="HOME" coords="9,9,63,25"></area>
               <area shape="114,11,200,27" href="contents.html" alt="CONTENTS" coords="114,11,200,27"></area>
               <area shape="241,10,282,25" href="timeline.php" alt="BACK" coords="241,10,282,25"></area>
               <area shape="336,10,378,27" href="openingvalue.html" alt="NEXT" coords="336,10,378,27"></area>
               <area shape="423,8,479,25" href="index.html" alt="INDEX" coords="423,8,479,25"></area>
            </map>
         </a>
      </div>

   </body>
</html>