$(document).ready(function(){
    $("#signup-form").validate({
        rules:{
            name:{
                required:true,
                minlength:4
            },
            email:{
                required:true,
                email:true
            },
            contact:{
                required:true,
                minlength:10,
                digits:true
            },
            

        }
    })
    
})