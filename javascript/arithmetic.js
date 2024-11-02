var read= require("readline-sync");

var num1=parseFloat(read.question("Enter num1:"));
var num2=parseFloat(read.question("Enter num2:"));

console.log("1.Addition\n2.Substraction\n3.Multiplication\n4.Division");
var choice=read.question("Enter choice");

var num3;
switch(choice){
    case '1': num3=num1+num2;
    console.log("Sum is:"+num3);
    break;

    case '2':num3=num1-num2;
    console.log("Diff is:"+num3)
    break;

    case '3':num3=num1*num2
    console.log("Prod is:"+num3)
    break;

    case '4':num3=num1/num2
    console.log("Division is:"+num3)
    break;

    default: console.log("Invalid choice!!!")
}