<div id="page-content">
    <form action="<?= ROUTE; ?>/index.php" method="post" class="loginForm">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control"/>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control"/>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>


    </form>
</div>

<script>
    $(document).ready(function () {
        $("form").submit(function () {
            let username = $("#username").val();
            let password = $("#password").val();
            if (username == '' || password == '') {
                alert("Enter username = 'admin' and password ='admin'");
                return false;
            }
            $.post("<?=ROUTE?>/views/checkLogin.php", {username: username, password: password}, function (data) {
                $('#page-content').html(data);
            });
            return false;
        });
    });
</script>
