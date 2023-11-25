const inicioLink = document.getElementById('iniciolink');
const inicio = document.getElementById('inicio');
const listaLink = document.getElementById('lista');
const productos = document.getElementById('productos');
const stockLink = document.getElementById('stocklink');
const stock = document.getElementById('stock');
const formuLink = document.getElementById('formu');
const formulario = document.getElementById('formulario');
const body = document.body;
inicioLink.addEventListener('click', function (e){
    e.preventDefault();
    inicio.style.display='block';
    productos.style.display='none';
    stock.style.display='none';
    formulario.style.display='none';

});

listaLink.addEventListener('click', function (e){
    e.preventDefault();
    productos.style.display='block';
    inicio.style.display='none';
    stock.style.display='none';
    formulario.style.display='none';

});

stockLink.addEventListener('click', function (e){
    e.preventDefault();
    stock.style.display='block';
    inicio.style.display='none';
    productos.style.display='none';
    formulario.style.display='none';
});

formuLink.addEventListener('click', function (e){
    e.preventDefault();
    formulario.style.display='block';
    inicio.style.display='none';
    productos.style.display='none';
    stock.style.display='none';
});