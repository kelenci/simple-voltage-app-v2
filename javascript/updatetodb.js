function updateencrypttodb() {
    var table_name = $('#table_name').val();
    var column_name = $('#column_name').val();
    var where_conditional = $('#where_conditional').val();
    var format = $('#format').val();
   
    $.ajax({
        type: 'POST',
        data: {
            table_name: table_name,
            column_name: column_name,
            where_conditional: where_conditional,
            format: format,
            updateencrypttodb: true,
        },
        url: "../model/updatetodb_model.php",
        success: function(data) {
            var result = JSON.parse(data);
            if (result.success) {
                $('#result_message').empty();
                $('#before_encrypt').empty();
                $('#after_encrypt').empty();
                document.getElementById('result_message').innerHTML = result.message;
                $('#before_encrypt').val(result.before_encrypt)
                $('#after_encrypt').val(result.after_encrypt)
            } else {
                alert(result.message);
                location.reload();
            }
        }
    })
}

function updatedecrypttodb() {
    var table_name_decrypt = $('#table_name_decrypt').val();
    var column_name_decrypt = $('#column_name_decrypt').val();
    var where_conditional_decrypt = $('#where_conditional_decrypt').val();
    var format_decrypt = $('#format_decrypt').val();
   
    $.ajax({
        type: 'POST',
        data: {
            table_name_decrypt: table_name_decrypt,
            column_name_decrypt: column_name_decrypt,
            where_conditional_decrypt: where_conditional_decrypt,
            format_decrypt: format_decrypt,
            updatedecrypttodb: true,
        },
        url: "../model/updatetodb_model.php",
        success: function(data) {
            var result = JSON.parse(data);
            if (result.success) {
                $('#result_message_decrypt').empty();
                $('#before_decrypt').empty();
                $('#after_decrypt').empty();
                document.getElementById('result_message_decrypt').innerHTML = result.message;
                $('#before_decrypt').val(result.before_decrypt)
                $('#after_decrypt').val(result.after_decrypt)
            } else {
                alert(result.message);
                location.reload();
            }
        }
    })
}