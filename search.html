<?php 
$conn=mysqli_connect('localhost','root','','notes');
if($conn){
    //echo "Connected successfully";
} else{
    die("Couldn't connect");
}
if($_GET['id']){
    $page=$_GET['id'];
} else{
    $page=1;
}
$per_page=10;
$offset=($page-1)*$per_page;
$search=$_GET['key'];
echo $search;
$sql="select * from notes where Description like '%$search%'";
$query=mysqli_query($conn,$sql);
$sql2="select * from notes where Description like '%$search%' limit $offset , $per_page";
$query2=mysqli_query($conn,$sql2);
$number_of_pages=(ceil(mysqli_num_rows($query)/$per_page));
if($page==$number_of_pages){
    $next=1;
  } else{
    $next=$page+1;
  }
  if($page==1){
    $prev=$number_of_pages;
  } else{
    $prev=$page-1;
  }

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
    <style>
      a{
        text-decoration: none;
      }
      a:hover{
        text-decoration: underline;
      }
      
      .element{
        background-color:rgb(186, 214, 233);
        color:rgb(0, 0, 0);
        padding-bottom:5px;
        padding-inline: 7px;
        border-radius: 2px;
      }
      .element:nth-child(even){
        background-color:rgb(113, 146, 160);
        color:white;
      }
    </style>
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
          <a class="nav-link" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="data.php">Notes</a>
        </li>
    </div>
  </div>
</nav>


<br/>
<br/>
<br/>
<div class="container-fluid my-5">
  <div class="row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4">
  <form action="search.php" method="post" class="d-flex"  id="MySearch">
    <input type="text" name="search" id="search" class="form-control" style="width:15vw;">
    &nbsp;
    <input type="submit" value="Search" class="btn btn-light" name="search_query">
  </form>
</div>
</div>
</div>
<table class="table table-striped table-class mx-auto w-75 mb-5" id= "table-id">
  
  <thead>
	<tr>
		<th class="text-center">Sr. No.</th>
		<th class="text-center">Title</th>
		<th class="text-center">Description</th>
		<th class="text-center">TimeStamp</th>
    <th class="text-center">Action</th>
	</tr>
  </thead>
  <tbody>
	<?php
        for($i=1;$i<=mysqli_num_rows($query2);$i++){
            $data=mysqli_fetch_assoc($query2); ?>
            <tr>
                <td style="text-align: center;"><?php echo $i+$offset; ?></td>
                <td style="text-align: center;"><?php echo $data['Title'];?></td>
                <td style="text-align: center;"><?php echo $data['Description'];?></td>
                <td style="text-align: center;"><?php echo $data['TimeStamp'];?></td>
                <td style="text-align: center;">
                    <a href="edit.php?id=<?php echo $data['sno']; ?>">Edit</a>  ||  
                    <a href="delete.php?id=<?php echo $data['sno']; ?>">Delete</a>    
                <td>
	        </tr>
      <?php
        }
        ?>
    </tbody>
</table>

<div class="container d-flex mb-5">
<div class="element">
  <a href="search.php?key=<?php echo $search; ?>&&id=<?php echo $prev; ?>"style="color:black;">&#8592; Previous</a>
</div>
<?php
  for($i=1;$i<=$number_of_pages;$i++){
    ?>
    <div class="element">
      <a href="search.php?key=<?php echo $search; ?>&&id=<?php echo $i; ?>" style="color:black;"><?php echo $i; ?></a>
    </div>
    <?php
  }
?>
<div class="element">
  <a href="search.php?key=<?php echo $search; ?>&&id=<?php echo $next; ?>"style="color:black;">Next &#8594;</a>
</div>
</div>


<div>
    <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="facebook.com" role="button"target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/aurbtaokuch" role="button"target="_blank">
        <i class="fab fa-twitter"></i>
      </a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="mailto:sheshankgpt2174@gmail.com" role="button"target="_blank">
        <i class="fab fa-google"></i>
      </a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/its._me_.anonymous/" role="button"target="_blank">
        <i class="fab fa-instagram"></i>
      </a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/sheshank-gupta-a121a7248/" role="button"target="_blank">
        <i class="fab fa-linkedin-in"></i>
      </a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Sheshankgupta" role="button"target="_blank">
        <i class="fab fa-github"></i>
      </a>
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
              <input type="email" id="form5Example21" class="form-control" placeholder="Email here" disabled/>
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
      function AddUrl(){
        var url=document.getElementById("MySearch");
        url.action += document.getElementById("search").value;
      }
    </script>
  </body>
</html>