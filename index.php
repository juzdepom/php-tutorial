<html>
    <head>
        <title>
            Hello World
        </title>
    </head>
    <body>
        Hello World!<br><br>

        <form action="process.php" method="post">
            Enter your name:
            <input name="myName" type="text">
            <input type="submit">
        </form>

        <?php
        $myvar = " This is my variable";
        $number1 = 5;
        $number2 = 2;
        $sum = $number1 + $number2;
        $people = array("Alice", "Bob", "Mackenzie");
        echo "(PHP) Hello World!<br>";
        echo $myvar . "<br>";
        echo $sum . "<br>";
        print_r($people);
        echo "<br>";


        foreach ($people as $person) {
            echo $person . ' ' ;
        }
        ?>
    </body>
</html>