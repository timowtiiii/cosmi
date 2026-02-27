// Change navbar background on scroll
window.addEventListener('scroll', () => {
    const header = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        header.style.padding = "10px 0";
        header.style.background = "#0d0d0d";
    } else {
        header.style.padding = "20px 0";
        header.style.background = "rgba(13, 13, 13, 0.8)";
    }
});
