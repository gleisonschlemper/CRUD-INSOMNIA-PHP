window.onload = mostrarAluno;


function mostrarAluno(){
    callApi("GET", "todosAluno", undefined, function(aAlunos) {
        addTabela(aAlunos)
    }); 
}


function colegioDB(colcodigo){
    let body = {
        colcodigo: colcodigo,
    };
    
    callApi("POST", "nomeColegio", body, function(aAlunos) {
        return aAlunos.colnome;
    }); 
} 

function addTabela(aAlunos){
    console.log(aAlunos);
    aAlunos.map((oAlunos)=>{


        let codigo = oAlunos.alucodigo;

        let deletar = btnDeleteAluno(codigo);

        let tr = `
            <tr> 
                <td>`+codigo+`</td>
                <td>`+colegio+`</td>
                <td>`+colegio+`</td>
                <td>`+codigo+`</td>
                <td>`+codigo+`</td>
                <td>`+codigo+`</td>
                <td>`+codigo+`</td>
                <td>`+codigo+`</td>
                <td>`+codigo+`</td>
                <td>`+deletar+`<td>
                <td>`+deletar+`<td>
            <tr>
        `;


        document.querySelector('.dadosTable').innerHTML+=tr
    })
    
}


function btnDeleteAluno(codigo){
    let botao = `<button onclick='deleteAluno(${codigo})'>Excluir</button> `;
    return botao;
}


function deleteAluno(codigo){
    alert(codigo);
}
