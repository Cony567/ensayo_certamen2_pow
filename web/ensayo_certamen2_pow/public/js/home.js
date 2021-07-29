const cargarEstados = async()=>{
    let resultado = await axios.get("api/estado/get");
    let estados = resultado.data;

    let estadosSelect = document.querySelector("#estados-select");
    estados.forEach(e=>{
        let option = document.createElement("option");
        option.innerText = e;
        estadosSelect.appendChild(option);
    });
    
};
document.addEventListener("DOMContentLoaded" ,()=>{
    cargarEstados();
});
/*
const crearNegocios = async(negocio)=>{
    console.log(negocio);
    let respuesta = await axios.post("api/negocios/post", negocio, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return respuesta.data;
};*/