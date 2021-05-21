function ValidaCampos(){
    let nome = document.getElementById("Username").value; 
    let senha = document.getElementById("Password").value; 

    if(nome == '' || senha == ''){
        alert('Há campos vazios no formulario');
        return false;
    }else{
        return true;
    }
}