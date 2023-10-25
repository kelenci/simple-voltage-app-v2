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
                                    <h5 class="card-title m-0">Enter your query</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>SELECT</label>
                                        <?php if (isset($_SESSION['fields'])) { ?>
                                            <input type="text" id="select" value="<?= $_SESSION['select'] ?>" class="form-control" placeholder="Enter ..." autocomplete="no" autofocus>
                                        <?php } else { ?>
                                            <input type="text" id="select" class="form-control" placeholder="Enter ..." autocomplete="no" autofocus>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label>FROM</label>
                                        <?php if (isset($_SESSION['fields'])) { ?>
                                            <input type="text" id="from" value="<?= $_SESSION['from'] ?>" class="form-control" placeholder="Enter ..." autocomplete="no">
                                        <?php } else { ?>
                                            <input type="text" id="from" class="form-control" placeholder="Enter ..." autocomplete="no">
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label>LIMIT</label>
                                        <?php if (isset($_SESSION['fields'])) { ?>
                                            <input type="text" id="limit" value="<?= $_SESSION['limit'] ?>" class="form-control" placeholder="Default limit is 5" autocomplete="no">
                                        <?php } else { ?>
                                            <input type="text" id="limit" class="form-control" placeholder="Default limit is 5" autocomplete="no">
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Format</label>
                                        <?php if (isset($_SESSION['fields'])) { ?>
                                            <input type="text" id="format" value="<?= $_SESSION['format'] ?>" class="form-control" placeholder="Enter ..." autocomplete="no">
                                        <?php } else { ?>
                                            <input type="text" id="format" class="form-control" placeholder="Enter ..." autocomplete="no">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-success float-right" value="Execute" onclick="execute()">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h2 class="m-0"> Data on DATABASE</h2>
                                    <div class="card">
                                        <div class="card-body">
                                            <table id='dataONDatabase' style='border-collapse: collapse;'>
                                                <thead>
                                                    <tr>
                                                        <th>Data</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h2 class="m-0"> Result Encrypt</h2>
                                    <div class="card">
                                        <div class="card-body">
                                            <table id='result_encrypt' style='border-collapse: collapse;'>
                                                <thead>
                                                    <tr>
                                                        <th>Data</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h2 class="m-0"> Result Decrypt</h2>
                                    <div class="card">
                                        <div class="card-body">
                                            <table id='result_decrypt' style='border-collapse: collapse;'>
                                                <thead>
                                                    <tr>
                                                        <th>Data</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
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

<script type="text/javascript" src="../javascript/selectfromdb.js"></script>