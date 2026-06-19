# Sistema de Productos - Laravel 12

## Descripción

Proyecto desarrollado en Laravel 12 como parte de la Semana Intensiva.

El sistema permite:

* Registro e inicio de sesión de usuarios.
* Crear productos.
* Listar productos.
* Editar productos.
* Eliminar productos.
* Acceso protegido mediante autenticación con Laravel Breeze.

## Requisitos

* PHP 8.2 o superior
* Composer
* Node.js
* MySQL
* Laravel 12

## Instalación

### 1. Clonar o descargar el proyecto

```bash
git clone URL_DEL_PROYECTO
```

### 2. Instalar dependencias PHP

```bash
composer install
```

### 3. Instalar dependencias de Node.js

```bash
npm install
```

### 4. Configurar archivo .env

Copiar el archivo de ejemplo:

```bash
cp .env.example .env
```

Configurar los datos de conexión a la base de datos:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=productos_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generar clave de aplicación

```bash
php artisan key:generate
```

### 6. Ejecutar migraciones

```bash
php artisan migrate
```

### 7. Compilar recursos

```bash
npm run dev
```

### 8. Iniciar servidor

```bash
php artisan serve
```

Abrir en el navegador:

```text
http://127.0.0.1:8000
```

## Usuario

Para acceder al sistema es necesario registrarse mediante la opción:

```text
Register
```

Una vez autenticado se podrá acceder al CRUD de productos.

## Funcionalidades implementadas

* Autenticación con Laravel Breeze.
* Middleware auth para proteger rutas.
* CRUD completo de productos.
* Validaciones básicas.
* Base de datos MySQL.
* Vistas Blade.
* Layout principal.

## Autor

Mariciel Gutierrez

Proyecto realizado con Laravel 12 y PHP.
