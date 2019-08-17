                        <div class="sidebar-widget-area">
                            <h5 class="title">INFORMACIÓN</h5>
                            <div class="widget-content ">
                                <!-- Single Blog Post -->
                                <?php
                                    $apiUrl = 'https://www.mindicador.cl/api';
                                    //Es necesario tener habilitada la directiva allow_url_fopen para usar file_get_contents
                                    if ( ini_get('allow_url_fopen') ) {
                                        $json = file_get_contents($apiUrl);
                                    } else {
                                        //De otra forma utilizamos cURL
                                        $curl = curl_init($apiUrl);
                                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                                        $json = curl_exec($curl);
                                        curl_close($curl);
                                    }
 
                                    $dailyIndicators = json_decode($json);

                                ?>
                                <div class="single-blog-post post-style-2 d-flex justify-content-center widget-post">
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0"> UF:<?php echo $dailyIndicators->uf->valor; ?> </h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex justify-content-center widget-post">
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0"><?php echo 'Dólar:   ' . $dailyIndicators->dolar->valor; ?></h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex justify-content-center widget-post">
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0"><?php echo 'Euro: $' . $dailyIndicators->euro->valor; ?></h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex justify-content-center widget-post">
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0"><?php echo 'IPC:' . $dailyIndicators->ipc->valor; ?></h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex justify-content-center widget-post">
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0"><?php echo 'UTM:' . $dailyIndicators->utm->valor; ?></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-blog-post post-style-2 d-flex justify-content-center widget-post">
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0"><?php  echo 'IVP:' . $dailyIndicators->ivp->valor; ?></h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-blog-post post-style-2 d-flex justify-content-center widget-post">
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0"><?php echo 'Imacec:' . $dailyIndicators->imacec->valor; ?></h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
