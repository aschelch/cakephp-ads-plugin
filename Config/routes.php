<?php 

Router::connect('/ads/click/*', array('plugin'=>'ads','controller'=>'ads_placements','action'=>'click'));
