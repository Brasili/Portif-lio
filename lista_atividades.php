<!DOCTYPE html>

<html lang='pt-br'>

	<center>

		<head>
		
			<meta charset="UTF-8"/>
			<title>PORTIFÓLIO - CADASTRO DE ATIVIDADE</title>
			<link rel="stylesheet" href="css/portifolio.css"/>
		</head>
		
		
		<body>

			<header>
			
				<h1>PORTIFÓLIO</h1>
				
				<hr>
				<br/>
				<br/>
				
				<nav>
				
					<a class="lk" href="index.php">Cadastrar Atividades</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a class="lk" href="lista_atividades.php">Listar Atividades</a>
				
				</nav>
				
				<br/>
				<br/>
				<hr/>
				<br/>
				
				
			</header>
		
			<p>-- Clique sobre o Nome para Abrir a página WEB --</p>
			<p>-- Clique sobre o Download para Baixar o Código --</p>
			
			<table border="1">
			
				<thead>
				
					<tr>
						<th>Nome da  Atividade</th>
						<th>Data</th>
						<th>Download</th>
					</tr>
					
				</thead>
				
				<tbody>
				
					<?php
					
						if(file_exists("xml/datas.xml")){
							
							$xml = simplexml_load_file("xml/datas.xml");
						
							foreach($xml->children() as $ptf){
								
								echo"<tr>";
									echo"<td><a class=\"tb\" href='".$ptf->link."'/>$ptf->nome</a></td>";
									echo"<td>$ptf->data</td>";
									echo"<td><a class=\"tb\" href=\"$ptf->arquivo\" download>Download</a></td>";
								echo"</tr>";
								
							}
							
							
						}else{
	
							header("Location:index.php");
							
						}
						
					?>
					
				</tbody>
				
			</table>
			
			<br/>
			<hr/>
			<br/>
			
		</body>
	
	</center>
	
</html>
