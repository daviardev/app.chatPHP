const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorTxt = form.querySelector(".error-txt")

form.onsubmit = (event) => {
    event.preventDefault()
}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest()
    xhr.open("POST", "../php/login.php", true);

    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data)
                
                // if (data == "success") {
                //     // redirect to users.php page
                //     location.href = "pages/users.php";

                // } else {
                //     errorTxt.textContent = data
                //     errorTxt.style.display = "block"
                // }
            }
        }
    }
    let formData = new FormData(form)
    xhr.send(formData)
}