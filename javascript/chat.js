const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) =>{
    e.preventDefault(); //preventing form from submitting 
}

sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                inputField.value = ""; //once message inserted into database then leave blank the input field 
                scrollToBottom();
            }
        }
    }
    //send the form data through ajax to php
    let formData = new FormData(form); //creating new fromData Object
    xhr.send(formData);//sending the from date to php
}

chatBox.onmouseenter = () =>{
    chatBox.classList.add("active");
}
chatBox.onmouseenter = () =>{
    chatBox.classList.remove("active");
}


setInterval(() => {
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                }
            }
        }
    }
    //send the form data through ajax to php
    let formData = new FormData(form); //creating new fromData Object
    xhr.send(formData);//sending the from date to php
}, 500); //this function will run frequently after 500ms

function scrollToBottom(){
    chatBox.scrollTo = chatBox.scrollHeight;
}