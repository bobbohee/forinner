<?php include("header.php"); ?>
  <div data-role="page" id="hospital" class="global_header">
  <?php include("role-header-pictogram.php"); ?>
    <div data-role="content" class="content">
    <input type="search" name="search-mini" id="search-mini" data-mini="true" autocomplete="off"/>
      <ul data-role="listview" data-inset="true">
        <li><a href="hospital_one.php" rel="external"><img src="img/hospital/emoji_number/one.png"><h3>아픈 곳이 어딘지</h3><h3>Where is your pain</h3></a></li>
        <li><a href="hospital_two.php" rel="external"><img src="img/hospital/emoji_number/two.png"><h3>얼마나 아픈지</h3><h3>Pain scale</h3></a></li>
        <li><a href="hospital_three.php" rel="external"><img src="img/hospital/emoji_number/three.png"><h3>어떻게 아픈지</h3><h3>Describe your pain</h3></a></li>
        <li><a href="hospital_four.php" rel="external"><img src="img/hospital/emoji_number/four.png"><h3>언제부터 아픈지</h3><h3>When did you first fell pain</h3></a></li>
        <li><a href="hospital_five.php" rel="external"><img src="img/hospital/emoji_number/five.png"><h3>증상</h3><h3>Other symptoms</h3></a></li>
      </ul>
    </div> <!-- content -->
  </div> <!-- page -->
<?php include("footer.php"); ?>