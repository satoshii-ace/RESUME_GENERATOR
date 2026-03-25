<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Generator</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="icon" type="image/svg+xml" href="./assets/icons/favicon.svg">
</head>
<body>
    <nav>
        <div class="title">
            <h1>RESUME GENERATOR</h1>
        </div>
        <ul class="nav-links">
            <li><a href="#hero">Home</a></li>
            <li><a href="#generate">Generate</a></li>
            <li><a href="#contacts">Contacts</a></li>
        </ul>
    </nav>

    <section class="hero" id="hero">
        <h1>Build Your Professional Resume in Minutes</h1>
        <div class="hero-btn">
            <button class="resume">Create My CV Now</button>
            <button class="call">Keep in Touch</button>
        </div>
    </section>
    <section class="generate" id="generate">

    </section>
    <section class="contacts" id="contacts">

    </section>
    <footer>

    </footer>
    
    
    
    
    
    
    
    
    
    
    
    
    <form action="./view/displayInfo.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="Input your name" name="name"><br>
        <input type="number" placeholder="Input your age" name="age"><br>
        <input type="file" name="profile"><br>
        <input type="submit" value="submit" name="submit">
    </form>



</body>
<script src="./assets/js/index.js"></script>
</html>