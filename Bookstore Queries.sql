CREATE TABLE AUTHOR(
	aID INT NOT NULL IDENTITY(1,1),	/* IDENTITY = AUTO_INCREMENT*/
	name varchar(100),
	email varchar(50) default NULL,
	
	CONSTRAINT pk1 PRIMARY KEY(aID)
	);


CREATE TABLE CATEGORY(
	catID CHAR(5) NOT NULL,
	cat_name VARCHAR(50),
	
	CONSTRAINT pk2 PRIMARY KEY(catID)
	);	


CREATE TABLE BOOK(
	bID CHAR(3) NOT NULL,
	price REAL NOT NULL,
	ISBN INT NOT NULL,
	title VARCHAR(200),
	book_img VARCHAR(100),
	quantity INT,
	catID CHAR(5),
	
	CONSTRAINT pk3 PRIMARY KEY(bID),
	CONSTRAINT fk1 FOREIGN KEY(catID) REFERENCES CATEGORY(catID)
	);


CREATE TABLE AUTHOR_BOOK(
	aID INT NOT NULL,
	bID CHAR(3) NOT NULL,
	
	CONSTRAINT pk4 PRIMARY KEY(aID, bID),
	CONSTRAINT fk2 FOREIGN KEY(aID) REFERENCES AUTHOR(aID),
	CONSTRAINT fk3 FOREIGN KEY(bID) REFERENCES BOOK(bID)
	);
	
	
CREATE TABLE CUSTOMER(
	cID INT NOT NULL IDENTITY(1,1),
	email VARCHAR(50) UNIQUE,
	telephone CHAR(10) ,
	password VARCHAR(8),
	full_name VARCHAR(100), 
	address_no INT,
	address_line1 VARCHAR(50),
	address_line2 VARCHAR(50),
	city VARCHAR(20),
	zip_code INT,
	state VARCHAR(20),
	country VARCHAR(20),
		
	CONSTRAINT pk5 PRIMARY KEY(cID),
	CONSTRAINT chk1 CHECK (password LIKE '[0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z]')
	);
	
		
CREATE TABLE ORDERS(
	o_num INT NOT NULL IDENTITY (1,1),
	quantity INT ,
	total_price REAL,
	placing_date DATE,
	payment_method CHAR(4),
		
	CONSTRAINT pk6 PRIMARY KEY (o_num),
	CONSTRAINT chk2 CHECK (payment_method IN ('card','bank','cash','gift'))		/*gift=gift voucher*/
	
	);


CREATE TABLE CUSTOMER_ORDER_BOOK(
	o_num INT NOT NULL,
	cID INT NOT NULL,
	bID CHAR(3) NOT NULL,
	quantity INT NOT NULL,
		
	CONSTRAINT pk7 PRIMARY KEY (o_num,cID,bID),
	CONSTRAINT fk4 FOREIGN KEY (o_num) REFERENCES ORDERS(o_num) ON DELETE CASCADE,
	CONSTRAINT fk5 FOREIGN KEY(bID) REFERENCES BOOK(bID) ON DELETE CASCADE,
	CONSTRAINT fk6 FOREIGN KEY (cID) REFERENCES CUSTOMER(cID) ON DELETE CASCADE
		
	);
		
		
CREATE TABLE FEEDBACK(
	fID INT NOT NULL IDENTITY(1, 1),
	feedback VARCHAR(500) NOT NULL,
	cID INT
	
	CONSTRAINT pk8 PRIMARY KEY(fID),
	CONSTRAINT fk7 FOREIGN KEY(cID) REFERENCES CUSTOMER(cID)
	);


CREATE TABLE Admin_login(
	aID INT NOT NULL IDENTITY(1, 1),
	admin_name VARCHAR(20),
	password VARCHAR(8),
		
	CONSTRAINT pk9 PRIMARY KEY(aID),
	CONSTRAINT chk3 CHECK (password LIKE '[0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z][0-9 A-Z a-z]')
	);