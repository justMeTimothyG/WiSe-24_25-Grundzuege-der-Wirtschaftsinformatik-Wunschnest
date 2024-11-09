<?php


# Variablen definieren für die Homepage
$title = "WunschNest - Login";

include BASE_PATH . '/components/includes/basic-head.php';

?>

</head>

<body>
    <div class="min-h-screen dark:bg-gray-900">


        <!-- Navbar Einfügen aus Komponenten -->
        <?php include BASE_PATH . '/components/includes/navbar.php'; ?>


        <!-- Kontaktformular -->
        <div class="mx-auto max-w-screen-xl dark:text-white flex flex-col">



            <section class="mx-auto mb-32 mt-16 flex flex-col w-10/12 justify-center items-center gap-16">

                <?php
                include BASE_PATH . '/components/includes/toast.php';
                ?>

                <div class="w-1/2 rounded-3xl bg-gray-50 p-16 transition duration-300 hover:shadow-xl dark:bg-gray-800">
                    <h1 class="mb-8 text-center text-2xl">Login</h1>
                    <form action="/forms_login.php" method="post" class="mx-auto max-w-sm">
                        <div class="mb-5">
                            <label for="kennung" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-400">Email Adresse oder Nutzername</label>
                            <input type="text" id="kennung" name="kennung" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="name@beispiel.de" required />
                        </div>
                        <div class="mb-5">
                            <label for="password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-400">Passwort</label>
                            <input type="password" id="password" name="password" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="******************" required />
                        </div>
                        <div class="mb-5 flex items-start">
                            <div class="flex h-5 items-center">
                                <input id="remember" type="checkbox" name="remember" class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-2 focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800" />
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-400">Eingeloggt bleiben</label>
                        </div>
                        <div>
                            <button type="submit" class="mt-4 w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Submit</button>
                        </div>
                        <div class="mt-4">
                            <a class="pt-8 text-sm text-gray-500 underline hover:text-blue-600" href="register.php">Kostenlos registrieren</a>
                        </div>
                    </form>
                </div>

            </section>


            <!-- Footer Section einfügen    -->
            <?php include BASE_PATH . '/components/includes/footer.php'; ?>
        </div>
    </div>
</body>

</html>