$(document).ready(function(){
    $("#signup-form").validate({
        rules:{
            name:{
                required:true,
                minlength:4,
                maxlength:6
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
            password:{
                required:true,
                minlength:8,
                maxlength:12,
                
                
            },
            confirmpassword:{
                minlength:8,
                maxlength:12
            },
            gender:{
                required:true
            }


        },
        messages:{
            name:{
                required:"Enter the name"
            }
        }
    })
    
})