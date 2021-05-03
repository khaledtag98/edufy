<template>
  <app-layout>
    <div class="container mx-auto">
        <UHeader/>
        <UdashboardMain/>
    </div>
  </app-layout>
</template>

<script>
import UHeader from "@/components/user-dashboard/UHeader.vue";
import UdashboardMain from "@/components/user-dashboard/UdashboardMain.vue";
export default {
    components: {
    UHeader,
    UdashboardMain
  },
  
};
</script>
