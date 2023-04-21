'use strict'

const boton = document.querySelector("#boton");
const Nombre = document.querySelector('#Nombre');
const Apellido = document.querySelector('#Apellido');
const Email = document.querySelector('#Email');
const Contraseña = document.querySelector('#Contraseña');



let validar = () => {
    let inputs_requeridos = document.querySelectorAll('#registro [required]');
    let error = false;

    for (let i = 0; i < inputs_requeridos.length; i++) {
        if (inputs_requeridos[i].value == '') {
            inputs_requeridos[i].classList.add('input-error');
            error=true;
        } else {
            inputs_requeridos[i].classList.remove('input-error');
        }
    }
    return error;
};

let obtener_datos = () =>{
    let error = validar();
    if(error){
        Swal.fire({
            'title' : 'Sus datos no se pudieron registrar',
            'text'  : 'Porfavor verificar las compos resaltados',
            'icon'  : 'warning'
        })

    }else{
        Swal.fire({
            'title' : 'Sus datos fueron registrados correctamente',
            'text'  : 'Porfavor Iniciar Sesion',
            'icon'  : 'success'
        })
        console.log(Nombre.value);
        console.log(Apellido.value);
        console.log(Email.value);
        console.log(Contraseña.value);
        
    }
}

boton.addEventListener('click', obtener_datos);