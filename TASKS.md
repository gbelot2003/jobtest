### Instrucciones para la Prueba Técnica

* <s>Crear una Aplicación en Laravel:</s>
    * <s>Crea una aplicación utilizando la versión de Laravel de tu preferencia
(recomendamos usar las últimas versiones).</s>

* Consumo de una API para Creación de Usuarios:
    * Consume una API para crear usuarios y guardarlos en la base de datos al
acceder a una URL específica. Puedes usar endpoints públicos como:
        * reqres.in
        * {JSON}Placeholder
* Gestión de Contraseñas y Login:
    * Después de obtener los usuarios, crea una contraseña por defecto para
ellos. Deberás implementar un sistema de login.

* Asignación de Roles:
    * Separa a los usuarios en dos roles: Clientes y Administradores.

* CRUD de Productos:
    * Los administradores podrán crear, leer, actualizar y eliminar productos
(CRUD completo).
    * Los clientes podrán ver los productos en un catálogo público, que para
comprar tendran que iniciar sesion o crearse una cuenta.

* Integración con Stripe:
    * Crea una integración básica con Stripe para permitir la compra de
productos. Guarda la información necesaria (considera los puntos más
importantes al realizar un pago).

* Listado de Ingresos/Compras:
    * Los administradores podrán ver un listado de los ingresos/compras
realizadas.

* Gráficos Estadísticos:
    * Crea gráficos estadísticos para mostrar:
        * Productos más vendidos
        * Productos menos comprados
        * Ingresos por día, semana y mes

* Clientes Top:
    * Muestra un listado de los clientes top.

Nota: Para los productos, puedes usar la API FakeStoreApi. Puedes utilizar
componentes de Livewire, componentes de Blade y los paquetes que mejor prefieras.

El uso de Docker es un plus.
