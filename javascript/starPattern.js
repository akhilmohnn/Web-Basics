var read=require("readline-sync")

var n=parseInt(read.question("Enter the count"))

for(i=0;i<=n;i++){
    for(j=0;j<i;j++){
        process.stdout.write("*"); // Print * on the same line
    }
    console.log(" ");
}