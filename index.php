<?php if (isset($_GET['code'])){die(highlight_file(__FILE__,1));} ?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Oma_index.css">
    <title>Matvei veebirakenduste leht</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('sakura2.jpg');
            background-size: cover;
            background-position: unset;
            background-repeat: no-repeat;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: #444;
            overflow: hidden;
        }

        nav ul li {
            float: top;
        }

        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #111;
        }

        div#h2{
            position: absolute;
            left: 88%;
            top:30%;
        }

        h2 {
            color: white;
        }

        div#table{
            position: absolute;
            left: 81%;
            top: 33%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: black;
            border-radius: 20px;
        }

        th, td {
            color: white;
            padding: 8px;
            text-align: center;
        }

        div#tark{
            position: absolute;
            top: 33%;
            left: 40%;
            margin-top: 20px;
            border: 1px solid black;
            border-radius: 20px;
            background-color: black;
            color: white;
            width: 20%;
            text-align: center;
        }
        div#h22{
            position: absolute;
            left: 42.5%;
            top:30%;
        }
        div#info{
            position: absolute;
            left: 1%;
            width: 95%;
            color: white;
        }
    </style>
</head>
<body>
<header>
    <h1>Matvei veebirakenduste leht</h1>
    <?php
    $paev = date('d');
    $kuu = date('m');
    $aasta = date('Y');
    echo "Täna on: " . $paev . "." . $kuu . "." . $aasta . "a";
    $eesti_kuud = array("jaanuar", "feebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember");
    $kuu_sonadega = $eesti_kuud[date('n')];
    echo "<br>";
    ?>

</header>
<nav>
    <ul>
        <li><a href="index.php">Kodus</a></li>
        <li><a href='https://matveikulakovski22.thkit.ee/wp/' target='_blank'>WP</a></li>
        <li><a href="lingid.html">Kasulikud lingid</a></li>
    </ul>
</nav>
<div id="h22">
    <h2>Noorem tarkvaraarendaja</h2>
</div>
<div id="tark">
    <p>Noorem tarkvaraarendaja põhitegevuseks on uute tarkvarade ja veebilahenduste loomine, testimine ning dokumenteerimine. Ta tegeleb tarkvara analüüsi, disaini, programmeerimise, testimise ja juurutamisega. Noorem tarkvaraarendaja töö eeldab analüütilist ja loovat tehnilist mõtlemist, pidevat kutsealast enesetäiendamist ning head meeskonnatöö oskust.</p>
</div>
<div id="info">
    <?php
    echo "<h2>Info</h2>";
    $array=array("Matvei","Kulakovski", "Tallinn, Sõpruse pst 182", "images/pilt.png");
    echo "Nimi: <strong>".$array[0]."</strong>";
    echo "<br>";
    echo "perekonnanimi: <strong>".$array[1]."</strong>";
    echo "<br>";
    echo "Kooli aadress: <i>".$array[2]."</i>";
    echo "<br>";
    echo "<img src='".$array[3]."' alt='pilt' width='20%'>";
    echo "<br>";
    ?>
</div>
<div id="h2">
<h2>Tööd</h2>
</div>
<div id="table">
    <table>
        <tr>
            <th>HTML, CSS tööd</th>
            <th>PHP tööd</th>
        </tr>
        <?php
            echo "<tr>";
            echo "<td><a href='Tabelid/Lihtne_Tabel.html'>Tabelid</a></td>";
            echo "<td><a href='Kulakovski_PHP/ylesanne.php'>Ülesanned PHP</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href='Map/Map1.html'>Area kasutamine.</a></td>";
            echo "<td><a href='JSleht/index.php'>JavaScript/PHP ülesanded</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href='Lipud/Lipud.html'>Lipud</a></td>";
            echo "<td><a href='tarpv22/veebileht.php' target='_blank'>TARpv22</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href='Pildid/Pildidele.html'>Pildid absoluutne</a></td>";
            echo "<td><a href='Kaubad/kaubahaldus_linna.php' target='_blank'>Linnad ja Linnaosad</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href='Index2.html'>Teine css kujundus</a></td>";
            echo "<td><a href='elka/elka.html' target='_blank'>Elka</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href='vormid/Spordi_anket.html'>Spordi ankeet</a></td>";
            echo "<td><a href='ulesanne/ulesanne.php' target='_blank'>Anektootid</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href='vormid/muusika_anket.html'>Muusika ankeet</a></td>";
            echo "<td><a href='register/main.php' target='_blank'>Registration and Login</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href='Kalkulator/kalkulator.html'>Saiakeste pood</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href='joonistamine/joonis.html'>Enderman</a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href='JQuery/JQueryweb.html'>JQuery</a></td>";
            echo "</tr>";
        ?>
    </table>
</div>
</body>
</html>
