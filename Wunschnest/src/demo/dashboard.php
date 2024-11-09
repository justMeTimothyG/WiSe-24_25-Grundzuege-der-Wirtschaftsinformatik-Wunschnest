<?php
# Lade die Config Datei 
include_once '../config.php';

# Lade Datenbank
include_once BASE_PATH . '/app/config/database.php';

# Lade Wishlist Controller 
include_once BASE_PATH . '/app/controllers/WishlistController.php';

# Initialisiere Datenbank und Controller
$pdo = getDatabaseConnection();
$wishlistController = new WishlistController($pdo);

# Da Demo Nutzer: Benutze ID 1 für den ersten User in Datenbank, der der Test User ist.
$user_id = 1;

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
        <div class="sticky">
            <!-- Sidebar on the Side -->
            <nav id="sidebar" class="flex-start sticky top-0 flex h-screen w-64 flex-col justify-between gap-4 border-gray-200 bg-gray-100 px-4 py-4 dark:bg-gray-800 dark:text-white">
                <div class="active flex items-center gap-4 rounded-lg p-3">
                    <a class="lottie-hover-target flex items-center gap-4" href="/">
                        <div class="lottie-animation size-7">
                            <img src="/public/assets/logo.svg" alt="WunschNest Logo" />
                        </div>
                        <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white">WunschNest</span>
                    </a>
                    <!-- Dark Mode Wechseln -->
                    <div id="dark-toggle" class="h-8 w-8 flex items-center justify-center cursor-pointer rounded-full dark:hover:bg-gray-700 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-grow flex-col gap-12 pt-8">

                    <ul id="actions">
                        <li>
                            <div class="active flex cursor-pointer items-center gap-4 rounded-lg bg-orange-300 p-3 hover:shadow-md hover:outline-orange-400 dark:bg-orange-800 dark:hover:bg-orange-700">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="8" x2="12" y2="16"></line>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                    </svg>
                                </span>
                                <h2 class="text-md font-semibold">Erstellen</h2>
                            </div>
                        </li>
                    </ul>
                    <ul class="flex flex-col gap-2">

                        <li>
                            <div class="active flex items-center gap-4 rounded-lg bg-gray-500 p-3 py-2 text-white hover:shadow-md dark:bg-gray-900">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                </span>
                                <h2 class="text-md font-semibold">Dashboard</h2>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </span>
                                <h2 class="text-md font-semibold">Wunschlisten</h2>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">
                                <span>
                                    <svg class="h-4 w-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M8 8v1h4V8m4 7H4a1 1 0 0 1-1-1V5h14v9a1 1 0 0 1-1 1ZM2 1h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                                    </svg>
                                </span>
                                <h2 class="text-md font-semibold">Archiv</h2>
                            </div>
                        </li>
                    </ul>

                    <!-- Favoriten  -->

                    <div>
                        <h3 class="ml-3 pb-2 text-sm font-semibold uppercase">Favoriten</h3>
                        <ul>
                            <?php
                            # Favoriten auflisten in einer foreach schleife
                            foreach ($favorites as $favorite) {
                                echo '<li>';
                                echo '<a href="/public/index.php?page=wishlist?wishlist_id=' . $favorite['wishlist_id'] . '">';
                                echo '<div class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">';
                                echo '<h2 class="text-md">' . $favorite['name'] . '</h2>';
                                echo '</div>';
                                echo '</a>';
                                echo '</li>';
                            }

                            ?>
                            <!-- <li>
                                <div class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">
                                    <h2 class="text-md">Weihnachtswünsche</h2>
                                </div>
                            </li> -->
                        </ul>
                    </div>

                </div>

                <!--  Gefühlt fehlt hier noch ein Bereich an Listen auf die man schnell zugreifen muss. Wenn es hierzu kommt kann dies am besten an dieser Stelle hinzugefügt werden -->
                <div>
                    <div class="flex items-center gap-4 p-3">
                        <div class="s-6 inline-flex items-center justify-center overflow-hidden rounded-full bg-gray-100 dark:bg-gray-600">

                        </div>
                        <span class="text-md font-semibold">Max Mustermann</span>
                    </div>
                    <div class="flex items-center gap-4 p-3">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            </svg>
                        </span>
                        <h2 class="text-md font-semibold">Einstellungen</h2>
                    </div>
                </div>
            </nav>
        </div>
        <div class="w-full">
            <!-- Banner Image  -->
            <div class="h-32 bg-teal-700 bg-gradient-to-tr from-cyan-500">

            </div>

            <!-- Main Content -->
            <div class="mx-auto w-full max-w-screen-xl p-8 pb-0">
                <!-- Breadcrumbs Navigation -->
                <nav class="mb-8 flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="me-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                Dashboard
                            </a>
                        </li>

                        <!--
                    Beispiel Elemente für die Breadcrumbs Navigation
                    <li>
                        <div class="flex items-center">
                            <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white md:ms-2">Projects</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ms-2">Flowbite</span>
                        </div>
                    </li>

                    -->
                    </ol>
                </nav>

                <p>
                    <?php
                    # JSON Encode Variablen und ausgabe in der Console
                    $console = json_encode($favorites, JSON_PRETTY_PRINT);

                    # console.log wird in der Console ausgegeben
                    echo '<script>console.log(' . $console . ');</script>';
                    ?>
                </p>
                <!-- Alternative Darstellung der Listen -->
                <div class="mb-4 flex justify-between align-middle">

                    <h2 class="mb-4 dark:text-gray-300">
                        Meine Listen
                    </h2>
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <button type="button" class="rounded-s-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500">
                            Alle
                        </button>
                        <button type="button" class="rounded-e-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500">
                            Geteilt
                        </button>
                    </div>
                </div>
                <div class="mb-8 sm:rounded-lg">
                    <div class="hb us asn asx cni dmm">
                        <ul class="grid grid-cols-3 gap-6">
                            <?php
                            # Liste erstellen der Wunschlisten

                            # Erstelle Testdaten
                            $wunschliste_alternative_daten = [
                                ["title" => "Weihnachten", "datum" => "2024-12-31", "count" => 5, "shared" => true],
                                ["title" => "Geburtstag", "datum" => "2025-03-16", "count" => 12, "shared" => true],
                                ["title" => "Hochzeit", "datum" => "2025-08-28", "count" => 10, "shared" => false],
                                ["title" => "Generelle Ideen", "datum" => "2030-12-31", "count" => 20, "shared" => false],
                            ];

                            # Importiere Funktion, um Kacheln zu erstellen
                            include BASE_PATH . "/components/elements/wunschlisten.php";

                            # Gehe durch Daten und erstelle eine Kachel
                            foreach ($wunschliste_alternative_daten as $liste) {
                                # Differenz in Tagen zum Datum berechnen
                                $diff = date_diff(date_create($liste["datum"]), date_create());
                                # diff in Zahl umwandeln
                                $daysUntil = $diff->format("%a");
                                # Erstelle Kachel
                                echo wunschlistenAlternative($liste["title"], $daysUntil, $liste["count"], $liste["shared"]);
                            }
                            ?>
                            <li
                                class="cursor-pointer flex dark:text-gray-500 hover:bg-blue-200 hover:text-blue-700 items-center justify-center overflow-hidden rounded-xl border-[1px] border-gray-100 bg-gray-50 dark:border-gray-950 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="flex items-center justify-between gap-4 p-6">
                                    Neue Liste erstellen
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <h2 class="mb-4 dark:text-gray-300">
                    Statistiken
                </h2>
                <div class="flex gap-8">
                    <div class="flex flex-grow flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-gray-100 hover:shadow-black dark:border-gray-950 dark:bg-gray-800 dark:hover:bg-gray-900 dark:hover:shadow-xl">
                        <span class="font-normal text-gray-700 dark:text-gray-400">Wünsche</span>
                        <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">47</h5>
                    </div>
                    <div class="flex flex-grow flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-gray-100 hover:shadow-black dark:border-gray-950 dark:bg-gray-800 dark:hover:bg-gray-900 dark:hover:shadow-xl">
                        <span class="font-normal text-gray-700 dark:text-gray-400">Listen Gesamt</span>
                        <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">5</h5>
                    </div>
                    <div class="flex flex-grow flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-gray-100 hover:shadow-black dark:border-gray-950 dark:bg-gray-800 dark:hover:bg-gray-900 dark:hover:shadow-xl">
                        <span class="font-normal text-gray-700 dark:text-gray-400">Aktiv Geteilt</span>
                        <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">2</h5>
                    </div>
                    <div class="flex flex-grow flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-gray-100 hover:shadow-black dark:border-gray-950 dark:bg-gray-800 dark:hover:bg-gray-900 dark:hover:shadow-xl">
                        <span class="font-normal text-gray-700 dark:text-gray-400">Archivierte Listen</span>
                        <h5 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">1</h5>
                    </div>
                </div>
                <h2 class="mb-4 mt-8 dark:text-gray-300">
                    Kategorien
                </h2>
                <div class="flex flex-wrap gap-4">
                    <?php

                    # Test Daten an Kategorien 
                    $test_kategorien = [
                        ["Elektronik", 13],
                        ["Haushalt", 5],
                        ["Familie", 2],
                        ["Wohnen", 1],
                        ["Hobby", 3],
                        ["Sonstiges", 1]
                    ];

                    # Importiere Funktion um Kategorien mit Anzahl anzuzeigen
                    include BASE_PATH . "/components/elements/category-counter-tag.php";

                    # Durch das Array durchgehen und einzelne Kategorien anzeigen
                    foreach ($test_kategorien as $kategorie) {
                        echo categoryCounterTag($kategorie[0], $kategorie[1]);
                    }
                    ?>

                </div>
                <div class="mb-4 mt-8 flex justify-between align-middle">

                    <h2 class="mb-4 dark:text-gray-300">
                        Weihnachtswunschliste
                    </h2>
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <button type="button" class="rounded-s-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500">
                            Alle
                        </button>
                        <button type="button" class="rounded-e-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500">
                            Geteilt
                        </button>
                    </div>
                </div>
                <div class="mb-4 sm:rounded-lg">
                    <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400 rtl:text-right">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
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
                                    Aktion
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            # Erstelle Test Daten zur Darstellung. 
                            # Dies wäre auch ein geeignetes Format um die Daten später zu speichern oder anzunehmen. 
                            $data = [
                                ["name" => "Apple MacBook Pro 17 Zoll", "category" => "Elektronik", "price" => "2999,00"],
                                ["name" => "Microsoft Surface Pro ", "category" => "Elektronik", "price" => "1999,99"],
                                ["name" => "Magic Mouse 2", "category" => "Elektronik", "price" => "99,99"],
                                ["name" => "Apple Watch", "category" => "Elektronik", "price" => "179,99"],
                                ["name" => "iPad", "category" => "Elektronik", "price" => "699,00"],
                                ["name" => "Apple iMac Pro", "category" => "Elektronik", "price" => "3999,00"],
                            ];

                            # Importiere die Funnktion, die die Daten in geeignetes HTML umwandelt. 
                            include BASE_PATH . '/components/elements/wishlist-table-item.php';

                            # Gehe die Daten durch und erstelle eine Zeile Für die Tabelle der Wunschliste.
                            foreach ($data as $row) {
                                echo wishlistTableItem($row['name'], $row['category'], $row['price']);
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
                # Footer Importieren
                include BASE_PATH . '/components/includes/footer.php';
                ?>
            </div>
        </div>
    </div>

</body>

</html>