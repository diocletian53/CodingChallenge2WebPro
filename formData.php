<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sample Gucci Form Page</title>
    <style type="text/css">
        td, th, table {
            border: thin solid black;
        }
        .center-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }
        .Content {
            margin: 0 auto;
            max-width: 500px;
            border: 4px solid grey;
            position: relative;
            overflow: hidden;
        }
        table {
            width: 100%;
            table-layout: fixed;
        }
        table th, table td {
            word-wrap: break-word;
        }
    </style>
</head>
<body>
<div class="Content">

<div class="center-container">
    <div>
        <h1>Select An Option</h1>
        Select a Function &nbsp;&nbsp;&nbsp
        <select name="system">
            <option selected=""> Sort by Name </option>
            <option> Sort By Price </option>
            <option> Average Cost </option>
        </select>
        <input type="submit" value="Show Results"> 

    </div>

    <div>
        <table border="border">
            <caption><h1>Restaurants Ordered by Name</h1></caption>
            <tr>
                <td>Fogo de Chão</td>
                <td>$40.50</td>
            </tr>
            <tr>
                <td>Aviva by Kameel</td>
                <td>$18.00</td>
            </tr>
            <tr>
                <td>Bone's Restaurant</td>
                <td>$65.00</td>
            </tr>
            <tr>
                <td>Umi Sushi Buckhead</td>
                <td>$40.50</td>
            </tr>
            <tr>
                <td>Fandangles</td>
                <td>$30.00</td>
            </tr>
            <tr>
                <td>Capital Grille</td>
                <td>$60.50</td>
            </tr>
            <tr>
                <td>Canoe</td>
                <td>$35.50</td>
            </tr>
            <tr>
                <td>One Flew South</td>
                <td>$21.00</td>
            </tr>
            <tr>
                <td>Fox Bros. BBQ –</td>
                <td>$15.05</td>
            </tr>
            <tr>
                <td>South City Kitchen Midtown –</td>
                <td>$29.00</td>
            </tr>
        </table>
    </div>
</div>
</div>
<?php
      $original = array("Fogo de Chão" => 40.50, "Aviva by Kameel" => 18.00, 
                        "Bone's Restaurant" => 65.00,
		        "Umi Sushi Buckhead" => 40.50, "Fandangles" => 30.00,"Capital Grille" => 60.50,"Canoe" => 35.50,"One Flew South" => 21.00,"Fox Bros. BBQ" => 15.05,"South City Kitchen Midtown" => 29.00 );
    ?>
 <?php
      foreach ($original as $key => $value)
	print("[$key] => $value <br />");

      $new = $original;
      sort($new);
    ?>
    <h4> Array sorted with sort </h4>
    <?php
      foreach ($new as $key => $value)
	print("[$key] = $value <br />");

      $new = $original;
      asort($new);
    ?>
    <h4> Array sorted with asort </h4>
    <?php
      
foreach ($new as $key => $value)
	print("[$key] = $value <br />");

      $new = $original;
      ksort($new);
    ?>
    <h4> Array sorted with ksort </h4>
    <?php

      foreach ($new as $key => $value)
        print("[$key] = $value <br />");
    ?>


</body>
</html>
