SET AUTOCOMMIT=1;

CREATE DATABASE IF NOT EXISTS empresa;

USE empresa; 



CREATE TABLE IF NOT EXISTS DEPT (
 DEPT_NO  TINYINT (2) UNSIGNED,
 DNOMBRE     VARCHAR(14) NOT NULL UNIQUE,
 LOC      VARCHAR(14),
 PRIMARY KEY (DEPT_NO) ) ;


INSERT INTO DEPT VALUES (10, 'CONTABILIDAD', 'SEVILLA');
INSERT INTO DEPT VALUES (20, 'INVESTIGACI�N', 'MADRID');
INSERT INTO DEPT VALUES (30, 'VENTAS', 'BARCELONA');
INSERT INTO DEPT VALUES (40, 'PRODUCCI�N', 'BILBAO');


CREATE TABLE IF NOT EXISTS EMP (
 EMP_NO    SMALLINT (4) UNSIGNED,
 APELLIDOS    VARCHAR (10) NOT NULL,
 OFICIO     VARCHAR (10),
 JEFE       SMALLINT (4) UNSIGNED,
 FECHA_ALTA DATE,
 SALARIO    INT UNSIGNED,
 COMISION  INT UNSIGNED,
 DEPT_NO   TINYINT (2) UNSIGNED NOT NULL,
 PRIMARY KEY (EMP_NO),
 INDEX IDX_EMP_JEFE (JEFE),
 INDEX IDX_EMP_DEPT_NO (DEPT_NO),
 FOREIGN KEY (DEPT_NO) REFERENCES DEPT(DEPT_NO)) ;


CREATE INDEX EMP_APELLIDOS ON EMP (APELLIDOS);
CREATE INDEX EMP_DEPT_NO_EMP ON EMP (DEPT_NO,EMP_NO);

INSERT INTO EMP VALUES (7369,'S�NCHEZ','EMPLEADO',7902, '1980-12-17', 104000,NULL,20);
INSERT INTO EMP VALUES (7499,'ARROYO','VENDEDOR',7698, '1980-02-20', 208000,39000,30);
INSERT INTO EMP VALUES (7521,'SALA','VENDEDOR',7698, '1981-02-22', 162500,65000,30);
INSERT INTO EMP VALUES (7566,'JIM�NEZ','DIRECTOR',7839, '1981-04-02', 386750,NULL,20);
INSERT INTO EMP VALUES (7654,'MART�N','VENDEDOR',7698, '1981-09-29', 162500,182000,30);
INSERT INTO EMP VALUES (7698,'NEGRO','DIRECTOR',7839, '1981-05-01', 370500,NULL,30);
INSERT INTO EMP VALUES (7782,'CEREZO','DIRECTOR',7839, '1981-06-09', 318500,NULL,10);
INSERT INTO EMP VALUES (7788,'GIL','ANALISTA',7566, '1981-11-09', 390000,NULL,20);
INSERT INTO EMP VALUES (7839,'REY','PRESIDENTE',NULL, '1981-11-17', 650000,NULL,10);
INSERT INTO EMP VALUES (7844,'TOVAR','VENDEDOR',7698, '1981-09-08', 195000,0,30);
INSERT INTO EMP VALUES (7876,'ALONSO','EMPLEADO',7788, '1981-09-23', 143000,NULL,20);
INSERT INTO EMP VALUES (7900,'JIMENO','EMPLEADO',7698, '1981-12-03', 123500,NULL,30);
INSERT INTO EMP VALUES (7902,'FERN�NDEZ','ANALISTA',7566, '1981-12-03', 390000,NULL,20);
INSERT INTO EMP VALUES (7934,'MU�OZ','EMPLEADO',7782, '1982-01-23', 169000,NULL,10);


ALTER TABLE EMP
ADD FOREIGN KEY (JEFE) REFERENCES EMP(EMP_NO);



CREATE TABLE IF NOT EXISTS CLIENTE (
 CLIENTE_COD          INT(6) UNSIGNED PRIMARY KEY,
 NOMBRE                 VARCHAR (45) NOT NULL,
 DIREC              VARCHAR (40) NOT NULL,
 CIUDAD              VARCHAR (30) NOT NULL,
 ESTADO               VARCHAR (2),
 COD_POSTAL         VARCHAR (9) NOT NULL,
 AREA                SMALLINT(3),
 TELEFONO             VARCHAR (9),
 REPR_COD            SMALLINT(4) UNSIGNED,
 LIMITE_CREDITO        DECIMAL(9,2) UNSIGNED,
 OBSERVACIONES        TEXT,
 INDEX IDX_CLIENTE_REPR_COD (REPR_COD),
 FOREIGN KEY (REPR_COD) REFERENCES EMP(EMP_NO));

