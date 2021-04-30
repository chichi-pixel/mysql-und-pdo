<?php

require_once 'main.php';

$select = $db->prepare("SELECT * FROM news ");
if($select->execute()) {
?>

<table border="1" cellpadding="5">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>explanation</th>
        <th>date</th>
        <th>actions</th>
    </tr>
    <?php
    while($row = $select->fetch(PDO::FETCH_ASSOC)) { 
    ?>
    <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["title"] ?></td>
        <td><?= $row["explanation"] ?></td>
        <td><?= $row["date"] ?></td>
        <th>Update | Clean</th>
    </tr>
    <?php } ?>
</table>

<?php

}else {
    echo "Problem is occured";
    print_r($select->errorInfo);
}

?>