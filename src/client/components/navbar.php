<nav class="main-nav">
    <!-- ***** Logo Start ***** -->
    <a href="index.php" class="logo">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/images/logoo.png" alt="">
    </a>
    <!-- ***** Logo End ***** -->
    <!-- ***** Search End ***** -->
    <div class="search-input">
        <form id="search" action="#">
            <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
            <i class="fa fa-search"></i>
        </form>
    </div>
    <!-- ***** Search End ***** -->
    <!-- ***** Menu Start ***** -->
    <ul class="nav">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="page1.php">Introduction</a></li>
        <li><a href="#">Télécharger</a></li>
        <li><a href="profile.php">
                <?php
                echo " " . $row['lastname'] . "";
                ?>
                <img src="assets/images/profile-header.jpg" alt="">
            </a></li>
    </ul>
    <a class='menu-trigger'>
        <span>Menu</span>
    </a>
    <!-- ***** Menu End ***** -->
</nav>