<template>
    <div class="mx-8 md:mx-24 md:py-16 solutions">
      <div class="flex justify-center w-full">
        <div
          @click="overviewActive()"
          :class="{ active: isMyCourses }"
          class="px-8 py-2 sm:px-20 sm:py-3 circleScaleBtn"
        >
          <span class="text-2xl">My Courses</span>
        </div>
        <div
          @click="solutionsActive()"
          :class="{ active: isSavedd }"
          class="px-8 py-2 sm:px-20 sm:py-3 circleScaleBtn"
        >
          <span class="text-2xl">Saved</span>
        </div>
      </div>
      <MyCourses
        data-aos="fade-right"
        data-aos-duration="500"
        data-aos-once="true"
        v-if="isMyCourses"
      />
      <SavedCourses
        data-aos="fade-left"
        data-aos-duration="500"
        data-aos-once="true"
        v-else
      />
    </div>
</template>

<script>
import SavedCourses from "@/components/user-dashboard/SavedCourses.vue";
import MyCourses from "@/components/user-dashboard/MyCourses.vue";
export default {
  components: {
    SavedCourses,
    MyCourses,
  },
  data() {
    return {
      isMyCourses: true,
      isSavedd: false,
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
  methods: {
    overviewActive: function () {
      this.isMyCourses = true;
      this.isSavedd = false;
    },
    solutionsActive: function () {
      this.isMyCourses = false;
      this.isSavedd = true;
    },
  },
};
</script>





<style scoped>
.circleScaleBtn {
  border: solid 1px;
  border-color: #40395E;
  color: #40395E;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  z-index: 0;
  transition: border-color 0.5s ease-in-out;
  background-color: #ffffff;
}

.circleScaleBtn:hover {
  transition: border-color 0.5s ease-in-out;
  color: white;
  border-color: white;
}

.circleScaleBtn span {
  z-index: 1;
  position: relative;
  color: #40395E;
}

.circleScaleBtn:hover span {
  color: white;
}

.circleScaleBtn.active span {
  color: white;
}

.circleScaleBtn .send-icon-color {
  z-index: 1;
  position: relative;
  color: #40395E;
}

.circleScaleBtn:hover .send-icon-color {
  color: white;
}

.circleScaleBtn::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  width: 140px;
  height: 140px;
  border-radius: 50%;
  transform: translate3d(-50%, -50%, 0) scale3d(0, 0, 0);
  transition: opacity 0.9s cubic-bezier(0.19, 1, 0.22, 1),
    transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
  background-color: #40395E;
  opacity: 0;
}

.circleScaleBtn:hover::before,
.circleScaleBtn.active::before {
  opacity: 1;
  transition-duration: 0.5s;
  transform: translate3d(-50%, -50%, 0) scale3d(2.3, 2.3, 2.3);
}
@media (max-width: 640px) {
  .circleScaleBtn:hover::before,
  .circleScaleBtn.active::before {
    transform: translate3d(-50%, -50%, 0) scale3d(1.2, 1.2, 1.2);
  }
}
</style>
