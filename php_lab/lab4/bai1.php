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
    </style>

</head>
<body>
    <div class="upload-container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <h1>Upload-Image</h1>
            <label for="myfile" class="custom-upload">Choose File</label>
            <input type="file" id="myfile" name="file" style="display: none;" accept="image/*">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
                $fileName = $_FILES['file']['name'];
                $fileTmpName = $_FILES['file']['tmp_name'];
                $fileError = $_FILES['file']['error'];

                if ($fileError === 0) {
                    $fileInfo = getimagesize($fileTmpName);
                    if ($fileInfo !== false) {
                        move_uploaded_file($fileTmpName, $fileName);
                        echo '<output id="file-name" aria-live="polite">' . $fileName . '</output>';
                        echo '<br><img src="' . $fileName . '" alt="Uploaded Image" class="uploaded-image">';
                    } else {
                        echo 'The uploaded file is not an image.';
                    }
                }
            } else {
                echo '<output id="file-name" aria-live="polite"></output>';
            }
            ?><br><br>
            <button type="submit" name="submit">Submit</button>
            
        </form>
    </div>
</body>
</html>
