<?php
/**
 * This is our config file, from here, we can load up any configuration things we
 * may need through our whole app.
 */

return [
   // Database configuration values. This stuff is going to be
   // different on every machine, better to have one central
   // location to make these changes
   'database' => [
      'type' => 'mysql',
      'host' => '127.0.0.1',
      'dbname' => 'rutgers_ecomm',
      'username' => 'root', // the username for your local install of mySQL
      'password' => 'password' // the password for your local mysql install
   ]
];
