<template>

    <body>
        <main>

            <div class="box">
                <div class="inner-box">
                    <div class="inputs">
                        <form action="" class="sing-in-form" @submit.prevent="connexion">
                            <div class="logo">
                                <img src="" alt="">
                                <h4>StemLab</h4>
                            </div>

                            <div class="heading">
                                <h2>Bienvenue</h2>
                                <h6>Pas encore inscrit?</h6>
                                <a href="" class="toggle" @click="megration">S'inscrire</a>
                            </div>

                            <div class="actual-form">
                                <div class="inputs-wrap">
                                    <input type="email" minlength="4" class="input-field" id="email" autocomplete="off"
                                        required placeholder="Email" v-model="user.email">


                                    <input type="password" minlength="4" class="input-field" id="password"
                                        autocomplete="off" required placeholder="Mot de Passe" v-model="user.password">


                                    <input type="submit" value="Se connecter" class="sign-btn">

                                    <p class="text">
                                        Mot de passe oublier?
                                        <a href="">Obtenir de l'aide pour se connecter</a>
                                    </p>
                                </div>
                            </div>

                        </form>
                    </div>


                    <div class="image">
                        <img src="../assets/img/image.png" alt="">
                    </div>
                </div>
            </div>
        </main>
    </body>
</template>

<script>
import {useRouter} from "vue-router";

export default {
    name:'Connexion',

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
  },

    data(){
        return{
            user:{
                email:'',
                password:''
            }
        }
    },
    methods:{
        connexion(){
            console.log('stop form'),
            console.log(this.user)
            localStorage.setItem('token',this.user.email )
        },
        handleSubmit() {
            // Rediriger vers une autre page
            this.$router.push('/adminlayout/User');
        }
    }
}

</script>

<style scoped>

*, *::before, *::after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Ponppis' sans-serif;
    text-align: left;
}

main{
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
    background-color: #F9F8F4;
    padding: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.box{
    position: relative;
    width: 100%;
    max-width: 1020px;
    height: 640px;
    background-color: #E9E8E6;
    border-radius: 3.3rem;
    box-shadow: 0 60px 40px -30px rgba(0,0,0,0.27);
}

.inner-box{
    position: absolute;
    width: calc(100% - 4.1rem);
    height: calc(100% - 4.1rem);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #E9E8E6;

}

.inputs{
    position: absolute;
    height: 100%;
    width: 45%;
    top: 0;
    left: 0;
    background-color: #E9E8E6;
}

.image{
    position: absolute;
    height: 100%;
    width: 55%;
    left: 45%;
    top: 0;
    background-color: antiquewhite;
    border-radius: 2rem;
}


form{
    max-width: 260px;
    width: 80%;
    margin: 0 auto;
    height: 80%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;

}

.logo{
    display: flex;
    align-items: center;


}

.logo img{
    width: 27px;
    margin: 0.3rem;

}

.logo h4{
    font-size: 1.1rem;
    margin-top: -9px;
    letter-spacing: -0.5px;

}

.heading h2{
    font-size: 2.1rem;
    font-weight: 600;
  color: #363635;

}

.heading h6{
    color: #bababa;
    font-weight: 400;
    font-size: 0.75rem;
    display: inline;
}

.toggle{
    color: #151111;
    text-decoration: none;
    font-size: 0.75rem;
    font-weight: 500;
    transform: 0.3s;

}

.toggle:hover{
    color: #307B74;
}

.inputs-wrap{
    position: relative;
    height: 37px;
    margin-bottom: 2rem;
}


.input-field{

    width: 100%;
    height: 100%;
    background: none;
    border: none;
    outline: none;
   border-bottom: 1px solid #bbb;
   padding: 0;
   font-size: .95rem;
   color: #151111;
   margin-bottom: 2px;
}


.sign-btn{
    margin-top: 5%;
    display: inline-block;
    width: 100%;
    height: 43px;
    background-color: #363635;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 0.8rem;
    font-size: .8rem;
    margin-bottom: 2rem;
    transition: .3s;
}

.sign-btn:hover{
   background-color: #FF9D02;
}
.text{
    color: #bbb;
    font-size: .7rem;
}
.text a{
    color: #151111;
}

.text a:hover{
    color: #307B74;
}
</style>
