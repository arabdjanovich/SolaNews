<?php
session_start();
if($_SESSION['user']['usertype'] == 'root' || $_SESSION['user']['usertype'] == 'Administrator') {
//include_once('includes/access.php');
include_once 'includes/header.php';
include_once 'includes/navbar.php';
include_once 'includes/topbar.php';
?>

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить администратора</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hiden="true">&times;</span>
                </button>
            </div>
            <form action="check.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Имя" required>
                    </div>
                    <div class="form-group">
                        <label>Логин</label>
                        <input type="text" name="username" class="form-control" placeholder="Логин" required>
                    </div>
                    <div class="form-group">
                        <label>Пароль</label>
                        <input type="password" name="password" class="form-control" placeholder="Введите пароль" required>
                    </div>
                    <div class="form-group">
                        <label>Почта</label>
                        <input type="email" name="email" class="form-control" placeholder="Почта" required>
                    </div>
                   <div class="form-group" required>
                        <label>Статус администратора</label><br>
                        <select name="usertype" class="form-control">
                            <option value="Administrator">Администратор</option>
                            <option value="Moderator">Модератор</option>
                        </select>
                   </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" name="registerbtn" id="registerbtn" class="btn btn-primary">Сохранить</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> 
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addadminprofile">
                Добавить администратора
            </button>
        </h6>
    </div>
<?php
    if(isset($_SESSION['status']) != ''){
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    } if(isset($_GET['added'])) {
        echo '<div class="alert alert-success" role="alert"><center><h3>Администратор Добавлен!</h3></center></div>';
    }
?>
    <div class="card-body">
        <div class="table-responsive">

        <?php
            /*require_once('connect.php');*/

            $connection = mysqli_connect('localhost','root','','admin');
            
            $query = "SELECT * FROM admins";
            $query_run = mysqli_query($connection, $query);
        ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Идентификация</th>
                        <th>Имя</th>
                        <th>Логин</th>
                        <th>Пароль</th>
                        <th>Почта</th>
                        <th>Статус</th>
                        <th>Изменить</th>
                        <th>Удалить</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($query_run) > 0){
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>

                    <tr>
                        <td><?=$row['id'];?></td>
                        <td><?=$row['firstname'];?></td>
                        <td><?=$row['username'];?></td>
                        <!--<td><?=$row['password'];?></td> -->
                        <td>***</td>
                        <td><?=$row['email'];?></td>
                        <td><?=$row['usertype'];?></td>
                        <td>
                            <form action="edit.php" method="POST">
                                <input type="hidden" name="edit_id" value="<?=$row['id'];?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">Изменить</button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="POST">
                            <input type="hidden" name="delete_id" value="<?=$row['id'];?>">
                            <button type="submit" name="deletebtn" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                <?php
                    }
                } else {
                    echo 'Запись не найдена...';
                }
                  ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</div>


<?php
    } else {
        header('Location: index.php');
        $_SESSION['status'] = '<div class="alert alert-danger" role="alert"><center><strong><h1>Доступ запрещен!</h1><hr>
        <h4>Обратитесь к администратору!</h4></strong></center></div>';
    }

    include 'includes/scripts.php';
    include 'includes/footer.php';
?>