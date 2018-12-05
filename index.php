<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Examplo Simples</title>
</head>
<body>

<main id="app" class="container">
    <h3 class="mt-5">Endereço</h3>

    <form action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="postcode">CEP</label>
                <input type="text" v-model="postcode" class="form-control" id="postcode" placeholder="CEP" @keyup="searchAddress">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="address">Endereço</label>
                <input type="text" v-model="address.logradouro" class="form-control" id="address" placeholder="Endereço">
            </div>

            <div class="form-group col-md-4">
                <label for="number">Número</label>
                <input type="number" class="form-control" id="number" placeholder="Número">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="neighbourhood">Bairro</label>
                <input type="text" v-model="address.bairro" class="form-control" id="neighbourhood" placeholder="Bairro">
            </div>

            <div class="form-group col-md-5">
                <label for="city">Cidade</label>
                <input type="text" v-model="address.localidade" class="form-control" id="city" placeholder="Cidade">
            </div>

            <div class="form-group col-md-2">
                <label for="region">Estado</label>
                <input type="text" v-model="address.uf" class="form-control" id="region" placeholder="Estado">
            </div>
        </div>
    </form>
</main>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- VUE JS -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<!-- App JS -->
<script src="app.js"></script>

</body>
</html>