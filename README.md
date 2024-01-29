# BaseCamp: Empowering Education Nationwide 🚀

Welcome to BaseCamp, your premier educational platform connecting students and individuals across Sweden to a wealth of free course materials. Our mission is to provide accessible and comprehensive learning resources, fostering a community of knowledge seekers and educators.

# Vision

BaseCamp envisions a dynamic learning environment where teachers from diverse backgrounds contribute an array of materials, including videos, articles, and informative content. Initially focusing on technical topics such as programming, web development, and web server programming, we aim to expand our course offerings as the project evolves.

# Key Features

1. Teacher Collaboration

   Empower educators from all corners of Sweden to share their expertise.

   Collaborate seamlessly to create a rich repository of educational content.

2. Diverse Learning Materials

   Access a variety of learning materials, including videos, articles, and presentations.

   Explore a range of technical topics to suit your educational needs.

3. User-Friendly Interface

   Navigate BaseCamp with ease and efficiency.

   Enjoy a streamlined experience while discovering and consuming educational content.

# Streamlined Learning Paths

One of our primary goals is to centralize all necessary materials for the courses in one place, presented in a structured manner. This ensures that students have a clear roadmap on how to get started, what to study, and how to navigate their subjects effectively. By doing so, we aim to enhance productivity, ultimately leading to better results for every learner.

# Start the server

För att börja ska ni först ladda ner php[https://windows.php.net/download/] (välj VS16 x64 Thread Safe Zip option) och sedan extrahera.

Efter det installera "phpserver" extension och installera i vscode.

I VSCode tryck CTRL + , och sök sedan på phpserver:php config path . Där i måste ni placera er config path, i mitt fall C:\Program Files\php\php.ini-development .

Denna fil kommer ni dock att behöva ändra på. Ta bort ; på linorna där det står ;extension_dir = "ext" , ;extension=pdo_sqlite och ;extension=sqlite3

En sista sak som ni behöver göra är ändra "PHP Path", i mitt fall är det C:\Program Files\php\php.exe . Så den finns i samma foldern som .ini-development

Nu kan ni gå till index.php, högerklicka och sedan clicka på "PHP Server: Serve Project"
