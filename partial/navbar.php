<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="formconfig.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == "formconfig.php" ? "active" : "") ?>">Config Database</a>
                </li>
                <li class="nav-item dropdown <?php echo (basename($_SERVER['PHP_SELF']) == "form.php" ? "active" : "") ?> <?php echo (basename($_SERVER['PHP_SELF']) == "selectfromdb.php" ? "active" : "") ?> <?php echo (basename($_SERVER['PHP_SELF']) == "inserttodb.php" ? "active" : "") ?> <?php echo (basename($_SERVER['PHP_SELF']) == "updatetodb.php" ? "active" : "") ?>">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">With Rest API</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li class="nav-item">
                            <a href="form.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == "form.php" ? "active" : "") ?>">Form</a>
                        </li>
                        <li class="nav-item">
                            <a href="selectfromdb.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == "selectfromdb.php" ? "active" : "") ?>">Select from DB</a>
                        </li>
                        <li class="nav-item">
                            <a href="inserttodb.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == "inserttodb.php" ? "active" : "") ?>">Insert to DB</a>
                        </li>
                        <li class="nav-item">
                            <a href="updatetodb.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == "updatetodb.php" ? "active" : "") ?>">Update to DB</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="querywithudf.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == "querywithudf.php" ? "active" : "") ?>">Query with UDF</a>
                </li>
            </ul>
        </div>

    </div>
</nav>