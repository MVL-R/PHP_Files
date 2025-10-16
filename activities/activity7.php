<div class="activity">
  <h3>Activity 7</h3>
  <div class="output">
    <form action="index.php?activity=7" method="POST">
      <label for="weight">Weight:</label>
      <input type="number" id="weight" name="weight" required><br>
      
      <label for="height">Height:</label>
      <input type="number" id="height" name="height" required><br>
      
      <input type="submit" value="Calculate BMI">
    </form>
    <hr>
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $weight = $_POST['weight'] ?? null;
        $height = $_POST['height'] ?? null;

        if (is_numeric($weight) && is_numeric($height)) {
            if ($height > 0) {
              $bmi = $weight / ($height * $height);
              $category = '';
              if ($bmi < 18.5) {
                $category = 'Underweight';
              } elseif ($bmi >= 18.5 && $bmi < 25) {
                $category = 'Normal weight';
              } elseif ($bmi >= 25 && $bmi < 30) {
                $category = 'Overweight';
              } else {
                $category = 'Obesity';
              }
              echo "Your BMI is: <b>" . number_format($bmi, 2) . "</b>\n";
              echo "This is considered: <b>" . $category . "</b>";

            } else {
              echo "Height must be greater than zero.";
            }
        } else {
            echo "Please enter valid numbers for both weight and height.";
        }
      }
    ?>
  </div>
</div>