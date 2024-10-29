document.addEventListener('DOMContentLoaded', function() {
    
    //XXX DEBUG
    console.log('Document ready');
    const selectElements = document.querySelectorAll('.form-floating select');
    selectElements.forEach(function(select, index) {
        console.log(index, select.value);
    });
});