import xss from "xss";

export default function (str) {
    if (!str) return str;

    return xss(
        str
            .replace(/(?:\*)([^*]*)(?:\*)/gm, "<strong>$1</strong>")
            .replace(/(?:_)([^_]*)(?:_)/gm, "<i>$1</i>")
            .replace(/(?:~)([^~]*)(?:~)/gm, "<strike>$1</strike>")
            .replace(/(?:```)([^```]*)(?:```)/gm, "<tt>$1</tt>")
    );
}
