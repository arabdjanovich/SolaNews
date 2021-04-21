     <!-- Footer -->
     <footer class="footer">
        <div class="footer__links">
            <div class="container">
                <ul>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Спорт</a></li>
                    <li><a href="#">Технологии</a></li>
                </ul>
                <ul>
                    <li><a href="#">Авто</a></li>
                    <li><a href="#">В мире</a></li>
                    <li><a href="#">Наука</a></li>
                </ul>
                <ul>
                    <li><a href="#">Реклама</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Пользовательское соглашение</a></li>
                </ul>
                <ul>
                    <li><a href="#">Обратная связь</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                    <li><a href="#">Дорожная работа</a></li>
                </ul>
    
                <ul>
                    <li>
                        <a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-3" href="#instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#telegram"><i class="fab fa-telegram-plane"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="copyright">
                <span>Новости Sola © <?=date('Y');?>. Все права защищены</span>
                <span class="d-md-inline-block d-none">|</span>
                <span>Разработка и дизайн <a href="https://usoft.uz">Usoft</a></span>
            </div>
        </div>
    </footer>
    
    <!-- Modal Search -->
    <div class="modal fade" id="modal_search">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">
                        <i class="fal fa-times"></i>
                    </button>
                    <form class="form-search">
                        <input type="text" name="search" placeholder="Поиск...">
                        <button type="submit" class="my-btn--search"><i class="fal fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fal fa-arrow-up"></i>
    </button>
    
    <script src="js/main.min.js"></script>

</body>

</html>