# BaseCamp
The aim of the project is for students and individuals from all over Sweden to have access to free course material on our site. Teachers from all over Sweden will upload videos, articles and information that are available for students and individuals to read. Initially, only technical topics will be included, programming, web development and web server programming. As the project grows, more courses will be available. 

# Start the server

För att börja ska ni först ladda ner php[https://windows.php.net/download/] (välj VS16 x64 Thread Safe Zip option) och sedan extrahera.

Efter det installera "phpserver" extension och installera i vscode.  


I VSCode tryck CTRL + ,  och sök sedan på phpserver:php config path . Där i måste ni placera er config path, i mitt fall C:\Program Files\php\php.ini-development . 

Denna fil kommer ni dock att behöva ändra på. Ta bort ;  på linorna där det står ;extension_dir = "ext" , ;extension=pdo_sqlite och ;extension=sqlite3

En sista sak som ni behöver göra är ändra "PHP Path", i mitt fall är det C:\Program Files\php\php.exe . Så den finns i samma foldern som .ini-development

Nu kan ni gå till index.php, högerklicka och "PHP Server: Serve Project"

