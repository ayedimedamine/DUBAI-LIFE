<?php

    require 'vendor/autoload.php';
    require 'class/Ticket.php';
    
   $tickets = new Ticket();
   $tickets = $tickets->getall();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../assets/css/table.css" />
        
    </style>
</head>
<div class="card">
  <div class="table-title">
    <h2>Customers</h2>
  </div>
  <div class="button-container">
  </div>
  <div class="table-concept">
    <input class="table-radio" type="radio" name="table_radio" id="table_radio_0" checked="checked"/>
    <div class="table-display"></div>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>EMAIL</th>
          <th>TICKET CODE</th>
          <th>DATE</th>
        </tr>
      </thead>
      <tbody>
          <?php 
          foreach ($tickets as $ticket){
              echo "<tr>" . 
              "<td>" .$ticket['id'] . "</td>" .
              "<td>" .$ticket['email'] . "</td>" .
              "<td>" .$ticket['ticketcode'] . "</td>" .
              "<td>" .$ticket['reg_date'] . "</td>" .
              "</tr>";
              
          }
          ?>
        <!-- <tr>
          <td>1</td>
          <td>This is Item number 1-1</td>
          <td>This is Item number 2-1</td>
          <td>This is Item number 3-1</td>
          <td>This is Item number 4-1</td>
          <td>This is Item number 5-1</td>
        </tr> -->
        
      </tbody>
    </table>
    <!-- <div class="pagination">
      <label class="disabled" for="table_radio_-1">&laquo; Previous</label>
      <label class="active" for="table_radio_0" id="table_pager_0">1</label>
      <label for="table_radio_1" id="table_pager_1">2</label>
      <label for="table_radio_2" id="table_pager_2">3</label>
      <label for="table_radio_3" id="table_pager_3">4</label>
      <label for="table_radio_4" id="table_pager_4">5</label>
      <label for="table_radio_1">Next &raquo;</label>
    </div>
    <input class="table-radio" type="radio" name="table_radio" id="table_radio_1"/>
    <div class="table-display">Showing 21 to 40
      of 95 items
    </div> -->
    
  </div>
