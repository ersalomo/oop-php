<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar Php</title>
</head>

<body background="black;">
	<?php
	class Hero {
		protected $nama;
		private $role;
		private $hp;

		function __construct($nama,$role,$hp){
			$this->nama=$nama;
			$this->role=$role;
			$this->hp=$hp;

		}
		function display(){
			echo "Nama  hero :$this->nama",'<br>';
			echo "Role  hero :$this->role",'<br>';
			echo "Healt point:$this->hp",'<br>';

		}

	}
	class Tank extends Hero{
		public $os;

		function __construct($nama,$role,$hp,$os){
			parent::__construct($nama,$role,$hp);
			$this->os=$os;

		}

		function getName(){
			return $this->nama;
		}
		// function display(){

		// }

		
	}


$alu= new Hero('Alucard','figter',1000);
$alu->display();
$balmon= new Hero('balmon','tank',2000);
$balmon->display();

$tank = new Tank('Miya','M-M',19,'Shooter');
$tank->display();
echo $tank->os;
// echo $tank->getName();

	// function panggilNama($data){
	// 	foreach ($data as $key => $value) {
	// 		echo $value,'<br>';
	// 	}
	// }
	// function hapusName($nama){
	// 	unset($nama[3]);
	// 	panggilNama($nama);
	// }
	// function FunctionName($value='ersa')
	// {
	// 	echo $value;
	// }
	// function tambah($bil1,$bil2){
	// 	return $bil1 + $bil2;
	// }

	// // FunctionName();//default paramter will be printed
	// // FunctionName('aku');
	// $listNama=['kamu','dia','lemah','yah brgitulah','oke'];
	// panggilNama($listNama);
	// hapusName($listNama);
	// echo tambah(10,90);

			?>
</body>
</html>
