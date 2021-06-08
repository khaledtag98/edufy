<template>
     <div class="container mx-auto ">
         <MultiTabNav v-bind:activeSteps="activeSteps" v-bind:currentStep="currentStep"/>
         <Tab1 v-bind:chosen="chosen" v-show="currentStep==1"/>
         <Tab2 v-bind:chosen="chosen" v-show="currentStep==2"/>
         <Tab3 v-bind:chosen="chosen" v-show="currentStep==3"/>
         <div class="flex justify-between border-gray-400 border-t-1 ">
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
import Tab1 from'../components/instructorregistration/Tab1.vue'
import Tab2 from'../components/instructorregistration/Tab2.vue'
import Tab3 from'../components/instructorregistration/Tab3.vue'
import MultiTabNav from'../components/MultiTabNav.vue'
export default{
  components: { 
      Tab1,
      Tab2,
      Tab3,
      MultiTabNav, 
  },
  data: () =>{
        return{ 
            currentStep: 1,
            activeSteps:3,
            chosen:false,
        }
  }, 
  methods: {
      switchTab(flag){
          if(flag==0){
              this.currentStep++;
              if(this.currentStep>=3)
              {
                  this.currentStep=3;
                  this.$inertia.get(route("update-instructor"));
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