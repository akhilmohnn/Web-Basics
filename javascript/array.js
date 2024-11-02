var read=require("readline-sync")

var arr=["1","2","3","4","5"]

console.log(arr)

var a=[];
console.log("Enter 5 numbers:")
for(let i=0;i<5;i++){
    a[i] = parseInt(read.question(`number${(i+1)}: `,10))

}

console.log(a)
console.log("first number is:"+a[0])