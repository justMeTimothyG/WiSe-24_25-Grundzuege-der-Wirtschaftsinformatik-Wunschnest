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
<script src="/js/share-link.js" defer></script>
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

                    # Wenn user_id = 1 (Test Nutzer), benutzer Testdaten, sonst die echten Daten
                    // if ($user_id == 1) {
                        $categories = [
                            ["name" => "Elektronik", "wish_count" => 13],
                            ["name" => "Haushalt", "wish_count" => 5],
                            ["name" => "Familie", "wish_count" => 2],
                            ["name" => "Wohnen", "wish_count" => 1],
                            ["name" => "Hobby", "wish_count" => 3],
                            ["name" => "Sonstiges", "wish_count" => 1]
                        ];
                    // } else {

                    # Importiere Funktion um Kategorien mit Anzahl anzuzeigen
                    include BASE_PATH . "/components/elements/category-counter-tag.php";

                    # Durch das Array durchgehen und einzelne Kategorien anzeigen
                    foreach ($categories as $kategorie) {
                        echo categoryCounterTag($kategorie["name"], $kategorie["wish_count"]);
                    }
                    ?>

                </div>

                <!-- Tabelle der Wünsche -->
                <div class="masonry">

                    <?php

                        # Wünsche abholen
                        $wishes = $wishController->getWishesByWishlist($wishlist['wishlist_id']);

                        include BASE_PATH .'/components/elements/wish-card.php';

                        foreach ($wishes as $wish) {
                            echo wishlistCardItem($wish['name'], $wish['price'], $wish['description'], $wish['url'], $wish['image_url']);
                        }

                    ?>



                    <div class="masonry-item max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="https://image.euronics.de/media/image/3b/f2/de/9dadfcaa-67c2-4f5e-8450-80a7a2f29f04_600x600.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Samsung Galaxy</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Neues Handy ist immer gut oder?</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="masonry-item max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/MXL53_FV98_VW_34FR+watch-case-44-aluminum-silver-nc-se_VW_34FR+watch-face-44-aluminum-silver-se_VW_34FR?wid=750&hei=712&trim=1%2C0&fmt=p-jpg&qlt=95&.v=1725647080396" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><div class="inline-flex items-center">Apple Watch 10 <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><g fill="none" fill-rule="evenodd"><path d="M18 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h5M15 3h6v6M10 14L20.2 3.8"/></g></svg></div></h5> 
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ich habe noch die 7er und endlich wird es mal Zeit.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">€ 599</span>
                                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Erfüllen</a>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-item max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

                <?php

                    include BASE_PATH .'/components/elemets/bottom-cta.php';
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