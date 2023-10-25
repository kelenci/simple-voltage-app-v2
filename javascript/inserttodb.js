function createRows(response) {
    var table_name = response.table_encrypt;
    var column_name = response.column_encrypt;
    var result_message = response.message;
    var data = response.data_encrypt;
    var data_len = 0;

    $('#result_encrypt_insert tbody').empty();
    $('#result_table_name').empty();
    $('#result_column_name').empty();
    $('#result_message').empty();

    if (response != null) {
        data_len = data.length;
    }

    if (data_len > 0) {
        var tr_str = "<tr><td >" + data + "</td></tr>";
        $("#result_encrypt_insert tbody").append(tr_str);
        document.getElementById('result_table_name').innerHTML = table_name;
        document.getElementById('result_column_name').innerHTML = column_name;
        document.getElementById('result_message').innerHTML = result_message;
    } else {
        var tr_str = "<tr>" +
            "<td colspan='1'>No record found.</td>" +
            "</tr>";

        $("#result_encrypt_insert tbody").append(tr_str);
    }
}

function insertandencrypt() {
    var table_name = $('#table_name').val();
    var column_name = $('#column_name').val();
    var value = $('#value').val();
    var format = $('#format').val();

    $.ajax({
        type: 'POST',
        data: {
            table_name: table_name,
            column_name: column_name,
            value: value,
            format: format,
            inserttodb: true,
        },
        url: "../model/inserttodb_model.php",
        success: function(data) {
            var result = JSON.parse(data);
            if (result.success) {
                createRows(result);
                alert(result.message);
            } else {
                alert(result.message);
                $('#result_encrypt_insert tbody').empty();
                $('#result_table_name').empty();
                $('#result_column_name').empty();
                $('#result_message').empty();
            }
        }
    })
}