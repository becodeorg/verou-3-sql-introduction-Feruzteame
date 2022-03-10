# solution
## number 2
1. `INSERT INTO groups( id,name, location, start_date, max_participants)
   VALUES (1, blue cheese, Gent, 2021-dec-14, 5);`

2. `INSERT INTO learners (id, name, email, active)
   VALUES (1, Feruz, feruz@gmail.com, No);
   VALUES (2, Ahmed, ahmed@gmail.com, No); 
   VALUES (3, Jawit, jawit@gmail.com, No);`
3. `INSERT INTO Coaches (id, name)
   VALUES (1, Basile);
   VALUES (2, Bert)`

## number 3

1. `SELECT * FROM groups;`
2. `ALTER TABLE learners CHANGE name learners_name VARCHAR(255);`

## number 4
 1. `UPDATE groups SET start_date = "2022-02-14" limit 1`
 2. `ALTER TABLE status ADD description varchar(255);`

## number 5
 2. `DELETE FROM learners WHERE learners_name="Feruz";`
