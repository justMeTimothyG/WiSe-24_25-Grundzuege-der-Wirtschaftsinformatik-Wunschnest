<?php

# Variablen definieren für die Homepage
$title = "WunschNest - 404";

include BASE_PATH . '/components/includes/basic-head.php';

?>

<!-- Include Counter Script -->
<script src="/js/countdown.js" defer></script>
</head>

<body>
    <div class="min-h-screen dark:bg-gray-900 flex flex-col">
        <!-- Navbar Einfügen aus Komponenten -->
        <?php include BASE_PATH . '/components/includes/navbar.php'; ?>

        <!-- 404 Seite -->
        <div class="mx-auto max-w-screen-xl dark:text-white flex-grow flex flex-col items-center">
            <div class="mx-auto mb-16 mt-16 w-10/12 flex-grow flex flex-col justify-center text-center">
                <div>

                    <span class="mb-2 text-lg text-orange-500">Bis Bald!</span>
                    <h1 class="my-4 mb-8 text-5xl font-semibold text-gray-900 dark:text-gray-200">Erfolgreich ausgeloggt</h1>
                    <p class="dark:text-gray-400">Vielen Dank für deinen Besuch! Du wirst in <span id="countdown">15</span> Sekunden automatisch zur Startseite weitergeleitet. <a href="/index.php" class="underline hover:text-blue-900 dark:hover:text-blue-400">Zur Startseite</a></p>
                </div>
            </div>


            <!-- Footer Section einfügen    -->
            <?php include BASE_PATH . '/components/includes/footer.php'; ?>
        </div>
    </div>
</body>

</html>