<?php
include 'config.php';

$query_libri = "SELECT * FROM libri";
$result_libri = $conn->query($query_libri);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<?php include 'partials/menu.html'?>

<a href="form-libro.php">Inserisci nuovo libro</a>
<table>
    <tr>
        <th>id</th>
        <th>autore_id</th>
        <th>editore_id</th>
        <th>titolo</th>
        <th>prezzo</th>
        <th>operazioni</th>
    </tr>

    <?php if($result_libri->num_rows >0)  {
        while($row =$result_libri->fetch_assoc()) {
        ?>

    <tr>
        <td> <?php echo $row['id'] ?>  </td>
        <td><?php echo $row['autore_id'] ?></td>
        <td><?php echo $row['editore_id'] ?></td>
        <td><?php echo $row['titolo'] ?></td>
        <td><?php echo $row['prezzo'] ?></td>
        <td><?php echo $row['operazioni'] ?></td>
        <td> Modifica - Elimina </td>
    </tr>

    <?php } } else {
        echo "non ci sono record";
    } ?>
</table>

<!-- CREATE TABLE `editori` (
  `id` bigint(20) NOT NULL,
  `denominazione` varchar(30) NOT NULL,
  `indirizzo` varchar(40) NOT NULL,
  `cap` varchar(5) NOT NULL,
  `citta` varchar(20) NOT NULL,
  `provincia` varchar(2) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8; -->






</body>
</html>