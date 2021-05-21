function ValidacaoSenha(confirmSenha){
    let senha = document.getElementById("Password").value; 
    if(confirmSenha.value != senha){
        alert('Senhas não coincidem');
        confirmSenha.value = '';
        return;
    }
};

function ValidaCampos(){
    let nome = document.getElementById("Username").value; 
    let senha = document.getElementById("Password").value; 
    let confirmSenhasenha = document.getElementById("ConfirmPassword").value; 
    let CPF = document.getElementById("CPF").value; 
    let Email = document.getElementById("Email").value; 
    let Telefone = document.getElementById("Telefone").value; 

    if(nome == '' || senha == '' || confirmSenhasenha == '' || CPF == '' || Email == '' || Telefone == ''){
        alert('Há campos vazios no formulário');
        return false;
    }else{
        return true;
    }
}

function validacaoEmail(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
    
    if ((usuario.length >=1) &&
        (dominio.length >=3) &&
        (usuario.search("@")==-1) &&
        (dominio.search("@")==-1) &&
        (usuario.search(" ")==-1) &&
        (dominio.search(" ")==-1) &&
        (dominio.search(".")!=-1) &&
        (dominio.indexOf(".") >=1)&&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
    
        //alert("E-mail valido");
    }
    else{
        alert("E-mail invalido");
        document.getElementById('Email').value = '';
    }
}