
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List Prioritário</title>
      <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h2>To-Do List Prioritário</h2>
        
        <form method="post">
            <input type="text" name="tarefa" placeholder="Digite a tarefa" required>
            
            <select name="dia">
                <option value="seg">Segunda-feira</option>
                <option value="ter">Terça-feira</option>
                <option value="qua">Quarta-feira</option>
                <option value="qui">Quinta-feira</option>
                <option value="sex">Sexta-feira</option>
                <option value="sab">Sábado</option>
                <option value="dom">Domingo</option>
            </select>
            
            <button type="submit">Adicionar</button>
        </form>
        
        <h3>Tarefas da Semana</h3>
        <ul>
            <?php
            // Exibir as tarefas cadastradas
            foreach ($_SESSION['tarefas'] as $dia => $tarefa) {
                $dias_formatados = [
                    "seg" => "Segunda-feira",
                    "ter" => "Terça-feira",
                    "qua" => "Quarta-feira",
                    "qui" => "Quinta-feira",
                    "sex" => "Sexta-feira",
                    "sab" => "Sábado",
                    "dom" => "Domingo"
                ];
                
                echo "<li><strong>{$dias_formatados[$dia]}:</strong> " . (!empty($tarefa) ? $tarefa : "Nenhuma tarefa") . "</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>



