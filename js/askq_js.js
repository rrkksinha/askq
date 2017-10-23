
function validateForm() {
    var x = document.forms["search"].value;
    if (x == "") {
        alert("*");
        return false;
    }
}
