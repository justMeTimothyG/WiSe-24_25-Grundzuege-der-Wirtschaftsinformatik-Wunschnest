<div class="bg-white dark:bg-gray-800 dark:text-white">
    <nav class="mx-auto max-w-screen-xl">
        <div class="mx-auto flex w-10/12 flex-wrap items-center justify-between py-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/assets/logo.svg" class="h-8" alt="Wunschnest Logo" />
                <span class="self-center whitespace-nowrap text-2xl font-semibold">WunschNest</span>
            </a>
            <div class="flex items-center space-x-3 rtl:space-x-reverse">
                <div id="dark-toggle" class="h-8 w-8 flex items-center justify-center cursor-pointer rounded-full dark:hover:bg-gray-700 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path id="dark-mode-icon" d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </div>
                <?php
                if (isset($_SESSION['username'])) {
                    # Nutzer ist eingeloggt, also Logout anzeigen
                ?>

                    <a href="/logout.php">
                        <button type="button" class="dark:hover:t ext-white rounded-lg px-4 py-2 text-center text-sm font-medium text-gray-800 hover:bg-blue-100 hover:text-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-600 dark:text-gray-300 dark:hover:bg-gray-500 dark:focus:ring-blue-800">Ausloggen</button>
                    </a>

                <?php
                } else {
                    # Nutzer ist nicht eingeloggt, also Registrierung und Login anzeigen
                ?>
                    <a href="/index.php?page=login">
                        <button type="button" class="dark:hover:t ext-white rounded-lg px-4 py-2 text-center text-sm font-medium text-gray-800 hover:bg-blue-100 hover:text-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-600 dark:text-gray-300 dark:hover:bg-gray-500 dark:focus:ring-blue-800">Login</button>
                    </a>
                    <a href="/index.php?page=register">
                        <button type="button" class="rounded-lg bg-blue-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrieren</button>
                    </a>

                <?php
                }
                ?>
            </div>
        </div>
    </nav>
</div>