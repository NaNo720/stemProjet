import axios from 'axios';

const apiClient = axios.create({
  baseURL: 'http://localhost:8000/api',
  withCredentials: true, // Cela permet l'envoi de cookies avec les requêtes
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }
});

export default apiClient;
