<?php 
    $login = $_GET['login'];
    require_once "connect-comments.php";
    $data_query = mysqli_query($connect, "SELECT * FROM `comments` WHERE `login` = '$login'");
    $connect_user = mysqli_connect('localhost', 'a0546147_astral', 'astral', 'a0546147_users');

    if (isset($connect) === false) {
        die('Error connect to DataBase');
    }
    $user_query = mysqli_query($connect_user, "SELECT * FROM `users` WHERE `login` = '$login'");
    $img = mysqli_fetch_assoc($user_query);
	$show_img = base64_encode($img['avatar']);
?>
    <form class="form comments-admin" method="get">
<?php
    while($data = mysqli_fetch_assoc($data_query)) {
?>
    <article class="post">
    <ul>
        <li class="comments__item">
            <div class="comments__header">
                <?php if($show_img != NULL) { ?>
                <img class="comments__avatar" src="data:image/jpeg;base64, <?=$show_img?>" alt="">
                <?php } else { ?>
                <img class="comments__avatar" src="/assets/images/avatars/users_avatar.png" alt="">
                <?php } ?>
                    <div class="comments__author">
                        <div class="user-comment-login"><?=$data['login']?></div>
                        <time class="user-comment-pubdate" datetime="<?=$data['date']?>"><?=$data['date']?></time>
                    </div>
                        <button type="button" class="comments__delete-admin" name="delete" id="delete<?=$data['id']?>"data-rowid="<?=$data['id']?>">Видалити коментар</button>
                        <button type="button" class="comments__change-admin" name="change" id="change<?=$data['id']?>"data-rowid="<?=$data['id']?>">Змінити коментар</button>
                        <button type="button" class="save save-hiden" name="save" id="save<?=$data['id']?>"data-rowid="<?=$data['id']?>">Зберегти</button>
                        <button type="button" class="cancel cancel-hiden" name="cancel" id="cancel<?=$data['id']?>"data-rowid="<?=$data['id']?>">Відмінити</button>
                    </div>
            <textarea class="comments__text" id="text<?=$data['id']?>" readonly><?=$data['message']?></textarea>
        </li>
    </ul>
    </article>
<?php 
    }
    mysqli_close($data_query);
?>
    </form>