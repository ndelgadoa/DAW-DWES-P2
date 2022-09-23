- Comenzaremos haciendo un doble for el primero con las filas y el segundo con las columnas poniendoles un valor maximo de ocho por las casillas que tiene el tablero de ajedrez

- Luego emepezaremos con los condicionantes con un if haremos que si el resto de filas dividido entre 2 da 0 pues que la variable col sea de color negro
para que asi los numeros pares sean negros y un else con que si no, la variable sea blanca.

- Y luego exactamente lo mismo pero con las columnas.

- Entonces ya solo quedaria hacer el echo, obviamente todo esto dentro de <table>,
abriremos <td> (que es el contenido de la celda) le pondremos un borde a cada celda, altura y anchura y el color del fondo de la celda con la variable que teniamos creada "col"
