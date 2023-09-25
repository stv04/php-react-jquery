
const inpFruta = $("#nombre_fruta");
const button = $("#btn_agregar");
const listafrutas = $("#listado_frutas > ul");

const listadofrutas = ["Pera", "Manzana", "Naranja"];
renderFrutas();
button.on("click", agregarNuevaFruta);
inpFruta.on("keydown", e => {
    if (e.keyCode == 13) agregarNuevaFruta(e);
});

function agregarFruta(fruta, i) {
    return `
        <li class="list-group-item d-flex justify-content-between align-items-center">
            ${fruta}
            <button type="button" class="btn btn-danger" onclick="eliminarFruta(${i})">Borrar</button>
        </li>
    `;
}

function agregarNuevaFruta(e) {
    const fruta = inpFruta.val();

    if (!fruta) return console.warn("No se puede agregar.");
    listadofrutas.push(fruta);
    inpFruta.val("");
    renderFrutas();
}

function eliminarFruta(i) {
    listadofrutas.splice(i, 1);
    renderFrutas();
}

function renderFrutas() {
    listafrutas.html(listadofrutas.map(agregarFruta));
}
