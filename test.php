<?php

$fruits = ["apple", "banana", "orange", "pineapple"];

function Fruit($value)
{
    echo "<prev>";
    
    echo "</prev>";
}



$apple = 5;
echo("$apple");
echo "<br/>";
$str = "Hello Sir!";
print "$str";
echo "<br/>";

$age = 18;

if($age>=18){
    echo "Allowed to enter Sir!";
}else{
    echo "Not Allowed to enter Sir!";
}

$fruits = ["apple", "banana", "orange", "pineapple"];

$persons = [
    [
        "name" => "Bob",
        "age" => "25"
    ],
    [
        "name" => "Alice",
        "age" => "25"
    ],
];

echo "<pre>";
var_dump($fruits);
echo "</pre>";

echo "<pre>";
var_dump($persons);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
    <br/>
    <br/>
    <?php echo "$str"; ?>
    <br/>
    <?= $str ?>

    <?= 
    "<h1>" . $str . "</h1>";
    ?>

    <hr/>

    <h2>For Loop</h2>

    <ul>
        <?php 
            for($i=0; $i<count($fruits); $i++){
                echo "<li>" . $fruits[$i] . "</li>";
            }
        ?>
    </ul>

    <div>
        <?php
            foreach($persons as $person){
                echo $person['name'];
            }
        ?>
    </div>

    


</body>
</html>


