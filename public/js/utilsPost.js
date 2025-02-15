// slug
const title = document.querySelector("#title");
const slug = document.querySelector("#slug");
title.addEventListener("change", function () {
    fetch("/dashboard/post/createSlug?title=" + title.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
});

// image preview
function previewImage() {
    const imgInput = document.querySelector("#img-input");
    const imgPreview = document.querySelector("#img-preview");
    const imgPreviewLabel = document.querySelector("#img-preview-label");

    if (imgInput.files && imgInput.files[0]) {
        const oFReader = new FileReader();
        oFReader.readAsDataURL(imgInput.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
            imgPreviewLabel.classList.remove("hidden");
        };
    } else {
        imgPreview.src = "";
        imgPreviewLabel.classList.add("hidden");
    }
}

// Event listener untuk perubahan input file
document.addEventListener("DOMContentLoaded", function () {
    document
        .querySelector("#img-input")
        .addEventListener("change", previewImage);
});
