<?php
# Variablen definieren für die Homepage
$title = "WunschNest - Kontakt";

include './components/basic-head.php';

?>

</head>

<body class="max-w-screen-xl mx-auto">
    <!-- Navbar Einfügen aus Komponenten -->
    <?php include './components/navbar.php'; ?>


    <!-- Kontaktformular -->
    <section class="w-10/12 mx-auto mt-16 flex gap-16 mb-32 justify-center">
        <div class="bg-gray-50 p-16 w-1/2 rounded-3xl hover:shadow-xl transition duration-300">
            <h1 class="text-2xl text-center mb-8">Registrieren</h1>
            <form class="max-w-sm mx-auto">
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                    <input type="text" id="name" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Max Musermann" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email Adresse</label>
                    <input type="email" id="email" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@beispiel.de" required />
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Passwort</label>
                    <input type="password" id="password" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="******************" required />
                </div>
                <div class="mb-5">
                    <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900 ">Passwort wiederholen</label>
                    <input type="password" id="password-confirm" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="******************" required />
                </div>
                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="datenschutz" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required />
                    </div>
                    <label for="datenschutz" class="ms-2 text-sm font-medium text-gray-900 ">Ich bin mit den <a class="underline hover:text-blue-900" href="./datenschutz.php">Datenschutzbestimmungen</a> einverstanden</label>
                </div>
                <div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center mt-4">Submit</button>
                </div>
                <div class="mt-4">
                    <a class="text-sm underline text-gray-500 hover:text-blue-600 " href="register.php">Einloggen</a>
                </div>
            </form>
        </div>

    </section>


    <!-- Footer Section einfügen    -->
    <?php include './components/footer.php'; ?>
</body>

</html>