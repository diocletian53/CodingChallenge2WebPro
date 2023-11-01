<!DOCTYPE html>
<html>
<head>
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
            border : none;

        }
        table {
            width: 100%;
            table-layout: fixed;
        }
        table th, table td {
            word-wrap: break-word;
        }
        h4{
            text-align: center;

        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST['system'])) {
        $selectedOption = $_POST['system'];

        // Your original data array
        $original = array(
            "Fogo de Chão" => 40.50,
            "Aviva by Kameel" => 18.00,
            "Bone's Restaurant" => 65.00,
            "Umi Sushi Buckhead" => 40.50,
            "Fandangles" => 30.00,
            "Capital Grille" => 60.50,
            "Canoe" => 35.50,
            "One Flew South" => 21.00,
            "Fox Bros. BBQ" => 15.05,
            "South City Kitchen Midtown" => 29.00
        );

        // Sort the data based on the selected option
        if ($selectedOption === "Sort by Name") {
            $new = $original;
            ksort($new);
            ?>
            <div class="center-container">
                <div class="Content">
                    <h4>Sort by Name:Alphabetically </h4>
                    <table>
                        <tr>
                            <th>Restaurant Name</th>
                            <th>Price</th>
                        </tr>
                        <?php
                        //  Array sorted with sort
                        foreach ($new as $key => $value) {
                            echo "<tr><td>$key</td><td>$$value</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        <?php
        } elseif ($selectedOption === "Sort By Price") {
            $new = $original;
            asort($new);
            ?>
            <div class="center-container">
                <div class="Content">
                    <h4>Sort by Price: </h4>
                    <table>
                        <tr>
                            <th>Restaurant Name</th>
                            <th>Price</th>
                        </tr>
                        <?php
                        // Array sorted with asort
                        foreach ($new as $key => $value) {
                            echo "<tr><td>$key</td><td>$$value</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        <?php
        }
    }
    ?>
</body>
</html>
