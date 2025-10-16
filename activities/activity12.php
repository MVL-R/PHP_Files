<div class="activity">
  <h3>Activity 12</h3>
  <div class="output">
    <form action="index.php?activity=12" method="POST">
      <label for="distance">Travel Distance:</label>
      <input type="number" id="distance" name="distance" required><br>
      
      <label for="fuel_consumption">Fuel Consumption:</label>
      <input type="number" id="fuel_consumption" name="fuel_consumption" required><br>
      
      <label for="fuel_price">Fuel Price:</label>
      <input type="number" id="fuel_price" name="fuel_price" required><br>
      
      <input type="submit" value="Calculate Cost">
    </form>
    <hr>
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $distance = $_POST['distance'] ?? null;
        $fuelConsumption = $_POST['fuel_consumption'] ?? null;
        $fuelPrice = $_POST['fuel_price'] ?? null;

        if (is_numeric($distance) && is_numeric($fuelConsumption) && is_numeric($fuelPrice)) {
            if ($fuelConsumption > 0) {
                $litersNeeded = $distance / $fuelConsumption;
                $totalCost = $litersNeeded * $fuelPrice;

                echo "<b>Trip Details:</b>\n";
                echo "Distance: " . number_format($distance, 1) . " km\n";
                echo "Fuel Consumption: " . number_format($fuelConsumption, 1) . " km/L\n";
                echo "Price per Liter: " . number_format($fuelPrice, 2) . "\n\n";
                
                echo "Total fuel required for the trip: " . number_format($litersNeeded, 2) . " liters.\n";
                echo "<b>Estimated Total Fuel Cost: " . number_format($totalCost, 2) . "</b>";
            } else {
                echo "Fuel efficiency must be greater than zero.";
            }
            
        } else {
            echo "Please enter valid numbers for all fields.";
        }
      }
    ?>
  </div>
</div>