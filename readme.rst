Today we are going to explain how to insert Excel bulk details insert to the database and display them in view format. In this, you can easily insert Excel bulk details insert to the database and display them in view format.

Excel Details Insert To Php Mysql Using Codeigniter Steps:

Here are the steps to insert Excel bulk details insert to the database and display them in view format.


STEP 1 :                   

Install the latest version of Codeigniter and set up the required configuration like config, autoload and database setup.
Open Application config file, in that file, open autoload and set the database, Form_validation, and session in autoload libraries and set the URL, form, file in autoload helper.

Then we need to set up the base URL in the config file. Open config file and set the required folder name where your Excel folder should be.
After the configuration, you need to set the Database name so that your Crud operation details will insert into the database.
For Crud operation, you need to include the js source(Online CDN) file and CSS file in assets. So that your Excel details operation will process.
Then you need to add library files for accessing excel details.

STEP  2:

You need to create Controller file in the name of php controller folder.In that Excel_import.php file you can insert your excel file details to database.
Excel_import.php(Controller):

Check Samples in Link https://bwebs.in/queries/how-to-import-excel-and-csv-file-using-codeigniter/  

STEP 4:   

Excel_data (Database)_

You need to save your Excel file details to the database.
For that create a Database named called in that database you need to create a table.
The table is for Excel details to be inserted into the database. And the name is

 

STEP 5: 

Excel_file (excel file)_

The imported excel file is in the name of Excel_file and uses this file to import and file details are inserted into the database.

STEP 6:  

Open the browser and the URL http://localhost/Excel/ then import the excel file and inserted details are displayed in table format.
