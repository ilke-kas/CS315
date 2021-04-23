static mut globalvar: bool = false;
fn funct1() -> bool
{
    println!("function 1 is evaluated");
    return true;
}
fn funct2() -> bool
{
    println!("function 2 is evaluated");
    return true;
}
fn funct3() -> bool
{
    println!("function 3 is evaluated");
    return true;
}
fn funct4() -> bool
{
    println!("function 4 is evaluated");
    return false;
}
fn funct5() -> bool
{
    println!("function 5 is evaluated");
    return false;
}
fn funct6() -> bool
{
    println!("function 6 is evaluated");
    return false;
}
fn funct7() -> bool
{
unsafe{
    globalvar = true;
    }
    println!("function 7 is evaluated");
    return true;
}

fn main() {
    println!("--------1--------------");
    let T = true;
    let F = false;
    println!("All combinations of && operator");
    println!("F && F: {}", F && F);
    println!("F && T: {}", F && T);
    println!("T && F: {}", T && F);
    println!("T && T: {}", T && T);
    
    println!();
    println!("All combinations of || operator");
    println!("F || F: {}", F || F);
    println!("F || T: {}", F || T);
    println!("T || F: {}", T || F);
    println!("T || T: {}", T || T);
    println!();
    
    println!("All combinations of ! operator");
    println!("F:{}", F );
    println!("!F: {}", !F);
    println!("T: {}", T);
    println!("!T: {}", !T);
    println!("-----------2-----------");
    if true{
        println!("Print this");
    }
    if false
    {
        println!("Do not print this");
    }
    let a = 13;
    let c = a % 2 == 1;
    println!("c: {} ", c);
    let b = a <= 9;
    println!("b: {}", b);
    let d = true && funct1();
    println!("d: {}", d);
    println!("-----------3-----------");
    println!("!false && false:{} ",!false && false);
    println!("!true || true: {} ",!true || true);
    println!("true || true && false:{} ", true || true && false);
    println!("-----------4-----------");
    println!("funct2() && funct1() && funct3() {}",funct2() && funct1() && funct3() );
    println!("funct5() || funct6() || funct4() {}",funct5() || funct6() || funct4());
    println!("-----------5-----------");
    println!("code segment1");
    unsafe{
    if globalvar && funct7()
    {
        println!("side effect of function 7-1");
    }
    globalvar = false;
    if funct7() && globalvar
    {
        println!("side effect of function 7-2");
    }
    }
    println!("code segment2");
    println!("true && true || false && false: {} ",true && true || false && false);
    println!("true && (true || false) && false: {} ",true && (true || false) && false);
    println!("-----------6-----------");
    if funct1() || funct5(){
        println!("Short circuit");
    }
    if funct5() && funct1()
    {
        println!("Do not print this");
    }
     
}