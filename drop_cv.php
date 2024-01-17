<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="drop_cv.css">
    <title>CV Upload</title>
</head>
<body>
    <div class="container">
        <form action="drop_cv_upload.php" method="POST" enctype="multipart/form-data">
            <label class="text1" for="pdf">Upload Your CV here (max 255KB)</label>
            <div class="pdf">Note : Only PDF version</div>
            <br>
            <input type="file" name="pdf" accept=".pdf" required>
            <br>
            <button type="submit">Upload</button>
        </form>
        <a href="designation.php"><button class='btn2'>Apply Later</button></a>
    </div>
</body>
</html>
