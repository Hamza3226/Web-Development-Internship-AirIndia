<?php

?>

<body>

			

			<link rel="stylesheet" type="text/css" href="indexupload.css">	
			
	 <h1>
					<a href="http://www.airindia.in" target="_blank" title="Flying Returns">
						<img width="208" height="71" title="Flying Returns" alt="Flying Returns" src="new-logo.png" span style="cursor:pointer">
						
					</a>

					<a href="http://www.staralliance.com" target="_blank" title="Star Alliance">
						<img width="253" height="" title="Star Alliance" alt="Star Alliance" src="new-star-allinace-logo.png" />
					</a>

	</h1>
	
	
	<marquee  scrollamount="5"> 
		<U>To know more about us</U> 
		<a href="https://en.wikipedia.org/wiki/Air_India">click here</a>
	</marquee>
	
	<br><br>
	
	
	 <div class = "vertical"></div> <hr>
	
	<h2>
	<U>NOTICE</U>
	</h2>

	
<div class= "box">
	<b>UPLOAD FILES HERE</b>
	<br><br>
	<form action="upload.php" enctype="multipart/form-data" method="POST">
		<input type="file" name="file">
		<br><br>
		<input type="submit" value="Upload" span style="cursor:pointer">
	</form>
	
</div>
</body>

<?php

$files = scandir("uploads");

for ($a = 2; $a < count($files); $a++)
{
    ?>
	
	<p>
        <?php echo $files[$a]; ?>
        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
    </p>
    <?php
}
