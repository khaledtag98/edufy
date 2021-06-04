<template class="w-full">
<div class="w-full px-4">
    <div class="flex justify-between">
        <div class="flex w-full">
        <JetApplicationMark class="px-2 border-gray-500 cursor-pointer border-r-1"/>
         <p class="my-auto ml-8 text-lg text-gray-700">Step {{currentStep}} of {{activeSteps}}</p>
        </div>
        <div class="my-auto">
            <a href="/" class="px-12 py-2 text-lg font-bold text-gray-1000">Exit</a>
        </div>
    </div>
    
   
    <div class="flex w-full py-2">
        <span class="w-1/3 h-1 py-1 bg-gray-500"></span>
        <span :class="{ 'bg-gray-500' : currentStep == 2 || currentStep == 3, 'bg-gray-200' : currentStep==1}" class="w-1/3 h-1 py-1"></span>
        <span :class="{ 'bg-gray-500' : currentStep == 3, 'bg-gray-200' : currentStep==2 || currentStep==1}" class="w-1/3 h-1 py-1"></span>
    </div>
</div>
</template>
<style>
.border-r-1{
    border-right-width: 1px;
}
</style>
<script>
import JetApplicationMark from "@/Jetstream/ApplicationMark";

export default{
    components:{
        JetApplicationMark
    },
    props:['currentStep', 'activeSteps'],
    data: {
        complete: 'bg-gray-500',
        notcomplete: 'bg-gray-200'
    }
}
</script> 