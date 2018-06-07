<!DOCTYPE html>
<html>
<head>

    <title>Page Title</title>

</head>
<body>

    <?php
        $people = array("Alice", "Bob", "Catherine");

        $numbers = array(5, 3, 7);

        $sum = 0;

        foreach ($numbers as $number){
            $sum = $sum + $number;
        }

        echo $sum;
    ?>
    
</body>
</html>