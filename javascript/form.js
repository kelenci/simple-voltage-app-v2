function encrypt() {
    var fieldname_encrypt = $('#fieldname_encrypt').val();
    var format_encrypt = $('#format_encrypt').val();
    var data_encrypt = $('#data_encrypt').val();
    var array_data_encrypt = data_encrypt.split(",")

    $.ajax({
        type: 'POST',
        data: {
            fieldname_encrypt: fieldname_encrypt,
            format_encrypt: format_encrypt,
            data_encrypt: array_data_encrypt,
            encrypt: true,
        },
        url: "../model/form_model.php",
        success: function(data) {
            var result = JSON.parse(data);
            if (result.success) {
                document.getElementById('result_fieldname_encrypt').innerHTML = result.fieldName;
                var newArray = [];
                result.data.forEach((e) => {
                    newArray.push([e])
                })
                document.getElementById('result_data_encrypt').innerHTML = newArray;
            } else {
                alert(result.message);
                location.reload();
            }
        }
    })
}

function decrypt() {
    var fieldname_decrypt = $('#fieldname_decrypt').val();
    var format_decrypt = $('#format_decrypt').val();
    var data_decrypt = $('#data_decrypt').val();
    var array_data_decrypt = data_decrypt.split(",")

    $.ajax({
        type: 'POST',
        data: {
            fieldname_decrypt: fieldname_decrypt,
            format_decrypt: format_decrypt,
            data_decrypt: array_data_decrypt,
            decrypt: true,
        },
        url: "../model/form_model.php",
        success: function(data) {
            var result = JSON.parse(data);
            if (result.success) {
                document.getElementById('result_fieldname_decrypt').innerHTML = result.fieldName;
                var newArray = [];
                result.data.forEach((e) => {
                    newArray.push([e])
                })
                document.getElementById('result_data_decrypt').innerHTML = newArray;
            } else {
                alert(result.message);
                location.reload();
            }
        }
    })
}