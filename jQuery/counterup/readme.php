<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="jquery.countup.js"></script>
<?$number = 12345678;?>

<script>

    $(function(){
      document.getElementById("counter").innerHTML = "<?=$number?>";
      
      $(".btn").click(function(){
        
        $("#counter").countUp();
    });
    });
</script>
</head>
<body>
    <button class="btn">버튼</button>
    <span id="counter"></span>
</body>
</html>