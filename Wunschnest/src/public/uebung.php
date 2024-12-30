<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

# Save GET PARAMETERS
$anzeigen = isset($_GET['anzeigen']) ? $_GET['anzeigen'] : false;

?>


<button>
    <a href="/uebung.php?anzeigen=alles">Alles anzeigen</a>
</button>

<br><br>
    

<!-- Formular um neue Daten einzufügen in die Backwaren Datenbank  -->
 <form action="/forms_backwaren.php" method="get">
     <label for="name">Name:</label>
     <input type="text" id="name" name="name">
     <br>
     <label for="preis">Preis:</label>
     <input type="number" id="preis" name="preis">
     <br>
     <label for="gewicht">Gewicht:</label>
     <input type="number" id="gewicht" name="gewicht">
     <br>
     <input type="submit" value="Submit">
 </form>

 <hr>
 <!-- Daten ausgeben -->

 <?php

 if ($anzeigen == "alles") {

    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "BAECKEREI";

    # Connect to Database using mysqli
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM BACKWARE";
    $result = $conn->query($sql);

    $data = [];

    # Save to Array
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            # Save to Data Array 
            $data[] = $row;
        }
    } else {
        echo "0 results";
    }

    # Close Connection

    $conn->close();


    # Zeige die Daten in einer Liste an (Schleifen)
    echo "<ul>";
    foreach ($data as $backware) {

        # Build String
        $html = "";
        foreach ($backware as $key => $value) {
            if ($key == "preis") {
            $html .= "$key: $value EUR;  ";
            } else if ($key == "gewicht") {
                $html .= "$key: $value g;  ";
            } else {
                $html .= "$key: $value;  ";
            }
        }
        echo "<li>$html</li>";
}
    echo "</ul>";

 } 
?>
</body>
</html>