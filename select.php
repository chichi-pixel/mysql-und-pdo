<?php
require_once 'select.php';

//Notice: Undefined variable: db in C:\APACHEFORXAMMP\htdocs\pdokurs\functions.php on line 5

//Fatal error: Uncaught Error: Call to a member function prepare() on null in C:\APACHEFORXAMMP\htdocs\pdokurs\functions.php:5 Stack trace: 
//#0 {main} thrown in C:\APACHEFORXAMMP\htdocs\pdokurs\functions.php on line 5

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