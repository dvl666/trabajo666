//function validarCorreo(correo){
  //  var expReg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    //var esValido= expReg.test(correo);
    //if(esValido==true){
      //  alert("El correo electronico es valido");
    //}
    //else{
      //  alert("el correo electronico no es valido");
    //}
//}

const cargarPaises = async()=>{
    let resultado = await axios.get("api/paises/get");
    let paises = resultado.data;
    let paisesSelect = document.querySelector("#pais-select");
    paises.forEach(m => {
        let option = document.createElement("option");
        option.innerText = m;
        paisesSelect.appendChild(option);
    });
};
document.addEventListener("DOMContentLoaded", ()=>{
    cargarPaises();
});


document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let nombre = document.querySelector("#nombre-txt").value;
    let numero = document.querySelector("#numero-txt").value;
    let email = document.querySelector("#mail-txt").value;
    let pais = document.querySelector("#pais-select").value;
    let registro = {}
    registro.nombre = nombre;
    registro.numero = numero;
    registro.email = email;
    registro.pais = pais;
    var expReg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var esValido= expReg.test(email);
    if(esValido==true && Math.sign(numero)!=-1){

        let res = await crearRegistros(registro);
        await Swal.fire("Registro creado", "Registro creado exitosamente", "info");
        window.location.href = "tablaregistro";
        
    }
    if(esValido==false || Math.sign(numero)==-1){
        Swal.fire("Error", "Reingrese los datos de manera correcta", "error")
    }
    //let res = await crearRegistros(registro);
    //await Swal.fire("Registro creado", "Registro creado exitosamente", "info");
    //window.location.href = "tablaregistro";
});