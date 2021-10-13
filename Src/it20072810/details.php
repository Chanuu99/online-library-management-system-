<?php
	require 'config.php';
	
	include("../it21068546/Header.php");
	
	$isbn = $_GET['ISBN']; // set isbn
	
	$info = "";
	$dir = "../it20029586/";
	
	$sql = "SELECT * FROM book WHERE ISBN=".$isbn;
	
	// $book = mysqli_query($conn, $sql);	
	$book_query = $conn -> query($sql);
	
	$info .= '<!DOCTYPE html><html><head>
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<meta charset="utf-8">
					<meta name="keywords" content="INTUITIVE">
					<meta name="description" content="">
					<meta name="page_type" content="np-template-header-footer-from-plugin">
					<title>Page 1</title>
					<link rel="stylesheet" href="css/nicepage.css" media="screen">
					<link rel="stylesheet" href="css/Page-1.css" media="screen">
					<script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
					<script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
					<meta name="generator" content="Nicepage 3.27.0, nicepage.com">
					<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
		
		
					<script type="application/ld+json">{
						"@context": "http://schema.org",
						"@type": "Organization",
						"name": ""
				}</script>
					<meta name="theme-color" content="#478ac9">
					<meta property="og:title" content="Page 1">
					<meta property="og:type" content="website">
			  </head>';
	
	if(mysqli_num_rows($book_query) == 1)	{
		$book = $book_query->fetch_assoc();
		
		
		
		// $info .= '<img class="u-image u-image-round u-radius-27 u-image-1" src=$dir./image/".$book['Cover_pic'].".jpg\"".alt="" data-image-width="1669" data-image-height="2560" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down">';
		// $info .= '<img class="u-image u-image-round u-radius-27 u-image-1" src="'.$dir.'image/'.$book['Cover_pic'].'"'.'alt="" data-image-width="1669" data-image-height="2560" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down">';
		
		$info .= '<body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">';
		$info .='<section class="u-clearfix u-section-1" id="sec-6176"><div class="u-clearfix u-sheet u-sheet-1">';
		
		$info .= '<img class="u-image u-image-round u-radius-27 u-image-1 animated slideInDown-played" src="'.$dir.'image/'.$book['Cover_pic'].'"'.'alt="" data-image-width="1669" data-image-height="2560" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down" style="will-change: transform; animation-duration: 1000ms;">';
			  
		
		$info .= '<h6 class="u-text u-text-1">';
		$info .= "<br><b>ISBN : </b><br>".$book['ISBN']."<br>";
		$info .= "<br><b>Book Name : </b><br>".$book['Book_Name']."<br>";
		$info .= "<br><b>Author : </b><br>".$book['Author']."<br>";
		$info .= "<br><b>Edition : </b><br>".$book['Edition']."<br>";
		$info .= "<br><b>Category : </b><br>".$book['Category']."<br>";
		$info .= "<br><b>Published Date : </b><br>".$book['Date']."<br>";
		
		$info .= '</h6>';
		
		$info .= '<a href="'.$dir.'file/'.$book['Book_Name'].'.pdf" class="u-btn u-button-style u-btn-1">DOWNLOAD</a>';
		
		$info .= '</div></section>';
		
		$info .= '</body></html>';
		
		
		echo $info;
	}
	else{
		echo "<body><b>Error occured</b></body></html>";
	}
	
	include("../it21068546/Footer.php");
?>
