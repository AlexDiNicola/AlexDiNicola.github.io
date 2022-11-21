<DOCTYPE html>
<html>
<head>
<style>
#main {
	width:100vh;
	height: 100vh;
}
</style>
</head>

<body>
<?php
  
// The location of the PDF file
// on the server
$filename = "dossierdiprogetto_snopex2022.pdf";
  
// Header content type
header("Content-type: application/pdf");
  
header("Content-Length: " . filesize($filename));
  
// Send the file to the browser.
readfile($filename);
?> 
</body>

</html>
