<template>
  <app-layout>
      
        <Courses/>
  </app-layout>
</template>

<script>
import NoCourses from "@/components/Tutordashboard/nocourses.vue";
import Courses from "@/components/Tutordashboard/courses.vue";
export default {
    components: {
    NoCourses,
    Courses
  },
  
};
</script>
