<?php require_once('header.php');?>

<script>

$(document).scroll(function(){

    var winheight = $(window).height();
    var docheight = $(document).height();
    var scrollTop = $(window).scrollTop();
    var trackLength = docheight - winheight;
    var pctScrolled = Math.floor(scrollTop/trackLength * 100); // gets percentage scrolled (ie: 80 NaN if tracklength == 0)
    // console.log(pctScrolled);

    if (pctScrolled < 90){
        $('#float-wpp').fadeIn(); 
    }else{
        $('#float-wpp').fadeOut();
    }

});

</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>

function jump(h){
    var url = location.href;               //Save down the URL without hash.
    location.href = "#"+h;                 //Go to the target element.
    history.replaceState(null,null,url);   //Don't like hashes. Changing it back.
}

</script>

<?php require 'conteiners/navbar.php';?>

<?php require 'conteiners/carrocel.php'; ?>

<?php require 'conteiners/servicos.php'?>

<?php require 'conteiners/sobre.php'; ?>

<?php require 'conteiners/clientes.php';?>

<a href="https://api.whatsapp.com/" class="float-wpp" id="float-wpp" target="_blank">
    <i class="fa fa-whatsapp my-float-wpp"></i>
</a>
<?php require_once('footer.php'); ?>