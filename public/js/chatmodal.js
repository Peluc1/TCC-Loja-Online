var chatmodal = document.getElementById('modal-chat')

var modalchatbtn = document.getElementById('btn-modall')

var close = document.getElementsByClassName("close")[1]

modalchatbtn.onclick = function() {
    chatmodal.style.display = "block";
    chatmodal.style.marginBottom = "4.7em";
    modalchatbtn.style.position = "fixed";
    modalchatbtn.style.bottom = "1em"
    modalchatbtn.style.zIndex = "1"
}

close.onclick = function() {
   chatmodal.style.display = "none";
}

window.onload = () => {
    chatmodal.style.display="none";
}