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


                <!-- Auflistung der Archive -->
                <div class="w-full flex flex-col">

                    <?php
                    # Wenn kein Archivierten Listen vorhanden sind, dann gebe einen Hinweis einer Leeren Listen an
                    $archive_count = count($wishlistController->getArchivedWishlistsByUser($user_id));

                    echo $archive_count;
                    if ($archive_count == 0) {
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