<template>
   <div>
       <div v-if="!savedEmpty" class="flex flex-wrap space-y-3">
      <div
        class="px-8 py-6 lg:w-1/3 md:w-full"
      >
        <div class="p-6 bg-gray-200  rounded-md">
          <img
            class="object-cover object-center w-full h-40 mb-6 rounded"
            src="https://dummyimage.com/720x400/ffffff/8693ac"
            alt="content"
          />
          <h2
            class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl title-font"
          >
            course.name
          </h2>
          <p class="mb-4 text-base leading-relaxed"> course.description </p>
          <a
            href="#"
            class="inline-flex courses-center font-semibold text-blue-700 md:mb-2 lg:mb-0 hover:text-blue-400"
          >
            Read More
            <svg
              class="w-4 h-4 ml-2"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              width="20"
              height="20"
              fill="currentColor"
            >
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
              />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div v-else class="flex my-20">
      <div class="w-1/2 text-center self-center">
        <h3 class="text-6xl mb-8 font-semibold text-grad-200">
          No Saved<br />
          courses found
        </h3>
        <a href="/courses" class="px-8 py-2 text-lg font-bold text-white rounded-sm bg-gradient-to-r from-grad-100 to-grad-200">Show Courses</a>
      </div>
      <div class="w-1/2">
        <img
          class="bg-cover bg-center"
          src="/assets/imgs/undraw_empty.svg"
          alt=""
        />
      </div>
    </div>
   </div>
</template>

<script>
export default {
data() {
    return {
        savedEmpty:false
    }
},
}
</script>

<style>

</style>