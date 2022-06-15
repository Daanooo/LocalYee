// closes alerts after clicking the x button 
var dismissButton = document.querySelector('.alert-dismiss');
dismissButton.addEventListener('click', (e) => {
    var parentAlert = dismissButton.closest('.alert');

    if (parentAlert != null) {
        parentAlert.remove();
    }
});