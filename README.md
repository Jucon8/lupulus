
<h1> URL: http://lupulus.nomadecomunicacion.com.ar/ </h1>

<div style="background-color: rgba(0, 0, 0, 0.22);">
                    <h3> Para ingresar como cliente:</h3>
                    <p>Usuario: "cliente@cliente.com"</p>
                    <p>Contraseña: "lupulus"</p>
                    <h3> Para ingresar como Administrador:</h3>
                    <p>Usuario: "lupulus@admin.com"</p>
                    <p>Contraseña: "lupulus"</p>

</div>


##Proyecto desarrollado por 5Bits:##

@Santi-Bobadilla,
@Sdmb,
@TheEma2019,
@magogaflo,
@Jucon8


<h4>Pasos a seguir para que funcione LUPULUS WEB</h4>
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
