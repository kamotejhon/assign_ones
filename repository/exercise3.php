<html>
<head>
<title> Welcom To my Browse</title>
</head>
<body>
 
        <form action = "exercise3.php" method = "get" > 

            Input First Number <br><br> <input class="input-field" type="number" name="num1">
            <br><br>
            Input Second Number<br><br> <input class="input-field" type="number" name="num2">
            <br><br>

            <input type="submit">
            <br>

        </form>  
        <br>

        <?php   
            $temp;
            $gcd;
            
             if ($_GET["num1"] > $_GET["num2"])
             {
                $temp = $_GET["num1"];
                $_GET["num1"] = $_GET["num2"];
                $_GET["num2"] = $temp;
             }

             for($i = 1; $i < ($_GET["num1"]+1); $i++)
             {
                if ($_GET["num1"]%$i == 0 and $_GET["num2"]%$i == 0)
                $gcd = $i;
            }
                echo "GCD is : ". $gcd;
        ?>
            <input type="submit">
</body> 
</html>
