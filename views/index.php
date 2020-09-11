<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Madeira Madeira</title>
    </head>
    <body>
        <div class="container">
            <form method="POST" action="calculation.php">
                <h3 class="text-center mt-4 text-info">Calculadora de ímpares</h3>
                <p class="text-center">Insira um número e receba a somatória de todos os números <strong>ímpares</strong> até o número escolhido!</p>
                <div class="form-group ml-auto mr-auto mt-4" style="width: 400px">
                    <label for="number">Digite seu número</label>
                    <input type="text" class="form-control" placeholder="Número" name="number">
                    <div>
                        <p class="text-danger m-0">
                            <?php echo !empty($errors['number_empty']) ? $errors['number_empty'] : ""; ?>
                            <br>
                            <?php echo !empty($errors['number']) ? $errors['number'] : ""; ?>
                        </p>
                    </div>
                    <div class="d-flex">
                        <button type="submit" name="button" class="btn btn-sm btn-primary ml-auto">Calcular</button>
                    </div>
                </div>
                <div class="">
                    <h5 class="text-center mt-5">Resultado: <?php echo !empty($calculation) ? $calculation : "Nenhum calculo realizado."; ?></h5>
                </div>
            </form>
        </div>
    </body>
</html>
