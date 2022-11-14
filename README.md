
 Project installation:
  --------
    - Execute the command **composer update**
    - Rename the **.env.exaple** file to **.env** file
    - Execute the command **php artisan key:generate**
    - Execute the command **php artisan cache:clear**
    - Execute the command **php artisan config:clear**
    - Create **database.sqlite** file in directory **database**
    - Execute the command **php artisan migrate**
    - Execute the command **php artisan db:seed**
    
 Rules:
  --------
    - Any user can view the records
    - Only **authorized** user can create records
    - Only the **creator** of a record can edit or delete it
