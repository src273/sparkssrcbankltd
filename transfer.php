<?php
    $name = $_POST['name'];   //I changed it here
    // echo "Welcome ".$name;

?>
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
    <div class = "container">
        <?php
        echo "<p>Welcome $name</p>";
        ?>
    </div>
    <div class= "container">
        <form action="tran.php" method="post" >

        <?php

        echo "<label for id='sender'>The sender is:</label>
                    <input type='text' name='sender' id='sender' value='$name' readonly>";

        ?>

        <label for id="val">Enter the amount to be sent (in ₹):</label>
        <input type="number" name="val" id="val" value="10" placeholder="Enter your value" min="1">   
    
    <table>
  <tr>
    <th>Name</th>
    <th>Send</th>
  </tr>
  <?php
  echo "Choose the receiver: ";
  if($name != "Ritwik Shaw"){
    if($name == "Bidipta Saha"){
  echo "<tr>
    <td>Ritwik Shaw</td>
    <td>
        <input type='radio' name='receiver' value='Ritwik Shaw' checked>
    </td>
  </tr>";
    }
    else{
      echo "<tr>
    <td>Ritwik Shaw</td>
    <td>
        <input type='radio' name='receiver' value='Ritwik Shaw'>
    </td>
  </tr>";
    }
  }
  
  if($name != "Ratul Chatterjee"){
    if($name == "Bannani Deb"){
      echo "<tr>
        <td>Ratul Chatterjee</td>
        <td>
            <input type='radio' name='receiver' value='Ratul Chatterjee' checked>
        </td>
      </tr>";
        }
        else{
          echo "<tr>
        <td>Ratul Chatterjee</td>
        <td>
            <input type='radio' name='receiver' value='Ratul Chatterjee'>
        </td>
      </tr>";
        }
      }
  
  if($name != "Bannani Deb"){
    if($name == "Ratul Chatterjee"){
      echo "<tr>
        <td>Bannani Deb</td>
        <td>
            <input type='radio' name='receiver' value='Bannani Deb' checked>
        </td>
      </tr>";
        }
        else{
          echo "<tr>
        <td>Bannani Deb</td>
        <td>
            <input type='radio' name='receiver' value='Bannani Deb'>
        </td>
      </tr>";
        }
      }
  
  if($name != "Soham Das"){
    if($name == "Diya Neogi"){
      echo "<tr>
        <td>Soham Das</td>
        <td>
            <input type='radio' name='receiver' value='Soham Das' checked>
        </td>
      </tr>";
        }
        else{
          echo "<tr>
        <td>Soham Das</td>
        <td>
            <input type='radio' name='receiver' value='Soham Das'>
        </td>
      </tr>";
        }
      }

  if($name != "Diya Neogi"){
    if($name == "Soham Das"){
      echo "<tr>
        <td>Diya Neogi</td>
        <td>
            <input type='radio' name='receiver' value='Diya Neogi' checked>
        </td>
      </tr>";
        }
        else{
          echo "<tr>
        <td>Diya Neogi</td>
        <td>
            <input type='radio' name='receiver' value='Diya Neogi'>
        </td>
      </tr>";
        }
      }

if($name != "Ashif Mondal"){
  if($name == "Shuvayan Roy Chowdhury"){
    echo "<tr>
      <td>Ashif Mondal</td>
      <td>
          <input type='radio' name='receiver' value='Ashif Mondal' checked>
      </td>
    </tr>";
      }
      else{
        echo "<tr>
      <td>Ashif Mondal</td>
      <td>
          <input type='radio' name='receiver' value='Ashif Mondal'>
      </td>
    </tr>";
      }
    }
  
if($name != "Arpon Roy"){
  if($name == "Bidisha Saha"){
    echo "<tr>
      <td>Arpon Roy</td>
      <td>
          <input type='radio' name='receiver' value='Arpon Roy' checked>
      </td>
    </tr>";
      }
      else{
        echo "<tr>
      <td>Arpon Roy</td>
      <td>
          <input type='radio' name='receiver' value='Arpon Roy'>
      </td>
    </tr>";
      }
    }

if($name != "Bidisha Saha"){
  if($name == "Arpon Roy"){
    echo "<tr>
      <td>Bidisha Saha</td>
      <td>
          <input type='radio' name='receiver' value='Bidisha Saha' checked>
      </td>
    </tr>";
      }
      else{
        echo "<tr>
      <td>Bidisha Saha</td>
      <td>
          <input type='radio' name='receiver' value='Bidisha Saha'>
     </td>
    </tr>";
      }
    }

if($name != "Bidipta Saha"){
  if($name == "Ritwik Shaw"){
    echo "<tr>
      <td>Bidipta Saha</td>
      <td>
          <input type='radio' name='receiver' value='Bidipta Saha' checked>
      </td>
    </tr>";
      }
      else{
        echo "<tr>
      <td>Bidipta Saha</td>
      <td>
          <input type='radio' name='receiver' value='Bidipta Saha'>
      </td>
    </tr>";
      }
    }

if($name != "Shuvayan Roy Chowdhury"){
  if($name == "Ashif Mondal"){
    echo "<tr>
      <td>Shuvayan Roy Chowdhury</td>
      <td>
          <input type='radio' name='receiver' value='Shuvayan Roy Chowdhury' checked>
      </td>
    </tr>";
      }
      else{
        echo "<tr>
      <td>Shuvayan Roy Chowdhury</td>
      <td>
          <input type='radio' name='receiver' value='Shuvayan Roy Chowdhury'>
      </td>
    </tr>";
      }
    }

  ?>
</table>
<button class="btn">Send</button> 
</form>
</div>
</body>
</html>