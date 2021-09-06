window.onload = function () {
    var localStorageKeyName = 'data';

    loadFromLocalStorage();

    document.querySelector("#btn-add").addEventListener('click', function () {
        var nombre = document.getElementById("nombre"),
            tipo = document.getElementById("tipo"),
            ubicacion = document.getElementById("ubicacion"),
            sector = document.getElementById("sector"),
            contacto = document.getElementById("contacto");

        if (nombre.value.length === 0 || tipo.value.length === 0 || ubicacion.value.length === 0 ||
            sector.value.length === 0 || contacto.value.length === 0 ) return;

        var user = {
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

        appendObjectToLocalStorage(user);
    })

    function appendObjectToLocalStorage(obj) {
        var users = [],
            dataInLocalStorage = localStorage.getItem(localStorageKeyName);

        if (dataInLocalStorage !== null) {
            users = JSON.parse(dataInLocalStorage);
        }

        users.push(obj);

        localStorage.setItem(localStorageKeyName, JSON.stringify(users));

        loadFromLocalStorage();
    }

    function loadFromLocalStorage() {
        var users = [],
            dataInLocalStorage = localStorage.getItem(localStorageKeyName),
            gridBody = document.querySelector("#grid tbody");

        if (dataInLocalStorage !== null) {
            users = JSON.parse(dataInLocalStorage);
        }


    gridBody.innerHTML = '';
    users.forEach(function (x, i) {
        var tr = document.createElement("tr"),
            tdNombre = document.createElement("td"),
            tdTipo = document.createElement("td"),
            tdUbicacion = document.createElement("td"),
            tdSector = document.createElement("td"),
            tdContacto = document.createElement("td"),
            tdRemove = document.createElement("td"),
            btnRemove = document.createElement("button");

            tdNombre.innerHTML = x.nombre;
            tdTipo.innerHTML = x.tipo;
            tdUbicacion.innerHTML = x.ubicacion;
            tdSector.innerHTML = x.sector;
            tdContacto.innerHTML = x.contacto;

        btnRemove.textContent = 'Remove';
        btnRemove.className = 'btn btn-xs btn-danger';
        btnRemove.addEventListener('click', function(){
            removeFromLocalStorage(i);
        });

        tdRemove.appendChild(btnRemove);

        tr.appendChild(tdNombre);
        tr.appendChild(tdTipo);
        tr.appendChild(tdUbicacion);
        tr.appendChild(tdSector);
        tr.appendChild(tdContacto);
        tr.appendChild(tdRemove);
        gridBody.appendChild(tr);
    });


    function removeFromLocalStorage(index){
        var users = [],
            dataInLocalStorage = localStorage.getItem(localStorageKeyName);

        users = JSON.parse(dataInLocalStorage);

        users.splice(index, 1);

        localStorage.setItem(localStorageKeyName, JSON.stringify(users));

        loadFromLocalStorage();
    }
}
}