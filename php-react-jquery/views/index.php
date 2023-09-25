<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripción</title>
    <link rel="stylesheet" href="./Assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php include_once("./views/header.php") ?>
    <div class="container">

        <div class="row">

            <div class="col-12 card shadow-sm my-3">
              <div class="card-body">
                <h2 class="card-title">Descripción</h2>
                <div class="card-text">
                    <p><b>Nombre:</b> Stiven Romero</p>
                    <p><b>Tiempo invertido en realizar la prueba:</b> 8 Horas</p>
    
                    <div class="m-2">
                        Para la elaboración del proyecto se han utilizado las siguientes herramientas:
                        <ul>
                            <li><b>PHP Versión 8.2.4: </b> Se empleó para el enrutado principal, en el que se realizó un pequeño enrutador básico para suplir las necesidades de mostrar los proyectos react y jquery dentro del mismo.</li>
                            <li><b>Jquery Versión 3.7.1: </b> Se utilizó para responder a las necesidades solicitadas de jquery en la sección de front.</li>
                            <li><b>Bootstrap: Versión 5.1.3: </b> Se utilizó para estilizar las páginas</li>
                            <li><b>React: Versión 18.2.0: </b> Se utilizó para responder a las necesidades solicitadas de React en la sección de front.</li>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="col-xl-6 my-3">
                <div class="h-100 card shadow-sm">
                    <div class="card-body parte-back">
                        <h2 class="card-title">Parte back</h2>
                        <ol class="card-text list-group list-group-numbered">
                            <li class="list-group-item">
                                Implementar la función en PHP sumaArray para calcular la suma de los
                                elementos de un array numérico:
                                <div>
                                    <code>function sumaArray($ar) {}</code>
                                </div>
                            
                                <div class="card m-3">
                                    <div class="card-header">
                                        Ejemplos de arrays a pasar en la función:
                                    </div>
                                    <ul class="list-group list-group-flush" id="lista-peticiones">
                                    </ul>
                                </div>
                        
                                <p id="respuesta-lista">Resultado de 
                                    <b id="respuesta-base"></b>: 
                                    <span id="respuesta-resultante"></span>
                                </p>
            
                                <div class="bg-dark text-white p-2 rounded-3">
                                    <h5>Función utilizada</h5>
                                    <?php echo file_get_contents("./SumaArray.php", false, null, 5);?>
                                </div>
                            </li>
                        
                            <li class="list-group-item">
                                ¿Cuál es la salida de este código: $i=0;while ($i=1) echo ++$i;?:
                                <p class="mt-2"><b>R:</b> La ejecución de este código genera un bucle infinito y el valor de "$i" de manera que, inicia en cero, luego se le asigna el valor de "uno", se incremente por uno, luego se reasigna y así sucesivamente.</p>
                            </li>

                            <li class="list-group-item">
                                ¿Qué función en PHP utilizarías para quitar todos los espacios de un string?
                                <p class="mt-2"><b>R:</b> Se puede utilizar la función de "str_replace" de la siguiente manera = str_replace(" ", "", $texto) => ("Caracter de espacio", "Se sustituye por un espacio vacío", "El texto que se va a trabajar")</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 my-3">
                <div class="h-100 card shadow-sm">
                    <div class="card-body parte-front">
                        <h2 class="card-title">Parte Front</h2>
        
                        <ol class="card-text list-group list-group-numbered">
                            <li class="my-2 list-group-item">
                                Para el siguiente fragmento de código HTML, implementar con jQuery las acciones de los botones “Agregar” y “Borrar”:
                                <div class="my-2 border rounded-2 p-2">
                                    <code>
                                        &lt;div id=&quot;nombre&quot;&gt;
                                        &lt;span&gt;Nombre: &lt;/span&gt;
                                        &lt;input id=&quot;nombre_fruta&quot; class=&quot;texto&quot;
                                        type=&quot;text&quot;&gt;&lt;button type=&quot;button&quot;
                                        class=&quot;agregar&quot;&gt;Agregar&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div id=&quot;listado_frutas&quot;&gt;
                                        &lt;ul&gt;&lt;li&gt;
                                        Pera &lt;button type=&quot;button&quot;&gt;Borrar&lt;/button&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                        Manzana &lt;button
                                        type=&quot;button&quot;&gt;Borrar&lt;/button&gt;
                    
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                        Naranja &lt;button
                                        type=&quot;button&quot;&gt;Borrar&lt;/button&gt;
                    
                                        &lt;/li&gt;
                                        &lt;/ul&gt;
                                        &lt;/div&gt;
                                    </code>
                                </div>
                
                                <div class="my-2 text-center">
                                    <a href="./Home/Jquery" class="btn btn-success btn-block">Ir -></a>
                                </div>
                            </li>
                
                            <li class="my-2 list-group-item">
                                Implementar un componente React que muestre una lista desordenada dado
                                un array de strings. Por ejemplo, el resultado del array [“Amarillo”, “Azul”,
                                “Rojo”, “Verde”] deberá ser algo como :
                                <span class="text-primary">Adjuntado en ZIP</span>
                                <div class="my-2 border rounded-2 p-2">
                                    <code>
                                        &lt;ul&gt;
                                        <br>&nbsp;&lt;li&gt;Amarillo&lt;/li&gt;
                                        <br>&nbsp;&lt;li&gt;Azul&lt;/li&gt;
                                        <br>&nbsp;&lt;li&gt;Rojo&lt;/li&gt;
                                        <br>&nbsp;&lt;li&gt;Verde&lt;/li&gt;
                                        <br>&lt;/ul&gt;
                                    </code>
                                </div>
                
                                <div class="my-2 text-center">
                                    <a href="./Home/React" class="btn btn-success">Ir -></a>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        
            
            <div class="card shadow-sm my-3">
                <div class="card-body parte-sist">
                    <h2 class="card-title">SISTEMAS</h2>
            
                    <ul class="card-text">
                        <li>
                            Si estuvieras de guardia y llegara un aviso de llenado de disco. ¿Qué
                            comandos ejecutarías para saber qué directorio se está llenando?
                            
                            <p class="mt-2"><b>R:</b> Utilizaría el comando <code>df -h</code> para ver el espacio disponible entre las particiones del disco</p>
                        </li>
            
                        <li>
                            ¿Qué es un balanceador web? ¿Qué es un grupo de autoscaling?
                            <br>
                            <p class="mt-2"><b>R:</b> El balanceador web es un componente de red que permite distribuir el tráfico la carga de solicitudes web entrantes</p>
                            <p class="mt-2"><b>R:</b> El autoscaling es una técnica para la administración de recurso que permite mantener un equilibrio entre el rendimiento de la aplicación y el manejo de los recursos</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    

    <script>
        const peticiones = [{
            peticion: "SumaUno",
            text: "var lista1 =  [1, 4, 3, 0]"
        }, {
            peticion: "SumaDos",
            text: "var lista2 = [1, 2, [5, 8], 4]",
        }, {
            peticion: "Sumatres",
            text: "var lista3 = [0, [6, 2], null, 7, 1]"
        }];

        peticiones.forEach(async (p, i) => {
            const res = await obtenerCalculo(i);

            $("#lista-peticiones").append(`
                <li class="lista-back list-group-item list-group-item-action d-flex justify-content-between" onclick="obtenerCalculo(${i})"><span>${p.text}</span> <span><b>Respuesta:</b> ${res}</span></li>
            `);
        });
        
        obtenerCalculo(0);
        async function obtenerCalculo(idx) {
            const peticion = peticiones[idx];
            const suma = peticion.peticion;
            
            const res = await fetch("Api/" + suma).then(d => d.text());
            const lugarRespuesta = $("#respuesta-base");
            const resBase = $("#respuesta-base");
            const resRespuesta = $("#respuesta-resultante");
            
            resBase.text(peticion.text);
            resRespuesta.text(res);

            return res;
        }

    </script>
</body>

</html>