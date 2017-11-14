<?php
   // We hit this page and the first thing we do is bootstrap
   // some files, we pull in some stuff every file is going
   // to need
   require '../src/bootstrap.php';

   // Our Router will load the routes.php file and will attempt to GO to
   // the URI, if it can find it, if it can't it'll throw and Exception()...
   require Router::load('../routes.php')->go(Request::uri(), Request::type());

