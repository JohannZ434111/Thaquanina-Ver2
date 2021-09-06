window.onload = function () {
    var localStorageKeyName = 'data';

    cargar();

    document.querySelector("#btn-add").addEventListener('click', function () {
        var nombre = document.getElementById("nombre"),
            tipo = document.getElementById("tipo"),
            ubicacion = document.getElementById("ubicacion"),
            sector = document.getElementById("sector"),
            contacto = document.getElementById("contacto");

        if (nombre.value.length === 0 || tipo.value.length === 0 || ubicacion.value.length === 0 ||
            sector.value.length === 0 || contacto.value.length === 0 ) return;

        var dato = {
            nombre: nombre.value,
            tipo: tipo.value,
            ubicacion: ubicacion.value,
            sector: sector.value,
            contacto: contacto.value
        };

        nombre.value = '';
        tipo.value = '';
        ubicacion.value = '';
        sector.value = '';
        contacto.value = '';
        alert('Datos Guardados');

        guardar(dato);
    })

    function guardar(obj) {
        var datos = [],
            dataInLocalStorage = localStorage.getItem(localStorageKeyName);
        if (dataInLocalStorage !== null) {
            datos = JSON.parse(dataInLocalStorage);
        }
        datos.push(obj);
        localStorage.setItem(localStorageKeyName, JSON.stringify(datos));

        cargar();
    }

    function cargar() {
        var datos = [],
            dataInLocalStorage = localStorage.getItem(localStorageKeyName),
            gridBody = document.querySelector("#grid tbody");

        if (dataInLocalStorage !== null) {
            datos = JSON.parse(dataInLocalStorage);
        }


    gridBody.innerHTML = '';
    datos.forEach(function (x, i) {
        var tabla = document.createElement("tr"),
            tablaNombre = document.createElement("td"),
            tablaTipo = document.createElement("td"),
            tablaUbicacion = document.createElement("td"),
            tablaSector = document.createElement("td"),
            tablaContacto = document.createElement("td"),
            tablaRemover = document.createElement("td"),
            botonRemover = document.createElement("button");

            tablaNombre.innerHTML = x.nombre;
            tablaTipo.innerHTML = x.tipo;
            tablaUbicacion.innerHTML = x.ubicacion;
            tablaSector.innerHTML = x.sector;
            tablaContacto.innerHTML = x.contacto;

            botonRemover.textContent = 'Remove';
            botonRemover.className = 'btn btn-xs btn-danger';
            botonRemover.addEventListener('click', function(){
            remover(i);
        });

        tablaRemover.appendChild(botonRemover);

        tabla.appendChild(tablaNombre);
        tabla.appendChild(tablaTipo);
        tabla.appendChild(tablaUbicacion);
        tabla.appendChild(tablaSector);
        tabla.appendChild(tablaContacto);
        tabla.appendChild(tablaRemover);
        gridBody.appendChild(tabla);
    });


    function remover(index){
        var datos = [],
            dataInLocalStorage = localStorage.getItem(localStorageKeyName);
            datos = JSON.parse(dataInLocalStorage);
            datos.splice(index, 1);

        localStorage.setItem(localStorageKeyName, JSON.stringify(datos));

        cargar();
    }
}
}