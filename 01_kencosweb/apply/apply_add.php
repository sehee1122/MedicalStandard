<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<body>
    <h1 align="center">상담신청</h1>
    <p align="center"> KENCOS 무료상담신청 EVENT </p>
    <style>
        input, td{fint-size:8pt; font-family:돋움}
    </style>

<form action = "apply_insert.php" method="POST">
<table width=500 border=1 align=center>
    <col width=100>
    <col>
    
    <tr>
    <td> 성명
    <td> <input type="text" name="name" size=18>
    
    <tr>
    <td> 휴대전화
    <td> <input type="text" name="phone1" size=4>
    <input type="text" name="phone2" size=4>
    <input type="text" name="phone3" size=4>
    
    <tr>
    <td> 이메일
    <td> <input type="text" name="email" size=18>
    
    <tr>
    <td> 동의
    <td> ※ 개인정보 수집·이용에 관한 사항 [필수] <input type="checkbox" name="agree" size=20 checked>
</table>

<br>
<div style="text-align:center">
<input type="submit" value="무료상담 신청하기" style="width:220px; height:65px; font-size:25px;">
</div>

</form>
</body>
</html>
