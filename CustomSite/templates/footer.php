<footer>
    <p>Author: Graham Henderson - B00130193<br>
        <a href="mailto:hege@example.com">B00130193@mytudublin.ie</a></p>

    <?php if($_SESSION['Active'] == true){ ?>
        <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>
    <?php } ?>

</footer>
</body>
</html>