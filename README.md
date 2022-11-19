# Laravel-xlsx-File-Import-and-Export

Import and Export Excel file with Laravel 8.

## Installation

1-Clone the repository
```
git clone https://github.com/aymensmida/Laravel-xlsx-File-Import-and-Export.git
```

2- cd into the folder with this command:
```
cd Laravel-xlsx-File-Import-and-Export
```

3- composer install
```
composer install
```
4- generate key
```
php artisan key:generate
```

5-Then create a environment file using this command:
```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

6-Then create a database named `import_export_db` and then do a database migration using this command-
```
php artisan migrate
```

## Run server

7-Run server using this command:
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Technologies Used

- PHP Laravel Framework
- Bootstrap

## Package  Used

- **[Maatwebsite/Excel ](https://docs.laravel-excel.com/3.1/getting-started/installation.html)**


## Example Used Excel File
My sample excel file is Custom_file_users.xlsx file in public folder
`Public/Custom_file_users.xlsx`
