<h1> Poison Information Management System </h1>

<p> This is a web application for poison department in teaching hospital at Jaffna. Basic task of this application is store & manage the patient details.



<h2> Install the project </h2>
                       
     ->  git clone https://github.com/dcs-university-of-jaffna/PIMS.git
     ->  composer update
     ->  php artisan key:generate 
     ->  php artisan serve
     
  If error occur rename  the .env.example file name to .env 



<h2> Connet the MySql Database</h2>
    
    ->Please refer Database_Structure.pdf for database detatils.

    -> create a database name PIMS
    -> php artisan migrate:fresh

    **If you need test data for testing**
    -> composer dump-autoload
    -> php artisan db:seed
     

    

     
         
 
    
