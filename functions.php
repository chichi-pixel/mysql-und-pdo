<?php

require_once 'functions.php';

$select = $db->prepare("SELECT * FROM 'news' ");
if($select->execute()) {
?>

<table border="1">
    <tr>

        <th>id</th>
        <th>title</th>
        <th>explanation</th>
        <th>date</th>
        <th>actions</th>
    </tr>

    <tr>

        <td>id</td>
        <td>title</td>
        <td>explanation</td>
        <td>date</td>
        <td>actions</td>
    
    
    </tr>

</table>
<?php

}else {
    echo "Problem is occured";
}
?>