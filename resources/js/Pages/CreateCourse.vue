<template>
    <div class="container">
        <MultiTabNav v-bind:activeSteps="activeSteps" v-bind:currentStep="this.currentStep"/>
     <form @submit.prevent="submit">
            <div v-if="this.currentStep==1" class="container py-20 text-center">
                <h1 class="text-4xl font-medium text-gray-700">How about a nice title?</h1>
                <p class="mt-8 text-xl font-medium text-gray-600">It's ok if you can't think of a good title now. You can change it later.</p>
                <input v-model="form.title" id="title" class="py-3 mt-12 pr-96" placeholder="e.g. Learn Photoshop CS6" type="text">
            </div>

            <div v-if="this.currentStep==2" class="container py-20 text-center">
                <h1 class="text-4xl font-medium text-gray-700">Set a price for your course</h1>
                <input v-model="form.price" id="price" class="py-3 mt-12 pr-96" type="number">
            </div>

            <div v-if="this.currentStep==3" class="container py-20 text-center">
                <h1 class="text-4xl font-medium text-gray-700">Describe your course</h1>
                <textarea rows="3" cols="10" v-model="form.description" id="description" class="py-3 mt-12 pr-96" type="number"></textarea>
            </div>

            <div class="container py-20 text-center" v-if="this.currentStep==4">
                <h1 class="text-4xl font-medium text-gray-700">What category best fits the knowledge you'll share?</h1>
                <p class="mt-8 text-xl font-medium text-gray-600">If you're not sure about the right category, you can change it later.</p>
                <select v-model="form.category" id="category" placeholder="Select a category" class="mt-12 pr-96">
                    <option value="Select a category" default>Select a category</option>
                    <option value="Finance & Accounting">Finance & Accounting</option>
                    <option value="Development" >Development</option>
                    <option value="Business" >Business</option>
                    <option  value="IT & Software" >IT & Software</option>
                    <option value="Office Productivity" >Office Productivity</option>
                    <option value="Personal Development" >Personal Development</option>
                    <option value="Design" >Design</option>
                    <option value="Marketing" >Marketing</option>
                    <option value="Lifestyle" >Lifestyle</option>
                    <option value="Photography & Video" >Photography & Video</option>
                    <option value="Health & Fitness" >Health & Fitness</option>
                    <option value="Music">Music</option>
                    <option value="Teaching & Academics">Teaching & Academics</option>
                    <option value="I don't know yet">I don't know yet</option>
                </select>
            </div>
        
            <div v-if="this.currentStep==5" class="container py-20 text-center">
            <h1 class="text-4xl font-medium text-gray-700">How much time can you spend creating your course per week?</h1>
            <p class="mt-8 text-xl font-medium text-gray-600">There's no wrong answer. We can help you achieve your goals even if you don't have much time.</p>
                    <div class="flex px-4 py-3 mx-auto mt-4 border-gray-500 border-1 w-80 hover:border-black hover:cursor-pointer">
                        <input type="radio" id="one" value="one" v-model="picked">
                        <label class="ml-2" for="two">Zero to Two hours (0-2)</label>
                    </div>
                    <div class="flex px-4 py-3 mx-auto mt-4 border-gray-500 border-1 w-80 hover:border-black hover:cursor-pointer">
                        <input type="radio" id="two" value="two" v-model="picked">
                        <label class="ml-2" for="two">Two to Five hours (2-5)</label>
                    </div>
                    <div class="flex px-4 py-3 mx-auto mt-4 border-gray-500 border-1 w-80 hover:border-black hover:cursor-pointer">
                        <input type="radio" id="three" value="three" v-model="picked">
                        <label class="ml-2" for="two">Five and more (5+ hours)</label>
                    </div>
                    <div class="flex px-4 py-3 mx-auto mt-4 border-gray-500 border-1 w-80 hover:border-black hover:cursor-pointer">
                        <input type="radio" id="four" value="four" v-model="picked">
                        <label class="ml-2" for="two">Haven't decided yet</label>
                    </div>
            </div>

            <div class="z-10 flex justify-between mt-12 border-gray-400 border-t-1">
                <a @click="switchTab(1)" class="px-4 py-2 font-bold cursor-pointer text-gray-1000">Previous</a>
                <button type="submit" :disabled=" (currentStep == 1 && (!form.title || form.title.length < 8)) || (currentStep==4 && form.category=='Select a category')" :class="{'cursor-not-allowed text-gray-300': (currentStep == 1 && (!form.title || form.title.length < 8)) || (currentStep==4 && form.category=='Select a category'), 'text-gray-1000 cursor-pointer': !((currentStep == 1 && (!form.title || form.title.length < 8)) || (currentStep==2 && form.category=='Select a category'))}" @click="switchTab(0)" class="px-4 py-2 font-bold">Next</button>
            </div>
            </form>
    </div>
    
    
</template>
<style>
.border-t-1{
    border-top-width: 1px;
}
.border-1{
    border-width: 1px;
    border-radius: 5px;
}
</style>
<script>
import MultiTabNav from'../components/MultiTabNav.vue'


export default{
    components:{
        MultiTabNav,
    },
    data (){
        return{
            currentStep:1,
            activeSteps:5,
            picked:"one",
            form: {
                title: '',
                price: '',
                description: '',
                category: 'Select a category',
            },
        }
    },
    methods: {
        submit() {
            if(this.currentStep>=5){
                this.$inertia.post('/create-course', this.form)
            }
      
    },
      switchTab(flag){
          if(flag==0){
              this.currentStep++;
              if(this.currentStep>=5)
              {
                  this.currentStep=5;
              }
          }
          else if(flag==1){
              this.currentStep--;
              if(this.currentStep<=1)
              {
                  this.currentStep=1;
              }
          }
          
      },
  }
}
</script>