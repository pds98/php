


<?php
$nomPrenom = $login = $motDePasse = $confirmMotDePasse = "";



?>























<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5 ml-8">
          <form methode = "POST" action="">
              <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Nom et Prenom</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="nomPrenom" id="inputName" placeholder="">
                  </div>
              </div>


              <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Aderesse mail</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="email" id="inputName" placeholder="">
                  </div>
              </div>



              <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Mot de Passe</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="motDePasse" id="inputName" placeholder="">
                  </div>
              </div>


              <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Confirmer mot de passe </label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" name="motDePasse" id="inputName" placeholder="">
                  </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">role</label>
                <div class="col-sm-5">
                    <select class="form-control" name="role" id="">
                
                  <option value="admin">Admin</option>
                  <option value="visiteur">Visiteur</option>
                  
                </select>
                </div>
              </div>


              




              
              <div class="form-group row">
                  <div class="offset-sm-6 col-sm-10 mt-5">
                      <button type="submit" class="btn btn-primary">Inscrire</button>
                  </div>
              </div>
          </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>