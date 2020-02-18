Despues de clonar el proyecto ejecutar dentro de la carpeta donde lo bajaron composer update, 
que les trae la carpeta vendor y las funciones de php artisan.

Despues:

1 - En phpmyadmin eliminar el schema lupulus que tienen cada uno en su computadora
2 - Crear un nuevo schema lupulus
3 - Hacer por consola php artisan migrate
4 - Entrar de vuelta en phpmyadmin y eliminar la tabla user que crea la migracion
5 - Importar lupulus.sql

