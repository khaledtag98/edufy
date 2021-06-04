<template>
    <div class="container">
        <MultiTabNav v-bind:activeSteps="activeSteps" v-bind:currentStep="currentStep"/>
        <Tab1 v-if="currentStep==1"/>
        <Tab2 v-if="currentStep==2"/>
        <Tab3 v-if="currentStep==3"/>
        <div class="flex justify-between mt-12 z-10 border-gray-400 border-t-1">
            <a @click="switchTab(1)" class="px-4 py-2 font-bold cursor-pointer text-gray-1000">Previous</a>
            <a @click="switchTab(0)" class="px-4 py-2 font-bold cursor-pointer text-gray-1000">Next</a>
         </div>
    </div>
</template>
<style>
.border-t-1{
    border-top-width: 1px;
}
</style>
<script>
import MultiTabNav from'../components/MultiTabNav.vue'
import Tab1 from '../components/createCourse/Tab1.vue'
import Tab2 from '../components/createCourse/Tab2.vue'
import Tab3 from '../components/createCourse/Tab3.vue'

export default{
    components:{
        MultiTabNav, Tab1, Tab2, Tab3,
    },
    data (){
        return{
            currentStep:1,
            activeSteps:3,
        }
    },
    methods: {
      switchTab(flag){
          if(flag==0){
              this.currentStep++;
              if(this.currentStep>3)
              {
                  window.location.href='/tutor-dashboard'
              }
          }
          else if(flag==1){
              this.currentStep--;
              if(this.currentStep<=0)
              {
                  this.currentStep=0;
              }
          }
          
      }
  }
}
</script>