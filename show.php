<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>BMI calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body_type">
    <div class="input_block">
        <form action="show.php" method="get">
            <table class="input_table">
                <thead>
                    <h2>輸入您的資料，檢查你的BMI指數吧</h2>
                </thead>
                <tr>
                    <td>
                        <label for="kg">體重（kg）</label>
                    </td>
                    <td>
                        <input type="text" name="kg" placeholder="輸入你的體重" id="kg" class="form_input">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cm">身高（cm）</label>
                    </td>
                    <td>
                        <input type="text" name="cm" placeholder="輸入你的身高" id="cm" class="form_input">
                    </td>
                </tr>
            </table>
            <div>
                <button type="submit">submit</button>
                <button type="reset">reset</button>
            </div>
        </form>
        <hr class="hr_setting">
        <div style="margin-bottom: -2rem;">
            <h3>BMI 計算公式： BMI = 體重（kg）/ 身高<sup>2</sup>（cm<sup>2</sup>）</h3>
        </div>
    </div>

    <h1 style="background-color: brown; margin-down: 0px">**** BMI結果出爐 ****</h1>
    <div style="font-size: 1.5rem; background-color:#b0b0b0; margin-top: 0">
    <?php
        $weight = $_GET["kg"];
        $height = $_GET["cm"];
        if (($weight != null) && ($height != null)) {
            $height = $height / 100;
            $bmi = $weight / ($height * $height);
            echo ("你的體重是 " . $_GET["kg"] . " 公斤");
            echo "<br>";
            echo ("你的身高是 " . $_GET["cm"] . " 釐米");
            echo "<br>";
            echo ("<strong>" . "你的BMI結果是 " . $bmi . "</strong>");
        } else if(($weight != null) && ($height == null)) {
            echo ("你的體重是 " . $_GET["kg"] . " 公斤");
            echo "<br>";
            echo ("但你尚未輸入你的身高");
        } else if(($weight == null) && ($height != null)) {
            echo ("你的身高是 " . $_GET["cm"] . " 釐米");
            echo "<br>";
            echo ("但你尚未輸入你的體重");
        } else if (($weight == null) && ($height == null)){
            echo ("請輸入你的資料！!!");
        }
?>
    </div>

    <table border="5" class="info_table">
        <tbody>
            <tr bordercolor="#cccccc" bgcolor="#FFCC99">
                <td width="100" height="35"></td>
                <td width="150" height="35">
                    <div align="center">
                        <font color="#000000"><span class="01">身體質量指數(BMI)<br>(kg/m2)</span><br></font>
                    </div>
                </td>
            </tr>
            <tr bordercolor="#cccccc">
                <td class="01" width="100" bgcolor="#CCFFFF">
                    <div align="center">體重過輕</div>
                </td>
                <td class="01" width="200">
                    <div align="center">BMI ＜ 18.5</div>
                </td>
            </tr>
            <tr bordercolor="#cccccc">
                <td class="01" width="100" bgcolor="#CCFFFF">
                    <div align="center">正常範圍</div>
                </td>
                <td class="01" width="200">
                    <div align="center">18.5≦BMI＜24</div>
                </td>
            </tr>
            <tr bordercolor="#cccccc">
                <td class="01" width="100" bgcolor="#CCFFFF">
                    <div align="center">異常範圍</div>
                </td>
                <td valign="top" width="200">
                    <div align="center"><span class="01">　　過重：24≦BMI＜27<br>輕度肥胖：27≦BMI＜30<br>中度肥胖：30≦BMI＜35<br>重度肥胖：BMI≧35</span>
                        <br>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
