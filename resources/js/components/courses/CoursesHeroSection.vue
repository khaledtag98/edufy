<template>
  <div>
    <div class="">
      <div
        class="absolute left-0 grid w-full -skew-y-12 transform -top-16 grid-cols-24 grid-rows-16 -z-10"
        style="height: 700px"
      >
        <div
          class="bg-grad-100 transform translate-y-4 row-start-10 xxl:row-start-14 col-start-1 col-end-6"
        ></div>
        <div
          class="bg-green-500 bg-opacity-50 row-start-11 xxl:row-start-15 col-start-4 col-span-3 z-10"
        ></div>

        <div
          class="bg-green-500 bg-opacity-50 row-start-10 xxl:row-start-14 col-start-20 col-span-3 z-10"
        ></div>
        <div
          class="bg-grad-100 row-start-11 transform -translate-y-4 xxl:row-start-15 col-start-21 col-end-25"
        ></div>
      </div>

      <div
        class="container mx-auto overflow-x-hidden h-screen flex justify-center items-center flex-wrap hero-img"
      >
        <div class="text-center w-full">
          <h1 class="text-5xl xxl:text-7xl font-semibold">
            Build/Change <br />
            Your Career
          </h1>
          <p class="mt-3">Set of courses will change your life and career</p>
        </div>
      </div>
    </div>
  </div>
</template>



<style scoped>
.-top-16 {
  top: -6rem;
}
.-top-20 {
  top: -10rem;
}
.hero-img {
  position: relative;
}
.hero-img::after {
  content: "";
  z-index: -10;
  bottom: 20px;
  right: -90px;
  width: 50%;
  height: 50%;
  background-image: url("../../../../public/assets/imgs/Online_learning.svg");
  background-repeat: no-repeat;
  background-size: contain;
  position: absolute;
  display: inline;
}
@media only screen and (max-width: 768px) {
  .hero-img::after {
    display: none;
  }
}
</style>