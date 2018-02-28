# Stratusolve Exercise
This exercise evaluates a basic understanding of PHP, jQuery, HTML &amp; CSS. It makes use of the bootstrap UI framework along with the jquery javascript library. All server actions are done in PHP.

### Assignment
You will be creating a basic PHP web app that allows a user to create and modify tasks in a task list type of app. Tasks will be stored in a file as a json encoded string (for the purposes of this exercise).
The final result should be a 1 page app that displays a list of tasks and allows the user to click on a task to edit it in a modal (reference bootstrap modals). The user should also be able to create a new task from scratch as well as delete existing tasks.
* You will need to implement the jquery and html code on the frontend to display the task information
* You will need to implement the jquery code on the frontend that sends the task information to the server
* You will need to implement a PHP class that will be able to handle the modification of the task object
* You will need to implement a PHP script that receives a POST with the object information and then either updates, creates or deletes the task object

To start, fork this repo and continue within the existing code to complete the assignment. Once you are done, please send an email to info@stratusolve.co to let us know.

Key functions that will be required are:

In PHP:
* json_encode();
* json_decode();

In jQuery:
* $.post();
* Functions to update html elements on the page

Prerequisites:
* PHP and Apache running on your local machine. For more information on how to set this up, visit https://www.mamp.info/en/


------------------------------ My solution execution ------------------------------------------------------------

1. Upon reviewing your application on the front end i noticed add new task, delete and edit funtionality share the same modal, with the delete button been hidden from the add functionality and switching the modal heading accordingly.

2. On the server side i noticed that task.class.php handles the task object but reading from the file Task_Data.txt as json object.

3. The task.class.php handles the task objects
4. Your task.class.php handles the task object from the file and i will create services as models to get json object reading from
   the database.

5. Will chance few things from the task.class.php
6. I have run the export on my local database for the created table and have included it on the project. 
7. Also i have created a database connection scrip and included on the projects.
8. I have also  updated the list_tasks.php as it will now read from the database not the file.
9. In the update_task.php i have decode the json object from the ajax call and perform create or update according to the current id.   
 
