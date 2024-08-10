<template>
  <nav class="navbar">
    <div class="navbar-container">
      <div class="navbar-header">
        <a href="javascript:void(0)">
          <img src="https://www.floatui.com/logo.svg" width="120" height="50" alt="Float UI logo" />
        </a>

      </div>
      <div class="navbar-links" :class="{ 'block': open, 'hidden': !open }">
        <div class="navbar-item">
          <router-link to="/">Acceuil</router-link>
          <router-link :to="{ path: '/', hash: '#Atouts' }">Atouts</router-link>
          <router-link :to="{ path: '/', hash: '#Experiences' }">Experiences</router-link>
          <router-link :to="{ path: '/', hash: '#Contact' }">Contact</router-link>
        </div>
      </div>
      <div class="navbar-cta">
        <a class="cta-button" @click="megration">Démarrer</a>
      </div>
    </div>
  </nav>
</template>

<script>
import {useRouter} from "vue-router";

export default {
  name: "Navbar",
  data() {
    return {
      open: false,
    };
  },
  methods: {
    menuOpen() {
      this.open = !this.open;
    },
  },

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
};
</script>


<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

.navbar {
  background-color: F0F0F0;
  width: 100%;
  border-bottom: 1px solid #e0e1e1;
}

.navbar-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 12px 20px;
  max-width: 1200px;
  margin: 0 auto;
}

.navbar-header {
  display: flex;
  align-items: center;
}



.navbar-icon {
  height: 24px;
  width: 24px;
}

.navbar-links {
  display: none;
  flex: 1;
  justify-content: center;
  align-items: center;
  margin-top: 16px;
}

.navbar-links .navbar-item {
  display: flex;
  justify-content: center;
  gap: 20px;
}

.navbar-links .navbar-item a {
  color: #2c3e50;
  text-decoration: none;
  font-weight: bold;
  transition: color 0.3s;
}

.navbar-links .navbar-item a:hover {
  color: #75A7A2;
}

.navbar-cta {
  display: none;
}

.cta-button {
  padding: 10px 20px;
  background-color: #FF9D02;
  color: white;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s;
  cursor: pointer;
}

.cta-button:hover {
  background-color: #75A7A2;
}

/* Media Queries */
@media (min-width: 768px) {
  .navbar-container {
    flex-direction: row;
    justify-content: space-between;
  }



  .navbar-links {
    display: flex;
    margin-top: 0;
  }

  .navbar-cta {
    display: inline-block;
  }
}

@media (max-width: 768px) {

  .navbar-cta {
    display: block;
    text-align: center;
    margin-top: 10px;
  }
}

</style>
