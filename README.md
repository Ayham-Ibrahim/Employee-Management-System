
## Emploee Management System
Simple system that allows for managing departments and employees within those departments
The system will feature a user authentication mechanism, CRUD operations for managing departments and employees, relationships between departments and employees, soft deletion of records, and an API to interact with the system.


## Testing the system 
In terminal 
first, you have to git clone
```bash
git clone https://github.com/Ayham-Ibrahim/Employee-Management-System.git
```

after getting a clone from this repo follow this steps

```bash
cd <project folder-name>
composer install
cp .env.example .env
php artisan key:generate

```
you should to migrate the database so do this 
```bash
php artisan migrate
```
now you are ready to start testing
then run the project 
```bash
php artisan serve
```

now you can use this documentation (that i made it by Postman) to test the apis
```bash
https://documenter.getpostman.com/view/30465364/2sA3Bt2pmB
```
#### follow this step because the is alot of relation 
1- add department 
you can use the seeder i made befor (run this command )
```bash
php artisan db:seed --class=DepartmentSeeder
```
2- add Employee

3- add project and Note 


