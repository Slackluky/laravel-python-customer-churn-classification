import { Inertia } from "@inertiajs/inertia";

export default function (url, options = {}) {
    return Inertia.visit(url, options);
}
