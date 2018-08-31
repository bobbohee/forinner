<?php include("header.php"); ?>
  <div data-role="page" id="map" class="global_header">
  <?php include("role-header-map.php"); ?>
    <div data-role="content" class="content">
      <div id="map"></div>
    </div> <!-- content -->
    <div data-role="footer" data-position="fixed" data-theme="b">
      <div data-role="navbar" data-position="fixed">
        <ul>
          <li>
            <a href="#" data-icon="search" id="current_location">현재 위치 찾기</a>
          </li>
        </ul>
      </div>
    </div> <!-- footer -->
  </div> <!-- page -->
  <script src="js/map.js"></script>
<?php include("footer.php"); ?>
