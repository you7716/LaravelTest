<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Creer Votre Projet</h2>

              <form action="/PROJETS/store" method="POST">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Nom</label>
                  <input name="nom" type="text" id="nom" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Description</label>
                  <input name="description" type="text" id="description" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Date Debut</label>
                  <input name="dateD" type="text" id="dateD" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Date Fin</label>
                  <input name="dateF" type="text" id="dateF" class="form-control form-control-lg" />
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" value = "Enregistrer" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Enregistrer</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
</section>
</body>
</html>




