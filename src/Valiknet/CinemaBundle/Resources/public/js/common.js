$(document).on('submit', 'form[name=add_review]', function(e){
    e.preventDefault();

    var data = $(this).serialize();

    $.ajax({
        url : $(this).attr("action"),
        type: $(this).attr("method"),
        data: data,
        success: function (data, dd, options) {

        }
    })
});