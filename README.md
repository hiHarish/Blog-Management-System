# Blog-Management-System

## Table of Contents
- [Project Overview](#project-overview)
- [Technologies Used](#technologies-used)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Project Overview

The Blog Management System is a web application built using the Laravel framework that allows users to create, edit, delete, and manage blog posts. It provides a user-friendly interface for managing content and enhances the blogging experience for both administrators and readers.

## Technologies Used

- **Laravel**: PHP framework for building web applications.
- **MySQL**: Database management system for storing blog posts and user data.
- **HTML/CSS**: For structuring and styling the front end.
- **Bootstrap**: Front-end framework for responsive design.
- **JavaScript**: For interactive elements and user experience enhancements.

## Features

- User authentication (registration, login, password reset)
- CRUD operations for blog posts (Create, Read, Update, Delete)
- Rich text editor for blog content
- Categories and tags for organizing posts
- Search functionality
- User profiles and comments
- Responsive design for mobile and desktop devices

## Installation

To set up the Blog Management System locally, follow these steps:

1. **Clone the repository**:
   git clone https://github.com/your-username/Blog-Management-System.git


2. Navigate into the project directory:
   cd Blog-Management-System
   Install dependencies:
    composer install

3. Set up the environment:
   Copy the .env.example file to .env and update the database credentials:
   cp .env.example .env

4.Run database migrations:
php artisan migrate

5.Serve the application:
php artisan serve
