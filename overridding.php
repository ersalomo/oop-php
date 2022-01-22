<?php
    class HP{
        public $tahun;
        public $nama;

        function __construct($tahun,$nama){
            $this->tahun=$tahun;
            $this->nama=$nama;
        }
        //yg di override
        function calling(){
            echo "Menelpon.....";
        }
        //tidak memkai parameter yg di over load
        function sendMessage($nama){
            echo "nokia is sending a message!";
        }

    }
    class android extends HP{
        public $os;
        function __construct($tahun,$nama,$os){
           parent::__construct($tahun,$nama);
           $this->os=$os;
        }
        function playGame(){
            echo 'Main game Burik ';
        }
        //override
        function calling(){
            echo "Menelpon...";
        }
        //overloading
        function sendMessage($nama){
            for($i = 0; $i<5; $i++){
                echo "Menelpon =>$nama'=>'$i<br>";
            }
        }

    }

    $nokia=new HP('Kitkat','Nokia');
    $nokia->calling();
    $nokia->sendMessage("bidadari");

    echo "<h1><br>form android<br></h1>";
    $adroid= new android("2019","Android","SOD");
    $adroid->playGame();
    $adroid->calling();
    $adroid->sendMessage("Makmur");

?>