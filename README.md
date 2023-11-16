# Contacts Project

The Contacts project is a simple Single Page Application (SPA) for managing contacts. It includes a backend developed with PHP/Laravel and a frontend built using Html, Css & jQuery.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Application](#running-the-application)
- [API Endpoints](#api-endpoints)
- [Questions](#questions)

## Installation

### Backend (PHP/Laravel)

1. Clone the repository:

    ```bash
    git clone https://github.com/stabish71/contacts-ismg.git
    cd contacts-ismg
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Create a copy of the `.env.example` file and rename it to `.env`. Update the database configuration and other necessary settings:

    ```bash
    cp .env.example .env
    ```

4. Generate the application key:

    ```bash
    php artisan key:generate
    ```

5. Run the database migrations:

    ```bash
    php artisan migrate
    ```
6. Update contacts table with 1 million records:

    ```bash
    php artisan app:sync-contacts
    ```

### Frontend (HTML, CSS And jQuery)

1. Used basic HTML, CSS and jQuery cause had time limitation, tried to focus more on functionality.


## Configuration

### Backend

- Set up your database connection in the `.env` file:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=your-database-host
    DB_PORT=your-database-port
    DB_DATABASE=your-database-name
    DB_USERNAME=your-database-username
    DB_PASSWORD=your-database-password
    ```

### Frontend

- No Configuration Required (Make sure you are connected to Internet when running application as the CSS and jQuery have CDN link where it will load the library).
    ```

## Running the Application

### Backend(Normal Laravel Serve)

1. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

   The API will be accessible at `http://localhost:8000`.

### Backend(via Virtual Host - apache for http(s)://contacts.io)

1. Navigate to the Apache Configuration Directory
2. Create a New Virtual Host Configuration File
3. Add Virtual Host Configuration
4. Enable the Virtual Host
5. Reload Apache
6. Edit the Hosts File
7. Restart Apache
8. Visit http(s)://contacts.io on browser and check

## API Endpoints

- **GET "/api/contacts?page=1&search_by=name&search_value=test":**
  Search for contacts using multiple keywords across all fields.

- **POST "/api/add-contact":**
  formdata {
    name : 'test',
    email : 'test@example.com',
    job_title : 'CEO',
    date : 2023-11-23

  }
  Add a new contact along with a predefined title.

## Questions
  
  1. What measures you took in above app to handle millions of records? Or what measures would you took to optimize it (even if you didn't implemented it in the app because of time limitation)?
  2. If i would ask you to ingest in a DB, 100 mil records from a csv file stored on an SFTP server, what would you do to optimize the whole process?
  3. If you would be asked to run a deduplication algorithm for the above Contacts table, would you do it at the code or at DB level. Why?
  4. In an application that works with a lot of data and the data is transformed through a lot of sequential algorithms on a daily basis (and let's say the whole process takes 4hours), how would you ensure that all algorithms get executed properly or the code is doing what is supposed to do?

  All Questions have been answered in demo video.
