x = False
def fun1():
    print("fun1 is evaluated")
    return True
def fun2():
    print("fun2 is evaluated")
    return True
def fun3():
    print("fun3 is evaluated")
    return True
def fun4():
    print("fun4 is evaluated")
    return False
def fun5():
    print("fun5 is evaluated")
    return False
def fun6():
    print("fun6 is evaluated")
    return False
def fun7():
    global x
    x = True
    print("fun7 is evaluated")
    return True
def fun8():
    print("fun8 is evaluated")
    return 10
def fun9():
    print("fun9 is evaluated")
    return 3.2
def fun10():
    print("fun10 is evaluated")
    return ""
def fun11():
    print("fun11 is evaluated")
    return None
def main():
    print("--------1. Boolean Operators provided----------")
    T = True
    F = False
    print("All combination of and operator");
    print("F and F:", F and F);
    print("F and T:", F and T);
    print("T and F:", T and F);
    print("T and T:", T and T);
    
    print("\nAll combination of and operator");
    print("F or F:", F or F);
    print("F or T:", F or T);
    print("T or F:", T or F);
    print("T or T:", T or T);
    
    print("\nAll combination of not operator");
    print("F :", F);
    print("not(F) :", not(F) );
    print("T :", T);
    print("not(T) :", not(T) );
    
    print("--------2. Data Types for operands---------")
    false_values= [False, (), [],{},0,"",None,0.0,-0, 4 > 6, 3 -3];
    for i in false_values:
        print("\n",i, " is ", bool(i))
    true_values = [True, (1,3), [4,6], 34, -12, 5.78,"Ilke", 'c', 2 > 1, 3 + 3]
    for i in true_values:
        print("\n",i, " is ", bool(i))
    print("--------3. Operator precedence rules---------")
    print("not False and False :",bool(not False and False) )
    print("not True or True : ", bool(not True or True))
    print("True or True and False : ", bool( True or True and False))
    
    print("--------4. Operator associativity rules---------")
    print("fun2() and fun1() and fun3()",fun2() and fun1() and fun3())
    print("fun5() or fun6() or fun4() ",fun5() or fun6() or fun4()) 
    
    
    print("--------5. Evaluation of operand order---------")
    print("code segment1")
    global x
    if x and fun7():
        print("side effect of fun7-1")
    x =False
    if fun7() and x:
        print("side effect of fun7-2")
    print("code segment2")
    print("true and true or false and false: ", bool(True and True or False and False))
    print("true and (true or false) and false: ", bool(True and (True or False) and False))
    print("code segment3")
    if fun8() and fun9():
        print("10 and 3.2: ", fun8() and fun9() )
    if fun9() and fun8():
        print("3.2 and 10: ", fun9() and fun8() )
    if not(fun10() or fun11()):
        print(" \"\" or None: ", fun10() or fun11())
    if not(fun11() or fun10()):
        print(" None or \"\": ", fun11() or fun10())
    print("--------6. Short Circuit Evaluation---------")
    x =False
    if x and fun7():
        print("side effect of fun7-1")
    print("1- global x:", x)
    x =False
    if fun7() and x:
        print("side effect of fun7-2")
    print("2- global x:", x)
main()