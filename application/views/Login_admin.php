<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KOPOL-ADMIN | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/plugins/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/plugins/bootstrap-4.0.0/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">

</head>

<body class="text-center">
<div class="card p-5 logingin">
    <form class="form-group">
        <a href="<?=base_url()?>">
            <h1>KOPOL-MIN</h1>
        </a>
        <h1 class="h4 mb-3 font-weight-normal">Masuk akun koperasi</h1>

        <div class="form-group">
            <label for="email" class="sr-only">Alamat email</label>
            <input type="email" id="email" class="form-control form-control-lg" placeholder="Alamat email" required autofocus>
        </div>

        <div class="form-group">
            <label for="password" class="sr-only">Password</label>
            <input id="password" type="password" class="form-control form-control-lg" name="password" placeholder="Password" required data-eye>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
        <p class="mt-4 text-muted">&copy; KOPOL-UM 2018</p>
    </form>
</div>

<script src="<?=base_url()?>assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/my-login.js"></script>
<script src="<?=base_url()?>assets/plugins/bootstrap-4.0.0/dist/css/bootstrap.min.css"></script>
</body>
</html>
