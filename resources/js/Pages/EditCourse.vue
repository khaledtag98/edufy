<template>
<app-layout>
    <EditForm :data="this.course_id"/>
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

    }
}
</script>