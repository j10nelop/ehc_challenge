<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    
    <style>
        .custom-upload {
            background-color: #e6e5e5;
            border: 1px solid #1c1b1b;
            padding: 2px;
            cursor: pointer; 
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            border-radius: 7px;
            margin-right: 10px;
        }
        .custom-upload:hover {
            background-color: #999;
            color: #fff;
        }
        .custom-upload:active {
             background-color: gray;
             color: #fff;
        }
        .upload-container {
            text-align: center;
        }
        .uploaded-image {
            max-width: 300px;
            margin-top: 20px;
        }
        button {
            margin-left: -38px;
        }
    </style>

</head>
<body>
    <div class="upload-container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <h1>Upload-Image</h1>
            <label for="myfile" class="custom-upload">Choose File</label>
            <input type="file" id="myfile" name="file" style="display: none;" accept="image/*">
            
            <?php
            $fileInfo = '';
            $uploadDir = 'uploads/';

            if (!file_exists($uploadDir) && !is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Create the "uploads" directory if it doesn't exist
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
                $fileName = $_FILES['file']['name'];
                $fileTmpName = $_FILES['file']['tmp_name'];
                $fileError = $_FILES['file']['error'];

                if ($fileError === 0) {
                    $fileInfo = getimagesize($fileTmpName);
                    if ($fileInfo !== false) {
                        // Move the uploaded file to the "uploads" directory with a unique name
                        move_uploaded_file($fileTmpName, $uploadDir . $fileName);
                    } else {
                        echo 'The uploaded file is not an image.';
                    }
                }
            }

            // Display the file info or 'No file selected' if no file is chosen
            if ($fileInfo !== '') {
                echo '<output id="file-name" aria-live="polite">' . $fileName . '</output>';
                echo '<br><img src="' . $uploadDir . $fileName . '" alt="Uploaded Image" class="uploaded-image">';
            } else {
                echo '<output id="file-name" aria-live="polite">No file selected</output>';
            }
            ?>
            <br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
