<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload </title>
    <style>
        .info {
            font-size: 1.2em;
            color: Yello;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Upload images</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple />
        <input type="submit" value="Upload File" name="submit" />
    </form>
    <div class="info">
        <?php
        if (isset($errorMsg)) {
            echo ("papa");
        }
        if (isset($successMsg)) {
            echo ($successMsg);
        }
        ?>
    </div>
</body>

<script src="uploads.js"></script>

</html>