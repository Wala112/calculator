<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        #math_page{
            border:solid;
            margin: 10px;
            padding: 20px;
            border-radius: 15px;
            width:470px;
            background-color: rgba(160, 160, 223, 0.822);}
        }
    </style>
    <title>calculator</title>
</head>
<body>
    <!--first quesition-->
    <?php
        echo $_SERVER['PHP_SELF'];
    ?>
    <hr>
        <!--second quesition-->

    <?php
        $first= $_POST['first'];
        $second= $_POST['second'];
        $opr= $_POST['opr'];
        $result= '';
        if(is_numeric($first) && is_numeric($second)){
            switch($opr){
            case"Add":
                $result = $first + $second;
                break;
            case"Subtract":
                $result = $first - $second;
                break;
            case"Multiply":
                $result = $first * $second;
                break;
            case"Divide":
                $result = $first / $second;
            }
        }  
    ?>
        <div  id="math_page">
            <h1>PHP - Simple Calculator Program</h1>
            <form action="" method="post" id="Calculator" >
                <p>
                <input type="number" name="first" required="required" value="<?php echo $first; ?>"><b>First Number</b> 
                </p>
                <p>
                <input type="number" name="second"required="required" value="<?php echo $second; ?>"><b>second Number</b>
            
                <p>
                <input type="number" name="result" readonly="readonly" value="<?php echo $result; ?>"><b>result</b>
                </p>
                        <input  type="submit" value="Add" name="opr"   >
                        <input  type="submit" value="Subtract" name="opr"  >
                        <input  type="submit" value="Multiply" name="opr"  >
                        <input  type="submit" value="Divide" name="opr"  >
            </form>
        </div>
</body>
</html>