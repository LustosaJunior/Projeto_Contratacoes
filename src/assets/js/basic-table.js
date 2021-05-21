function AjaxDeleta(id){    
    $.ajax({
        method: "get",
        url: "deletaUser.html",
        data: { 
            id: id
        }
    });
}

function AtualizaUser(ID){
    document.location.href= `../forms/atualizaDados.html?Ticket=${ID}&cockpit=1`;
}