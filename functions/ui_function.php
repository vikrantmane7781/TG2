<?php

function getHeader($bigheader,$smallheader,$faicon){
	echo '<section class="content-header">
          <h1>
            '.$bigheader.'
            <small>'.$smallheader.'</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa '.$faicon.'"></i> Home</a></li>
            <li class="active">'.$bigheader.'</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">';
}

?>