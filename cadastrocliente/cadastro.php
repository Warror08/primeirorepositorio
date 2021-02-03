<?php 
    /* Aqui está sendo chamado as páginas header e foooter que estão com o designer do site */
include_once 'header.php';
?>

 <html>
 <body>
  <div class="row">
  	<div class="co1 s12 m6 push-m3 red">
  		<table>
  			<thead>
  				<tr>
  					<th>Nome: </th>
  					<th>Apelido: </th>
  					<th>E-mail: </th>
  					<th>Idade: </th>
  				</tr>

  			</thead>
  			<tbody>
  				<tr>
  					<td>Leandro</td>
  					<td>Leo</td>
  					<td>leandro@gmail.com</td>
  					<td>17</td>
            <td><a href="" class="btn">Editar</td>
            <td> <a href="" class="btn">Remover</a></td>

  				</tr>
  			</tbody>
  		</table>
      <a href="adicionar.php" class="btn">Adicionar novo cliente</a>
  	</div>
  </div>
</body>
  </html>