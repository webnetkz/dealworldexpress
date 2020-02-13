    <script src="public/scripts/libs/calculator.js"></script>
    <script src="public/scripts/libs/trackingModal.js"></script>
    <script>

         // 
        let zakaz = document.getElementById('zakaz');
        zakaz.addEventListener('click', () => {
            modalInfo.style.left = '0px';
        });
        
        let closeZakaz = document.querySelector('.closeInfo');
        closeZakaz.addEventListener('click', () => {
            modalInfo.style.left = '-75vw';
        });



         // Для заполнения заявки
        let fizLic = document.getElementById('fizLic');
        fizLic.addEventListener('click', () => {
            let sendCompany = document.getElementById('sendCompany');
            sendCompany.value = 'Физ. лицо';
        });
    </script>
</body>
</html>