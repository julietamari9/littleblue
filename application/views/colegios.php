<?php $this->load->view('templates/header');?>
    
   <body>
       <div id="wrapper">
          <?php $this->load->view('templates/sidebar');?>
                <div id="main-wrapper" class="col-md-10">
                    <div id="main" class="text-center">
                      <div class="page-header">
                        
                      </div>
                      <div class="container-fluid">
                        
                            <table class="tabla-colegios center" data-toggle="table" style="width:90%;">
                                <thead>
                                  <tr>
                                    <th style="width:10%;" data-field="id_colegio">ID</th>
                                    <th style="text-align: center;" data-field="nombre">Nombre</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 
                                </tbody>
                            </table>
                           <button style="margin-top:20px;" type="button" class="btn btn-info atras">Atras</button>
                           <button style="margin-top:20px;" type="button" class="btn btn-info ver-mas">Ver más</button>
                      </div>
                    </div>
                  
                  <?php $this->load->view('templates/footer'); ?>
                </div>
        </div>
   </body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./public/js/funciones.js"></script>
    
  </body>
</html>

