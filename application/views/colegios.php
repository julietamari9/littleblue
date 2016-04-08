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
                                  <tr>
                                    <td>1</td>
                                    <td>Instituto Jose Manuel Estrada</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Instituto Jose Hernandez</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Colegio Babar</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>Escuela tecnica Nº 1</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Colegio Nacional</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>Chaltel College</td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td>Colegio Marin</td>
                                  </tr>

                                  <tr>
                                    <td>8</td>
                                    <td>Colegio Tato</td>
                                  </tr>

                                  <tr>
                                    <td>9</td>
                                    <td>Colegio Don Torcuato</td>
                                  </tr>

                                  <tr>
                                    <td>10</td>
                                    <td>Escuela Media 12</td>
                                  </tr>

                                </tbody>
                            </table>
                           <button style="margin-top:20px;" type="button" class="btn btn-info">Ver más</button>
                        
                      </div>
                    </div>
                  
                  <?php $this->load->view('templates/footer'); ?>
                </div>
        </div>
   </body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./public/assets/bootstrap/js/bootstrap.min.js"></script>
    
  </body>
</html>

