</main>
            </div>
            <aside class="col-12 col-md-4">
                <div class="sidebar">
                    <nav class="sidebar__nav">
                        <h3 class="sidebar__title">Навигация</h3>
                        <ul>
                            <li>
                                <a href="/about/">О ломбарде</a>
                            </li>
                            <li>
                                <a href="/news/">Новости</a>
                            </li>
                            <li>
                                <a href="/services/">Наши услуги</a>
                                <ul>
                                    <li>
                                        <a href="/services/mortgage/">Заложить</a>
                                    </li>
                                    <li>
                                        <a href="/services/sell/">Продать</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/contacts/">Контакты</a>
                            </li>
                            <li>
                                <a href="/sign-up/">Регистрация</a>
                            </li>
                        </ul>
                    </nav>   
                    <div class="sidebar__contacts">
                        <p>Режим работы всех филиалов: 09:00 - 21:00</p>
                        <div class="date">
                            <span>Текущее время:</span>
                            <div id="curr-date"></div>
                        </div>
                        <p class="date-message" id="date-open">Мы открыты!</p>
                        <p class="date-message" id="date-close">Мы закрыты!</p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <div class="footer__copy">
                <?=date('Y')?> © Ломбард
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/imask"></script>
    <script src="/assets/js/script.js"></script>
</body>
</html>