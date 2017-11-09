ALTER TABLE ROLEJO.TIPO_CUENTA
 DROP PRIMARY KEY CASCADE;

DROP TABLE ROLEJO.TIPO_CUENTA CASCADE CONSTRAINTS;

CREATE TABLE ROLEJO.TIPO_CUENTA
(
  ID_TIPO_CUENTA  NUMBER                        NOT NULL,
  NOMBRE          VARCHAR2(50 BYTE)
)
TABLESPACE USERS
RESULT_CACHE (MODE DEFAULT)
PCTUSED    0
PCTFREE    10
INITRANS   1
MAXTRANS   255
STORAGE    (
            INITIAL          64K
            NEXT             1M
            MINEXTENTS       1
            MAXEXTENTS       UNLIMITED
            PCTINCREASE      0
            BUFFER_POOL      DEFAULT
            FLASH_CACHE      DEFAULT
            CELL_FLASH_CACHE DEFAULT
           )
LOGGING 
NOCOMPRESS 
NOCACHE
NOPARALLEL
MONITORING;


ALTER TABLE ROLEJO.USUARIO
 DROP PRIMARY KEY CASCADE;

DROP TABLE ROLEJO.USUARIO CASCADE CONSTRAINTS;

CREATE TABLE ROLEJO.USUARIO
(
  ID_USUARIO      NUMBER                        NOT NULL,
  NOMBRES         VARCHAR2(50 BYTE)             NOT NULL,
  APELLIDOS       VARCHAR2(50 BYTE)             NOT NULL,
  DNI             VARCHAR2(15 BYTE)             NOT NULL,
  PASSWORD        VARCHAR2(50 BYTE)             NOT NULL,
  EMAIL           VARCHAR2(50 BYTE),
  FECHA_CREACION  DATE                          NOT NULL
)
TABLESPACE USERS
RESULT_CACHE (MODE DEFAULT)
PCTUSED    0
PCTFREE    10
INITRANS   1
MAXTRANS   255
STORAGE    (
            INITIAL          64K
            NEXT             1M
            MINEXTENTS       1
            MAXEXTENTS       UNLIMITED
            PCTINCREASE      0
            BUFFER_POOL      DEFAULT
            FLASH_CACHE      DEFAULT
            CELL_FLASH_CACHE DEFAULT
           )
LOGGING 
NOCOMPRESS 
NOCACHE
NOPARALLEL
MONITORING;


CREATE UNIQUE INDEX ROLEJO.TIPO_CUENTA_PK ON ROLEJO.TIPO_CUENTA
(ID_TIPO_CUENTA)
LOGGING
TABLESPACE USERS
PCTFREE    10
INITRANS   2
MAXTRANS   255
STORAGE    (
            INITIAL          64K
            NEXT             1M
            MINEXTENTS       1
            MAXEXTENTS       UNLIMITED
            PCTINCREASE      0
            BUFFER_POOL      DEFAULT
            FLASH_CACHE      DEFAULT
            CELL_FLASH_CACHE DEFAULT
           )
NOPARALLEL;


CREATE UNIQUE INDEX ROLEJO.USUARIO_PK ON ROLEJO.USUARIO
(ID_USUARIO)
LOGGING
TABLESPACE USERS
PCTFREE    10
INITRANS   2
MAXTRANS   255
STORAGE    (
            INITIAL          64K
            NEXT             1M
            MINEXTENTS       1
            MAXEXTENTS       UNLIMITED
            PCTINCREASE      0
            BUFFER_POOL      DEFAULT
            FLASH_CACHE      DEFAULT
            CELL_FLASH_CACHE DEFAULT
           )
NOPARALLEL;


ALTER TABLE ROLEJO.PRODUCTO
 DROP PRIMARY KEY CASCADE;

DROP TABLE ROLEJO.PRODUCTO CASCADE CONSTRAINTS;

CREATE TABLE ROLEJO.PRODUCTO
(
  ID_PRODUCTO          NUMBER                   NOT NULL,
  ID_TIPO_CUENTA       NUMBER,
  NUMERO_CUENTA        VARCHAR2(50 BYTE)        NOT NULL,
  VERIFICACION_CUENTA  VARCHAR2(50 BYTE)        NOT NULL,
  SALDO                FLOAT(126)               NOT NULL,
  FECHA_CREACION       DATE                     NOT NULL,
  ID_USUARIO           NUMBER                   NOT NULL
)
TABLESPACE USERS
RESULT_CACHE (MODE DEFAULT)
PCTUSED    0
PCTFREE    10
INITRANS   1
MAXTRANS   255
STORAGE    (
            INITIAL          64K
            NEXT             1M
            MINEXTENTS       1
            MAXEXTENTS       UNLIMITED
            PCTINCREASE      0
            BUFFER_POOL      DEFAULT
            FLASH_CACHE      DEFAULT
            CELL_FLASH_CACHE DEFAULT
           )
