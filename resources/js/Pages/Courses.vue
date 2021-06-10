<template>
  <app-layout>
    <coursesHeroSection />
    <CoursesSearch :instructors="instructors" :courses="courses" />
  </app-layout>
</template>

<script>
import coursesHeroSection from "@/components/courses/CoursesHeroSection.vue";
import CoursesSearch from "@/components/courses/CoursesSearch.vue";
export default {
  components: {
    coursesHeroSection,
    CoursesSearch,
  },
  props:{
    instructors:Array,
    courses:Array
  },
  mounted() {
  },
};
</script>

<style>
</style>
