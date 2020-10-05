<?php $path = current_path(); ?>
<nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-bullseye"></i>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-between" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="<?php if($path=='node/1'){echo 'active'; } ?> nav-link mx-2" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" target="_blank" href="https://www.ebay.com/usr/greatgreatstuff2018">Shop</a>
          </li>
	  <li class="nav-item">
            <a class="<?php if($path=='event-created'){echo 'active'; } ?> nav-link mx-2" href="/event-created">Events</a>
          </li>
          <li class="nav-item">
            <a class="<?php if($path=='contact'){echo 'active'; } ?> nav-link mx-2" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php if($path == contact){echo '<div class="container">';} ?>
<?php print render($page['content']); ?>
<?php if($path == contact){echo '</div>';} ?>

  <div class="bg-dark py-3">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-lg-4 col-md-6">
          <p class="text-secondary mb-0">Copyright - R.E.D.S. Redeemed Every Day Salvage</p>
        </div>
        <div class="col-lg-4 col-md-6">
          <p class="text-secondary mb-0">2020</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>