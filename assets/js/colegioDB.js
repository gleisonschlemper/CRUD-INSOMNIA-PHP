window.onload = mostrarColegio;

function mostrarColegio(){
    callApi("GET", "todosColegio", undefined, function(aAlunos) {
        console.log(aAlunos)
    }); 
}

