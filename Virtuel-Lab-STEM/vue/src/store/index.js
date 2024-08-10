import { createStore } from 'vuex';
import apiClient from '@/plugins/axios'; // Assurez-vous que le chemin est correct

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

    setUser(state, userData) {
      state.user.token = userData.token;
      state.user.data = userData.user;
      sessionStorage.setItem("TOKEN", userData.token);
    }
  },

  actions: {
    async register({ commit }, user) {
      try {
        const response = await apiClient.post('/register', user);
        commit('setUser', response.data);
        return response.data;
      } catch (error) {
        console.error('Error during registration:', error);
        throw error;
      }
    },
  },

  modules: {},
});

export default store;
