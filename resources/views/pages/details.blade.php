
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Website Template</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

 
   
    
    

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Products</h2>
              <a href="">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          
              
         
          <div class="col-md-4">
            @foreach ($book as $book)
                
            
            <div class="product-item">
              <a href=""><img src="/imagecollection/{{$book->image}}" alt=""></a>
              <div class="down-content">
                <a href=""><h4>{{$book->name}}</h4></a>
                <h6><small><del>$500.00 </del></small>{{$book->price}}</h6>
                <p>{{$book->description}}</p>
              </div>
              <form method="post" action="{{route('addtocart')}}">
                @csrf
                
              <div class="col-sm-8">
                  <label class="control-label">Quantity</label>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="number" min="1" class="form-control" name="quantity" placeholder="1">
                      </div>
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="books_id" value="{{$book->id}}">
                      </div>
                    </div>
                    <br>
                    <div class="col-sm-6">
                      <input type="submit" class="btn btn-primary btn-block" value="add to cart">
                    </div>
            </div>
          </div>
        </form>
            </div>
@endforeach
          </div>         