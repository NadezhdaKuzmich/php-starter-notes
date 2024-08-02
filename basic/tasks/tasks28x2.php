<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Calculate Electricity Bill</title>
</head>

<body>

  <?php
  $resultStr = $result = '';
  if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
      $result = calculateBill($units);
      $resultStr = "Total amount of $units - $result";
    }
  }

  function calculateBill($units)
  {
    $unitCostFirst = 3.50;
    $unitCostSecond = 4.00;
    $unitCostThird = 5.20;
    $unitCostFourth = 6.50;

    if ($units <= 50) {
      $bill = $units * $unitCostFirst;
    } else if ($units > 50 && $units <= 100) {
      $temp = 50 * $unitCostFirst;
      $remaining_units = $units - 50;
      $bill = $temp + $remaining_units * $unitCostSecond;
    } else if ($units > 100 && $units <= 200) {
      $temp = 50 * 3.5 + 100 * $unitCostSecond;
      $remainingUnits = $units - 150;
      $bill = $temp + $remainingUnits * $unitCostThird;
    } else {
      $temp = 50 * 3.5 + 100 * $unitCostSecond + 100 * $unitCostThird;
      $remainingUnits = $units - 250;
      $bill = $temp + $remainingUnits * $unitCostFourth;
    }
    return number_format((float) $bill, 2, '.', '');
  }

  ?>

  <div id="page-wrap">
    <h1>Php - Calculate Electricity Bill</h1>

    <form action="" method="post" id="quiz-form">
      <input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
      <input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
    </form>

    <div>
      <?php echo "<br> $resultStr"; ?>
    </div>
  </div>

</body>

</html>