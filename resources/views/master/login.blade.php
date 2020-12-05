<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Absensi | Login</title>
  </head>
  <body>
      <div class="container" style="width: 30%; padding-top: 5%;">
         <h1 class="text-center">Login</h1>
           <form action="/login" method="POST">
             @csrf
              <div class="form-group">
               <label class="col-form-label col-form-label-sm">Username</label>
               <input type="text" name="username" class="form-control" id="username" value="" placeholder="Enter Username">
             </div>
             <div class="form-group">
               <label for="col-form-label col-form-label-sm">Password</label>
               <input type="text" name="password" class="form-control" value="" id="password" placeholder="Enter Password">
             </div>
             <div class="form-group">
                <input type="submit" name="login" value="login" class="btn btn-primary btn-block">
             </div>
            </form>
        </div>


    <!-- Option 1: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>
