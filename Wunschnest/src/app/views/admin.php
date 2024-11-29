<?php

# Variablen definieren für die Homepage
$title = "WunschNest - ADMIN";

include BASE_PATH . '/components/includes/basic-head.php';

?>

</head>

<body>
    <div class="min-h-screen dark:bg-gray-900 flex flex-col">
        <!-- Navbar Einfügen aus Komponenten -->
        <?php include BASE_PATH . '/components/includes/navbar.php'; ?>
        
        <!-- Admin Seite -->
        <div class="mx-auto max-w-screen-xl dark:text-white flex-grow flex flex-col items-center px-4 md:px-0">
            
                    <!-- WARNING SECTION -->
                    <?php include BASE_PATH . '/app/admin/warning.php'; ?>
            <!-- BUTTONS FÜR ADMIN -->
            <div class="max-w-screen-lg">
                <a href="/admin.php?action=reset">
                    <button type="button" class="w-full min-w-[200px] focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-2xl px-16 py-4 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Datenbank neu initialisieren + Testdaten</button>
                </a>
                <!-- <a href="/admin.php?action=reset_min">
                    <button type="button" class="w-full min-w-[200px] focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-2xl px-16 py-4 me-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Datenbank neu initialisieren + minimale Testdaten</button>
                </a> -->
            </div>

            <!-- Footer Section einfügen    -->
            <?php include BASE_PATH . '/components/includes/footer.php'; ?>
        </div>
    </div>
</body>

</html>