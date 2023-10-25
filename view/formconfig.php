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
                                    <h5 class="card-title m-0">DB Connection</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Host</label>
                                        <?php if (isset($_SESSION['connect'])) { ?>
                                            <input type="text" id="host" value="<?= $_SESSION['host'] ?>" class="form-control" placeholder="Enter ..." autofocus autocomplete="no" required>
                                        <?php } else { ?>
                                            <input type="text" id="host" class="form-control" placeholder="Enter ..." autofocus autocomplete="no" required>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label>DBName</label>
                                        <?php if (isset($_SESSION['connect'])) { ?>
                                            <input type="text" id="dbname" value="<?= $_SESSION['dbname'] ?>" class="form-control" placeholder="Enter ..." autocomplete="no" required>
                                        <?php } else { ?>
                                            <input type="text" id="dbname" class="form-control" placeholder="Enter ..." autocomplete="no" required>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <?php if (isset($_SESSION['connect'])) { ?>
                                            <input type="text" id="username" value="<?= $_SESSION['username'] ?>" class="form-control" placeholder="Enter ..." autocomplete="no" required>
                                        <?php } else { ?>
                                            <input type="text" id="username" class="form-control" placeholder="Enter ..." autocomplete="no" required>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <?php if (isset($_SESSION['connect'])) { ?>
                                            <input type="text" id="password" value="<?= $_SESSION['password'] ?>" class="form-control" placeholder="Enter ..." autocomplete="no" required>
                                        <?php } else { ?>
                                            <input type="text" id="password" class="form-control" placeholder="Enter ..." autocomplete="no" required>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_db">Jenis DB</label>
                                        <select class="custom-select rounded-0" id="jenis_db">
                                            <?php if (isset($_SESSION['connect'])) { ?>
                                                <option value="mysql" <?= $_SESSION['jenis_db'] == "mysql" ?: "selected"  ?> selected>MYSQL</option>
                                                <option value="pgsql" <?= $_SESSION['jenis_db'] == "pgsql" ?: "selected"  ?> selected>PGSQL</option>
                                            <?php } else { ?>
                                                <option value="mysql">MYSQL</option>
                                                <option value="pgsql">PGSQL</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-danger" value="Disconnect" onclick="disconnect()">
                                    <input type="submit" class="btn btn-primary float-right" value="Connect" onclick="connect()">
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

<script type="text/javascript" src="../javascript/formconfig.js"></script>