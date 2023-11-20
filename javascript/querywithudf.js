function createRows(response) {
    var result_from_db = response.result_from_db;
    var message = response.message;

    var result_from_db_len = 0;
    $('#result_query tbody').empty();
    $('#result_message').empty();
    if (response != null) {
        result_from_db_len = result_from_db.length;
    }

    if (result_from_db_len > 0) {
        for (var i = 0; i < result_from_db_len; i++) {
            var keys = Object.keys(result_from_db[0]);
            var data_result_from_db = result_from_db[i][keys];

            var tr_str = "<tr><td >" + data_result_from_db + "</td></tr>";
            $("#result_query tbody").append(tr_str);
        }
        $("#result_message").append(message);
    } else {
        var tr_str = "<tr>" +
            "<td colspan='1'>No record found.</td>" +
            "</tr>";
        $("#result_query tbody").append(tr_str);
    }
}

function querywithudf() {
    var query = $('#query').val();

    $.ajax({
        type: 'POST',
        data: {
            query: query,
            query_status: true,
        },
        url: "../model/querywithudf_model.php",
        success: function(data) {
            var result = JSON.parse(data);
            if (result.success) {
                createRows(result);
            } else {
                alert(result.message);
                $('#result_query tbody').empty();
                $('#result_message').empty();
            }
        }
    })
}