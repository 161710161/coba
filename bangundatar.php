<?php 
	
	class persegi{
		public $s;

		function set_nilai($sisi){
		$this->s = $sisi;
		}
			function get_nilai(){
				return $this->s + $this->s + $this->s + $this->s;
			}
	}

	class persegi_panjang{
		public $p, $l;

		function set_nilai($panjang, $lebar){
		$this->p = $panjang;
		$this->l = $lebar;
		}
			function get_nilai(){
				return $this->p * $this->l;
			}
	}

	class segitiga{
		public $a, $t;

		function set_nilai($alas, $tinggi){
		$this->a = $alas;
		$this->t = $tinggi;
		}
			function get_nilai(){
				return $this->a * $this->t / 2;
			}
	}

	$hasil = new persegi;
	$hasil->set_nilai(4);
	echo "Hasil Persegi : ".$hasil->get_nilai().'<br>';

	$hasi2 = new persegi_panjang;
	$hasi2->set_nilai(4,6);
	echo "Hasil Persegi panjang : ".$hasi2->get_nilai().'<br>';

	$hasi3 = new segitiga;
	$hasi3->set_nilai(4,6);
	echo "Hasil Segitiga : ".$hasi3->get_nilai().'<br>';

?>