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
        
    echo '<pre>';
        print_r($arr);  
    echo '</pre>';
    
}

?>
     

<form method="post">
    <input type="text" name="text">
    <input type="submit" name="submit">
</form>







