<?php

ob_start();
?>


    

      <!-- Main jumbotron for a primary marketing message or call to action -->

<style>
   .jumbotron{
       background-image:url("https://cdn.history.com/sites/2/2013/11/alaska-mt-mckinley-P.jpeg");

       /*background-image:url("https://cdn.history.com/sites/2/2013/11/alaska-salmon-jumping-P.jpeg");
       */background-size:cover;
       /*color:white;*/
   }

</style>




<div class="jumbotron">
            <div class="container">
     
         
          <h1 class="display-1">BLOG ALASKA</h1>
           
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Apprendre plus &raquo;</a></p>
            </div>         
    </div>
      

      <div class="container">
        <!-- Example row of columns -->

          <div class="row">
            <div class="col-sm-2">

              <?php
              foreach($result as $data){
                  ?>


                  <h2><?= $data->getTitle();?></h2>
                  <?= $data->getDateCrea().'<br>';?>



                      <?= $data->getContent();?>


                  <p><a class="btn btn-secondary" href="#" role="button">Voir details &raquo;</a></p>


            <?php

              }

              ?>


      <?php $content = ob_get_clean();?>
      <?php require('src/View/base.php');?>


            </div>
          </div>
      </div>
    