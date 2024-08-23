
# Jobtest para ConstelationX
## Prueba Tecnica - Desarrollador Web

* Para ver instrucciones de proyecto, revisar el archivo [TASKS.md](https://github.com/gbelot2003/jobtest/blob/main/TASKS.md)

### Instalación

- Clonar este repositorio [gbelot2003/jobtest](https://github.com/gbelot2003) con el comando:
    
    ```
     git clone https://github.com/gbelot2003/jobtest.git
    ```
- Para mayor comodidad usaremos docker [laravel Sails](https://laravel.com/docs/11.x/sail), asi que deberemos asegurarnos que tenemos [docker](https://www.docker.com) y [docker compose](https://docs.docker.com/compose/install/) instalados. luego ejecutaremos el siguiente comando como indican el link con las [instrucciones](https://laravel.com/docs/11.x/sail#installing-composer-dependencies-for-existing-projects) :
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
    - [Jetsteam](https://jetstream.laravel.com/introduction.html)
    - [Inertia](https://jetstream.laravel.com/stacks/inertia.html)
    - [laravel/iseed](https://github.com/orangehill/iseed)
    - [laravel/debug-bar](https://github.com/barryvdh/laravel-debugbar)
- NodeJs
    - "@inertiajs/vue3": "^1.0.14",
    - "@tailwindcss/forms": "^0.5.7",
    - "@tailwindcss/typography": "^0.5.10",
    - "@vitejs/plugin-vue": "^5.0.0",
    - "autoprefixer": "^10.4.16",
    - "axios": "^1.6.4",
    - "laravel-vite-plugin": "^1.0",
    - "postcss": "^8.4.32",
    - "tailwindcss": "^3.4.0",
    - "vite": "^5.0",
    - "vue": "^3.3.13"
