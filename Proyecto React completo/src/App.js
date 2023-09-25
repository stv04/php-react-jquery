import { useState } from 'react';
import './App.css';
import ListaDesordenada from './components/ListaDesordenada';
import { AgregarElemento } from './components/AgregarElemento';

function App() {
  const [lista, setLista] = useState(["Amarrilo", "Azul", "Rojo", "Verde"]);
  

  const onHandleDelete = (i) => {
    lista.splice(i, 1);
    setLista([...lista]);
  }

  const onHandleAdd = (val) => {
    lista.push(val);
    setLista([...lista]);
  }
  
  return (
    <div className='container'>
      <a href='../Home' className='btn btn-primary my-3'>Volver a php y Jquery</a>
      <h2 className='my-3'>Aplicativo React</h2>
      <AgregarElemento onHandleAdd={onHandleAdd} />
      <div className='mt-2'>
        <ListaDesordenada lista={lista} onHandleDelete={onHandleDelete}/>
      </div>
    </div>
  );
}

export default App;
