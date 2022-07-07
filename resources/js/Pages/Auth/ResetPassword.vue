<script setup>
import { Head, useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
    email: String,
    token: String,
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("password.update"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <Head title="Reset Password" />

    <JetstreamAuthenticationCard>
        <template #logo>
            <JetstreamAuthenticationCardLogo />
        </template>

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

            <div class="mt-4">
                <JetstreamLabel for="password" value="Password" />
                <JetstreamInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div class="mt-4">
                <JetstreamLabel
                    for="password_confirmation"
                    value="Confirm Password"
                />
                <JetstreamInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <JetstreamButton
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Reset Password
                </JetstreamButton>
            </div>
        </form>
    </JetstreamAuthenticationCard>
</template>
