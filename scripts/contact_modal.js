$(document).ready(function() {
    $('#contactForm').on('submit', function(e){
        $('#contactModal').modal('show');
        e.preventDefault();
    });
});
