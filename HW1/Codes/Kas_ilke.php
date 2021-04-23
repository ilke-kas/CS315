<!DOCTYPE html>
<html>
<body>

<?php
$globalvar = false;
function fun1()
{
	echo "fun1 is evaluated.</br>";
    return true;
}
function fun2()
{
	echo "fun2 is evaluated.</br>";
    return 10;
}
function fun3()
{
	echo "fun3 is evaluated.</br>";
    return 3.2;
}
function fun6()
{
	echo "fun6 is evaluated.</br>";
    return null;
}
function fun4()
{
	echo "fun4 is evaluated.</br>";
    return false;
}
function fun10()
{
	echo "fun10 is evaluated.</br>";
    return "";
}
function fun7()
{
	global $globalvar;
    $globalvar = true;
	echo "fun7 is evaluated.</br>";
    return true;
}

function main()
{
	echo "------1.Boolean operators provided-------</br>";
    echo "All combination of AND operator</br>";
    echo "false and false: ", var_dump(FALSE and FALSE), "</br>";
    echo "false and true: ", var_dump(FALSE and TRUE), "</br>";
    echo "true and false: ", var_dump(TRUE and FALSE), "</br>";
    echo "true and true: ", var_dump(TRUE and TRUE), "</br></br>";
    
        echo "All combination of && operator</br>";
    echo "false && false: ", var_dump(FALSE && FALSE), "</br>";
    echo "false && true: ", var_dump(FALSE && TRUE), "</br>";
    echo "true && false: ", var_dump(TRUE && FALSE), "</br>";
    echo "true && true: ", var_dump(TRUE && TRUE), "</br></br>";
    
    echo "All combination of OR operator</br>";
    echo "false or false: ", var_dump(FALSE or FALSE), "</br>";
    echo "false or true: ", var_dump(FALSE or TRUE), "</br>";
    echo "true or false: ", var_dump(TRUE or FALSE), "</br>";
    echo "true or true: ", var_dump(TRUE or TRUE), "</br></br>";
    
        echo "All combination of || operator</br>";
    echo "false || false: ", var_dump(FALSE || FALSE), "</br>";
    echo "false || true: ", var_dump(FALSE || TRUE), "</br>";
    echo "true || false: ", var_dump(TRUE || FALSE), "</br>";
    echo "true || true: ", var_dump(TRUE || TRUE), "</br></br>";
    
      echo "All combination of XOR operator</br>";
    echo "false xor false: ", var_dump(FALSE xor FALSE), "</br>";
    echo "false xor true: ", var_dump(FALSE xor TRUE), "</br>";
    echo "true xor false: ", var_dump(TRUE xor FALSE), "</br>";
    echo "true xor true: ", var_dump(TRUE xor TRUE), "</br></br>";
    echo "------2.Data types for operands of Boolean operators 
-------</br>";
	$var1 = "0";
    $var2 = 0;
    $var3 = 59;
    $var4 = -13.8;
    echo " \" 0 \" is ",($var1 ? 'TRUE' : 'FALSE'), "</br>";
    echo "0 is ",($var2 ? 'TRUE' : 'FALSE'), "</br>";
    echo " \"\" is " , ("" ? 'TRUE' : 'FALSE'), "</br>";
    echo "59 is ",($var3 ? 'TRUE' : 'FALSE'), "</br>";
    echo  "-13.8 is ",($var4 ?'TRUE': 'FALSE'), "</br>";
    echo  "NULL is ",(null?'TRUE': 'FALSE'), "</br>";
    echo  "TRUE is ",(TRUE?'TRUE': 'FALSE'), "</br>";
    echo  "true is ",(true?'TRUE': 'FALSE'), "</br>";
    echo  "True is ",(True?'TRUE': 'FALSE'), "</br></br>";
    echo "------3.Operator precedence rules
-------</br>";
	$varand = fun1() and fun4();
    $varand2 = fun1() && fun4();
     echo "fun1() and fun4(): ", var_dump($varand), "</br>";
     echo "fun1() && fun4(): ", var_dump($varand2), "</br>";
    $varor = fun4() or fun1();
    $varor2 = fun4() || fun1();
     echo "fun1() or fun4(): ", var_dump($varor), "</br>";
     echo "fun1() || fun4(): ", var_dump($varor2), "</br>";
     $a = false or true || false;
     $b = false || true or false;
     echo "a is", var_dump($a), "</br>";
     echo "b is", var_dump($b), "</br>";
     echo "------4.Operator associativity rules
-------</br>";
	    echo "All combination of XOR operator with three operands </br>";
    echo "false xor false xor false: ", var_dump(FALSE xor FALSE xor FALSE), "</br>";
    echo "false xor false xor true : ", var_dump(FALSE xor FALSE xor TRUE), "</br>";
    echo "false xor true xor false: ", var_dump(FALSE xor TRUE xor FALSE), "</br>";
    echo "false xor true xor true: ", var_dump(FALSE xor TRUE xor TRUE), "</br></br>";
      echo "true xor false xor false: ", var_dump(TRUE xor FALSE xor FALSE), "</br>";
    echo "true xor false xor true : ", var_dump(TRUE xor FALSE xor TRUE), "</br>";
    echo "true xor true xor false: ", var_dump(TRUE xor TRUE xor FALSE), "</br>";
    echo "true xor true xor true: ", var_dump(TRUE xor TRUE xor TRUE), "</br></br>";
    echo "------5.Operand evaluation order
-------</br>";
echo "code segment1 </br>";
	global $globalvar;
	if($globalvar && fun7())
    {
     echo "side effect of fun7-1</br>.";
    }
    $globalvar = false;
    if(fun7() && $globalvar)
    {
     echo "side effect of fun7-2</br>.";
    }
    
   echo "code segment2 </br>";
   echo "true and true or false and false: ",var_dump(true and true or false and false), "</br>";
   echo "true and (true or false) and false: ",var_dump(true and (true or false) and false), "</br>";
   echo "!(true && false) ", var_dump(!(true && false)), "</br>";
   echo "!true && false ", var_dump(!true && false), "</br>";
   
   echo "code segment3 </br>";
   if(fun2()&&fun3())
   {
   	 echo "10 && 3.2: ",fun2()&&fun3(), "</br>";
   }
   if(fun3()&&fun2())
   {
   	 echo "3.2 && 10: ",fun3()&&fun2(),"</br>";
   }
    if(!(fun6()||fun10()))
   {
   	 echo "null || \"\": ",var_dump(fun6()||fun10()), "</br>";
   }
    if(!(fun10()||fun6()))
   {
   	 echo " \"\" || null: ",var_dump(fun10()||fun6()), "</br>";
   }
     echo "------6.Short-circuit evaluation
-------</br>";
	$globalvar = false;
	if($globalvar && fun7())
    {
     echo "side effect of fun7-1</br>.";
    }
       echo "1-globalvar : ", var_dump($globalvar), "</br>";
    $globalvar = false;
    if(fun7() && $globalvar)
    {
     echo "side effect of fun7-2</br>.";
    }
     echo "2-globalvar : ", var_dump($globalvar), "</br>";
}
main();
?>

</body>
</html>
