<?php
# Für diese Datei benötige ich folgende Variablen: 
# - $favorites -> Array mit den Favoriten des Users


$active = 'bg-gray-500 dark:bg-gray-900 hover:shadow-md';

?>

<div class="sticky">
    <!-- Sidebar on the Side -->
    <nav id="sidebar" class="select-none flex-start sticky top-0 flex h-screen w-64 flex-col justify-between gap-4 border-gray-200 bg-gray-100 px-4 py-4 dark:bg-gray-800 dark:text-white">
        <div class="active flex items-center gap-4 rounded-lg p-3">
            <a class="lottie-hover-target flex items-center gap-4" href="/">
                <div class="lottie-animation size-7">
                    <img src="/assets/logo.svg" alt="WunschNest Logo" />
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
        <!-- Actions -->
        <div class="flex flex-grow flex-col gap-12 pt-8">

            <ul id="actions">
                <li>
                    <a href="/index.php?page=create&type=list" class="active flex cursor-pointer items-center gap-4 rounded-lg p-3 hover:shadow-md hover:outline-orange-400 dark:hover:bg-orange-700">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </span>
                        <h2 class="text-md font-semibold">Liste</h2>
                    </a>
                </li>
                <li>
                    <a href="/index.php?page=create&type=wish" class="active flex cursor-pointer items-center gap-4 rounded-lg p-3 hover:shadow-md hover:outline-orange-400 dark:hover:bg-orange-700">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </span>
                        <h2 class="text-md font-semibold">Wunsch</h2>
                    </a>
                </li>
            </ul>
            <!-- Bereiche -->
            <ul class="flex flex-col gap-2">

                <li>
                    <a href="<?php echo ($_GET['page'] == 'dashboard') ? '#' : '/index.php?page=dashboard' ?>" class="<?php echo ($_GET['page'] == 'dashboard') ? $active : '' ?> flex items-center gap-4 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 p-3 py-2 text-white">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                        </span>
                        <h2 class="text-md font-semibold">Dashboard</h2>
                    </a>
                </li>
                <li>
                    <a href="/index.php?page=wishlists" class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </span>
                        <h2 class="text-md font-semibold">Wunschlisten</h2>
                    </a>
                </li>
                <li>
                    <a href="/index.php?page=archive" class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">
                        <span>
                            <svg class="h-4 w-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M8 8v1h4V8m4 7H4a1 1 0 0 1-1-1V5h14v9a1 1 0 0 1-1 1ZM2 1h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                            </svg>
                        </span>
                        <h2 class="text-md font-semibold">Archiv</h2>
                    </a>
                </li>
            </ul>

            <!-- Favoriten  -->

            <div>
                <h3 class="ml-3 pb-2 text-sm font-semibold uppercase dark:text-gray-500">Favoriten</h3>
                <ul>
                    <?php
                    # Favoriten auflisten in einer foreach schleife
                    foreach ($favorites as $favorite) {
                        # check if it is current page is current page
                        $currentPage = false;
                        if (isset($_GET['page']) && $_GET['page'] == 'wishlist' && isset($_GET['wishlist_id']) && $_GET['wishlist_id'] == $favorite['wishlist_id']) {
                            $currentPage = true;
                        }

                    ?>
                        <li>
                            <a href="/index.php?page=wishlist&wishlist_id=<?php echo $favorite['wishlist_id'] ?>">
                                <div class="<?php echo $currentPage ? $active : '' ?> flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">
                                    <h2 class="text-md"><?php echo $favorite['name'] ?></h2>
                                </div>
                            </a>
                        </li>

                    <?php
                    }

                    ?>
                </ul>
            </div>

        </div>

        <!--  Gefühlt fehlt hier noch ein Bereich an Listen auf die man schnell zugreifen muss. Wenn es hierzu kommt kann dies am besten an dieser Stelle hinzugefügt werden -->
        <div>
            <div class="flex items-center gap-4 p-3">
                <div class="s-6 inline-flex items-center justify-center overflow-hidden rounded-full bg-gray-100 dark:bg-gray-600">

                </div>
                <span class="text-md font-semibold"><?php echo $_SESSION['name']; ?></span>
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