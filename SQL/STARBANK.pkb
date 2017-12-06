CREATE OR REPLACE PACKAGE BODY        STARBANK AS
    /******************************************************************************
       NAME:       STARBANK
       PURPOSE:

       REVISIONS:
       Ver        Date        Author           Description
       ---------  ----------  ---------------  ------------------------------------
       1.0        12/06/2017      fernando       1. Created this package body.
    ******************************************************************************/

    PROCEDURE insertar_usuario (nombre in varchar2, apellido in varchar2, email in varchar2,rut in varchar2, pass in varchar2 ) IS
    tmpVar NUMBER;



    fecha DATE;
    id number;

        BEGIN
            fecha := current_date;   
        

    INSERT INTO USUARIO (id_usuario, nombres, apellidos, dni, password, email, fecha_creacion, activo) values(SEQ_USUARIO.nextval, nombre, apellido,rut, pass, email,fecha, 'Y');


        Select id_usuario into id from USUARIO WHERE dni = rut;

        INSERT INTO PRODUCTO (id_producto, id_tipo_cuenta,numero_cuenta,verificacion_cuenta,saldo,fecha_creacion,id_usuario) values (SEQ_PRODUCTO.nextval,1,0||rut,0||rut,0,fecha,id);

    INSERT INTO PRODUCTO (id_producto, id_tipo_cuenta,numero_cuenta,verificacion_cuenta,saldo,fecha_creacion,id_usuario) values (SEQ_PRODUCTO.nextval,2,'00'||rut,'00'||rut,0,fecha,id);

    INSERT INTO PRODUCTO (id_producto, id_tipo_cuenta,numero_cuenta,verificacion_cuenta,saldo,fecha_creacion,id_usuario) values (SEQ_PRODUCTO.nextval,3,'000'||rut,'000'||rut,0,fecha,id);

    END insertar_usuario;

    PROCEDURE actualizar_usuario (rut in varchar2, nombre in varchar2, apellido in varchar2, pass in varchar2, email in varchar2) IS


    rut2 varchar2(50);
    nombre2 varchar2(50);
    apellido2 varchar2(50);
    pass2 varchar2(50);
    email2 varchar2(50);

    cursor usuario
    is

    Select DNI, NOMBRES, APELLIDOS, PASSWORD,EMAIL From USUARIO WHERE DNI = RUT AND ACTIVO = 'Y';

    BEGIN

        open usuario;
        Fetch usuario into rut2, nombre2, apellido2, pass2,email2;
        close usuario;
        
        if nombre is not null then
        
        nombre2 := nombre;
        
        END IF;
        if apellido is not null then
        
        apellido2 := apellido;
        
        END IF;
        
         if pass is not null then
        
        pass2 := pass;
        
        end if;
        
        if email is not null then
        
        email2 := email;
        
        end if;
        
        UPDATE USUARIO
        SET NOMBRES=nombre2, APELLIDOS=apellido2, PASSWORD=pass2, EMAIL=email2 WHERE DNI = RUT; 
        
       
    END actualizar_usuario;
   PROCEDURE ELIMINAR_USUARIO (rut IN VARCHAR2) IS


    BEGIN
           
           
            UPDATE USUARIO
            SET ACTIVO='N' WHERE DNI = rut; 
        
           


    END ELIMINAR_USUARIO;
--  
    PROCEDURE terceros ( id_origen in Number, NumeroCuenta in Varchar2, monto in Number, Resultado out Varchar2) IS

    Aux Float;
    Aux2 Float;
    tipo Number;
    montoFinal Float;

    BEGIN

        
        Select SALDO into Aux FROM PRODUCTO WHERE ID_PRODUCTO = id_origen ;
        Select SALDO into Aux2 FROM PRODUCTO WHERE NUMERO_CUENTA = NumeroCuenta;
        Select ID_TIPO_CUENTA into tipo FROM PRODUCTO WHERE ID_PRODUCTO = id_origen;
        
       Resultado :='Error';
        
        if(tipo = 3)then 
        
        montoFinal:= monto*654;
        
        
        else 
        
        montoFinal :=monto;
        
       end if;
             
        if(Aux2 is not null) then
            
            if(Aux > monto) then
            
            Aux2 := Aux2+montoFinal;
            Aux := Aux - monto;
            
            
            
            UPDATE PRODUCTO
            SET SALDO=Aux2 WHERE NUMERO_CUENTA = NumeroCuenta; 
        
            UPDATE PRODUCTO
            SET SALDO=Aux WHERE ID_PRODUCTO = id_origen; 
            
             Resultado :='Exitoso';
            
          
            
            end if;
            
            
        end if;
        
        
      
       
    END terceros;  
END STARBANK;

/