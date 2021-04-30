<template>
    <div>

        <Navbar />
        <main>
            <slot></slot>
        </main>
    </div>
</template>

<script>
import Navbar from "@/components/Navbar.vue";

export default {
    components: {
        Navbar,
    },
};
</script>
