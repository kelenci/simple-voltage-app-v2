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
                                    <h5 class="card-title m-0">Form Update Encrypt to DB</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Table</label>
                                        <input type="text" id="table_name" class="form-control" placeholder="Table Name" autofocus autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Column</label>
                                        <input type="text" id="column_name" class="form-control" placeholder="Column" autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Where</label>
                                        <input type="text" id="where_conditional" class="form-control" placeholder="Ex : id = 1" autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Format</label>
                                        <input type="text" id="format" class="form-control" placeholder="Format for encrypt Data" autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Before Encrypt</label>
                                        <input type="text" id="before_encrypt" class="form-control" placeholder="Before Encrypt Data" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>After Encrypt</label>
                                        <input type="text" id="after_encrypt" class="form-control" placeholder="After Encrypt Data" disabled>
                                    </div>
                                    <label><b>Message</b> : </label>
                                    <div style="display : inline" id="result_message"></div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-danger float-right" value="Update Encrypt to Database" onclick="updateencrypttodb()">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Form Update Decrypt to DB</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Table</label>
                                        <input type="text" id="table_name_decrypt" class="form-control" placeholder="Table Name" autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Column</label>
                                        <input type="text" id="column_name_decrypt" class="form-control" placeholder="Column" autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Where</label>
                                        <input type="text" id="where_conditional_decrypt" class="form-control" placeholder="Ex : id = 1" autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Format</label>
                                        <input type="text" id="format_decrypt" class="form-control" placeholder="Format for Decrypt Data" autocomplete="no">
                                    </div>
                                    <div class="form-group">
                                        <label>Before Decrypt</label>
                                        <input type="text" id="before_decrypt" class="form-control" placeholder="Before Decrypt Data" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>After Decrypt</label>
                                        <input type="text" id="after_decrypt" class="form-control" placeholder="After Decrypt Data" disabled>
                                    </div>
                                    <label><b>Message</b> : </label>
                                    <div style="display : inline" id="result_message_decrypt"></div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-success float-right" value="Update Decrypt to Database" onclick="updatedecrypttodb()">
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

<script type="text/javascript" src="../javascript/updatetodb.js"></script>