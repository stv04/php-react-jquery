import { useState } from "react";

export function AgregarElemento({onHandleAdd}) {
    const [nuevo, setNuevo] = useState();
    const onHandleChange = (e) => {
        setNuevo(e.target.value);
    }


    const onHandleSubmit = e => {
        e.preventDefault();

        onHandleAdd(nuevo);
        setNuevo("");
    }

    return (
        <form id="nombre" onSubmit={onHandleSubmit} className="input-group mt-4">
            <input type="text" 
            value={nuevo}
            onChange={onHandleChange} 
            className="form-control" 
            placeholder="Nombre"/>
            <button type="submit" className="agregar btn btn-outline-primary" id="btn_agregar">Agregar</button>
        </form>
    );
}