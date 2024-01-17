<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file is selected and no errors occurred
    if (isset($_FILES["pdf"]) && $_FILES["pdf"]["error"] == 0) {
        $allowedType = "application/pdf";
        $maxSize = 4255 * 1024; // 255KB in bytes

        $fileType = $_FILES["pdf"]["type"];
        $fileSize = $_FILES["pdf"]["size"];

        if ($fileType == $allowedType && $fileSize <= $maxSize) {
            $uploadPath = "CV/"; // Create a folder named "uploads" in the same directory as the PHP file
            $uploadFile = $uploadPath . basename($_FILES["pdf"]["name"]);

            if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $uploadFile)) {
                header("location: done.php");
            } else {
                echo "Error uploading PDF.";
                header("location: drop_cv.php");
            }
        } else {
            echo "Invalid file. Please upload a PDF file of up to 255KB.";
            header("location: drop_cv.php");
        }
    } else {
        echo "Please select a file to upload.";
        header("location: drop_cv.php");
    }
}
?>
