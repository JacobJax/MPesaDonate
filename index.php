<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Mpesa donate</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center">   
        <form class="form-signin" method="POST" action="stk_initiate.php">
          <?php session_start() ?>
          <?php $message=""; ?>
          <?php 
              if(isset($_SESSION['flash_message'])) {
                $message = $_SESSION['flash_message'];
                unset($_SESSION['flash_message']);
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Message: </strong>'. $message .' <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
              }
          ?>
            
            <h1 class="h3 mb-3 font-weight-normal">Enter amount to donate</h1>
            <label for="amount" class="sr-only">Amount</label>
            <input type="number" name="amnt" class="form-control" placeholder="Amount." required autofocus>
            <label for="phone" class="sr-only">Phone number</label>
            <input type="tel" name="phone" class="form-control" placeholder="Mpesa phone number." required> 
            <div class="alert alert-warning" role="alert">
              Any amount sent goes to Safaricom's Sandbox PAYBILL
            </div>               
            <!-- <button class="btn btn-lg btn-success btn-block" type="submit">Donate</button> -->
            <input type="submit" value="Donate" class="btn btn-lg btn-success btn-block" name="submit"> 
            <p class="mt-5 mb-3 text-muted">&copy;ROOM 004 2021-2022</p>
        </form>

  </body>
</html>
