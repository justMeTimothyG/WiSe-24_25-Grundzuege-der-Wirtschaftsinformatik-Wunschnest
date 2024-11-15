<?php

# Start Session (Hole Daten aus der Session um zu schauen, ob jemand schon eingeloggt ist.)
session_start();

# Zerstöre alle Session daten, so dass der Nutzer nicht mehr eingeloggt ist.
session_destroy();

# Leite den Nutzer zur Logout Seite weiter.
header("Location: /index.php?page=logout");
