document.addEventListener('DOMContentLoaded', function() {
    const url = window.location.pathname;
    iniciarApp(url);
});

function iniciarApp(url) {
    switch (url) {
        case '/':
            resaltarActual('inicio');
            const slider = document.querySelector('#galeria01');
            carpetas = [{ruta : 'slider', cantidad : 5}];
            insertarCarousel(slider, carpetas[0], 'galeria01', 5);
            break;
        case '/nosotros':
            resaltarActual('nosotros');
            break;
        case '/bodas':
            resaltarActual('bodas');
            carpetas01 = [
                { ruta : 'bodas/EstelaAngel/01_Iglesia', cantidad : 111 }
            ];
            carpetas02 = [
                { ruta : 'bodas/MicaOscar/01_Llegada', cantidad : 58 },
                { ruta : 'bodas/MicaOscar/02_Civil', cantidad : 81 },
                { ruta : 'bodas/MicaOscar/03_Detalle', cantidad : 45 },
                { ruta : 'bodas/MicaOscar/04_Juntos', cantidad : 45 },
                { ruta : 'bodas/MicaOscar/05_Baile', cantidad : 210 },
                { ruta : 'bodas/MicaOscar/06_Ramo', cantidad : 18 }
            ];
            carpetas03 = [
                { ruta : 'bodas/AriTomy/01_Civil', cantidad : 50 },
                { ruta : 'bodas/AriTomy/02_Hotel', cantidad : 59 }
            ];
            crearMiniaturas('seccion00', carpetas01, 1);
            crearMiniaturas('seccion01', carpetas02, 6);
            crearMiniaturas('seccion02', carpetas03, 2);
            break;
        case '/quince':
            resaltarActual('quince');
            carpetas01 = [
                { ruta : 'quince/Cami/salonStylo/01_Highlights', cantidad : 52 },
                { ruta : 'quince/Cami/salonStylo/02_Sola', cantidad : 5 },
                { ruta : 'quince/Cami/salonStylo/03_Detalles', cantidad : 19 },
                { ruta : 'quince/Cami/salonStylo/04_TandaBaile', cantidad : 23 }
            ];
            carpetas02 = [
                { ruta : 'quince/Valen/book', cantidad : 57 },
                { ruta : 'quince/Valen/CentroCastilla/01_EntradaSalon', cantidad : 20 },
                { ruta : 'quince/Valen/CentroCastilla/02_Sola', cantidad : 49 },
                { ruta : 'quince/Valen/CentroCastilla/03_Detalles', cantidad : 11 },
                { ruta : 'quince/Valen/CentroCastilla/04_Glitter', cantidad : 32 },
                { ruta : 'quince/Valen/CentroCastilla/05_Torta', cantidad : 15 },
                { ruta : 'quince/Valen/CentroCastilla/06_VideoMejorAmiga', cantidad : 34 },
                { ruta : 'quince/Valen/CentroCastilla/07_Cotillon', cantidad : 35 }
            ];
            crearMiniaturas('seccion00', carpetas01, 4);
            crearMiniaturas('seccion01', carpetas02, 7);
            break;
        case '/social_institucional':
            resaltarActual('social', 'social_institucional');
            carpetas01 = [ { ruta : 'institucional/colegio_traductores', cantidad : 21 } ];
            carpetas02 = [ { ruta : 'institucional/hotel_ibis', cantidad : 161 } ];
            crearMiniaturas('seccion00', carpetas01, 1);
            crearMiniaturas('seccion01', carpetas02, 1);
            break;
        case '/contacto':
            resaltarActual('contacto');
            break;
    }
}

function crearMiniaturas(idSeccion, folders, nroGalerias) {
    console.log(idSeccion);
    const miniaturas = document.querySelector(`#${idSeccion}`);
    for (let i = 0; i < nroGalerias; i++) {
        const imagen = document.createElement('picture');
        imagen.innerHTML = `
            <source srcset="build/img/${folders[i].ruta}/1.avif" type="image/avif">
            <source srcset="build/img/${folders[i].ruta}/1.webp" type="image/webp">
            <img loading="lazy" height="100" src="build/img/${folders[i]}.ruta/1.jpg" alt="Miniatura_Galeria">
        `;
        imagen.onclick = function() {
            abrirGaleria( folders, i+1 );   // --> Asociamos la función abrirGaleria() como callback del evento.
        }
        miniaturas.appendChild(imagen);
    }
    console.log(miniaturas);
}

