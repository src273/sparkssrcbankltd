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
    <div class ="container">
      <p>All Customers:</p>
      <table id="tab">
      <tr>
        <th>S. No.</th>
        <th>Name</th>
        <th>Login</th>
      </tr>
      <tr>
      <td>1</td>
      <td>Ritwik Shaw</td>
      <td><form action="account.php" method="post">
        <button type="submit" name="name" value="Ritwik Shaw" class="btn-link">Login</button>
      </form></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Ratul Chatterjee</td>
        <td><form action="account.php" method="post">
          <button type="submit" name="name" value="Ratul Chatterjee" class="btn-link">Login</button></form></td>
        </tr>
      <tr>
      <td>3</td>
      <td>Bannani Deb</td>
      <td><form action="account.php" method="post">
          <button type="submit" name="name" value="Bannani Deb" class="btn-link">Login</button></form></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Soham Das</td>
      <td><form action="account.php" method="post">
          <button type="submit" name="name" value="Soham Das" class="btn-link">Login</button></form></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Diya Neogi</td>
      <td><form action="account.php" method="post">
          <button type="submit" name="name" value="Diya Neogi" class="btn-link">Login</button></form></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Ashif Mondal</td>
      <td><form action="account.php" method="post">
          <button type="submit" name="name" value="Ashif Mondal" class="btn-link">Login</button></form></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Arpon Roy</td>
      <td><form action="account.php" method="post">
          <button type="submit" name="name" value="Arpon Roy" class="btn-link">Login</button></form></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Bidisha Saha</td>
      <td><form action="account.php" method="post">
          <button type="submit" name="name" value="Bidisha Saha" class="btn-link">Login</button></form></td>
    </tr>
    <tr>
      <td>9</td>
      <td>Bidipta Saha</td>
      <td><form action="account.php" method="post">
          <button type="submit" name="name" value="Bidipta Saha" class="btn-link">Login</button></form></td>
    </tr>
    <tr>
      <td>10</td>
      <td>Shuvayan Roy Chowdhury</td>
      <td><form action="account.php" method="post">
          <button type="submit" name="name" value="Shuvayan Roy Chowdhury" class="btn-link">Login</button></form></td>
    </tr>

      </table>
</div>
</body>
</html>