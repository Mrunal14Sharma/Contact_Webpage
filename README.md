
# Contact Webpage

This project demonstrates a responsive webpage built using PHP for server-side logic and CRUD (Create, Read, Update, Delete) operations on a database. The webpage is designed to adapt to different screen sizes for optimal user experience.


## Prerequisites
- Web server (Apache, Nginx, etc.)
- PHP
- MySQL database
- Basic understanding of HTML, CSS, PHP, and JavaScript
## Features

- Add Contacts
- Preview Contacts 
- Edit/Update Contacts
- Delete Contacts


## Installation
- Create a database:
Set up a MySQL database with the desired name and structure. Create a table to store your data.
- Configure database connection:
Update the database connection details in the db_conn.php file with your database credentials.
- Set up web server:
Place the project files in your web server's document root.
- Ensure permissions:
Make sure the web server has the necessary permissions to read and write files.

    
## Procedure to use project
- Download The ZIP file From https://github.com/Mrunal14Sharma/Contact_Webpage.git 
- Unzip The file in Htdocs Folder which is located in XAMPP folder(Your selected directory).
- start the server by "XAMPP control panel".
- Import the database file "contact_list.sql" in phpmyadmin.
- Open a web browser and navigate to the URL where you deployed the project.
- Use the provided forms and buttons to create, read, update, and delete records.

- NOTE :- DON'T FORGET TO IMPORT THE DATABASE FILE. OTHERWISE THE PROJECT WON'T WORK.
## Project Structure
- index.php: Main page displaying data from the database.
- add_new.php: Form for creating new records.
- edit.php: Form for updating existing records.
- delete.php: Handles record deletion.
- db_conn.php: Stores database connection details.
- style.css: Contains CSS styles for the webpage.
## Technologies Used
- PHP: Server-side scripting for data handling.
- HTML: Structure of the webpage.
- CSS/Bootstrap: Styling of the webpage.
- JavaScript: Enhancing user interaction (optional).
- MySQL: Database for storing data.
## Responsiveness
The webpage is designed to be responsive using CSS media queries. The layout adapts to different screen sizes, ensuring optimal viewing on desktops, tablets, and mobile devices.
## Additional Notes
- Security: Implement proper security measures to protect your database and user data.
- Error handling: Include error handling to provide informative messages to the user.
- User experience: Focus on creating a user-friendly interface with clear instructions.
- Code quality: Write clean and well-structured code for maintainability.