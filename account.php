<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks SRC Bank</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bank.jpg" alt="BANK image">
    <div class= "container">
        <h1>SPARKS SRC BANKING SYSTEM</h1>
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
            $sql = "SELECT * FROM `bank` WHERE name='$name' " ;
            $result = mysqli_query($con, $sql);
        
            if($result){
                $row = mysqli_fetch_assoc($result);
                $baln = $row['balance'];
                echo "<p>Your account balance is : ₹ $baln </p>";
                echo "<br>";

               
                echo "<form action='history.php' method='post'>
                <button type='submit' name='name' value= '$name' class='btn'>View Transaction History</button>  
                </form>  
                <br>
                <form action='transfer.php' method='post'>
                <button type='submit' name='name' value= '$name' class='btn'>Transfer Money</button>  
                </form>  ";

            }

            $con->close();

        ?>
        <!-- <form action="transfer.php" method="post">
            <button type="submit" name="name" value=$name class="btn-link">Transfer</button>  
        </form>   -->
    </div>
    </body>
</html>