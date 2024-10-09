<!DOCTYPE html>
<html>

<head>
    <title>Insert Email</title>
</head>

<body>
    <center>
        <?php
        // Connessione al database
        $conn = mysqli_connect("localhost", "root", "", "emaildb"); // Assicurati che il nome del tuo database sia "newsletterDB"
        
        // Verifica la connessione
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        // Recupera l'email dal form
        $email = $_REQUEST['email'];
        
        // Query di inserimento dell'email
        $sql = "INSERT INTO subscribers (email) VALUES ('$email')"; // Assicurati che la tabella si chiami "subscribers"
        
        if (mysqli_query($conn, $sql)) {
            echo "<h3>Email salvata con successo nel database!" 
                . " Puoi visualizzare i dati in phpMyAdmin.</h3>";
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }
        
        // Chiude la connessione
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