function abrirGaleria(carpetas, indiceGaleria) {

    // <div class="galeria pt-3 p-lg-4">
    const galeria = document.createElement('DIV');
    galeria.classList.add('galeria');
    galeria.classList.add('pt-3'); 
    galeria.classList.add('p-lg-4');

    // <div id="galeria0i" class="carousel slide">
    const atributoID = 'galeria0' + indiceGaleria;
    const contenedor = document.createElement('DIV');
    contenedor.setAttribute('id', atributoID);
    contenedor.classList.add('carousel');
    contenedor.classList.add('slide');
    contenedor.setAttribute('data-bs-interval', 'false');

    // <div class="carousel-indicators"></div>
    const indicadores = document.createElement('DIV');
    indicadores.classList.add('carousel-indicators');

    // <div class="carousel-inner"></div>
    const interior = document.createElement('DIV');
    interior.classList.add('carousel-inner');

    // Botones
    const botonIzq = document.createElement('BUTTON');
    botonIzq.classList.add('carousel-control-prev');
    botonIzq.setAttribute('type', 'button');
    botonIzq.setAttribute('data-bs-target', `#${atributoID}`);
    botonIzq.setAttribute('data-bs-slide', 'prev');
    botonIzq.innerHTML = `
        <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    `;
    const botonDer = document.createElement('BUTTON');
    botonDer.classList.add('carousel-control-next');
    botonDer.setAttribute('type', 'button');
    botonDer.setAttribute('data-bs-target', `#${atributoID}`);
    botonDer.setAttribute('data-bs-slide', 'next');
    botonDer.innerHTML = `
        <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    `;
    
    // Agrego cada elemento a su respectivo padre
    contenedor.appendChild(indicadores);
    contenedor.appendChild(interior);
    contenedor.appendChild(botonIzq);
    contenedor.appendChild(botonDer);
    galeria.appendChild(contenedor);
    
    // Crea el Overlay con la imagen.
    const overlay = document.createElement('DIV');  // --> Crea el elemento.
    overlay.classList.add('overlay');   // --> Le asigna una clase.
    overlay.appendChild(galeria);

    insertarCarousel(overlay, carpetas[indiceGaleria-1], atributoID, carpetas[indiceGaleria-1].cantidad);

    // Evento de click
    overlay.onclick = function(e) {
        if (e.target === overlay) {
            console.log(galeria.firstChild);
            const body = document.querySelector('body');    // Seleccione el elemento body.
            body.classList.remove('fijar-body');    // Le quite la clase al body.
            overlay.remove();   // Elimine el overlay.
        }
    }
    
    // Evento de tecla
    overlay.onkeydown = (e) => {
        const body = document.querySelector('body');    // Seleccione el elemento body.
        body.classList.remove('fijar-body');    // Le quite la clase al body.
        overlay.remove();   // Elimine el overlay.
    }

    // Añade el overlay al HTML.
    const body = document.querySelector('body');    // --> Selecciona el elemento.
    body.classList.add('fijar-body');   // --> Le asigna una clase.
    body.appendChild(overlay);  // --> Incorpora al body el elemento "overlay" como elemento descendiente.
}

function insertarCarousel(element, folder, target, slidesNr) {
    const indicadores = element.querySelector('.carousel-indicators');
    const contenedor = element.querySelector('.carousel-inner');

    for (let i = 1; i <= slidesNr; i++) {
        // Indicadores
        indicadores.insertAdjacentHTML('beforeend', `<button type="button" class="d-none" data-bs-target="#${target}" data-bs-slide-to="${i-1}" aria-label="Slide ${i}"></button>`);
        // Item <- Imagen
        const item = document.createElement('div');
        item.classList.add('carousel-item');
        const imagen = document.createElement('picture');
        imagen.innerHTML = `
            <source srcset="build/img/${folder.ruta}/${i}.avif" type="image/avif">
            <source srcset="build/img/${folder.ruta}/${i}.webp" type="image/webp">
            <img width="auto" class="d-block img-fluid mx-auto" src="build/img/${folder.ruta}/${i}.jpg" alt="Foto0${i}">
        `;
        item.appendChild(imagen);
        contenedor.appendChild(item);
        // Agregar clases y atributos a los primeros elementos
        if (i === 1) {
            indicadores.lastChild.classList.add('active');
            indicadores.lastChild.setAttribute('aria-current', 'true');
            item.classList.add('active');
        }
    }
}

function crearGaleria(folder, target, q) {
    const indicadores = document.querySelector(`#${target} .carousel-indicators`); //----> <div>
    const contenedor = document.querySelector(`#${target} .carousel-inner`); //----> <div>
    for (let i = 1; i <= q; i++) {
        // Indicadores
        indicadores.insertAdjacentHTML('beforeend', `<button type="button" class="d-none" data-bs-target="#${target}" data-bs-slide-to="${i-1}" aria-label="Slide ${i}"></button>`);
        // Galería
        const item = document.createElement('div');
        item.classList.add('carousel-item');
        const imagen = document.createElement('picture');
        imagen.innerHTML = `
            <source srcset="build/img/${folder}/${i}.avif" type="image/avif">
            <source srcset="build/img/${folder}/${i}.webp" type="image/webp">
            <img width="auto" height="auto" loading="lazy" class="d-block w-100" src="build/img/${folder}/${i}.jpg" alt="Foto0${i}">
        `;
        item.appendChild(imagen);
        contenedor.appendChild(item);
        // Agregar clases y atributos a los primeros elementos
        if (i === 1) {
            indicadores.lastChild.classList.add('active');
            indicadores.lastChild.setAttribute('aria-current', 'true');
            item.classList.add('active');
        }
    }
}

function resaltarActual(mainLink, secLink = null) {

    const enlacePpal = document.querySelector(`#${mainLink}`);
    const enlaceSec = document.querySelector(`#${secLink}`);

    enlacePpal.classList.add('active');

    if (enlaceSec) {
        enlaceSec.classList.add('active');
        enlaceSec.setAttribute('aria-current', 'page');
    }
}

// Funcion para insertar Tipo de Evento personalizado (pagina "/contacto")
const seleccionarOtro = document.getElementById('opciones-tipo');
seleccionarOtro.addEventListener('change', (e) => {
    if (e.target.value == 'Otro') {
        document.getElementById('otro').style.display = 'block';
    } else {
        document.getElementById('otro').style.display = 'none';
    }
});