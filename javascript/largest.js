var read=require('readline-sync')

var num1=read.question("Enter num1:")
var num2=read.question("Enter num2:")

if(num1>num2){
    console.log("Largest is(num1): "+num1)
}
else if(num1===num2){ //3 equals for used for checking equal to
    console.log("Both are same")
}
else{
    console.log("Largest is(num2): "+num2)
}