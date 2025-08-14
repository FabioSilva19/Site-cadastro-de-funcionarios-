<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lojas Brincos e Companhia</title>

    </style>
  </head>
  <body>
    <h1>Lojas Brincos e Companhia</h1>
    <h3>Formulario de cadastro para funcionarios</h3>

    <form method="post" action="request.php" autocomplete="off">
      <p>
        <label for="input_nome"> Nome: </label>
        <input type="text"placeholder="Digite seu nome completo" id="input_nome" name="nome" required/>
      </p>

      <p>
        <label for="input_idade"> Idade: </label>
        <input type="text" placeholder="Digite sua idade" id="input_idade" name="idade" required/>
      </p>

      <p>
        <label for="input_profissao"> Profissão: </label>
        <input type="text" placeholder="Qual seu cargo?" id="input_profissao" name="profissao" required/>
      </p>

      <p>
        <label for="input_salario_p">Salário pretendido:</label>
        <input type="text" id="input_salario_p" name="input_salario_p" placeholder="Breve relato da sua experiência anterior" name="salario" required/>
      </p>

      <p>
        <label for="input_salario_anterior"> Experiência anterior: </label>
        <textarea id="input_salario_anterior" placeholder="Um breve relato das suas experiências anteriores" name="experiencia" required></textarea>
      </p>

      <input name="Enviar"type="submit" id="enviar" value="Enviar">

    </form>
    


  </body>
</html>