LOGGING 
NOCOMPRESS 
NOCACHE
NOPARALLEL
MONITORING;


CREATE UNIQUE INDEX ROLEJO.PRODUCTO_PK ON ROLEJO.PRODUCTO
(ID_PRODUCTO)
LOGGING
TABLESPACE USERS
PCTFREE    10
INITRANS   2
MAXTRANS   255
STORAGE    (
            INITIAL          64K
            NEXT             1M
            MINEXTENTS       1
            MAXEXTENTS       UNLIMITED
            PCTINCREASE      0
            BUFFER_POOL      DEFAULT
            FLASH_CACHE      DEFAULT
            CELL_FLASH_CACHE DEFAULT
           )
NOPARALLEL;


ALTER TABLE ROLEJO.TIPO_CUENTA ADD (
  CONSTRAINT TIPO_CUENTA_PK
  PRIMARY KEY
  (ID_TIPO_CUENTA)
  USING INDEX ROLEJO.TIPO_CUENTA_PK
  ENABLE VALIDATE);

ALTER TABLE ROLEJO.USUARIO ADD (
  CONSTRAINT USUARIO_PK
  PRIMARY KEY
  (ID_USUARIO)
  USING INDEX ROLEJO.USUARIO_PK
  ENABLE VALIDATE);

ALTER TABLE ROLEJO.PRODUCTO ADD (
  CONSTRAINT PRODUCTO_PK
  PRIMARY KEY
  (ID_PRODUCTO)
  USING INDEX ROLEJO.PRODUCTO_PK
  ENABLE VALIDATE);

ALTER TABLE ROLEJO.PRODUCTO ADD (
  CONSTRAINT PRODUCTO_USUARIO 
  FOREIGN KEY (ID_USUARIO) 
  REFERENCES ROLEJO.USUARIO (ID_USUARIO)
  ENABLE VALIDATE);
DROP PROCEDURE ROLEJO.INSERTAR_USUARIO;

CREATE OR REPLACE PROCEDURE ROLEJO.insertar_usuario (nombre in varchar2, apellido in varchar2, email in varchar2,rut in varchar2, pass in varchar2 ) IS
tmpVar NUMBER;
/******************************************************************************
   NAME:       insertar_usuario
   PURPOSE:    

   REVISIONS:
   Ver        Date        Author           Description
   ---------  ----------  ---------------  ------------------------------------
   1.0        02/11/2017   fernando       1. Created this procedure.

   NOTES:

   Automatically available Auto Replace Keywords:
      Object Name:     insertar_usuario
      Sysdate:         02/11/2017
      Date and Time:   02/11/2017, 15:17:03, and 02/11/2017 15:17:03
      Username:        fernando (set in TOAD Options, Procedure Editor)
      Table Name:       (set in the "New PL/SQL Object" dialog)

******************************************************************************/

fecha DATE;
id number;

BEGIN
    fecha := current_date;   
    

INSERT INTO USUARIO (id_usuario, nombres, apellidos, dni, password, email, fecha_creacion) values(SEQ_USUARIO.nextval, nombre, apellido,rut, pass, email,fecha);


Select id_usuario into id from USUARIO WHERE dni = rut;

INSERT INTO PRODUCTO (id_producto, id_tipo_cuenta,numero_cuenta,verificacion_cuenta,saldo,fecha_creacion,id_usuario) values (SEQ_PRODUCTO.nextval,1,0||rut,0||rut,0,fecha,id);

INSERT INTO PRODUCTO (id_producto, id_tipo_cuenta,numero_cuenta,verificacion_cuenta,saldo,fecha_creacion,id_usuario) values (SEQ_PRODUCTO.nextval,2,'00'||rut,'00'||rut,0,fecha,id);

INSERT INTO PRODUCTO (id_producto, id_tipo_cuenta,numero_cuenta,verificacion_cuenta,saldo,fecha_creacion,id_usuario) values (SEQ_PRODUCTO.nextval,3,'000'||rut,'000'||rut,0,fecha,id);

END insertar_usuario;
/
DROP SEQUENCE ROLEJO.SEQ_PRODUCTO;

CREATE SEQUENCE ROLEJO.SEQ_PRODUCTO
  START WITH 18
  MAXVALUE 9999999999999999999999999999
  MINVALUE 1
  NOCYCLE
  NOCACHE
  NOORDER;


DROP SEQUENCE ROLEJO.SEQ_USUARIO;

CREATE SEQUENCE ROLEJO.SEQ_USUARIO
  START WITH 23
  MAXVALUE 9999999999999999999999999999
  MINVALUE 1
  NOCYCLE
  NOCACHE
  NOORDER;
