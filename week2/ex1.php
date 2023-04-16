<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <style>
    .container {
      margin-left: 15px;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php

    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $class = $_POST["class"];
    $university = $_POST["university"];
    $hobbies = $_POST["hobby"];
    $arrlength = count($hobbies);

    echo "<div>";
    echo "<h1>Hello, $name</h1>";
    echo "<h3>Your gender is $gender</h3>";
    echo "<h3>You are studying at $class, $university</h3>";
    echo "<h3>Your hobby is: <h2>";

    for ($i = 0; $i < $arrlength; $i++) {
      if ($hobbies[$i] === "Other") {
        echo "<h4>";
        echo $i + 1;
        echo ". " . $_POST["other_hobby"] . "</h4>";
      } else {
        echo "<h4>";
        echo $i + 1;
        echo ". $hobbies[$i]</h4>";
      }
    }

    ?>
  </div>
</body>

</html>