CREATE INDEX CLIENTE_NOMBRE ON CLIENTE (NOMBRE);
CREATE INDEX CLIENTE_REPR_CLI ON CLIENTE (REPR_COD, CLIENTE_COD);


INSERT INTO CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA, 
                      TELEFONO, REPR_COD, LIMITE_CREDITO, OBSERVACIONES)
VALUES (100, 'JOCKSPORTS', '345 VIEWRIDGE', 'BELMONT', 'CA', '96711', 415,
        '598-6609', 7844, 5000, 
        'Very friendly people to work with -- sales rep likes to be called Mike.');
INSERT INTO CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA, 
                      TELEFONO, REPR_COD, LIMITE_CREDITO, OBSERVACIONES)
VALUES (101, 'TKB SPORT SHOP', '490 BOLI RD.', 'REDWOOD CIUDAD', 'CA', '94061', 415,
        '368-1223', 7521, 10000, 
        'Rep called 5/8 about change in order - contact shipping.');
INSERT INTO CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA, 
                      TELEFONO, REPR_COD, LIMITE_CREDITO, OBSERVACIONES)
VALUES (102, 'VOLLYRITE', '9722 HAMILTON', 'BURLINGAME', 'CA', '95133', 415,
        '644-3341', 7654, 7000, 
        'Company doing heavy promotion beginning 10/89. Prepare for large orders during winter.');
INSERT INTO CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA, 
                      TELEFONO, REPR_COD, LIMITE_CREDITO, OBSERVACIONES)
VALUES (103, 'JUST TENNIS', 'HILLVIEW MALL', 'BURLINGAME', 'CA', '97544', 415,
        '677-9312', 7521, 3000, 
        'Contact rep about new line of tennis rackets.');
INSERT INTO CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA, 
                      TELEFONO, REPR_COD, LIMITE_CREDITO, OBSERVACIONES)
VALUES (104, 'EVERY MOUNTAIN', '574 SURRY RD.', 'CUPERTINO', 'CA', '93301', 408,
        '996-2323', 7499, 10000, 
        'CLIENTE with high market share (23%) due to aggressive advertising.');
INSERT INTO CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA, 
                      TELEFONO, REPR_COD, LIMITE_CREDITO, OBSERVACIONES)
VALUES (105, 'K + T SPORTS', '3476 EL PASEO', 'SANTA CLARA', 'CA', '91003', 408,
        '376-9966', 7844, 5000, 
        'Tends to order large amounts of merchandise at once. Accounting is considering raising their credit limit. Usually pays on time.');
INSERT INTO CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA, 
                      TELEFONO, REPR_COD, LIMITE_CREDITO, OBSERVACIONES)
VALUES (106, 'SHAPE UP', '908 SEQUOIA', 'PALO ALTO', 'CA', '94301', 415,
        '364-9777', 7521, 6000, 
        'Support intensive. Orders small amounts (< 800) of merchandise at a time.');
INSERT INTO CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA, 
                      TELEFONO, REPR_COD, LIMITE_CREDITO, OBSERVACIONES)
VALUES (107, 'WOMEN SPORTS', 'VALCO VILLAGE', 'SUNNYVALE', 'CA', '93301', 408,
        '967-4398', 7499, 10000, 
        'First sporting goods store geared exclusively towards women. Unusual promotion al style and very willing to take chances towards new PRODUCTOs!');
INSERT INTO CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA, 
                      TELEFONO, REPR_COD, LIMITE_CREDITO, OBSERVACIONES)
VALUES (108, 'NORTH WOODS HEALTH AND FITNESS SUPPLY CENTER', '98 LONE PINE WAY', 'HIBBING', 'MN', '55649', 612,
        '566-9123', 7844, 8000, '');
INSERT INTO CLIENTE (CLIENTE_COD, NOMBRE, DIREC, CIUDAD, ESTADO, COD_POSTAL, AREA, 
                      TELEFONO, REPR_COD, LIMITE_CREDITO, OBSERVACIONES)
VALUES (109, 'SPRINGFIELD NUCLEAR POWER PLANT', '13 PERCEBE STR.', 'SPRINGFIELD', 'NT', '0000', 636,
        '999-6666', NULL, 10000, '');



