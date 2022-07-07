export default function (input, startPos, endPos) {
    if (input.setSelectionRange) {
        input.focus();
        input.setSelectionRange(startPos, endPos);
    } else if (input.createTextRange) {
        var range = input.createTextRange();
        range.collapse(true);
        range.moveEnd("character", endPos);
        range.moveStart("character", startPos);
        range.select();
    }
}
