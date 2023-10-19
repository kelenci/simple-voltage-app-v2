<?php
include("header.php");
?>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <?php
        include("navbar.php");
        ?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container">
                    <h1 class="m-0"> Voltage Simple App <small>Example 1.0</small></h1>
                </div>
            </section>

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Encrypt Form</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Fieldname</label>
                                        <input type="text" id="fieldname_encrypt" class="form-control" placeholder="Enter ..." autofocus autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Format</label>
                                        <input type="text" id="format_encrypt" class="form-control" placeholder="Enter ..." autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Data</label>
                                        <textarea class="form-control" id="data_encrypt" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary" value="Encrypt" onclick="encrypt()">
                                </div>
                            </div>
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h2 class="m-0"> Result Encrypt</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <label style="display : inline"><b>Field</b> : </label>
                                    <div style="display : inline" id="result_fieldname_encrypt"></div>
                                    <br>
                                    <label><b>Data</b> : </label>
                                    <div style="display : inline" id="result_data_encrypt"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Decrypt Form</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Fieldname</label>
                                        <input type="text" id="fieldname_decrypt" class="form-control" placeholder="Enter ..." autofocus autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Format</label>
                                        <input type="text" id="format_decrypt" class="form-control" placeholder="Enter ..." autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Data</label>
                                        <textarea class="form-control" id="data_decrypt" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-success" value="Decrypt" onclick="decrypt()">
                                </div>
                            </div>
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h2 class="m-0"> Result Decrypt</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <label style="display : inline"><b>Field</b> : </label>
                                    <div style="display : inline" id="result_fieldname_decrypt"></div>
                                    <br>
                                    <label><b>Data</b> : </label>
                                    <div style="display : inline" id="result_data_decrypt"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
    include("footer.php");
    ?>

</body>

</html>

<script>
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
            url: "model.php",
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
</script>