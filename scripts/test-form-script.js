
$(function () {

    $("#phone").mask("+375(99)999-99-99");

    $('form.ajax').on('submit', function() {
        // console.log('Trigger');
       
        var form = $(this),
            url = form.attr('action'),
            type = form.attr('method');

        var data = new FormData(document.querySelector('#test-form'));

        $.ajax({
            type: type,
            url: url,
            data: data,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                console.log('clean all fields fired !');
                //clear all input fields
                form.find('[name]').each(function(index, value) {
                    // console.log(value);
                    var input = $(this)
                    input.val("");
                });
            },
            fail: function() {
                console.log("Sending data error !");
            }
        });

        return false;
    });
});