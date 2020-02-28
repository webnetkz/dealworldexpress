<script src="../public/scripts/libs/calculator.js"></script>
    <script src="../public/scripts/libs/trackingModal.js"></script>
    <script>

         // 
        let zakaz = document.getElementById('zakaz');
        zakaz.addEventListener('click', () => {
            modalInfo.style.left = '0px';
            let btnZakaz = document.querySelector('.zakaz');
            btnZakaz.style.display = 'none';
            let infoCalc = document.querySelector('.infoCalc');
            infoCalc.style.display = 'none';
        });

        let closeZakaz = document.querySelector('.closeInfo');
        closeZakaz.addEventListener('click', () => {
            modalInfo.style.left = '-100vw';
            let btnZakaz = document.querySelector('.zakaz');
            btnZakaz.style.display = 'block';
            let infoCalc = document.querySelector('.infoCalc');
            infoCalc.style.display = 'block';
        });



         // Для заполнения заявки
        let fizLic = document.getElementById('fizLic');
        fizLic.addEventListener('click', () => {
            let sendCompany = document.getElementById('sendCompany');
            sendCompany.value = 'Физ. Лицо';
        });




        // Отображение - скрытие меню
        function handlerMenu() {
            let menuX = document.querySelector('menu');
            let menuClass = menuX.getAttribute('class');
            let closeMenu = document.querySelector('.mobileMenu');
            
            // Проверка если меню открыто\закрыть
            switch(menuClass) {
                case 'mobileCloseMenu':
                menuX.removeAttribute('class');
                menuX.setAttribute('class', 'mobileOpenMenu');
                break;

                case 'mobileOpenMenu':
                menuX.removeAttribute('class');
                menuX.setAttribute('class', 'mobileCloseMenu');
                break;
            }
        }


        
    </script>
</body>
</html>