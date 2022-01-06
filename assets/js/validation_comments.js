$(document).ready(function() {

$('#btn_send_comment').click(function (e) {
    e.preventDefault();

    $(`textarea`).removeClass('error');

    let message = $('#textarea').val();

    let formData = new FormData();
    formData.append('message', message);

    $.ajax({
        url: '/assets/php/comments/comments.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            if(data.status) {
                location.reload();
            } else {
                if (data.type === 1) {
                    $(`#textarea`).addClass('error');
                }
            }
        }
    });
});

$('.comments__delete').click(function() {
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

$('.comments__change').click(function(e) {
   e.preventDefault();
   $('#text'+$(this).attr('data-rowid')).removeAttr("readonly");
   $('#text'+$(this).attr('data-rowid')).addClass("comments__edit");
   $('#change'+$(this).attr('data-rowid')).removeClass("comments__change").addClass("comments__change-hidden");
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
    $('#change'+$(this).attr('data-rowid')).addClass("comments__change").removeClass("comments__change-hidden");
    $('#save'+$(this).attr('data-rowid')).addClass("save-hiden");
    $('#cancel'+$(this).attr('data-rowid')).addClass("cancel-hiden");
});
});