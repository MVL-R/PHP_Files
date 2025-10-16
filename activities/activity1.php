<div class="activity">
  <h3>Activity 1</h3>
  <div class="output">
    <form action="index.php?activity=1" method="POST">
      Name: <input type="text" name="name"><br>
      Age: <input type="number" name="age"><br>
      Color: <input type="text" name="color"><br>
      <input type="submit">
    </form>
    <hr>
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST["name"] ?? 'N/A');
        $age = htmlspecialchars($_POST["age"] ?? 'N/A');
        $color = htmlspecialchars($_POST["color"] ?? 'N/A');
        echo "<p>Hi, I am $name, I am $age, and my favorite color is $color.</p>";
      }
    ?>
  </div>
</div>