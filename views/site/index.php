<?php
$this->registerCssFile('@web/css/mobile.css');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<div class="mobile-wrapper">

<section class="slider">
  <div class="swiper programSwiper">
    <div class="swiper-wrapper">

      <?php foreach ($program as $item): ?>
        <div class="swiper-slide">
          <img
            src="https://ik.imagekit.io/uvfyddsfq/<?= $item['bn_uri'] ?>"
            alt="<?= $item['slug'] ?>"
          />
        </div>
      <?php endforeach; ?>

    </div>

    <div class="swiper-pagination" ></div>
</div>
</section>

<section id="kategori">
  <h3 class="heading">Kategori</h3>
  <div class="grid-4">
    <?php foreach ($kategori as $item): ?>
      <div class="card">
        <img
          src="https://ik.imagekit.io/uvfyddsfq/<?= $item['uri'] ?>"
          alt="<?= $item['nama'] ?>"
        />
        <span><?= $item['nama'] ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</section>

   <section id="best-seller" class="slider best">
  <div class="swiper programSwiper">
    <div class="swiper-wrapper">

      <?php foreach ($best as $item): ?>
        <div class="swiper-slide">
          <img
            src="https://ik.imagekit.io/uvfyddsfq/<?= $item['bn_uri'] ?>"
            alt="<?= $item['slug'] ?>"
          />
        </div>
      <?php endforeach; ?>

    </div>

    <div class="swiper-pagination" ></div>
</div>

<section id="brand">
  <h3 class="heading">Brand</h3>
  <div class="grid-2">
    <?php foreach ($brand as $item): ?>
      <img
        src="https://ik.imagekit.io/uvfyddsfq/<?= $item['uri'] ?>"
        alt="<?= $item['nama'] ?>"
      />
    <?php endforeach; ?>
  </div>
</section>


</div>

<script>
  new Swiper(".programSwiper", {
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    }
  });
</script>
