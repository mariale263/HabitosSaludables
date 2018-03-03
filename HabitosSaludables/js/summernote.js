

$(document).ready(function() {
    $('#summernote').summernote();

    
    $('#summernote').summernote({
        height: 300,                 // configurar la altura del textarea
        minHeight: null,             // configurando la altura mínima
        maxHeight: null,             // configurando la altura máxima
        focus: true                  // poniendo el foco
    });
});

