const dropmenu = document.querySelector('.buttonList-video');
const dropisOpenmodal = document.querySelector('.video-lists');
const showicon = document.querySelector('.buttonList-video__add-icon');

function showdropmenu() {
    var dropisOpen = document.querySelector('.droplist-video-open');;
    if (showicon.classList.contains('fa-plus')) {
        showicon.classList.remove('fa-plus');
        showicon.classList.add('fa-minus');
    } else {
        showicon.classList.remove('fa-minus');
        showicon.classList.add('fa-plus');
    }

    if (dropisOpen == null) {
        dropisOpenmodal.classList.add('droplist-video-open');


    } else {
        dropisOpenmodal.classList.remove('droplist-video-open');
    }
}
dropmenu.addEventListener('click', showdropmenu);