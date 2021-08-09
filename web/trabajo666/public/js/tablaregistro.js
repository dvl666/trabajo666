


const iniciarEliminacion = async function(){
    let id = this.idRegistro;
    let resp = await Swal.fire({title:"Esta seguro", text:"Esta operacion es irreversible", icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        
        if(await eliminarRegistro(id)){
            let registros = await getRegistros();
            cargarTabla(registros);
            Swal.fire("Registro eliminado", "Registro eliminado exitosamente", "info");
        } else {
            Swal.fire("Error", "No se pudo atender la solicitud", "error");
        }
    } else {
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
    } 
}

const cargarTabla = (registros)=>{
    let tbody = document.querySelector("#tbody-registro");
    tbody.innerHTML = "";
    for(let i=0; i < registros.length; ++i){
        let tr = document.createElement("tr");
        let tdNombre = document.createElement("td");
        tdNombre.innerText = registros[i].nombre;
        let tdNumero = document.createElement("td");
        tdNumero.innerText = registros[i].numero;
        let tdEmail = document.createElement("td");
        tdEmail.innerText = registros[i].email;
        let tdPais = document.createElement("td");
        tdPais.innerText = registros[i].pais;
        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText= "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idRegistro = registros[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);
        tr.appendChild(tdNombre);
        tr.appendChild(tdNumero);
        tr.appendChild(tdEmail);
        tr.appendChild(tdPais);
        tr.appendChild(tdAcciones);
        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let registros = await getRegistros();
    cargarTabla(registros);
});