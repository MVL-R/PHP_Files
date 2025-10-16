<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PHP Exercises</title>
  <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #FAF8F7;
        color: #4E342E;
        max-width: 900px;
        margin: 2rem auto;
        padding: 1rem 2rem;
        line-height: 1.6;
    }

    h2 {
        text-align: center;
        color: #4E342E;
        border-bottom: 3px solid #8D6E63;
        padding-bottom: 0.5rem;
        margin-bottom: 2rem;
    }

    h3 {
        color: #8D6E63;
        border-left: 4px solid #8D6E63;
        padding-left: 0.75rem;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .output {
        background-color: #FFFFFF;
        border-radius: 8px;
        padding: 1.5rem;
        font-family: 'Courier New', Courier, monospace;
        color: #4E342E;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
        white-space: pre-line;
    }

    .activity {
        margin-bottom: 3rem;
        border: 1px solid #D7CCC8;
        border-radius: 8px;
        padding: 1rem 2rem;
        background-color: #FDFCFB;
    }
    
    .message {
        text-align: center;
        font-size: 1.1rem;
        color: #795548;
    }

    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(141, 110, 99, 0.1);
        padding: 1.5rem;
        text-decoration: none;
        color: #4E342E;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(141, 110, 99, 0.2);
    }

    .card h4 {
        margin: 0 0 0.5rem 0;
        color: #8D6E63;
        font-size: 1.2rem;
    }

    .card p {
        margin: 0;
        font-size: 0.9rem;
        color: #795548;
    }

    .back-link {
        display: inline-block;
        margin-bottom: 2rem;
        padding: 0.5rem 1rem;
        background-color: #8D6E63;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.2s;
    }

    .back-link:hover {
        background-color: #A1887F;/
    }
  </style>
</head>
<body>

<?php
  $currentActivity = $_GET['activity'] ?? null;
  $activities = [
    1 => "User Info",
    2 => "Calculator",
    3 => "Rectangle Area & Perimeter",
    4 => "Temperature Converter",
    5 => "Variable Swap",
    6 => "Salary Calculator",
    7 => "BMI Calculator",
    8 => "String Manipulator",
    9 => "Bank Transaction",
    10 => "Average Calculator",
    11 => "Currency Converter",
    12 => "Fuel Cost Calculator"
  ];
?>
<?php if ($currentActivity): ?>
    <a href="index.php" class="back-link">&larr; Back to Activity List</a>
    
    <div class="activity-container">
      <?php
        $filePath = "activities/activity{$currentActivity}.php";

        if (file_exists($filePath) && array_key_exists($currentActivity, $activities)) {
            include $filePath;
        } else {
            echo "<p class='message'>Activity not found. Please select a valid activity from the list.</p>";
        }
      ?>
    </div>

<?php else: ?>
    <h2>PHP Exercises</h2>
    
    <div class="card-grid">
      <?php foreach ($activities as $num => $description): ?>
        <a href="index.php?activity=<?php echo $num; ?>" class="card">
          <h4>Activity <?php echo $num; ?></h4>
          <p><?php echo $description; ?></p>
        </a>
      <?php endforeach; ?>
    </div>

<?php endif; ?>

</body>
</html>