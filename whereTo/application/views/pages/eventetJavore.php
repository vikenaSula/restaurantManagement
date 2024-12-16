<body>
   <section id="lista" class="list2">
      <div class="global-headline">
          <h1 class="sub-headline">
            <span class="first-letter">W</span>eekly
               <span class="headline headline-dark">Events</span></h1>
      </div><br>
      <div class="separator">
      <div class="line line-left line2"></div>
      <div class="asterisk"><i  class="fas fa-asterisk"></i></div>
      <div class="line line-right line2"></div>
      </div><br>
      <div class="the-list">
      <div class="swiper-container">
      <div class="swiper-wrapper">
       <?php foreach($post as $posts) : ?>
        <div class="swiper-slide"> <a href="<?php echo base_url(); ?>/rezervimi"><img src="<?php echo base_url(); ?>/assets/images/posts/<?php echo $posts['eventet_javore']; ?>"></img></a></div>
       <?php endforeach ; ?>
    </div> 
     <!-- Adding Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <!-- Discover Places ends
</section>
--> 
</div>
</section>
</body>