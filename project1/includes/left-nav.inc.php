 <?php
 //session_start();
 ?>
 
  <div class="mdl-layout__drawer mdl-color--blue-grey-800 mdl-color-text--blue-grey-50">
       <div class="profile">
           <img src="book-images/small/0321886518.jpg" class="avatar">
           <h4><?php echo $_SESSION["myFirst"] . " " . $_SESSION["myLast"] ?></h4>           
           <span><?php echo $_SESSION["myEmail"] ?></span>
       </div>

    <nav class="mdl-navigation mdl-color-text--blue-grey-300">
        <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="/project1/index.php"><i class="material-icons" role="presentation">dashboard</i> Dashboard</a>
        <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="/project1/profile.php"><i class="material-icons" role="presentation">person</i></i> User Profile</a>  
        <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="/project1/browse-employees.php?"><i class="material-icons" role="presentation">message</i> Employees</a>
        <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="/project1/browse-books.php?subcategory=reset"><i class="material-icons" role="presentation">event</i> Books</a>
        <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="/project1/browse-universities.php?state=reset"><i class="material-icons" role="presentation">call</i> Universities</a>
        <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="/project1/analytics.php"><i class="material-icons" role="presentation">settings</i> Analytics</a>
        <a class="mdl-navigation__link mdl-color-text--blue-grey-300" href="/project1/aboutus.php"><i class="material-icons" role="presentation">view_list</i> About</a>                          
    </nav>
  </div>