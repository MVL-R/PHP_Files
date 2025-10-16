<div class="activity">
  <h3>Activity 10</h3>
  <div class="output">
    <form action="index.php?activity=10" method="POST">
      <label for="math">Math Grade:</label>
      <input type="number" id="math" name="math" required><br>
      
      <label for="science">Science Grade:</label>
      <input type="number" id="science" name="science" required><br>
      
      <label for="english">English Grade:</label>
      <input type="number" id="english" name="english" required><br>
      
      <input type="submit" value="Calculate Average">
    </form>
    <hr>
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $math = $_POST['math'] ?? null;
        $science = $_POST['science'] ?? null;
        $english = $_POST['english'] ?? null;

        if (is_numeric($math) && is_numeric($science) && is_numeric($english)) {
            $average = ($math + $science + $english) / 3;
            $letterGrade = '';
            $description = '';
            if ($average >= 90) {
                $letterGrade = 'A';
                $description = 'Excellent';
            } elseif ($average >= 80) {
                $letterGrade = 'B';
                $description = 'Good';
            } elseif ($average >= 70) {
                $letterGrade = 'C';
                $description = 'Average';
            } elseif ($average >= 60) {
                $letterGrade = 'D';
                $description = 'Passing';
            } else {
                $letterGrade = 'F';
                $description = 'Failing';
            }
            echo "<b>Your Grades:</b>\n";
            echo "Math: " . htmlspecialchars($math) . "\n";
            echo "Science: " . htmlspecialchars($science) . "\n";
            echo "English: " . htmlspecialchars($english) . "\n\n";
            
            echo "<b>Your Average: " . number_format($average, 2) . "</b>\n";
            echo "<b>Grade: " . $letterGrade . " (" . $description . ")</b>";
            
        } else {
            echo "Please enter valid numbers for all grades.";
        }
      }
    ?>
  </div>
</div>