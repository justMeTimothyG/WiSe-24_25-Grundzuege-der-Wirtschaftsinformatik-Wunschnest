<?php
# Variablen definieren für die Homepage
$title = "WunschNest"

?>
<!-- Hier bauen wir die Homepage der Webanwendung. 
 Sie kann mit einer Landingpage verglichen werden. 
 Details über die Anwendung, Nutzen, und Einsatzgebiete erläutern.   -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="./assets/logo.png">
    <link rel="stylesheet" href="./css/style.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
    <script defer src="./script/logo-lottie-animation.js"></script>
    <title><?php echo $title ?></title>
</head>

<body class="max-w-screen-x mx-auto">

    <!--

        Hinweis:
        Die Seite ist aktuell noch sehr eintönig und es fehlt noch pepp. ggf. können hier ein paar mehr Farben eingebaut oder sachte Farbverläufe im Hintergrund integriert werden. 

    -->


    <!-- Navbar Bereich -->

    <?php include './components/navbar.php' ?>

    <!-- Hero Section - Startseitenbereich  -->

    <section class="bg-white border-2 border-gray-200 w-10/12 mx-auto my-16 rounded-3xl flex p-16 items-center hover:shadow-xl hover:border-white transition duration-300 ease-in-out">
        <div class="align-center py-8 px-4">
            <div class="flex flex-col">
                <h2 class="mb-2 text-xl font-extrabold lg:text-xl text-orange-500">WunschNest</h2>
                <h1 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 my-0">Dein Persönlicher Wunschzettel</h1>
                <p class="">Erstelle ganz einfach deine persönlichen Wunschlisten und teile sie mit Familie und Freunden. Keine unpassenden Überraschungen mehr - nur Geschenke, die Freude bereiten!</p>
            </div>
        </div>
        <div class="max-w-[300px] flex-[0_0_50%] flex">
            <div class="lottie-animation w-full align-middle"></div>
        </div>
    </section>
    <!-- zeige den Hinweis das noch mehr kommt -->
    <div id="mehr-erfahren" class=" mx-auto w-32 flex flex-col items-center px-3 py-2 text-sm font-normal text-center text-gray-400 animate-pulse">
        Mehr erfahren
        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
        </svg>
    </div>

    <!-- Features Erklären  -->

    <!-- TODO - Die Anzeige bei kleinen Bildschirmen optimieren. also den Spacer verstecken und dann die Features in der richtigten Reihenfolge untereinander (Flexbox optimieren) -->

    <section class="w-10/12 mx-auto my-32 flex gap-8">
        <div class="flex flex-col w-1/2 gap-8">
            <div class="p-8 border-[1px] border-gray-200 hover:border-gray-50 hover:shadow-lg hover:shadow-gray-200 transition-all ease-in-out duration-200">
                <div class="flex gap-4 items-center mb-6">
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
                    <h2 class="text-xl font-extrabold lg:text-xl">Wunschlisten erstellen</h2>
                </div>
                <p>Hilf Freunden und Familie, das perfekte Geschenk zu finden - ohne doppelte Überraschungen!</p>
            </div>
            <div class="p-8 border-[1px] border-gray-200 hover:border-gray-50 hover:shadow-lg hover:shadow-gray-200 transition-all ease-in-out duration-200">
                <div class="flex gap-4 items-center mb-6">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="5" r="3"></circle>
                            <circle cx="6" cy="12" r="3"></circle>
                            <circle cx="18" cy="19" r="3"></circle>
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                        </svg>
                    </span>
                    <h2 class="text-xl font-extrabold lg:text-xl">Einfaches Teilen</h2>
                </div>
                <p>Teile deine Liste mit Freunden und Verwandten - über E-Mail, Social Media oder einen Link.</p>
            </div>
        </div>
        <div class="flex flex-col w-1/2 gap-8">
            <div class="h-16"></div>
            <div class="p-8 border-[1px] border-gray-200 hover:border-gray-50 hover:shadow-lg hover:shadow-gray-200 transition-all ease-in-out duration-200">
                <div class="flex gap-4 items-center mb-6">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38" />
                        </svg>
                    </span>
                    <h2 class="text-xl font-extrabold lg:text-xl">Immer aktuell</h2>
                </div>
                <p>Deine Liste ist immer verfügbar und lässt sich jederzeit anpassen. Wenn einer etwas abhackt, sehen andere, dass das
                    Geschenk schon vergeben ist.</p>
            </div>
            <div class="p-8 border-[1px] border-gray-200 hover:border-gray-50 hover:shadow-lg hover:shadow-gray-200 transition-all ease-in-out duration-200">
                <div class="flex gap-4 items-center mb-6">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg></span>
                    <h2 class="text-xl font-extrabold lg:text-xl">Sicher und Privat</h2>
                </div>
                <p>Deine Daten sind geschützt, und du bestimmst, wer deine Listen sehen kann.</p>
            </div>
        </div>

    </section>

    <!-- Satistiken  -->

    <!-- TODO: Anbindung an die Datenbank für die Zahlen der Statistik! -->
    <!-- TODO: Zahlen beim Einscrollen der Zahlen animieren/hochzählen lassen -->

    <section id="statistiken" class="w-10/12 mx-auto my-16 mb-8 text-center">
        <span class="mb-2 text-lg text-orange-500 w-full">Überzeuge dich selbst durch andere</span>
        <h2 class="mb-16 text-5xl  font-semibold text-gray-900 my-4">Statistiken</h2>

        <div class="bg-gray-100 hover:bg-white hover:border-white hover:text-orange-500  border-gray-100  rounded-3xl flex justify-around p-12 hover:shadow-xl transition duration-300 ease-in-out">
            <div class="flex flex-col items-center"><span class="text-7xl mb-4">678</span><span>Wünsche</span></div>
            <div class="flex flex-col items-center"><span class="text-7xl mb-4">420</span><span>Wunschlisten</span></div>
            <div class="flex flex-col items-center"><span class="text-7xl mb-4">348</span><span>Benutzer</span></div>
        </div>
    </section>


    <!-- FAQ Bereich - -->

    <!-- TODO: GGF. Als Akkordion Elemente aufbauen und FAQs geschlossen anzeigen, so wird die Seite etwas kleiner und nur die den Nutzer interessanten Details können aufgeklappt werden (Javascript nötig) -->

    <section id="faq" class="w-10/12 mx-auto my-16 mb-8">
        <span class="mb-2 text-lg text-orange-500">Wie war das nochmal?</span>
        <h2 class="mb-16 text-5xl  font-semibold text-gray-900 my-4">Häufig gestellte Fragen</h2>

        <div class="mt-16">
            <h2 class="font-bold text-lg"> Wie kann ich meine Listen teilen?</h2>
            <div class="py-5 pb-8 border-b-[1px] ">
                <p>Teile deine Wunschliste ganz einfach per WhatsApp, Social Media oder über einen speziellen Link. Am besten gibst du den Hinweis den Link zu speichern damit der immer parat lieot und du ihn nicht erneut schicken muss.</p>
            </div>
        </div>
        <div class="mt-12">
            <h2 class="font-bold text-lg">Kostet die Nutzung von WunschNest? </h2>
            <div class="py-5 pb-8 border-b-[1px] ">
                <p>Nein, die Nutzung ist komplett kostenlos</p>
            </div>
        </div>
        <div class="mt-12">
            <h2 class="font-bold text-lg">Kann ich mehrere Wunschlisten für verschiedene Anlässe erstellen? </h2>
            <div class="py-5 pb-8 border-b-[1px] ">
                <p>Ja, du kannst beliebig viele Wunschlisten für verschiedene Anlässe wie Geburtstage, Hochzeiten oder Weihnachten anlegen und verwalten.</p>
            </div>
        </div>
        <div class="mt-12">
            <h2 class="font-bold text-lg">Was passiert, wenn jemand ein Geschenkt von meiner Liste kauft?</h2>
            <div class="py-5 pb-8 border-b-[1px] ">
                <p>Sobald jemand ein Geschenk von deiner Liste kauft, wird es als „gekauft" markiert, damit du keine doppelten Geschenke erhältst. Du wirst jedoch nicht sehen, wer es gekauft hat, um die Überraschung zu bewahren.</p>
            </div>
        </div>
        <div class="mt-12">
            <h2 class="font-bold text-lg">Kann ich Ideen speichern, auch wenn ich sie später erst teilen möchte? </h2>
            <div class="py-5 pb-8 border-b-[1px] ">
                <p>Ja du kannst Ideen in deiner Wunschliste speichern und diese erst teilen wenn du bereit bist. Deine Listen bleiben so lange nur für dich sichtbar, wie du möchtest. Man muss ja nicht jeden Wunsch mit allen teilen 😉.</p>
            </div>
        </div>
        <div class="mt-12">
            <h2 class="font-bold text-lg">Kann ich Wunschlisten für andere Personen erstellen?</h2>
            <div class="py-5 pb-8 border-b-[1px] ">
                <p>Ja, du kannst Wunschlisten für Freunde oder Familienmitglieder erstellen und verwalten, beispielsweise für eine Baby Shower oder eine Hochzeit. Das ist besonders praktisch, um Geschenkideen für andere zu organisieren.</p>
            </div>
        </div>
        <div class="mt-12">
            <h2 class="font-bold text-lg">Können meine Freunde sehen, welche Produkte ich bereits erhalten habe?</h2>
            <div class="py-5 pb-8 border-b-[1px] ">
                <p>Das kannst du individuell einstellen. Vielleicht möchte ja jemand sich einfach an dem Geschenk beteiligen und ggf. upgraden. Aber du hast auch die Möglichkeit deine Freunde nur die Artikel anzuzeigen, die sie noch auswählen können.</p>
            </div>
        </div>

    </section>

    <!-- Letzter Call to Action -->

    <!-- Call to Action kann ggf. noch woanders benutzt werden, also als eigene Datei verwenden um sich im Code nicht zu wiederholen -->
    <?php include 'components/bottom-cta.php'; ?> 


    <!-- Footer -->

    <!-- Footer wird oft bentut und kaum verändert, also auch hier als separate Datei Komponente hier einfach einbetten.  -->
    <?php include 'components/footer.php'; ?>

</body>

</html>