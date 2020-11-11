<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    </select>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h2><?php echo "Bernadette V. Tradio";?></h2>
        </div>

        <form id="calculator" action="" method="post">
        <div class="col-4">
          <h3><?php echo "Calculator"; ?></h3>
            <p><?php echo "Enter first number:" ?></p>
              <input type="text" name="first_number" placeholder="" required>
            <p><?php echo "Enter second number:" ?></p>
              <input type="text" name="second_number" placeholder="" required>
            <p></p>
             <input type="submit" name="sum" value="+">
             <input type="submit" name="diff" value="-">
             <input type="submit" name="product" value="*">
             <input type="submit" name="quo" value="/">
        </form>
          <?php
              if (isset($_POST['sum']))
              {
                $first_number = $_POST["first_number"];
                $second_number = $_POST["second_number"];
                $sum = $first_number + $second_number;
                echo "<br>";
                echo "<br>";
                echo "Answer: ".$sum;
              }
              if (isset($_POST['diff']))
              {
                $first_number = $_POST["first_number"];
                $second_number = $_POST["second_number"];
                $diff = $first_number - $second_number;
                echo "<br>";
                echo "<br>";
                echo "Answer: ".$diff;
              }
              if (isset($_POST['product']))
              {
                $first_number = $_POST["first_number"];
                $second_number = $_POST["second_number"];
                $product = $first_number * $second_number;
                echo "<br>";
                echo "<br>";
                echo "Answer: ".$product;
              }
              if (isset($_POST['quo']))
              {
                $first_number = $_POST["first_number"];
                $second_number = $_POST["second_number"];
                $quo = $first_number / $second_number;
                echo "<br>";
                echo "<br>";
                echo "Answer: ".$quo;
              }
          ?>
        </div>

        <form id="GCD" action="" method="post">
        <div class="col-4">
          <h3><?php echo "Finding GCD"; ?></h3>
            <p><?php echo "Input first number:" ?></p>
              <input type="text" name="first_number" placeholder="" required>
            <p><?php echo "Input second number:" ?></p>
              <input type="text" name="second_number" placeholder="" required>
            <p></p>
            <button type="submit" name="gcd">Submit</button>
            </form>

            <?php
            if(isset($_POST['gcd']))
            {
              $first_number = $_POST['first_number'];
              $second_number = $_POST['second_number'];
              $gcd = $_POST['gcd'];

              if($first_number > $second_number)
              {
                $temp = $first_number;
                $first_number = $second_number;
                $second_number = $temp;
              }
              for($i = 1; $i < ($first_number + 1); $i++ )
              {
                if ($first_number%$i == 0 and $second_number%$i == 0)
                $gcd = $i;
              }
                echo "<br>";
                echo "<br>";
              echo "GCD of $first_number and $second_number is: $gcd";
            }
          ?>

          <style>
            h2
            {
              position: relative; left: 250px; top: 190px;
            }
            #calculator
            {
              position: relative; left: 550px; top: 45px;
            }
            #GCD
            {
              position: relative; left: 850px; top: -180px;
            }
          </style>
        </div>
      </div>
    </div>
  </body>
</html>
