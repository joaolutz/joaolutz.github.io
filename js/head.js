document.addEventListener("DOMContentLoaded", function() {
   var novo_head = document.createElement("head"); // cria o nó <head></head>
   var htMl = document.querySelector("html"); // seleciona o elemento html
   htMl.insertBefore(novo_head, htMl.childNodes[0]); // insere o nó <head></head> antes do body
   var http = new XMLHttpRequest(); // cria o objeto XHR
    http.open("GET", "./head.html"); // requisita a página .html
    http.send();
    http.onreadystatechange = function() {
      if(http.readyState == 4){ // retorno do Ajax
         var head = document.querySelectorAll("head"); // seleciona os <head>
         head[0].innerHTML = http.responseText;
         if(head.length > 1) head[1].remove();
      }
   }
});