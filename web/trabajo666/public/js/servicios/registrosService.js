const getRegistros = async()=>{
    let resp = await axios.get("api/registros/get");
    return resp.data;
};

const crearRegistros = async (registro)=>{
    let resp = await axios.post("api/registros/post", registro, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const eliminarRegistro = async(id)=>{
    try{
        let resp = await axios.post("api/registros/delete", {id},{
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
};

