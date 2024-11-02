var num=10
//var num=30 ,if this declared it will take this value,the latest one

function outerFunction(){
    var num=20 //again declared with same name,but it is considered different

    function innerFunction(){
        console.log("This is an example of inner function")
        console.log("Value of num is:"+num) //the local num is considered here
    }
    innerFunction()
}

outerFunction()

console.log(num) //printing the global num here