  <?= $this->extend('layout/page_layout') ?>

  <?= $this->section('content') ?>

    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" style="background-color: #454545;">
      <div class="container justify-content-center align-items: left;">
        <div class="row">
          <div class="col text-center">
            <p><img src="<?= base_url ()?>/assets/image/mac.png" alt="" style="height: 100%; width:70% ; object-fit: cover;"></p>
          </div>
          <div class="about">
            <h3 style="color: #fff;">Hello</h3>
              <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>  
      </div>
    </div>
    <!-- end about -->
    <?= $this->endSection() ?>
 
