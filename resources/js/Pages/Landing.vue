<template>
  <app-layout>
     <Hero/>
     <Header/>
     <Courses/>
     <Hero2/>
     <Reviews/>
     <InstructorBanner/>
        
     
  </app-layout>
</template>

<style scoped></style>

<script>
import AppLayout from '../Layouts/AppLayout.vue';
import Hero from '@/components/landingpage/Hero.vue'
import Hero2 from '@/components/landingpage/Hero2.vue'
import Header from '@/components/landingpage/header.vue'
import Courses from '@/components/landingpage/Courses.vue'
import InstructorBanner from '@/components/landingpage/InstructorBanner.vue'
import Reviews from '@/components/landingpage/Reviews.vue'

export default {
  
  components: { AppLayout, Hero, Courses, InstructorBanner, Reviews, Hero2, Header,},
  // props: {
  //     canLogin: Boolean,
  //     canRegister: Boolean,
  // },
};
</script>
