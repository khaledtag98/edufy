<template>
    <div class="container py-20 text-center">
        <h1 class="text-4xl font-medium text-gray-700">How about a working title?</h1>
        <p class="mt-8 text-xl font-medium text-gray-600">It's ok if you can't think of a good title now. You can change it later.</p>
        <input v-model="title" class="py-3 mt-12 pr-96" placeholder="e.g. Learn Photoshop CS6" id="courseTitle" type="text">
    </div>
</template>
<script>
export default{
    props: ["title"],
    
}
</script>