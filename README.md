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
       Número de Empleado: (Campo de Texto)
       E-mail: (Campo de Texto)
       Tipo Acceso: (ChekBox: Edecan, Archivador, Maestro de Ceremonias).
       Dar de Alta(Boton)
       
## Galardonados (Administrador)
Descripción: El modulo consiste en mandar las invitaciones a todos los galardonados o a uno en especial en caso de que no le haya llegado correctamente. Se tomará en cuenta que algún dato pueda estar erroneo por lo que se contará con un botón de moficación. 

Consta de las siguientes interfaces:
### 1. Consultar galardonados, notificaciones o cambios
       Por RFC: (Campo de Texto)                Buscar(Botón)
       Email: (Campo de Texto)
       RFC: (Campo de Texto)
       Nombre: (Campo de Texto)
       Unidad Académica: (Campo de Texto)
       Asiento Asignado: (Campo de Texto)
       Galardonado: (Campo de Texto)
       Observaciones: (Campo de Texto) En caso de que vaya un representante a su nombre
       Modificar(Boton)            Enviar notificación(Botón)         Reenviar Invitación(Botón)

### 2. Consultar todos los galardonados
       Seleccionar todos (Boton)
       Tabla con todos los galardonados con los respectivos datos de c/u:
              RFC
              Nombre
              Unidad Académica, etc.
       Cada fila contara con los siguientes checkbox
              Modificar
              Enviar notificación
              Enviar Invitación 
       (? En caso de seleccionar varios que redireccione a otra página en caso de ser notificación para poder escribir como si fuera un correo ?)
       
## Evento (Administrador, Edecan (Ciertos Modulos), Archivador(Ciertos Modulos), Maestro de Ceremonias (Ciertos Modulos))


## Eviar correos con invitación digital.
## Envio de notificaciones a galardonados vía correo.
## Actualizar información de galardonados.
## Pase de lista de galardonados por medio de escaneo del código QR de la invitación digital.
## Genración de lista de asitencia.
## Generación de reconocimientos.
## Generación de gráficas de asistencia según galardon y unidad académica. 


