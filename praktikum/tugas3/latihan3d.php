<?php 
/*
Muhammad Fazril Fuady Hermawan
203040068
https://github.com/Fazril235/pw2021_203040068
Pertemuan 3
Array
Jumat 10.00 - 11.00
*/
?>
<?php 
$pemainBola = [
    [
        "nama"=>"Cristiano Ronaldo",
        "club"=>"Juventus",
        "jumlah main"=>100,
        "jumlah goal"=>76,
        "jumlah assist"=>30
    ],
    [
        "nama"=>"Lionel Messi",
        "club"=>"Barcelona",
        "jumlah main"=>120,
        "jumlah goal"=>80,
        "jumlah assist"=>12
    ],
    [
        "nama"=>"Luca Modric",
        "club"=>"Real Madrid",
        "jumlah main"=>87,
        "jumlah goal"=>12,
        "jumlah assist"=>48
    ],
    [
        "nama"=>"Mohammad Salah",
        "club"=>"Liverpool",
        "jumlah main"=>90,
        "jumlah goal"=>103,
        "jumlah assist"=>8
    ],
    [
        "nama"=>"Neymar",
        "club"=>"Paris Saint Germain",
        "jumlah main"=>109,
        "jumlah goal"=>56,
        "jumlah assist"=>15
    ],
    [
        "nama"=>"Sadio Mane",
        "club"=>"Liverpool",
        "jumlah main"=>63,
        "jumlah goal"=>30,
        "jumlah assist"=>70
    ],
    [
        "nama"=>"Zlatan Ibrahimovic",
        "club"=>"Ac Milan",
        "jumlah main"=>100,
        "jumlah goal"=>10,
        "jumlah assist"=>12
    ]
];

$totalMain = 0;
$totalGoal = 0;
$totalAssist = 0;
for($i=0; $i<count($pemainBola); $i++){
    $totalMain += $pemainBola[$i]["jumlah main"];
    $totalGoal += $pemainBola[$i]["jumlah goal"];
    $totalAssist += $pemainBola[$i]["jumlah assist"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PemainBola</title>
    <style>
        table, th, td{
            font-family: Arial, Helvetica, sans-serif;
            text-align: left;
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
           
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOAL</th>
            <th>ASSIST</th>
        </tr>
        <?php foreach ($pemainBola as $urutan => $pemain) : ?>
            <tr>
                <td><?= $urutan+1; ?></td>
                <td><?= $pemain["nama"]; ?></td>
                <td><?= $pemain["club"]; ?></td>
                <td><?= $pemain["jumlah main"]; ?></td>
                <td><?= $pemain["jumlah goal"]; ?></td>
                <td><?= $pemain["jumlah assist"]; ?></td>
            </tr>
        <?php endforeach; ?>
        <tr style="font-weight:bold">
            <td>#</td>
            <td colspan="2" style="text-align: center;">Jumlah</td>
            <td><?= $totalMain; ?></td>
            <td><?= $totalGoal; ?></td>
            <td><?= $totalAssist; ?></td>
        </tr>
    </table>
</body>
</html>