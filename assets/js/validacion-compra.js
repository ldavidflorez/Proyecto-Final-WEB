
window.onload=function(){

	var formRegistro=document.contact;
	console.log(formRegistro);

	var Elementos=formRegistro.elements;

	for (var i = Elementos.length - 1; i >= 0; i--) {
		if(Elementos[i].type=="text" || Elementos[i].type=="number" || Elementos[i].type=="email"){
			Elementos[i].onkeypress=preValidacion;

		}
		
	}

	//VALIDAR
	formRegistro.onsubmit=validar;


}

function preValidacion(event){
 	var caracterPermitidos;
 	switch (this.type){
 		case 'text':
 			caracterPermitidos="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVÑWXYZ";
 			break;
 		case 'number':
 			caracterPermitidos="0123456789";
 			break;
 		case 'email':
 			caracterPermitidos="@abcdefghijklmnopqrstuvwxyz1234567890.";
 			break;
 	}
	var letra=String.fromCharCode(event.charCode);
	return caracterPermitidos.indexOf(letra)!=-1;

}

 function validar(){
	var nombre=this.name.value;
	var apellido=this.lastname.value;
	var correo=this.email.value;
	var departamento=this.departamento.value.toLowerCase();
	var municipio=this.municipio.value;
	var telefono=this.phone.value;
	var postal=this.postal.value;
	var genero=this.select;
	var direccion=this.direction.value;
	var index=genero.selectedIndex; //accedo a la posicion seleccionada
	var seleccion=genero.options[index]; //accedo al elemento seleccionado
	var Departamentos = ['antioquia', 'arauca', 'bolivar', 'caqueta', 'cundinamarca', 'amazonas', 
	'atlantico', 'boyaca', 'caldas', 'casanare', 'cauca', 'cesar', 'choco',
	'cordoba', 'huila', 'guajira', 'magdalena', 'meta', 'nariño', 'norte de santander',
	'putumayo', 'quindio', 'risaralda', 'san adres', 'santander', 'sucre', 'tolima',
	'vichada', 'vaupes'];
	
	// Conditions
	//1.Campos llenos
	if (nombre == '' || correo == '' || telefono == '' || apellido == ''|| departamento == ''|| municipio=='' || postal==''|| direccion=='') {
		alert("Todos los campos son requeridos.....!");
		return false;
	}
	//Verificar departamento
	else if  (!Departamentos.includes(departamento)){
		alert("El departamento ingresado no es valido");
		return false;
	}
	//N° telefonico
	else if  (telefono.length<7){
		alert("El telefono debe tener al menos 7 digitos");
		return false;
	}
	//Seleccion de genero
	else if (seleccion.value=='0') {
		alert("Usted no ha seleccionado el género!");
		return false;
	} 
	//Codigo postal
	else if  (postal.length<6){
		alert("El codigo postal debe tener como minimo 6 digitos ");
		return false;
	}
	else{
		alert("Su formulario se ha enviado correctamente");
		return true;
	}

} 
/* function validar(){
    





	var mensaje=this.mensaje.value;
	
	// Conditions
	//1.Campos llenos
	if (nombre == '' || correo == '' || telefono == '' || apellido == '' || departamento == '' || municipio == '' || postal == '' || direccion == '') {
		alert("Todos los campos son requeridos.....!");
		return false;
	}
	//N° telefonico
	else if  (telefono.length != 10){
		alert("El telefono celular debe tener 10 digitos");
		return false;
	}
    //Verificar departamento
	else if  (!Departamentos.includes(departamento)){
		alert("El departamento ingresado no es valido");
		return false;
	}
	//Seleccion de genero
	else if (seleccion.value=='0') {
		alert("Usted no ha seleccionado el género!");
		return false;
	} 
	else{
		alert("Su formulario se ha enviado correctamente");
		return true;
	}

} */