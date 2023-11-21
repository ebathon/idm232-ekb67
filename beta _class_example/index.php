<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://fonts.googleapis.com/css?family=Ingrid Darling' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/palatino" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<header class="header">
    <div class="logo">
        <div id="logo-left">
            <h1>Cooking Well Done</h1>
            <p> A Recepie Database for All</p>
        </div>
        <div id="logo-right">
            <img class="icon" src="images/—Pngtree—pressure cooker kitchenware soup pot_3946392.png">
        </div>
    </div>
    <div class="search-container">
        <input class="search-input" type="text" placeholder="Search...">
        <button class="search-button">Search</button>
    </div>
</header>

<body>

<?php
  // $msg = "HOWDY";
  // echo '<script type="text/javascript">console.log("'. $msg .'");</script>';

  require_once './includes/fun.php';
  consoleMsg("PHP to JS .. is Wicked FUN");

  // Include env.php that holds global vars with secret info
  require_once './env.php';

  // Include the database connection code
  require_once './includes/database.php';
  consoleMsg("unique spelling of recipe page");


?>

    <div class="filters">
        <button class="30min">30 Minutes or Less</button>
        <button class="Veg">Vegetarian</button>
        <button class="Chicken">Chicken</button>
        <button class="Beef">Beef</button>
        <button class="Pork">Pork</button>
        <button class="Fish">Fish</button>
    </div>
    <div class="grid-container">

        <div class="header-container">
            <h1>Whats New for Fall?</h1>
            <h2>Explore our Fall Favorites</h2>
        </div>

        <?php
      // Get all the recipes from "recipes" table in the "idm232" database
      $query = "SELECT * FROM recipes";
      $results = mysqli_query($db_connection, $query);
      if ($results->num_rows > 0) {
        consoleMsg("Query successful! number of rows: $results->num_rows");
        while ($oneRecipe = mysqli_fetch_array($results)) {
          // echo '<h3>' .$oneRecipe['Title']. ' - '  . $oneRecipe['Cal/Serving']  .  '</h3>'; 
          $id = $oneRecipe['id'];
          echo '<a href="./recepie.php?id='. $oneRecipe['id'] .'" class= "recepie">';
          echo '<img src="./images/' . $oneRecipe['Main IMG'] . '" alt="Dish Image">';
          echo '<figcaption>'  . $oneRecipe['Title'] . ' ' . $oneRecipe['Subtitle'] .  '</figcaption>';
          echo '</a>';
        }

      } else {
        consoleMsg("QUERY ERROR");
      }
    ?>

        <!-- <div class="recepie">
             <img src="images/Recepies/0101_2PM_Steak-Diane_97315_SQ_hi_res.jpg" alt="Steak Diane">
            <figcaption>Beef Medallions with Mushroom Sauce and Mashed Potatoes</figcaption>
        </div> -->
        <!-- <div class="recepie">
            <img src="images/Recepies/0101_2PRE07_General-Tsos-Chicken_97217_WEB_SQ_hi_res.jpg"
                alt="General Tso's Chicken">
            <figcaption>General Tso's Chicken with Bok Choy and Jasmine Rice</figcaption>
        </div>
        <div class="recepie">
            <a href= recepie.html><img src="images/Recepies/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res.jpg"
                alt="Ancho-Orange Chicken and Rice">
            <figcaption>Ancho-Orange Chicken with Kale, Rice, and Roasted Carrots</figcaption></a>
        </div>
        <div class="recepie">
            <img src="images/Recepies/0101_2PV1_Broccoli-Bucatini-Fettuccine_97230_SQ_hi_res.jpg"
                alt="Broccoli Bucatini Fettuccine">
            <figcaption>Bucatini Alfredo with Broccoli</figcaption>
        </div>
        <div class="recepie">
            <img src="images/Recepies/0101_FPF_Crispy-Wild-Alaskan-Pollock_97377_WEB_SQ_hi_res.jpg"
                alt="Crispy Wild Alaskan Pollock">
            <figcaption>Crispy Fish Sandwiches with Tartar Sauce and Roasted Sweet Potato Wedges</figcaption>
        </div>
        <div class="recepie">
            <img src="images/Recepies/0101_FPV_Broccoli-Calzones_97286_WEB_SQ_hi_res.jpg" alt="Broccoli Calzones">
            <figcaption>Broccoli Mozarella Calzones with Ceaser Salad</figcaption>
        </div>
        <div class="recepie">
            <img src="images/Recepies/1120_FPV_Emchiladas_74891_WEB_SQ_hi_res.jpg" alt="Enchiladas">
            <figcaption>Cheesy Enchiladas Rojas with Broccoli and Kale</figcaption>
        </div>
        <div class="recepie">
            <img src="images/Recepies/1225_2PV1_Bucatini_100082_SQ_hi_res.jpg" alt="Tomato Broccoli Bucatini">
            <figcaption>Bucatini with Tomato Sauce and Roasted Broccoli</figcaption>
        </div>
        <div class="recepie">
            <img src="images/Recepies/1225_FPV_Pesto_-Broccoli-Sandwich_74916_WEB_SQ_hi_res.jpg"
                alt="Pesto Broccoli Sandwiches">
            <figcaption>Broccoli Basil Pesto Sandwiches with Romaine Citrus Salad</figcaption>
        </div> -->

    </div>
    <script src="myScript.js"></script>
    <?php
    echo '<script>';
    echo 'function detailNavigate(){';
    echo 'window.location.href = "./recepie.php?id='. $oneRecipe['id'] .'";';
    echo '}';
    echo '</script>';
    ?>
</body>
<footer>
    <div class="footer-content">
        <h1>Cooking Well Done</h1>
        <p>A Recepie Database for All</p>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2023 <a href="#">CookingWellDone</p>
    </div>
</footer>

</html>