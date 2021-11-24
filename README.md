
                                                    _       
                                                   | |      
                          __ _  __ _  ___ _ __   __| | __ _ 
                         / _` |/ _` |/ _ \ '_ \ / _` |/ _` |
                        | (_| | (_| |  __/ | | | (_| | (_| |
                         \__,_|\__, |\___|_| |_|\__,_|\__,_|
                                __/ |                       
                               |___/  


## About Agenda

Agenda is a Web application allowing you to manage your events (create, modify, delete).:

## Installation
   #### Clone the project
   git clone https://github.com/cybersoldattech/Agenda.git
   #### Or
   #### Enter in the project
   cd Agenda
   #### Put .env file and setup your database and you mail configuration and others
   cp .env.example .env
   #### Generate the project key
   php artisan key:generate
   #### Install dependencies
   composer install &&
   npm install
   #### Migrate your database
   php artisan migrate
   #### Start you project
   php artisan serve
   
   
