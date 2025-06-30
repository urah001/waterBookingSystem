
# editting
started this project 
changed the extension of some files : index.php => index.html , login.php => login.html
`because` the broswer doesnt run a php file as a format document but as a multimedia document which is downloadable 

# discovered 
the login doesnt work well 
fix it , turns out the implementation of the php is wrong 


# SQL 
`sql queries to add missing tables `
ALTER TABLE users
ADD COLUMN f_name VARCHAR(255) AFTER username,
ADD COLUMN l_name VARCHAR(255) AFTER f_name,
ADD COLUMN email VARCHAR(255) AFTER l_name,
ADD COLUMN phone VARCHAR(20) AFTER email,
ADD COLUMN address TEXT AFTER password;
