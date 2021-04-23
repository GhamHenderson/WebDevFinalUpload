<?php

/**
 * Delete a user
 */

require "config.php";
require "common.php";

if (isset($_GET["id"])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);

        $id = $_GET["id"];

<<<<<<< HEAD
        $sql = "DELETE FROM users WHERE id = :id";
=======
        $sql = "DELETE FROM databasetest.users WHERE id = :id";
>>>>>>> d349fa6afd7ceb46d341aeebaa771df7d710b414

        $statement = $connection->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();

        $success = "User successfully deleted";
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

try {
    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT * FROM users";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
<?php require "../templates/header.php"; ?>

    <h2>Delete users</h2>

<<<<<<< HEAD
<?php if ($success) echo $success; ?>

=======
>>>>>>> d349fa6afd7ceb46d341aeebaa771df7d710b414
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Age</th>
            <th>Location</th>
<<<<<<< HEAD
            <th>Date</th>
=======
>>>>>>> d349fa6afd7ceb46d341aeebaa771df7d710b414
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) : ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["firstname"]); ?></td>
                <td><?php echo escape($row["lastname"]); ?></td>
                <td><?php echo escape($row["email"]); ?></td>
                <td><?php echo escape($row["age"]); ?></td>
                <td><?php echo escape($row["location"]); ?></td>
<<<<<<< HEAD
                <td><?php echo escape($row["date"]); ?> </td>
                <td><a href="delete.php?id=<?php echo escape($row["id"]); ?>">Delete</a></td>
=======
                <td><a href="delete.php?id=<?php echo escape($row) ?>Delete</a></td>
>>>>>>> d349fa6afd7ceb46d341aeebaa771df7d710b414
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <a href="index.php">Back to home</a>

<?php require "../templates/footer.php"; ?>