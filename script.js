const form = document.querySelector('form'),
statusTxt = document.querySelector(".button-area span");

form.onsubmit = (e) => {
    e.preventDefault();
    statusTxt.style.color = "#345672";
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'send.php', true);
    xhr.onload = () => {
        if(xhr.readyState == 4 && xhr.status == 200) {
            let res = xhr.response;
            if(res.indexOf("Please fill inputs!") != -1 || res.indexOf("Enter a valid email address!") || res.indexOf("Sorry, failed to send your message!")){
                statusTxt.style.color = "red";
            }else{
                form.reset();
                setTimeout(() => { 
                    statusTxt.style.display = "none";
                 }, 3000)
            }
            statusTxt.innerHTML = res;
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}