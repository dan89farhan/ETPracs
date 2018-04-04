import sqlite3

conn = sqlite3.connect('test.db')
print ("Opened database successfully");

conn.execute("INSERT INTO Employee (ID,NAME,AGE,ADDRESS,SALARY) \
      VALUES (1, 'Farhan', 23, 'Mumbai', 20000.00 )");

conn.execute("INSERT INTO Employee (ID,NAME,AGE,ADDRESS,SALARY) \
      VALUES (2, 'Vishal', 25, 'Texas', 15000.00 )");

conn.execute("INSERT INTO Employee (ID,NAME,AGE,ADDRESS,SALARY) \
      VALUES (3, 'Shubham', 23, 'Norway', 20000.00 )");


conn.commit()
print ("Records created successfully");
conn.close()
