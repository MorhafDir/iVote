<h1>iVote</h1>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="verkiezing_view.php">verkiezing</a></li>
        <li><a href="admin_dashboard.php">admin</a></li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Profiel</a>
            <div class="dropdown-content"><p>Welcome, <?php echo $loggedInUser; ?>!</p>
                <br>
                <p><a href="./profiel.php">Update Profile</a></p>
                <br>
                <a href="../controller/logout.php"><button>Logout</button></a>
            </div>
        </li>
    </ul>
</nav>
