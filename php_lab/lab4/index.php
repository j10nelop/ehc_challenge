<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    
    <style>
        /* CSS cho giao diện của form */
        .upload-custom {
            background-color: #eae1e1;
            border: 1px solid #4d4d4d;
            padding: 2px;
            cursor: pointer;
            border-radius: 6px;  
            margin-right: 155px;  
        }
        .upload-custom:hover {
            background-color: #c1c1c1;
        }
        .upload-custom:active {
            background-color: gray;
        }
        body {
            text-align: center;
        }
        /* CSS cho kích cỡ ảnh */
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
        <h1>UPLOAD an Image</h1>
        <input type="file" name="file" id="myfile" style="display:none;">
        <label for="myfile" class="upload-custom">Choose File</label>
        <button type="submit">Upload</button>
    </form>
<br>

    <?php
        // Khai báo biến để lưu thông tin file
        $fileInfo = '';
        // Đường dẫn thư mục upload
        $uploadDir = 'uploads/';

        // Mảng chứa các định dạng file cho phép
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        // Kiểm tra và tạo thư mục "uploads" nếu chưa tồn tại
        if (!file_exists($uploadDir) && !is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Tạo thư mục "uploads" với quyền truy cập 0777
        }

        // Kiểm tra khi form được gửi đi và có file được chọn
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
            $fileName = $_FILES['file']['name'];
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            if (in_array($fileExt, $allowedExtensions)) {
                $fileInfo = getimagesize($_FILES['file']['tmp_name']);

                if ($fileInfo !== false) {
                    // Di chuyển file đã tải lên đến thư mục "uploads" với tên file gốc
                    move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir . $fileName);
                } else {
                    $fileInfo = ''; // Reset file info if not an image
                    echo "<script>alert('File uploaded is not an image.');</script>";
                }
            } else {
                echo "<script>alert('invalid file upload');</script>";
            }
        }

        // Hiển thị ảnh nếu là hình ảnh và file đã tải lên
        if ($fileInfo !== '' && $fileInfo !== false) {
            $filePath = $uploadDir . $fileName;
            echo "<img src='$filePath' alt='Uploaded Image' class='uploaded-image'>";
        }
    ?>
</body>
</html>
