<template>
  <div class="container mx-auto">
    <div class="w-1/2 mx-auto mt-10">
      <input
        class="w-full px-3 py-2 border-2 focus:outline-none rounded-md outline-none"
        type="text"
        v-model="searchInput"
        placeholder="Search.."
      />
    </div>

    <div v-if="!seachNotFound" class="grid grid-cols-1 gap-6 mx-6 mt-6 sm:grid-cols-2 lg:grid-cols-3">
      <div
        v-for="course in filteredCourses"
        :key="course.id"
        class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md"
      >
        <div
          class="flex items-end justify-end w-full h-56 bg-cover"
          style="
            background-image: url('https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
          "
        ></div>
        <div class="px-5 py-3">
          <h3 class="text-gray-700 uppercase">{{ course.name }}</h3>
          <p class="m-2 font-medium">{{ course.description }}</p>
          <span class="mt-2 text-gray-500">{{ course.price }}</span>
        </div>
      </div>
    </div>
    <div v-else class="flex my-20">
      <div class="w-1/2 text-center self-center">
        <h3 class="text-6xl font-semibold text-grad-200">
          No Result<br />
          was found
        </h3>
        <button
          @click="resetSearshResult"
          class="px-8 py-2 mt-8 text-lg font-bold text-white rounded-sm bg-gradient-to-r from-grad-100 to-grad-200"
        >
          Show Courses
        </button>
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
      searchInput: "",
      seachNotFound: false,
      courses: [
        {
          id: "1",
          name: "industry",
          description:
            "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ",
          price: "1000$",
        },
        {
          id: "2",
          name: "undoubtable",
          description:
            "when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but ",
          price: "2000$",
        },
        {
          id: "3",
          name: "standard",
          description:
            "years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, ",
          price: "4000$",
        },
        {
          id: "4",
          name: "Lorem",
          description:
            "believable. If you are going to use a passage of Lorem Ipsum, you n",
          price: "6000$",
        },
        {
          id: "5",
          name: "Ipsum",
          description:
            "ent of a page when looking at its layout. The point of using Lorem Ips",
          price: "2000$",
        },
      ],
    };
  },
  mounted() {},
  computed: {
    filteredCourses: function () {
      return this.courses.filter((course) => {
        return course.name.toLowerCase().match(this.searchInput.toLowerCase());
      });
    },
  },
  methods: {
    resetSearshResult: function () {
      this.searchInput = "";
    },
  },
  watch: {
    filteredCourses: function () {
      if (this.filteredCourses.length > 0) {
        this.seachNotFound = false;
      } else {
        this.seachNotFound = true;
      }
    },
  },
};
</script>

<style>
</style>