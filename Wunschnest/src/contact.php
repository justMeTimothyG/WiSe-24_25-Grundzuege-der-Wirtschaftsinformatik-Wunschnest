<?php
# Variablen definieren für die Homepage
$title = "WunschNest - Kontakt";

include './components/basic-head.php';

?>

</head>

<body class="max-w-screen-xl mx-auto">
    <!-- Navbar Einfügen aus Komponenten -->
    <?php include './components/navbar.php'; ?>

    <!-- Anfangsbereich - Kontakt -->

    <div class="w-10/12 mx-auto mt-16 mb-16">
        <span class="mb-2 text-lg text-orange-500">Sprich dich ruhig aus</span>
        <h1 class="mb-8 text-5xl  font-semibold text-gray-900 my-4">Kontakt</h1>
        <p>Wenn Sie allgemeine Fragen oder Anmerkungen haben, füllen Sie das Formular aus und wir melden uns bei Ihnen! Normalerweise antworten wir innerhalb von 2-3 Tagen. Wir sind nur eine kleine Gruppe Studenten, die das Projekt als Prüfungslistung bewältigen. Für eine schnellere Antwort verwenden Sie einen der spezifischen Links unten.</p>
    </div>

    <!-- Kontaktformular -->
    <section class="w-10/12 mx-auto flex gap-16 mb-32">
        <div class="bg-gray-50 p-16 rounded-3xl hover:shadow-xl transition duration-300">
            <form class="max-w-sm mx-auto">
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                    <input type="text" id="name" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required placeholder="Max Mustermann" />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email Adresse</label>
                    <input type="email" id="email" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@beispiel.de" required />
                </div>

                <div class="items-start mb-5">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Nachricht:</label>
                    <textarea id="message" rows="4" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Deine Nachricht an uns. Über nette Worte freuen wir uns natürlich auch!" /></textarea>
                </div>
                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required />
                    </div>
                    <label for="datenschutz" class="ms-2 text-sm font-medium text-gray-900 ">Ich bin mit den <a class="underline hover:text-blue-900" href="./datenschutz.php">Datenschutzbestimmungen</a> einverstanden</label>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
            </form>
        </div>
        <div class="p-8">
            <h2 class="mb-8 text-xl  font-semibold text-gray-900 my-4">Hilfreiche Links</h2>
            <hr class="w-48 h-[3px] mx-auto mt-2 mb-8 bg-gray-300 border-0 rounded ">
                <!-- Nützliche Links einfügen -->

            <ul class="list-disc ml-5">
                <li>Demo ausprobieren</li>
                <li>FAQ</li>
            </ul>
        </div>
    </section>


    <!-- Footer Section einfügen    -->
    <?php include './components/footer.php'; ?>
</body>

</html>