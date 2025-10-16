<div class="activity">
  <h3>Activity 8</h3>
  <div class="output">
    <form action="index.php?activity=8" method="POST">
      <label for="sentence">Enter a sentence:</label><br>
      <textarea id="sentence" name="sentence" rows="4" cols="50" required></textarea><br>
      
      <input type="submit" value="Analyze String">
    </form>
    <hr>
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sentence = $_POST['sentence'] ?? '';

        if (!empty(trim($sentence))) {
          $charCount = strlen($sentence);
          $wordCount = str_word_count($sentence);
          $upperCase = strtoupper($sentence);
          $lowerCase = strtolower($sentence);

          echo "<b>Original Sentence:</b> " . htmlspecialchars($sentence) . "\n\n";
          echo "<b>Character Count:</b> " . $charCount . "\n";
          echo "<b>Word Count:</b> " . $wordCount . "\n";
          echo "<b>In Uppercase:</b> " . htmlspecialchars($upperCase) . "\n";
          echo "<b>In Lowercase:</b> " . htmlspecialchars($lowerCase);
            
        } else {
            echo "Please enter a sentence to analyze.";
        }
      }
    ?>
  </div>
</div>