<?php
include_once('calculator.php');

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];

$cal = new calculator($num1, $num2, $cal);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body style="background-color:#3DBABB">
    <form action="calculator_html.php" method="POST">
        <div class="col-lg-4 col-md-4 col-sm-4 container justify-content-center" style="height: 100px;">
        <h1>Simple Calculator</h1>
            <input type="number" name="num1" placeholder="Number1" class="form-control"><br><br>
            <input type="number" name="num2" placeholder="Number2" class="form-control"><br><br>
            <button name="cal" value="add" class="btn btn-primary">add</button>
            <button name="cal" value="sub" class="btn btn-success">sub</button>
            <button name="cal" value="mul" class="btn btn-danger">mul</button>
            <button name="cal" value="div" class="btn btn-warning">div</button><br><br>
    </form>
    <h1>Your Answer is <?php echo $cal->result() ?></h1>
    </div>
</body>

</html>