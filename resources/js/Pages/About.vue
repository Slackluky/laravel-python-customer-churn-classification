<script>
export default {
    name: "ClassifyPage",
};
</script>
<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <AppLayout title="Classify">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                About
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <n-grid x-gap="12" :cols="2">
                        <n-gi>
                            <n-card title="Developer">
                                <template #cover>
                                    <img src="../../../storage/luky.jpg" />
                                </template>
                                Luky Setiawan
                            </n-card>
                        </n-gi>
                        <n-gi>
                            <n-card title="Pembimbing">
                                <template #cover>
                                    <img src="../../../storage/mr.jpg" />
                                </template>
                                Yumarlin. Mz S.Kom Si
                            </n-card>
                        </n-gi>
                    </n-grid>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
