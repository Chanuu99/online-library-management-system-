<?php
	require '../config.php';
	
	// get isbn
	
	$isbn = $_GET['isbn']; // set isbn
	
	$info = "";
	$path = "../../it20029586/"
	
	$sql = "SELECT * FROM book WHERE ISBN=$isbn";
	
	$book = mysqli_query($conn, $sql);	
	
	$info .= '<img class="u-image u-image-round u-radius-27 u-image-1" src=$path./image/".$book['Cover_pic'] alt="" data-image-width="1669" data-image-height="2560" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down">';
	
	info .= '<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta charset="utf-8">
				<meta name="keywords" content="INTUITIVE">
				<meta name="description" content="">
				<meta name="page_type" content="np-template-header-footer-from-plugin">
				<title>Page 1</title>
				<link rel="stylesheet" href="nicepage.css" media="screen">
				<link rel="stylesheet" href="Page-1.css" media="screen">
				<script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
				<script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
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
		  </head>'
		  
	info .= '<body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">';
	
	$info .= "<br><b>ISBN : </b><br>$book['ISBN']<br>";
	$info .= "<br><b>Book Name : </b><br>$book['Book_Name']<br>";
	$info .= "<br><b>Author : </b><br>$book['Author']<br>";
	$info .= "<br><b>Edition : </b><br>$book['Edition']<br>";
	$info .= "<br><b>Category : </b><br>$book['Category']<br>";
	$info .= "<br><b>Published Date : </b><br>$book['Date']<br>";
	$info .= '<a href=$path."/file/".$book['Book_Name'] class="u-btn u-button-style u-btn-1">DOWNLOAD</a>';
	
	$info .= '</body></html>';
	
?>