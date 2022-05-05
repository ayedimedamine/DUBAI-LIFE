<?php

    require 'vendor/autoload.php';
    require 'class/Campaign.php';
    
   $campaigns = new Campaign();
   $campaigns = $campaigns->getall();
    // echo json_encode($campaigns, True);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../assets/css/table.css" />
        
    </style>
</head>
<div class="card">
  <div class="table-title">
    <h2>Campaigns</h2>
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
          <th>NOM</th>
          <th>EMAIL</th>
          <th>ADDRESS</th>
          <th>PHONE</th>
          <th>STATE</th>
          <th>COUNTRY</th>
          <th>ZIP CODE</th>
          <th>QUANTITY</th>
          <th>PAYMENT</th>
          <th>PAYE</th>
          <th>INVOICE</th>
          <th>DATE</th>
        </tr>
      </thead>
      <tbody>
          <?php 
          foreach ($campaigns as $campaign){
              echo "<tr>" . 
              "<td>" .$campaign['id'] . "</td>" .
              "<td>" .$campaign['nom'] . "</td>" .
              "<td>" .$campaign['email'] . "</td>" .
              "<td>" .$campaign['address'] . "</td>" .
              "<td>" .$campaign['phone'] . "</td>" .
              "<td>" .$campaign['state'] . "</td>" .
              "<td>" .$campaign['country'] . "</td>" .
              "<td>" .$campaign['zipCode'] . "</td>" .
              "<td>" .$campaign['quantity'] . "</td>" .
              "<td>" .$campaign['payment'] . "</td>" .
              "<td>" .$campaign['paye'] . "</td>" .
              "<td>" .$campaign['facture'] . "</td>" .
              "<td>" .$campaign['reg_date'] . "</td>" .
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
