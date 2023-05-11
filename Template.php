<html>
   
   <!-- Dupla: Alanna Keila Jesus Lopes e Sarah Araújo Pimentel de Sousa
        Turma: 3º ano C --> 

   <head>
      <meta charset="utf-8" />
      <title>Lista de Contatos</title>
      <link rel="stylesheet" href="contatos.css" type="text/css" />
   </head>

   <body>
      <h1>Lista de Contatos</h1>
      <form>
      <fieldset>
         <legend>Novo contato</legend>
         <div style= "width:100"> Nome:</div>
            <input type="text" name="nome" />
         </label>
         
         <br>
         
         <label>
         <div style= "width:100"> Telefone: </div>
            <input type="text" name="telefone" />
         </label>

         <br>

         <label>
            <div style= "width:100"> Email:</div>
            <input type="text" name="email" />
         </label>
         
         <br>

         <label>
            <div style= "width:100"> Data de nascimento: </div> 
            <input type="date" name="data" /> 
         </label>

         <br>

         <label>
            <div style= "width:100"> Descrição: </div> 
            <textarea name="descricao"></textarea>
         </label>

         <br>

         <label>
            Contato Favorito 
            <br>
            <input type="checkbox" name="favorito" value="Sim"><br/> 
         </label>

         <br>

         <input type="submit" value="Adicionar" />
      </fieldset>
      </form>

      <table>
         <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Descrição</th>
            <th>Nascimento</th>
            <th>Favorito</th>
         </tr>
         <?php foreach ($lista_contatos as $contato) : ?>
         <tr>
         <td><?php echo $contato['nome']; ?> </td>
         <td><?php echo $contato['telefone']; ?> </td>
         <td><?php echo $contato['email']; ?> </td>
         <td><?php echo $contato['descricao']; ?> </td>
         <td><?php echo $contato['data']; ?> </td>
         <td><?php echo $contato['favorito']; ?> </td>
         </tr>

         <?php endforeach; ?>

      </table>
      
   </body>
</html>
