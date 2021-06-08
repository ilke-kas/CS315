fn main() {
    println!("-------1----");
    let mut array: [i32;3] =[0;3];
    array[0] = 5;
    array[1] = 9;
    array[2] = 13;
    println!("For loops: ");
    for temp in &array{
        println!("temp is {}",temp);
    }
     println!("While loops: ");
    let mut i = 0;
    while i < array.len()
    {
        println!("array[{}] : {}",i,array[i]);
       i += 1;
        
    }
    println!(" Loops: ");
    let mut j = 0;
    loop{
         println!("array[{}] : {}",j,array[j]);
         j+=1;
         
         if j == array.len(){
             break;
         }
    }
    println!("------------2---------");
    println!("For loops: ");
    let v = vec![10,20,30,40];
    let iter_v = v.iter();
    for temp in iter_v{
        println!("temp is {}",temp);
    }
    println!("While loops: ");
    let mut k = 0;
    while k < v.len()
    {
        println!("v[{}] : {}",k,v[k]);
       k += 1;
        
    }
    println!(" Loops: ");
    let mut m = 0;
    loop{
         println!("v[{}] : {}",m,v[m]);
         m+=1;
         
         if m == v.len(){
             break;
         }
    }
    println!("------------3---------");
    let mut array2: [i32;3] =[0;3];
    array2[0] = 15;
    array2[1] = 29;
    array2[2] = 33;
    let mut arriter = array2.iter();
    println!("{:?}",arriter.next());
    println!("{:?}",arriter.next());
    
    let mut array3: [i32;3] =[0;3];
    array3[0] = 15;
    array3[1] = 29;
    array3[2] = 33;
    let  arriter3 = array3.iter();
    for temp in arriter3{
        println!("temp is {}", temp);
    }
    
    //not valid
    //let v2 = vec![10,20,30,40];
    //let iter_v = v2.iter();
    //println!("{:?}",v2.next());
    //println!("{:?}",v2.next());
    
    
    
}