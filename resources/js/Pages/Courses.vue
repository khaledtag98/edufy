<template>
  <app-layout>
    <coursesHeroSection />
    <CoursesSearch />
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
};
</script>

<style>
</style>
