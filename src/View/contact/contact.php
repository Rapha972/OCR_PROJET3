<?php

ob_start();
?>




<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">


        <h1 class="display-3">BLOG ALASKA</h1>

        <p>something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>


<div class="container">
    <!-- Example row of columns -->

    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>

    </div>
</div> <!-- /container -->


<?php $content = ob_get_clean();?>
<?php require('/Applications/MAMP/htdocs/PROJET3/src/View/base.php');?>


