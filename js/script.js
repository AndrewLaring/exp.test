$('select').change(function () {
    next_select = $(this).next().next().next();
    id_field = $(this).attr('id');
    query_id = $(this).find('option:selected').attr('data-query_id');
    $.ajax({
        url: "http://exp.test/index.php",
        type: "POST",
        data: {
            id_field: id_field,
            query_id: query_id},
        success: function (e) {
            $(next_select).html('<option></option>');
            option = $.parseJSON(e);
            $.each(option, function (key, val) {
                console.log(query_id);
                option_id = val[0];
                option_name = val[1];
                $(next_select).append('<option data-query_id="' + option_id + '">' + option_name + '</option>');
            });
        }
    });
});