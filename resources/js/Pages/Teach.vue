<template>
  <app-layout>
      <Sep/>
      <Hero/>
  </app-layout>
</template>
<script>
import AppLayout from '../Layouts/AppLayout.vue'
import Navbar from '../components/Navbar.vue'
import Sep from '../components/teach/Sep.vue'
import Hero from '../components/teach/Hero.vue'
    export default {
        components: { AppLayout, Sep, Navbar, Hero},  
    }
</script>
