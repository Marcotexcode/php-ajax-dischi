<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title> milestone 2 dischi </title>
</head>
<body>

    <div id="app" class="container-general">
    
        <div class="header">
            <h2>elenco album</h2>
        </div>

        <div class="corpo" >

            <div class="container-box" v-for="dischi in album">

                <img class="box--poster" :src="dischi.poster" :alt="dischi.title">

                <div class="textBox">

                    <h2 class="box--title">{{dischi.title}}</h2>

                    <h4 class="box--author">Autore: {{dischi.author}} </h4>

                    <span class="box--year">Anno: {{dischi.year}} </span>

                </div>

            </div>  

        </div>


    </div>

    <script src="js/script.js"></script>

</body>
</html>