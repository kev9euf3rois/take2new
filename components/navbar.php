<nav class="navbar navbar-expand-sm navbar-light bg-light" aria-label="Third navbar example">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
      <img src="assets/brand/take2new.svg" alt="Bootstrap" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03"
      aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Startseite</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="pricing.php">Unsere Pläne</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="items.php">Unser Sortiment</a>
        </li>
        <?php if (!isset($_SESSION['loggedin'])) { ?>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Anmelden</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link active" href="profile.php">Mein Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="sell.php">Verkaufen</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form role="search">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" control-id="ControlID-2">
      </form>
    </div>
  </div>
</nav>