<?php

   // Our helper functions
    require 'functions.php';

    // DB Connections
    require 'database/Connection.php';
    require 'database/QueryBuilder.php';

    // return an instance of the QueryBuilder so we can use it...
    return new QueryBuilder(Connection::make());