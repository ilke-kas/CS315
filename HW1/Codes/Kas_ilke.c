#include <stdio.h>
int global = 0;
int function()
{
    printf("Function is executed\n");
   return 1;
}
int function1()
{
    printf("function 1 is evaluated\n");
    return 1;
}
int function2()
{
    printf("function 2 is evaluated\n");
    return 1;
}
int function3()
{
    printf("function 3 is evaluated\n");
    return 1;
}
int function4()
{
    printf("function 4 is evaluated\n");
    return 0;
}
int function5()
{
    printf("function 5 is evaluated\n");
    return 0;
}
int function6()
{
    printf("function 6 is evaluated\n");
    return 0;
}
int function7()
{
    global++;
    printf("function 7 is evaluated\n");
    return 1;
}
int main()
{
    printf("------------------------1.Boolean operators provided---------------------------\n");
    int T= 1;
    int F= 0;
    //AND OPERATOR
    printf("All combination of &&(AND) operator\n");
    if(F&&F)
    {
        printf("F&&F is true\n");
    }
     else
    {
        printf("F&&F is false\n");
    }
      if(F&&T)
    {
        printf("F&&T is true\n");
    }
     else
    {
        printf("F&&T is false\n");
    }
    if(T&&F)
    {
        printf("T&&F is true\n");
    }
    else
    {
        printf("T&&F is false\n");
    }
    if(T&&T)
    {
        printf("T&&T is true\n");
    }
     else
    {
        printf("T&&T is false\n");
    }
  
    //OR OPERATOR
    printf("All combination of ||(OR) operator\n");
    if(F||F)
    {
        printf("F||F is true\n");
    }
     else
    {
        printf("F||F is false\n");
    }
      if(F||T)
    {
        printf("F||T is true\n");
    }
     else
    {
        printf("F||T is false\n");
    }
    if(T||F)
    {
        printf("T||F is true\n");
    }
    else
    {
        printf("T||F is false\n");
    }
    if(T||T)
    {
        printf("T||T is true\n");
    }
     else
    {
        printf("T||T is false\n");
    }
    //NOT operator
    printf("All combination of !(NOT) operator\n");
    if(T)
    {
        printf("T is true\n");
    }
    else
    {
        printf("T is false\n");
    }
      if(!T)
    {
        printf("!T is true\n");
    }
    else
    {
        printf("!T is false\n");
    }
      if(F)
    {
        printf("F is true\n");
    }
    else
    {
        printf("F is false\n");
    }
      if(!F)
    {
        printf("!F is true\n");
    }
    else
    {
        printf("!F is false\n");
    }
    printf("-----------------2.Data types for operands of Boolean operators--------------\n");
    //Code segment 1
    int var1 = 0;
    int var2 = 8; 
    float var3 = 7.89;
    int var4 = -8;
    char c = 'c';
    if(var1)
    {
        printf("%d is true\n",var1);
    }
    else
    {
        printf("%d is false\n",var1);
    }
     if(var2)
    {
        printf("%d is true\n",var2);
    }
    else
    {
        printf("%d is false\n",var2);
    }
     if(var3)
    {
        printf("%f is true\n",var3);
    }
    else
    {
        printf("%f is false\n",var3);
    }
    if(c)
    {
        printf("%c is true\n",c);
    }
    else
    {
        printf("%c is false\n",c);
    }
     if(var4)
    {
        printf("%d is true\n",var4);
    }
    else
    {
        printf("%d is false\n",var4);
    }
    if(var2+var4)
    {
        printf("%d + (%d) is true\n",var2,var4);
    }
    else
    {
        printf("%d + (%d) is false\n",var2,var4);
    }
    //code segment2
    var2 = 5;
    int var5= 10;
    var4 = 12;
   if( !(var2 + var5))
   {
       printf("!(%d + %d) is true\n",var2,var5);
   }
   else
   {
        printf("!(%d + %d) is false\n",var2,var5);
   }
   if((var2 < var5) || (var2 > var4) )
   {
       printf("Relational as operand\n");
   }
   int rel_operand = (var2 < var5);
   int rel_operand2 = (var2 > var4);
   printf("var2 < var5 is %d\n",rel_operand);
   printf("var2 > var4 is %d\n",rel_operand2);
   //code segment3
   T = 1;
   if(function() && T)
   {
       printf("Function can be used as operand\n");
   }
 printf("-------------3.Operator precedence rules----------------\n");
   //code segment 1
   if(!0 && 0)
   {
       printf("!0 && 0 is true\n");
   }
   else
   {
       printf("!0 && 0 is false\n");
   }
   //code segment 2
   if(!1 || 1)
   {
       printf("!1 || 1 is true\n");
   }
   else
   {
       printf("!1 || 1 is false\n");
   }
   //code segment3
   if(1 || 1 && 0 )
   {
       printf("1 || 1 && 0 is true\n");
   }
   else
   {
       printf("1 || 1 && 0 is false \n");
   }
   printf("-------------4.	Operator associativity rules----------------\n");
   //code segment 1
   if(function2()&&function1()&&function3())
   {
    printf("Left to right\n");
   }
   if(function5()||function6()||function4())
   {
    printf("Do not print this\n");
   }
   if(!!!function4())
   {
       printf("Right associativity\n");
   } 
   printf("-------------5.	Operand evaluation order----------------\n");
     //code segment 1
     if(global && function7())
   {
    printf("Side effect of function 7-1\n");
   }
   global = 0;
   if(function7() && global)
   {
    printf("Side effect of function 7-2\n");
   }
   //code segment 2
   if(1 && 1 || 0 && 0)
   {
       printf("1 && 1 || 0 && 0 is true \n");
   }
   else
    {
       printf("1 && 1 || 0 && 0 is false \n");
   }
   if(1 && (1 || 0) && 0)
   {
       printf("1 && (1 || 0 )&& 0 is true \n");
   }
    else
    {
       printf("1 && (1 || 0) && 0 is false \n");
   }
     printf("-------------6.	Short-circuit evaluation----------------\n");
       //code segment 1
     global = 0;
    if(global && function7())
   {
    printf("Side effect of function 7-1\n");
   }
   printf("1- global is: %d\n", global);
   global = 0;
   if(function7() && global)
   {
    printf("Side effect of function 7-2\n");
   }
   printf("2- global is: %d\n", global);
   
    return 0;
}