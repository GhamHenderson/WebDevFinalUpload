<?php
<<<<<<< HEAD
=======
/**
 * Use an HTML form to edit an entry in the
 * users table.
 *
 */
>>>>>>> d349fa6afd7ceb46d341aeebaa771df7d710b414
require "config.php";
require "common.php";
if (isset($_POST['submit'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $user =[
            "id"        => $_POST['id'],
            "firstname" => $_POST['firstname'],
            "lastname"  => $_POST['lastname'],
            "email"     => $_POST['email'],
            "age"       => $_POST['age'],
<<<<<<< HEAD
            "location"  => $_POST['location'],
        ];

        $sql = "UPDATE databasetest.users
=======
            "location"  => $_POST['location']
        ];

        $sql = 'UPDATE databasetest.users
>>>>>>> d349fa6afd7ceb46d341aeebaa771df7d710b414
            SET id = :id,
              firstname = :firstname,
              lastname = :lastname,
              email = :email,
              age = :age,
<<<<<<< HEAD
              location = :location
            WHERE id = :id";
=======
              location = :location,
            WHERE id = :id';
>>>>>>> d349fa6afd7ceb46d341aeebaa771df7d710b414

        $statement = $connection->prepare($sql);
        $statement->execute($user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

if (isset($_GET['id'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);
        $id = $_GET['id'];
<<<<<<< HEAD
        $sql = "SELECT * FROM databasetest.users WHERE id = :id";
=======
        $sql = "SELECT * FROM users WHERE id = :id";
>>>>>>> d349fa6afd7ceb46d341aeebaa771df7d710b414
        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
} else {
    echo "Something went wrong!";
    exit;
}
?>

<?php require "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) : ?>
    <?php echo escape($_POST['firstname']); ?> successfully updated.
<?php endif; ?>

    <h2>Edit a user</h2>

    <form method="post">
        <?php foreach ($user as $key => $value) : ?>
            <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
<<<<<<< HEAD
            <input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo escape($value); ?>"<?php echo ($key === 'id' ? 'readonly' : null); ?>>
=======
            <input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo escape($value); ?>" <?php echo ($key === 'id' ? 'readonly' : null); ?>>
>>>>>>> d349fa6afd7ceb46d341aeebaa771df7d710b414
        <?php endforeach; ?>
        <input type="submit" name="submit" value="Submit">
    </form>

    <a href="index.php">Back to home</a>

<?php require "../templates/footer.php"; ?>