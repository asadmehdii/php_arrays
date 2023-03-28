<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php  
    $multiDimensionalArray=array(
        array("name"=>"asad","age"=>23,"location"=>"Lahore"),
        array("name"=>"ali","age"=>24,"location"=>"ISM"),

        array("name"=>"Irfan","age"=>25,"location"=>"Karachi"),
        array("name"=>"Usman","age"=>26,"location"=>"FSD"),


        
    );
    foreach($multiDimensionalArray as $row){
        echo "----------------------------------\n";
        foreach($row as $key => $value) {
            echo $key . ":\n " . $value . "\n";

        }
    }
    
    
    ?>
</body>

</html>