<?php
	$strOut = "";

    $strOut.='<!-- Javascript -->';
    $strOut.='<script src="assets/js/jquery-1.11.1.min.js"></script>';
    $strOut.='<script src="assets/js/bootstrap.min.js"></script>';
    $strOut.='<script src="assets/js/classie.js"></script>';
    $strOut.='<script src="assets/js/cbpAnimatedHeader.js"></script>';
    
    $strOut.='<!--[if lt IE 10]>';
    $strOut.='<script src="assets/js/placeholder.js"></script>';
    $strOut.='<![endif]-->';

    echo $strOut;

?>