

    function connect() {
        var host = $('#host').val();
        var dbname = $('#dbname').val();
        var username = $('#username').val();
        var password = $('#password').val();
        var jenis_db = $('#jenis_db').val();

        $.ajax({
            type: 'POST',
            data: {
                host: host,
                dbname: dbname,
                username: username,
                password: password,
                jenis_db: jenis_db,
                connect: true,
            },
            url: "model.php",
            success: function(data) {
                var result = JSON.parse(data);
                if (result.success) {
                    alert(result.message);
                    location.reload();
                } else {
                    alert(result.message);
                    location.reload();
                }
            }
        })
    }

    function disconnect() {
        $.ajax({
            type: 'POST',
            data: {
                disconnect: true,
            },
            url: "model.php",
            success: function(data) {
                var result = JSON.parse(data);
                if (result.success) {
                    alert(result.message);
                    location.reload();
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
            url: "model.php",
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
                }
            }
        })
    }