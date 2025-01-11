# Proyecto CITT

Portal web del Centro de Innovación y Transferencia Tecnológica

## Configuración del Entorno Virtual

Para configurar el entorno virtual para este proyecto, sigue los siguientes pasos:


### 1. Instalar `virtualenv`

Si no tienes `virtualenv` instalado, puedes instalarlo usando `pip`:

```bash
pip install virtualenv
```


### 2. Crear el Entorno Virtual

Navega a la raíz del proyecto y crea el entorno virtual:

```bash
python -m venv venv
```


### 3. Activar el Entorno Virtual

- En Windows:

```bash
.\venv\Scripts\activate
```

- En macOS y Linux:

```bash
source venv/bin/activate
```

## 4. Error en la activación del entorno virtual en Windows

Si estás utilizando Windows y encuentras un error al intentar activar el entorno virtual, esto ocurre porque la política de ejecución de PowerShell está configurada como `Restricted`.
Para solucionarlo, puedes cambiar la política de ejecución temporalmente siguiendo estos pasos:

1. Abre PowerShell como administrador.
2. Ejecuta el siguiente comando para cambiar la política de ejecución solo para la sesión actual:

   ```powershell
   Set-ExecutionPolicy -Scope Process -ExecutionPolicy Bypass
   ```

3. Ahora intenta nuevamente activar el entorno virtual con:
    ```bash
    .\venv\Scripts\activate
    ```


### 5. Instalar Dependencias

Con el entorno virtual activado, instala las dependencias necesarias:

```bash
pip install -r requirements.txt
```