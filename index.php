<?php
if (isset($_POST["submit"])){
        
    $string = $_POST["text"];
    $stringToArr = explode(", ", $string);
        
    // This function count elements in array 
    // this is the function start variant 1
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
     // this is the function end variant 1   
   // this is the function start variant 2
    session_start();

    $tags = ["kos", "bos", "kos", "mos", "kos", "mos"];

     if (!isset($_SESSION["tags"])) {
        $_SESSION["tags"] = [];
    }

    $allTags = $_SESSION["tags"];
    foreach ($tags as $tag){
    
    if (!array_key_exists($tag, $allTags)) {
        $allTags[$tag] = 0;
    }
    $allTags[$tag]++;
}
    // this is the function end variant 2  
    
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







