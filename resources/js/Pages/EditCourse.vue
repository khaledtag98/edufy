<template>
<app-layout>
    <EditForm :course="course"/>
</app-layout>
</template>

<script>
import EditForm from '@/components/TutorDashboard/edit-course.vue';
export default{
    props:{
        course_id:String,
    },
    components: {
        EditForm,
    },
    data(){
        return{

        }
    } ,props: {
    course: Object,
  },
  mounted() {
 
  },
}
</script>