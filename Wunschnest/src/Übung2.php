<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bildschirmfüllende Blöcke</title>
    <style>
        /* Haupt-Container */
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        /* Gesamt-Container für die Blöcke */
        .container {
            display: flex;                   /* Flexbox, um die Blöcke nebeneinander zu platzieren */
            height: 100vh;                   /* Container nimmt die volle Bildschirmhöhe ein */
            width: 100vw;                    /* Container nimmt die volle Bildschirmbreite ein */
        }

        /* Styling für jeden Block */
        .box {
            flex-grow: 1;                    /* Jeder Block nimmt den gleichen Anteil der Breite ein */
            margin: 10px;                    /* Abstand zwischen den Blöcken */
            padding: 20px;                   /* Innenabstand */
            border: 2px solid black;         /* Schwarzer Rahmen um jeden Block */
            box-sizing: border-box;          /* Rahmen und Padding werden in der Breite und Höhe berücksichtigt */
            overflow-y: auto;                /* Ermöglicht Scrollen, falls der Inhalt zu lang ist */
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Erster Block -->
        <div class="box">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <!-- Zweiter Block -->
        <div class="box">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <!-- Dritter Block -->
        <div class="box">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

</body>
</html>
