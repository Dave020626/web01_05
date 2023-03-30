<?php
$v1=''; $v2 =''; $m='+';$res ='';
    if(isset($_GET['op1']) && isset($_GET['op2']) && isset($_GET['opr'])) {
        $hiba = '';
        $op1=(integer)$_GET['op1'];
        if ((string)$op1 != $_GET['op1']) {
            $hiba .= 'Az első operandus nem szám! <br>';
        }
        $v1 = $op1;
        $op2=(integer)$_GET['op2'];
        if ((string)$op2 != $_GET['op2']) {
            $hiba .= 'A második operandus nem szám! <br>';
        }
        $v2 = $op2;
        if($hiba=='') {
            $m = $_GET['opr'];
            switch ($_GET['opr']) {
                case '+' :
                    $res = $op1 + $op2;
                    break;
            case '-' :
                    $res = $op1 - $op2;
                    break;
            case '*' :
                    $res = $op1 * $op2;
                    break;
            case '/' :
              if ($op2 == 0)                      
                  $hiba .= '0-val nem lehet osztani!<br>'; 
              else                       
                     $res = $op1 / $op2; 
                     break;
                     default:
                     $hiba .= 'Ismeretlen művelet!<br>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Számológép</title>
</head>
<body>
    <?php
    if(isset($hiba)&& strlen($hiba) >0) {
        echo $hiba;
    }
    ?>
    <form action="szamologep.php">
          <input type="text" name="op1" value="<?php echo $v1; ?>" pattern="[1-9][0-9]*|0" required>
            <select name="opr">
                <option value="+" <?php if($m=='+') echo " selected";?>>+</option>
                <option value="-"<?php if($m=='-') echo " selected";?>>-</option>
                <option value="*"<?php if($m=='*') echo " selected";?>>*</option>
                <option value="/"<?php if($m=='/') echo " selected";?>>/</option>
            </select>
          <input type="text" name="op2" value="<?php echo $v2; ?>" pattern="[1-9][0-9]*|0" required>
          <input type="submit" value="=">
          <?php
            echo $res;
        ?>
    </form>
</body>
</html>