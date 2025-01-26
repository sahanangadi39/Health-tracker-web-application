function moveToNext(current) {
    if (current.value.length === current.maxLength) {
        let next = current.nextElementSibling;
        if (next && next.tagName === "INPUT") {
            next.focus();
        }
    }
}