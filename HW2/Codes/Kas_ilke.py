def main():
    print("----------------1------------------")
    print("For loops")
    list1 = [0,1,2,3,4]
    for x in range(len(list1)):
        print("list1[",x,"]: ", list1[x])
    for x in list1:
        print(x)
    print("While loops")
    i = 0
    while i <len(list1):
        print("list1[",i,"]: ", list1[i])
        i = i +1 
    print("Nested loops")
    list2 = [3,45,67]
    for x in list2:
        for y in list2:
            if y > x:
                print(y)
    print("----------------2------------------")
    print("Iteration over List")
    list3 =[3,4,7]
    for x in list3:
        print(x)
    print("Iteration over tuple")
    tuple1 = (3,4,7)
    for x in tuple1:
        print(x)
    print("Iteration over dictionary")
    dict1 = {"İlke": 20, "Ali": 12}
    for x in dict1:
        print(x,":", dict1[x])
    print("Iteration over set")
    set1 = {3,4,5}
    for x in dict1:
        print(x)
    str = "hello"
    print("Iteration over string")
    for x in str:
        print(x)
    print("----------------3------------------")
    print("Iterator over list")
    iterList = iter([5,9,8])
    x = next(iterList)
    print(x)
    x = next(iterList)
    print(x)
    x = next(iterList)
    print(x)
    print("Iterator over tuple")
    iterTuple = iter((5,9,8))
    x = next(iterTuple)
    print(x)
    x = next(iterTuple)
    print(x)
    x = next(iterTuple)
    print(x)
    print("Iterator over set")
    iterSet = iter( {3,4,5})
    x = next(iterSet)
    print(x)
    x = next(iterSet)
    print(x)
    x = next(iterSet)
    print(x)
    print("Iterator over string")
    iterStr = iter( "Ilk")
    x = next(iterStr)
    print(x)
    x = next(iterStr)
    print(x)
    x = next(iterStr)
    print(x)
    
main()
