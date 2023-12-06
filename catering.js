console.log("hi");

const form = document.querySelector("#cater"); 

form.addEventListener("submit", getData);

function submitCaterForm(event) {
    event.preventDefault();

    let req = new XMLHttpRequest();
    const formData = new FormData(form);

    req.onreadystatechange = function () {
        if (req.readyState === XMLHttpRequest.DONE) {
            if (req.status === 200) {
                let responseJSON = JSON.parse(req.responseText);
                console.log(responseJSON);
                if (responseJSON.success === true) {
                    document.querySelector("#output").innerHTML = "Thank you!";
                    document.querySelector("#output").style.color = "green";
                    form.reset(); 
                } else {
                    document.querySelector("#output").innerHTML = "OOPS FAILURE";
                }
            } else {
                console.log("Status code error:", req.status);
            }
        }
    };

    req.open("POST", "process-catering.php");
    req.send(formData);
}