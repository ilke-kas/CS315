#include <stdio.h>

int main()
{
     printf("-------------------1---------------------\n");
    printf("For loops\n");
    int arr[] ={0,1,2,3,4};
    int i;
    int j;
    printf("0 value is considered as false in the second expression\n");
    for(i = 4; arr[i]; i--)
    {
        printf("arr[%d] : %d\n",i,arr[i]);
    }
    printf("\n");
    i = 0;
    printf("First and the third expressions are absent:\n");
    int arr3[5] = {0,1,2,3,4};
    for( ; arr3[i] <2 ; )
    {
          printf("arr3[%d] : %d\n",i,arr3[i]);
          i++;
    }
    printf("Multiple statements for first and third expressions: \n");
    int arr4[5] = {0,1,2,3,4};
    for(i= 3, j = 2; i < 5 && j <5; arr4[i] +=1, arr4[j] *=2, i++,j++)
    {
        printf("arr4[%d] : %d, arr4[%d]: %d",i,j,arr4[i],arr4[j]);
    }
    printf("For loop without body: \n");
    int arr5[5] = {0,1,2,3,4};
    for(i = 1; arr5[i] < 3; arr5[i] *= 2, printf("arr5[%d]: %d\n",i,arr5[i]));
    
    printf("While and do wihle loops: \n");
    printf("0 value is considered as false: \n");
    int arr6[5] = {0,1,2,3,4};
    i = 4;
    while(arr6[i])
    {
        printf("arr6[%d]:%d\n",i,arr6[i]);   
        i--;
    }
    printf("While statement without body: \n");
    while(arr6[i]);
    printf("\n");
    printf("While loop vs. do while loop\n");
    while(arr6[i])
    {
        printf("printed in while\n");
    }
    do{
        printf("printed in do-while\n");
    }while(arr6[i]);
    printf("Iteration of arrays:\n");
    int array[] = {10,34,2,8,65,20};
    int size = 6;
    printf("Iteration with for:\n ");
    for(i = 0; i < size ; i++)
    {
        printf("array[%d] : %d\n", i, array[i]);
        
    }
    printf("-------------------2---------------------\n");
    printf("Iteration with while:\n ");
    i = 0;
    while(i < size)
    {
         printf("array[%d] : %d\n", i, array[i]);
         i++;
    }
     printf("Iteration with do while:\n ");
       i = 0;
    do
    {
         printf("array[%d] : %d\n", i, array[i]);
         i++;
    }while(i < size);
     printf("-------------------3---------------------\n");
     int array2 [] = {1,3,5,7};
     size = 4;
     int currentIndex = 0;
     int currentNum = array2[currentIndex];
     printf("current num: %d\n",currentNum);
     int nextNum = array2[++currentIndex];
     printf("next num: %d\n",nextNum);
     nextNum = array2[++currentIndex];
      printf("next num: %d\n",nextNum);
     nextNum = array2[++currentIndex];
      printf("next num: %d\n\n",nextNum);
      
      for(currentIndex = 0; currentIndex < size; currentIndex ++)
      {
            printf("next num: %d\n",array2[currentIndex]);
      }
    return 0;
}
