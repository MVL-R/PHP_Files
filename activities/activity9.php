<div class="activity">
  <h3>Activity 9</h3>
  <div class="output">
    <form action="index.php?activity=9" method="POST">
      <label for="initial_balance">Initial Balance:</label>
      <input type="number" id="initial_balance" name="initial_balance" required><br>
      
      <label for="deposit">Amount to Deposit:</label>
      <input type="number" id="deposit" name="deposit" required><br>
      
      <label for="withdraw">Amount to Withdraw:</label>
      <input type="number" id="withdraw" name="withdraw" required><br>
      
      <input type="submit" value="Process Transactions">
    </form>
    <hr>
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $balance = $_POST['initial_balance'] ?? null;
        $deposit = $_POST['deposit'] ?? null;
        $withdraw = $_POST['withdraw'] ?? null;

        if (is_numeric($balance) && is_numeric($deposit) && is_numeric($withdraw)) {
            
            echo "<b>Transaction Log:</b>\n";
            echo "Starting Balance: " . number_format($balance, 2) . "\n\n";

            $balance += $deposit;
            echo "You deposited: " . number_format($deposit, 2) . "\n";
            echo "Balance after deposit: " . number_format($balance, 2) . "\n\n";
            if ($withdraw <= $balance) {
                $balance -= $withdraw;
                echo "You withdrew: " . number_format($withdraw, 2) . "\n";
                echo "<b>Final Balance: " . number_format($balance, 2) . "</b>";
            } else {
                echo "Transaction Failed: Insufficient funds to withdraw " . number_format($withdraw, 2) . ".\n";
                echo "Your current balance remains " . number_format($balance, 2) . ".";
            }
            
        } else {
            echo "Please enter valid numbers for all fields.";
        }
      }
    ?>
  </div>
</div>