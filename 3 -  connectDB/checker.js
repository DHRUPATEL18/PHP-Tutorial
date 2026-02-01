function validation_pass(c1, c2) {
    let a = c1.value;
    let b = c2.value;
    if (a !== b) {
        alert("Password and Confirm Password do not match.");
        c1.value = "";
        c2.value = "";
        c1.focus();
        return false;
    }
    return true;
}

function validation_name_uid(c1, c2) {
    let a = c1.value;
    let b = c2.value;
    if (a.length === 0 || b.length === 0) {
        alert("Fill All the Details.");
        c1.focus();
        return false;
    }
    return true;
}

function checkuid(idval){
    id  = idval.value;
    const xhr  = new XMLHttpRequest();

    xhr.onload = function() {
        let cnt = parseInt(xhr.responseText);
        if (cnt > 0) {
            document.getElementById("note").innerHTML = `User ID ${id} already exists. Please choose a different User ID.`;
            idval.value = "";
            idval.focus();
        }
        else {
            document.getElementById("note").innerHTML = "";
        }
    };


    xhr.open("POST", "checkuid.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("uid="+encodeURIComponent(id));
}