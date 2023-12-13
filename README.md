STUDENT MANAGEMENT SYSTEM
A web-based Student Management System built with Laravel will facilitate the creation, reading, updating, and deletion (CRUD) of student records by authorized users. Within this system, administrators will hold the power to create accounts for clerks, who will then assume the responsibility of verifying student information before granting them permission to print their identification cards.
======

## Disclaimer
This Student Management System is an educational project developed for demonstration and learning purposes only. It is not intended for commercial use or deployment in a real-world educational environment.

## Features

 * The system allows users to create, update, and delete student records, with the ability to create an initial admin account and enable the Clerk to verify student information before printing ID cards. 
 * Students can create accounts and access and update their personal information. 
 * The user interface is user-friendly, and the system also allows for verification before printing ID cards.
 * A printable view is created for easy printing of student information.

## How to utilize the student management system

### Login Page

* Enter your username and password based on your role (Admin, Clerk, or Student).
* Click Login.

### Register Page (For Student Only)

* If you are a student and doesn't have an account yet, click register.
* Enter your information and click register to verify and print your ID.

### Overview Page

* For Student, if your information is pending, it will prompt a notification to go to profile to edit your information.
* For Clerk and Administration, the web app will welcome you for a succes login.

### Administrator Functionality

Adding Clerk Account
* To add clerk account, go to clerk list and find the add button.
* Click the add button and enter the account credentials of the clerk, then click Save.

Verifying Student Information
* Go to student list and view the details of the student, to approve the student's information, click approve otherwise click decline.

### Clerk Functionality

Verifying Student Information
* Go to student list and view the details of the student, to approve the student's information, click approve otherwise click decline.

### Student Functionality

* Go to profile and edit your information, once the information is approved, you cannot edit it unless you will go to clerk and ask for modification of your details.
* At the right side of the student profile, you can see the printable view for ID click print to print your ID.



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
