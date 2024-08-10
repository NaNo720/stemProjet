<template>
    <div>
        <h1>Une expérience  <br>
            numérique incomparable
        </h1>
        <section id="Experiences">
            <div class="cards">
                <div class="card">
                    <div class="img-holder holder1"><img src="../assets/img/reationchimique.jpg" alt=""></div>
                    <div class="card-content">
                        <h2>Titre 1</h2>
                        <p> id dolore optio excepturi consequatur inventore dolorem numquam nulla molestiae vitae
                            alias
                            vel explicabo. Itaque.</p>
                        <a href="" @click="megration">Voir plus</a>
                    </div>
                </div>
                <div class="card">
                    <div class="img-holder holder2"> <img src="../assets/img/reationchimique.jpg" alt=""></div>
                    <div class="card-content">
                        <h2>Titre 3</h2>
                        <p> id dolore optio excepturi consequatur inventore dolorem numquam nulla molestiae vitae
                            alias
                            vel explicabo. Itaque.</p>
                        <a href="" @click="megration">Voir plus</a>
                    </div>
                </div>
                <div class="card">
                    <div class="img-holder holder3"> <img src="../assets/img/reationchimique.jpg" alt=""></div>
                    <div class="card-content">
                        <h2>Titre 1</h2>
                        <p> id dolore optio excepturi consequatur inventore dolorem numquam nulla molestiae vitae
                            alias
                            vel explicabo. Itaque.
                        </p>
                        <a href="" @click="megration"> Voir plus</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import {useRouter} from "vue-router";

export default {
    name: "Experiences",

  setup() {
    const router = useRouter();

    function megration() {

      router.push({
        name: 'Connexion'
      })

    }

    return {
      megration
    };
  }
}
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

h1 {
    padding: 200px;
    text-transform: capitalize;

}

:root {
    --bg1: #D4BAAA;
    --bg2: #5575A9;
    --bg3: #00317E;
}

section {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-color: #D9D9D9;
    font-family: 'Poppis', sans-serif;
    padding: 30px;
}

.cards {
    display: grid;
    gap: 30px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    grid-template-columns: 1fr 1fr 1fr;
    align-items: center;
}

.card {
    background-color: #fff;
    padding: 30px;
    border-radius: 12px;
    transition: height 0.3s ease-in-out;
    margin-top: 100px;
}

.card .img-holder {
    width: 100%;
    height: 200px;
    border-radius: 8px;
    margin-bottom: 15px;
    transition: transform 0.3s ease-in-out;
}

.img-holder.holder1 {
    background-color: #D4BAAA;
}

.img-holder.holder2 {
    background-color: #5575A9;
}

.img-holder.holder3 {
    background-color: #00317E;
}

img {
    width: 90%;
    height: 200px;
}

.card h2,
.card p {
    margin-bottom: 15px;
}

.card a {
    opacity: 0;
    transition: pacity 0.3s ease-in-out;
    transition-delay: 0.1s;
    display: inline-block;
    color: #fff;
    text-decoration: none;
    padding: 15px;
    border-radius: 4px;
    background-color: #363635;
}

.card a {
    opacity: 0;
    transition: pacity 0.3s ease-in-out;
    transition-delay: 0.1s;
}

.card-content {
    height: 35px;
    overflow: hidden;
    transition: height 0.3s ease-in-out;
}

.card:hover .img-holder {
    transform: scale(0.9);
    margin-top: -120px;
}

.card:hover .card-content {
    height: 230px;
    overflow: visible;
}

.card:hover p,
.card:hover a {
    opacity: 1;
}
</style>
