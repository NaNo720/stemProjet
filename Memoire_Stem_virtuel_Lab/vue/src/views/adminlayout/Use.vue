<template>
<body>
    <div class="sidebar">
        <ul>
            <li class="logo">
                <a href="#">
                    <span class="icon"><i class="uil uil-airplay"></i></span>
                    <span class="text">STElogo</span>
                </a>
            </li>

            <li>
                <a href="D:/workespace Vue.js/stem-preojet-memoire/src/viewspubliclaout\Public.vue">
                    <span class="icon"><i class="uil uil-estate"></i></span>
                    <span class="text">Acceuil</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="uil uil-flask"></i></span>
                    <span class="text">Experiences</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="uil uil-book-reader"></i></span>
                    <span class="text">Quiz</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="uil uil-setting"></i></span>
                    <span class="text">Solution</span>
                </a>
            </li>

            <div class="bottom">
                <li>
                    <a >
                        <span class="icon">
                            <div class="imgBx">
                                <img src="../../assets/img/Profil.jpg" alt="Profile Image">

                            </div>
                        </span>
                        <span class="text">Use Name</span>
                    </a>
                </li>
                <li>
                    <a  href="#" @click="deconnexion">
                        <span class="icon"><i class="uil uil-signout"></i></span>
                        <span class="text">Deconnecter</span>

                    </a>
                </li>
            </div>
        </ul>
    </div>
    <div class="seaech-container">
        <input type="text" placeholder="Recherche...">
        <i class="uil uil-search"></i>
    </div>
    <div class="linke">
        <a href="">Chimie</a>
        <a href="">SVT</a>
    </div>
    <div class="container">
        <div class="contente1">contente1
            <div class="img-holder"></div>
            <div class="text-holder"> Titre Chimie</div>
          <router-link to="/example">Example</router-link>
        </div>
        <div class="contente2">contente2
            <div class="img-holder"></div>
            <div class="text-holder"> Titre Chimie</div>
        </div>
        <div class="contente3">contente3
            <div class="img-holder"></div>
            <div class="text-holder"> Titre Chimie</div>
        </div>
        <div class="contente4">contente4
            <div class="img-holder"></div>
            <div class="text-holder">
                <router-link to="/" class="link">Acceuil</router-link>
            </div>
        </div>
        <div class="contente5">contente5
            <div class="img-holder"></div>
            <div class="text-holder"> Titre Chimie</div>
        </div>
        <div class="contente6">contente6
            <div class="img-holder"></div>
            <div class="text-holder"> Titre Chimie</div>
        </div>
        <div class="contente7">contente7
            <div class="img-holder"></div>
            <div class="text-holder"> Titre Chimie</div>
        </div>
        <div class="contente8">contente8
            <div class="img-holder"></div>
            <div class="text-holder"> Titre Chimie</div>
        </div>
    </div>
</body>
</template>

<script>
import {
    useStore
} from 'vuex';
import {
    computed
} from 'vue';
import {
    useRoute
} from 'vue-router';

export default {
    name: 'Use',

    setup() {
        const store = useStore();
        const router = useRoute();

        function deconnexion() {
            store.commit('deconnexion')
            router.push({
                name: 'Connexion'
            })
        }

        return {
            deconnexion
        }
    }
}
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}

body {
    min-height: 105vh;
    background: #FAF8F4;
    text-align: left
}

.sidebar {
    position: absolute;
    width: 60px;
    height: 105vh;
    background: #E9E8E6;
    overflow: hidden;
    transition: 0.5s;

}

.sidebar:hover {
    width: 300px;
}

.sidebar ul {
    position: relative;
    height: 100vh;
}

.sidebar ul li {
    list-style: none;
}

.sidebar ul li:hover {
    background: #FFDEAA;
}

.sidebar ul li a {
    position: relative;
    display: flex;
    white-space: nowrap;
    text-decoration: none;
}