CREATE TABLE IF NOT EXISTS PRODUCTO (
 PROD_NUM     INT (6) UNSIGNED PRIMARY KEY,
 DESCRIPCION   VARCHAR (30) NOT NULL  UNIQUE);


INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION)
VALUES (100860, 'ACE TENNIS RACKET I');
INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION)
VALUES (100861, 'ACE TENNIS RACKET II');
INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION)
VALUES (100870, 'ACE TENNIS BALLS-3 PACK');
INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION)
VALUES (100871, 'ACE TENNIS BALLS-6 PACK');
INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION)
VALUES (100890, 'ACE TENNIS NET');
INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION)
VALUES (101860, 'SP TENNIS RACKET');
INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION)
VALUES (101863, 'SP JUNIOR RACKET');
INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION)
VALUES (102130, 'RH: "GUIDE TO TENNIS"');
INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION)
VALUES (200376, 'SB ENERGY BAR-6 PACK');
INSERT INTO PRODUCTO (PROD_NUM, DESCRIPCION)
VALUES (200380, 'SB VITA SNACK-6 PACK');


CREATE TABLE IF NOT EXISTS PEDIDO  (
 PEDIDO_NUM             SMALLINT(4) UNSIGNED PRIMARY KEY,
 PEDIDO_FECHA            DATE,
 PEDIDO_TIPO           CHAR (1) CHECK (PEDIDO_TIPO IN ('A','B','C')),
 CLIENTE_COD          INT (6) UNSIGNED NOT NULL,
 FECHA_ENVIO        DATE,
 TOTAL               DECIMAL(8,2) UNSIGNED,
 INDEX IDX_PEDIDO_CLIENTE_COD (CLIENTE_COD),  
 FOREIGN KEY (CLIENTE_COD) REFERENCES CLIENTE(CLIENTE_COD) );

CREATE INDEX PEDIDO_FECHA_NUM ON PEDIDO (PEDIDO_FECHA,PEDIDO_NUM);
CREATE INDEX PEDIDO_ENVIO_NUM ON PEDIDO (FECHA_ENVIO,PEDIDO_NUM);


INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (610, '1987-01-07', 'A', 101, '1987-01-08', 101.4);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (611, '1987-01-11', 'B', 102,'1987-01-11', 45);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (612, '1987-01-15', 'C', 104, '1987-01-20', 5860);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (601, '1986-05-01', 'A', 106, '1986-05-30', 2.4);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (602, '1986-06-05', 'B', 102, '1986-06-20', 56);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (604, '1986-06-15', 'A', 106, '1986-06-30', 698);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (605, '1986-07-14', 'A', 106,  '1986-07-30', 8324);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (606, '1986-07-14', 'A', 100,  '1986-07-30', 3.4);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (609, '1986-08-01', 'B', 100,  '1986-08-15', 97.5);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (607, '1986-07-18', 'C', 104,  '1986-07-18', 5.6);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (608, '1986-07-25', 'C', 104,  '1986-07-25', 35.2);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (603, '1986-06-05', NULL, 102, '1986-06-05', 224);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (620, '1987-03-12', NULL, 100, '1987-03-12', 4450);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (613, '1987-02-01', NULL, 108, '1987-02-01', 6400);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (614, '1987-02-01', NULL, 102, '1987-02-05', 23940);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (616, '1987-02-03', NULL, 103, '1987-02-10', 764);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (619, '1987-02-22', NULL, 104, '1987-02-04', 1260);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (617, '1987-02-05', NULL, 104, '1987-03-03', 46370);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (615, '1987-02-01', NULL, 107, '1987-02-06', 710);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (618, '1987-02-15', 'A', 102, '1987-03-06', 3510.5);
INSERT INTO PEDIDO (PEDIDO_NUM, PEDIDO_FECHA, PEDIDO_TIPO, CLIENTE_COD, FECHA_ENVIO, TOTAL)
VALUES (621, '1987-03-15', 'A', 100, '1987-01-01', 730);



