<template>
  <app-layout>
        <Courses :user="user"/>
  </app-layout>
</template>

<script>
import Courses from "@/components/Tutordashboard/courses.vue";
export default {
    components: {
    Courses
  },
  props:{
    user:Object
  }
  
};
</script>
