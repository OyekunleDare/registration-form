## DESCRIPTION
The project is used to manage the registration, login, reset password for users. The database used is a spreadsheet (.csv) file and not a myqsl, mysqli or any other available database
- The repository has the following
- index.php which is the landing page having links to register and sign in
- dashboard.php is the landing page after successful login
- DIR(FOLDER): assets/style.css
    - contains simple page style #<b>DO NOT EDIT</b>
- DIR(FOLDER): html> #<b>DO NOT EDIT</b>
  - Login.html which is the login page whose form actions is php/login.php
  - Register.html which is register page whose form action is php/register.php
  - Resetpassword.html which is the reset password page whose form action is php/reset.php
- DIR(FOLDER): php> #<b>WORK IN THIS FOLDER</b>
  - login.php which is the file meant to handle user login (and create user session)
  - register.php which is meant to handle user registration
  - reset.php which is meant to reset user password
  - logout.php which is meant to handle user logout (destroy user session)
