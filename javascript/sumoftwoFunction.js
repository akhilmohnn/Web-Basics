var read=require("readline-sync")


// var num1=parseInt(read.question("Enter num1:"))
// var num2=parseInt(read.question("Enter num2"))

while(1){
    console.log("\n0.Exit\n1.Sum using sum1()\n2.sum using sum2(num1,num2)\n3.Sum using sum3()\n4.Sum using sum4(num1,num2)")
    var choice=parseInt(read.question("Enter choice:"));

    if(choice==1){
        sum1() // Call sum1 function (no arguments, no return value)
    }
    else if(choice==2){
        var n1=parseInt(read.question("Enter first number:"))
        var n2=parseInt(read.question("Enter second  number:"))
        sum2(n1,n2);  // Call sum2 function (with arguments, no return value)
    }
    else if(choice==3){
        var result=sum3();   // Call sum3 function (no arguments, returns a value)
        console.log("Result from sum3():"+result)
    }
    else if(choice==4){
        var n1=parseInt(read.question("Enter first number:"))
        var n2=parseInt(read.question("Enter second  number:"))
        var result=sum4(n1,n2)  // Call sum4 function (with arguments, returns a value)
        console.log("Sum of sum4():"+result)

    }
    else if(choice==0){
        console.log("Exiting the program")
        break;
    }
    else{
        console.log("invalide entry")
    }
    
}

function sum1()
{
    var a,b;
    var a=parseInt(read.question("Enter num1"))
    var b=parseInt(read.question("Enter num2"))
    var sum=a+b
    console.log("Sum from sum1 is:"+sum)


}

function sum2(a,b)
{

    var sum=a+b;
    console.log("Sum is:"+sum)

}

function sum3(){
    var a=parseInt(read.question("Enter first number"))
    var b=parseInt(read.question("Enter second number"))
    return a+b

}

function sum4(a,b){
    return a+b
}
