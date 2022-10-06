<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktorial</title>
</head>
<body>
    <h1>Faktorial</h1>
    <form action="" method="post">
        <label for="text" > Masukan Angka Faktorial</label>
        <input type="number" name="faktorial" required >
        <button type="submit" name="gas">Hitung</button>
    </form>
    <?php
    function faktorialnya($x){
        $angka = 1;
        $faktorialnya = 1;
         while($angka <= $x){
             $faktorialnya = $faktorialnya * $angka;
             $angka = $angka + 1;
         }
          return $faktorialnya;
    }

    if(isset($_POST['gas'])){
        $x = $_POST['faktorial'];
        echo "Hasilnya = ".faktorialnya($x);
    }
    
    ?>
</body>
</html>