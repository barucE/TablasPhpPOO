<?php
	class Tablas{
		private $numero_inicial=0;
		private $numero_final=0;
		private $numero_tablas=0;

		public function __construct($numero_inicial=1,$numero_tablas=1,$numero_final=1){
			$this->numero_inicial=$numero_inicial;
			$this->numero_final=$numero_final;
			$this->numero_tablas=$numero_tablas;
		}

		function hacerTablas(){
			while($this->numero_tablas>0){
				echo "<h4>Tabla del $this->numero_inicial</h4>";
				for($j=1;$j<=$this->numero_final;$j++){
						$x=$this->numero_inicial*$j;
						echo "$this->numero_inicial * $j = $x</br>";
				}
					$this->numero_inicial=$this->numero_inicial+1;
					$this->numero_tablas=$this->numero_tablas-1;
				}
		}
	}
	extract($_GET);
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tablas</title>
	<meta name="description" content="practica">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
	<form action="#">
		<fieldset>
			<legend>TABLAS</legend>
			<div id="inicio">
				<label for="numero_inicial">Numero inicial:</label>
				<input class="espacio" type="text" id="numero_inicial" name="numero_inicial" />
				<p></p>
			</div>
			<div id="final">
				<label for="numero_final">Numero final:</label>
				<input class="espacio" type="text" id="numero_final" name="numero_final" />
				<p></p>
			</div>
			<div id="tablas">
				<label for="numero_tablas">Numero tablas:</label>
				<input class="espacio" type="text" id="numero_tablas" name="numero_tablas" />
				<p></p>
			</div>
			<div>
			<input type="hidden" name="enviar" value="1">
			<button type="submit">Enviar</button>
		</div>
	</fieldset>
	</form>
	<?php
	if(isset($numero_inicial) && isset($numero_tablas) && isset($numero_final)){
		if(!empty($numero_inicial) && !empty($numero_tablas) && !empty($numero_final)){
			$tablas=new Tablas($numero_inicial,$numero_tablas,$numero_final);
		}
		else{
			$tablas=new Tablas();
		}
    }
	if(isset($enviar)){
		$tablas->hacerTablas();}
	?>
</body>
</html>

