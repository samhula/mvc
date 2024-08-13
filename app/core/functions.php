<?php

function asset($asset){
	return ROOT . $asset;
}

function assetCSS($css){
	return ROOT . "mvc/app/views/css/" . $css;
}

function assetJS($js){
	return ROOT . "mvc/app/views/js/" . $js;
}