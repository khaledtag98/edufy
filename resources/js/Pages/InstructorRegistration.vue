<template>
     <div class="container mx-auto ">
         <MultiTabNav v-bind:activeSteps="activeSteps" v-bind:currentStep="formSteps[currentStep].currentStep"/>
         <Tab v-bind:formSteps="formSteps[currentStep]"/>
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
import Tab from'../components/instructorregistration/Tab.vue'
import MultiTabNav from'../components/MultiTabNav.vue'
export default{
  components: { 
      Tab,
      MultiTabNav, 
  },
  data: () =>{
        return{ 
            currentStep: 0,
            activeSteps:3,
            formSteps:[
                {
                    currentStep: 1,
                    title: 'Share your knowledge',
                    paragraph:'Edufy courses are video-based experiences that give students the chance to learn actionable skills. Whether you have experience teaching, or it’s your first time, we’ll help you package your knowledge into an online course that improves student lives.',
                    question: 'What kind of teaching have you done before?',
                    options: {
                       first:'In person, informally',
                       second: 'In person, professionally',
                       third:'Online',
                       fourth:'Other',
                    }
                
                },
                {
                    currentStep:2,
                    title: 'Create a course',
                    paragraph:'No matter your experience level, you can become a video pro too. We’ll equip you with the latest resources, tips, and support to help you succeed.',
                    question: 'How much of a video “pro” are you?',
                    options: {
                       first:'Im a beginner',
                       second: 'I have some knowledge',
                       third:'Im experienced',
                       fourth:'I have videos ready to upload',
                    }
                
                },
                {
                    currentStep: 3,
                    title: 'Expand your reach',
                    paragraph:'Once you publish your course, you can grow your student audience and make an impact with the support of our marketplace promotions and also through your own marketing efforts. Together, we will help the right students discover your course.',
                    question: 'Do you have an audience to share your course with?',
                    options: {
                       first:'Not at the moment',
                       second: 'I have a small following',
                       third: 'I have sizeable of following'
                    }
                
                },

            ]
        }
  }, 
  methods: {
      switchTab(flag){
          if(flag==0){
              this.currentStep++;
              if(this.currentStep>=3)
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