function DoSubmit() {
    if (document.form.decipherable.value === "bighead") {
        window.location.replace("https://www.w3schools.com");
    } else {
        alert("Please check value of VAR")
        return false;
    }
}
