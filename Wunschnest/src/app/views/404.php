<?php

# Variablen definieren für die Homepage
$title = "WunschNest - 404";

include BASE_PATH . '/components/includes/basic-head.php';

?>

</head>

<body>
    <div class="min-h-screen dark:bg-gray-900 flex flex-col">
        <!-- Navbar Einfügen aus Komponenten -->
        <?php include BASE_PATH . '/components/includes/navbar.php'; ?>

        <!-- 404 Seite -->
        <div class="mx-auto max-w-screen-xl dark:text-white flex-grow flex flex-col items-center">
            <div class="mx-auto mb-16 mt-16 w-10/12 flex-grow flex flex-col justify-center text-center">
                <div>

                    <span class="mb-2 text-lg text-orange-500">Upps</span>
                    <h1 class="my-4 mb-8 text-5xl font-semibold text-gray-900 dark:text-gray-200">404</h1>
                    <p class="dark:text-gray-400">Da ist wohl was schief gelaufen. Das kennen wir so nicht. Aber hier findest du den <a href="/index.php" class="underline hover:text-blue-900 dark:hover:text-blue-400">Weg zurück zur Startseite.</a></p>
                </div>
            </div>


            <!-- Footer Section einfügen    -->
            <?php include BASE_PATH . '/components/includes/footer.php'; ?>
        </div>
    </div>
</body>

</html>