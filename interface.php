<?php
	interface Veiculo {
		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);
	}

	class Civic implements Veiculo {
		public function acelerar($velocidade){
			echo "O veículo acelerou até $velocidade Km/H";
		}

		public function freiar($velocidade){
			echo "O veículo freiou até $velocidade";
		}

		public function trocarMarcha($marcha){
			echo "O veículo trocou para a $marcha marcha";
		}
	}

	$carro = new Civic;

	$carro->trocarMarcha(1);
?>