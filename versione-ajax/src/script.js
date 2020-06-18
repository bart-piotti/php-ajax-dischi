var source = $('#cd-card-template').html();
var template = Handlebars.compile(source);

function appendCds() {
    $.ajax({
        'url': './src/cd-json.php',
        'method': 'GET',
        'error': function() {
            alert('Errore');
        },
        'success': function(data) {

            $('.cds-container').empty();
            for (var i = 0; i < data.length; i++) {
                //If there's no author filter selected
                if ($('.authors').val() == '') {
                    //Display all cds
                    $('.cds-container').append(template(data[i]))
                } //If there's an author filter else
                else {
                    //Append cds whose author matches selected one
                    if ($('.authors').val() == data[i].author) {
                        $('.cds-container').append(template(data[i]))
                    }
                }
            }
        }
    })
}

function fillAuthorsSelect() {
    $.ajax({
        'url': './src/cd-json.php',
        'method': 'GET',
        'error': function() {
            alert('Errore');
        },
        'success': function(data) {

            var authors = [];

            for (var i = 0; i < data.length; i++) {
                var author = data[i].author;

                if (!authors.includes(author)) {
                    $('.authors').append('<option value="' + author + '">' + author + '</option>')
                    authors.push(author);
                }
            }
        }
    })
}
$(document).ready(function() {

    fillAuthorsSelect()
    appendCds()

    $('.authors').on("change", function(){
        appendCds()
    });
})
