<html>
<head>
    <title>calculator</title>

</head>
<body>
    <div>
    <h1>calculator</h1>
    </div>

    <p>

    <form action="index.php" method="post">
    <label>Date for birth</label>
    <input type="date" name="dob"> <br> <br>
    <label>Current date</label>
    <input type="date" name="current"> <br> <br>
    <input type="submit" name="submit" value="calculate"> <br> <br>
    

    <input type="text" value="<?php echo "Your age is ". $age->format("%y") ?>">
    </form>
    </p>

    <p>
<?php

if(isset($_POST["submit"])){

    $dob = $_POST["dob"];
    $current = $_POST["current"];
    
    $age=date_diff(date_create( $dob), date_create($current));
}


?>

    </p>
</body>
</html>
