# FEEDIER FEEDBACK IMPORT APP
## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- SET  __FEEDIER_BASE_UEL__ AND  __FEEDIER_API_KEY__
- Run __composer install__
- Run __php artisan key:generate__
- RUN __php artisan schedule:run__ TO RUN THE IMPORT CRON JOB 
- Run __php artisan serve__
- That's it: launch the main URL.
- You can GO TO __http://127.0.0.1:8000/feedbacks__


## Run Testing
- __vendor/bin/phpunit__ __tests/Feedier__

## STACKS

- __PHP__ __8__
-__LARAVEL__ __9__
- __maatwebsite/excel__ __Package__
