<?php include('header.php');?>

<!-- Start Header -->
<div class="fables-headerprojects fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Projects Timeline</h2>
    </div> 
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li> 
            <li class="breadcrumb-item active" aria-current="page">Projects Timeline </li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content -->  
<div class="container"> 
   <div class="timeline multi-event-timeline">
      <span class="fables-second-background-color line"></span>
      
      <ul class="timeline-items">  
        <img  class="rounded-images" src="assets/custom/images/projects/small-circle.jpeg" width="10px">
        <li class="is-hidden timeline-item">
              <span class="gallery-mlti-date"><img class="mid-circle" src="assets/custom/images/projects/projt1.jpg"></span> 
              <div class="fables-blog-cat-block blog-grid-style">  
                  <a href="project1.php"><img src="assets/custom/images/projects/projt1.jpg" alt="" class="img-fluid fables-blog-img"></a>
                  <h1 class="font-15 semi-font mx-3 mt-3"><a href="#" class="fables-second-text-color fables-main-hover-color">
                      NATURE RECP RETURNS FOR YOU
                  </a></h1> 
                  <p class="fables-forth-text-color font-13 m-3">
                     While the green of nature is the prwe-domeinant feature of vanadhara to help you live a life of comfort. it is replete with lots of amenities and features. We've ensured that while there are modern residences and amenities to accompany, most part of nature stays untouched.

                  </p>

             </div>
        </li>
     
        <li class="is-hidden timeline-item">
             <span class="gallery-mlti-date"><img  class="mid-circle" src="assets/custom/images/projects/projt2.jpg"></span>
              <div class="fables-blog-cat-block blog-grid-style">  
                  <a href="project1.php"><img src="assets/custom/images/projects/projt2.jpg" alt="" class="img-fluid fables-blog-img"></a> 
                  <h1 class="font-15 semi-font mx-3 mt-3"><a href="#" class="fables-second-text-color fables-main-hover-color">
                    WHITE SANDALWOOD PLANTATION
                  </a></h1> 
                  <p class="fables-forth-text-color font-13 m-3">
                  sandalwood is one of the most widely accepted fragrant trees in the world .The aromatic wood retains its fragrance for decades and the wood is heavy and yellow in color. Thanks to its multi-use qualities,it touches every aspects of our life,starting from tradition to beauty, skin care,herbel medicines, fragrance,to arts and crafts.
                  </p>

             </div> 
        </li>
         
      </ul>

      <ul class="timeline-items"> 
     <img  class="rounded-images" src="assets/custom/images/projects/small-circle.jpeg" width="10px">
        <li class="is-hidden timeline-item">
             <span class="gallery-mlti-date"><img  class="mid-circle" src="assets/custom/images/projects/projt3.jpg"></span>
              <div class="fables-blog-cat-block blog-grid-style">  
                  <a href="project1.php"><img src="assets/custom/images/projects/projt3.jpg" alt="" class="img-fluid fables-blog-img"></a>
                  <h1 class="font-15 semi-font mx-3 mt-3"><a href="#" class="fables-second-text-color fables-main-hover-color">
                    MAKE A LIVING PART OF YOU
                  </a></h1> 
                  <p class="fables-forth-text-color font-13 m-3">
                     Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Quidem, ipsa, sit. Amet commodi tempora laboriosam ipsa dolorem illum provident. Vero sed molestiae voluptate exercitationem adipisci, consequatur fuga dolore nostrum ullam.
                  </p>

             </div>
        </li>
        <li class="is-hidden timeline-item">
             <span class="gallery-mlti-date"><img  class="mid-circle" src="assets/custom/images/projects/projt4.jpg"></span>
              <div class="fables-blog-cat-block blog-grid-style">
                  <a href="project1.php"><img src="assets/custom/images/projects/projt4.jpg" alt="" class="img-fluid fables-blog-img"></a>  
                  <h1 class="font-15 semi-font mx-3 mt-3"><a href="#" class="fables-second-text-color fables-main-hover-color">
                   LIVE LIKE IN VILLAGE
                  </a></h1> 
                  <p class="fables-forth-text-color font-13 m-3">
                     The air, the mood,the ambience,the amenities, the features and the entire landscape of vanadhara will transport you to a typical village life it's the kind of life our forefathers lived devoid of pollution, any unnatural substances,and fresh clean air. Come experience the joy of real living.
                  </p>

             </div>
        </li> 
      </ul>

    </div>


</div>   
<!-- /End page content -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
         $(document).ready(function () {
    $('.nav li').removeClass('active');
    $('.projects').addClass('active');
    $('.projects a').css("color", "#e75b1e");
});
</script>
<?php include('footer.php');?>