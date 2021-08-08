
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

cargarPaises();