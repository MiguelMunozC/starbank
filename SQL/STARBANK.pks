CREATE OR REPLACE PACKAGE        starbank AS
/******************************************************************************
   NAME:       starbank
   PURPOSE:

   REVISIONS:
   Ver        Date        Author           Description
   ---------  ----------  ---------------  ------------------------------------
   1.0        02/11/2017      fernando       1. Created this package.
******************************************************************************/

    PROCEDURE insertar_usuario (nombre in varchar2, apellido in varchar2, email in varchar2,rut in varchar2, pass in varchar2 );
    PROCEDURE actualizar_usuario (rut in varchar2, nombre in varchar2, apellido in varchar2, pass in varchar2, email in varchar2);
    PROCEDURE ELIMINAR_USUARIO (rut IN VARCHAR2);
     PROCEDURE terceros ( id_origen in Number, NumeroCuenta in Varchar2, monto in Number, Resultado out Varchar2);

END starbank;

/