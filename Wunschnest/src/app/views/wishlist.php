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
$userController = new UserController($pdo);
$categoryController = new CategoryController($pdo);
$wishController = new WishController($pdo);


# Prüfe ob Nutzer Session vorhanden ist: 
if (isset($_SESSION['username'])) {
    $user = $userController->getUserByUsername($_SESSION['username']);
    $user_id = $user['user_id'];
} else {
    $user_id = 1;
}

# Hole die Wunschliste des Users
$wishlist = $wishlistController->getWishlist($_GET['wishlist_id']);

# Hole die Favoriten des Users
$favorites = $wishlistController->getFavoritesByUser($user_id);



$title = "Wunschnest - " . $wishlist['name'];

include BASE_PATH . '/components/includes/basic-head.php';



?>
<!-- Script für den Share-Link -->
<script src="/js/share-link.js" defer></script>
<title><?php echo $title ?></title>
</head>

<body>
    <div class="flex dark:bg-gray-900 dark:text-white">
        <?php
        include BASE_PATH . '/components/includes/dashboard-sidebar.php';
        ?>

        <div class="w-full flex flex-col">
            <?php
            if (!isset($_SESSION['username'])) {
            ?>
                <!-- Banner Image  -->
                <div class="flex justify-center items-center h-32 bg-teal-700 bg-gradient-to-tr from-cyan-500">
                    <?php
                    include_once BASE_PATH . '/components/elements/test-user-info.php';
                    ?>
                </div>

            <?php
            }
            ?>

            <!-- Main Content -->
            <div class="mx-auto w-full max-w-screen-xl flex flex-col flex-grow p-8 pb-0">

                <!-- Breadcrumbs Navigation -->
                <?php
                include BASE_PATH . '/components/elements/dashboard-breadcrumb.php';

                echo dashboard_breadcrumb(false, $wishlist);

                ?>
                <?php
                include BASE_PATH . '/components/includes/toast.php';
                ?>
                <div class="mb-16">
                    <h1 class="text-4xl font-bold tracking-tight mb-4"><?php echo $wishlist['name'] ?></h1>
                    <!-- Details -->
                    <div class="flex gap-4 dark:text-gray-400 justify-start items-center">
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
                                echo '<div class="h-4 w-[2px] bg-gray-700"></div>';
                                ?>
                            </div>
                        <?php
                        }
                        ?>

                        <div class="flex items-center gap-1">
                            <span class="flex w-3 h-3 me-1 <?php echo $wishlist['is_public'] == 1 ? 'bg-green-500' : 'bg-gray-500' ?>  rounded-full"></span>
                            <?php echo $wishlist['is_public'] == 1 ? 'öffentlich' : 'privat' ?>
                        </div>
                        <div class="h-4 w-[2px] bg-gray-700"></div>
                        <div>
                            Erstellt am: <?php echo date_create($wishlist['created_at'])->format('d.m.Y') ?>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-200 mt-8">
                        <?php echo $wishlist['description'] ?>
                    </p>
                    <!-- Action Buttons like Share Link and Edit -->
                    <div class="mt-4 flex gap-2">
                        <!-- Bearbeiten -->
                        <button class=" flex-shrink-0 inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 dark:text-gray-400 rounded-lg bg-gray-200 dark:bg-gray-800 dark:hover:bg-cyan-700 dark:active:bg-cyan-800  hover:text-white dark:hover:text-white">
                            <span class="relative px-4 py-2 inline-flex gap-2 items-center rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                </svg>
                                Bearbeiten
                            </span>
                        </button>
                        <!-- Teilen -->
                        <button id="share-list-button" data-wishlist-id="<?php echo $wishlist['wishlist_id'] ?>" data-share-link="<?php echo 'http://localhost/index.php?page=share&token=' . $wishlist['share_token'] ?>" class="flex-shrink-0 inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 dark:text-gray-400 rounded-lg bg-gray-200 dark:bg-gray-800 hover:bg-gradient-to-br hover:from-orange-500 hover:to-red-600 hover:text-white dark:hover:text-white dark:active:from-red-600 dark:active:to-red-600">
                            <span class="relative px-4 py-2 inline-flex gap-2 items-center rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                </svg>
                                <span id="share-info">
                                    <?php echo $wishlist['is_public'] == 1 ? 'Link Kopieren' : 'Teilen' ?>
                                </span>
                            </span>
                        </button>
                        <div>
                            <?php
                            if ($wishlist['is_public'] == 1) {
                            ?>
                                <div class="text-gray-500 dark:text-gray-400 italic flex-shrink-1 break-all">
                                    <?php echo 'http://localhost/index.php?page=share&token=' . $wishlist['share_token'] . '' ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>

                <!-- Darstellung der Listen -->
                <div class=" mb-4 flex justify-between align-middle items-center ">

                    <div><?php
                            if (!empty($wishlist['target_date'])) {
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
                                        $daysUntilString = "Heute 🎉";
                                    } else if ($daysUntil == 1) {
                                        $daysUntilString = "Morgen 🎉";
                                    } else if ($daysUntil < 0) {
                                        $daysUntilString = "seit " . $daysUntil * -1 . " Tagen vergangen 🐛";
                                    } else {
                                        $daysUntilString = "in " . $daysUntil . " Tagen";
                                    }
                                }
                                echo $daysUntilString;
                            } else {
                                echo " ";
                            }

                            ?></div>


                    <div class="inline-flex rounded-md items-center shadow-sm" role="group">
                        <a href="index.php?page=create&type=wish&wishlist_id=<?php echo $wishlist['wishlist_id'] ?>">
                            <button type="button" class="py-2 px-4 text-sm font-small text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-700 dark:hover:text-white dark:hover:bg-green-700">Wunsch hinzufügen</button>
                        </a>
                    </div>
                </div>
                <!-- Tabelle der Wünsche -->
                <div>
                    <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400 rtl:text-right">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <!-- <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th> -->
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kategorie
                                </th>
                                <th scope="col" class="px-6 py-3 text-right">
                                    Preis
                                </th>
                                <th scope="col" class="px-6 py-3 text-right">
                                    Link
                                </th>
                                <th scope="col" class="px-6 py-3 text-right">
                                    Aktion
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            # Hole alle Wünsche
                            $wishlistItems = $wishController->getWishesByWishlist($wishlist['wishlist_id']);

                            # Erstelle Test Daten zur Darstellung. 
                            # Dies wäre auch ein geeignetes Format um die Daten später zu speichern oder anzunehmen. 
                            // $data = [
                            //     ["name" => "Apple MacBook Pro 17 Zoll", "category" => "Elektronik", "link" => "https://www.apple.com/de/macbook-pro-16/", "price" => "2999,00"],
                            //     ["name" => "Microsoft Surface Pro ", "category" => "Elektronik", "link" => "https://www.microsoft.com/de-de/surface-pro-8", "price" => "1999,99"],
                            //     ["name" => "Magic Mouse 2", "category" => "Elektronik", "link" => "https://www.apple.com/de/magic-mouse-2/", "price" => "99,99"],
                            //     ["name" => "Apple Watch", "category" => "Elektronik", "link" => "https://www.apple.com/de/apple-watch/", "price" => "179,99"],
                            //     ["name" => "iPad", "category" => "Elektronik", "link" => "https://www.apple.com/de/ipad/", "price" => "699,00"],
                            //     ["name" => "Apple iMac Pro", "category" => "Elektronik", "link" => "https://www.apple.com/de/imac-pro/", "price" => "3999,00"],
                            // ];

                            # Importiere die Funnktion, die die Daten in geeignetes HTML umwandelt. 
                            include BASE_PATH . '/components/elements/wishlist-table-item.php';

                            # console log the wishlistItems
                            echo "<script>console.log(" . json_encode($wishlistItems) . ");</script>";

                            # Gehe die Daten durch und erstelle eine Zeile Für die Tabelle der Wunschliste.
                            foreach ($wishlistItems as $row) {
                                # Set optionals to empty string
                                $categoryName = $row['category_id'] ?? "";
                                $link = $row['url'] ?? "";

                                if (!empty($categoryName)) {
                                    $category = $categoryController->getCategoryByID($categoryName);
                                    $categoryName = $category['name'];
                                }
                                $row['category'] = $categoryName;

                                echo wishlistTableItem($row['name'], $row['category'], $row['price'], $row['url']);
                            }

                            ?>
                        </tbody>
                    </table>
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