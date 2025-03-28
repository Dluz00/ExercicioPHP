<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #fff;
            margin: 5px 0;
            padding: 10px;
            margin-top: 20px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<h1>Digite seus dados</h1>

    <form action="" method="post">
        <label>Nome</label>
        <input type="text" placeholder="Digite o seu nome" name="name">
        <label>Idade</label>
        <input type="text" placeholder="Digite sua idade" name="age">
        <label>Endereço</label>
        <input type="text" placeholder="Digite o seu endereço" name="address">

        <button type="submit">Enviar Dados</button>
    </form>

<?php 
    session_start();

    if (!isset($_SESSION["lista"])) {
        $_SESSION["lista"] = [];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["lista"][] = [
            "name" => $_POST["name"],
            "age" => $_POST["age"],
            "address" => $_POST["address"]
        ];
    }
    session_write_close();
    echo "<ul>";
    foreach ($_SESSION["lista"] as $entry) {
        echo "<div>";
        echo "<li><strong>Name:</strong> " . htmlspecialchars($entry["name"]) . "</li>";
        echo "<li><strong>Age:</strong> " . htmlspecialchars($entry["age"]) . "</li>";
        echo "<li><strong>Address:</strong> " . htmlspecialchars($entry["address"]) . "</li>";
        echo "</div>";
    }
    echo "</ul>";

?>
</body>
</html>
