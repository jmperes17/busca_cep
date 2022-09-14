<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>API - VIA CEP</title>
</head>

<body>
    <div class="col-md-10">
        <form action="config/config.php" method="post">
            <label for="cep">CEP</label>
            <input type="text" name="cep_input" placeholder="Informe o CEP" minlength="8">
            <button type="submit" class="btn btn-success">Pesquisar Endereço</button>
        </form>
    </div>
    <?php require_once "config/config.php" ?>

    <div class="col-md-8">
        <?php if (isset($cep)) { ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">CEP</th>
                        <th scope="col">Logradouro</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Localidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $data->cep; ?></td>
                        <td><?= $data->logradouro ?></td>
                        <td><?= $data->bairro ?></td>
                        <td><?= $data->localidade ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>