<script setup>
import { Head, useForm } from "@inertiajs/inertia-vue3";

defineProps({
    status: String,
});

const form = useForm({
    email: "",
});

const submit = () => {
    form.post(route("password.email"));
};
</script>

<template>
    <Head title="Forgot Password" />

    <JetstreamAuthenticationCard>
        <template #logo>
            <JetstreamAuthenticationCardLogo />
        </template>

        <div class="mb-4 text-sm text-gray-600">
            Forgot your password? No problem. Just let us know your email
            address and we will email you a password reset link that will allow
            you to choose a new one.
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <JetstreamValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <JetstreamLabel for="email" value="Email" />
                <JetstreamInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <JetstreamButton
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Email Password Reset Link
                </JetstreamButton>
            </div>
        </form>
    </JetstreamAuthenticationCard>
</template>
