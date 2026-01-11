<!DOCTYPE html>
<html>
<head>
<title>Employee Payroll Calculation</title>
</head>
<body>

<h1>Employee Information Form</h1>

<form method="post">
Basic Pay: 
<input type="number" name="basicPay"><br><br>
<input type="submit" name="submit" value="Calculate">
</form>

<h2>Payroll Details</h2>
<p id="output"></p>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $basic = floatval($_POST["basicPay"]);

    $DA = $basic * 0.20;
    $HRA = $basic * 0.15;
    $PF = $basic * 0.12;

    $gross = $basic + $DA + $HRA;
    $tax = $gross * 0.18;
    $deductions = $PF + $tax;
    $net = $gross - $deductions;

    echo "
    Basic Pay: $basic <br>
    DA: $DA <br>
    HRA: $HRA <br>
    Gross Pay: $gross <br>
    PF: $PF <br>
    TAX: $tax <br>
    Deductions: $deductions <br>
    Net Pay: $net
    ";
}
?>

</body>
</html>
