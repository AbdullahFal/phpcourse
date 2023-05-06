<?php 
// variables
$title = "Abdullah - ";
$num = 25;
$float = 10.30;
$bool = false;
$nothing = null;
$string = "This Is a String to Manipulate"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?php echo $title . "PHP"?></title>
</head>
<body>
    <?php 
        echo "<h1>Welcome fine gentelman!</h1>";
        echo $num;
        echo "<br>";
        echo $float;
        echo "<br>";
        echo $string;
        echo "<br>";
        // Dealing with strings
        echo strtolower($string . ", now it's in lower case");
        echo "<br>";
        echo strtoupper($string . ", now it's in upper case");
        echo "<br>";
        echo "String length is: " . strlen($string);
        echo "<br>";
        echo str_replace("String", "Text", $string);
        echo "<br>";
        echo substr($string, 20, 3);
        echo "<br>";echo "<br>";

        //Dealing with numbers
        echo "<h3>Numbers! yay exciting :)</h3>";
        echo 15 + 10;
        echo "<br>"; 
        echo sqrt(16);
        echo "<br>";
        echo round(11.4);
        echo "<br>";
        echo round(11.5);
        echo "<br>";
        echo floor(8.5);
        echo "<br>";
        echo ceil(8.5);
        echo "<br>";
        $num++;
        echo $num;
        echo "<br>";
        $num%=5;
        echo $num;
        echo "<br>";
        echo "max of 10,20,30";
        echo "<br>";
        echo max(10,20,30);
        echo "<br>";
        echo "min of 10,20,30";
        echo "<br>";
        echo min(10,20,30);
        echo "<br>";
    ?>


