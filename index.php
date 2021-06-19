<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Tarefas</title>
</head>
<body>
    
    <h1>Gestão de Tarefas</h1>
    <?php 

        require_once('Task.php');
        require_once('Registry.php');

        $task1 = new Task("Tarefa 1", "Tarefa importante");
        $task1->notConcluded();
        $task1->disable();

        $registry = new Registry("Tarefa 2", "Tarefa importante");
        $registry->priorityDegree(3);
        $registry->nameResponsible("João");

    ?>

</body>
</html>