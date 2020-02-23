    <script src="public/scripts/libs/calculator.js"></script>
    <script src="public/scripts/libs/trackingModal.js"></script>
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




                 // 
        let btnMobileMenu = document.querySelector('.mobileMenu');
        btnMobileMenu.addEventListener('click', () => {
            let menuX = document.querySelector('menu');
            menuX.style.display = 'block';
        });

        
    </script>
</body>
</html>