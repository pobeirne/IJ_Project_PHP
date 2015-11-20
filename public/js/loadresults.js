$(document).on('click', '#searchBtn', function(e) {
    e.preventDefault();

    if ($('#sample').val() !== "") {
        $('#sec2').hide();
        $('#loading').html('');
        
        var str = $('#sample').val().replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\&\|]/g, " ");
        // run ajax request
        $.ajax({
            type: "POST",
            data: {
                _token: $("input[name=_token]").val(),             
                q: str         
            },
            dataType: "html",
            url: "/search",
            success: function(d) {
                // replace div's content with returned data
                $('#loading-gif').html('<img src="../images/image_766568.gif">');
                $('#loading').html(d);
                setTimeout(function() {
                    $('#sec2').show();
                    $('#loading-gif').html('');
                }, 4000);
            }
        });
    } else {
        $("#myModal").modal('show');
        $('#sample').val('');
    }
});

$(document).on('click', '#pop', function() {
    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');   
});
