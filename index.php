<!DOCTYPE html>
<html lang="en-ca">
   <head>
      <!-- Metadata -->
      <meta charset="utf-8" />
      <meta name="description" content="Assign-02" />
      <meta name="keywords" content="immaculata, ics2o" />
      <meta name="author" content="Marcus Wehbi" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- Link for Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
      <link rel="manifest" href="./fav_index/site.webmanifest" />
      <!-- Material Design Lite --> 
      <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      <!-- Link for Stylesheet -->
      <link rel="stylesheet" href="./css/style.css" />
      <!-- Webpage title -->
      <title>Calculating Temperature</title>
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
      <!-- Material Design icon font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   </head>
   <body>
      <!-- php echo to print the html to the page -->
      <?php include './temperatureConversions.php';?>
      <h2>Converting from Degrees Celsius into Degrees Fahrenheit</h2>
      <p>Please enter the temperature in <i>Degrees Celsius (°C)</i></p>
      <?php
         // Example taking from PHP form validation example on W3 schools and modified appropriately
         // define variables and set to empty values
         
          $temperatureInC = null;
          $temperatureInF = null;
          
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperatureInC = $_POST["inputTempInC"];
            $temperatureInF = $_POST["inputTempInF"];
          }
         ?>
      <!-- Form to retrieve information (temperature in degrees celsius) -->
      <form method="post">
         <label for="lblHeight">Temperature in Celsius:</label>
         <input type="number" step="any" id="cel" placeholder="0 °C" pattern="[0-9]+([\.,][0-9]+)?" name="inputTempInC">
         <br><br>
         <input type="submit" value="Convert">
      </form>
      <?php 
         if ($temperatureInC != null) {
           echo "<h4>The temperature in Fahrenheit is: " . convertCtoF($temperatureInC) . "</h4>";
         }
         ?>
      <h2>Converting from Degrees Fahrenheit into Degrees Celsius</h2>
      <p>Please enter the temperature in <i>Degrees Fahrenheit (°F)</i></p>
      <!-- form to get the  temperature from the user -->
      <form method="post">
         <label for=lblBase">Temperature in Fahrenheit:</label>
         <input type="number" step="any" id="cel" placeholder="0 °C" pattern="[0-9]+([\.,][0-9]+)?" name="inputTempInF">
         <br><br>
         <input type="submit" value="Convert">
      </form>
      <?php 
         if ($temperatureInF != null) {
           echo "<h4>The temperature in Celsius is: " . convertFtoC($temperatureInF) . "</h4>";
         }
         ?>
     <?php
      echo '<center><img src="./images/fc.webp"></center>';
     ?>
    <hr>
   </body>
</html>