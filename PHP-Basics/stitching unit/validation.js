function validation(){


    var customer_id=document.getElementById("customer_id").value.trim();
    var items=document.getElementById("items").value.trim();
    var dateofarrival=document.getElementById("dateofarrival").value.trim();
    var dateofdelivery=document.getElementById("dateofdelivery").value.trim();
    var tailorcharges=document.getElementById("tailorcharges").value.trim();
    var stitchcharges=document.getElementById("stitchcharges").value.trim();
    errorDiv=document.getElementById("error-message");

    errorDiv.textContent="";


    if(customer_id==""){
        errorDiv.textContent="Customer id can't be empty";
        return false;

    }

    if(items==""){
        errorDiv.textContent="Items can't be empty";
        return false;

    }

    if(!dateofarrival){
        errorDiv.textContent="Invalid date of arrival";
        return false;
    }

    if(!dateofdelivery){
        errorDiv.textContent="Invalid date of delivery";
        return false;
    }

    if(new Date(dateofarrival) >= new Date(dateofdelivery)){
        errorDiv.textContent="Delivery date must be after arrival";
        return false;
    }

    if(tailorcharges==""){
        errorDiv.textContent="Tailor charge cannot be empty";
        return false;
    }

    if(stitchcharges=="" || isNaN(stitchcharges) || parseInt(stitchcharges)<=0){
        errorDiv.textContent="Stich charge is invalide";
        return false;
    }




    return true;
}