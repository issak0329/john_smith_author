<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>John Smith</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    </head>
    
    <body>

        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>

                <!-- Three line "hamburger" icon for the collapsed navigation -->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <!-- Title on nav bar -->
              <a class="navbar-left"><img src="img/content/john_smith.png" alt="Main Graphic" width="50" height="50" style="padding:2px"></a>
              <a class="navbar-brand" href="index.php">John Smith</a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="newspage.html">News Page</a></li>
                <li><a href="books.html">Books</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">Sign Up</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container">
          <div class="below_menu_container">
            <div class="jumbotron">
                <h1>John Smith</h1>
                <p>John Smith is the bestselling author of 4 books including <i>Men of the Mountain</i>, a New York Times bestselling novel and the hit Giant series.</p>
                <p>
                  <a class="btn btn-lg btn-primary" href="about.html" role="button">Learn more about John</a>
                </p>
            </div>
            
            <div class="index">
                <h1>John's Books</h1><br>
                    <h4 class="col-sm-6">"One of today's best thrillest novelist. <i>Men of the Mountains</i> is a must read for everyone!" - J.K. Rowling</h4>
                    <h4 class="col-sm-6">Don't miss out on his newest comeback novel <i>Barefoot Trucker</i>, available December 15th!</h4><br>
                <div class="container col-sm-6">
                    <img class="img-responsive book" src="img/content/book2.png" alt="Men of the Mountain"/>
                </div>
                <div class="container col-sm-6">
                    <img class="img-responsive book" src="img/content/book1.png" alt="Men of the Mountain"/>
                </div><br clear="all"/>
                <h1>Get Connected!</h1>
                <h4>Please feel free to hire John to speak, ask him a question, sign up for his newsletter, and follow him on twitter and facebook! If you have any suggestions or concerns about the website please leave us a message below!</h4><br>

                <form class="contact-form">
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                         <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                         <input type="text" class="form-control" name="Email" autocomplete="off" id="Email" placeholder="Email">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea type = "text" class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Message"></textarea>
                            </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Send a message</button>
                        </div>
                  </div>     
                </form>
            </div>
           </div>
        </div><br>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <?php include '../resources/footer.php'; ?>
     
    </body>
    
</html>