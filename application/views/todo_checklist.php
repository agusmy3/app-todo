<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>To Do</title>
</head>
<body>
<h3>Pekerjaan</h3>
<table class="cb1">
    <tr>
        <th>Nama Pekerjaan</th>
        <th>Waktu</th>
        <th>Desk</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($todo_list as $tl){
?>
    <tr>
        <td><?= $tl->todo_name;?></td>
        <td><?= $tl->todo_time;?></td>
        <td><?= $tl->todo_desc;?></td>
        <td><?= ($tl->todo_sts == 1) ? "Selesai" : "Belum Selesai"; ?></td>
        <td><input type="checkbox" class="bs" name="check" data-id="<?= $tl->todo_id?>" data-sts="1"></td>
    </tr>
<?php
    }
?>
    
</table>

<h3>Pekerjaan Terselesaiakan</h3>
<table class="cb2">
    <tr>
        <th>Nama Pekerjaan</th>
        <th>Waktu</th>
        <th>Desk</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($todo_list_finished as $tlf){
?>
    <tr>
        <td><?= $tlf->todo_name;?></td>
        <td><?= $tlf->todo_time;?></td>
        <td><?= $tlf->todo_desc;?></td>
        <td><?= ($tlf->todo_sts == 1) ? "Selesai" : "Belum Selesai"; ?></td>
        <td><input type="checkbox" class="bs" name="check" data-id="<?= $tlf->todo_id?>" data-sts="0" checked></td>
    </tr>
<?php
    }
?>
    
</table>

<!-- jQuery -->
<script src="<?= base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<script>
  $(function () {

    $(document).on('click', '.bs', function(event) {
        event.preventDefault();
        let id = $(this).data('id');
        let sts = $(this).data('sts');
        let html = $(this).parents("tr").html();
        $(this).parents("tr").remove();

        $.ajax({
        type:"post",
        url:"<?php base_url();?>todo_ubah_sts",
        data:{"id":id,"sts":sts},
        dataType:"html",
        success:

            function(){
                console.log("berhasil");
                console.log(html);
                if(sts=="1"){
                    $(".cb2").append("<tr>"+html+"</tr>");
                }else{
                    $(".cb1").append("<tr>"+html+"</tr>");
                }
            }
        });
    });

  })
</script>
</body>
</html>