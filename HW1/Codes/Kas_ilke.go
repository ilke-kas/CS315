package main
import "fmt"
var globalvar bool = false
func function1()bool{
    fmt.Println("function 1 is evaluated")
    return true
}
func function2()bool{
    fmt.Println("function 2 is evaluated")
    return true
}
func function3()bool{
    fmt.Println("function 3 is evaluated")
    return true
}
func function4()bool{
    fmt.Println("function 4 is evaluated")
    return false
}
func function5()bool{
    fmt.Println("function 5 is evaluated")
    return false
}
func function6()bool{
    fmt.Println("function 6 is evaluated")
    return false
}
func function7() bool{
    globalvar = true;
    fmt.Println("function 7 is evaluated");
    return true;
}
func main() {
    fmt.Println("------------1.	Boolean operators provided---------------")
    T := true
    F := false
    fmt.Println("All combination of &&(AND) operator\n")
    fmt.Println("F&&F:", F&&F)
    fmt.Println("F&&T:", F&&T)
    fmt.Println("T&&F:", T&&F)
    fmt.Println("T&&T:", T&&T)
    fmt.Println("All combination of ||(OR) operator\n")
    fmt.Println("F&&F:", F||F)
    fmt.Println("F&&T:", F||T)
    fmt.Println("T&&F:", T||F)
    fmt.Println("T&&T:", T||T)
    fmt.Println("All combination of !(NOT) operator\n")
    fmt.Println("F:", F)
    fmt.Println("!F:", !F)
    fmt.Println("T:", T)
    fmt.Println("!T:", !T)
    fmt.Println("------------2.	Data types for operands of Boolean operators --------")
    
    if(true){
        fmt.Println("print this")
    }
    if(false){
        fmt.Println("do not print this")
    }
    a:= 13
    c:= a % 2 == 1
    fmt.Println("c:", c)
    b := a <= 9;
    fmt.Println("b:", b)
    d:= true && function1()
    fmt.Println("d:", d)
    fmt.Println("------------3.	Operator precedence rules--------")
    fmt.Println("! false && false: ",!false && false)
    fmt.Println("! true || true:", !true || true)
    fmt.Println("true || true && false:", true || true && false)
    fmt.Println("------------4. Operator associativity rules--------")
    and:=function2() && function1() && function3()
    fmt.Println("and:",and)
    or:=function5() || function6() || function4()
    fmt.Println("or:",or)
    if !!!function4(){
    fmt.Println("Right associativity")
    }
    fmt.Println("------------5.	Operand evaluation order--------")
    //code segment1
    if(globalvar && function7()){
        fmt.Println("Side effect of function 7-1")
    }
    globalvar = false;
     if(function7()&&globalvar){
        fmt.Println("Side effect of function 7-2")
    }
    //code segment2
    fmt.Println("true && true || false && false: ",true && true || false && false)
    fmt.Println("true && (true || false) && false: ",true && (true || false) && false)
    fmt.Println("------------6. Short-circuit evaluation--------")
    globalvar = false;
    if(globalvar && function7()){
        fmt.Println("Side effect of function 7-1")
    }
    fmt.Println("1- global is ", globalvar)
    globalvar = false;
     if(function7()&&globalvar){
        fmt.Println("Side effect of function 7-2")
    }
     fmt.Println("2- global is ", globalvar)
}
