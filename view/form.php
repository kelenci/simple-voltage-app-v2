<?php
include("../partial/header.php");

?>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <?php
        include("../partial/navbar.php");
        ?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container">
                    <h1 class="m-0"> Voltage Simple App <small>Example 2.0</small></h1>
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
    include("../partial/footer.php");
    ?>

</body>

</html>

<script type="text/javascript" src="../javascript/form.js"></script>