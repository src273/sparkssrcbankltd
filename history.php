<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark SRC Bank</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bank.jpg" alt="BANK image">
    <div class= "container">
        <h1>SPARK SRC BANKING SYSTEM</h1>
        <hr>
    </div>
    <div class="topnav">
            <a href="index.php">Home</a>
            <a href="login.php">Services</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
    </div>
    <div class="container">
        <?php 
        
            $servername = "localhost";
            $username = "id17575079_srcbank";
            $password = "E<nPjA1vq}T=Xl66";
            $database = "id17575079_bank";

            $con = mysqli_connect($servername, $username, $password, $database);

            if(!$con){
                die("connection to this database failed due to" . mysqli_connect_error());
             }

            $name = $_POST['name'];   //I changed it here
            echo "<p>Welcome $name </p>";
            $sql = "SELECT * FROM `history` WHERE sender='$name' OR receiver='$name' " ;
            $result = mysqli_query($con, $sql);
            
            if($result){
                echo "<p>Your Transaction History:</p>";
                echo "<table><tr><th>Sender</th><th>Receiver</th><th>Amount</th><th>Date and Time</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                 echo "<tr><td>".$row['sender']."</td><td>".$row['receiver']."</td><td>".$row['money']."</td><td>".$row['date']."</td></tr>";
                }
                 echo "</table>"; 
                echo "<br>";

                    echo "<form action='account.php' method='post'>
                            <button type='submit' name='name' value= '$name' class='btn'>Bank To Account Page</button>  
                         </form>";

            }
            else{
                echo "<p>Sorry No Transaction Record Found </p> ";
            }

            $con->close();

        ?>
    </div>
    </body>
</html>