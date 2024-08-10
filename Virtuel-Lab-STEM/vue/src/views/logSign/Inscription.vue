<template>
  <body>
  <main>
    <div class="box">

      <div class="image">
        <img src="../assets/img/image.png" alt="">
      </div>
      <div class="inner-box">
        <div class="inputs">
          <form action="" class="sing-in-form" @submit="register">
            <div class="logo">
              <img src="" alt="">
              <h4>StemLab</h4>
            </div>

            <div class="heading">
              <h2>Bienvenue</h2>
              <h6>J'ais deja un compte!</h6>
              <router-link :to="{ path: '/Connexion' }" class="toggle">
                <a href="" class="toggle">Se connecter</a>
              </router-link>

            </div>

            <div class="actual-form">
              <div class="inputs-wrap">
                <input type="text" minlength="4" class="input-field" id="name" autocomplete="off" required
                       placeholder="Nom d'utilisation" v-model="user.name">

                <input type="email" minlength="4" class="input-field" id="email" autocomplete="off" required
                       placeholder="Email" v-model="user.email">

                <input type="password" minlength="4" class="input-field" id="password" autocomplete="off" required
                       placeholder="Mot de Passe" v-model="user.password">

                <input type="password" minlength="4" class="input-field" id="password_confirmation" autocomplete="off"
                       required placeholder="Confirmez le mot de Passe" v-model="user.password_confirmation">

                <input type="submit" value="S'inscrire" class="sign-btn">

              </div>
            </div>

          </form>
        </div>

      </div>
    </div>
  </main>

  </body>
</template>

<script setup>
import store from '@/store';
import {useRoute} from 'vue-router';

const router = useRoute();
const user = {
  name: '',
  email: '',
  password: '',
  password_confirmation: ''
};

function register(ev) {
  ev.preventDefault();
  store
    .dispatch('register', user)
    .then((res) => {
      router.push({
        name: "Use"
      })
    })

}
</script>

<style scoped>
*,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Ponppis' sans-serif;
  text-align: left;

}

main {
  width: 100%;
  min-height: 100vh;
  overflow: hidden;
  background-color: #FAF8F4;
  padding: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.box {
  position: relative;
  width: 100%;
  max-width: 1020px;
  height: 640px;
  background-color: #E9E8E6;
  border-radius: 3.3rem;
  box-shadow: 0 60px 40px -30px rgba(0, 0, 0, 0.27);
}

.inner-box {
  position: absolute;
  width: calc(100% - 4.1rem);
  height: calc(100% - 4.1rem);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #E9E8E6;

}

.inputs {
  position: absolute;
  height: 100%;
  width: 45%;
  top: 0;
  left: 0;
  background-color: #E9E8E6;
}

.image {
  position: absolute;
  height: 100%;
  width: 55%;
  left: 45%;
  top: 0;
  background-color: #FF9D02;
  border-radius: 2rem;
}

form {
  max-width: 260px;
  width: 80%;
  margin: 0 auto;
  height: 80%;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;

}

.logo {
  display: flex;
  align-items: center;

}

.logo h4 {
  font-size: 1.1rem;
  margin-top: -9px;
  letter-spacing: -0.5px;

}

.logo img {
  width: 27px;
  margin: 0.3rem;

}

.logo h4 {
  font-size: 1.1rem;
  margin-top: -9px;
  letter-spacing: -0.5px;
  color: #363635;
}

.toggle {
  color: #151111;
  text-decoration: none;
  font-size: 0.75rem;
  font-weight: 500;
  transform: 0.3s;

}

.toggle:hover {
  color: #307B74;
}

.heading h6 {
  color: #bababa;
  font-weight: 400;
  font-size: 0.75rem;
  display: inline;
}

.heading h2 {
  font-size: 2.1rem;
  font-weight: 600;
  color: #363635;
}

.inputs-wrap {
  position: relative;
  height: 37px;
  width: 600px;
  margin-bottom: 8rem;

}

.input-field {

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

.sign-btn {
  margin-top: 5%;
  display: inline-block;
  width: 50%;
  height: 43px;
  background-color: #FF9D02;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 0.8rem;
  font-size: 1rem;
  margin-bottom: 2rem;
  transition: .3s;
}

.sign-btn:hover {
  background-color: #307B74;
}

.text {
  color: #bbb;
  font-size: .7rem;
}

.text a {
  color: #151111;

}

.text a:hover {
  color: #307B74;
}

</style>