CREATE TABLE IF NOT EXISTS DETALLE  (
 PEDIDO_NUM             SMALLINT(4) UNSIGNED,
 DETALLE_NUM          SMALLINT(4) UNSIGNED,
 PROD_NUM            INT(6) UNSIGNED NOT NULL,
 PRECIO_VENTA          DECIMAL(8,2) UNSIGNED,
 CANTIDAD           INT (8),
 IMPORTE              DECIMAL(8,2),
 CONSTRAINT DETALLE_PK PRIMARY KEY (PEDIDO_NUM,DETALLE_NUM),
 INDEX IDX_DETAL_PEDIDO_NUM (PEDIDO_NUM),
 INDEX IDX_PROD_NUM (PROD_NUM),
 FOREIGN KEY (PEDIDO_NUM) REFERENCES PEDIDO(PEDIDO_NUM),
 FOREIGN KEY (PROD_NUM) REFERENCES PRODUCTO(PROD_NUM));


CREATE INDEX DETALLE_PROD_COM_DET ON DETALLE (PROD_NUM,PEDIDO_NUM,DETALLE_NUM);


INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (610, 3, 100890, 58, 1, 58);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (611, 1, 100861, 45, 1, 45);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (612, 1, 100860, 30, 100, 3000);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (601, 1, 200376, 2.4, 1, 2.4);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (602, 1, 100870, 2.8, 20, 56);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (604, 1, 100890, 58, 3, 174);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (604, 2, 100861, 42, 2, 84);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (604, 3, 100860, 44, 10, 440);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (603, 2, 100860, 56, 4, 224);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (610, 1, 100860, 35, 1, 35);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (610, 2, 100870, 2.8, 3, 8.4);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (613, 4, 200376, 2.2, 200, 440);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (614, 1, 100860, 35, 444, 15540);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (614, 2, 100870, 2.8, 1000, 2800);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (612, 2, 100861, 40.5, 20, 810);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (612, 3, 101863, 10, 150, 1500);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (620, 1, 100860, 35, 10, 350);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (620, 2, 200376, 2.4, 1000, 2400);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (620, 3, 102130, 3.4, 500, 1700);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (613, 1, 100871, 5.6, 100, 560);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (613, 2, 101860, 24, 200, 4800);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (613, 3, 200380, 4, 150, 600);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (619, 3, 102130, 3.4, 100, 340);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (617, 1, 100860, 35, 50, 1750);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (617, 2, 100861, 45, 100, 4500);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (614, 3, 100871, 5.6, 1000, 5600);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (616, 1, 100861, 45, 10, 450);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (616, 2, 100870, 2.8, 50, 140);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (616, 3, 100890, 58, 2, 116);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (616, 4, 102130, 3.4, 10, 34);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (616, 5, 200376, 2.4, 10, 24);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (619, 1, 200380, 4, 100, 400);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (619, 2, 200376, 2.4, 100, 240);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (615, 1, 100861, 45, 4, 180);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (607, 1, 100871, 5.6, 1, 5.6);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (615, 2, 100870, 2.8, 100, 280);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (617, 3, 100870, 2.8, 500, 1400);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (617, 4, 100871, 5.6, 500, 2800);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (617, 5, 100890, 58, 500, 29000);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (617, 6, 101860, 24, 100, 2400);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (617, 7, 101863, 12.5, 200, 2500);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (617, 8, 102130, 3.4, 100, 340);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (617, 9, 200376, 2.4, 200, 480);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (617, 10, 200380, 4, 300, 1200);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (609, 2, 100870, 2.5, 5, 12.5);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (609, 3, 100890, 50, 1, 50);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (618, 1, 100860, 35, 23, 805);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (618, 2, 100861, 45.11, 50, 2255.5);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (618, 3, 100870, 45, 10, 450);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (621, 1, 100861, 45, 10, 450);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (621, 2, 100870, 2.8, 100, 280);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (615, 3, 100871, 5, 50, 250);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (608, 1, 101860, 24, 1, 24);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (608, 2, 100871, 5.6, 2, 11.2);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (609, 1, 100861, 35, 1, 35);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (606, 1, 102130, 3.4, 1, 3.4);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (605, 1, 100861, 45, 100, 4500);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (605, 2, 100870, 2.8, 500, 1400);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (605, 3, 100890, 58, 5, 290);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (605, 4, 101860, 24, 50, 1200);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (605, 5, 101863, 9, 100, 900);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (605, 6, 102130, 3.4, 10, 34);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (612, 4, 100871, 5.5, 100, 550);
INSERT INTO DETALLE (PEDIDO_NUM, DETALLE_NUM, PROD_NUM, PRECIO_VENTA, CANTIDAD, IMPORTE)
VALUES (619, 4, 100871, 5.6, 50, 280);



