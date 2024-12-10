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


# Typ definieren was kreiert werden soll. 
$type = $_GET['type'];


$title = "Wunschnest - Wunsch erstellen";

include BASE_PATH . '/components/includes/basic-head.php';


?>

<title><?php echo $title ?></title>
</head>

<body>
    <div class="flex dark:bg-gray-900 dark:text-white">
        <?php
        # Hole die Favoriten des Users für die Sidebar
        $favorites = $wishlistController->getFavoritesByUser($user_id);
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


                <?php
                include BASE_PATH . '/components/includes/toast.php';
                ?>

                <?php
                # Lade das richtige Formular abhängig vom Typ der Anfrage
                switch ($type) {
                    case 'list':
                        ?>
                            <div class="mb-16 mt-2">
                                <span class=" text-lg text-orange-500">Ich habe mir schon immer gewünscht...</span>
                                <h1 class="my-4 mb-8 text-3xl font-semibold text-gray-900 dark:text-gray-200">Wunschliste Erstellen</h1>
                                <p class="dark:text-gray-400">Sortiere deine Wünsche nach Thema oder nach Anlass. Listen kannst du einzelnd teilen. </p>
                            </div>
                        <?php
                        include BASE_PATH . '/components/elements/create-wishlist-form.php';
                        break;
                    case 'wish':
                        # Hole alle Kategorien und Wunschlisten des Nutzers
                        $categories = $categoryController->getCategoriesByUser($user_id);
                        $wishlists = $wishlistController->getWishlistsByUser($user_id);
                        ?>
                            <div class="mb-16 mt-2">
                                <span class=" text-lg text-orange-500">Ich habe mir schon immer gewünscht...</span>
                                <h1 class="my-4 mb-8 text-3xl font-semibold text-gray-900 dark:text-gray-200">Wunsch Erstellen</h1>
                                <p class="dark:text-gray-400">Hier kannst du deinen Wunsch erstellen! Und deinen Liebsten es einfach machen genau das richtige für dich zu geben. Versuche daran ranzugehen als wärst du jemand anderes, der dich beschenken will. Füge so viele Details wie möglich aber auch nur so viel wie nötig. Man will ja auch nochmal leben. </p>
                            </div>
                        <?php
                        include BASE_PATH . '/components/elements/create-wish-form.php';
                        break;
                    case 'category':
                        ?>
                            <div class="mb-16 mt-2">
                                <span class=" text-lg text-orange-500">Ich habe mir schon immer gewünscht...</span>
                                <h1 class="my-4 mb-8 text-3xl font-semibold text-gray-900 dark:text-gray-200">Kategorien Erstellen</h1>
                                <p class="dark:text-gray-400">Zur weiteren Sortierung unabhängig von deinen Wunschlisten kannst du deine Wünsche noch eine Kategorie zuordnen. Wofür? Ist dir überlassen. Die Kategorien Funktion musst du auch einfach nicht verwenden. </p>
                            </div>
                        <?php
                        include BASE_PATH . '/components/elements/create-category-form.php';
                        break;
                    default:
                        ?>
                            <div class="mb-16 mt-2">
                                <span class=" text-lg text-orange-500">Ich habe mir schon immer gewünscht...</span>
                                <h1 class="my-4 mb-8 text-3xl font-semibold text-gray-900 dark:text-gray-200">Wunschliste Erstellen</h1>
                                <p class="dark:text-gray-400">Sortiere deine Wünsche nach Thema oder nach Anlass. Listen kannst du einzelnd teilen. </p>
                            </div>
                        <?php
                        include BASE_PATH . '/components/elements/create-wishlist-form.php';
                        break;
                }

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