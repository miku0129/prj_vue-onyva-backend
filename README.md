# Tech stacks 

* Use PHP with [Laravel](https://laravel.com/) as the framework, [Laragon](https://laragon.org/) for local development.
    * Use MySQL as the database.
    * Use Laravel artisan and [postman](https://www.postman.com/) for testing the code.

* Use OVH web-hosting for production.
    * Use FileZilla and phpMyAdmin for production deployment.
    * I chosed OVH because it's GDPR compatible.
    * Frontend and Backend are separated for enchancing security.  

# API 

* Made sample API for CRUD functionality.
* GET
    * Get all students: https://app.msano.ovh/www/api/etudiant
    * Get one student: https://app.msano.ovh/www/api/etudiant/{id}
* Post
    * Create a student: https://app.msano.ovh/www/api/etudiant
* PUT
    * Update a student: https://app.msano.ovh/www/api/etudiant/edit/{id}
* DELETE
    * Delete a student: https://app.msano.ovh/www/api/etudiant/delete/{id}
