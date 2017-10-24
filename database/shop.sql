CREATE TABLE category (
  cat_id INTEGER PRIMARY KEY,
  cat_name VARCHAR NOT NULL
);

CREATE TABLE product (
  pro_id INTEGER PRIMARY KEY,
  pro_name VARCHAR NOT NULL,
  pro_description VARCHAR NOT NULL,
  pro_price REAL NOT NULL,
  pro_unit VARCHAR,
  cat_id INTEGER REFERENCES category NOT NULL
);

CREATE TABLE user (
  usr_username VARCHAR PRIMARY KEY,
  usr_password VARCHAR NOT NULL
);

INSERT INTO category VALUES (NULL, 'Books');
INSERT INTO category VALUES (NULL, 'Clothing');
INSERT INTO category VALUES (NULL, 'Electronics');
INSERT INTO category VALUES (NULL, 'Fruits');
INSERT INTO category VALUES (NULL, 'Home Care');
INSERT INTO category VALUES (NULL, 'Sports');
INSERT INTO category VALUES (NULL, 'Vegetables');

INSERT INTO product VALUES (NULL,
  'Apple',
  'Especially high in vitamin C, apples also provide vitamin A as a powerful antioxidant to help resist infection and scavenge free radicals that cause inflammation. They also contain a significant amount of fiber, which can help prevent absorption of LDL (bad) cholesterol.',
  2.89,
  '/kg',
  4
);

INSERT INTO product VALUES (NULL,
  'Pear',
  'A medium pear not only satisfies one whole serving of fruit, but is also an excellent source of fiber, good source of vitamin C, and provides 190 mg of potassium, which are all considered underconsumed nutrients by the DGA.',
  1.73,
  '/kg',
  4
);

INSERT INTO product VALUES (NULL,
  'Banana',
  'Bananas are a very good source of vitamin B6 and a good source of manganese, vitamin C, potassium, dietary fiber, potassium, biotin, and copper.',
  2.14,
  '/kg',
  4
);

INSERT INTO product VALUES (NULL,
  'Ajax Window Cleaner',
  'Easy to handle 500 mL of Spray N'' Wipe Glass Cleaner. It is suitable on most glass surfaces including windows, doors, mirrors and showers. It comes in a convenient trigger spray bottle which is refillable',
  3.78,
  NULL,
  5
);

INSERT INTO user VALUES('john', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
