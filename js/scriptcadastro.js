window.onload = function () {
class Validator{

    constructor(){
        this.validations= [

        ]
    }

    //iniciar a validação//
    validate(form){
        let inputs =  form.getElementByTagName('input');
        


        let inputsArray = [...inputs];
        
        let inputsArray.forEach(function(input){
           console.log(input) 
        });

    }
}


let form = document.getElementById("loginform");
let submit = document.getElementById("btn-submit");

let validator =  new Validator();

// Evento que dispadara as validações //

submit.addEventListener('click', function(e) {

    e.preventDefault();

    validator.validate(form);
})

}
