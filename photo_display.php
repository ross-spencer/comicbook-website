<head>
   <title><?PHP print($_GET["photo"]);?></title>
   <link href="css/comics.css" rel="stylesheet" type="text/css"></link>
   <style type="text/css">
      <!--
      -->
   </style>
</head>

<?PHP 

$photo = $_GET["photo"];

$photo_size = getimagesize("$photo"); ?>	

<body bgcolor="#FFFFFF" marginheight="0" marginwidth="0" leftmargin="0" topmargin="0" rightmargin="0">

   <img src="<?PHP print($photo); ?>" <?PHP print($photo_size[3]); ?> name="photo">

	<?php $text = $_GET["text"]; ?>

   <div class="win"><?PHP print($text); ?></div>

</body>
</html>

   