<?php

if(isset($_POST['submit'])){

    $folder = '../assets/uploads/';

    if(!is_dir($folder)){
        mkdir($folder, 0777, true);
    }

    $fileName = $_FILES['profile']['name'];
    $tmp_file = $_FILES['profile']['tmp_name'];

    $path = $folder . $fileName;

    move_uploaded_file($tmp_file, $path);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<img src="<?= $path ?> " alt="" width="200px">
    <p><?= $_POST['name'] ?></p>
    <p><?= $_POST['age'] ?></p>

</body>
</html>
<?php 
}

?>

