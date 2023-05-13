       // Obtém o botão para abrir a janela modal
       var openModalBtn = document.getElementById("open-modal-btn");

       // Obtém a janela modal
       var modal = document.getElementById("modal");
       
       // Obtém o botão para fechar a janela modal
       var closeModalBtn = document.getElementsByClassName("close")[0];
       
       // Quando o usuário clicar no botão, abra a janela modal
       openModalBtn.onclick = function() {
         modal.style.display = "block";
       }
       
       // Quando o usuário clicar no botão para fechar, feche a janela modal
       closeModalBtn.onclick = function() {
         modal.style.display = "none";
       }
       
       // Quando o usuário clicar fora da janela modal, feche-a
       window.onclick = function(event) {
         if (event.target == modal) {
           modal.style.display = "none";
         }
       }