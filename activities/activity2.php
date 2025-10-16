<div class="activity">
  <h3>Activity 2</h3>
  <div class="output">
    <form action="index.php?activity=2" method="POST">
      IntA: <input type="number" name="digit1" required><br>
      IntB: <input type="number" name="digit2" required><br>
      
      Operation: <select id="operation" name="operation">
        <option value="sum">Addition (+)</option>
        <option value="difference">Subtraction (-)</option>
        <option value="product">Multiply (*)</option>
        <option value="quotient">Divide (/)</option>
      </select>
      <input type="submit" value="Calculate">
    </form>
    <hr>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $digit1 = $_POST["digit1"];
        $digit2 = $_POST["digit2"];
        $operation = $_POST["operation"];

        if (!is_numeric($digit1) || !is_numeric($digit2)) {
          echo "Enter valid numbers";
        } else {
            $result = 0;
            switch($operation){
              case "sum": $result = $digit1 + $digit2; break;
              case "difference": $result = $digit1 - $digit2; break;
              case "product": $result = $digit1 * $digit2; break;
              case "quotient":
                if ($digit2 != 0) {
                  $result = $digit1 / $digit2;
                } else {
                  echo "Cannot divide by 0";
                  exit();
                }
                break;
              default:
                echo "Invalid Operation";
                exit();
            }
            echo "The result of the operation is: " . $result;
        }
      }
    ?>
  </div>
</div>