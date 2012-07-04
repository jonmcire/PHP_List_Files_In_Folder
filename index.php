<?php
$pos = $_GET['pos'];
if (strlen($pos)==0){$pos=0;}

// Set the pate to the images
$dir = "images/";

// onlt take files of filetype JPG
$images = glob($dir . "*.jpg");

// Keep track of the total number of images in the folder
$counter=0;

// create an array of file names
foreach($images as $image)
{
	$imgs[] = "$image"; 
	$counter++;
}

function getPrevious($currPos)
{
	if($currPos-1 >= 0)
	{
		return $currPos-1;	
	} else {
		return 0;	
	}
	
}

function getNext($totalimg, $currPos)
{
	if(($currPos+1) >= $totalimg)
	{
		return 0;	
	} else {
		return $currPos+1;
	}
	
}
?>

<html>
	<head>
		<title>PHP Image Example</title>
	</head>
	<body>
		<a href="index.php?pos=<?php echo getPrevious($pos); ?>">Prev</a>
		<img id="myDiv" src="<?php echo $imgs[$pos]; ?>" width="200px" />
		<a href="index.php?pos=<?php echo getNext($counter, $pos); ?>">Next</a>
		<br /><br />
		<input type="text" size="50" name="imgname" id="imgname" value="<?php echo $imgs[$pos]; ?>" readonly />
		
	</body>
</html>