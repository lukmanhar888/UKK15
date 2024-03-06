<?php
include('header.php');
include('inavbar.php');
?>

<section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    
                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="registrasi_insert_m.php" method="post" role="form">
                            <h2>Registrasi</h2>

                                                        <!-- <div class="row"> -->
                                <!-- <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="id" id="first-name" class="form-control" placeholder="id" required>
                                </div> -->

                                <!-- <div class="col-lg-6 col-md-6 col-12"> -->
                                    <input type="text" name="nama" id="last-name" class="form-control" placeholder="nama" required>
                                <!-- </div> -->
                            <!-- </div> -->

                            <input type="text" name="username" id="email" class="form-control" placeholder="username" required>
                            
                            <input type="password" name="password" id="email" class="form-control" placeholder="password" required>

                            <select name="status" id="" class="form-control" required>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Petugas">Petugas</option>
                            </select>
                            
                            <button type="submit" class="form-control">submit</button>
                            
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

<?php
include('footer.php');
?>    
