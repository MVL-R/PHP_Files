<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PHP Exercises Styled</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      color: #333;
      max-width: 700px;
      margin: 2rem auto;
      padding: 1rem 2rem;
      line-height: 1.6;
    }

    h2 {
      text-align: center;
      color: #2c3e50;
      border-bottom: 3px solid #2980b9;
      padding-bottom: 0.5rem;
      margin-bottom: 2rem;
    }

    h3 {
      color: #2980b9;
      border-left: 4px solid #2980b9;
      padding-left: 0.75rem;
      margin-top: 2rem;
      margin-bottom: 1rem;
    }

    .output {
      background-color: #ecf0f1;
      border-radius: 5px;
      padding: 1rem;
      font-family: 'Courier New', Courier, monospace;
      color: #2c3e50;
      box-shadow: 0 1px 4px rgb(0 0 0 / 0.1);
      white-space: pre-line;

    }

    .activity {
      margin-bottom: 3rem;
    }
  </style>
</head>
<body>

<h2>PHP Exercises</h2>

<div class="activity">
  <h3>Activity 1</h3>
  <div class="output">
    <?php
      $name = "Mark";
      $age = 23;
      $color = "black";

      echo "Hi, I am $name, I am $age years old, and my favorite color is $color";
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 2</h3>
  <div class="output">
    <?php
      $a = 9;
      $b = 10;

      $sum = $a + $b;
      $difference = $a - $b;
      $product = $a * $b;
      $quotient = $a / $b;

      echo "The sum of 9 + 10 is $sum\n";
      echo "The difference of 9 + 10 is $difference\n";
      echo "The product of 9 + 10 is $product\n";
      echo "The quotient of 9 + 10 is $quotient";
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 3</h3>
  <div class="output">
    <?php
      $length = 10;
      $width = 18;

      $area = $length * $width;
      $perimeter = 2 * ($length + $width);

      echo "The area of a rectangle is $area\n";
      echo "The perimeter of a rectangle is $perimeter";
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 4</h3>
  <div class="output">
    <?php
      $Celsius = 32;
      $Fahrenheit = $Celsius * 9/5 + 32;

      echo "The fahrenheit of $Celsius Celsius is $Fahrenheit";
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 5</h3>
  <div class="output">
    <?php
      $x = 0;
      $y = 1;

      echo "Before Swapping of variables: $x, $y\n";

      $tempvar = $x;
      $x = $y;
      $y = $tempvar;

      echo "After Swapping of variables: $x, $y";
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 6</h3>
  <div class="output">
    <?php
      $basicSalary = 4000;
      $allowance = 300;
      $deductions = 1500;

      $netSalary = $basicSalary + $allowance - $deductions;

      echo "The amount of basic salary is $basicSalary and the daily allowance is $allowance and the deductions is $deductions\n";
      echo "The net salary is $netSalary";
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 7</h3>
  <div class="output">
    <?php
      $weight = 70;
      $height = 5.11;

      $BMI = $weight / ($height * $height);
      echo "The BMI is " . number_format($BMI, 2);
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 8</h3>
  <div class="output">
    <?php
      $sentence = "The size doesnt MATTER";

      echo strlen($sentence) . "\n";
      echo str_word_count($sentence) . "\n";
      echo strtoupper($sentence) . "\n";
      echo strtolower($sentence);
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 9</h3>
  <div class="output">
    <?php
      $balance = 12000;
      $deposit = 1000;
      $withdraw = 5000;

      echo "Your current Balance is: $balance\n";

      $currentBalance = $balance + $deposit;
      echo "You have deposited an amount of $deposit\n";
      echo "Your current balance is: $currentBalance\n";

      $currentBalance = $currentBalance - $withdraw;
      echo "You have withdrawn an amount of $withdraw\n";
      echo "Your current balance is: $currentBalance";
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 10</h3>
  <div class="output">
    <?php
      $Math = 85;
      $Science = 80;
      $English = 90;

      $average = $Math + $Science + $English;
      $totalAverage = $average / 3;

      echo "Your Grades:\n";
      echo "Math: $Math\n";
      echo "Science: $Science\n";
      echo "English: $English\n";

      if ($totalAverage >= 90) {
          echo "Your Average is : A";
      }
      elseif ($totalAverage >= 80) {
          echo "Your Average is : B";
      } else {
          echo "Your grade is not available yet";
      }
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 11</h3>
  <div class="output">
    <?php
      $PHP = 60;
      $USD = $PHP * 58.31;
      $EUR = $PHP * 67.98;
      $JPY = $PHP * 0.39;

      echo "Your currency of Peso: $PHP\n";
      echo "Your currency of Peso to USD: " . number_format($USD, 2) . "\n";
      echo "Your currency of Peso to EUR: " . number_format($EUR, 2) . "\n";
      echo "Your currency of Peso to JPY: " . number_format($JPY, 2);
    ?>
  </div>
</div>

<div class="activity">
  <h3>Activity 12</h3>
  <div class="output">
    <?php
      $distance = 6000;
      $fuelConsumption = 500;
      $fuelPrice = 60;

      $liters = $fuelConsumption / $distance;
      $travelCost = $liters * $fuelPrice;

      echo "The cost of fuel for $distance meters is " . number_format($travelCost, 2);
    ?>
  </div>
</div>

</body>
</html>