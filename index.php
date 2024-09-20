<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Page</title>
</head>
<body>

    <h1>Welcome to My Simple PHP Page</h1>
    
    <?php
        // PHP Code Block
        echo "<p>Hello, World! Today is " . date("l, F j, Y") . ".</p>";
        
        // Simple addition example
        $num1 = 10;
        $num2 = 20;
        $sum = $num1 + $num2;
        echo "<p>The sum of $num1 and $num2 is: $sum</p>";
    ?>

</body>
</html>
