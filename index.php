<?php

    require_once 'class/classAlternatives.php';
    require_once 'class/classDissertatives.php';

    if (isset($_POST['cad-question-alt'])) {
        if (!empty($_POST['alt'])) {
            
            $alt = new Alternatives();           
            $alt->insertQuestAlt($_POST['alt']);
            //header("Refresh: 0; url=registerTest.php");
            echo "Questões alternativas criadas";

        } 
        
        if (!empty($_POST['dis'])) {
            
            $dis = new Dissertatives();
            $dis->insertQuestDis($_POST['dis']);

        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/registerTestStyle.css" />
        <title>Cadastro questões alternativas</title>
    </head>
    <body>
    
        <form action="" method="POST">

            <div class="cria_questoes">
                <input type="number" class="qtd_alternatives" min="0" max="5" placeholder="Quantas questões de múltipla escolha?" />
                <input type="number" class="qtd_dissertatives" min="0" max="5" placeholder="Quantas questões dissertativas?" />
                <button id="add_questoes" type="button">Criar</button>

                <div class="questoes_alternativas">
                
                </div>
                <div class="questoes_dissertativas"></div>
                <input type="submit" name="cad-question-alt" value="Cadastrar" /> 
            </div

        </form>

        <script src="js/registerTest.js"></script>
    </body>
</html>