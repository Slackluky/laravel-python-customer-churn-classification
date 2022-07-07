import template from "string-placeholder";

export default function (str, arg, options) {
    return template(str, arg, options || []);
}
