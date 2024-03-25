<div class="w-100 h-100">
    <!-- <header id="cover">
        <div class="container-fluid h-100 d-flex flex-column justify-content-end align-items-end">
            <div class="flex-grow-1 d-flex justify-content-center align-items-center w-100">
                <div id="banner-site-title" class="w-100 text-center wow fadeIn" data-wow-duration="1.2s">Try My Recipe</div>
            </div>
        </div>
    </header> -->
    <header id="cover">
      <div class="container-fluid h-100 d-flex">
        <div class="d-flex flex-column justify-content-center align-items-center h-100 w-100">
          <div>
            <p>Recipes for your <br> Home Cooked meals</p>
            <p>Elevate your home-cooked meals with our delicious reciple collection.</p>
            <p>Impress your family with culinary expertise and try our recipes today.</p>
          </div>
          <div>
            <a href="./?page=categories">Go to categories</a>
          </div>
        </div>
        <div class="h-100 w-100 d-flex justify-content-center align-items-center">
          <div class="cover-image">
          </div>
        </div>
      </div>
        <!-- <div class="container-fluid h-100 d-flex flex-column justify-content-end align-items-end">
            <div class="flex-grow-1 d-flex justify-content-center align-items-center w-100">
                <div id="banner-site-title" class="w-100 text-center wow fadeIn" data-wow-duration="1.2s">Try My Recipe</div>
            </div>
        </div> -->
    </header>
    <div class="flex-grow-1 bg-light mb-0 mt-3">
        <section class="wow"  data-wow-duration="1.5s">
            <div class="container row mx-auto" >
                <h3 class="fs-2 fw-bold ms-2">Our latest recipes</h3>
                <!-- <?php echo html_entity_decode(file_get_contents('./welcome.html')) ?> -->
                <?php
                $sql = "SELECT * FROM category_list order by `name` asc";
                $qry = $conn->query($sql);
                $i = 0;
                while($row = $qry->fetchArray()):
                ?>
                <div class=" col wow p-3" data-wow-delay="<?php echo ($i > 0) ? $i:''; $i += .5; ?>s">
                    <div class="card shadow-sm ">
                        <div class="card-body ">
                            <h5 class="card-title mb-1"><?php echo $row['name'] ?></h5>
                            <hr class="bg-danger opacity-100">
                            <p class="truncate-3 fw-light fst-italic lh-1" title="<?php echo $row['description'] ?>"><small><?php echo $row['description'] ?></small></p>
                            <div class="w-100 d-flex justify-content-end">
                                <div class="col-auto">
                                    <a href="./?page=recipe&cid=<?php echo $row['category_id'] ?>" class="btn btn-sm btn-danger px-2 py-1 rounded-3 bg-gradient rounded-0">Explore Recipes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
    </div>
</div>
<script>
    // $(document).scroll(function() { 
    //     $('#topNavBar').removeClass('bg-transaparent bg-danger bg-dark')
    //     if($(window).scrollTop() === 0) {
    //        $('#topNavBar').addClass('bg-transaparent')
    //     }else{
    //        $('#topNavBar').addClass('bg-danger')
    //     }
    // });
    // $(function(){
    //     $(document).trigger('scroll')
    // })
</script>