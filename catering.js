console.log("hi");
console.log("hellooo");

const form = document.querySelector("#caterForm"); 

form.addEventListener("submit", submitCaterForm);

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
                    document.querySelector("#output").innerHTML = "We have received your catering request form. Our team will be in touch with you shortly to gather more details. Thank you!";
                    document.querySelector("#output").style.color = "black";
                    document.querySelector("#output").style.textAlign = "center"; 
                    document.querySelector("#output").style.fontSize = "20px";
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