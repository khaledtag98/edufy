<template>
    <div class="container w-full py-20 text-center">
        <p class="mt-8 mb-4 font-medium text-gray-600 text-md">Start putting together your course by creating sections, lectures and practice (quizzes, coding exercises and assignments).</p>
        <p class="mb-8 font-medium text-gray-600 text-md">If you’re intending to offer your course for free, the total length of video content must be less than 2 hours.</p>
        
        
        
        <div class="w-1/2 px-10 py-6 mx-auto mt-2 mb-12 bg-gray-200 border-gray-400 text-start border-1">
            <h1 @click="edit=!edit" class="text-xl font-bold cursor-pointer hover:underline">Edit Course Info</h1>
            <div v-show="edit">
                <div class="grid flex-col mt-10 justify-items-stretch">
                    <label class="mr-4 justify-self-start">Title:</label>
                    <input type="text" placeholder="Edit title">
                </div>
                 <div class="grid flex-col mt-2 justify-items-stretch">
                     <label class="mr-4 justify-self-start">Category:</label>
                     <select placeholder="Select a category">
            <option default>Select a category</option>
            <option >Finance & Accounting</option>
            <option >Development</option>
            <option >Business</option>
            <option >IT & Software</option>
            <option >Office Productivity</option>
            <option >Personal Development</option>
            <option >Design</option>
            <option >Marketing</option>
            <option >Lifestyle</option>
            <option >Photography & Video</option>
            <option >Health & Fitness</option>
            <option >Music</option>
            <option >Teaching & Academics</option>
            <option >I don't know yet</option>
        </select>
                  </div>
            <div class="grid flex-col mt-2 justify-items-stretch">
                <label class="mr-4 justify-self-start">Price $:</label>
                <input type="number" placeholder="Edit price">
            </div>
            <div class="grid flex-col mt-2 justify-items-stretch">
                <label class="mr-4 justify-self-start">Description:</label>
                <textarea cols="20" rows="3" placeholder="Edit description"></textarea>
            </div>

            <div class="flex justify-end mt-8 mr-4">
                <button class="px-4 py-3 font-bold text-white bg-gray-1000 hover:shadow-sm">Save</button>
            </div>
            
            </div>
            

        </div>
        <button @click="addsection=!addsection" class="font-bold text-gray-1000">+ New Section</button>
        <div class="my-4" v-show="addsection">
            <input  type="text" placeholder="Add section title">
            <button class="px-4 ml-4 font-bold bg-gray-200 text-gray-1000">Add</button>
        </div>
        <div  v-for="section in sections" :key="section" class="w-1/2 py-6 mx-auto mt-2 bg-gray-200 border-gray-400 hover:border-gray-600 text-start border-1">
           <div class="flex ml-3">
               <div @click="section.clicked=!section.clicked" class="flex cursor-pointer hover:underline">
                   <h1 class="mr-2 font-bold text-md">Section:</h1>
                    <h1 class="font-medium text-md">{{section.title}}</h1>
               </div>
           </div>
            <div v-show="section.clicked">
                <div  :key="lecture" v-for="lecture in section.lectures" class="px-2 py-2 mx-8 mt-4 bg-white shadow-sm hover:shadow-md">
                    <div class="flex justify-between">
                    <div class="flex">
                        <h1 class="mr-2 text-md">Lecture:</h1>
                        <h1 class="font-medium text-md">{{lecture.title}}</h1>
                    </div>
                   <button @click="lecture.clicked=!lecture.clicked" class="px-2 py-1 mr-8 text-sm font-bold text-white bg-gray-1000">Edit</button>
               </div>
               <p class="text-md " v-show="lecture.clicked">Current link: <a :href="lecture.video">{{lecture.video}}</a></p>
               <div v-show="lecture.clicked" class="flex justify-center mt-8 ">
               </div>
               <div v-show="lecture.clicked" class="flex justify-center mt-2 ">
                   <input type="text" class="mr-2"  placeholder="Change Video link">
                   <input type="text"  placeholder="Change Title">
                    <button class="px-2 py-2 ml-2 font-bold text-red-600">Delete</button>
                   <button class="px-4 ml-4 font-bold bg-gray-200 text-gray-1000">Save</button>
                   

               </div>
                </div>
                <div class="flex justify-between w-full mt-8">
                    <button @click="section.addlect=!section.addlect" class="ml-8 font-bold text-gray-1000">New Lecture</button>
                    <button class="px-2 py-2 mr-8 font-bold text-white bg-red-500 hover:bg-red-400">Delete</button>
                </div>
                <div class="flex justify-center mt-8" v-show="section.addlect">
                    <input class="mr-4" type="text" placeholder="Enter lecture's title">
                    <input class="mr-4" type="text" placeholder="Enter video's link">
                    <button class="px-4 ml-4 font-bold bg-gray-200 text-gray-1000">Add</button>
                </div>
               
            </div>
        </div>
    </div>
</template>
<style>
.border-1{
    border-width:1px;
}
</style>
<script>
export default{
    data(){
        return{
            edit:false,
            addsection:false,
            sections:[
                {
                    title: 'Section 1',
                    clicked: false,
                    addlect: false,
                    lectures: [
                        {
                            title: 'Lecture 1',
                            clicked: false,
                            video: 'https://www.youtube.com'
                            
                        },
                        {
                            title: 'Lecture 2',
                            clicked: false,
                            video: 'https://www.youtube.com'
                        },
                        {
                            title: 'Lecture 3',
                            clicked: false,clicked: false,
                            video: 'https://www.youtube.com'

                        },
                    ],
                },
                {
                    title: 'Section 2',
                    clicked: false,
                    addlect: false,
                    lectures: [
                        {
                            title: 'Lecture 1',
                            clicked: false,
                        },
                        {
                            title: 'Lecture 2',
                            clicked: false,
                        },
                    ],
                },

            
            ],
    }
}
}
</script>