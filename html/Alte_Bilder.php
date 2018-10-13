<?php
/**
 * Created by PhpStorm.
 * User: Riccardo Schula
 * Date: 8/21/18
 * Time: 9:40 AM
 */
$thisPage='Old Pictures';
$pictureCounter = 13;
include '../header.php';
?>
  <section class='pictures'>
    <div class="row">
      <hr>
      <h1>2008</h1>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2008_08.jpg" style="width:100%" onclick="openModal();currentSlide(13)">
      </div>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2008_07.jpg" style="width:100%" onclick="openModal();currentSlide(12)">
      </div>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2008_06.jpg" style="width:100%" onclick="openModal();currentSlide(11)">
      </div>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2008_05.jpg" style="width:100%" onclick="openModal();currentSlide(10)">
      </div>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2008_04.jpg" style="width:100%" onclick="openModal();currentSlide(9)">
      </div>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2008_03.jpg" style="width:100%" onclick="openModal();currentSlide(8)">
      </div>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2008_02.jpg" style="width:100%" onclick="openModal();currentSlide(7)">
      </div>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2008_01.jpg" style="width:100%" onclick="openModal();currentSlide(6)">
      </div>
    </div>
    <div class="row">
      <hr>
      <h1>2006</h1>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2006_03.jpg" style="width:100%" onclick="openModal();currentSlide(5)">
      </div>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2006_02.jpg" style="width:100%" onclick="openModal();currentSlide(4)">
      </div>
      <div class="column">
        <img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_2006_01.jpg" style="width:100%" onclick="openModal();currentSlide(3)">
      </div>
    </div>
    <div class="row">
      <hr>
      <h1>1989</h1>
      <div class="column">
				<img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_from_1989_02.jpg" style="width:100%" onclick="openModal();currentSlide(2)">
			</div>
      <div class="column">
				<img class="hover-shadow cursor" src="/Pictures/oldpictures/picture_from_1989_01.jpg" style="width:100%" onclick="openModal();currentSlide(1)">
			</div>
    </div>

    <div id="myModal" class="modal">
			<span class="close cursor" onclick="closeModal()">&times;</span>
			<div class="modal-content">
				<div class="mySlides">
					<div class="numbertext"> 1 / <?php echo $pictureCounter ?></div>
					<img class="zoom" src="/Pictures/oldpictures/picture_from_1989_01.jpg" style="width: 100%">
				</div>
        <div class="mySlides">
  				<div class="numbertext"> 2 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_from_1989_02.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 3 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2006_01.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 4 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2006_02.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 5 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2006_03.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 6 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2008_01.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 7 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2008_02.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 8 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2008_03.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 9 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2008_04.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 10 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2008_05.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 11 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2008_06.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 12 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2008_07.jpg" style="width: 100%">
  			</div>
        <div class="mySlides">
  				<div class="numbertext"> 13 / <?php echo $pictureCounter ?></div>
          <img class="zoom" src="/Pictures/oldpictures/picture_2008_08.jpg" style="width: 100%">
  			</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </section>

<?php
include '../footer/footer.php';
 ?>
