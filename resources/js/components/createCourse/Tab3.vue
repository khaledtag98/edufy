<template>
    <div class="container py-20 text-center">
        <h1 class="text-4xl font-medium text-gray-700">How much time can you spend creating your course per week?</h1>
        <p class="mt-8 text-xl font-medium text-gray-600">There's no wrong answer. We can help you achieve your goals even if you don't have much time.</p>
        <div class="flex justify-start px-4 py-3 mx-auto mt-12 border-gray-500 w-96 hover:border-black hover:cursor-pointer border-1">
            <input type="radio" class="my-auto"><label class="my-auto ml-4">I'm very busy right now (0-2 hours)</label>
        </div> 
        <div class="flex justify-start px-4 py-3 mx-auto mt-4 border-gray-500 w-96 hover:border-black hover:cursor-pointer border-1">
            <input type="radio" class="my-auto"><label class="my-auto ml-4">I'll work on this on the side (2-4 hours)</label>
        </div> 
        <div class="flex justify-start px-4 py-3 mx-auto mt-4 border-gray-500 w-96 hover:border-black hover:cursor-pointer border-1">
            <input type="radio" class="my-auto"><label class="my-auto ml-4">I have lots of flexibility (5+ hours)</label>
        </div> 
        <div class="flex justify-start px-4 py-3 mx-auto mt-4 border-gray-500 w-96 hover:border-black hover:cursor-pointer border-1">
            <input type="radio" class="my-auto"><label class="my-auto ml-4">I haven't yet decided if I have time</label>
        </div> 
    </div>
</template>
<style>
.border-1{
    border-width:1px;
}
</style>