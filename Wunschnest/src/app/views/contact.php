<?php

# Variablen definieren für die Homepage
$title = "WunschNest - Kontakt";

include BASE_PATH . '/components/includes/basic-head.php';

?>

</head>

<body>
    <div class="min-h-screen dark:bg-gray-900">
        <!-- Navbar Einfügen aus Komponenten -->
        <?php include BASE_PATH . '/components/includes/navbar.php'; ?>

        <!-- Anfangsbereich - Kontakt -->
        <div class="mx-auto max-w-screen-xl dark:text-white flex flex-col">
            <div class="mx-auto mb-16 mt-16 w-10/12">
                <span class="mb-2 text-lg text-orange-500">Sprich dich ruhig aus</span>
                <h1 class="my-4 mb-8 text-5xl font-semibold text-gray-900 dark:text-gray-200">Kontakt</h1>
                <p class="dark:text-gray-400">Wenn Sie allgemeine Fragen oder Anmerkungen haben, füllen Sie das Formular aus und wir melden uns bei Ihnen! Normalerweise antworten wir innerhalb von 2-3 Tagen. Wir sind nur eine kleine Gruppe Studenten, die das Projekt als Prüfungslistung bewältigen. Für eine schnellere Antwort verwenden Sie einen der spezifischen Links unten.</p>
            </div>

            <!-- Kontaktformular -->
            <section class="mx-auto mb-32 flex w-10/12 gap-16">
                <div class="rounded-3xl bg-gray-50 p-16 transition duration-300 hover:shadow-xl dark:bg-gray-800">
                    <form action="/forms_contact.php" method="post" class="mx-auto max-w-sm">
                        <div class="mb-5">
                            <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Name</label>
                            <input type="text" id="name" name="name" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required placeholder="Max Mustermann" />
                        </div>
                        <div class="mb-5">
                            <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Email Adresse</label>
                            <input type="email" id="email" name="email" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="name@beispiel.de" required />
                        </div>

                        <div class="mb-5 items-start">
                            <label for="message" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Nachricht:</label>
                            <textarea id="message" name="message" rows="4" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Deine Nachricht an uns. Über nette Worte freuen wir uns natürlich auch!" /></textarea>
                        </div>
                        <div class="mb-5 flex items-start">
                            <div class="flex h-5 items-center">
                                <input id="datenschutz" type="checkbox" value="" class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600" required />
                            </div>
                            <label for="datenschutz" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-200">Ich bin mit den <a class="underline hover:text-blue-900" href="./datenschutz.php">Datenschutzbestimmungen</a> einverstanden</label>
                        </div>
                        <button type="submit" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto">Submit</button>
                    </form>
                </div>
                <div class="p-8">
                    <?php
                        # FÜge den Toast ein als Benachrichtigung bei Fehlern
                        include BASE_PATH . '/components/includes/toast.php';

                    ?>
                    <h2 class="my-4 mb-8 text-xl font-semibold text-gray-900 dark:text-gray-200">Hilfreiche Links</h2>
                    <hr class="mx-auto mb-8 mt-2 h-[3px] w-48 rounded border-0 bg-gray-300 dark:bg-gray-800">
                    <!-- Nützliche Links einfügen -->

                    <ul class="ml-5 list-disc dark:text-gray-400">
                        <li><a class="hover:text-orange-500" href="index.php?page=demo-dashboard">Demo ausprobieren</a></li>
                        <li><a class="hover:text-orange-500" href="index.php#faq">FAQ</a></li>
                    </ul>
                </div>
            </section>


            <!-- Footer Section einfügen    -->
            <?php include BASE_PATH . '/components/includes/footer.php'; ?>
        </div>
    </div>
</body>

</html>