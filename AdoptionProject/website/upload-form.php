<!DOCTYPE html>
<html lang="en">
<head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
		<br></br>
		Text to be inserted : 
		<input type="text" name="text" />
		<br></br>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</body>
</html>