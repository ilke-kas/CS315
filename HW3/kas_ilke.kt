///Nested Functions
//Global scope
var global_var = 0 

fun nestedSubprograms() {//all variables have local offset 1
    
    var main_var1 = 1
    var main_var2 = 1
    var main_var3 = 1
    var main_var4 = 1
    println("local offsets of main_var1, main_var2, main_var3,main_var4 is $main_var1, $main_var2, $main_var3, $main_var4")
    
    fun fn1(){//all variables have local offset 2
        var fn1_var1 = 2
        var fn1_var2 = 2
        println("1-local offset of fn1_var1 and fn1_var2 is $fn1_var1 and $fn1_var2")
        
        var main_var1 = 2
        var chain_offset1 = 2- main_var1;
        var chain_offset2 = 2- main_var2;
        println("2-local offset of main_var1 is $main_var1, chain offset is $chain_offset1")
        println("3-local offset of main_var2 is 2, chain offset is $chain_offset2")
        
        var fn_dynamic = 2
        
        fun fn3(){//all variables have local offset 3
            
            var fn3_var = 3
            var chain_offset5 = 3 - fn_dynamic
            println("7-fn_dynamic has local offset 3, chain offset $chain_offset5")
            if(chain_offset5 == 1 )
                println("8-there is no dynamic chain between nested subprograms")
            else
                println("8-there is dynamic chain between nested subprograms")
                
            fun fn4(){//all variables have local offset 4
                
                var chain_offset6 = 4 - global_var;
                println("9- global variable has local offest 4, chain offset of global is $chain_offset6")
                
            }//end of fn4
            
            fn4()
            
        }//end of fn3
        
         fun fn2(){//all variables have local offset 3
             
            var fn_dynamic = 3
            var fn2_var1 = 3
            println("4-local offset of fn2_var1 is $fn2_var1")
            
            
            var chain_offset3 = 3 - main_var2 
            println("5-local offset of main_var2 is 3, chain offset is $chain_offset3")
            
            var chain_offset4 = 3 - main_var1
            println("6-local offset of main_var1 is 3, chain offset is $chain_offset4")
            fn3()
           // fn4() is not defined here
          
        }//end of fn2
         
        fn2()
        //fn4() is not defined here !!
        
    }//end of fn1
    
    fn1()
    
}//end of nestedSubprograms

fun scopeOfVariables(){
    //global variables are reachable through the program
    println("can reach global variable global_var in here: $global_var")

    //variables can only be used in the block that they are defined
    var y = "outside block y"
    var k = "i can use outside k in block"  //this does not mean that we cannot use some variable outside of the block in the block
    val array = intArrayOf(1)

    for (x in array) {                // start of inner block(only used for block example)
        var x = "inside block x"
        println("$x")

        var y = "inside block y"
        print("$y")//it will print the inside block y because it gets the local y
                    //(which is in the block)

        println("$k")
     }                            
    println("$y") //it will print outside block y because y variable which is the inside the block cannot be accesed outside the block
    
    
    var outside_var = "outside function"
    fun fn(){
        println("$outside_var")
        
        var inside_var = "inside function"
        println("$inside_var")
    }
    //println("$inside_var") cannot be used in here
    fn()
}

fun parameterPassing()
{
    data class NumberObj(var num: Int = 0)

    fun changeNumberObj(obj: NumberObj) {
        obj.num= 10 
    }
     val objct = NumberObj(2)
    println("Before calling function: $objct")
    //after parameter passing by value
    changeNumberObj(objct)
    println("After calling function: $objct")
    
    fun fn1(x : Int){
        // x = 5 -> this is not allowed in Kotlin
        println("$x")
    }
    fn1(12)
}

fun keywordDefault() : Unit {
    //function with default argument
    fun defaultArgument( param1 : Int,
                        param2 : String = "Ilke",
                        param3 : Int = 4  ){
        println("$param1 , $param2, $param3")
    }
    defaultArgument(3,"Zeynep",5)
    defaultArgument(3,"Zeynep")
    defaultArgument(3)
    
    //defaultArgument() -> this gives compile error since we need at leat one int argument
    //We cannot define function like
     fun defaultArgument2( param1 : Int = 5,
                        param2 : String ,
                        param3 : Int = 4  ){
        println("$param1 , $param2, $param3")
    } /*-> This is a compile time error*/
    defaultArgument2(3,"Aysu",5)
    defaultArgument2(3,"Aysu")
    //defaultArgument("İlke")

    //keywords
    fun keywordTrials(param: Int) : Unit{
        println("keywords about functions $param")
        return Unit
    } 
    keywordTrials(4)
}

fun closures(){

    val multiply = Multiply()
    var multiplication = 0 //how can multThreeNum access this variable, it is outside ? BY  USING LAMBDA
    multiply.multThreeNum(13,2,4) { a,b,c -> multiplication = a *  b * c}
    println("multiplication  is $multiplication")

    multiply.multSquare(13) { a -> multiplication = a * a}
    println("multiplication  is $multiplication")
}

    class Multiply{
        fun multThreeNum(x:Int, y: Int, z : Int, action: (Int,Int,Int) -> Unit){
            val res = action(x,y,z);
        } //Lambda

         fun multSquare(x: Int, action: (Int) -> Unit){
            val res = action(x);
        } //Lambda
    }
fun main(args: Array<String>) {

    //nested subprograms
    println("1-nested subprograms")
    nestedSubprograms()
    println("")
    
    //scope of variables
    println("2-scope of variables")
    scopeOfVariables()
    println("")
    
    //parameter passing methods
    println("3-parameter passing methods")
    parameterPassing()
    println("")
    
    //keyword an default argument
    println("4-keyword an default argument")
    keywordDefault()
    println("")

     //closures
    println("5-closures")
    closures()
    println("")
}