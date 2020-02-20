
<h1>Pasos a seguir para que funcione LUPULUS WEB</h1>
<ol>
    <li> clonar el proyecto </li>
    <li> cd lupulus</li>
    <li> composer update</li>
    <li> checkear .env (puertos y DB)</li>
    <li> En phpmyadmin eliminar el schema lupulus que tienen cada uno en su computadora</li>
    <li> Crear un nuevo schema lupulus</li>
    <li> Hacer por consola php artisan migrate</li>
    <li> Entrar de vuelta en phpmyadmin y eliminar la tabla user que crea la migracion</li>
    <li> Importar lupulus.sql</li>
</ol>
