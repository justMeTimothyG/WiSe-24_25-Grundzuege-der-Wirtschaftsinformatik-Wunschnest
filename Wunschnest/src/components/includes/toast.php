<?php
echo '<div id="toast" class="mt-8 overflow-hidden transition-all duration-400 ease-in-out">';


# Prüfe in den Session Daten, ob eine Nachricht angezeigt werden sollte
if (isset($_SESSION['message']) && isset($_SESSION['check'])) {
    # Lade die Toast Komponente
    include BASE_PATH . "/components/elements/toast.php";

    # Wenn Erfolgreich gebe eine Erfolgsnachricht aus
    if ($_SESSION['check'] === 'success') {
        echo toast('success', $_SESSION['message']);
    } else {
        # Falls ein Fehler gegeben wurde, gebe eine Fehlernachricht aus
        echo toast('error', $_SESSION['message']);
    }
    # Lösche die Session Variablen, da Erfolg oder Fehler bereits angezeigt worden ist.
    unset($_SESSION['message']);
    unset($_SESSION['check']);
}

echo "</div>";
