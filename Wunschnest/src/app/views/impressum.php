<?php

# Variablen definieren für die Homepage
$title = "WunschNest - Kontakt";

include BASE_PATH . '/components/includes/basic-head.php';

?>

</head>

<body>
    <div class="min-h-screen dark:bg-gray-900 flex flex-col">
        <!-- Navbar Einfügen aus Komponenten -->
        <?php include BASE_PATH . '/components/includes/navbar.php'; ?>

        <div class="custom-prose">
            <div class="mx-auto max-w-screen-xl">
                <!-- Anfangsbereich - Impressum -->
                <div class="mx-auto mt-16 w-10/12">
                    <span class="mb-2 text-lg text-orange-500">Das notwendige Übel:</span>
                    <h1 class="my-4 mb-16 text-5xl font-semibold text-gray-900 dark:text-gray-200">Impressum</h1>
                </div>

                <!-- Section: Impressumstext -->
                <section class="mx-auto mb-16 w-10/12 leading-loose">
                    <h3 class="my-4 text-xl font-bold">
                        WunschNest
                    </h3>
                    <p>
                        Kaiserstraße 13 <br>
                        39809 Lingen (Ems)
                    </p>
                    <br>
                    <p>
                        Telefon: 0591 12345 <br>
                        Telefax: 0591 12345 - 67 <br>
                        E-Mail: info@wunschnest.de <br>
                    </p>
                    <h4 class="mt-10 text-lg font-bold">Vertreten durch:</h4>
                    Timothy Lüdtke, Leo Springrose, Raphael Quast, Lenny Pöhler, Mussnah Ahmed


                    <h4 class="mb-4 mt-10 text-lg font-bold">DISCLAIMER – RECHTLICHE HINWEISE</h4>
                    <p class="mt-4">
                        <strong>§ 1 Warnhinweis zu Inhalten</strong><br>
                        Die kostenlosen und frei zugänglichen Inhalte dieser Webseite wurden mit größtmöglicher Sorgfalt erstellt. Der Anbieter dieser Webseite übernimmt jedoch keine Gewähr für die Richtigkeit und Aktualität der bereitgestellten kostenlosen und frei zugänglichen journalistischen Ratgeber und Nachrichten. Namentlich gekennzeichnete Beiträge geben die Meinung des jeweiligen Autors und nicht immer die Meinung des Anbieters wieder. Allein durch den Aufruf der kostenlosen und frei zugänglichen Inhalte kommt keinerlei Vertragsverhältnis zwischen dem Nutzer und dem Anbieter zustande, insoweit fehlt es am Rechtsbindungswillen des Anbieters.
                    </p>


                    <p class="mt-4">
                        <strong>§ 2 Externe Links</strong><br>
                        Diese Website enthält Verknüpfungen zu Websites Dritter („externe Links“). Diese Websites unterliegen der Haftung der jeweiligen Betreiber. Der Anbieter hat bei der erstmaligen Verknüpfung der externen Links die fremden Inhalte daraufhin überprüft, ob etwaige Rechtsverstöße bestehen. Zu dem Zeitpunkt waren keine Rechtsverstöße ersichtlich. Der Anbieter hat keinerlei Einfluss auf die aktuelle und zukünftige Gestaltung und auf die Inhalte der verknüpften Seiten. Das Setzen von externen Links bedeutet nicht, dass sich der Anbieter die hinter dem Verweis oder Link liegenden Inhalte zu Eigen macht. Eine ständige Kontrolle der externen Links ist für den Anbieter ohne konkrete Hinweise auf Rechtsverstöße nicht zumutbar. Bei Kenntnis von Rechtsverstößen werden jedoch derartige externe Links unverzüglich gelöscht.
                    </p>

                    <p class="mt-4">
                        <strong>§ 3 Urheber- und Leistungsschutzrechte</strong><br>
                        Die auf dieser Website veröffentlichten Inhalte unterliegen dem deutschen Urheber- und Leistungsschutzrecht. Jede vom deutschen Urheber- und Leistungsschutzrecht nicht zugelassene Verwertung bedarf der vorherigen schriftlichen Zustimmung des Anbieters oder jeweiligen Rechteinhabers. Dies gilt insbesondere für Vervielfältigung, Bearbeitung, Übersetzung, Einspeicherung, Verarbeitung bzw. Wiedergabe von Inhalten in Datenbanken oder anderen elektronischen Medien und Systemen. Inhalte und Rechte Dritter sind dabei als solche gekennzeichnet. Die unerlaubte Vervielfältigung oder Weitergabe einzelner Inhalte oder kompletter Seiten ist nicht gestattet und strafbar. Lediglich die Herstellung von Kopien und Downloads für den persönlichen, privaten und nicht kommerziellen Gebrauch ist erlaubt.

                        Die Darstellung dieser Website in fremden Frames ist nur mit schriftlicher Erlaubnis zulässig.
                    </p>
                    <p class="mt-4">
                        <strong>§ 4 Besondere Nutzungsbedingungen</strong><br>
                        Soweit besondere Bedingungen für einzelne Nutzungen dieser Website von den vorgenannten Paragraphen abweichen, wird an entsprechender Stelle ausdrücklich darauf hingewiesen. In diesem Falle gelten im jeweiligen Einzelfall die besonderen Nutzungsbedingungen.
                    </p>

                </section>

            </div>
        </div>
        <!-- Footer Section einfügen    -->
        <?php include BASE_PATH . '/components/includes/footer.php'; ?>
    </div>
    </div>
</body>

</html>