function profilebutton() {
    var page = document.getElementById("profile-page");
    if (page.style.display === "none" || page.style.display === "") {
        page.style.display = "block";
    } else {
        page.style.display = "none";
    }
}