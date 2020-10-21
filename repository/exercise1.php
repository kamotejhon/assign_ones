<html>
<head>
<title> Welcom To my Browse</title>
</head>
<body>
    <h1>Exercise Number 1

        <form action = "exercise1.php" method = "get" > 
            <input type="text" placeholder="Username" name="username">
                 <input type="submit">
        </form>  

        <br>
        <?php
            echo $_GET["username"];
        ?>
 
 
</html>
