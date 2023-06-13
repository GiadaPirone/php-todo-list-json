<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <title>PHP TODO LIST JSON</title>
</head>

<body>
    <div id="app">

        <div id="app">
            <div class="container my-3">
                <div class="row">
                    <div class="col-12 rounded-3 bg-warning text-black p-3">
                        <h1 class="border-bottom"> Cose da fare per questa estate:
                        </h1>
                        <ul class="list-group">
                            <li v-for="elemento in arrayLista" class="list-group-item">
                                {{elemento.stringa}}
                            </li>
                        </ul>
                    </div>

                    <div class="mb-3 d-flex">
                        <!-- <label for="" class="form-label"></label> -->
                        <input v-model="nuovaTask" type="text" class="form-control" id="" placeholder="Aggiungi impegni alla lista">
                        <button @click="generaNuovaTask()" type="button" class="btn btn-secondary">Aggiungi</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="./js/script.js"></script>
</body>

</html>