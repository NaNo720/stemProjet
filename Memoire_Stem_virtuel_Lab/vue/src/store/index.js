import { createStore } from 'vuex';
 // Assurez-vous que le chemin est correct

const store = createStore({
  state: {
    user: {
      data: {},
      token: sessionStorage.getItem('TOKEN'),
    },
  },
  getters: {},
  mutations: {
    deconnexion(state) {
      state.user.data = {};
      state.user.token = null;
      sessionStorage.removeItem("TOKEN");
    },

    setUser:(state, userData) =>{
      state.user.token = userData.token;
      state.user.data = userData.user;
      sessionStorage.setItem("TOKEN", userData.token);
    }
  },

  actions: {
    register({commit},user){
      return fetch('http://localhost:8000/api/register',{
        headers:{
          "Content-Type": "application/json",
          Accept: "application/json",
        },
        method: "POST",
        body: JSON.stringify(user),
      })
        .then((res) => res.json())
        .then((res) =>{
          commit("setUser",res);
          return res;
        });
    },
  },

  modules: {

  },
});

export default store;
