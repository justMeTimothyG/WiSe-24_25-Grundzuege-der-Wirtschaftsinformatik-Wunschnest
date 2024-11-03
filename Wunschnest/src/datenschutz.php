<?php
include_once './config.php';
# Variablen definieren für die Homepage
$title = "WunschNest - Kontakt";

include BASE_PATH . '/components/includes/basic-head.php';

?>

</head>

<body>
    <div class="min-h-screen dark:bg-gray-900">
        <!-- Navbar Einfügen aus Komponenten -->
        <?php include BASE_PATH . '/components/includes/navbar.php'; ?>
        <div class="mx-auto max-w-screen-xl flex flex-col">
            <div class="custom-prose">


                <!-- Anfangsbereich - Datenschutz -->
                <div class="mx-auto mt-16 w-10/12">
                    <span class="mb-2 text-lg text-orange-500">Das weitere Übel:</span>
                    <h1 class="my-4 mb-16 text-5xl font-semibold text-gray-900 dark:text-gray-200">Datenschutz</h1>
                </div>

                <!-- Section: Datenschutz -->
                <section class="mx-auto mb-16 w-10/12 leading-loose">
                    <h2 class="my-8 text-2xl font-bold">
                        Datenschutzerklärung nach der DSGVO
                    </h2>
                    <h3 class="mb-4 mt-8 text-xl font-bold">
                        I. NAME UND ANSCHRIFT DES VERANTWORTLICHEN
                    </h3>
                    <p>
                        Der Verantwortliche im Sinne der Datenschutz-Grundverordnung und anderer nationaler Datenschutzgesetze der Mitgliedsstaaten sowie sonstiger datenschutzrechtlicher Bestimmungen ist die:
                    </p>
                    <p>
                        Timothy Lüdtke, Leo Springrose, Raphael Quast, Lenny Pöhler, Mussnah Ahmed
                    </p>
                    <p>
                        Kaiserstraße 15 <br>
                        49809 Lingen (Ems) <br>
                        Tel.: 0591-12345 <br>
                        Mail: info@wunschnest.de <br>
                        Website: wunschnest.de
                    </p>

                    <h3 class="font-xl mb-4 mt-8 font-bold">
                        II. NAME UND ANSCHRIFT DES DATENSCHUTZBEAUFTRAGTEN
                    </h3>
                    <p>Der Datenschutzbeauftragte entspricht dem Verantwortlichen</p>

                    <h3 class="font-xl mb-4 mt-8 font-bold">
                        III. ALLGEMEINES ZUR DATENVERARBEITUNG
                    </h3>

                    <h4 class="font-lg my-4">
                        1. UMFANG UND ZWECK DER VERARBEITUNG PERSONENBEZOGENER DATEN
                    </h4>
                    <p>Wir verarbeiten personenbezogene Daten unserer Nutzer grundsätzlich nur, soweit dies zur Bereitstellung einer funktionsfähigen Website sowie unserer Inhalte und Leistungen erforderlich ist. Die Verarbeitung personenbezogener Daten unserer Nutzer erfolgt regelmäßig nur nach Einwilligung des Nutzers. Eine Ausnahme gilt in solchen Fällen, in denen eine vorherige Einholung einer Einwilligung aus tatsächlichen Gründen nicht möglich ist und die Verarbeitung der Daten durch gesetzliche Vorschriften gestattet ist.</p>

                    <h4 class="font-lg my-4">
                        2. RECHTSGRUNDLAGE FÜR DIE VERARBEITUNG PERSONENBEZOGENER DATEN
                    </h4>
                    <p>
                        Soweit wir für Verarbeitungsvorgänge personenbezogener Daten eine Einwilligung der betroffenen Person einholen, dient Art. 6 Abs. 1 lit. a EU-Datenschutzgrundverordnung (DSGVO) als Rechtsgrundlage.
                        <br>
                        Bei der Verarbeitung von personenbezogenen Daten, die zur Erfüllung eines Vertrages, dessen Vertragspartei die betroffene Person ist, erforderlich ist, dient Art. 6 Abs. 1 lit. b DSGVO als Rechtsgrundlage. Dies gilt auch für Verarbeitungsvorgänge, die zur Durchführung vorvertraglicher Maßnahmen erforderlich sind.
                        <br>
                        Soweit eine Verarbeitung personenbezogener Daten zur Erfüllung einer rechtlichen Verpflichtung erforderlich ist, der unser Unternehmen unterliegt, dient Art. 6 Abs. 1 lit. c DSGVO als Rechtsgrundlage.
                        <br>
                        Für den Fall, dass lebenswichtige Interessen der betroffenen Person oder einer anderen natürlichen Person eine Verarbeitung personenbezogener Daten erforderlich machen, dient Art. 6 Abs. 1 lit. d DSGVO als Rechtsgrundlage.
                        <br>
                        Ist die Verarbeitung zur Wahrung eines berechtigten Interesses unseres Unternehmens oder eines Dritten erforderlich und überwiegen die Interessen, Grundrechte und Grundfreiheiten des Betroffenen das erstgenannte Interesse nicht, so dient Art. 6 Abs. 1 lit. f DSGVO als Rechtsgrundlage für die Verarbeitung.
                    </p>

                    <h4 class="font-lg my-4">
                        3. DATENLÖSCHUNG UND SPEICHERDAUER
                    </h4>
                    <p>Die personenbezogenen Daten der betroffenen Person werden gelöscht oder gesperrt, sobald der Zweck der Speicherung entfällt. Eine Speicherung kann darüber hinaus erfolgen, wenn dies durch den europäischen oder nationalen Gesetzgeber in unionsrechtlichen Verordnungen, Gesetzen oder sonstigen Vorschriften, denen der Verantwortliche unterliegt, vorgesehen wurde. Eine Sperrung oder Löschung der Daten erfolgt auch dann, wenn eine durch die genannten Normen vorgeschriebene Speicherfrist abläuft, es sei denn, dass eine Erforderlichkeit zur weiteren Speicherung der Daten für einen Vertragsabschluss oder eine Vertragserfüllung besteht.</p>

                    <h3 class="font-xl mb-4 mt-8 font-bold">
                        IV. BEREITSTELLUNG DER WEBSITE UND ERSTELLUNG VON LOGFILES
                    </h3>

                    <h4 class="font-lg my-4">
                        1. BESCHREIBUNG UND UMFANG DER DATENVERARBEITUNG
                    </h4>
                    <p>
                        Bei jedem Aufruf unserer Internetseite erfasst unser System (und ggf. auch das System unseres Hostinganbieters) automatisiert Daten und Informationen vom Computersystem des aufrufenden Rechners.
                        <br>
                        Folgende Daten werden hierbei erhoben: <br>
                        <br>
                    <ul class="ml-5 list-disc">
                        <li>
                            Informationen über den Browsertyp und die verwendete Version
                        </li>
                        <li>
                            Das Betriebssystem des Nutzers
                        </li>
                        <li>
                            Den Internet-Service-Provider des Nutzers
                        </li>
                        <li>
                            Die IP-Adresse des Nutzers
                        </li>
                        <li>
                            Datum und Uhrzeit des Zugriffs
                        </li>
                        <li>
                            Websites, von denen das System des Nutzers auf unsere Internetseite gelangt
                        </li>
                        <li>
                            Websites, die vom System des Nutzers über unsere Website aufgerufen werden
                        </li>
                        <li>
                            Die Daten werden ebenfalls in den Logfiles unseres Systems gespeichert. Eine Speicherung dieser Daten zusammen mit anderen personenbezogenen Daten des Nutzers findet nicht statt.
                        </li>
                    </ul>
                    </p>

                    <h4 class="font-lg my-4">
                        2.RECHTSGRUNDLAGE FÜR DIE DATENVERARBEITUNG
                    </h4>
                    <p>Rechtsgrundlage für die vorübergehende Speicherung der Daten und der Logfiles ist Art. 6 Abs. 1 lit. f DSGVO.</p>

                    <h4 class="font-lg my-4">
                        3. ZWECK DER DATENVERARBEITUNG
                    </h4>
                    <p>
                        Die vorübergehende Speicherung der IP-Adresse durch das System ist notwendig, um eine Auslieferung der Website an den Rechner des Nutzers zu ermöglichen. Hierfür muss die IP-Adresse des Nutzers für die Dauer der Sitzung gespeichert bleiben.
                        <br>
                        Die Speicherung in Logfiles erfolgt, um die Funktionsfähigkeit der Website sicherzustellen. Zudem dienen uns die Daten zur Optimierung der Website und zur Sicherstellung der Sicherheit unserer informationstechnischen Systeme. Eine Auswertung der Daten zu Marketingzwecken findet in diesem Zusammenhang nicht statt.
                        <br>
                        In diesen Zwecken liegt auch unser berechtigtes Interesse an der Datenverarbeitung nach Art. 6 Abs. 1 lit. f DSGVO.
                    </p>

                    <h4 class="font-lg my-4">
                        4. DAUER DER SPEICHERUNG
                    </h4>
                    <p>
                        Die Daten werden gelöscht, sobald sie für die Erreichung des Zweckes ihrer Erhebung nicht mehr erforderlich sind. Im Falle der Erfassung der Daten zur Bereitstellung der Website ist dies der Fall, wenn die jeweilige Sitzung beendet ist.
                        <br>
                        Im Falle der Speicherung der Daten in Logfiles ist dies nach spätestens sieben Tagen der Fall. Der Grund für die Speicherung sind verschiedene Sicherheitsgründe (z.B. zur Aufklärung von Straftaten) – aus diesem Grund ist eine darüberhinausgehende Speicherung möglich. Im Falle von anderweitiger Speicherungen der Daten, werden die IP-Adressen der Nutzer gelöscht oder verfremdet, sodass eine Zuordnung des aufrufenden Clients nicht mehr möglich ist.
                    </p>

                    <h4 class="font-lg my-4">
                        5. WIDERSPRUCHS- UND BESEITIGUNGSMÖGLICHKEIT
                    </h4>
                    <p>Die Erfassung der Daten zur Bereitstellung der Website und die Speicherung der Daten in Logfiles ist für den Betrieb der Internetseite zwingend erforderlich. Es besteht folglich seitens des Nutzers keine Widerspruchsmöglichkeit.</p>

                    <h3 class="font-xl mb-4 mt-8 font-bold">
                        V. VERWENDUNG VON COOKIES
                    </h3>

                    <h4 class="font-lg my-4">
                        A) BESCHREIBUNG UND UMFANG DER DATENVERARBEITUNG
                    </h4>
                    <p>
                        Unsere Webseite verwendet Cookies. Bei Cookies handelt es sich um Textdateien, die im Internetbrowser bzw. vom Internetbrowser auf dem Computersystem des Nutzers gespeichert werden. Ruft ein Nutzer eine Website auf, so kann ein Cookie auf dem Betriebssystem des Nutzers gespeichert werden. Dieser Cookie enthält eine charakteristische Zeichenfolge, die eine eindeutige Identifizierung des Browsers beim erneuten Aufrufen der Website ermöglicht.
                        <br>
                        Wir setzen Cookies ein, um unsere Website nutzerfreundlicher zu gestalten. Einige Elemente unserer Internetseite erfordern es, dass der aufrufende Browser auch nach einem Seitenwechsel identifiziert werden kann.
                        <br>
                        In den Cookies werden dabei folgende Daten gespeichert und übermittelt:
                        <br>
                    <ul class="ml-5 list-disc">
                        <li>

                            Log-In-Informationen
                        </li>
                        <li>

                            Ggf. Spracheinstellungen
                        </li>
                    </ul>
                    <br>
                    Wir verwenden auf unserer Website darüber hinaus Cookies, die eine Analyse des Surfverhaltens der Nutzer ermöglichen.
                    <br>
                    Auf diese Weise können folgende Daten übermittelt werden:
                    <br>
                    <ul class="ml-5 list-disc">
                        <li>

                            Eingegebene Suchbegriffe
                        </li>
                        <li>

                            Häufigkeit von Seitenaufrufen
                        </li>
                        <li>

                            Inanspruchnahme von Website-Funktionen
                        </li>
                    </ul>
                    <br>
                    Die auf diese Weise erhobenen Daten der Nutzer werden durch technische Vorkehrungen pseudonymisiert. Daher ist eine Zuordnung der Daten zum aufrufenden Nutzer nicht mehr möglich. Die Daten werden nicht gemeinsam mit sonstigen personenbezogenen Daten der Nutzer gespeichert.
                    <br>
                    Zur Verwaltung der eingesetzten Cookies und ähnlichen Technologien (Tracking-Pixel, Web-Beacons etc.) und diesbezüglicher Einwilligungen setzen wir das Consent Tool „Real Cookie Banner“ ein. Details zur Funktionsweise von „Real Cookie Banner“ findest du unter https://devowl.io/de/rcb/datenverarbeitung/.
                    <br>
                    Rechtsgrundlagen für die Verarbeitung von personenbezogenen Daten in diesem Zusammenhang sind Art. 6 Abs. 1 lit. c DS-GVO und Art. 6 Abs. 1 lit. f DS-GVO. Unser berechtigtes Interesse ist die Verwaltung der eingesetzten Cookies und ähnlichen Technologien und der diesbezüglichen Einwilligungen.
                    <br>
                    Die Bereitstellung der personenbezogenen Daten ist weder vertraglich vorgeschrieben noch für den Abschluss eines Vertrages notwendig. Du bist nicht verpflichtet die personenbezogenen Daten bereitzustellen. Wenn du die personenbezogenen Daten nicht bereitstellst, können wir deine Einwilligungen nicht verwalten.
                    <br>
                    Beim Aufruf unserer Website wird der Nutzer über die Verwendung von Cookies zu Analysezwecken informiert und seine Einwilligung zur Verarbeitung der in diesem Zusammenhang verwendeten personenbezogenen Daten eingeholt. In diesem Zusammenhang erfolgt auch ein Hinweis auf diese Datenschutzerklärung.
                    </p>

                    <h4 class="font-lg my-4">
                        B) RECHTSGRUNDLAGE FÜR DIE DATENVERARBEITUNG
                    </h4>
                    <p>
                        Die Rechtsgrundlage für die Verarbeitung personenbezogener Daten unter Verwendung technisch notweniger Cookies ist Art. 6 Abs. 1 lit. f DSGVO.
                        <br>
                        Die Rechtsgrundlage für die Verarbeitung personenbezogener Daten unter Verwendung von Cookies zu Analysezwecken ist bei Vorliegen einer diesbezüglichen Einwilligung des Nutzers Art. 6 Abs. 1 lit. a DSGVO.
                    </p>

                    <h4 class="font-lg my-4">
                        C) ZWECK DER DATENVERARBEITUNG
                    </h4>
                    <p>
                        Der Zweck der Verwendung technisch notwendiger Cookies ist, die Nutzung von Websites für die Nutzer zu vereinfachen. Einige Funktionen unserer Internetseite können ohne den Einsatz von Cookies nicht angeboten werden. Für diese ist es erforderlich, dass der Browser auch nach einem Seitenwechsel wiedererkannt wird.
                        <br>
                        Für folgende Anwendungen benötigen wir Cookies:
                        <br>
                        <br>
                    <ul class="ml-5 list-disc">
                        <li>

                            Übernahme von Spracheinstellungen
                        </li>
                        <li>

                            Merken von Suchbegriffen
                        </li>
                    </ul>
                    <br>
                    Die durch technisch notwendige Cookies erhobenen Nutzerdaten werden nicht zur Erstellung von Nutzerprofilen verwendet.
                    <br>
                    Die Verwendung der Analyse-Cookies erfolgt zu dem Zweck, die Qualität unserer Website und ihre Inhalte zu verbessern. Durch die Analyse-Cookies erfahren wir, wie die Website genutzt wird und können so unser Angebot stetig optimieren.
                    <br>
                    In diesen Zwecken liegt auch unser berechtigtes Interesse in der Verarbeitung der personenbezogenen Daten nach Art. 6 Abs. 1 lit. f DSGVO.
                    </p>

                    <h4 class="font-lg my-4">
                        E) DAUER DER SPEICHERUNG, WIDERSPRUCHS- UND BESEITIGUNGSMÖGLICHKEIT
                    </h4>
                    <p>
                        Cookies werden auf dem Rechner des Nutzers gespeichert und von diesem an unserer Seite übermittelt. Daher haben Sie als Nutzer auch die volle Kontrolle über die Verwendung von Cookies. Durch eine Änderung der Einstellungen in Ihrem Internetbrowser können Sie die Übertragung von Cookies deaktivieren oder einschränken. Bereits gespeicherte Cookies können jederzeit gelöscht werden. Dies kann auch automatisiert erfolgen. Werden Cookies für unsere Website deaktiviert, können möglicherweise nicht mehr alle Funktionen der Website vollumfänglich genutzt werden.
                        <br>
                        Die Übermittlung von Flash-Cookies lässt sich nicht über die Einstellungen des Browsers, jedoch durch Änderungen der Einstellung des Flash Players unterbinden.
                    </p>

                    <h3 class="font-xl mb-4 mt-8 font-bold">
                        VI. KONTAKTAUFNAHME
                    </h3>
                    <h4 class="font-lg my-4">
                        1. BESCHREIBUNG UND UMFANG DER DATENVERARBEITUNG
                    </h4>
                    <p>
                        Es ist eine Kontaktaufnahme über die bereitgestellte E-Mail-Adresse oder Telefonnummer möglich. In diesem Fall werden die mit der E-Mail übermittelten personenbezogenen Daten des Nutzers gespeichert.
                        <br>
                        Wir weisen darauf hin, dass die Angaben in einem Computer/ Software System (z.B. in einem „CRM System“) gespeichert werden können.
                        <br>
                        Es erfolgt in diesem Zusammenhang keine Weitergabe der Daten an Dritte. Die Daten werden ausschließlich für die Verarbeitung der Konversation verwendet.
                    </p>
                    <h4 class="font-lg my-4">
                        2. RECHTSGRUNDLAGE FÜR DIE DATENVERARBEITUNG
                    </h4>
                    <p>
                        Rechtsgrundlage für die Verarbeitung der Daten ist bei Vorliegen einer Einwilligung des Nutzers Art. 6 Abs. 1 lit. a DSGVO.
                        <br>
                        Rechtsgrundlage für die Verarbeitung der Daten, die im Zuge einer Übersendung einer E-Mail übermittelt werden, ist Art. 6 Abs. 1 lit. f DSGVO. Zielt der E-Mail-Kontakt auf den Abschluss eines Vertrages ab, so ist zusätzliche Rechtsgrundlage für die Verarbeitung Art. 6 Abs. 1 lit. b DSGVO.
                    </p>
                    <h4 class="font-lg my-4">
                        3. ZWECK DER DATENVERARBEITUNG
                    </h4>
                    <p>Die Verarbeitung der personenbezogenen Daten dient uns allein zur Bearbeitung der Kontaktaufnahme. Im Falle einer Kontaktaufnahme per E-Mail liegt hieran auch das erforderliche berechtigte Interesse an der Verarbeitung der Daten.</p>
                    <h4 class="font-lg my-4">
                        4. DAUER DER SPEICHERUNG
                    </h4>
                    <p>
                        Die Daten werden gelöscht, sobald sie für die Erreichung des Zweckes ihrer Erhebung nicht mehr erforderlich sind. Für die personenbezogenen Daten, die per E-Mail übersandt wurden, ist dies dann der Fall, wenn die jeweilige Konversation mit dem Nutzer beendet ist. Beendet ist die Konversation dann, wenn sich aus den Umständen entnehmen lässt, dass der betroffene Sachverhalt abschließend geklärt ist.
                        <br>
                        Die während des Absendevorgangs zusätzlich erhobenen personenbezogenen Daten werden spätestens nach einer Frist von sieben Tagen gelöscht.
                    </p>
                    <h4 class="font-lg my-4">
                        5. WIDERSPRUCHS- UND BESEITIGUNGSMÖGLICHKEIT
                    </h4>
                    <p>
                        Der Nutzer hat jederzeit die Möglichkeit, seine Einwilligung zur Verarbeitung der personenbezogenen Daten zu widerrufen. Nimmt der Nutzer per E-Mail Kontakt mit uns auf, so kann er der Speicherung seiner personenbezogenen Daten jederzeit widersprechen. In einem solchen Fall kann die Konversation nicht fortgeführt werden.
                        <br>
                        Der Widerruf der Einwilligung ist schriftlich an unseren Datenschutzbeauftragten zu richten.
                        <br>
                        Alle personenbezogenen Daten, die im Zuge der Kontaktaufnahme gespeichert wurden, werden in diesem Fall gelöscht.
                    </p>

                    <h3 class="font-xl mb-4 mt-8 font-bold">
                        IX. GOOGLE FONTS
                    </h3>
                    <p>
                        Auf unserer Website binden wir die Schriftarten („Google Fonts“) des Anbieters Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA, ein. Die Datenschutzerklärung von Google finden Sie unter Datenschutzerklärung: https://www.google.com/policies/privacy/,
                        <br>
                        Das Opt-Out Verfahren können Sie unter: https://adssettings.google.com/authenticated aufrufen.
                    </p>

                    <h3 class="font-xl mb-4 mt-8 font-bold">
                        XI. RECHTE DER BETROFFENEN PERSON
                    </h3>
                    <p>
                        Diese Webseite nutzt Google Maps zur Darstellung interaktiver Karten und zur Erstellung von Anfahrtsbeschreibungen. Google Maps ist ein Kartendienst von Google Inc., 1600 Amphitheatre Parkway, Mountain View, California 94043, USA. Durch die Nutzung von Google Maps können Informationen über die Benutzung dieser Website einschließlich Ihrer IP-Adresse und der im Rahmen der Routenplanerfunktion eingegebenen (Start-) Adresse an Google in den USA übertragen werden. Wenn Sie unsere Website aufrufen, die Google Maps enthält, baut Ihr Browser eine direkte Verbindung mit den Servern von Google auf. Der Karteninhalt wird von Google direkt an Ihren Browser übermittelt und von diesem in die Webseite eingebunden. Daher haben wir keinen Einfluss auf den Umfang der auf diese Weise von Google erhobenen Daten. Entsprechend unserem Kenntnisstand sind dies zumindest folgende Daten:
                        <br>
                        Datum und Uhrzeit des Besuchs auf der betreffenden Webseite,
                        Internetadresse oder URL der aufgerufenen Webseite,
                        IP-Adresse, im Rahmen der Routenplanung eingegebene (Start-)Anschrift.
                        Auf die weitere Verarbeitung und Nutzung der Daten durch Google haben wir keinen Einfluss und können daher hierfür keine Verantwortung übernehmen.
                        Wenn Sie nicht möchten, dass Google über unseren Internetauftritt Daten über Sie erhebt, verarbeitet oder nutzt, können Sie in Ihrem Browsereinstellungen JavaScript deaktivieren. In diesem Fall können Sie die Kartenanzeige jedoch nicht nutzen.
                        Zweck und Umfang der Datenerhebung und die weitere Verarbeitung und Nutzung der Daten durch Google sowie Ihre diesbezüglichen Rechte und Einstellungsmöglichkeiten zum Schutz Ihrer Privatsphäre entnehmen Sie bitte den Datenschutzhinweisen von Google (https://policies.google.com/privacy?hl=de).
                        Durch die Nutzung unserer Webseite erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google Maps Routenplaner in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.
                    </p>

                    <h3 class="font-xl mb-4 mt-8 font-bold">
                        XI. RECHTE DER BETROFFENEN PERSON
                    </h3>
                    <p>Werden personenbezogene Daten von Ihnen verarbeitet, sind Sie Betroffener i.S.d. DSGVO und es stehen Ihnen folgende Rechte gegenüber dem Verantwortlichen zu:</p>
                    <h4 class="font-lg my-4">
                        1. AUSKUNFTSRECHT
                    </h4>
                    <p>
                        Sie können von dem Verantwortlichen eine Bestätigung darüber verlangen, ob personenbezogene Daten, die Sie betreffen, von uns verarbeitet werden.
                        <br>
                        Liegt eine solche Verarbeitung vor, können Sie von dem Verantwortlichen über folgende Informationen Auskunft verlangen:
                        <br>
                        die Zwecke, zu denen die personenbezogenen Daten verarbeitet werden;<br>
                        die Kategorien von personenbezogenen Daten, welche verarbeitet werden;<br>
                        die Empfänger bzw. die Kategorien von Empfängern, gegenüber denen die Sie betreffenden personenbezogenen Daten offengelegt wurden oder noch offengelegt werden;<br>
                        die geplante Dauer der Speicherung der Sie betreffenden personenbezogenen Daten oder, falls konkrete Angaben hierzu nicht möglich sind, Kriterien für die Festlegung der Speicherdauer;<br>
                        das Bestehen eines Rechts auf Berichtigung oder Löschung der Sie betreffenden personenbezogenen Daten, eines Rechts auf Einschränkung der Verarbeitung durch den Verantwortlichen oder eines Widerspruchsrechts gegen diese Verarbeitung;<br>
                        das Bestehen eines Beschwerderechts bei einer Aufsichtsbehörde;<br>
                        alle verfügbaren Informationen über die Herkunft der Daten, wenn die personenbezogenen Daten nicht bei der betroffenen Person erhoben werden;<br>
                        das Bestehen einer automatisierten Entscheidungsfindung einschließlich Profiling gemäß Art. 22 Abs. 1 und 4 DSGVO und – zumindest in diesen Fällen – aussagekräftige Informationen über die involvierte Logik sowie die Tragweite und die angestrebten Auswirkungen einer derartigen Verarbeitung für die betroffene Person. <br>
                        Ihnen steht das Recht zu, Auskunft darüber zu verlangen, ob die Sie betreffenden personenbezogenen Daten in ein Drittland oder an eine internationale Organisation übermittelt werden. In diesem Zusammenhang können Sie verlangen, über die geeigneten Garantien gem. Art. 46 DSGVO im Zusammenhang mit der Übermittlung unterrichtet zu werden. <br>
                    </p>
                    <h4 class="font-lg my-4">
                        2. RECHT AUF BERICHTIGUNG
                    </h4>
                    <p>Sie haben ein Recht auf Berichtigung und/oder Vervollständigung gegenüber dem Verantwortlichen, sofern die verarbeiteten personenbezogenen Daten, die Sie betreffen, unrichtig oder unvollständig sind. Der Verantwortliche hat die Berichtigung unverzüglich vorzunehmen.</p>
                    <h4 class="font-lg my-4">
                        3. RECHT AUF EINSCHRÄNKUNG DER VERARBEITUNG
                    </h4>
                    <p>
                        Unter den folgenden Voraussetzungen können Sie die Einschränkung der Verarbeitung der Sie betreffenden personenbezogenen Daten verlangen:
                        <br>
                        wenn Sie die Richtigkeit der Sie betreffenden personenbezogenen für eine Dauer bestreiten, die es dem Verantwortlichen ermöglicht, die Richtigkeit der personenbezogenen Daten zu überprüfen;
                        die Verarbeitung unrechtmäßig ist und Sie die Löschung der personenbezogenen Daten ablehnen und stattdessen die Einschränkung der Nutzung der personenbezogenen Daten verlangen;
                        der Verantwortliche die personenbezogenen Daten für die Zwecke der Verarbeitung nicht länger benötigt, Sie diese jedoch zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen benötigen, oder
                        wenn Sie Widerspruch gegen die Verarbeitung gemäß Art. 21 Abs. 1 DSGVO eingelegt haben und noch nicht feststeht, ob die berechtigten Gründe des Verantwortlichen gegenüber Ihren Gründen überwiegen.
                        Wurde die Verarbeitung der Sie betreffenden personenbezogenen Daten eingeschränkt, dürfen diese Daten – von ihrer Speicherung abgesehen – nur mit Ihrer Einwilligung oder zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen oder zum Schutz der Rechte einer anderen natürlichen oder juristischen Person oder aus Gründen eines wichtigen öffentlichen Interesses der Union oder eines Mitgliedstaats verarbeitet werden.
                        <br>
                        Wurde die Einschränkung der Verarbeitung nach den o.g. Voraussetzungen eingeschränkt, werden Sie von dem Verantwortlichen unterrichtet bevor die Einschränkung aufgehoben wird.
                    </p>
                    <h4 class="font-lg my-4">
                        4. RECHT AUF LÖSCHUNG
                    </h4>
                    <h5 class="font-lg my-4">
                        A) LÖSCHUNGSPFLICHT
                    </h5>
                    <p>
                        Sie können von dem Verantwortlichen verlangen, dass die Sie betreffenden personenbezogenen Daten unverzüglich gelöscht werden, und der Verantwortliche ist verpflichtet, diese Daten unverzüglich zu löschen, sofern einer der folgenden Gründe zutrifft:
                        <br>
                        Die Sie betreffenden personenbezogenen Daten sind für die Zwecke, für die sie erhoben oder auf sonstige Weise verarbeitet wurden, nicht mehr notwendig.
                        Sie widerrufen Ihre Einwilligung, auf die sich die Verarbeitung gem. Art. 6 Abs. 1 lit. a oder Art. 9 Abs. 2 lit. a DSGVO stützte, und es fehlt an einer anderweitigen Rechtsgrundlage für die Verarbeitung.
                        Sie legen gem. Art. 21 Abs. 1 DSGVO Widerspruch gegen die Verarbeitung ein und es liegen keine vorrangigen berechtigten Gründe für die Verarbeitung vor, oder Sie legen gem. Art. 21 Abs. 2 DSGVO Widerspruch gegen die Verarbeitung ein.
                        Die Sie betreffenden personenbezogenen Daten wurden unrechtmäßig verarbeitet.
                        Die Löschung der Sie betreffenden personenbezogenen Daten ist zur Erfüllung einer rechtlichen Verpflichtung nach dem Unionsrecht oder dem Recht der Mitgliedstaaten erforderlich, dem der Verantwortliche unterliegt.
                        Die Sie betreffenden personenbezogenen Daten wurden in Bezug auf angebotene Dienste der Informationsgesellschaft gemäß Art. 8 Abs. 1 DSGVO erhoben.
                    </p>
                    <h5 class="font-lg my-4">
                        B) INFORMATION AN DRITTE
                    </h5>
                    <p>Hat der Verantwortliche die Sie betreffenden personenbezogenen Daten öffentlich gemacht und ist er gem. Art. 17 Abs. 1 DSGVO zu deren Löschung verpflichtet, so trifft er unter Berücksichtigung der verfügbaren Technologie und der Implementierungskosten angemessene Maßnahmen, auch technischer Art, um für die Datenverarbeitung Verantwortliche, die die personenbezogenen Daten verarbeiten, darüber zu informieren, dass Sie als betroffene Person von ihnen die Löschung aller Links zu diesen personenbezogenen Daten oder von Kopien oder Replikationen dieser personenbezogenen Daten verlangt haben.</p>
                    <h5 class="font-lg my-4">
                        C) AUSNAHMEN
                    </h5>
                    <p>
                        Das Recht auf Löschung besteht nicht, soweit die Verarbeitung erforderlich ist
                        <br>
                        zur Ausübung des Rechts auf freie Meinungsäußerung und Information;
                        zur Erfüllung einer rechtlichen Verpflichtung, die die Verarbeitung nach dem Recht der Union oder der Mitgliedstaaten, dem der Verantwortliche unterliegt, erfordert, oder zur Wahrnehmung einer Aufgabe, die im öffentlichen Interesse liegt oder in Ausübung öffentlicher Gewalt erfolgt, die dem Verantwortlichen übertragen wurde;
                        aus Gründen des öffentlichen Interesses im Bereich der öffentlichen Gesundheit gemäß Art. 9 Abs. 2 lit. h und i sowie Art. 9 Abs. 3 DSGVO;
                        für im öffentlichen Interesse liegende Archivzwecke, wissenschaftliche oder historische Forschungszwecke oder für statistische Zwecke gem. Art. 89 Abs. 1 DSGVO, soweit das unter Abschnitt a) genannte Recht voraussichtlich die Verwirklichung der Ziele dieser Verarbeitung unmöglich macht oder ernsthaft beeinträchtigt, oder
                        zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.
                    </p>
                    <h4 class="font-lg my-4">
                        5. RECHT AUF UNTERRICHTUNG
                    </h4>
                    <p>
                        Haben Sie das Recht auf Berichtigung, Löschung oder Einschränkung der Verarbeitung gegenüber dem Verantwortlichen geltend gemacht, ist dieser verpflichtet, allen Empfängern, denen die Sie betreffenden personenbezogenen Daten offengelegt wurden, diese Berichtigung oder Löschung der Daten oder Einschränkung der Verarbeitung mitzuteilen, es sei denn, dies erweist sich als unmöglich oder ist mit einem unverhältnismäßigen Aufwand verbunden.
                        <br>
                        Ihnen steht gegenüber dem Verantwortlichen das Recht zu, über diese Empfänger unterrichtet zu werden.
                    </p>
                    <h4 class="font-lg my-4">
                        6. RECHT AUF DATENÜBERTRAGBARKEIT
                    </h4>
                    <p>
                        Sie haben das Recht, die Sie betreffenden personenbezogenen Daten, die Sie dem Verantwortlichen bereitgestellt haben, in einem strukturierten, gängigen und maschinenlesbaren Format zu erhalten. Außerdem haben Sie das Recht diese Daten einem anderen Verantwortlichen ohne Behinderung durch den Verantwortlichen, dem die personenbezogenen Daten bereitgestellt wurden, zu übermitteln, sofern
                        <br>
                        die Verarbeitung auf einer Einwilligung gem. Art. 6 Abs. 1 lit. a DSGVO oder Art. 9 Abs. 2 lit. a DSGVO oder auf einem Vertrag gem. Art. 6 Abs. 1 lit. b DSGVO beruht und
                        die Verarbeitung mithilfe automatisierter Verfahren erfolgt.
                        In Ausübung dieses Rechts haben Sie ferner das Recht, zu erwirken, dass die Sie betreffenden personenbezogenen Daten direkt von einem Verantwortlichen einem anderen Verantwortlichen übermittelt werden, soweit dies technisch machbar ist. Freiheiten und Rechte anderer Personen dürfen hierdurch nicht beeinträchtigt werden.
                        <br>
                        Das Recht auf Datenübertragbarkeit gilt nicht für eine Verarbeitung personenbezogener Daten, die für die Wahrnehmung einer Aufgabe erforderlich ist, die im öffentlichen Interesse liegt oder in Ausübung öffentlicher Gewalt erfolgt, die dem Verantwortlichen übertragen wurde.
                    </p>
                    <h4 class="font-lg my-4">
                        7. WIDERSPRUCHSRECHT
                    </h4>
                    <p>
                        Sie haben das Recht, aus Gründen, die sich aus ihrer besonderen Situation ergeben, jederzeit gegen die Verarbeitung der Sie betreffenden personenbezogenen Daten, die aufgrund von Art. 6 Abs. 1 lit. e oder f DSGVO erfolgt, Widerspruch einzulegen; dies gilt auch für ein auf diese Bestimmungen gestütztes Profiling.
                        <br>
                        Der Verantwortliche verarbeitet die Sie betreffenden personenbezogenen Daten nicht mehr, es sei denn, er kann zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die Ihre Interessen, Rechte und Freiheiten überwiegen, oder die Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.
                        <br>
                        Werden die Sie betreffenden personenbezogenen Daten verarbeitet, um Direktwerbung zu betreiben, haben Sie das Recht, jederzeit Widerspruch gegen die Verarbeitung der Sie betreffenden personenbezogenen Daten zum Zwecke derartiger Werbung einzulegen; dies gilt auch für das Profiling, soweit es mit solcher Direktwerbung in Verbindung steht.
                        <br>
                        Widersprechen Sie der Verarbeitung für Zwecke der Direktwerbung, so werden die Sie betreffenden personenbezogenen Daten nicht mehr für diese Zwecke verarbeitet.
                        <br>
                        Sie haben die Möglichkeit, im Zusammenhang mit der Nutzung von Diensten der Informationsgesellschaft – ungeachtet der Richtlinie 2002/58/EG – Ihr Widerspruchsrecht mittels automatisierter Verfahren auszuüben, bei denen technische Spezifikationen verwendet werden.
                    </p>
                    <h4 class="font-lg my-4">
                        8. RECHT AUF WIDERRUF DER DATENSCHUTZRECHTLICHEN EINWILLIGUNGSERKLÄRUNG
                    </h4>
                    <p>Sie haben das Recht, Ihre datenschutzrechtliche Einwilligungserklärung jederzeit zu widerrufen. Durch den Widerruf der Einwilligung wird die Rechtmäßigkeit der aufgrund der Einwilligung bis zum Widerruf erfolgten Verarbeitung nicht berührt.</p>
                    <h4 class="font-lg my-4">
                        9. AUTOMATISIERTE ENTSCHEIDUNG IM EINZELFALL EINSCHLIESSLICH PROFILING
                    </h4>
                    <p>
                        Sie haben das Recht, nicht einer ausschließlich auf einer automatisierten Verarbeitung – einschließlich Profiling – beruhenden Entscheidung unterworfen zu werden, die Ihnen gegenüber rechtliche Wirkung entfaltet oder Sie in ähnlicher Weise erheblich beeinträchtigt. Dies gilt nicht, wenn die Entscheidung
                        <br>
                        für den Abschluss oder die Erfüllung eines Vertrags zwischen Ihnen und dem Verantwortlichen erforderlich ist,
                        aufgrund von Rechtsvorschriften der Union oder der Mitgliedstaaten, denen der Verantwortliche unterliegt, zulässig ist und diese Rechtsvorschriften angemessene Maßnahmen zur Wahrung Ihrer Rechte und Freiheiten sowie Ihrer berechtigten Interessen enthalten oder
                        mit Ihrer ausdrücklichen Einwilligung erfolgt.
                        Allerdings dürfen diese Entscheidungen nicht auf besonderen Kategorien personenbezogener Daten nach Art. 9 Abs. 1 DSGVO beruhen, sofern nicht Art. 9 Abs. 2 lit. a oder g DSGVO gilt und angemessene Maßnahmen zum Schutz der Rechte und Freiheiten sowie Ihrer berechtigten Interessen getroffen wurden.
                        <br>
                        Hinsichtlich der in (1) und (3) genannten Fälle trifft der Verantwortliche angemessene Maßnahmen, um die Rechte und Freiheiten sowie Ihre berechtigten Interessen zu wahren, wozu mindestens das Recht auf Erwirkung des Eingreifens einer Person seitens des Verantwortlichen, auf Darlegung des eigenen Standpunkts und auf Anfechtung der Entscheidung gehört.
                    </p>
                    <h4 class="font-lg my-4">
                        10. RECHT AUF BESCHWERDE BEI EINER AUFSICHTSBEHÖRDE
                    </h4>
                    <p>
                        Unbeschadet eines anderweitigen verwaltungsrechtlichen oder gerichtlichen Rechtsbehelfs steht Ihnen das Recht auf Beschwerde bei einer Aufsichtsbehörde, insbesondere in dem Mitgliedstaat ihres Aufenthaltsorts, ihres Arbeitsplatzes oder des Orts des mutmaßlichen Verstoßes, zu, wenn Sie der Ansicht sind, dass die Verarbeitung der Sie betreffenden personenbezogenen Daten gegen die DSGVO verstößt.
                        <br>
                        Die Aufsichtsbehörde, bei der die Beschwerde eingereicht wurde, unterrichtet den Beschwerdeführer über den Stand und die Ergebnisse der Beschwerde einschließlich der Möglichkeit eines gerichtlichen Rechtsbehelfs nach Art. 78 DSGVO.
                    </p>
                </section>
            </div>
            <!-- Footer Section einfügen    -->
            <?php include BASE_PATH . '/components/includes/footer.php'; ?>
        </div>
    </div>
</body>

</html>