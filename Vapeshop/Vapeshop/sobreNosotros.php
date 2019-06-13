<!DOCTYPE html>
<?php require_once("templates/header.php"); ?>
<div class="container-fluid bg-grey">
  <h2 class="text-center">Sobre nosotros</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contacta con nosotros Tienda de Vapeo.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> España Calle Perito Perez</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 623723986</p>
      <p><span class="glyphicon glyphicon-envelope"></span> vapeshopcaz@gmail.com</p>
    </div>
   
    <div class="col-sm-7">
    <form action="mailto:vapeshopcaz@gmail.com" method="post" enctype="text/plain">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>  
        </div>
        </form>
      </div>    
    </div>
  </div>
</div>

<img src="https://lh6.googleusercontent.com/-GPb1diiVrcY/WT6E8q2kPgI/AAAAAAAAA0I/OflcTs6rkTMWkcqao2bF1yZK4b64QBWlQCLIB/w600-k/" style="width:100%">
</body>
</html>