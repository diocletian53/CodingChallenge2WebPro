<!DOCTYPE html>
<html lang="en-us">
<head>
<title>restaurant sort</title>
</head>
<body>
    
    <?php
    /**sort func sorts by value, so multidim array needed to sort both alphabetically+numerically */
    $restaurant=array(
        array(
            "name"=>"Fogo de Chão",
            "price"=>"$40.50"),
        array(
            "name"=>"Aviva by Kameel",
            "price"=>"$18.00"),
        array(
            "name"=>"Bone's Restaurant",
            "price"=>"$65.00"),
        array(
            "name"=>"Umi Sushi Buckhead",
            "price"=> "$40.50"),
        array(
            "name"=>"Fandangles",
            "price"=>"$30.00"),
        array(
            "name"=>"Capital Grill",
            "price"=>"$60.50"),
        array(
            "name"=>"Canoe",
            "price"=>"$35.50"),
        array(
            "name"=>"One Flew South",
            "price"=>"$21.00"),
        array(
            "name"=>"Fox Bros. BBQ",
            "price"=> "$15.05"),
        array(
            "name"=>"South City Kitchen Midtown",
            "price"=>"$29.00"),
    );

    /**sort restaurant array */

    /**alph sort */
    asort($restaurant, SORT_STRING);
    /**num sort, need to go into array */
    asort($restaurant, SORT_NUMERIC);


    /**populate table with restaurants */
    foreach($restaurant as $item => $val) {
        echo $item.$val['name'].$val['price']."<br>";
    }
    ?>
</body>
</html>