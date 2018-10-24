<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <title>CAS !</title>
  </head>
  <body>
    <div class="header container">
      <?php include('include/header.php');?>
    </div>
    <div class="main_wrapper">
      <div class="container">
        <div class="col-xs-12">
          <?php
          if(array_key_exists('mail', $_SESSION) && $_SESSION['mail'] != null){
          ?>
                <button type="button" class="btn btn-secondary btn-lg btn-block" id="disconnectCASButton">Déconnexion</button>
                <!-- Button trigger modal -->
                <ul class="list-group">
                  <li class="list-group-item"> Prénom : <?php echo $_SESSION['firstname'] ?></li>
                  <li class="list-group-item"> Nom : <?php echo $_SESSION['name'] ?></li>
                  <li class="list-group-item">Mail : <?php echo $_SESSION['mail'] ?></li>
                  <li class="list-group-item">Affectation : <?php echo $_SESSION['affectation'] ?></li>
                </ul>
                <div class="alert alert-warning" role="alert">
                  Try a var_dump for more information in _auth.php --> var_dump(phpCAS);
                </div>
          <?php
          }
          else {
          ?>
              <button type="button" class="btn btn-primary btn-lg btn-block" id="connexionCASButton">Je m'identifie</button>

              <div class="alert alert-success col-md-6" role="alert" style="margin-top:50px;">
                <p><a href="README.md">DOC.</a></p>
              </div>

          <?php
          }
          ?>
        </div>
      </div>
    </div>
    <div class="footer">

    </div>
    <script src="main.js"></script>
  </body>
</html>
