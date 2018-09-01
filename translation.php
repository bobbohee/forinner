<?php include("header.php"); ?>
  <script>
  
    $(function() {

        $(".translation").click(function() {

          var eng = $(".voice_eng").val();

         $.ajax({
             type : "GET",
             url : "translation-ok.php?eng=" + eng,
             dataType : "text",
             error : function(){
                 alert('통신실패');
             },
             success : function(data){
                 $(".speak_kor").val(data) ;
             }
         });
          
        });

    });

  </script>
  <div data-role="page" id="translation" class="global_header">
  <?php include("role-header-normal.php"); ?>
    <div data-role="content" class="content">
      <form method="get" autocomplete="off">
        <input type="text" name="eng" id="eng" class="voice_eng">
        <button type="button" class="translation"><i class="fas fa-sync-alt"></i></button>
        <input type="text" id="kor" class="speak_kor" readonly="readonly">
      </form>
    </div> <!-- content -->
    <div data-role="footer" data-position="fixed" data-theme="b">
      <button id="btn-mic" class="ui-btn ui-mini">
        <i class="fas fa-microphone"></i>
      </button>
      <button id="btn-tts" class="ui-btn ui-mini">
        <i class="fas fa-volume-off"></i>
      </button>
    </div> <!-- footer -->
  </div> <!-- page -->
<script src="./js/translation.js"></script>
<?php include("footer.php"); ?>