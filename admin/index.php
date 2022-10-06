<html>

<head>
    <title>Siswa</title>
    <link rel="stylesheet" href="../css/sidebar.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">SKADIK 501</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="../antap/data_antap.php" target="iframe_a">Data
                    Antap Skadik
                    501</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="../siswa/data_siswa.php" target="iframe_a">Data Siswa Skadik
                    501</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="../hanjar/data_hanjar.php" target="iframe_a">Data Bahan
                    Ajar</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="/lattis38/logout.php">LogOut</a>
            </div>

        </div>
        <!-- Page Wrapper-->
        <div id="page-content-wrapper">

            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <iframe class="container-fluid w-100 h-100" src="welcome.php" name="iframe_a"
                    title="Iframe Example"></iframe>
            </div>
        </div>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/sidebar.js"></script>
</body>

</html>