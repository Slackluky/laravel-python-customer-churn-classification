<script>
import { ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";
export default {
    name: "ClassifyPage",
    props: {
        a: {
            type: Array,
            default() {
                return [];
            },
        },
    },
};
</script>
<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

const columns = ref([
    {
        title: "No",
        key: "id",
    },
    {
        title: "gender",
        key: "gender",
    },
    {
        title: "SeniorCitizen",
        key: "SeniorCitizen",
    },
    {
        title: "tenure",
        key: "tenure",
    },
    {
        title: "PhoneService",
        key: "PhoneService",
    },
    {
        title: "StreamingTV",
        key: "StreamingTV",
    },
    {
        title: "InternetService",
        key: "InternetService",
    },
    {
        title: "PaperlessBilling",
        key: "PaperlessBilling",
    },
    {
        title: "MonthlyCharges",
        key: "MonthlyCharges",
    },
    {
        title: "TotalCharges",
        key: "TotalCharges",
    },
    {
        title: "InternetService",
        key: "InternetService",
    },
    {
        title: "Partner",
        key: "Partner",
    },
    {
        title: "Churn",
        key: "Churn",
    },
]);

const options = ref([
    {
        label: "True",
        value: "Yes",
    },
    {
        label: "False",
        value: "No",
    },
]);

const genders = ref([
    {
        label: "Male",
        value: "Male",
    },
    {
        label: "Female",
        value: "Female",
    },
]);

const form = useForm({
    gender: "",
    SeniorCitizen: "",
    tenure: 0,
    PhoneService: "",
    StreamingTV: "",
    InternetService: "",
    PaperlessBilling: "",
    MonthlyCharges: 0,
    TotalCharges: 0,
    Partner: "",
});
</script>

<template>
    <AppLayout title="Classify">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Classify
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-6">
                <n-data-table
                    :columns="columns"
                    :data="a"
                    :pagination="false"
                    :bordered="false"
                />
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4"
                >
                    <form
                        ref="formRef"
                        inline
                        :label-width="80"
                        size="medium"
                        @submit.prevent="form.post(route('analyze.store'))"
                    >
                        <n-form-item label="Gender" path="user.name">
                            <n-select
                                v-model:value="form.gender"
                                placeholder="Select"
                                :options="genders"
                            />
                        </n-form-item>
                        <n-form-item label="SeniorCitizen" path="user.name">
                            <n-select
                                v-model:value="form.SeniorCitizen"
                                placeholder="Select"
                                :options="options"
                            />
                        </n-form-item>
                        <n-form-item label="tenure" path="user.name">
                            <n-input-number v-model:value="form.tenure" />
                        </n-form-item>
                        <n-form-item label="PhoneService" path="user.name">
                            <n-select
                                v-model:value="form.PhoneService"
                                placeholder="Select"
                                :options="options"
                            />
                        </n-form-item>
                        <n-form-item label="StreamingTV" path="user.name">
                            <n-select
                                v-model:value="form.StreamingTV"
                                placeholder="Select"
                                :options="options"
                            />
                        </n-form-item>
                        <n-form-item label="InternetService" path="user.name">
                            <n-select
                                v-model:value="form.InternetService"
                                placeholder="Select"
                                :options="options"
                            />
                        </n-form-item>
                        <n-form-item label="PaperlessBilling" path="user.name">
                            <n-select
                                v-model:value="form.PaperlessBilling"
                                placeholder="Select"
                                :options="options"
                            />
                        </n-form-item>
                        <n-form-item label="MonthlyCharges" path="user.name">
                            <n-input-number
                                v-model:value="form.MonthlyCharges"
                            />
                        </n-form-item>
                        <n-form-item label="TotalCharges" path="user.name">
                            <n-input-number v-model:value="form.TotalCharges" />
                        </n-form-item>
                        <n-form-item label="Partner" path="user.name">
                            <n-select
                                v-model:value="form.Partner"
                                placeholder="Select"
                                :options="options"
                            />
                        </n-form-item>
                        <button
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                            type="submit"
                        >
                            Check
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
