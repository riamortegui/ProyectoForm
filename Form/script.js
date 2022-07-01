var url ="https://localhost:44308/api/Paises/";


fetch(url).then(function(resultado){

    if(resultado.ok){
        return resultado.json();
    }

}).then(function(data){
    data.forEach(function(element){
        let miSelect= document.getElementById("miSelect");
        let opt = document.createElement("option");
        opt.appendChild( document.createTextNode(element.Name));
        opt.value=element.Id;

        miSelect.appendChild(opt);
    
    })
    
})

//VALIDACIONES

const form = document.getElementById('form');
const inputs =document.querySelectorAll('#form input');


const validarForm = (e) => {
    console.log(e.target.name);
        
}








