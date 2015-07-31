<style>

    .cor{
        color:red;
    }

</style>
<?php
for($i=0;$i<10;$i++){
?>

<h1 class="<?php echo $i%2 ? "cor" : ""; ?>"><?php echo $i; ?></h1>

<?php
}
?>
