<template>
   <div>
    <div class="grid grid-cols-1 gap-6 mx-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <div v-for="course in courses" :key="course.id" class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                <div class="flex items-end justify-end w-full h-56 bg-cover" style="background-image: url('https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80')">
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{course.name}}</h3>
                    <p class="m-2 font-medium">{{course.description}}</p>
                    <span class="mt-2 text-gray-500">{{course.price}}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
     data() {
        return {
            courses: [
        {
          id: "1",
          name: "Chemistry",
          description:
            "Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ",
            
          price: "1000$",
        },
        {
          id: "2",
          name: "Machine Learning",
          description:
            "when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but ",
          price: "2000$",
        },
        {
          id: "3",
          name: "Software Engineering",
          description:
            "years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, ",
          price: "4000$",
        },
        {
          id: "4",
          name: "Web Development",
          description:
            "believable. If you are going to use a passage of Lorem Ipsum, you n",
          price: "6000$",
        },
        {
          id: "5",
          name: "Database Management",
          description:
            "ent of a page when looking at its layout. The point of using Lorem Ips",
          price: "2000$",
        },
        {
          id: "6",
          name: "Machine Learning",
          description:
            "ent of a page when looking at its layout. The point of using Lorem Ips",
          price: "2000$",
        },
        {
          id: "7",
          name: "Cloud Computing",
          description:
            "ent of a page when looking at its layout. The point of using Lorem Ips",
          price: "2000$",
        },
        {
          id: "8",
          name: "Robotics",
          description:
            "ent of a page when looking at its layout. The point of using Lorem Ips",
          price: "2000$",
        },
      ],
        };
    },
}
</script>
