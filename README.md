
 Contacts
  --------
 
 Project installation:
    1. Execute the command "composer update"
    2. Rename the ".env.exaple" file to ".env" file
    3. Execute the command "php artisan key:generate"
    4. Execute the command "php artisan cache:clear"
    5. Execute the command "php artisan config:clear"
    6. Create "database.sqlite" file in directory "database"
    7. Execute the command "php artisan migrate"
    8. Execute the command "php artisan db:seed"

Rules:
    1. Any user can view the records
    2. Only authorized user can create records
    3. Only the creator of a record can edit or delete it
