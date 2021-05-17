<template>
  <app-layout>
      <Sep/>
      <Hero/>
      <Reasons/>
      <Quote/>
     
  </app-layout>
</template>
<script>
import AppLayout from '../Layouts/AppLayout.vue'
import Navbar from '../components/Navbar.vue'
import Sep from '../components/teach/Sep.vue'
import Hero from '../components/teach/Hero.vue'
import Reasons from '../components/teach/Reasons.vue'
import Quote from '../components/teach/Quote.vue'

    export default {
        components: { AppLayout, Sep, Navbar, Hero, Reasons, Quote},  
    }
</script>
