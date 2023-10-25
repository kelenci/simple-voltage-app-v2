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
            url: "../model/formconfig_model.php",
            success: function() {
                location.reload();
            }
        })
    }

    function disconnect() {
        $.ajax({
            type: 'POST',
            data: {
                disconnect: true,
            },
            url: "../model/formconfig_model.php",
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