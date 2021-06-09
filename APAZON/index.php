<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<div class="header">
    <h1 style="text-align: center">APAZON</h1>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4">Collapsed content</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</div>

<div class="container">

    <div class="row">

        <div class="col-3"></div>

        <div class="col-6">
            <form action="insertar.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">NIF</label>
                    <input type="text" class="form-control" id="nif" name="nif" pattern="[0-9]{8}[A-Z]{1}" onpaste="return false">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Razon</label>
                    <input type="text" class="form-control" id="razon" name="razon" pattern=".{6,}" onpaste="return false">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="direccion" placeholder="1234 Main St" name="direccion" pattern=".{6,}" onpaste="return false">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Apartment, studio, or floor" name="email" pattern="[a-z0-9.-_]+@[a-z0-9.-]+.[a-z]{2,}$" onpaste="return false">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Metodo de pago</label>
                    <input type="text" class="form-control" id="mpago" name="mpago" pattern=".{6,}" onpaste="return false">
                </div>
                <div class="col-md-12">
                    <label for="inputState" class="form-label">Observacion</label>
                    <input type="text" class="form-control" id="observ" size="20" name="observ" pattern=".{6,}" onpaste="return false">
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary" id="registro" name="registro">TAMO ACTIVO BRR BRRR</button>
                </div>
            </form>

            <br><br>rP48ckxlpbzKgwra6

            <form action="listado.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                <button type="submit" class="btn btn-primary" id="lsitado" name="listado">LISTADO BEB</button>
                </div>
            </form>

        </div>

        <div class="col-3"></div>
    </div>
</div>

</body>
</html>
