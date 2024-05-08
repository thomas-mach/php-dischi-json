<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/04b99885ba.js" crossorigin="anonymous"></script>
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
                    <div v-for="(disc, i) in discs" :key="i">
                        <div class="card" @click="toggleOpen(i)">
                            <ul class="card_content">
                                <li><img :src="disc.poster" alt=""></li>
                                <li>{{disc.title}}</li>
                                <li>{{disc.author}}</li>
                                <li>{{disc.year}}</li>
                            </ul>
                        </div>
                        <div class="modal" v-if="isOpen === i">
                            <ul class="modal_card_content">
                                <li><img :src="disc.poster" alt=""></li>
                                <li>{{disc.title}}</li>
                                <li>{{disc.author}}</li>
                                <li>{{disc.year}}</li>
                            </ul>
                            <i class="fa-solid fa-x button" @click="toggleOpen"></i>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <script src="./js/app.js"></script>
</body>

</html>