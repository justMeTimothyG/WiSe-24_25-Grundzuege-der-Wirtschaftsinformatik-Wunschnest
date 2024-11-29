<?php

# Variablen definieren für die Homepage
$title = "WunschNest";

include BASE_PATH . '/components/includes/basic-head.php';

?>
</head>

<body>
    <div class="min-h-screen dark:bg-gray-900 flex flex-col">


        <!-- Navbar Bereich -->

        <?php include BASE_PATH . '/components/includes/navbar.php' ?>
        <div class="mx-auto max-w-screen-xl dark:bg-gray-900 dark:text-white">
            <!--

            Hinweis:
            Die Seite ist aktuell noch sehr eintönig und es fehlt noch pepp. ggf. können hier ein paar mehr Farben eingebaut oder sachte Farbverläufe im Hintergrund integriert werden. 

            -->

            <!-- Hero Section - Startseitenbereich  -->

            <section class="lottie-hover-target mx-auto my-16 flex lg:flex-row flex-col-reverse w-10/12 items-center rounded-3xl border-[1px] border-gray-200 bg-white p-16 transition duration-300 ease-in-out hover:border-white hover:shadow-xl dark:border-gray-950 dark:bg-gray-800 dark:hover:shadow-black">
                <div class="align-center px-4 py-8">
                    <div class="flex flex-col">
                        <h2 class="mb-2 text-xl font-extrabold text-orange-500 lg:text-xl">WunschNest</h2>
                        <h1 class="my-0 mb-4 text-3xl font-bold tracking-tight">Dein Persönlicher Wunschzettel</h1>
                        <p class="dark:text-gray-400">Erstelle ganz einfach deine persönlichen Wunschlisten und teile sie mit Familie und Freunden. Keine unpassenden Überraschungen mehr - nur Geschenke, die Freude bereiten!</p>
                        <div class="mt-12 flex space-x-16">
                            <a href="/register.php">
                                <button type="button" class="rounded-lg bg-gray-800 px-10 py-4 text-center text-sm font-light text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:hover:bg-blue-700">Kostenlos Registrieren</button>
                            </a>
                            <a href="/index.php?page=dashboard">
                                <button type="button" class="flex items-center gap-4 rounded-lg px-10 py-4 text-center text-sm font-medium text-gray-800 hover:bg-blue-100 hover:text-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-blue-800 dark:hover:text-white">
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        echo "Zum Dashboard";
                                    } else {
                                        echo "Dashboard testen";
                                    }
                                    ?>
                                    <svg class="h-3 w-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex min-w-[250px] max-w-[300px] flex-[0_0_50%]">
                    <div class="lottie-animation w-full align-middle"></div>
                </div>
            </section>
            <!-- zeige den Hinweis das noch mehr kommt -->
            <div id="mehr-erfahren" class="mx-auto flex w-32 animate-pulse flex-col items-center px-3 py-2 text-center text-sm font-normal text-gray-400">
                Mehr erfahren
                <svg class="ms-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </div>

            <!-- Features Erklären  -->

            <!-- TODO - Die Anzeige bei kleinen Bildschirmen optimieren. also den Spacer verstecken und dann die Features in der richtigten Reihenfolge untereinander (Flexbox optimieren) -->

            <section class="mx-auto my-32 flex w-10/12 gap-8">
                <div class="flex w-1/2 flex-col gap-8">
                    <div class="dar:hover:bg-gray-700 border-[1px] border-gray-200 p-8 transition-all duration-200 ease-in-out hover:border-gray-50 hover:shadow-lg hover:shadow-gray-200 dark:border-gray-950 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:shadow-md">
                        <div class="mb-6 flex items-center gap-4">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                </svg>
                            </span>
                            <h2 class="text-xl font-extrabold dark:text-gray-200 lg:text-xl">Wunschlisten erstellen</h2>
                        </div>
                        <p class="dark:text-gray-400">Hilf Freunden und Familie, das perfekte Geschenk zu finden - ohne doppelte Überraschungen!</p>
                    </div>
                    <div class="dar:hover:bg-gray-700 border-[1px] border-gray-200 p-8 transition-all duration-200 ease-in-out hover:border-gray-50 hover:shadow-lg hover:shadow-gray-200 dark:border-gray-950 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:shadow-md">
                        <div class="mb-6 flex items-center gap-4">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="18" cy="5" r="3"></circle>
                                    <circle cx="6" cy="12" r="3"></circle>
                                    <circle cx="18" cy="19" r="3"></circle>
                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                </svg>
                            </span>
                            <h2 class="text-xl font-extrabold dark:text-gray-200 lg:text-xl">Einfaches Teilen</h2>
                        </div>
                        <p class="dark:text-gray-400">Teile deine Liste mit Freunden und Verwandten - über E-Mail, Social Media oder einen Link.</p>
                    </div>
                </div>
                <div class="flex w-1/2 flex-col gap-8">
                    <div class="h-16"></div>
                    <div class="dar:hover:bg-gray-700 border-[1px] border-gray-200 p-8 transition-all duration-200 ease-in-out hover:border-gray-50 hover:shadow-lg hover:shadow-gray-200 dark:border-gray-950 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:shadow-md">
                        <div class="mb-6 flex items-center gap-4">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38" />
                                </svg>
                            </span>
                            <h2 class="text-xl font-extrabold dark:text-gray-200 lg:text-xl">Immer aktuell</h2>
                        </div>
                        <p class="dark:text-gray-400">Deine Liste ist immer verfügbar und lässt sich jederzeit anpassen. Wenn einer etwas abhackt, sehen andere, dass das
                            Geschenk schon vergeben ist.</p>
                    </div>
                    <div class="dar:hover:bg-gray-700 border-[1px] border-gray-200 p-8 transition-all duration-200 ease-in-out hover:border-gray-50 hover:shadow-lg hover:shadow-gray-200 dark:border-gray-950 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:shadow-md">
                        <div class="mb-6 flex items-center gap-4">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg></span>
                            <h2 class="text-xl font-extrabold dark:text-gray-200 lg:text-xl">Sicher und Privat</h2>
                        </div>
                        <p class="dark:text-gray-400">Deine Daten sind geschützt, und du bestimmst, wer deine Listen sehen kann.</p>
                    </div>
                </div>

            </section>

            <!-- Satistiken  -->

            <!-- TODO: Anbindung an die Datenbank für die Zahlen der Statistik! -->
            <!-- TODO: Zahlen beim Einscrollen der Zahlen animieren/hochzählen lassen -->

            <section id="statistiken" class="mx-auto my-16 mb-8 w-10/12 text-center">
                <span class="mb-2 w-full text-lg text-orange-500">Überzeuge dich selbst durch andere</span>
                <h2 class="my-4 mb-16 text-5xl font-semibold text-gray-900 dark:text-gray-200">Statistiken</h2>

                <div class="flex justify-around rounded-3xl border-gray-100 bg-gray-100 p-12 transition duration-300 ease-in-out hover:border-white hover:bg-white hover:text-orange-500 hover:shadow-xl dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="flex flex-col items-center"><span class="mb-4 text-7xl">678</span><span>Wünsche</span></div>
                    <div class="flex flex-col items-center"><span class="mb-4 text-7xl">420</span><span>Wunschlisten</span></div>
                    <div class="flex flex-col items-center"><span class="mb-4 text-7xl">348</span><span>Benutzer</span></div>
                </div>
            </section>


            <!-- FAQ Bereich - -->

            <!-- TODO: GGF. Als Akkordion Elemente aufbauen und FAQs geschlossen anzeigen, so wird die Seite etwas kleiner und nur die den Nutzer interessanten Details können aufgeklappt werden (Javascript nötig) -->

            <section id="faq" class="mx-auto my-16 mb-8 w-10/12">
                <span class="mb-2 text-lg text-orange-500">Wie war das nochmal?</span>
                <h2 class="my-4 mb-16 text-5xl font-semibold text-gray-900 dark:text-gray-200">Häufig gestellte Fragen</h2>

                <div class="mt-16">
                    <h2 class="text-lg font-bold dark:text-gray-200"> Wie kann ich meine Listen teilen?</h2>
                    <div class="border-b-[1px] py-5 pb-8 dark:border-gray-950">
                        <p class="dark:text-gray-400">Teile deine Wunschliste ganz einfach per WhatsApp, Social Media oder über einen speziellen Link. Am besten gibst du den Hinweis den Link zu speichern damit der immer parat lieot und du ihn nicht erneut schicken muss.</p>
                    </div>
                </div>
                <div class="mt-12">
                    <h2 class="text-lg font-bold dark:text-gray-200">Kostet die Nutzung von WunschNest? </h2>
                    <div class="border-b-[1px] py-5 pb-8 dark:border-gray-950">
                        <p class="dark:text-gray-400">Nein, die Nutzung ist komplett kostenlos</p>
                    </div>
                </div>
                <div class="mt-12">
                    <h2 class="text-lg font-bold dark:text-gray-200">Kann ich mehrere Wunschlisten für verschiedene Anlässe erstellen? </h2>
                    <div class="border-b-[1px] py-5 pb-8 dark:border-gray-950">
                        <p class="dark:text-gray-400">Ja, du kannst beliebig viele Wunschlisten für verschiedene Anlässe wie Geburtstage, Hochzeiten oder Weihnachten anlegen und verwalten.</p>
                    </div>
                </div>
                <div class="mt-12">
                    <h2 class="text-lg font-bold dark:text-gray-200">Was passiert, wenn jemand ein Geschenkt von meiner Liste kauft?</h2>
                    <div class="border-b-[1px] py-5 pb-8 dark:border-gray-950">
                        <p class="dark:text-gray-400">Sobald jemand ein Geschenk von deiner Liste kauft, wird es als „gekauft" markiert, damit du keine doppelten Geschenke erhältst. Du wirst jedoch nicht sehen, wer es gekauft hat, um die Überraschung zu bewahren.</p>
                    </div>
                </div>
                <div class="mt-12">
                    <h2 class="text-lg font-bold dark:text-gray-200">Kann ich Ideen speichern, auch wenn ich sie später erst teilen möchte? </h2>
                    <div class="border-b-[1px] py-5 pb-8 dark:border-gray-950">
                        <p class="dark:text-gray-400">Ja du kannst Ideen in deiner Wunschliste speichern und diese erst teilen wenn du bereit bist. Deine Listen bleiben so lange nur für dich sichtbar, wie du möchtest. Man muss ja nicht jeden Wunsch mit allen teilen 😉.</p>
                    </div>
                </div>
                <div class="mt-12">
                    <h2 class="text-lg font-bold dark:text-gray-200">Kann ich Wunschlisten für andere Personen erstellen?</h2>
                    <div class="border-b-[1px] py-5 pb-8 dark:border-gray-950">
                        <p class="dark:text-gray-400">Ja, du kannst Wunschlisten für Freunde oder Familienmitglieder erstellen und verwalten, beispielsweise für eine Baby Shower oder eine Hochzeit. Das ist besonders praktisch, um Geschenkideen für andere zu organisieren.</p>
                    </div>
                </div>
                <div class="mt-12">
                    <h2 class="text-lg font-bold dark:text-gray-200">Können meine Freunde sehen, welche Produkte ich bereits erhalten habe?</h2>
                    <div class="border-b-[1px] py-5 pb-8 dark:border-gray-950">
                        <p class="dark:text-gray-400">Das kannst du individuell einstellen. Vielleicht möchte ja jemand sich einfach an dem Geschenk beteiligen und ggf. upgraden. Aber du hast auch die Möglichkeit deine Freunde nur die Artikel anzuzeigen, die sie noch auswählen können.</p>
                    </div>
                </div>

            </section>

            <!-- Letzter Call to Action -->

            <!-- Call to Action kann ggf. noch woanders benutzt werden, also als eigene Datei verwenden um sich im Code nicht zu wiederholen -->
            <?php include BASE_PATH . '/components/bottom-cta.php'; ?>


            <!-- Footer -->

            <!-- Footer wird oft bentut und kaum verändert, also auch hier als separate Datei Komponente hier einfach einbetten.  -->
            <?php include BASE_PATH . '/components/includes/footer.php'; ?>
        </div>
    </div>
</body>

</html>