<script>
export default {
    name: "DashboardPage",
};
</script>
<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <!-- <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                </div>
            </div>
        </div> -->
        <div class="p-12">
            <n-grid x-gap="12" :cols="4">
                <n-gi>
                    <div class="bg-green-300 h-36 rounded-xl" />
                </n-gi>
                <n-gi>
                    <div class="bg-green-300 h-36 rounded-xl" />
                </n-gi>
                <n-gi>
                    <div class="bg-green-300 h-36 rounded-xl" />
                </n-gi>
                <n-gi>
                    <div class="bg-green-300 h-36 rounded-xl" />
                </n-gi>
            </n-grid>
        </div>
    </AppLayout>
</template>
