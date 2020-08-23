<?php
// loading database
require_once('db_config.php');

// SQL selecting query
$sqlReservation="SELECT * FROM reservation";

// SQL execution 
$resultReservation=$connection->query($sqlReservation);

// if the query is executed
if($resultReservation){

    // getting data from row to array
    while($row=$resultReservation->fetch_assoc()){

        // printing table with results
        echo "
        <table style='width: 100%;'>
        <tr class='admin-tr'>
            <td class=\"admin-td\">{$row['firstname']}</td>
            <td class=\"admin-td\">{$row['lastname']}</td>
            <td class=\"admin-td\">{$row['dateOfReservation']}</td>
            <td class=\"admin-td\">{$row['timeOfReservation']}</td>
            <td class=\"admin-td\">{$row['phone']}</td>
            <td class=\"admin-td\">gosti: {$row['numberOfGuests']}</td>
            <td class=\"admin-td\"><input type=\"checkbox\" name=\"delete_names[]\" value=\"{$row['firstname']}\"></td>
            </tr>
            </table>";
    }
}
?>