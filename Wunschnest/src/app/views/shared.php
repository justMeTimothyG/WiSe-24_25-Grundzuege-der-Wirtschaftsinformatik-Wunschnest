<?php
# Lade Datenbank
include_once BASE_PATH . '/app/config/database.php';

# Lade Controller
include_once BASE_PATH . '/app/controllers/WishlistController.php';
include_once BASE_PATH . '/app/controllers/UserController.php';
include_once BASE_PATH . '/app/controllers/CategoryController.php';
include_once BASE_PATH . '/app/controllers/WishController.php';

# Initialisiere Datenbank und Controller
$pdo = getDatabaseConnection();
$wishlistController = new WishlistController($pdo);
$wishController = new WishController($pdo);

# Speichere Token aus GET Parameter im Link
$token = $_GET['token'];

# Wenn kein Token angegeben dann leite zur Startseite weiter
if (!isset($_GET['token'])) {
    header("Location: /index.php");
    exit();
};

# Lade Wunschlist
$wishlist = $wishlistController->getWishlistBySharetoken($token);


# setze den Titel der Website
$title = "Wunschnest - " . $wishlist['name'];

# Lade den HEAD HTML Bereich
include BASE_PATH . '/components/includes/basic-head.php';

?>
<!-- Script für den Share-Link -->
<script src="/js/filter-shared.js" defer></script>

<title><?php echo $title ?></title>
</head>

<body>
    <div class="flex dark:bg-gray-900 dark:text-white">

        <div class="w-full flex flex-col min-h-screen">

            <!-- Banner Image  -->
            <div class="flex flex-col justify-center items-center bg-gradient-to-br from-orange-600 to-rose-800 pb-24 pt-16">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse mb-10">
                <img src="/assets/logo.svg" class="h-8" alt="Wunschnest Logo" />
                <span class="self-center whitespace-nowrap text-2xl opacity-75 font-semibold">WunschNest</span>
            </a>
                <h1 class="text-4xl font-bold tracking-tight mb-4 text-center"><?php echo $wishlist['name'] ?></h1>
                <?php
                if (!empty($wishlist['target_date'])) {
                ?>
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        <?php
                        echo date_create($wishlist['target_date'])->format('d.m.Y');

                        $diff = date_diff(date_create($wishlist["target_date"]), date_create());
                        # diff in Zahl umwandeln
                        $daysUntil = $diff->format("%a");

                        if (date_create($wishlist['target_date']) < date_create()) {
                            $daysUntil = -$daysUntil; // Negativ wenn schon vergangen
                        }

                        if ($daysUntil == NULL) {
                            $daysUntilString = "";
                        } else {
                            if ($daysUntil == 0) {
                                $daysUntilString = "(Heute 🎉)";
                            } else if ($daysUntil == 1) {
                                $daysUntilString = "(Morgen 🎉)";
                            } else if ($daysUntil < 0) {
                                $daysUntilString = "(seit " . $daysUntil * -1 . " Tagen vergangen 🐛)";
                            } else {
                                $daysUntilString = "(in " . $daysUntil . " Tagen)";
                            }
                        }
                        echo "<span> " . $daysUntilString . "</span>";
                        ?>
                        
                    </div>
                    <p class="text-gray-600 dark:text-gray-200 mt-8">
                        <?php echo $wishlist['description'] ?>
                    </p>
                <?php
                }
                ?>
            </div>
            <!-- Main Content -->
            <div class="mx-auto w-full max-w-screen-xl flex flex-col flex-grow p-8 pb-0">


                <!-- Kategorien Filter -->
                <div class="flex flex-wrap gap-4 mb-6">
                    <?php

                    # Wünsche abholen
                    $wishes = $wishController->getWishesByWishlist($wishlist['wishlist_id']);
 
                    # Filter all Wishes for Distinc Categories
                    $categories = [];

                    foreach ($wishes as $wish) {
                        $categoryName = $wish['category_name'];
                        $found = false;


                        # Gehe durch bestehende Kategories und prüfe, ob diese schon vorhanden ist.
                        foreach ($categories as &$category) {
                            if ($category['name'] == $categoryName) {
                                $category['wish_count']++;
                                $found = true;
                                break;
                            }
                        }

                        # Wenn nicht gefunden füge einen Eintrag hinzu mit der Anzahl 1 
                        if (!$found) {
                            $categories[] = ["name" => $categoryName, "wish_count" => 1];
                        }
                        unset($category);

                    }

                    // } else {

                    # Importiere Funktion um Kategorien mit Anzahl anzuzeigen
                    include BASE_PATH . "/components/elements/category-counter-tag.php";

                    # Durch das Array durchgehen und einzelne Kategorien anzeigen
                    foreach ($categories as $kategorie) {
                        echo categoryCounterTag($kategorie["name"], $kategorie["wish_count"]);
                    }
                    ?>
                    <button
                    type="button"
                    class="category-reset hidden relative items-center rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-950 dark:bg-red-600 dark:text-gray-200 dark:hover:bg-red-800 dark:hover:text-gray-300 dark:focus:ring-gray-700"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>

                <!-- Tabelle der Wünsche -->
                <div class="masonry">

                    <?php

                        include BASE_PATH .'/components/elements/wish-card.php';

                        foreach ($wishes as $wish) {
                            echo wishlistCardItem($wish['name'], $wish['price'], $wish['description'], $wish['category_name'], $wish['url'], $wish['image_url']);
                        }

                    ?>


                </div>

                <?php

                    include BASE_PATH .'/components/elements/bottom-cta.php';
?>  


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