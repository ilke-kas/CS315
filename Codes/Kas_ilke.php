<!DOCTYPE html>
<html>
<body>

<?php
function main()
{
    echo "---------1----------</br>";
    echo "For Loops </br>";
    $arr = array(0,1,2,3,4);
    for($x = 0 ; $x < sizeof($arr); $x++)
    {
        echo "arr[",$x,"]: ",$arr[$x],"</br>";
    }
    $x = 0;
    echo "First and last expressions are absent</br>";
     for( ; $x < sizeof($arr); )
    {
        echo "arr[",$x,"]: ",$arr[$x],"</br>";
        $x++;
    }
    $i = 0;
    echo "For loop without body</br>";
     for( ; $i < sizeof($arr); $i++ );
     echo "i: ",$i,"</br>";
    echo "While and do while loops</br>";
    $j = 0;
    while($j < sizeof($arr))
    {
        echo "arr[",$j,"]: ",$arr[$j],"</br>";
        $j++;
    }
    echo "While loop without body</br>";
    while($j < 0);
    echo "While loop vs. do while loop</br>";
    while($arr[0])
    {
        echo "Print in while</br>";
    }
    do
    {
        echo "Print in do while</br>";
    }while($arr[0]);
    echo "For Each Loops </br>";
    $list = array("milk","bread","egg","tomato");
    foreach($list as $item)
    {
        echo "$item </br>";
    }
    echo "Associative Arrays</br>";
    $person_list = array("İlke" => "milk", "Zeynep" => "bread", "Aysu" => "egg");
    foreach($person_list as $person => $item)
    {
        echo "$person => $item </br>";
    }
    echo "Strings</br>";
    $str = "Ilke";
    for($i = 0; $i <strlen($str); $i++)
    {
        echo "$str[$i] </br>";
    }
    $numbers = array(1,3,5,7,9);
    echo "cur:",current($numbers). "</br>";
    echo "next: ",next($numbers)."</br>";
    echo "cur: ",current($numbers). "</br>";
    echo "next: ",next($numbers)."</br>";
    echo "cur: ",current($numbers). "</br>";
    echo "prev: ",prev($numbers)."</br>";
    echo "cur: ",current($numbers). "</br>";
    echo "cur:",reset($numbers). "</br>";
    while($cur_val = next($numbers))
        echo "next num: ", $cur_val."</br>";
        
    $person_list2 = array("İlke" => "milk", "Zeynep" => "bread", "Aysu" => "egg");
    echo "cur:",current($person_list2). "</br>";
    echo "next: ",next($person_list2)."</br>";
    echo "cur: ",current($person_list2). "</br>";
    echo "next: ",next($person_list2)."</br>";
    echo "cur: ",current($person_list2). "</br>";
    echo "prev: ",prev($person_list2)."</br>";
    echo "cur: ",current($person_list2). "</br>";
    echo "cur:",reset($person_list2). "</br>";
    while($cur_val = next($person_list2))
        echo "next num: ", $cur_val."</br>";
  
    
}
main();
?>

</body>
</html>
