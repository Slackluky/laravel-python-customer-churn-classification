
import "../css/app.css";

import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3';
// import { InertiaProgress } from '@inertiajs/progress';
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.es";
import store from './store'
import Vuex from 'vuex';

let asyncViews = () => {
   return import.meta.glob("./Pages/**/*.vue");
};

function createElement(tag, attributes = {}) {
    const element = document.createElement(tag);
    for (let attribute in attributes) {
        element.setAttribute(attribute, attributes[attribute]);
    }

    return element;
}

createInertiaApp({
    title: (title) => (title != "Home" ? `${title} - Kenika` : "Kenika"),
    resolve: async (name) => {
        if (import.meta.env.DEV) {
            let page = (await import(`./Pages/${name}.vue`)).default;
            return page;
        } else {
            let pages = asyncViews();
            const importPage = pages[`./Pages/${name}.vue`];

            return importPage().then((module) => module.default);
        }
    },
    setup({ el, App, props, plugin }) {
        const VueApp = createApp({ render: () => h(App, props) });

        document.head.appendChild(
            createElement("meta", { name: "naive-ui-style" })
        );
        VueApp.config.globalProperties.route = window.route;

        VueApp.use(plugin).use(ZiggyVue).use(store).component("InertiaHead", Head).component("InertiaLink", Link).mount(el);
    },
});

import "./bootstrap";
