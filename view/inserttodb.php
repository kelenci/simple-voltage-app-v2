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
                                    <h5 class="card-title m-0">Form Insert Data Encrypt</h5>
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
                                        <label>Value</label>
                                        <textarea id="value" class="form-control" rows="3" placeholder="Enter Value as a list"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Format</label>
                                        <input type="text" id="format" class="form-control" placeholder="Format for encrypt Value" autocomplete="no">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary float-right" value="Encrypt & Insert to Database" onclick="insertandencrypt()">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Result Insert</h5>
                                </div>
                                <div class="card-body">
                                    <label style="display : inline"><b>Table</b> : </label>
                                    <div style="display : inline" id="result_table_name"></div>
                                    <br>
                                    <label><b>Column</b> : </label>
                                    <div style="display : inline" id="result_column_name"></div>
                                    <br>
                                    <table id='result_encrypt_insert' style='border-collapse: collapse;'>
                                        <thead>
                                            <tr>
                                                <th>Data Result Encrypt : </th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                    <br>
                                    <label><b>Message</b> : </label>
                                    <div style="display : inline" id="result_message"></div>
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

<script type="text/javascript" src="../javascript/inserttodb.js"></script>