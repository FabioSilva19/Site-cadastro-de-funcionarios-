

<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$profissao  = $_POST['profissao'];
$salario = $_POST['salario'];
$experiencia = $_POST['experiencia'];

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lojas Brincos e Companhia</title>

    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
    <main>
        <div class="pageTitle">
            <h2>Por favor, confira os seus dados</h2>
        </div>


            <form method="post" action="concluido.php" autocomplete="off">
                <?php echo "
                <div class='input-group'>
                <label for='input_nome'> Nome: </label>
                <input type='text' placeholder='Digite seu nome completo' id='input_nome' value='" . $nome . "' name='nome' disabled/>
                    </div>
            
           

            <div class='input-group'>
                <label for='input_idade'> Idade: </label>
                <input type='number' placeholder='Digite sua idade' id='input_idade' value='" . $idade . "' name='idade' min='1' max='100' disabled/>
            </div>

            <div class='input-group'>
                <label for='input_profissao'> Profissão: </label>
                <input type='text' placeholder='Qual seu cargo?' id='input_profissao' value='" . $profissao . "' name='profissao' disabled/>
            </div>

            <div class='input-group'>
                <label for='input_salario_p'>Salário pretendido:</label>
                <input type='number' id='input_salario_p' placeholder='Breve relato da sua experiência anterior' value='" . $salario . "' name='salario' disabled/>
            </div>

            <div class='input-group'>
                <label for='input_salario_anterior'> Experiência anterior: </label>
                <textarea id='input_salario_anterior' placeholder='Um breve relato das suas experiências anteriores' name='experiencia' disabled>  " . $experiencia . "</textarea>
            </div> "
 ?>

            <div class="botoes-confirmar">
            <a href="index.php" name="Cancelar" id="cancelar" value="Cancelar" class="btn-cancelar">Cancelar</a>
            <input name="Enviar" type="submit" id="enviar" value="Enviar" class="btn-enviar">
            </div>


            </form>
    </main>

    <!-- <div class="popup">
        <h4>Por favor, revise se os dados estão corretos: </h4>

        <p>Nome: <span>Fabio</span></p>
        <p>Idade: <span>Idade</span></p>
        <p>Profissão: <span>Profissão</span></p>
        <p>Salário pretendido: <span>Salário</span></p>
        <div class="botoes">
            <input name="Cancelar" type="submit" id="cancelar" value="Cancelar" class="btn-cancelar">
            <input name="Enviar" type="submit" id="enviar" value="Enviar" class="btn-enviar">
        </div>
    </div>

    <script src="script.js"></script> -->
  </body>
</html>
