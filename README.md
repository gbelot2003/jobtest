
# Jobtest para ConstelationX
## Prueba Tecnica - Desarrollador Web

* Para revisar instrucciones de proyecto, revisar el archivo [TASKS.md](https://github.com/gbelot2003/jobtest/blob/main/TASKS.md)

### Instalación

- Clonar este repositorio [gbelot2003/jobtest](https://github.com/gbelot2003) con el comando:
    
    ```
     git clone https://github.com/gbelot2003/jobtest.git
    ```
- Para mayor comodidad usaremos docker [laravel Sails](https://laravel.com/docs/11.x/sail), asi que deberemos asegurarnos que tenemos [docker](https://www.docker.com) y [docker compose](https://docs.docker.com/compose/install/) instalados. luego ejecutaremos el siguiente comando como indican el link con las instruccione [Instrucciones](https://laravel.com/docs/11.x/sail#installing-composer-dependencies-for-existing-projects) :
    ```
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
    ```
- Para continuar con el desarrollo es necesario instalar las dependencias de desarrollo de NodeJs con el comando:
    ```
    // Asegurese que esta instalado el lenguaje NodeJs
    npm install
    ```
### Detalle de paquetes instalados.
- PHP/Laravel
- NodeJs
