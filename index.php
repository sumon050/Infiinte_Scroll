<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <title>Infinie Scroll</title>
</head>

<body>
  <div id="block">
    <script>
      var load_flag = 0;
      loadMore(load_flag);

      function loadMore(start) {
        jQuery.ajax({
          url: 'get.php',
          data: 'start=' + start,
          type: 'post',
          success: function (result) {
            jQuery('#block').append(result);
            load_flag += 10;
          }
        });
      }
      jQuery(document).ready(function () {
        jQuery(window).scroll(function () {
          if (jQuery(window).scrollTop() >= jQuery(document).height() - jQuery(window).height()) {
            loadMore(load_flag);
          }
        });
      });
    </script>
  </div>
</body>

</html>