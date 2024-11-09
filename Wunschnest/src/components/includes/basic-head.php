<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/assets/logo.png">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Script für Dark Mode -->
    <script src="/js/dark-mode.js" defer></script>
    <!-- Script um Toast Element zu entfernen -->
    <script src="/js/remove-toast.js" defer></script>
    <!-- Scripts für Lottie Animation -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
    <script src="/js/logo-lottie-animation.js" defer></script>
    <title><?php echo $title ?></title>
    <?php
    # Console.log The Session and POST Variabel if Available
    echo "<script>console.log('Session:', " . json_encode($_SESSION) . ");</script>";
    if (isset($_POST)) {
        echo "<script>console.log('POST:', " . json_encode($_POST) . ");</script>";
    }
    ?>