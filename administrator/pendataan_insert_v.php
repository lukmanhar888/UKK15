<?php
include('header.php');
include('inavbar.php');
?>
<section class="cta-section section-padding section-bg" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 col-15">
                            <h2 class="text-white mb-4"></h2>

                            <form class="custom-form volunteer-form mb-5 mb-lg-0" action="pendataan_insert_m.php" method="post" role="form">
                                <h3 class="mb-4">pendataan barang</h3>

                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="nama_barang"  class="form-control" placeholder="nama barang" required>
                                    </div>

                                    <div class="col-lg-6 col-12">    
                                        <input type="text" name="stok"  class="form-control" placeholder="stok" required>
                                    </div>

                                    <div class="">
                                        <input type="text" name="harga"  class="form-control" placeholder="Harga" required>
                                    </div>

                                    
                                </div>

                                

                                <button type="submit" class="form-control">Submit</button>
                            </form>
                        </div>

                        
                    </div>
                </div>
            </section>

    <?php
include('footer.php');


?>    
