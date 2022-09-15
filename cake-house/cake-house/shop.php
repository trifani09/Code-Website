<?php require_once('header.php')?>

<div class="contact-banner" style="background-image:url('assets/banner3.jpg'); background-size:cover; background-position:center; height:400px; background-attachment:fixed"></div>

<section style="background-attachment:fixed; background-image: url('assets/home-bg.jpg'); background-size:cover; background-position:center;">
    <div class="container shop-page">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h1>
                        Our Product
                    </h1>
                </div>
                <hr style="background-color: #E199A5; height:2px; width:100px">
                <div class="description">
                    <p class="desc-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat et eius inventore? Reiciendis itaque porro deleniti est cumque? Sunt fugit amet eius dolore nesciunt? Quasi non tempore voluptatum eveniet. Excepturi!</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-5" data-toggle="modal" data-target="#productModal">
                <div class="card border-0">
                    <div class="card-product text-center">
                        <img src="assets/11.jpeg" alt="">
                        <div class="padding-custom">
                            <div class="name-product">
                                <p>Accusantium Doloremque</p>
                            </div>
                            <hr>
                            <div class="price">
                                <h5>$104.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="col-sm-12 col-md-6 col-lg-4 my-5" data-toggle="modal" data-target="#productModal">
                <div class="card border-0">
                    <div class="card-product text-center">
                        <img src="assets/12.jpeg" alt="">
                        <div class="padding-custom">
                            <div class="name-product">
                                <p>Accusantium Doloremque</p>
                            </div>
                            <hr>
                            <div class="price">
                                <h5>$114.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-sm-12 col-md-6 col-lg-4 my-5" data-toggle="modal" data-target="#productModal">
                <div class="card border-0">
                    <div class="card-product text-center">
                        <img src="assets/13.jpeg" alt="">
                        <div class="padding-custom">
                            <div class="name-product">
                                <p>Accusantium Doloremque</p>
                            </div>
                            <hr>
                            <div class="price">
                                <h5>$104.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-sm-12 col-md-6 col-lg-4 my-5" data-toggle="modal" data-target="#productModal">
                <div class="card border-0">
                    <div class="card-product text-center">
                        <img src="assets/14.jpeg" alt="">
                        <div class="padding-custom">
                            <div class="name-product">
                                <p>Accusantium Doloremque</p>
                            </div>
                            <hr>
                            <div class="price">
                                <h5>$136.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="col-sm-12 col-md-6 col-lg-4 my-5" data-toggle="modal" data-target="#productModal">
                <div class="card border-0">
                    <div class="card-product text-center">
                        <img src="assets/17.jpeg" alt="">
                        <div class="padding-custom">
                            <div class="name-product">
                                <p>Accusantium Doloremque</p>
                            </div>
                            <hr>
                            <div class="price">
                                <h5>$108.80</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-sm-12 col-md-6 col-lg-4 my-5" data-toggle="modal" data-target="#productModal">
                <div class="card border-0">
                    <div class="card-product text-center">
                        <img src="assets/16.jpeg" alt="">
                        <div class="padding-custom">
                            <div class="name-product">
                                <p>Accusantium Doloremque</p>
                            </div>
                            <hr>
                            <div class="price">
                                <h5>$104.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Accusantium Doloremque</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="card-product-modal d-flex">
            <img src="assets/11.jpeg" alt="">
            <div class="desc-modal">
                <h6 class="pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi sit delectus sint, iste nam esse a! Veritatis ab cupiditate, optio necessitatibus sunt provident in officia consectetur laborum qui, praesentium accusantium.</h6>
                <p>Brand: <span>Palm</span></p>
                <p>Product Code: <span>Product 2</span> </p>
                <p>Availability: <span>In Stock</span></p>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-add">Add to cart</button>
      </div>
    </div>
  </div>
</div>
<?php require_once('footer.php')?>