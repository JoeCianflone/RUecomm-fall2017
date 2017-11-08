<?php
   // We hit this page and the first thing we do is bootstrap
   // some files, we pull in some stuff every file is going
   // to need
    $query = require '../src/bootstrap.php';

    // We've got this QueryBuilder variable, we can now
    // do stuff with it, let's grab all the data from
    // the contact_list table and  drop that into
    // the $results var
    $results = $query->getAll('contact_list');

    // dd ($results); // dd() the results if you'd like to see them

    // here we'll just display our view file
    // remember the "view.php" is just a convention
    // you can name it whatever you'd like
    require '../src/views/index.view.php';

