window.onload = mostrarAluno;


function mostrarAluno(){
    callApi("GET", "todosAluno", undefined, function(aAlunos) {
        addTabela(aAlunos)
    }); 
}

function addTabela(aAlunos){
    aAlunos.map((oAluno)=>{
        let codigo = oAluno.codigo;
        let nome = oAluno.nome;
        let colegio = oAluno.colegio;
        let matricula = oAluno.matricula;
        let usuario = oAluno.usuario;
        let senha = oAluno.senha;
        let data = oAluno.data;
        let hora = oAluno.hora;

        let deletar = btnDeleteAluno(codigo)
        let tr = `
            <tr> 
                <td>`+codigo+`</td>
                <td>`+colegio+`</td>
                <td>`+nome+`</td>
                <td>`+matricula+`</td>
                <td>`+usuario+`</td>
                <td>`+senha+`</td>
                <td>`+hora+`</td>
                <td>`+data+`</td>
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

}
