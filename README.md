# Proyecto Tecnologías WEB
# Configuración de Servidor:
Dominio: http://galardonados2018.x10host.com

Host: ftp.galardonados2018.x10host.com

Port: 21

User:JoaksIPN@galardonados2018.x10host.com

Password: proyectoweb

# Modulos del sitema:
## Usuarios (Administrador)
Descripción: El modulo consiste en dar de alta nuevos usuarios, tras darlo de alta, se le enviara un e-mail con las credenciales para ingresar al dominio. El nombre de usuario será de 10 caracteres y el password de 8 caracteres, los cuales serán aleatorios, el nombre de usuario es único.

Consta de las siguientes interfaces:
### 1. Formulario de registro de nuevos usuarios.
       Nombre:(Campo de Texto) 
       Apellido Paterno: (Campo de Texto)
       Apellido Materno: (Campo de Texto)
       Número de Empleado: (Campo de Texto)
       E-mail: (Campo de Texto)
       Tipo Acceso: (ChekBox: Edecan, Archivador, Maestro de Ceremonias).
       Dar de Alta(Boton)
       
### 2. Formulario de busqueda de usuarios
Existiran dos operaciones en este formulario, la opción de desplegar una lista con todos los usuarios dados de alta en el sistema, con el siguiente orden:

       Número de empleado, Nombre, E-mail, Tipo de Acceso, Opcion de Dar de Baja, Opcion de Actualizar Datos.
       
Al dar la opción de actualizar datos aparecera el siguiente formulario. 

        Nombre:(Campo de Texto) 
        Apellido Paterno: (Campo de Texto)
        Apellido Materno: (Campo de Texto)
        Número de Empleado: (Campo de Texto)
        E-mail: (Campo de Texto)
        Tipo Acceso: (ChekBox: Edecan, Archivador, Maestro de Ceremonias).
        Actualizar(Boton)
 
 La siguiente opción consiste en buscar a usuarios por Número de Empleado, el formulario consisitará en :
 
       Numero de Empleado: (Campo de texto) Buscar (Boton)
       
 Si se encuentra el empleado en el sistema se desplegara:
 
        Número de empleado, Nombre, E-mail, Tipo de Acceso, Dar de Baja (Boton),Actualizar Datos(Boton)
 
 Al dar la opción de actualizar datos aparecera el siguiente formulario. 

        Nombre:(Campo de Texto) 
        Apellido Paterno: (Campo de Texto)
        Apellido Materno: (Campo de Texto)
        Número de Empleado: (Campo de Texto)
        E-mail: (Campo de Texto)
        Tipo Acceso: (ChekBox: Edecan, Archivador, Maestro de Ceremonias).
        Actualizar(Boton)
       
       
## Galardonados (Administrador)
Descripción: El modulo consiste en mandar las invitaciones a todos los galardonados o a uno en especial en caso de que no le haya llegado correctamente. Se tomará en cuenta que algún dato pueda estar erroneo por lo que se contará con un botón de moficación. 

Consta de las siguientes interfaces:
### 1. Consultar galardonados, notificaciones o cambios

La siguiente opción consiste en buscar a un galardonado por RFC, el formulario consisitará en :
 
       RFC: (Campo de Texto) Buscar(Botón)
       
 Si se encuentra el galardonado en el sistema se desplegara:
       
       RFC, Nombre, Unidad Académica, E-mail, Galardon, Observaciones,  Asiento Asignado, Representante,  Actualizar Datos (Boton) Enviar notificación(Botón), Enviar Invitación(Botón)
       
 Al dar la opción de actualizar datos aparecera el siguiente formulario. 

        RFC:(Campo de Texto) 
        Nombre:(Campo de Texto)
        Apellido Paterno: (Campo de Texto)
        Apellido Materno: (Campo de Texto)
        Unidad Académica: (Campo de Texto)
        E-mail: (Campo de Texto)
        Observaciones:
        Asiento Asignado:
        Representante:
        Actualizar Datos(Boton)
       
Al dar la opción de Enviar notificacion datos aparecera un campo de texto para redactar la notifiación y un boton con la opción de enviar.

Al dar la opción de reenviar invitación se enviara con los datos almacenados en la base de datos.
### 2. Consultar todos los galardonados

Apareceran en una lista despelgable todos los galardonados almacenados en  la base de datos con la opción de seleccionar a algunos o seleccionar todos.

       Seleccionar todos (Boton)
       
        RFC, Nombre,Apellido Paterno,Apellido Materno Unidad Académica, E-mail, Galardon, Observaciones,  Asiento Asignado, Representante,  Actualizar Datos (Boton) Enviar notificación(Botón), Enviar Invitación(Botón), CheckBox
        
        
La selección permitirá enviar la misma notificaciones a los seleccionados o enviar su invitación.

 Al dar la opción de actualizar datos aparecera el siguiente formulario. 

        RFC:(Campo de Texto) 
        Nombre:(Campo de Texto) 
        Apellido Paterno: (Campo de Texto)
        Apellido Materno: (Campo de Texto)
        Unidad Académica: (Campo de Texto)
        E-mail: (Campo de Texto)
        Observaciones:
        Asiento Asignado:
        Representante:
        Actualizar Datos(Boton)
       
Al dar la opción de Enviar notificacion datos aparecera un campo de texto para redactar la notifiación y un boton con la opción de enviar.

Al dar la opción de enviar invitación se enviara con los datos almacenados en la base de datos.
       
## Evento (Administrador, Edecan (Ciertos Modulos), Archivador(Ciertos Modulos), Maestro de Ceremonias (Ciertos Modulos))
Descripción: En este módulo se llevará acabo el registro de asistencia así como el cierre de este, la generación del speech, gráficas y reconocimientos. Contará con un menú desplegable o continuo en la barra superior derecha.

Consta de las siguientes interfaces:
### 1. Paso de asistencia

Existiran dos opciones, la manual y por código QR, la manual constira en una búsqueda por RFC y la opción de si asistio.

       RFC:(Campo de Texto ) Asistio(Boton)
                
       Lector QR
       
### 2. Generar Speech
       Si se le da click a la opción de Speech se redireccionara a un PDF

### 3. Generar Gráficas
       Mandara a una página Web que mostrará las gráficas con un botón de Generar PDF y otro para Generar reportes el cual redireccionara a otra página Web con la opción de Generar PDF

### 4. Generar reconocimientos
       Generar todos(Boton)
       Generar uno en especifico(Boton) En caso de que se haya perdido uno o su impresión saliera mal
       Redirecciona a página:
       RFC: (Campo de Texto)              
       Genera(Botón)
       Imprimir(Botón)
