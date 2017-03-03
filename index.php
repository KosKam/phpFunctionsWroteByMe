<?php
if (isset($_POST["submit"])){
        
    $string = $_POST["text"];
    $stringToArr = explode(", ", $string);
    
    $arr = [];
    $temp = "";
    
    for($i = 0; $i < count($stringToArr); $i++){
                
        $temp = $stringToArr[$i];
        $arr[$stringToArr[$i]] = 0;
        
        foreach ($stringToArr as $v){
            if ($temp == $v) {
                $arr[$stringToArr[$i]]++;                
            }
        }        
    }
    
    // Find bigges number    
    $biggestNum = 0;
    foreach ($arr as $v){
        if ($biggestNum < $v) {
            $biggestNum = $v;
        }
    }
    // Find key of the biggest num
    $biggestKey = "";
    foreach ($arr as $k => $v){
        if ($biggestNum == $v) {
            $biggestKey = $k;
        }
    }
    
    echo "Most fricuant num is: $biggestKey -> $biggestNum <br>";
    
    foreach ($arr as $k => $v){
        if ($biggestKey == $k) {
            
        }  else {
            echo "Other num are: $k -> $v <br>";
        }
        
    }
    
    
    
}

?>
     

<form method="post">
    <input type="text" name="text">
    <input type="submit" name="submit">
</form>







