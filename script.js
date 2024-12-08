document.addEventListener("DOMContentLoaded", function () {
    fetch("form.php")
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("form-content").innerHTML = data;
        })
        .catch((error) => {
            console.error("Error loading the form:", error);
        });
});
