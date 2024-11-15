<?php
# Lade die Config Datei 
include_once '../config.php';

# Lade Datenbank
include_once BASE_PATH . '/app/config/database.php';

# Lade Controller
include_once BASE_PATH . '/app/controllers/WishlistController.php';
include_once BASE_PATH . '/app/controllers/UserController.php';
include_once BASE_PATH . '/app/controllers/CategoryController.php';

# Initialisiere Datenbank und Controller
$pdo = getDatabaseConnection();
$wishlistController = new WishlistController($pdo);
$userController = new UserController($pdo);
$categoryController = new CategoryController($pdo);

# Prüfe ob Testdaten geladen werden sollen oder die des Nutzers: 
if (isset($_GET['demo']) && $_GET['demo'] == 'true') {
    # Da Demo Nutzer: Benutze ID 1 für den ersten User in Datenbank, der der Test User ist.
    $user_id = 1;
} else {
    $user = $userController->getUserByUsername($_SESSION['username']);
    $user_id = $user['user_id'];
}

# Hole die Wunschlistn des Users   
$wishlists = $wishlistController->getWishlistsByUser($user_id);

# Hole die Favoriten des Users
$favorites = $wishlistController->getFavoritesByUser($user_id);



$title = "Demo Dashboard";

include BASE_PATH . '/components/includes/basic-head.php';

?>

<title><?php echo $title ?></title>
</head>

<body>
    <div class="flex dark:bg-gray-900 dark:text-white">
        <?php
        include BASE_PATH . '/components/includes/dashboard-sidebar.php';
        ?>
        <div class="w-full flex flex-col">
            <!-- Banner Image  -->
            <div class="h-32 bg-teal-700 bg-gradient-to-tr from-cyan-500">

            </div>



            <!-- Main Content -->
            <div class="mx-auto w-full max-w-screen-xl flex flex-col flex-grow p-8 pb-0">
                <!-- Breadcrumbs Navigation -->
                <?php
                include BASE_PATH . '/components/elements/dashboard-breadcrumb.php';

                echo dashboard_breadcrumb(true);

                ?>
                <?php
                include BASE_PATH . '/components/includes/toast.php';
                ?>
                <!-- Darstellung der Listen -->
                <div class="mb-4 flex justify-between align-middle">

                    <h2 class="mb-4 dark:text-gray-400">
                        Meine Listen
                    </h2>
                    <div class="inline-flex rounded-md items-center shadow-sm" role="group">
                        <button type="button" class="py-2 px-4 text-sm font-small text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:text-white dark:hover:bg-green-700">nur Geteilt</button>
                    </div>
                </div>
                <div class="mb-8 sm:rounded-lg">
                    <div class="hb us asn asx cni dmm">
                        <ul class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 items-stretch">
                            <?php
                            # Liste erstellen der Wunschlisten

                            # Importiere Funktion, um Kacheln zu erstellen
                            include BASE_PATH . "/components/elements/wunschlisten.php";

                            # Gehe durch die Daten und erstelle eine Kachel pro Liste
                            foreach ($wishlists as $liste) {
                                $daysUntil = NULL;
                                # Prüfe, ob es ein  target_date gibt
                                if (!empty($liste["target_date"])) {
                                    # Differenz in Tagen zum Datum berechnen
                                    $diff = date_diff(date_create($liste["target_date"]), date_create());
                                    # diff in Zahl umwandeln
                                    $daysUntil = $diff->format("%a");
                                    if (date_create($liste['target_date']) < date_create()) {
                                        $daysUntil = -$daysUntil; // Negativ wenn schon vergangen
                                    }
                                }

                                # Erstelle Kachel
                                echo wunschlistenAlternative($liste["name"], $liste["wish_count"], $liste["is_public"] == 1, $liste["wishlist_id"], $daysUntil);
                            }
                            ?>
                            <a href="/index.php?page=create&type=list" class="cursor-pointer flex dark:text-gray-500 hover:bg-blue-200 hover:text-blue-700 items-center justify-center overflow-hidden rounded-xl border-[1px] border-gray-100 bg-gray-50 dark:border-gray-950 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <li
                                    class="">

                                    <div class="flex items-center justify-between gap-4 p-6">
                                        Neue Liste erstellen
                                    </div>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>

                <h2 class="mb-4 dark:text-gray-300">
                    Statistiken
                </h2>
                <div class="flex gap-8 flex-wrap">

                    <?php

                    # Hole statistiken des Benutzers
                    $statistics = $wishlistController->getStatsByUser($user_id);

                    # Kreiere eine Tabelle die die Statistiken als Überschrift mapped
                    $statistics_map = [
                        "wishlist_count" => "Listen Gesamt",
                        "wish_count" => "Wünsche",
                        "shared_count" => "Aktiv Geteilt",
                        "archived_count" => "Archiviert"
                    ];

                    # Lade Komponente
                    include BASE_PATH . "/components/elements/dashboard-statistic-card.php";

                    # Gehe durch die Daten und erstelle eine Kachel pro Liste
                    foreach ($statistics_map as $key => $value) {
                        echo dashboard_statistic_card($value, $statistics[$key]);
                    }


                    ?>

                </div>
                <h2 class="mb-4 mt-8 dark:text-gray-300">
                    Kategorien
                </h2>
                <div class="flex flex-wrap gap-4">
                    <?php
                    # Lade Kategorien
                    $categories = [];

                    # Wenn user_id = 1 (Test Nutzer), benutzer Testdaten, sonst die echten Daten
                    // if ($user_id == 1) {
                    //     $categories = [
                    //         ["name" => "Elektronik", "wish_count" => 13],
                    //         ["name" => "Haushalt", "wish_count" => 5],
                    //         ["name" => "Familie", "wish_count" => 2],
                    //         ["name" => "Wohnen", "wish_count" => 1],
                    //         ["name" => "Hobby", "wish_count" => 3],
                    //         ["name" => "Sonstiges", "wish_count" => 1]
                    //     ];
                    // } else {
                    $categories = $categoryController->getCategoriesByUser($user_id);

                    # Importiere Funktion um Kategorien mit Anzahl anzuzeigen
                    include BASE_PATH . "/components/elements/category-counter-tag.php";

                    # Console.log the categories
                    echo "<script>console.log(" . json_encode($categories) . ");</script>";
                    # Durch das Array durchgehen und einzelne Kategorien anzeigen
                    foreach ($categories as $kategorie) {
                        echo categoryCounterTag($kategorie["name"], $kategorie["wish_count"]);
                    }
                    ?>

                </div>

                <div class="mt-auto">

                    <?php
                    # Footer Importieren
                    include BASE_PATH . '/components/includes/footer.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>