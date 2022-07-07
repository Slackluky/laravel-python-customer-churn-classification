<script>
export default {
    name: "NavbarComponent",
};
</script>

<script setup>
import { computed } from "vue";
import { useStore } from "vuex";
import { Inertia } from "@inertiajs/inertia";
const options = [
    {
        label: "Brown's Hotel, London",
        key: "Brown's Hotel, London",
    },
    {
        label: "Atlantis Bahamas, Nassau",
        key: "Atlantis Bahamas, Nassau",
    },
    {
        label: "The Beverly Hills Hotel, Los Angeles",
        key: "The Beverly Hills Hotel, Los Angeles",
    },
];
const store = useStore();
const dark = computed({
    get() {
        return store._state.data.theme.dark;
    },
});
const toggleDark = () => {
    console.log("darken");
    store.commit("toggleDark");
};

const logout = () => {
    Inertia.post(route("logout"));
};
</script>
<template>
    <nav class="bg-amber-400 border-gray-200 px-2 sm:px-4 py-2.5 z-1">
        <div
            class="container flex flex-wrap justify-around items-center mx-auto"
        >
            <a class="flex items-center">
                <!-- <img src="/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"> -->
                <span
                    class="self-center text-xl font-semibold whitespace-nowrap"
                    >Luky</span
                >
            </a>
            <n-button text @click="$emit('collapse')">
                <template #icon
                    ><n-icon><mdi-menu /></n-icon
                ></template>
            </n-button>
            <div class="flex md:order-1">
                <button
                    type="button"
                    data-collapse-toggle="mobile-menu-3"
                    aria-controls="mobile-menu-3"
                    aria-expanded="false"
                    class="md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 mr-1"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <!-- <div class="hidden relative md:block">
                    <div
                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                    >
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </div>
                    <input
                        id="search-navbar"
                        type="text"
                        class="block p-2 pl-10 w-full text-gray-900 bg-amber-400 rounded-full caret-black border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search..."
                    />
                </div> -->
                <button
                    data-collapse-toggle="mobile-menu-3"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="mobile-menu-3"
                    aria-expanded="false"
                >
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <svg
                        class="hidden w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
            </div>
            <div
                id="mobile-menu-3"
                class="hidden justify-between items-center w-full md:flex md:w-auto md:order-2 space-x-4"
            >
                <div class="relative mt-3 md:hidden">
                    <div
                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                    >
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </div>
                    <input
                        id="search-navbar"
                        type="text"
                        class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search..."
                    />
                </div>
                <JetstreamDropdown align="right" width="48">
                    <template #trigger>
                        <button
                            v-if="$page.props.jetstream.managesProfilePhotos"
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"
                        >
                            <img
                                class="h-8 w-8 rounded-full object-cover"
                                :src="$page.props.user.profile_photo_url"
                                :alt="$page.props.user.name"
                            />
                        </button>

                        <span v-else class="inline-flex rounded-md">
                            <button
                                type="button"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition"
                            >
                                {{ $page.props.user.name }}

                                <svg
                                    class="ml-2 -mr-0.5 h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </button>
                        </span>
                    </template>

                    <template #content>
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Manage Account
                        </div>

                        <JetstreamDropdownLink :href="route('profile.show')">
                            Profile
                        </JetstreamDropdownLink>

                        <JetstreamDropdownLink
                            v-if="$page.props.jetstream.hasApiFeatures"
                            :href="route('api-tokens.index')"
                        >
                            API Tokens
                        </JetstreamDropdownLink>

                        <div class="border-t border-gray-100" />

                        <form @submit.prevent="logout">
                            <JetstreamDropdownLink as="button">
                                Log Out
                            </JetstreamDropdownLink>
                        </form>
                    </template>
                </JetstreamDropdown>
                <n-switch :value="dark" size="medium" @click="toggleDark">
                    <template #icon>
                        <n-icon
                            ><mdi-weather-sunny v-if="!dark" />
                            <mdi-weather-night v-else
                        /></n-icon>
                    </template>
                </n-switch>
            </div>
        </div>
    </nav>
</template>
