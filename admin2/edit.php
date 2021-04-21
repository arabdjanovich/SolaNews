<?php
include('includes/access.php');
include('includes/header.php');
include('includes/navbar.php');

$connection = mysqli_connect('localhost','root','','admin');

if(isset($_POST['edit_btn'])){
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM `admins` WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    foreach ($query_run as $row){
        ?>
            <form action="code.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Идентификация</label>
                        <input type="text" name="edit_id" class="form-control" value="<?=$row['id']?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" name="edit_firstname" class="form-control" value="<?=$row['firstname']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Логин</label>
                        <input type="text" name="edit_username" class="form-control" value="<?=$row['username']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Пароль</label>
                        <input type="text" name="edit_password" class="form-control" value="<?=md5($row['password'])?>" required>
                    </div>
                    <div class="form-group">
                        <label>Почта</label>
                        <input type="email" name="edit_email" class="form-control" value="<?=$row['email']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Статус</label>
                        <select name="edit_usertype" class="form-control">
                            <option value="Administrator">Администратор</option>
                            <option value="Moderator">Модератор</option>
                        </select>
                    </div>
                    <a href="register.php" class="btn btn-danger">Отменить</a>
                    <button type="submit" name="updatebtn" class="btn btn-primary">Изменить</button>
            </form>

<?php
    }
}
?>
                    </div>
                    </div>



<?php
include('includes/scripts.php');
#include('includes/footer.php');
?>