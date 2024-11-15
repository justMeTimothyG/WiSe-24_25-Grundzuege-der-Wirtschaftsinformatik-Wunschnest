<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Einfaches Dropdown-Menü mit Kommentaren</title>
    <style>
        /* Hauptmenü-Styling */
        .menu {
            list-style: none;           /* Entfernt die Standard-Aufzählungszeichen */
            padding: 0;                 /* Entfernt den Innenabstand */
            margin: 0;                  /* Entfernt den Außenabstand */
            background-color: #ccc;     /* Hintergrundfarbe des Menüs */
            display: flex;              /* Zeigt die Menüpunkte nebeneinander an */
        }

        .menu > li {
            position: relative;         /* Ermöglicht das absolute Positionieren des Dropdown-Menüs */
            padding: 10px;              /* Innenabstand für den Menüpunkt */
        }

        .menu > li > a {
            text-decoration: none;      /* Entfernt die Unterstreichung der Links */
            color: #333;                /* Textfarbe des Hauptmenüs */
            padding: 10px;              /* Innenabstand für die Links */
            display: block;             /* Macht den Link blockförmig für einfachere Hover-Effekte */
        }

        /* Dropdown-Menü-Styling */
        .submenu {
            display: none;              /* Standardmäßig ausgeblendet */
            list-style: none;           /* Entfernt die Standard-Aufzählungszeichen */
            padding: 0;                 /* Entfernt den Innenabstand */
            margin: 0;                  /* Entfernt den Außenabstand */
            position: absolute;         /* Positioniert das Dropdown relativ zum Eltern-Element */
            top: 100%;                  /* Platziert das Dropdown unterhalb des Hauptmenüs */
            left: 0;                    /* Richtet das Dropdown links aus */
            background-color: #ddd;     /* Hintergrundfarbe des Dropdown-Menüs */
        }

        .submenu li a {
            padding: 8px;               /* Innenabstand für die Links im Dropdown-Menü */
            display: block;             /* Macht den Link blockförmig */
            text-decoration: none;      /* Entfernt die Unterstreichung */
            color: #333;                /* Textfarbe des Dropdown-Menüs */
        }

        /* Zeigt das Dropdown-Menü beim Hover über das Hauptmenüelement */
        .menu > li:hover .submenu {
            display: block;             /* Das Dropdown-Menü wird sichtbar */
        }
    </style>
</head>
<body>

    <!-- Hauptmenü-Liste -->
    <ul class="menu">
        <!-- Menüpunkt "Start" ohne Dropdown -->
        <li><a href="#">Start</a></li>
        
        <!-- Menüpunkt "Produkte" mit Dropdown -->
        <li>
            <a href="#">Produkte</a>
            <!-- Dropdown-Menü für "Produkte" -->
            <ul class="submenu">
                <li><a href="#">Produkt 1</a></li>
                <li><a href="#">Produkt 2</a></li>
                <li><a href="#">Produkt 3</a></li>
            </ul>
        </li>
        
        <!-- Menüpunkt "Über uns" mit Dropdown -->
        <li>
            <a href="#">Über uns</a>
            <!-- Dropdown-Menü für "Über uns" -->
            <ul class="submenu">
                <li><a href="#">Team</a></li>
                <li><a href="#">Karriere</a></li>
                <li><a href="#">Standorte</a></li>
            </ul>
        </li>
    </ul>

</body>
</html>
