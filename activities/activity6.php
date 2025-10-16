<div class="activity">
  <h3>Activity 6</h3>
  <div class="output">
    <form action="index.php?activity=6" method="POST">
      <label for="basic_salary">Basic Salary:</label>
      <input type="number" id="basic_salary" name="basic_salary" required><br>
      
      <label for="allowance">Allowance:</label>
      <input type="number" id="allowance" name="allowance" required><br>
      
      <label for="deductions">Deductions:</label>
      <input type="number" id="deductions" name="deductions" required><br>
      
      <input type="submit" value="Calculate Net Salary">
    </form>
    <hr>
    
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $basicSalary = $_POST['basic_salary'] ?? null;
        $allowance = $_POST['allowance'] ?? null;
        $deductions = $_POST['deductions'] ?? null;

        if (is_numeric($basicSalary) && is_numeric($allowance) && is_numeric($deductions)) {
          $netSalary = $basicSalary + $allowance - $deductions;

          echo "<b>Salary Breakdown:</b>\n";
          echo "Basic Salary: " . number_format($basicSalary, 2) . "\n";
          echo "Allowance: " . number_format($allowance, 2) . "\n";
          echo "Deductions: " . number_format($deductions, 2) . "\n\n";
          echo "<b>Your Net Salary is: " . number_format($netSalary, 2) . "</b>";
        } else {
            echo "Please enter valid numbers for all fields.";
        }
      }
    ?>
  </div>
</div>