<style>
    .error{
        width:50% ;
        color: #a94442;
        background-color: #f2dede;
        font-size: 15px;
        border-radius: 5px;
        padding: 10px;
        text-decoration: bolder;
    }
</style>

<?php 
if (count($error_message) > 0):
foreach ($error_message as $error):?>
    <p class = "error"> <?php echo  $error; ?> </p>
<?php endforeach;
endif
?>