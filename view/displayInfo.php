<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<p>Invalid request method. Please submit the form first.</p>';
    exit;
}

if (!isset($_POST['submit'])) {
    echo '<p>No form data submitted. Please use the resume form.</p>';
    exit;
}

$folder = '../assets/uploads/';

    if(!is_dir($folder)){
        mkdir($folder, 0777, true);
    }

    $fileName = '';
    $path = '';

    if (!empty($_FILES['profile']['name']) && is_uploaded_file($_FILES['profile']['tmp_name'])) {
        $fileName = basename($_FILES['profile']['name']);
        $tmp_file = $_FILES['profile']['tmp_name'];
        $path = $folder . $fileName;

        if (!move_uploaded_file($tmp_file, $path)) {
            $path = '';
        }
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Generator</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.svg" type="image/x-icon">
</head>
<body>

    <div class="resume-actions">
        <button type="button" class="action-btn" onclick="history.back()"><i class="fa-solid fa-arrow-left"></i> Go Back</button>
        <button type="button" class="action-btn" id="download-image-btn"><i class="fa-solid fa-image"></i> Download as Image</button>
    </div>

    <div class="resume-summary">
        <div class="resume-left">
            <div class="resume-photo">
                <?php if(!empty($fileName)): ?>
                    <img src="<?= $path ?>" alt="Profile Photo">
                <?php endif; ?>
            </div>
            <h1><?= htmlspecialchars($_POST['name']) ?></h1>
            <h2><?= htmlspecialchars($_POST['title'] ?? '') ?></h2>
            <div class="contact-block">
                <?php if(!empty($_POST['phone'])): ?><p><i class="fa-solid fa-phone"></i> <?= htmlspecialchars($_POST['phone']) ?></p><?php endif; ?>
                <?php if(!empty($_POST['email'])): ?><p><i class="fa-solid fa-envelope"></i> <?= htmlspecialchars($_POST['email']) ?></p><?php endif; ?>
                <?php if(!empty($_POST['facebook'])): ?><p><i class="fa-brands fa-facebook"></i> <?= htmlspecialchars($_POST['facebook']) ?></p><?php endif; ?>
                <?php if(!empty($_POST['address'])): ?><p><i class="fa-solid fa-house"></i> <?= htmlspecialchars($_POST['address']) ?></p><?php endif; ?>
            </div>
        </div>

        <div class="resume-right">
            <section>
                <h3>PROFILE</h3>
                <p><?= nl2br(htmlspecialchars($_POST['profile-disc'] ?? '')) ?></p>
            </section>

            <section>
                <h3>EDUCATION</h3>
                <p><?= nl2br(htmlspecialchars($_POST['education'] ?? 'No education details provided.')) ?></p>
            </section>

            <section>
                <h3>EXPERIENCE</h3>
                <p><?= nl2br(htmlspecialchars($_POST['experience'] ?? 'No experience details provided.')) ?></p>
            </section>

            <section>
                <h3>SKILLS &amp; LEVEL</h3>
                <?php for ($i = 1; $i <= 3; $i++):
                    $skillName = trim($_POST["skill_name_{$i}"] ?? '');
                    $skillLevel = intval($_POST["skill_level_{$i}"] ?? 0);
                    if ($skillName !== ''):
                ?>
                <div class="skill-line">
                    <span><?= htmlspecialchars($skillName) ?></span>
                    <div class="skill-bar">
                        <div class="skill-fill" style="width: <?= $skillLevel ?>%;"></div>
                    </div>
                    <strong><?= $skillLevel ?>%</strong>
                </div>
                <?php endif; endfor; ?>
            </section>

            <section>
                <h3>Awards</h3>
                <p><?= nl2br(htmlspecialchars($_POST['awards'] ?? 'No awards listed.')) ?></p>
            </section>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
<script src="https://kit.fontawesome.com/d209aca3e0.js" crossorigin="anonymous"></script>
<script>
    const imageBtn = document.getElementById('download-image-btn');
    imageBtn.addEventListener('click', () => {
        const actions = document.querySelector('.resume-actions');
        const summary = document.querySelector('.resume-summary');

        actions.style.visibility = 'hidden';

        html2canvas(summary, {backgroundColor: '#0b1120', scale: 2}).then(canvas => {
            const link = document.createElement('a');
            link.download = 'resume.png';
            link.href = canvas.toDataURL('image/png');
            link.click();
            actions.style.visibility = 'visible';
        }).catch(err => {
            actions.style.visibility = 'visible';
            alert('Error generating image: ' + err.message);
        });
    });
</script>
</body>
</html>

