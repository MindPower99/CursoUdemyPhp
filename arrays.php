<?php 
		include 'header.php';
		$aula_atual = 'arrays';
	?>


	<body>

		<h2>ARRAYS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		
		<h3>Meus Cursos</h3>

			<?php  $cursos = array(
									"Excel" => array(
												"n_alunos" => 400, "titulo" => "Do zero ao avançado", "url" => "www.udemy.com", "aval" => 200
													),

									"HTML-CSS" => array (
												"n_alunos" => 300, "titulo" => "Aprenda desenvolver web", "url" => "www.udemy.com", "aval" => 150
													),

									"Python" =>  array (
												"n_alunos" => 280, "titulo" => "Programe em Python", "url" => "www.udemy.com", "aval" => 90
													)
								);
			?>


		<h3>Informação do Curso</h3>

			<h4>Título: </h4>
			<p><?php  echo $cursos['Excel']['titulo']; ?></p>
			<br>

			<h4>Número de Avaliações: </h4>
			<p><?php  echo $cursos['Excel']['n_alunos']; ?></p>
			<br>

			<h4>AVALIAÇÕES: </h4>
			<p><?php  echo $cursos['Excel']['aval']; ?></p>
			<br>

			<h4>URL da foto: </h4>
			<p><?php  echo $cursos['Excel']['url'];  ?></p>
			<br>
		

		<h3>Agora é a sua vez</h3>

			<p>Crie um Array e solte as suas informações em sequência. Pesquise também funções que podem ser aplicadas neste tipo de dados.</p>
			<br>






		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>