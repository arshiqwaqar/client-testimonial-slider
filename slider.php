<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
            
    <div class="swiper mySwiper container">
    <h1 class="text-center" style="font-weight: bold;">Client Testimonials</h1>
    <div class="swiper-wrapper">
        <?php
        $i=0;
        while($i<=10){
        ?>
      <div class="swiper-slide bg-light">
       <div class="testimonialbox">
        <img src="images/pngwing.com.png" alt="" class="quote">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad aliquid error in neque ex! Sint cumque pariatur ex, esse illum iste quod eum, autem non ratione reiciendis voluptatem, facilis fuga?</p>
        <div class="details">
            <div class="imgbx">
                <img src="images/user1.jpg" alt="">
            </div>
            <h3>Someone Famous <br> <span>Creative designer</span></h3>
        </div>
       </div>
      </div>
  
      <?php
      $i++;
      }
      ?>
    </div>
    
  </div>
    </section>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
      },
      loop:true,
    });
  </script>