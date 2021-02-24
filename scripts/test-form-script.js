
$(function () {
    $('form.ajax').on('submit', function() {
        // console.log('Trigger');

        var form = $(this),
            url = form.attr('action'),
            type = form.attr('method'),
            data = {};

        //conver form value to json object
        form.find('[name]').each(function(index, value) {
            // console.log(value);
            var input = $(this),
                name = input.attr('name'),
                value = input.val();

            data[name] = value;
        });

        // console.log(data);

        $.ajax({
            type: type,
            url: url,
            data: data,
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
                console.log("error");
            }
        });

           return false;
    });
});