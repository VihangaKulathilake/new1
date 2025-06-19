<?php
    include_once 'header.php';
?>
    <h1 class="hi">Hi, <?php echo $_SESSION["firstName"]?>! 👋</h1>
    <form class="searchbarhome" action="searchResults.php" method="get">
        <input type="search" class="searchbar" name="query" class="searchhome" placeholder="Search events,users,..." style="font-size:18px; padding-left:10px">
        <button type="submit" class="searchbtn">Search</button>
    </form>

    <div class="about">
        <div class="abouttext">
            <h2>About Us</h2>
            <p>
                Eventz is the official University Event Management System designed to
                 simplify the way campus events are organized and experienced. From
                  academic seminars to cultural festivals, Eventz helps students and 
                  staff easily create, manage, and participate in events, all in one place.
                  Our goal is to make university life more connected and organized by streamlining event 
                  registrations, updates, and participation. With a user-friendly interface and 
                  powerful features, Eventz ensures that no opportunity on campus is missed.
                Join Eventz, where every event starts!
            </p>
        </div>
    </div>

<?php
    include_once 'footer.php';
?>