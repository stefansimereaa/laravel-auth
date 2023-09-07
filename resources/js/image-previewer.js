const thumbnailField = document.getElementById("thumbnail");
const thumbnailPreview = document.getElementById("thumbnail-preview");
const placeholder = thumbnailPreview.src;

console.log(placeholder);

let blobUrl = null;

thumbnailField.addEventListener("change", () => {
    if (thumbnailField.files[0]) {
        const file = thumbnailField.files[0];

        blobUrl = URL.createObjectURL(file);

        thumbnailPreview.src = blobUrl;
    } else {
        thumbnailPreview.src = placeholder;
    }
});

window.addEventListener("beforeunload", () => {
    if (blobUrl) URL.revokeObjectURL(blobUrl);
});
