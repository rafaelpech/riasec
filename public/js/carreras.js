document.addEventListener("DOMContentLoaded", function () {
    // General variables
    var btnVideoHidden = document.getElementById('btnVideoHidden');
    var boxVideo = document.getElementById('boxVideo');
    var box = false;

    btnVideoHidden.addEventListener('click', function () {
        if (box) {
            boxVideo.classList.remove('zoomOut');
            boxVideo.classList.remove('d-none');
            boxVideo.classList.add('zoomIn');
            this.innerHTML = `<i class="material-icons">arrow_drop_down</i>`;
            box = false;
        } else {
            boxVideo.classList.remove('zoomIn');
            boxVideo.classList.add('zoomOut');
            boxVideo.classList.add('d-none');
            this.innerHTML = `<i class="material-icons">arrow_drop_up</i>`;
            box = true;
        }
    });
});
