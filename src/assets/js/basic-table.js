function AjaxDeleta(id){    
    $.ajax({
        method: "get",
        url: "deletaUser.php",
        data: { 
            id: id
        }
    });
}

function AtualizaUser(ID){
    document.location.href= `../forms/atualizaDados.php?Ticket=${ID}&cockpit=1`;
}