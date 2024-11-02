var read = require("readline-sync");

var n = parseInt(read.question("Enter size: "));

for (let i = 0; i < n; i++) {
    for (let j = 0; j < n; j++) {
        if (i === 0 || j === 0 || i === n - 1 || j === n - 1) {
            process.stdout.write("* "); 
            /* Print * if on the border,this is used to print without nextline 
            console.log adds automatic next line*/
        } else {
            process.stdout.write("  "); // Print - for inner cells
        }
    }
    console.log(); // Move to the next line after each row
}
