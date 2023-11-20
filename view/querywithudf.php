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
                                        <label>Value</label>
                                        <textarea id="query" class="form-control" rows="3" placeholder="Enter query with udf command" autofocus></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-success float-right" value="RUN" onclick="querywithudf()">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Result Query</h5>
                                </div>
                                <div class="card-body">
                                    <table id='result_query' style='border-collapse: collapse;'>
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

<script type="text/javascript" src="../javascript/querywithudf.js"></script>