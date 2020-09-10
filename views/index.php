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
                <p class="text-center">Insira um número e receba uma somatória de todos os números <strong>ímpares</strong> até o número escolhido!</p>
                <div class="form-group ml-auto mr-auto mt-4" style="width: 400px">
                    <label for="number">Digite seu número</label>
                    <input type="text" class="form-control" placeholder="Número" name="number">
                    <div>
                        <?php if(!empty($errors['number_empty'])) { ?>
                            <p><?php print $errors['number_empty']; ?></p>
                        <?php } ?>
                        <?php if(!empty($errors['number'])) { ?>
                            <p><?php print $errors['number']; ?></p>
                        <?php } ?>
                    </div>
                    <div class="d-flex">
                        <button type="submit" name="button" class="btn btn-sm btn-primary mt-4 ml-auto">Calcular</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
