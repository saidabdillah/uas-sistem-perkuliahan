<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- End Style CSS -->
</head>

<body>

  <!-- Main -->
  <main>
    <section class="container" id="login">
      <div class="row justify-content-center align-items-center">
        <div class="col-sm-6 col-md-4">
          <h3 class="text-center mb-4">Login</h3>

          <form action="/login" method="post">
            <?= csrf_field(); ?>
            <select class="form-select py-3 mb-3" aria-label="Role" name="role">
              <option selected>Role</option>
              <option value="1">Admin</option>
              <option value="2">Student</option>
              <option value="3">Teacher</option>
            </select>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              <label for="password">Password</label>
            </div>
            <div class="d-grid grid-2">
              <button type="submit" class="btn btn-dark">Login</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
  <!-- Akhir Main -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>