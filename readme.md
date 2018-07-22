

## Overall Heuristic Laravel Startup




## ROLES  && Slugs

-  Super Admin  |   super-admin
-        Admin  |   admin
-        User   |   user





## Getting users with roles

<code>
[
<?php


  if(auth()->user()->hasRole('super-admin')){
    echo "super admin";
}

if(auth()->user()->hasRole('user')){
    echo "user";
}

if(auth()->user()->hasRole('admin')){
    echo "admin";
}
   
?>
]
</code>

#instructions

1. first fork the repo
2. go to your root directory on your terminal and run : composer install
3. create your .env file & setup your database 
4. $ php artisan migrate
5. $ php artisan db:seed




#Features
1. helpers files with reusable methods
2. roles and users + userdetails setup
3. errors file in partials/errors