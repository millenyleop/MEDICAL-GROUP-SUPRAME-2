<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <style>

        body {

            background-color: #f0f5fe;

            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            color: #333;

            margin: 0;

            display: flex;

            justify-content: center;

            align-items: center;

            height: 100vh;
            
            background-image: url(fundo1.jpg);

        }

        h2 {

            color: #1565c0;

            text-align: center;

            margin-bottom: 30px;

        }

        form {

            max-width: 400px;

            width: 100%;

            padding: 30px;

            background-color: #ffffff;

            border-radius: 8px;

            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);

            box-sizing: border-box;

        }

        label {

            display: block;

            margin-bottom: 8px;

            color: #1565c0;

        }

        input {

            width: calc(100% - 16px);

            padding: 10px;

            margin-bottom: 20px;

            box-sizing: border-box;

            border: 1px solid #ccc;

            border-radius: 4px;

        }

        input[type="submit"] {

            background-color: #1565c0;

            color: #fff;

            cursor: pointer;

            transition: background-color 0.3s;

        }

        input[type="submit"]:hover {

            background-color: #003c8f;

        }
        
        .fundo {
           background-image: url(fundo1.jpg);

        }
        

    </style>

</head>

<body class="fundo">

    <form method="post" action="index.php">

        <h2>Login</h2>

        <label for="email">Email:</label>

        <input type="text" name="email" id="email" required>

        <label for="senha">Senha:</label>

        <input type="password" name="senha" id="senha" required>

        <input type="submit" value="Login">

    </form>

    <?php

    // ... (o restante do seu código PHP permanece o mesmo)

    ?>

</body>

</html>

