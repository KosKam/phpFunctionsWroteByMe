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
    
    echo '<pre>';
        print_r($arr);  
    echo '</pre>';
    
}

?>
     

<form method="post">
    <input type="text" name="text">
    <input type="submit" name="submit">
</form>







