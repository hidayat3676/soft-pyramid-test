# soft-pyramid-test

# Usage

After clonning and basic setup of laravel like running <code>composer install </code> and creating db and adding it's credentials in <code>.env</code>
file.

# Step 1

 run 
 
 <code>php artisan migrate</code>
 
 # Step 2
 
 for admin user run seeder as below
 
 <code>php artisan db:seed --class=AdminSeeder
 
 Admin credentials:
 
 - Email: admin@admin.com
 
 - password:<strong> admin123</strong>
 
 </code>
 
 # Step 3
 
 create simple user using registration option provided, admin and user can login using the same login form and they will be redirected to their own 
 dashboard accroding to their role.
 
 # Step 4

 once user is created using registration option they will perform their task as mentioned in the requirements and admin can perform their own.
 
 
