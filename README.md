
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
   git clone git@github.com:cybersoldattech/Agenda.git
   #### Enter in the project
   cd Agenda
   #### Put .env file and setup your database and you mail configuration and others
   cp .env.example .env
   #### Install dependencies
   composer install &&
   npm install
   #### Generate the project key
   php artisan key:generate
   #### Migrate your database
   php artisan migrate
   #### Start you project
   php artisan serve
   
   
