function createRows(response) {
    var result_from_db = response.result_from_db;
    var result_encrypt = response.result_encrypt;
    var result_decrypt = response.result_decrypt;
    var result_from_db_len = 0;
    var result_encrypt_len = 0;
    var result_decrypt_len = 0;
    $('#dataONDatabase tbody').empty();
    $('#result_encrypt tbody').empty();
    $('#result_decrypt tbody').empty();
    if (response != null) {
        result_from_db_len = result_from_db.length;
        result_encrypt_len = result_encrypt.length;
        result_decrypt_len = result_decrypt.length;
    }

    if (result_from_db_len > 0) {
        for (var i = 0; i < result_from_db_len; i++) {
            var data_result_from_db = result_from_db[i];
            var tr_str = "<tr><td >" + data_result_from_db + "</td></tr>";

            $("#dataONDatabase tbody").append(tr_str);
        }
    } else {
        var tr_str = "<tr>" +
            "<td colspan='1'>No record found.</td>" +
            "</tr>";

        $("#dataONDatabase tbody").append(tr_str);
    }

    if (result_encrypt_len > 0) {
        for (var i = 0; i < result_encrypt_len; i++) {
            var data_result_encrypt = result_encrypt[i];
            var tr_str = "<tr><td >" + data_result_encrypt + "</td></tr>";

            $("#result_encrypt tbody").append(tr_str);
        }
    } else {
        var tr_str = "<tr>" +
            "<td colspan='1'>No record found.</td>" +
            "</tr>";

        $("#result_encrypt tbody").append(tr_str);
    }

    if (result_decrypt_len > 0) {
        for (var i = 0; i < result_decrypt_len; i++) {
            var data_result_decrypt = result_decrypt[i];
            var tr_str = "<tr><td >" + data_result_decrypt + "</td></tr>";

            $("#result_decrypt tbody").append(tr_str);
        }
    } else {
        var tr_str = "<tr>" +
            "<td colspan='1'>No record found.</td>" +
            "</tr>";

        $("#result_decrypt tbody").append(tr_str);
    }
}

function execute() {
    var select = $('#select').val();
    var from = $('#from').val();
    var limit = $('#limit').val();
    var format = $('#format').val();

    $.ajax({
        type: 'POST',
        data: {
            select: select,
            from: from,
            limit: limit,
            format: format,
            execute: true,
        },
        url: "../model/selectfromdb_model.php",
        success: function(data) {
            var result = JSON.parse(data);
            if (result.success) {
                createRows(result);
            } else {
                alert(result.message);
                location.reload();
            }
        }
    })

}