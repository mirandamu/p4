window.onload = function(){
  
  var flashMessage = document.getElementsByClassName("flash_message")[0];
  
  if (flashMessage){
    flashMessage.onclick = function(){
      this.setAttribute("style", "display:none;");
    };
  }

};