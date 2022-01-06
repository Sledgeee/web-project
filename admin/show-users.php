<?php 
    require_once "connect.php";
    $data_query = mysqli_query($connect, "SELECT * FROM `users` ORDER BY `id`");
?>
    <form class="form users--admin" method="get">
<?php
    while($data = mysqli_fetch_assoc($data_query)) {
    $show_img = base64_encode($data['avatar']);
?>
    <article class="post">
    <ul>
        <li class="user__item">
            <div class="user__header">
                <?php if($show_img != NULL) { ?>
                <img class="comments__avatar" src="data:image/jpeg;base64, <?=$show_img?>" alt="">
                <?php } else { ?>
                <img class="comments__avatar" src="/assets/images/avatars/users_avatar.png" alt="">
                <?php } ?>
                    <div class="full__data">
                        <label class="user-data-admin-panel">ID:</label>
                        <input class="user-data-admin-panel id-input" type="text" id="id-<?=$data['id']?>" data-rowid="<?=$data['id']?>" value="<?=$data['id']?>"readonly></input>
                        <label class="user-data-admin-panel">Логін:</label>
                        <input class="user-data-admin-panel login-input" type="text" id="login-<?=$data['id']?>" data-rowid="<?=$data['id']?>" value="<?=$data['login']?>"readonly></input>
                        <label class="user-data-admin-panel">E-Mail:</label>
                        <input class="user-data-admin-panel email-input" type="text" id="email-<?=$data['id']?>" data-rowid="<?=$data['id']?>" value="<?=$data['email']?>"readonly></input>
                        <label class="user-data-admin-panel">Права:</label>
                        <input class="user-data-admin-panel root-input" type="text" id="root-<?=$data['id']?>" data-rowid="<?=$data['id']?>" value="<?=$data['root']?>" readonly></input>
                    </div>
                    <button type="button" class="users__delete" name="delete" id="delete<?=$data['id']?>"data-rowid="<?=$data['id']?>">Видалити користувача</button>
                    <button data-modal="contact-modal" type="button" class="users__change" name="change" id="change<?=$data['id']?>"data-rowid="<?=$data['id']?>">Змінити данні</button>
                    <button type="button" class="users__watch" name="watch" id="watch<?=$data['id']?>" onclick="document.location='watch-comments.php?login=<?=$data['login']?>'">Переглянути коментарі</button>
            </div>
        </li>
    </ul>
    </article>
<?php 
    }
    mysqli_close($data_query);
?>
    </form>
    <div class="modal" id="contact-modal">
        <div class="modal__content  modal__content--contact">
            <button class="modal__close" type="button">
                <img src="/assets/images/close.svg" alt="Close">
            </button>
    
            <form class="form" method="get" id="contact__form">
                <div class="form__group  form__group--md">
                    <input class="form__control  _req" type="text" id="in1" value="">
                    <span class="form__line"></span>
                    <input class="form__control  _req" type="text" id="in2" value="">
                    <span class="form__line"></span>
                    <input class="form__control  _req" type="text" id="in3" value="">
                    <span class="form__line"></span>
                    <select class="form__control  _req" type="text" id="in4" value="">
                        <option selected value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                    <span class="form__line"></span>
                </div>
    
                <div class="form__footer">
                    <div class="form__group  form__group--md">
                        <button class="btn  btn--blue  btn--rounded  btn--sm" type="submit" id="sub-changes">Зберегти зміни</button>
                    </div>
                </div>
            </form>
        </div>
    </div>