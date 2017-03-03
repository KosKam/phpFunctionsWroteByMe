<?php
if (isset($_POST["submit"])){
        
    $string = $_POST["text"];
    $stringToArr = explode(", ", $string);
        
    // this is the function start
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
    // this is the function end
    
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
            echo "Other nums are: $k -> $v <br>";
        }
        
    }  
        
    echo '<pre>';
        print_r($arr);  
    echo '</pre>';

    
}

?>
     

<form method="post">
    <input type="text" name="text">
    <input type="submit" name="submit">
</form>







