<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>


    <div id="app">

        <header>
            <img src="apple.png" alt="">
        </header>

        <main>
            <div class="container">
                <div class="row">

                    <ul class="card col-4" v-for="(disc, i) in discs" :key="i">
                        <li><img :src="disc.poster" alt=""></li>
                        <li>{{disc.title}}</li>
                        <li>{{disc.author}}</li>
                        <li>{{disc.year}}</li>
                    </ul>

                </div>
            </div>
        </main>

    </div>
    <script src="./js/app.js"></script>
</body>

</html>