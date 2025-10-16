<div class="activity">
  <h3>Activity 11</h3>
  <div class="output">
    <form action="index.php?activity=11" method="POST">
      <label for="php">Amount in PHP:</label>
      <input type="number" id="php" name="php" required><br>
      
      <input type="submit" value="Convert Currency">
    </form>
    <hr>
    
    <?php
      define('USD', 58.31);
      define('EUR', 67.98);
      define('JPY', 0.39);

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $php = $_POST['php'] ?? null;

        if (is_numeric($php)) {
            $usd = $php / USD;
            $eur = $php / EUR;
            $jpy = $php / JPY;

            echo "<b>Conversion Results:</b>\n";
            echo "Amount in PHP: <b>" . number_format($php, 2) . "</b>\n\n";
            echo "This is equal to:\n";
            echo "USD (US Dollar): <b>$" . number_format($usd, 2) . "</b>\n";
            echo "EUR (Euro): <b>€" . number_format($eur, 2) . "</b>\n";
            echo "JPY (Japanese Yen): <b>¥" . number_format($jpy, 2) . "</b>";
        } else {
            echo "Please enter a valid number for the amount.";
        }
      }
    ?>
  </div>
</div>