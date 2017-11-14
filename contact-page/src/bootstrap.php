<?php
   // We're going to create a global $app variable that we can store important
   // application related things in (we're not going to store users or passwords here)
   $app = [];

   // Now we're going to load all our configuration stuff into a config array
   $app['config'] = require '../config.php';

   // Our helper functions
   require 'functions.php';

   require 'Router.php';
   require 'Request.php';

   // DB Connections
   require 'database/Connection.php';
   require 'database/QueryBuilder.php';

   // Now we load $app['database'] with our query builder and we pass
   // Connection::make() our database configuration array
   $app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
