$(document).ready(function() {
    
$('.users__delete').click(function() {
   if(confirm('Підтвердіть видалення користувача')) {
   var id=$(this).attr('data-rowid');
        $.ajax({
            url:"/admin/delete_user.php?id="+id,
            cache:false,
            success:function(result) {
                location.reload();
            }
        }); 
   }
});

$('.users__change').click(function(e){
   e.preventDefault();
   var id = $(this).attr('data-rowid');
   var login = $('#login-'+$(this).attr('data-rowid')).val();
   var email = $('#email-'+$(this).attr('data-rowid')).val();
   var root = $('#root-'+$(this).attr('data-rowid')).val();
   
   $('#in1').val(id);
   $('#in2').val(login);
   $('#in3').val(email);
   $('#in4').val(root);
});

$('#sub-changes').click(function(e) {
    e.preventDefault();
    if(confirm('Підтвердіть збереження змін')) {
        $.ajax({
            url:"/admin/save_user.php?id="+$('#in1').val()+"&login="+$('#in2').val()+"&email="+$('#in3').val()+"&root="+$('#in4').val(),
            cache:false,
            success:function(result) {
                location.reload();
            }
        }); 
    }
});

$('.comments__delete-admin').click(function() {
   if(confirm('Підтвердіть видалення коментаря')) {
   var id=$(this).attr('data-rowid');
        $.ajax({
            url:"/assets/php/comments/comments_delete.php?id="+id,
            cache:false,
            success:function(result) {
                location.reload();
            }
        }); 
   }
});

$('.comments__change-admin').click(function(e) {
   e.preventDefault();
   $('#text'+$(this).attr('data-rowid')).removeAttr("readonly");
   $('#text'+$(this).attr('data-rowid')).addClass("comments__edit");
   $('#change'+$(this).attr('data-rowid')).removeClass("comments__change-admin").addClass("comments__change-hidden");
   $('#save'+$(this).attr('data-rowid')).removeClass("save-hiden");
   $('#cancel'+$(this).attr('data-rowid')).removeClass("cancel-hiden");
});

$('.save').click(function() {
   if(confirm('Підтвердіть збереження')) {
   var id = $(this).attr('data-rowid');
   var message = $('#text'+$(this).attr('data-rowid')).val();
        $.ajax({
            url:"/assets/php/comments/comments_save.php?id="+id+"&message="+message,
            cache:false,
            success:function(result) {
                location.reload();
            }
        }); 
   }
});

$('.cancel').click(function(e) {
    e.preventDefault();
    $('#text'+$(this).attr('data-rowid')).attr("readonly");
    $('#text'+$(this).attr('data-rowid')).removeClass("comments__edit");
    $('#change'+$(this).attr('data-rowid')).addClass("comments__change-admin").removeClass("comments__change-hidden");
    $('#save'+$(this).attr('data-rowid')).addClass("save-hiden");
    $('#cancel'+$(this).attr('data-rowid')).addClass("cancel-hiden");
});
});
