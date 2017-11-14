<!doctype html> <!-- this is setting our HTML document as an HTML5 document...this is VERY important -->
<html lang="en">
    <head>
      <?php require 'parts/html_header.partial.php'; ?>
    </head>
    <body>
        <div class="container">
           <h1 class="mb-5 mt-3">DB Data</h1>
           <div class="row">
              <div class="col-md-12">
                 <table class="table table-striped">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Email</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php foreach ($results as $item): ?>
                           <tr>
                              <td><?=$item->id; ?></td>
                              <td><?=$item->name; ?></td>
                              <td><?=$item->email_address; ?></td>
                           </tr>
                       <?php endforeach; ?>
                     </tbody>
                 </table>
              </div>
           </div>


        </div>
    </body>
</html>
