<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bangun Datar</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }
        body {
            display: flex;
            flex-wrap: wrap;
            padding: 1rem;
        }
        form {
            min-height: 200px;
            width: 35%;
            margin: 1rem;
            padding: 1rem;
            border: 1px solid black;
            flex-grow: 1;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        form h1 {
            margin-bottom: 1rem;
        }
        input[type=number] {
            margin: .5rem auto;
            padding: .5rem
        }
        button[type=submit] {
            margin: .7rem .3rem;
            padding: .5rem;
            border: none;
            color: #FFF;
        }
        button.btn-luas {
            background: #FC8585;
        }
        button.btn-keliling {
            background: #46C5DD;
        }
        button[type=submit]:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>Persegi</h1>
        <input type="number" name="sisi" placeholder="Sisi">
        <div>
            <button class="btn-luas" type="submit" name="luas_persegi">Luas</button>
            <button class="btn-keliling" type="submit" name="keliling">Keliling</button>
        </div>

        <?php
        if (isset($_POST['luas_persegi'])) {
            $sisi = (int)htmlspecialchars($_POST['sisi']);
            echo $sisi**2;
        }
        if (isset($_POST['keliling'])) {
            $sisi = (int)htmlspecialchars($_POST['sisi']);
            echo $sisi*4;
        }
        ?>
    </form>
    <form action="" method="POST">
        <h1>Persegi Panjang</h1>
        <input type="number" name="panjang_persegi_panjang" placeholder="Panjang">
        <input type="number" name="lebar_persegi_panjang" placeholder="Lebar">
        <div>
            <button class="btn-luas" type="submit" name="luas_persegi_panjang">Luas</button>
            <button class="btn-keliling" type="submit" name="keliling">Keliling</button>
        </div>

        <?php
        if (isset($_POST['luas_persegi_panjang'])) {
            $panjang = (int)htmlspecialchars($_POST['panjang_persegi_panjang']);
            $lebar = (int)htmlspecialchars($_POST['lebar_persegi_panjang']);
            echo $panjang * $lebar;
        }
        ?>
    </form>
</body>
</html>