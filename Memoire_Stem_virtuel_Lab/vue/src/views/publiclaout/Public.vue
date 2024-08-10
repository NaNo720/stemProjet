<template>
  <div class="public">
    <Navbar />
    <router-view />
    <Atouts />
    <Experiences />
    <Contact />
  </div>
</template>

<script>
import Navbar from '../../components/Navbar.vue';
import Atouts from '../../components/Atouts.vue';
import Experiences from '../../components/Experiences.vue';

import Contact from "../../components/Contact.vue";
export default {
  name: "Public",
  components: {
    Navbar,
    Atouts,
    Experiences,
    Contact,
  },
};
</script>


