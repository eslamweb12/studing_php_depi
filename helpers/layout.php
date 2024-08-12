<form method="post"  enctype="multipart/form-data">
    <div class="form-group mb-2">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" value="<?php if(isset($_POST["username"])) echo $_POST["username"] ?>" >
        <?php if (!empty($username_error)) { ?>
            <p class="alert alert-danger"><?php echo htmlspecialchars($username_error); ?></p>
        <?php } ?>
    </div>

    <div class="form-group mb-2">
        <label for="email">Email</label>
        <input class="form-control" name="email" value="<?php if(isset($_POST["email"])) echo$_POST["email"] ?>">
        <?php if (!empty($email_error)) { ?>
            <p class="alert alert-danger"><?php echo htmlspecialchars($email_error); ?></p>
        <?php } ?>
       
    </div>

    <div class="form-group mb-2">
        <label for="">Skills</label>
        <input type="text" name="skills" class="form-control"  value="<?php if(isset($_POST["skills"])) echo$_POST["skills"] ?>">
        <?php if (!empty($skills_error)) { ?>
            <p class="alert alert-danger"><?php echo htmlspecialchars($skills_error); ?></p>
        <?php } ?>
    </div>
    <div class="form-group mb-2">
        <label for="">image</label>
        <input name="image" type="file" class="form-control"  >
        <?php if (!empty($image_error)) { ?>
            <p class="alert alert-danger"><?php echo htmlspecialchars($image_error); ?></p>
        <?php } ?>
    </div>

    <input type="submit" class="btn btn-success" value="Save">
</form>