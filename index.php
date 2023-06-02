<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Document</title>
</head>

<body>
    <aside class="lewy">
        <h1>Akta Pracownicze</h1>
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "firma";
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = "SELECT `imie`, `nazwisko`, `adres`, `miasto`, `czyRODO`, `czyBadania` FROM `pracownicy` WHERE id=2";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                if($row["czyRODO"] == 1){
                    $czyRodo = "podpisano";
                }
                else{
                    $czyRodo = "niepodpisano";
                }
                echo "<h3>dane</h3><p>".$row["imie"]." ".$row["nazwisko"]."</p><hr><h3>adres</h3>".$row["adres"]."<br>".$row["miasto"]."<br><hr><p>RODO: ".$czyRodo."</p>";
            }
        }
        ?>
        <hr>
        <h3>Dokumenty pracownika</h3>
        <a href="../cv.txt">Pobierz</a>
        <h1>Liczba zatrudnionych pracowników</h1>
        <p><?php ?></p>

    </aside>
    <aside class="prawy"><?php mysqli_close($conn)?></aside>
    <footer class="stopka">Autorem aplikacji: PESEL
        <ul>
            <li>skontaktuj się</li>
            <li>poznaj naszą firmę</li>
        </ul>
    </footer>

</body>

</html>