<?php
    require_once "comments_connect_db.php";
    $connect_user = mysqli_connect('localhost', 'a0546147_astral', 'astral', 'a0546147_users');

    if (isset($connect) === false) {
        die('Error connect to DataBase');
    }
    $data_query = mysqli_query($connect, "SELECT * FROM `comments` ORDER BY `id` DESC");
?>
    <form class="form" method="get">
<?php
    while($data = mysqli_fetch_assoc($data_query)) {
    $login = $data['login'];
    $user_query = mysqli_query($connect_user, "SELECT * FROM `users` WHERE `login` = '$login'");
    $img = mysqli_fetch_assoc($user_query);
	$show_img = base64_encode($img['avatar']);
?>
    <ul class="comments">
        <li class="comments__item">
            <div class="comments__header">
                <?php if($show_img != NULL) { ?>
                <img class="comments__avatar" src="data:image/jpeg;base64, <?=$show_img?>" alt="">
                <?php } else { ?>
                <img class="comments__avatar" src="/assets/images/avatars/users_avatar.png" alt="">
                <?php } ?>
                    <div class="comments__author">
                        <div class="comments__name"><?=$data['login']?></div>
                        <time class="comments__pubdate" datetime="<?=$data['date']?>"><?=$data['date']?></time>
                    </div>
                    <?php if($_SESSION['user']['root'] === "admin") { ?>
                       <button type="button" class="comments__delete" name="delete" id="<?=$data['id']?>"data-rowid="<?=$data['id']?>">Видалити коментар</a>
                    <?php } 
                    else if(($_SESSION['user']['root'] === "user")&&($_SESSION['user']['login'] === $data['login'])) { ?>
                        <button type="button" class="comments__delete" name="delete" id="delete<?=$data['id']?>"data-rowid="<?=$data['id']?>">Видалити коментар</button>
                        <button type="button" class="comments__change" name="change" id="change<?=$data['id']?>"data-rowid="<?=$data['id']?>">Змінити коментар</button>
                        <button type="button" class="save save-hiden" name="save" id="save<?=$data['id']?>"data-rowid="<?=$data['id']?>">Зберегти</button>
                        <button type="button" class="cancel cancel-hiden" name="cancel" id="cancel<?=$data['id']?>"data-rowid="<?=$data['id']?>">Відмінити</button>
                    <?php } ?>
                </div>
            <textarea class="comments__text" id="text<?=$data['id']?>" readonly><?=$data['message']?></textarea>
        </li>
    </ul>
<?php 
    }
    mysqli_close($data_query);
?>
    </form>