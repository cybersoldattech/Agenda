
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
   #### clone the project
   git clone https://github.com/cybersoldattech/Agenda.git
   #### enter in the project
   cd Agenda
   #### put .env file and setup your database and you mail configuration and others
   cp .env.example .env
   #### generate the project key
   php artisan key:generate
   #### install dependencies
   composer install &&
   npm install
   #### migrate your database
   php artisan migrate
   #### start you project
   php artisan serve
   
   
