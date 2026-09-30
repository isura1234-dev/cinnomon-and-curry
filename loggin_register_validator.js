let username = true;
let password = true;
let postalcode = true;
let mobilenumber = true;




if(document.cookie){
    // alert("You register successfully");
    const navlogginbutton = document.getElementById("navlogginbutton");
    navlogginbutton.classList.add('d-none');

    const sidebarlogginbutton = document.getElementById("sidebarlogginbutton");
    sidebarlogginbutton.classList.add('d-none');
    


}else{
    const navloggoutbutton = document.getElementById("navloggoutbutton");
    navloggoutbutton.classList.add('d-none');

    const navcartbutton = document.getElementById("navcartbutton");
    navcartbutton.classList.add('d-none');

    const sidebarloggoutbutton = document.getElementById("sidebarloggoutbutton");
    sidebarloggoutbutton.classList.add('d-none');

    const sidebarcardbutton = document.getElementById("sidebarcardbutton");
    sidebarcardbutton.classList.add('d-none');
}


const logginbutton = document.getElementById("logginformsubmit");
const usernamevalidator = (element)=>{
    let value = element.value;
    let pattern = "^([a-zA-Z0-9]{1,30})$";
    let regexp = RegExp(pattern);

    username=(regexp.test(value));
    if (regexp.test(value)) {
        element.classList.add('is-valid');
        element.classList.remove('is-invalid');
        logginbutton.disabled="";
        logginbutton.classList="sub_button";
        
        logginbutton.innerText="Log in";
    }else{
        element.classList.add('is-invalid');
        element.classList.remove('is-valid');
        logginbutton.disabled="disabled";
        logginbutton.classList="error_button";
        logginbutton.innerText="Enter valid username.....!";
    }
    finalvalidator();
}
const passwordvalidator = (element)=>{
    let value = element.value;
    let pattern = "^(([a-z]{2,10}[A-Z]{2,10}[0-9]{2,5}[!@#$%^&*]{2,10}[a-zA-Z!@#$%^&*]{0,15}[0-9]{0,15}[A-Z!@#$%^&*]{0,15}))$";
    let regexp = RegExp(pattern);
    password = regexp.test(value);
    if (regexp.test(value)) {
        element.classList.add('is-valid');
        element.classList.remove('is-invalid');
        
        
    }else{
        element.classList.add('is-invalid');
        element.classList.remove('is-valid');
        
    }
    finalvalidator();

}


const postalcodevalidator = (element)=>{
   
    let value = element.value;
    let pattern = "^([0-9]{5})$";
    let  regexp = RegExp(pattern);
    postalcode = regexp.test(value);
    if (regexp.test(value)) {
        element.classList.add('is-valid');
        element.classList.remove('is-invalid');
    }else{
        element.classList.add('is-invalid');
        element.classList.remove('is-valid');
    }
    finalvalidator();

}
const numbervalidator = (element)=>{
    let value = element.value;
    let pattern = "^([0][7][12456780][0-9]{7})$";
    let  regexp = RegExp(pattern);
    mobilenumber = regexp.test(value);
    if (regexp.test(value)) {
        element.classList.add('is-valid');
        element.classList.remove('is-invalid');
    }else{
        element.classList.add('is-invalid');
        element.classList.remove('is-valid');
    }
    finalvalidator();

}

const registersubmitbutton = document.getElementById("btnregistersubmit");

function finalvalidator(){
    if (username && password && postalcode && mobilenumber) {
        registersubmitbutton.disabled="";
        registersubmitbutton.innerText=" Sign up ";
        registersubmitbutton.classList="sub_button";

    }else{
        registersubmitbutton.disabled="disabled";
        registersubmitbutton.classList="error_button";
        registersubmitbutton.innerText="invalid information";
    }
}

let tabregisterbutton = document.getElementById("formloggin");

const logginactivebutton =(element)=>{
    tabregisterbutton.classList="tab tab-pane";
}


const clearsingupformfunction = ()=>{
    document.getElementById("username").value = "";
        document.getElementById("username").classList.remove('is-valid');
        document.getElementById("username").classList.remove('is-invalid');
        document.getElementById("txtpassword").value = "";
        document.getElementById("txtpassword").classList.remove('is-valid');
        document.getElementById("txtpassword").classList.remove('is-invalid');
        document.getElementById("adress").value = "";
        document.getElementById("adress").classList.remove('is-valid');
        document.getElementById("adress").classList.remove('is-invalid');
        document.getElementById("pcode").value = "";
        document.getElementById("pcode").classList.remove('is-valid');
        document.getElementById("pcode").classList.remove('is-invalid');
        document.getElementById("mobile").value = "";
        document.getElementById("mobile").classList.remove('is-valid');
        document.getElementById("mobile").classList.remove('is-invalid');
        document.getElementById("txtlogusername").value = "";
        document.getElementById("txtlogusername").classList.remove('is-valid');
        document.getElementById("txtlogusername").classList.remove('is-invalid');
        document.getElementById("txtlogpassword").value = "";
        document.getElementById("txtlogpassword").classList.remove('is-valid');
        document.getElementById("txtlogpassword").classList.remove('is-invalid');

        registersubmitbutton.disabled="";
        registersubmitbutton.innerText=" Sign up ";
        registersubmitbutton.classList="sub_button";
}



const registationclearfunction = ()=>{
    
    clearsingupformfunction();
}



const modalclosefunction = ()=>{
    clearsingupformfunction();
}



const deletecookiefuction = ()=>{
    window.location.href="deletecookie.php";
    window.alert("You are now logged out");
    window.reload();
}




const datapassbybackend = ()=>{
    
    ajax=new XMLHttpRequest();

    ajax.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            console.log((JSON.parse(this.responseText)));
            
        }
    }
    ajax.open("get","backgrounddataload.php",true);
    ajax.send();


}