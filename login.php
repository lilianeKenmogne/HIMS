<br /> <br />
    <form class="container" method="POST">
        <?php
        if (isset($errorMsg)) {
            echo $errorMsg;
        }
        ?>
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">se connecter</button>
        <a href=signup.php>
            <p>Je n'ai pas de compte, je minscris</p>
        </a>
    </form>