<div class="dropdown" id="userprofile" disabled="disabled">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
        <?php  
        echo $_SESSION['name'];    ?>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="profile.php">Profile</a></li>
        <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Orders</a></li> -->
        <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Log Out</a></li>
    </ul>
</div>