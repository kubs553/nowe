<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nasz sklep komputerowy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styl8.css">
    </head>
    <body>
        <section>
            <div id="menu">
                <a href="index.php">Główna</a>
                <a href="procesory.html">Procesory</a>
                <a href="ram.html">RAM</a>
                <a href="grafika.html">Grafika</a>
            </div>
            <div id="logo">
                <h2>Podzespoły komputerowe</h2>
            </div>
        </section>
        <section>
            <div id="glowny">
                <h1>Dzisiejsze promocje</h1>
                <table class="podzespoly">
                    <tr>
                        <th>NUMER</th>
                        <th>NAZWA PODZESPOŁU</th>
                        <th>OPIS</th>
                        <th>CENA</th>
                    </tr>
                    <?php
                    $polaczenie = mysqli_connect("localhost", "root", "", "sklep");
                    $wynik = mysqli_query($polaczenie, "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000");
                    while($wiersz = mysqli_fetch_array($wynik))
                    {
                        echo "<tr>";
                        echo "<td>" . $wiersz['id'] . "</td>";
                        echo "<td>" . $wiersz['nazwa'] . "</td>";
                        echo "<td>" . $wiersz['opis'] . "</td>";
                        echo "<td class='ceny'>" . $wiersz['cena'] . "</td>";
                        echo "</tr>";
                    }
                    mysqli_close($polaczenie);
                    ?>
                </table>
            </div>
        </section>
        <section>
            <div id="blok1">
                <img src="scalak.jpg" alt="promocje na procesory"></img>
            </div>
            <div id="blok2">
                <h4>Nasz Sklep Komputerowy</h4>
                <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/">edata</p></a>
            </div>
            <div id="blok3">
                <p>zadzwoń: 601 602 603</p>
            </div>
            <div id="blok4">
                <p>Stronę wykonał: 00000000000</p>
            </div>
        </section>
    </body>
</html>