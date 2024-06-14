<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Review our Radiowęzeł!</title>
        <script src="js/javascript.js"> </script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="encryptContainer">
                <h1>Szyfrowanie</h1>
                <form id="form">
                    Klucz: 
                    <input type="text" id="key" name="key" placeholder="Type.." required><sup> *</sup><br><br>
                    Wiadomość:<br></br>
                    <textarea id="message" name="message" placeholder="Type.."></textarea><sup> *</sup><br></br>
                    <sup>* - wymagane</sup><br></br>
                    <button type="button" onClick="encrypt()">Encrypt</button>
                </form>
            </div>
            <div class="decryptContainer">
                <h1>Deszyfrowanie</h1>
                <form id="form">
                    Klucz: 
                    <input type="text" id="key" name="key" placeholder="Type.." required><sup> *</sup><br><br>
                    Wiadomość:<br></br>
                    <textarea id="message" name="message" placeholder="Type.."></textarea><sup> *</sup><br></br>
                    <sup>* - wymagane</sup><br></br>
                    <button type="button" onClick="decrypt()">Decrypt</button>
                </form>
                
                <!-- <?php
                    // Database connection
                    $dbConnection=new mysqli('localhost', 'root','','reviews');

                    if($dbConnection->connect_error){
                        die("Connection Error: ".$dbConnection->connect_error);
                    }
                    // Use prepared statements to avoid SQL injection
                    $query="SELECT * FROM Reviews_table ORDER BY date DESC, time DESC";
                    $result =$dbConnection->query($query);
                    // fetching data from the database
                    if($result->num_rows>0){
                        while ($row = $result->fetch_assoc()){
                            $year=substr($row['date'],2,2);
                            $month=substr($row['date'],5,2);
                            $day=substr($row['date'],8,2);
                            $hour=substr($row['time'],0,5);
                       echo "<div class='reviewView'>";
                       echo "<div class='reviewHeader'>";
                           echo "<div class='reviewNick'>".$row['nickname']." $day/$month/$year $hour</div>";
                           echo "<div class='reviewRates'>Assortment: ".$row['assortment_rating']." Service: ".$row['service_rating']." Decor: ".$row['decor_rating']."</div>";
                        echo "</div>";
                        echo "<p><div class='reviewDesc'>".$row['description'];
                        echo "</div></p>";
                    echo "</div>";
                        }
                    }
                    else{
                        echo "No reviews yet.";
                    }
                    // Close the database connection
                    $dbConnection->close();
                ?> -->
            </div>
        </div>
    </body>
</html>