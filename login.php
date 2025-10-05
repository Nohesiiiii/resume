<?php require_once('inc/header.php'); ?>

<title>Admin Login Page</title>
</head>
<body>

<div class="full-width d-flex justify-content-center align-items-center">

    <form action="" method="post" class="rounded p-4 shadow bg-white" style="width: 350px;">

        <div class="mb-3">
            <h4 class="text-center text-primary">Login</h4>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="view/index.php" class="btn btn-primary">Login</a>
            
        </div>

    </form>
</div>

<?php require_once('inc/footer.php'); ?>
