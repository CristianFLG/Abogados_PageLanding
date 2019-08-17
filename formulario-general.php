    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url(img/blog-img/bg1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        <img src="img/core-img/logo.png">
                        <h3 class="mt-30">Visítenos en Viña del Mar.</h3>
                        <h3>!Llame Ahora!</h3>
                        <h3 class="mt-15">+56955278325</h3>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6 formulario">
                    <div class="single-blog-title text-center">
                        <form method="post" action="/abogadosplus/correo.php" name="formulario">
                            <div class="form-group">
                                <select class="form-control" id="sel1" name="contacto">
                                    <option value="contactar">Contactar como:</option>
                                    <option value="Reunion con">Agendar Reunión</option>
                                    <option value="Llamar a">Llámenme</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="correo" class="form-control" placeholder="Correo Electrónico" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="telefono" class="form-control" placeholder="Teléfono/Celular" required>
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="situacion" class="form-control" placeholder="Situación" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning"><b>Enviar Consulta</b></button>
                        </form>
                    </div>
                        <?php  
                        if(isset($_GET['enviado'])==1)
                        {
                            echo '<div class="container aviso mt-30" >';
                                echo'<div class="row text-center">';
                                echo'<div class="col-12"><b>ENVIADO CON ÉXITO</b></div>';
                                echo'</div>';
                            echo'</div>';
                        }else{

                        }
                        ?>
                </div>
            </div>
        </div>
        
