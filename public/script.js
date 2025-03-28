document.getElementById("mobile-nav").addEventListener("change", function() {
    var url = this.value;
    if (url) {
        window.location.href = url; // Pāriet uz izvēlēto sadaļu
    }
});
