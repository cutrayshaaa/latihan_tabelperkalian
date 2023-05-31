<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBUAT TABEL KALI</title>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="2" bgcolor="pink">TABEL PERKALIAN</th>
        </tr>
        <tr>
            <th>NILAI</th>
            <th>PERKALIAN</th>
</tr>
        <?php
for($i = 2; $i<=100; $i+=2){
    $val =$i = $i;
    echo "<tr>";
    echo "<td>$i * $i</td>";
    echo "<td>$val</td>";
    echo"</tr>";
}
?> 
    </table>

</body>
</html>