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
        <h1>Lojas Brincos e Companhia</h1>
            <h3>Formulario de cadastro para funcionarios</h3>
        </div>


            <form method="post" action="confirmar.php" autocomplete="off">
            <div class="input-group">
                <label for="input_nome"> Nome: </label>
                <input type="text"placeholder="Digite seu nome completo" id="input_nome" name="nome" required/>
            </div>

            <div class="input-group">
                <label for="input_idade"> Idade: </label>
                <input type="number" placeholder="Digite sua idade" id="input_idade" name="idade" min="1" max="100" required/>
            </div>

            <div class="input-group">
                <label for="input_profissao"> Profissão: </label>
                <input type="text" placeholder="Qual seu cargo?" id="input_profissao" name="profissao" required/>
            </div>

            <div class="input-group">
                <label for="input_salario_p">Salário pretendido:</label>
                <input type="number" id="input_salario_p" placeholder="Defina o salário que deseja" name="salario" required/>
            </div>

            <div class="input-group">
                <label for="input_salario_anterior"> Experiência anterior: </label>
                <textarea id="input_salario_anterior" placeholder="Um breve relato das suas experiências anteriores" name="experiencia" required></textarea>
            </div>

            <input name="Conferir" type="submit" id="conferir" value="Enviar" class="btn-conferir">

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
