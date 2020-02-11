<?php
    // Variables
    $title = 'DWE Контакты';
    $start = '<section id="allIndex">';
    $linkCSS = 'public/styles/contact.css';

    require_once 'tamplate/header.php';
    require_once 'tamplate/navigation.php';

?>

    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3477.364878232933!2d120.05889141457688!3d29.359603757553383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNO.%201%2C%201ST%20FLOOR%2C%20UNIT%201%2C%20BUILDING%2031%2C%20YI&#39;AN%20DISTRICT%2C%20HOUZHAI%20STREET%2C%20JINHUA%20CITY%2C%20ZHEJIANG%20PROVINCE%2C%20CHINA!5e0!3m2!1sru!2skz!4v1581315922707!5m2!1sru!2skz" width="100%" height="500" frameborder="0" style="border:0; box-shadow: 0 0 10px black;" allowfullscreen=""></iframe>    
    
        <div class="contactContainer">
            <div class="contactBlock">
                <p class="footerContact">
                    <a href="tel:+ 8 615 628 28 22 77" class="contactPhone">
                        <img src="public/images/icons/call.svg" alt="phone call dwe" class="footerIcon">
                        + 8 615 628 28 22 77
                    </a>    
                </p>
                <p class="footerContact">
                    <a href="mailto: delivery@dealwd.com" class="contactPhone">
                        <img src="public/images/icons/mail.svg" alt="phone call dwe" class="footerIcon">
                        delivery@dealwd.com
                    </a>
                </p>
                <p class="footerContact">
                    <a href="index" class="contactPhone">
                        <img src="public/images/icons/web-site.svg" alt="phone call dwe" class="footerIcon">
                        dw.express
                    </a>
                </p>
            </div>
            <div class="contactBlock">
            <p class="footerContact">
                    <a href="contact" class="contactPhone">
                        <img src="public/images/icons/adress.svg" alt="phone call dwe" class="footerIcon">
                        NO. 1, 1ST FLOOR, UNIT 1, BUILDING 31, YI'AN DISTRICT, HOUZHAI STREET, JINHUA CITY, ZHEJIANG PROVINCE, CHINA
                    </a>
                </p>
            </div>
        </div>

    </section>

<?php
    require_once 'tamplate/footer.php';
?>