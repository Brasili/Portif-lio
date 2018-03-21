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
			
			<h2>Formulário de Registro de Atividade</h2>
			
			<form action="funcoes_salvar.php" method="post" enctype="multipart/form-data">
			
				<p>
					<label>Nome</label>
					<br/>
					<br/>
					<input class="inp" type="text" name="nomeAtividade" required="required"/>
				</p>
				
				<p>
					<label>Link</label>
					<br/>
					<br/>
					<input class="inp" type="text" name="linkAtividade" requried="required"/>
				</p>
			
				<p>
					<label>Data</label>
					<br/>
					<br/>
					<input class="inp" type="date" name="data" required="required"/>
				</p>
				
				<p>
					<label>Escolha um Arquivo</label>
					<br/>
					<br/>
					<input class="inp" type="file" name="arquivo"/>
				</p>
				
				<br/>
				
				<br/>
				<hr/>
				<br/>
				<br/>
				
				<input class="bt" type="submit" value="Registrar Atividade"/>
				
				<br/>
				<br/>
				<br/>
				<br/>
				
			</form>
			
		</body>
	
	</center>
	
</html>
