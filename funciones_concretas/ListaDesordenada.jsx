
function ListaDesordenada({lista, onHandleDelete}) {

  return (
    <ul className="list-group mt-2">
      {lista.map((l, i) => (
        <li className="list-group-item d-flex justify-content-between aling-items-center" key={i}>
          {l}
          {
            onHandleDelete &&
            <button className="btn btn-danger" onClick={() => onHandleDelete(i)}>Eliminar</button>
          }
        </li>
      ))}
    </ul>
  );
}
  
  
export default ListaDesordenada;