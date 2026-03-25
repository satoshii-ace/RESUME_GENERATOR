<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>
    <h1>HOME</h1>
   
    <form action="./view/displayInfo.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="Input your name" name="name"><br>
        <input type="number" placeholder="Input your age" name="age"><br>
        <input type="file" name="profile"><br>
        <input type="submit" value="submit" name="submit">
    </form>

    <!-- <a href="./view/displayInfo.php?data=hello kalibangon">Go to display</a> -->

</body>
<script src="./assests/js/index.js"></script>
</html>