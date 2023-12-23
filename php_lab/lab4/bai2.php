<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
        body{
            text-align: center;
        }
        img.uploaded-image {
            max-width: 800px; /* Đặt chiều rộng tối đa */
            max-height: 600px; /* Đặt chiều cao tối đa */
            width: auto; /* Cho phép ảnh tự điều chỉnh chiều rộng */
            height: auto; /* Cho phép ảnh tự điều chỉnh chiều cao */
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <h1>Upload an Images</h1>
        <input type="file" id="myfile" name="file" required>
        <button type="submit">Upload</button>
    </form>
    
    <?php
    $uploadDir = 'uploads/';
   if(isset($_FILES['file']) && $_FILES['file']['error'] === 0){
        $allow = ['jpg', 'jpeg', 'png', 'gif'];
        if (isset($_FILES['file'])) {
            if (!file_exists($uploadDir) && !is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $file_name = $_FILES['file']['name'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if (in_array($ext, $allow)) {
                if (file_exists($uploadDir . $file_name)) {
                    echo "<script>alert('File already exists!');</script>";
                } else {
                    $image_info = getimagesize($file_tmp);
                    if ($image_info !== false) {
                        move_uploaded_file($file_tmp, $uploadDir . $file_name);
                        $uploadedFile = $uploadDir . $file_name;
                        echo "<script>alert('File uploaded successfully!');</script>";

                        // Display uploaded image
                        echo "<br>";
                        echo "<img src='$uploadedFile' alt='Uploaded Image' class='uploaded-image'>";
                    } else {
                        echo "<script>alert('Uploaded file is not a valid image!');</script>";
                    }
                }
            } else {
                echo "<script>alert('File type not allowed!');</script>";
            }
        }
    }
    ?>
</body>
</html>
