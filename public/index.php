<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Slides - Infocorp</title>

    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
</head>
<body>
<?php
$files = scandir("assets/img/slides");
$files = array_slice($files, 2);
?>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php foreach ($files as $file): ?>
            <div class="swiper-slide">
                <img src="<?php echo "assets/img/slides/" . $file; ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Swiper -->
<script src="assets/js/swiper.min.js"></script>
<script>
    var Swiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 5000,
        },
    });
</script>
</body>
</html>