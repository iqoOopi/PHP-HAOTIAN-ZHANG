<!DOCTYPE html>
<html>

<head>
    <?php
        include_once '../head.php';
        include_once 'bouncer.php';
    ?>
</head>

<body>
    <?php
        require_once "../header.php";
        require_once "../menu.php";
    ?>
    <header id="registerHeader">
        <img id="registerImg" src="/PHP-HAOTIAN-ZHANG/pic/register-icon.png">
        <h1>
            Regist Now!
        </h1>
    </header>

    <!-- Grid-Form -->
    <form class="Form register" name="registerForm">
        <label for="customerName">Name </label>
        <div class="popupContainer">
            <span class="popupText" id="namePopupText">Format:firstName LastName</span>
            <input type="text" name="customerName" id="customerName">
        </div>

        <label for="customerAddress">Address </label>
        <div class="popupContainer">
            <span class="popupText" id="addressPopupText">Example:1247 36Ave NE</span>
            <input type="text" name="customerAddress" id="customerAddress">
        </div>

        <label for="customerCity">City </label>
        <div class="popupContainer">
            <span class="popupText" id="cityPopupText">Example:Calgary</span>
            <input type="text" name="customerCity" id="customerCity">
        </div>

        <label fro="customerProvince">Province</label>
        <div class="popupContainer">
            <span class="popupText" id="provincePopupText">Example:Alberta</span>
            <input type="text" name="customerProvince" id="customerProvince">
        </div>

        <label fro="customerPostalCode">Postal Code</label>
        <div class="popupContainer">
            <span class="popupText" id="postalCodePopupText">Example:T3K1H1</span>
            <input type="text" name="customerPostalCode" id="customerPostalCode">
        </div>
        <div class="popupContainer">
            <span class="popupText" id="resetPopupText">Are you sure?</span>
            <input type="reset" class="button" id="formRest" value="Reset">
        </div>


        <input type="submit" class="button" id="formSubmit" value="Submit">
    </form>
    <?php
        include_once "../footer.php";
    ?>
    <script src="register-script.js"></script>
</body>

</html>