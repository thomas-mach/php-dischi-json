<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>


    <div id="app">

        <header>
            <footer>

            </footer>
            <main>
                <div class="container">
                    <div class="row">
                        <div class="card" v-for="(disc, i) in discs" :key="i">
                            <ul>
                                <li><img :src="disc.poster" alt=""></li>
                                <li>{{disc.title}}</li>
                                <li>{{disc.author}}</li>
                                <li>{{disc.year}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
        </header>

        <!-- <div v-for="(disc, i) in discs" :key="i">
            {{ disc.title }}
        </div> -->


    </div>





    <script src="./js/app.js"></script>
</body>

</html>