package main
import "fmt"

func main() {
    fmt.Println("------------------1---------------")
    fmt.Println("Simple For Loop:")
    array:= [5] int {10,20,30,40,50}
    for i:= 0; i <5;i++{
        fmt.Println("array[",i,"]",array[i])
    }
    fmt.Println("Initialization is absent:")
    j:= 0
    for ; j<5; j++{
        fmt.Println("array[",j,"]",array[j])
    }
    fmt.Println("For Loop as while loop");
    array2:= [5] int {8,10,7,12,15}
    i := 0
    for array2[i] < 11{
         fmt.Println("array2[",i,"]",array2[i])
         i++
    }
    fmt.Println("Ranging For Loop:")
    array3 := [4] int {12,13,50,26}
    for k, j := range array3{
        fmt.Println("array3[",k,"]",j)
    }
    fmt.Println("------------------2---------------")
    fmt.Println("For strings")
    fmt.Println("Simple For Loop:")
    str:= "Ilke"
    for i := 0; i <len(str); i++{
        fmt.Printf("Index number: %U, %d, char: %c\n",str[i],i,str[i])
    }
    fmt.Println("For Loop as while loop");
    str2:="Love"
    indx:= 0
    for indx <len(str2){
         fmt.Printf("Index number: %U, %d, char: %c\n",str[i],i,str[i])
         indx++
    }
    fmt.Println("Ranging For Loop:")
    for i, m := range str2{
         fmt.Printf("Index number: %U, %d, char: %c\n",m,i,m)
    }
    fmt.Println("Iteration of Maps")
    var name_map = map[int] string{
        1:"İlke",
        2:"Aysu",
        3:"Zeynep",
    }
    fmt.Println("Ranging For loop:")
    for key,name := range name_map{
        fmt.Println("key: ", key, "name: ",name)
    }
    fmt.Println("Iteration of Channels")
    channel:= make(chan int,4)
    channel <- 1
    channel <- 20
    channel <- 12
    channel <- 100
    close(channel)
    for i := range channel{
        fmt.Println(i)
    }
    fmt.Println("------------------3---------------")
    fmt.Println("For arrays")
    arr := [4] int {1,3,5,7}
    size2 := 4
    currentIndex := 0
    currentNum := arr[currentIndex]
    fmt.Println("current num: ",currentNum)
    nextNum:= arr[currentIndex +1]
    fmt.Println("next num: ", nextNum)
    currentIndex++
    nextNum2:= arr[currentIndex +1]
    fmt.Println("next num: ", nextNum2)
    currentIndex++
    nextNum3:= arr[currentIndex +1]
    fmt.Println("next num: ", nextNum3)
    
    for currentIndex:= 0; currentIndex <size2; currentIndex++{
        fmt.Println("next num:", arr[currentIndex])
    }
    fmt.Println("For strings")
    currentIndex2 := 0
    str3 := "Ilke"
    fmt.Printf("str3[%d]:%c\n",currentIndex2, str3[currentIndex2])
    currentIndex2++
    fmt.Printf("str3[%d]:%c\n",currentIndex2, str3[currentIndex2])
 fmt.Println("Accessing next element of Channels")
    channel2:= make(chan int,4)
    channel2 <- 1
    channel2 <- 2
    channel2 <- 3
    channel2 <- 4
    element := <- channel2
   fmt.Println("element: ",element)
   element2 := <- channel2
   close(channel2)
   fmt.Println("element: ",element2)
    for i := range channel2{
        fmt.Println(i)
    }
      for k := range channel2{
        fmt.Println(k)
    }
 
}