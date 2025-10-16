<div class="activity">
  <h3>Activity 5</h3>
  <div class="output">
    <form action="index.php?activity=5" method="POST">
      <label for="var1">First Value (Variable X):</label>
      <input type="text" id="var1" name="var1" required><br>
      
      <label for="var2">Second Value (Variable Y):</label>
      <input type="text" id="var2" name="var2" required><br>
      
      <input type="submit" value="Swap Variables">
    </form>
    <hr>
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $var1 = $_POST['var1'] ?? '';
        $var2 = $_POST['var2'] ?? '';

        echo "<b>Before Swapping:</b>\n";
        echo "Variable X = " . htmlspecialchars($var1) . "\n";
        echo "Variable Y = " . htmlspecialchars($var2) . "\n\n";
        
        $temp = $var1;
        $var1 = $var2;
        $var2 = $temp;
        
        echo "<b>After Swapping:</b>\n";
        echo "Variable X = " . htmlspecialchars($var1) . "\n";
        echo "Variable Y = " . htmlspecialchars($var2);
      }
    ?>
  </div>
</div>