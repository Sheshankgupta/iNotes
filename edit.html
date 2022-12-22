<?php
    $conn=mysqli_connect('localhost','root','','notes');
    if($conn){
        //echo "Connected successfully";
    } else{
        die("Couldn't connect");
    }
    $id=$_GET['id'];
    $sql="select sno,title,description from notes where sno = $id";
    $query=mysqli_query($conn,$sql);
    $data= mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iNotes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
  </head>
  <body style="font-family:georgia;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid ms-5">
    <a class="navbar-brand" href="#">
      <img src="./images/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <span class="name"></span>
      <script>
        new Typed('.name',{  
            strings: ['iNotes'],
            typeSpeed: 400,
        });
</script>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data.php">Notes</a>
        </li>
    </div>
  </div>
</nav>

<br/>
<br/>

<div class="container-fluid my-5">
    <form action="save_changes.php" onsubmit="changeActionUrl()" method="POST" id="myForm">
        <input type="hidden" name="sno" id="sno" value=<?php echo $data['sno'];?>>
        <label for="TitleControlInput" class="form-label h3">Title</label>
        <input type="text" class="form-control mb-3" id="TitleControlInput" name="title" value=<?php echo $data['title'];?>>

        <label for="ControlTextarea1" class="form-label h4">Description</label>
        <textarea class="form-control mb-3" id="ControlTextarea1" rows="3" name="description" placeholder="this field will hold description for your notes"><?php echo $data['description'];?></textarea>
        <input type="submit" class="btn btn-dark mt-2 form-control" value="Save changes">
        <a href="data.php"><input type="button" class="btn btn-dark mt-2 form-control" value="See Notes"></a>
        
    </form>
</div>

<div>
    <!-- Footer -->
<footer class="bg-dark text-center text-white fixed-bottom">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" placeholder="Email here"/>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        This is iNotes app to store your notes with love.
      </p>
    </section>
    <!-- Section: Text -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © <?php echo date("Y"); ?> Copyright: Sheshank Gupta
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        function changeActionUrl(){
            var url=document.getElementById("myForm");
            url.action += "?id=" + document.getElementById("sno").value;
        }
    </script>
  </body>
</html>