.sidebar ul li a .icon {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    min-width: 60px;
    height: 60px;
    font-size: 1.5em;
    color: #363635;
}

.sidebar ul li a .text {
    position: relative;
    height: 60px;
    display: flex;
    align-items: center;
    font-size: 1em;
    color: #363635;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.logo {
    margin-bottom: 50px;
    font-size: 2em;

}

.sidebar ul li.logo:hover {
    background: #307B74;
}

.bottom {
    position: absolute;
    bottom: 0;
    width: 100%;
}

.bottom .imgBx {
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
}

.bottom .imgBx img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.seaech-container {
    justify-content: center;
    display: flex;
    position: relative;

}

input {
    margin-top: 15px;
    width: 550px;
    font-size: 18px;
    padding: 10px 20px;
    border-radius: 25px;
    border: none;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}

.uil-search {
    top: 50%;
    position: absolute;
    right: 2%;
    margin-right: 31.5%;
    transform: translateY(-5%);
    cursor: pointer;

}

.container {
    display: grid;
    height: 90vh;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-template-rows: 1.5fr 1.5fr;
    text-align: center;
    margin: 20px;
    column-gap: 2em;
    row-gap: 2em;
    margin-left: 5.2rem;

}

.contente1 {
    background: #FF9D02;
    border-radius: 8px;
    padding: 10px 20px;
}

.contente2 {
    background: #00317E;
    border-radius: 8px;
    padding: 10px 20px;
}

.contente3 {
    background: #7E3100;
    border-radius: 8px;
    padding: 10px 20px;
}

.contente4 {
    background: #363635;
    border-radius: 8px;
    padding: 10px 20px;
}

.contente6 {
    background: #5575A9;
    border-radius: 8px;
    padding: 10px 20px;
}

.contente5 {
    background: #7E3100;
    border-radius: 8px;
    padding: 10px 20px;
}

.contente7 {
    background: #7E3100;
    border-radius: 8px;
    padding: 10px 20px;
}

.contente8 {
    background: #7E3100;
    border-radius: 8px;
    padding: 10px 20px;
}

.contente1:hover {
    transition: 0.1s all;
    box-shadow: 6px 6px 40px #452C2E;
    cursor: pointer;
}

.contente2:hover {
    transition: 0.1s all;
    box-shadow: 6px 6px 40px #452C2E;
    cursor: pointer;
}

.contente3:hover {
    transition: 0.1s all;
    box-shadow: 6px 6px 40px #452C2E;
    cursor: pointer;
}

.contente4:hover {
    transition: 0.1s all;
    box-shadow: 6px 6px 40px #452C2E;
    cursor: pointer;
}

.contente5:hover {
    transition: 0.1s all;
    box-shadow: 6px 6px 40px #452C2E;
    cursor: pointer;
}

.contente6:hover {
    transition: 0.1s all;
    box-shadow: 6px 6px 40px #452C2E;
    cursor: pointer;
}

.contente7:hover {
    transition: 0.1s all;
    box-shadow: 6px 6px 40px #452C2E;
    cursor: pointer;
}

.contente8:hover {
    transition: 0.1s all;
    box-shadow: 6px 6px 40px #452C2E;
    cursor: pointer;
}

.img-holder {
    width: 100%;
    height: 220px;
    background: #9DFF02;
    border-radius: 8px;
}

.text-holder {
    color: aliceblue;
    font-size: 25px;
    font-family: 'Ponppis';
    margin: 10px 20px;
}

.link {
    color: aliceblue;
    font-family: 'Ponppis';
    text-decoration: none;
}

.dropdown {
    color: #363635;
    padding: 10px;
    margin-left: 20%;

}

.linke {
    text-align: right;
    margin-right: 25px;
}

.linke a {
    padding: 10px 20px;
    text-decoration: none;
    font-family: Avenir, Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    color: #363635;
    font-size: 1em;
}

.linke a:hover {
    color: #307B74;
}
</style>
