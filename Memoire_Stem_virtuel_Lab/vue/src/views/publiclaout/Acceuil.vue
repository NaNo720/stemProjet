<template>
    <div class="content">
        <div class="box paragraphe">
            <img src="../../assets/img/box2.JPG" alt="Background Image" class="background-image">
            <h1>une plateforme unique pour tous vos besions d'apprentissage.</h1>
            <p>
                Nous avons pour mission d'élever une nouvelle génération de prodiges de l'éducation.
            </p>
            <div class="sinscrir">
                <a href="#" class="sinscrir-but" @click="megration">S'inscrire</a>
            </div>
        </div>
        <div class="box image">
            <img src="../../assets/img/Acceuil_img1.JPG" alt="imgShadow" width="740" height="660" class="imgShadow">
        </div>
    </div>
 
</template>

<script>
import {useRouter} from "vue-router";

export default {
    name: 'Acceuil',

  setup() {
    const router = useRouter();

    function megration() {

      router.push({
        name: 'Inscription'
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
    color: #363635;
}

.roboto-regular {
    font-family: "Roboto", sans-serif;
    font-weight: 400px;
    font-style: normal;
}

.content {
    display: flex;
}

.box {
    flex: 1;
    padding: 20px;

}

.background-image {
    position: absolute;
    /* Position absolue pour couvrir la boîte */
    top: 20;
    left: 5px;
    object-fit: cover;
    /* Assure que l'image couvre entièrement la boîte */
    z-index: -1;
    /* Place l'image derrière le texte */
    opacity: 0.5;
    /* Optionnel : Ajouter de la transparence */
}

h1 {
    margin: 10px 10px;
    padding-right: 20px;
    text-wrap: 0;
    text-align: left;
    text-transform: capitalize;
    font-size: 4em;
    font-family: "Roboto", sans-serif;
}

p {
    font-family: "Roboto", sans-serif;
    margin: 0px 4px;
    padding-right: 25px;
    text-align: left;
    font-size: 2em;

}



.sinscrir-but {
    padding: 15px 30px;
    margin-left: 70%;
    background-color: #FF9D02;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    border: #452C2E;
    transition: background-color 0.3s;
}

.sinscrir-but:hover {
    background-color: #75A7A2;
    cursor: pointer;
}

/* Media Queries */
@media (max-width: 768px) {
    .content {
        flex-direction: column;
        /* Change la disposition en colonne pour les petits écrans */
    }

    .box {
        width: 100%;
        /* Assure que les boîtes prennent toute la largeur */
        padding: 10px;
        margin-top: 40px;
        /* Réduit les marges internes */
    }

    .imgShadow {
        width: 100%;
        /* Assure que l'image prend toute la largeur de la boîte */
        height: auto;
        /* Maintient le ratio de l'image */


    }

    h1 {
        margin: 10px 10px;
        padding-right: 20px;
        text-wrap: 0;
        text-align: end;
        text-transform: capitalize;
        font-size: 4em;
        font-family: "Roboto", sans-serif;
    }

    p {
        font-family: "Roboto", sans-serif;
        margin: 0px 4px;
        padding-right: 25px;
        text-align: right;
        margin-bottom: 5%;
        font-size: 2em;

    }



    .sinscrir-but {
        padding: 15px 30px;
        background-color: #FF9D02;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        border: #452C2E;
        transition: background-color 0.3s;
    }

    .sinscrir-but:hover {
        background-color: #75A7A2;
    }


}
</style>
