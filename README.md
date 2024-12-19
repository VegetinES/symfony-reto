# Reto Samurái - Aplicación Symfony Básica

Este proyecto es parte del curso Código Samurái y demuestra el uso básico del framework Symfony, incluyendo rutas, controladores y vistas.

## Requisitos Previos

* PHP 8.1 o superior
* Composer
* Servidor web (Apache/Nginx) o PHP's built-in server

## Instalación

1. Clona el repositorio:
```bash
git clone [URL_DEL_REPOSITORIO]
cd symfony-reto
```

2. Instala las dependencias:
```bash
composer install
```

3. Configura las variables de entorno:
```bash
cp .env .env.local
```
Edita `.env.local` según tus necesidades.

## Ejecución

Puedes ejecutar la aplicación de dos formas:

1. Usando el servidor integrado de PHP:
```bash
php -S localhost:8000 -t public
```

2. Si tienes Symfony CLI instalado:
```bash
symfony server:start
```

La aplicación estará disponible en `http://localhost:8000`

## Estructura del Proyecto

```
symfony-reto/
├── config/                # Archivos de configuración
├── public/               # Directorio público
├── src/                  # Código fuente
│   ├── Controller/      # Controladores
│   │   ├── HomeController.php
│   │   └── DetailController.php
├── templates/            # Plantillas Twig
│   ├── base.html.twig
│   ├── home/
│   │   └── index.html.twig
│   └── detail/
│       └── show.html.twig
└── vendor/              # Dependencias
```

## Rutas Disponibles

* **Página de inicio**: `/` 
  * Muestra la página principal con un mensaje de bienvenida
* **Página de detalles**: `/detail/{id}`
  * Muestra detalles específicos basados en el ID proporcionado

## Características

* Implementación de rutas básicas
* Controladores con acciones definidas
* Plantillas Twig con herencia
* Diseño responsive usando Bootstrap
* Navegación entre páginas

## Desarrollo

Para contribuir al proyecto:

1. Crea una rama para tus cambios:
```bash
git checkout -b feature/nueva-caracteristica
```

2. Realiza tus cambios y haz commit:
```bash
git add .
git commit -m "Descripción de tus cambios"
```

3. Sube tus cambios:
```bash
git push origin feature/nueva-caracteristica
```

## Autor

[Tu Nombre]

## Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.
