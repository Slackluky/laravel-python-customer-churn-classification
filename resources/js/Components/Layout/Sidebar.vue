<script setup>
import { defineProps, ref, computed, h, onMounted } from "vue";
import IconChartTimelineVariant from "~icons/mdi/chart-timeline-variant";
import IconForum from "~icons/mdi/forum";
import IconPhone from "~icons/mdi/phone";
import mdiClipboardTextSearchOutline from "~icons/mdi/clipboard-text-search-outline";
import { redirect } from "@/helpers";
import IconBullhorn from "~icons/mdi/bullhorn";
import IconContacts from "~icons/mdi/contacts";
import IconInbox from "~icons/mdi/inbox";
import { NIcon } from "naive-ui";
// import IconFileChart from "~icons/mdi/file-chart";
import IconLogout from "~icons/mdi/logout";

defineProps({
    collapsed: Boolean,
});

const menuOptions = computed(() => {
    return [
        {
            key: "dashboard",
            label: "Dashboard",
            icon: () => h(IconChartTimelineVariant),
        },
        {
            key: "classify",
            label: "Classify",
            icon: () => h(mdiClipboardTextSearchOutline),
        },
        {
            key: "about",
            label: "About",
            icon: () => h(IconPhone),
        },
        // {
        //     key: "app.broadcast",
        //     label: "Broadcast",
        //     icon: () => h(IconBullhorn),
        // },
        // {
        //     key: "app.inbox",
        //     label: "Inbox",
        //     icon: () => h(IconInbox),
        // },
        // // {
        // //     key: "app.reports",
        // //     label: "Reports",
        // //     icon: () => h(IconFileChart),
        // // },
        // {
        //     key: "app.contacts",
        //     label: "Contacts",
        //     icon: () => h(IconContacts),
        // },
    ];
});

const menuValue = computed(() => {
    return menuOptions.value.find((option) => {
        return route().current(`${option.key}*`);
    })?.key;
});
const renderMenuIcon = (option) => {
    return h(NIcon, {}, { default: option.icon });
};
const menuOnUpdateValue = (key) => {
    redirect(route(`${key}.index`, { app: route().params.app }));
};
const expandIcon = () => {
    return h(NIcon, null, { default: () => h(CaretDownOutline) });
};
const renderMenuLabel = (option) => {
    if ("href" in option) {
        return h("a", { href: option.href, target: "_blank" }, [option.label]);
    }
    return option.label;
};
</script>
<template>
    <n-menu
        :value="menuValue"
        :collapsed="collapsed"
        :collapsed-width="64"
        :collapsed-icon-size="22"
        :options="menuOptions"
        :render-label="renderMenuLabel"
        :render-icon="renderMenuIcon"
        :expand-icon="expandIcon"
        class="dark:text-white"
        @update:value="menuOnUpdateValue"
    />
</template>
