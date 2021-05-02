<template>
  <app-layout>
     <Hero/>
     <div class="flex flex-wrap justify-center mt-20 ml-8 mr-8">
       <div class="flex justify-center w-full mb-6">       
          <h1 id="browse" class="text-4xl font-medium ">Browse Our Top Courses</h1>
       </div>
     </div>
     
     <Courses/>
     <Hero2/>
     <Reviews/>
     <InstructorBanner/>
        
     
  </app-layout>
</template>

<style scoped></style>

<script>
import AppLayout from '../Layouts/AppLayout.vue';
import Hero from '../components/Hero.vue'
import Hero2 from '../components/Hero2.vue'
import Courses from '../components/Courses.vue'
import InstructorBanner from '../components/InstructorBanner.vue'
import Reviews from '../components/Reviews.vue'

export default {
  
  components: { AppLayout, Hero, Courses, InstructorBanner, Reviews, Hero2,},
  // props: {
  //     canLogin: Boolean,
  //     canRegister: Boolean,
  // },
};
</script>
