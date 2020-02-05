**"Simple Codeigniter CRUD application (Create, Read, Update, Delete)"  MySql and Bootstrap 4 and concept to work with CodeIgnitor ** 

- How to configure a Codeigniter framework using config.php
- How to configure a database connection using database.php file
- How to autoload files libraries, helpers, models, etc. using autoload.php file
- How to create a Model in Codeigniter
- How to create a Controller in Codeigniter
- How to create a Model in Codeigniter
- How to use Active Query Builder in Codeigniter
- How to insert a record in a database.
- How to select a record in a database
- How to edit/update a record in a database
- How to delete a record in a database
- How to use session in Codeigniter
- How to use bootstrap in Codeigniter views.

---------

*** The follow instruction are the way to start the project and these way CRUD Application made. ***

** CRUD Application **

	C :- Create
	R :- Read
	U :- Update
	D :- Delete
	
** Follow are the step to create a CRUD Application in Codeigniter framework.**

	1) Download and Extract the Codeigniter framework in the htdocs folder.
	2) Configure Codeigniter using config.php and database.php and autoload libraries like session, database, form_validation, etc.
	3) Create a users table in the database using phpMyAdmin.
	4) Create a controller called User in the controllers folder. 
	6) Create views called list, create, edit in views folder.
	7) Create a model called User Model in the models folder.

**Add User:-**  

	8) To show Add User form, create a method called "create" in User controller.
	9) Load create view in "create" method.
	10) Write a "create" method in the User model to save a User in the database.
	11) Apply validation and save form values in database and show success messages.


**List Users:-**

	12) Create a method called "index" & Load "list" view in User controller to show all users using User_model.
	13) Write an "All" method in the User model for fetching all the user records.
	14) Write a loop to list all users in "list" view, also create an EDIT and DELETE button with links.


**Edit User:-**

	15) Create an edit method in User controller to edit a User
	16) Write a "getUser" method in the User model to fetch a single user row.
	17) Load edit user view to edit a user with prepopulate user data.
	18) Write a "updateUser" method in the User model to update a user record. 
	19) Apply validation & update form values in database and show success notification.


**Delete :-** 
	20) Create a delete method in the User controller.
	21) Write a "deleteUser" method in the User model to delete a user record from the database.
	22) Check if a record found in DB, if found then delete and redirect to list page with success message, else redirect with an error message.


