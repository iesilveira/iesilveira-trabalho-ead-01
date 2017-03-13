<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title> 
			<?php
				$nome= $_POST['nome'];
				echo "Site da banda $nome";
			?>	
		</title>
		<link rel="shortcut icon" href="http://icon-icons.com/icons2/692/PNG/512/seo-social-web-network-internet_64_icon-icons.com_61485.png"/>
		<style>
			body {
				<?php
					$cordotexto= $_POST['cordotexto'];
					echo "color : $cordotexto;";
				?>
				
				<?php				
					$cordefundo= $_POST['cordefundo'];
					echo "background-color : $cordefundo;";
				?>}
			h1,h2,td {
				text-align : center;
				text-transform: uppercase;
			}
			p {
				text-align : center;
			}
			.biografia {
				margin: 0 auto;
				width: 940px;
				text-align: justify;
			}
			img {
				max-width:80%;
				height:auto;
			}
		</style>
	</head>
	<body>
		<?php
			$nome= $_POST['nome'];
			echo "<h1> $nome </h1>";
		?>
		<table align='center'>
		<td>
		<?php 
			$img= $_POST['img'];
			echo "<img src= '$img' alt='$nome IMG' title='$nome IMG'>";
		?>
		</td>
		</table>
		<br>
		<hr>
		<h2>BIOGRAFIA</h2>
		<p class= "biografia">
		<?php 
			$bio= $_POST['bio'];
			echo "$bio";
		?>
		</p>
		<br>
		<hr>
		<h2>INTEGRANTES</h2>
		<table align='center' border='1'>
			<thead>
				<tr>
					<th>NOME DO ARTISTA:</th>
					<th>DATA DE NASCIMENTO:</th>
					<th>INSTRUMENTOS:</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
					<?php
						$nome1= $_POST['nome1'];
						echo "$nome1";
					?>
					</td>
					<td>
					<?php
						$nascimento1= $_POST['nascimento1'];
						echo "$nascimento1";
					?>
					</td>
					<td>
					<?php
						$instrumentos1= $_POST['instrumentos1'];
						echo "$instrumentos1";
					?>
					</td>
				</tr>
				<tr>
					<td>
					<?php
						$nome2= $_POST['nome2'];
						echo "$nome2";
					?>
					</td>
					<td>
					<?php
						$nascimento2= $_POST['nascimento2'];
						echo "$nascimento2";
					?>
					</td>
					<td>
					<?php
						$instrumentos2= $_POST['instrumentos2'];
						echo "$instrumentos2";
					?>
					</td>
				</tr>
				<tr>
					<td>
					<?php
						$nome3= $_POST['nome3'];
						echo "$nome3";
					?>
					</td>
					<td>
					<?php
						$nascimento3= $_POST['nascimento3'];
						echo "$nascimento3";
					?>
					</td>
					<td>
					<?php
						$instrumentos3= $_POST['instrumentos3'];
						echo "$instrumentos3";
					?>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<hr>
	</body>
</html>