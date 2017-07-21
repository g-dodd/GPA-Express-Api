# GPA Express Api

This project was generated with [Laravel](https://laravel.com) version 5.4. This project provides the API for the GPA Express App and is currently deployed on http://gpa-express-api.gregdodd.com. 

## Current Endpoints

`GET http://gpa-express-api.gregdodd.com/students` - Retrieves all students in the database

`POST http://gpa-express-api.gregdodd.com/students` - Adds a student into the database. Requires the following:

firstName: string
lastName: string
dob: string (Format: YYYY-MM-DD)
gpa: number (FOrmat: x.xx)