<!-- forms and calculator -->
    <?php
    echo "<br>";
    echo "<h3>Forms</h3>";
        // $number1 = $_GET["number1"];
        // $number2 = $_GET["number2"];
        // $op = $_GET["op"];

        // function add($num1 , $num2){
        //     return ($num1 + $num2);
        // };
        // function sub($num1 , $num2){
        //     return ($num1 - $num2);
        // };
        // function mul($num1 , $num2){
        //     return ($num1 * $num2);
        // };
        // function div($num1 , $num2){
        //     return ($num1 / $num2);
        // };
    
        // if(empty($number1)){
        //     $result = "Number1 is empty";
        // }elseif ( empty($number2)){
        //     $result = "Number2 is empty";
        // }elseif(empty($op)){
        //     $result = "Enter the desired operation";
        // }else{
    
        //     if($op === "+"){
        //         $result = add($_GET["number1"], $_GET["number2"]);
        //     }elseif ($op === "-"){
        //         $result = sub($_GET["number1"], $_GET["number2"]);
        //     }elseif($op === "*"){
        //         $result = mul($_GET["number1"] , $_GET["number2"]);
        //     }elseif($op === "/"){
        //         $result = div($_GET["number1"] , $_GET["number2"]);
        //     }else{
        //         $result = "Invalid opreation";
        //     }
        // }
    ?> 

    <div class = "container">
        <form action="index.php" method ="GET">
            <div>
                <label >Enter Number1:</label>
                <input type="number" id="num1" name = "number1" class = "form-control">

            </div>

            <div>
                <label >Enter Number2:</label>
                <input type="number" id="num2" name = "number2" class = "form-control">

            </div>
            <br>
            <div>
                <label>Opreation:</label>
                <input type="text" name="op" id="form-control">
            </div>
            <br>
            <div class = "alert alert-success">
                <?php  echo $result;?>
            </div>
            <br>
            <input type="submit" class = "btn btn-primary">

        </form>    

    </div>



    <?php
    //Conditional Statements
    echo "<br>";
    echo "<h3>Conditional Statements</h3>";
    $number1 = 2;
    $number2 = 0;
    
    if($number1 > $number2){
        echo "number1 greater than number2";
    }elseif ($number1 < $number2){
        echo "number2 greater than number1";
    }else{
        echo "Both number are eqaul";
    }
    echo"<br>";
    //nested if statement
    if($number1 > $number2){
        echo "number1 greater than number2 <br>";
        if($number1 > 0){
            echo "number1 is postive ";
        }elseif($number1 < 0){
            echo "number1 is nigative";
        }else{
            echo "number1 is zero";
        }
    }elseif ($number1 < $number2){
        echo "number2 greater than number1 <br>";
        if($number2 > 0){
            echo "number2 is postive";
        }elseif($number2 < 0){
            echo "number2 is nigative";
        }else{
            echo "number2 is zero";
        }
    }else{
        echo "Both number are eqaul <br>";
    }
    
    ?>

    <?php
    // comparison of type
    
    $username = "1";
    $email = "";
    if($username === 1)
        echo "Welcome Boss";
    else
        echo "Type incompitablity error";
    

    ?>

    <?php
    echo "<br>";
    $username = "Abdullah";
    $email = "Abdullh_eyad@hotmail.com";
    if($username === "Abdullah" && $email === "Abdullh_eyad@hotmail.com")
        echo "Welcome Gentelman";
    else
        echo "Access denied";
    echo "<br>";
    ?>

    <?php 
    echo "<br>";
    echo "<h3>Array</h3>";
    ?>
    <form action = "index.php" method="GET">
        <input type="text" name="xname" >
        <input type="submit">


    </form>

    <?php
    /*
    $number1 = 2;
    $number2 = 0;

    //multi-ways if statment
    if($number1 > $number2){
        echo "number1 greater than number2";
    }elseif ($number1 < $number2){
        echo "number2 greater than number1";
    }else{
        echo "Both number are eqaul";
    }

    echo"<br>";

    //nested if statment

    if($number1 > $number2){
        echo "number1 greater than number2 <br>";
        if($number1 > 0){
            echo "number1 is postive ";
        }elseif($number1 < 0){
            echo "number1 is nigative";
        }else{
            echo "number1 is zero";
        }
    }elseif ($number1 < $number2){
        echo "number2 greater than number1 <br>";
        if($number2 > 0){
            echo "number2 is postive";
        }elseif($number2 < 0){
            echo "number2 is nigative";
        }else{
            echo "number2 is zero";
        }
    }else{
        echo "Both number are eqaul <br>";
    }
    */
    ?>

    <?php
    //arrays
    //$family = array("Father","Mother","Son");
    $family = ["Father","Mother","Son"];
    $family[1] = "THE NUMBER 1 FOR ME";
    //echo $family[1];
    //echo "<br>";

    $family[3]= "Daughter";
    //echo $family[3];
    //echo "<br>";

    //echo count($family);
    //echo "<br>";

    //Associative Array
    // KEY = VALUE 
    $employees = [
        "CEO" => "Abdulrahman",
        "Developer" => "Abdullah",
        "Artist" => "Habib"
        
    ];

    //echo $employees["Developer"];
    //echo "<br>";


    //example of associative array
    /*
    $xname = $_GET["xname"];
    echo $employees[$xname];
    */
    //you can do a simlar example with the following array
    //nested arrays

    $xname = $_GET["xname"];

    $score = [
        "Ahmed" => ["Score"=> "90","Grade"=>"A"],
        "Majed" => ["Score"=> "80","Grade"=>"B"],
        "Abdullah" => ["Score"=> "70","Grade"=>"C"]
    ];

    echo "Score: " . $score[$xname]["Score"];
    echo "<br>";
    echo "Grade: " . $score[$xname]["Grade"];


    ?>

    <?php
    echo "<br>";
    echo "<h3>Functions</h3>";
    function hello(){
        $user = "Abdullah";
        if($user === "Abdullah"){
             echo "Hello " . $user;
        }else{
             echo "Bye " . $user;
        }     

    }
   
    hello();
    echo "<br>";

    //function with parameter
    function CheckUser($name){
        $user = $name;
        if($user === "Abdullah"){
             echo "Hello " . $user;
        }else{
             echo "Bye " . $user;
        }     

    }

    CheckUser("Ziad");
    echo "<br>";
    CheckUser("Abdullah");

    //function with return value
    function add($x, $y){
        return $x + $y;
    }
    echo "<br>";
    echo add(4,4);
   
    ?>

    <!-- loops -->
    <?php
        echo "<br>";echo "<br>";
        echo "<h3>Loops</h3>";
        for ( $i = 0; $i <= 5 ; $i++){
            echo $i ."+". 10 ." = ". $i + 10;
            echo "<br>";
        }

        $family = ["Father","Mother","Son"];

    /*
    for($i = 0; $i < count($family);$i++){
        echo $family[$i] . "<br>";
    }
    */

    //while loop
    /*
    $i = 0;
    while ($i < count($family)) {
        echo $family[$i] . "<br>";
        $i++;
      }
    */

    //do-while loop
    /*
    $i = 0;
    do {
        echo $family[$i] . "<br>";
        $i++;
      } while ($i < count($family));
      */

      //foreach
      foreach ($family as $value) {
        echo "$value <br>";
      }
    ?>


</body>
</html>