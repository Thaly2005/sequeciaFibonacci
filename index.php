<!DOCTYPE html>
<html>
<head>
    <title>Soma Fibonacci</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            margin-top: 50px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Soma Fibonacci</h2>
    <form method="post">
        <label for="number">Digite um número:</label><br>
        <input type="text" id="number" name="number"><br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        function fibonacci($n) {
            if ($n == 0)
                return 0;
            else if ($n == 1)
                return 1;
            else
                return fibonacci($n - 1) + fibonacci($n - 2);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $sum = 0;
            for ($i = 0; $i <= $number; $i++) {
                $fib = fibonacci($i);
                if ($fib <= $number) {
                    $sum += $fib;
                } else {
                    break;
                }
            }
            echo "<p>A soma dos números da sequência de Fibonacci até $number é: $sum</p>";
        }
    ?>
</body>
</html>
