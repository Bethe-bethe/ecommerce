<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Bethe Book store</title>

    <!-- Bootstrap core CSS -->
   <!-- Bootstrap core CSS -->
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Additional CSS Files -->
   <link rel="stylesheet" href="assets/css/fontawesome.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

<div class="send-message">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Add a book</h2>
          </div>
        </div>
        <div class="col-md-8">
          <div class="contact-form">
            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" placeholder="Book Name" required="">
                  </fieldset>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="price" type="number" class="form-control" placeholder="Price" required="">
                  </fieldset>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <textarea class="form-control"  rows="3" name="description" placeholder="Description" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="image" type="file" class="form-control" required="">
                  </fieldset>
                </div>
                
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  </body>
</html>