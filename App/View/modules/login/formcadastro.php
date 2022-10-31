<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <fieldset>
        <form  method="post" action="/cadastro/form/save">

                <legend>Cadastro de usuario</legend>

                <label for="nome">nome</label>
                <input id="nome" name="nome" value="<?= $model->nome ?>" type="nome" />

                <label for="email">email</label>
                <input id="email" name="email" value="<?= $model->email ?>" type="email" />
                
                <label for="senha">senha</label>
                <input id="senha" name="senha" value="<?= $model->senha ?>" type="senha" />

                <button type="submit">Salvar</button>

        </form>
    </fieldset>
</body>
</html>