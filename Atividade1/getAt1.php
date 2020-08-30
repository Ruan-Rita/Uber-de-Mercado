<?PHP

$n = $_POST['caixa1'];

$a = 1;
$a2 = 2;
$teste = 0;
$teste2 = 0;

while($a <= $n){
    if($n != 1){
        
        if((($n%$a) == 0) && ($n != $a) && ($a != 1)){
            ////////////////////////////////////////////////////////
            $teste2 = 0;
            while($a2 <= $a){
                //echo $a2 . "<br>";
                //echo $a . "<br>";

                if((($a%$a2) == 0) && ($a != $a2)){
                    //echo " ok ";
                    $teste2 = 1;
                }else if((($a%$a2) == 0) && ($teste2 == 0) &&($a == $a2)){
                    echo $n ." é Divisivel por " . $a2 . "<br>";
                }
                $a2 ++;
            
            }
            $a2 = 2;
            ////////////////////////////////////////////////////////
            //echo $n ." é ++  Divisivel por " . $a . "<br>";
            $teste = 1;
        }else if((($n%$a) == 0) && ($teste == 0) &&($n == $a)){
            echo $n . " é primo";
        }
    }else{
        echo "1 é PRIMO";
    }
    
    $a ++;
}


/*
    NUMERO PRIMO
    SO PODE SER DIVIDIDO POR UM E ELE MESMO - n == 1 n == n
    SE FOR DIVIDIDO POR OUTRO NUMERO, NAO É PRIMO

*/
