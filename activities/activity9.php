<div class="activity">
  <h3>Activity 9</h3>
  <div class="output">
    <form action="index.php?activity=9" method="POST">
      <label for="initial_balance">Balance</label>
      <input type="radio" name="action" value="balance"><br>
      
      <label for="deposit">Deposit</label>
      <input type="radio" name="action" value="deposit"><br>
      
      <label for="withdraw">Withdraw</label>
      <input type="radio" name="action" value="withdraw"><br>
      
      <label>Enter Amount: </label><br>
      <input type="number" value="amount"><br>
      <input type="submit" name="process" value="Process Transactions">
    </form>
    <hr>
    <?php
      if (isset($_POST["process"])) {

        $balance = 2000;
        $action = $_POST["action"];
        $amount = $_POST["amount"];
        
        if ($action === "balance"){
          echo "Your current balance for your account is: $$balance";
        }
        elseif ($action === "deposit"){
          $balance += $amount;
          echo "You deposited an amount of $$amount";
          echo "Your new current balance is: $$balance";
        }
        elseif ($action === "withdraw"){
          if ($balance > $amount) {
            $balance -= $amount;
            echo "You have withdrew an amount of $$amount";
            echo "Your current balance is: $$balance";
          }
          else {
            echo "Your account has insufficient credits for this transaction.";
          }
      }
      else {
        echo "Select a transaction.";
      }
      }
    ?>
  </div>
</div>