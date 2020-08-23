<?php
// loading database
require_once('db_config.php');

// SQL selecting query
$sqlDelivery="SELECT * FROM delivery";

// SQL execution 
$resultDelivery=$connection->query($sqlDelivery);

// if the query is executed
if($resultDelivery){

    // getting data from row to array
    while($row=$resultDelivery->fetch_assoc()){

        // printing table with results
        echo "
        <table style='width: 100%;'>
        <tr class='admin-tr'>
            <td class=\"admin-td\">{$row['firstname']}</td>
            <td class=\"admin-td\">{$row['lastname']}</td>
            <td class=\"admin-td\">hrana: {$row['food_ID']}</td>
            <td class=\"admin-td\">kolicina: {$row['food_amount']}</td>
            <td class=\"admin-td\">{$row['phone']}</td>
            <td class=\"admin-td\">{$row['address']}</td>
            <td class=\"admin-td\">{$row['payment']}</td>
            <td class=\"admin-td\"><input type=\"checkbox\" name=\"delete_names[]\" value=\"{$row['firstname']}\"></td>
            </tr>
            </table>";
    }
}
?>