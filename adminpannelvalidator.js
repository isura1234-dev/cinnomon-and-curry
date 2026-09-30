

const pricevalidator = (element)=>{
    let value = element.value;
    let pattern = "^([R][S][.][0123456789]{1,5})$";
    let regexp = RegExp(pattern);
    password = regexp.test(value);
    if (regexp.test(value)) {
        element.classList.add('is-valid');
        element.classList.remove('is-invalid');
        addbutton.disabled="";
        addbutton.innerText=" ADD product ";
        addbutton.classList="btn btn-success";
        
        
    }else{
        element.classList.add('is-invalid');
        element.classList.remove('is-valid');
        addbutton.disabled="disabled";
        addbutton.classList="btn btn-danger";
        addbutton.innerText="invalid information";
        
    }
}
const pricevalidatoredit = (element)=>{
    let value = element.value;
    let pattern = "^([R][S][.][1234567890]{1,5})$";
    let regexp = RegExp(pattern);
    password = regexp.test(value);
    if (regexp.test(value)) {
        element.classList.add('is-valid');
        element.classList.remove('is-invalid');
        addbuttonedit.disabled="";
        addbuttonedit.innerText=" ADD product ";
        addbuttonedit.classList="btn btn-success";
        
        
    }else{
        element.classList.add('is-invalid');
        element.classList.remove('is-valid');
        addbuttonedit.disabled="disabled";
        addbuttonedit.classList="btn btn-danger";
        addbuttonedit.innerText="invalid information";
        
    }
}