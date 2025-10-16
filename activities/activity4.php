<div class="activity">
  <h3>Activity 4</h3>
  <div class="output">
    
    <form action="index.php?activity=4" method="POST">
      <label for="temp">Enter Temperature:</label>
      <input type="number" id="temp" name="temperature" required><br>
      
      <label for="conversion">Select Conversion:</label>
      <select id="conversion" name="conversion">
        <option value="c_to_f">Celsius to Fahrenheit</option>
        <option value="f_to_c">Fahrenheit to Celsius</option>
      </select><br>
      
      <input type="submit" value="Convert">
    </form>

    <hr>
    
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $temperature = $_POST['temperature'] ?? null;
        $conversion_type = $_POST['conversion'] ?? '';

        if (is_numeric($temperature)) {
          $result = 0;

          if ($conversion_type === 'c_to_f') {
            $result = ($temperature * 9/5) + 32;
            echo "{$temperature}° Celsius is equal to " . number_format($result, 2) . "° Fahrenheit.";
          } 
          elseif ($conversion_type === 'f_to_c') {
            $result = ($temperature - 32) * 5/9;
            echo "{$temperature}° Fahrenheit is equal to " . number_format($result, 2) . "° Celsius.";
          } 
          else {
            echo "Invalid conversion type selected.";
          }
        } else {
          echo "Please enter a valid number for the temperature.";
        }
      }
    ?>
  </div>
</div>