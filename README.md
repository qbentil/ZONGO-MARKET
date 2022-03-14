# ZONGO-MARKET
######  USER GUIDE 
               
ZONGO MARKET seeks to improve online sales and help admins to manage and maintain thier online presence through good customer services


##   USAGE  ##

 ##  INSTALLING XAMPP

***WINDOWS***
1. Double-click the file 'xampp-windows-x64-8.0.2-0-VS16-installer.exe' from the "requirements/windows" directory.
2. Follow the basic installation prompts to install xampp.
3. Follow the link below to install it if having any difficulties in the steps.
    https://www.wikihow.com/Install-XAMPP-for-Windows
    ## Set Apache and mysql to auto start.
    1. Navigate to you xampp directory. usually at "C:\xampp"
    2. Run"xampp-control.exe" as administrator
    3. Check the Appache and MySql checkboxes under services to install them.
    4. Click on "Config" from the top right corner of the window.
    5. Under "auto start modules", check the Apache and mySql check boxes
    6. Click on save.
***MAC OS***
1. Run the installer from "requirements/mac"  with the default options
2. Launch XAMPP
3. Start the services
4. Follow the link below to install it if having any difficulties in the steps.
    https://www.intelliwolf.com/how-to-install-xampp-step-by-step/

**************************
**Place zongo-market in the htdoc folder in the Xampp directory**
**************************


##   CREATE DATABASE
1. open "http://localhost/phpmyadmin/"
2. From the left tab menu, click on "new"
3. In the Database name field, enter "zongomarket" as databsae name.
4. click on create.

##  IMPORT QUERIES TO DATABASE
2. From the left tab menu, click on "shop" i.e. the new database created.
3. Click on "import" from the nav tabs.
3. Click on choose file.
4. Navgate to "C:\xampp\htdocs\kaya\public_html\database\temp" 
5. For "init.sql" or for demo with preloaded data, select "zongomarket.sql"
6. Click on "Go".

***DEFAULT STORE LOGIN***
### Checkout in .comfig file





