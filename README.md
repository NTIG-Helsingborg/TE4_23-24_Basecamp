# BaseCamp: Empowering Education Nationwide 🚀

## Welcome

Welcome to BaseCamp, your premier educational platform connecting students and individuals across Sweden to a wealth of free course materials. Our mission is to provide accessible and comprehensive learning resources, fostering a community of knowledge seekers and educators.

## Vision

BaseCamp envisions a dynamic learning environment where teachers from diverse backgrounds contribute an array of materials, including videos, articles, and informative content. Initially focusing on technical topics such as programming, web development, and web server programming, we aim to expand our course offerings as the project evolves.

## Key Features

- **Teacher Collaboration**

  - Empower educators from all corners of Sweden to share their expertise.
  - Collaborate seamlessly to create a rich repository of educational content.

- **Diverse Learning Materials**

  - Access a variety of learning materials, including videos, articles, and presentations.
  - Explore a range of technical topics to suit your educational needs.

- **User-Friendly Interface**
  - Navigate BaseCamp with ease and efficiency.
  - Enjoy a streamlined experience while discovering and consuming educational content.

## Streamlined Learning Paths

One of our primary goals is to centralize all necessary materials for the courses in one place, presented in a structured manner. This ensures that students have a clear roadmap on how to get started, what to study, and how to navigate their subjects effectively. By doing so, we aim to enhance productivity, ultimately leading to better results for every learner.

## Server Setup

To start, download [php](https://windows.php.net/download/) (choose VS16 x64 Thread Safe Zip option) and extract. Then, install the "phpserver" extension in VSCode.

In VSCode, press `CTRL + ,` and search for `phpserver:php config path`. Set the config path (e.g., `C:\Program Files\php\php.ini-development`).

Edit the `php.ini-development` file: remove `;` from lines with `;extension_dir = "ext"`, `;extension=pdo_sqlite`, and `;extension=sqlite3`.

Finally, change "PHP Path" to your PHP executable path (e.g., `C:\Program Files\php\php.exe`). Now, go to `index.php`, right-click, and select "PHP Server: Serve Project."
