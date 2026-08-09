<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Pegawai 
        {
            protected $nama;
            protected $gaji;
            public function __construct($nama, $gaji) 
            {
                $this->nama = $nama;
                $this->gaji = $gaji;
            }

            public function tampilkanInfo() 
            {
                echo "Nama: " . $this->nama . "<br>";
                echo "Gaji: " . $this->gaji . "<br>";
            }
        }


        class Manager extends Pegawai 
        {
            private $tunjangan;

            public function __construct($nama, $gaji, $tunjangan) 
            {
                parent::__construct($nama, $gaji);
                $this->tunjangan = $tunjangan;
            }

            public function tampilkanInfo() 
            {
                parent::tampilkanInfo(); 
                echo "Tunjangan: " . $this->tunjangan . "<br>";
            }
        }


        class Staf extends Pegawai 
        {
            private $lembur;

            public function __construct($nama, $gaji, $lembur) 
            {
                parent::__construct($nama, $gaji);
                $this->lembur = $lembur;
            }


            public function tampilkanInfo() 
            {
                parent::tampilkanInfo(); 
                echo "Lembur: " . $this->lembur . "<br>";
            }
        }


        $manager = new Manager("Budi", 7000000, 3000000);
        $manager->tampilkanInfo();

        echo "<br>"; 

        $staf = new Staf("Ani", 4000000, 500000);
        $staf->tampilkanInfo();

    ?>

</body>
</html>