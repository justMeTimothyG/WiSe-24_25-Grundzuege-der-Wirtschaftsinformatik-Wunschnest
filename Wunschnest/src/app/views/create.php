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

# Prüfe ob Testdaten geladen werden sollen oder die des Nutzers: 
if (isset($_GET['demo']) && $_GET['demo'] == 'true') {
    # Da Demo Nutzer: Benutze ID 1 für den ersten User in Datenbank, der der Test User ist.
    $user_id = 1;
} else if (isset($_SESSION['username'])) {
    $user = $userController->getUserByUsername($_SESSION['username']);
    $user_id = $user['user_id'];
} else {
    header("Location: /index.php?page=login");
    $_SESSION['login_message'] = "Bitte logge dich ein um diesen Bereich sehen zu können.";
    exit();
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

            <!-- Main Content -->
            <div class="mx-auto w-full max-w-screen-xl flex flex-col flex-grow p-8 pb-0">

                <?php
                include BASE_PATH . '/components/includes/toast.php';
                ?>
                <div class="mx-auto mb-16 mt-8">
                    <span class=" text-lg text-orange-500">Ich habe mir schon immer gewünscht...</span>
                    <h1 class="my-4 mb-8 text-3xl font-semibold text-gray-900 dark:text-gray-200">Wunsch Erstellen</h1>
                    <p class="dark:text-gray-400">Hier kannst du deinen Wunsch erstellen! Und deinen Liebsten es einfach machen genau das richtige für dich zu geben. Versuche daran ranzugehen als wärst du jemand anderes, der dich beschenken will. Füge so viele Details wie möglich aber auch nur so viel wie nötig. Man will ja auch nochmal leben. </p>
                </div>

                <?php
                # Lade das richtige Formular abhängig vom Typ der Anfrage
                switch ($type) {
                    case 'wishlist':
                        include BASE_PATH . '/components/elements/create-wishlist-form.php';
                        break;
                    case 'wish':
                        # Hole alle Kategorien und Wunschlisten des Nutzers
                        $categories = $categoryController->getCategoriesByUser($user_id);
                        $wishlists = $wishlistController->getWishlistsByUser($user_id);
                        include BASE_PATH . '/components/elements/create-wish-form.php';
                        break;
                    case 'category':
                        include BASE_PATH . '/components/elements/create-category-form.php';
                    default:
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