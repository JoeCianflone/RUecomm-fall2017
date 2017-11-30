<!doctype html> <!-- this is setting our HTML document as an HTML5 document...this is VERY important -->
<html lang="en">
    <head>
      <?php require 'parts/html_header.partial.php'; ?>
    </head>
    <body> <!-- Everything that you want to view, goes in the body...only ONE body per page -->

        <!--
            All the classes we're using here are Bootstrap specific, so don't focus too much
            on the class names. Focus on the structure of the document we've created.

            We've got a container class that will hold all the rest of our page, this is
            only really needed for the design of our site.
        -->
        <div class="container">
           <h1>Register</h1>
           <!-- forms need two things:
               1. action - once the form has been submitted where does it go? It goes to the ACTION
               2. method - how do we want this information submitted?
                   get - the get method sends all the data over appended to the URLs query string - all this infomration is available "in the clear" it is NOT SAFE TO USE GET FOR SENSITIVE DATA! EVER.
                         someone could even bookmark this page, with all the vaules there.
                   post - sends all the data in a way that does not store the data in the browser history or server logs. This is what you'll use to send
                          usernames/passwords to the server.

                http://www.diffen.com/difference/GET-vs-POST-HTTP-Requests
           -->
           <form action="form" method="post">
                <label for="name" class="form-group d-block">
                    Your Name
                    <input type="text" name="name" id="name" class="form-control" required>
                </label>
                <label for="email_address" class="form-group d-block">
                    Email Address?
                    <input type="email" name="email_address" id="email_address" class="form-control" required email>
                </label>
                <label for="password" class="form-group d-block">
                    Password
                    <input type="password" name="password" id="password" class="form-control">
                </label>
                <label for="password_confirm" class="form-group d-block">
                    Confirm Password
                    <input type="password" name="password_confirm" id="password_confirm" class="form-control">
                </label>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
           </form>
        </div>
    </body>
</html>
