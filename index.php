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
        <div class="hero-container">
        <h1>Build Your Professional Resume in Minutes</h1>
        <div class="hero-btn">
            <a href="#generate"><button class="resume">Create My CV Now</button></a>
            <a href="#contacts"><button class="call">Keep in Touch</button></a>
        </div>
        </div>
    </section>
    <section class="generate" id="generate">
        <h2>Resume Input Form</h2>
        <form action="./view/displayInfo.php" method="POST" enctype="multipart/form-data" class="resume-form">
            <fieldset>
                <legend>Personal Info</legend>
                <div class="row">
                    <label>Name <input type="text" placeholder="Enter your name" name="name" required></label>
                    <label>Title <input type="text" placeholder="e.g., Frontend Developer" name="title"></label>
                </div>
                <div class="row">
                    <label>Phone <input type="tel" placeholder="Enter your phone" name="phone"></label>
                    <label>Email <input type="email" placeholder="Enter your email" name="email"></label>
                </div>
                <div class="row">
                    <label>Address <input type="text" placeholder="Enter your address" name="address"></label>
                    <label>Facebook <input type="text" placeholder="Facebook URL" name="facebook"></label>
                </div>
                <div class="row profile-upload">
                    <label>Photo Upload <input type="file" name="profile"></label>
                </div>
            </fieldset>

            <fieldset>
                <legend>Profile Summary</legend>
                <label>
                    Tell us about your experience
                    <textarea name="profile-disc" placeholder="Write a short summary..." rows="5"></textarea>
                </label>
            </fieldset>

            <fieldset>
                <legend>Education & Experience</legend>
                <label>Education
                    <textarea name="education" placeholder="School, degree, dates" rows="3"></textarea>
                </label>
                <label>Experience
                    <textarea name="experience" placeholder="Job roles, achievements" rows="3"></textarea>
                </label>
                <label>Awards
                    <textarea name="awards" placeholder="List relevant awards" rows="2"></textarea>
                </label>
            </fieldset>

            <fieldset>
                <legend>Skills (Drag to set level)</legend>
                <div class="skill-row">
                    <label>Skill 1 <input type="text" name="skill_name_1" placeholder="e.g., JavaScript"></label>
                    <div class="range-wrap">
                        <input type="range" name="skill_level_1" min="0" max="100" value="75" oninput="this.nextElementSibling.textContent=this.value+'%'">
                        <span>75%</span>
                    </div>
                </div>
                <div class="skill-row">
                    <label>Skill 2 <input type="text" name="skill_name_2" placeholder="e.g., CSS"></label>
                    <div class="range-wrap">
                        <input type="range" name="skill_level_2" min="0" max="100" value="70" oninput="this.nextElementSibling.textContent=this.value+'%'">
                        <span>70%</span>
                    </div>
                </div>
                <div class="skill-row">
                    <label>Skill 3 <input type="text" name="skill_name_3" placeholder="e.g., PHP"></label>
                    <div class="range-wrap">
                        <input type="range" name="skill_level_3" min="0" max="100" value="65" oninput="this.nextElementSibling.textContent=this.value+'%'">
                        <span>65%</span>
                    </div>
                </div>
            </fieldset>

            <button type="submit" name="submit" class="submit-btn">Submit Resume</button>
        </form>
    </section>
    <section class="contacts" id="contacts">
        <h2>Get In Touch</h2>
        <div class="contact-content">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><i class="fa-solid fa-envelope"></i> Email: torresashleyclint@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i> Phone: +639756389389</p>
                <p><i class="fa-solid fa-house"></i> Address: Brgy. Margen NHA, Ormoc City, Leyte 6541</p>
                <p><i class="fa-solid fa-globe"></i> Website: www.resume-generator.free.nf</p>
            </div>
            <div class="contact-form">
                <h3>Send us a message</h3>
                <form action="#" method="post">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <textarea placeholder="Your Message" rows="4" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <h3>Resume Generator</h3>
                <p>Create professional resumes in minutes with our easy-to-use tool.</p>
            </div>
            <div class="footer-right">
                <div class="footer-links">
                    <a href="#hero">Home</a>
                    <a href="#generate">Generate</a>
                    <a href="#contacts">Contacts</a>
                </div>
                <div class="social-links">
                    <a href="#" title="Facebook"></a>
                    <a href="#" title="Twitter"></a>
                    <a href="#" title="LinkedIn"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Resume Generator. All rights reserved.</p>
        </div>
    </footer>
    
    
    
    
    
    
    
    
    
    
    
    




</body>
<script src="./assets/js/index.js"></script>
<script src="https://kit.fontawesome.com/d209aca3e0.js" crossorigin="anonymous"></script>
</html>