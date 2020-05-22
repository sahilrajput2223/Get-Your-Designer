Get Your Designer
-----

### Introduction

Get-Your-Designer website is based on fashion field. In this web-app Admin can add designer and then designer can manage there profile. Designer can also upload there design work online and user can buy or give feedback on it. Also user can Like/Dislike it. User can register by his/her self and manage there bookings and account.

### Overview

This app is nearly complete. It is only missing one thing… real data! 

* creating new venues, artists, and creating new shows.
* searching for venues and artists.
* learning more about a specific artist or venue.

### Tech Stack

Our tech stack will include:

* **MySQL** as our database of choice
* **PHP** as our language
* **Apache Tomcat** as our server
* **HTML**, **CSS**, and **Javascript** with [Bootstrap 3](https://getbootstrap.com/docs/3.4/customize/) for our website's frontend



Instructions
-----

1. Understand the Project Structure and where important files are located.
2. Make sure you have on this path: Get-Your-Designer\Designer\images\ (in images folder, add post folder if not available)
3. Make sure you have XAMP installed and start Apache and MySQL services
4. Add EMail Id and password so email communication is done. 
	1. Get-Your-Designer\Admin\mvc\profile_mail.php -> line number = 22, 28 (Add Email)
	2. Get-Your-Designer\Admin\mvc\profile_mail.php -> line number = 23 (Add Email Password)
	3. Get-Your-Designer\Admin\mvc\register_mail.php -> line number = 21, 27 (Add Email)
	4. Get-Your-Designer\Admin\mvc\register_mail.php -> line number = 22 (Add Email Password)
	5. Get-Your-Designer\User\mvc\register_otp_mail.php -> line number = 21, 27 (Add Email)
	6. Get-Your-Designer\User\mvc\register_otp_mail.php -> line number = 22 (Add Email Password)
	7. Get-Your-Designer\User\mvc\forgot_password_mail.php -> line number = 21, 27 (Add Email)
	8. Get-Your-Designer\User\mvc\forgot_password_mail.php -> line number = 22 (Add Email Password)




To Run Project
-----

1. Start Apache and MySQL services from XAMP
2. Place Get-Your-Designer project foler in XAMP\htdocs\ folder
3. Make get_your_designer empty database and import get_your_designer.sql file in PhpMyAdmin
4. Go To http://localhost/Get-Your-Designer/ 
