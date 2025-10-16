<div class="activity">
  <h3>Activity 3</h3>
  <div class="output">
    
    <form action="index.php?activity=3" method="POST">
      <label for="length">Length:</label>
      <input type="number" id="length" name="length" required><br>
      
      <label for="width">Width:</label>
      <input type="number" id="width" name="width" required><br>
      
      <input type="submit" value="Calculate">
    </form>
    
    <hr>
    
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $length = $_POST['length'] ?? null;
        $width = $_POST['width'] ?? null;

        if (is_numeric($length) && is_numeric($width)) {
          $area = $length * $width;
          $perimeter = 2 * ($length + $width);

          echo "For a rectangle with length $length and width $width:\n";
          echo "The Area is: $area\n";
          echo "The Perimeter is: $perimeter";
        } else {
            echo "Please enter valid numbers for both length and width.";
        }
      }
    ?>
  </div>
</div>