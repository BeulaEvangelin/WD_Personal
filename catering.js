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
                    document.querySelector("#output").innerHTML = "Thank you! We have recieved your catering service request. We will get back to you shorty for further details.";
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