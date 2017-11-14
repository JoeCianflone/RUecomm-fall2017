<?php

   // Check out the html_header.partial.php file to see how this is being used
   $title = "About";

   // We've got this QueryBuilder variable, we can now
   // do stuff with it, let's grab all the data from
   // the contact_list table and  drop that into
   // the $results var
   $results = $app['database']->getAll('contact_list');

   require '../src/views/about.view.php';

