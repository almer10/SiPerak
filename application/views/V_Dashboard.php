<!DOCTYPE html>
<html lang="id">

<?= $header; ?>

<body>
  <div class="container-scroller">

    <?= $navbar; ?>

    <div class="container-fluid page-body-wrapper">

      <?= $menu; ?>

      <!-- page content start -->

      <?= $content; ?>

      <!-- page content end -->

      <?= $footer; ?>

    </div>
  </div>

  <?= $javascript; ?>

  <script>
    var carousel = document.querySelector('.carousel');
    var cellCount = 9;
    var selectedIndex = 0;

    function rotateCarousel() {
      var angle = selectedIndex / cellCount * -360;
      carousel.style.transform = 'translateZ(-288px) rotateY(' + angle + 'deg)';
    }

    var prevButton = document.querySelector('.previous-button');
    prevButton.addEventListener('click', function() {
      selectedIndex--;
      rotateCarousel();
    });

    var nextButton = document.querySelector('.next-button');
    nextButton.addEventListener('click', function() {
      selectedIndex++;
      rotateCarousel();
    });
  </script>

</body>

</html>