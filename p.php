<html>
<head>
    <title>兼职教师信息统计</title>
    <meta name="viewport" content="width=device-width">
    <style>
        body{

        }
        .title{
            text-align: center;
            font-size: 24px;
            color: #333333;
            font-weight: normal;
        }
        .form-group{
            margin: 10px 0;
            padding: 5px 10px;
        }
        .form-group label{
            font-weight: 400;
            width: 100%;
        }
        .form-group input[type=text]{
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .form-group input[type=submit]{
            width: 100%;
            height: 50px;
            padding: 15px 0;
            text-align: center;
            color: #fff;
            background: #cb0063;
            transition: all .5s ease-out;
            border: none;
        }
    </style>
</head>
<body>
<?php
/**
 * 2018-10-16 18:55:11
 * User:Keac wu
 * keacwu@gmail.com
 */

if (@$_POST['sub']) {
    $con = new mysqli("localhost", "root", "", "part-time");
    if (!$con)
        die('数快救救数据库吧');
    $name = @$_POST['name'];
    $sex = @$_POST['sex'];
    $date = @$_POST['date'];
    $nation = @$_POST['nation'];
    $political = @$_POST['political'];
    $join_date = @$_POST['join_date'];
    $edu = @$_POST['edu'];
    $degree = @$_POST['degree'];
    $spec_lv = @$_POST['spec_lv'];
    $spec_name = @$_POST['spec_name'];
    $spec_unit = @$_POST['spec_unit'];
    $spec_time = @$_POST['spec_time'];
    $job_lv = @$_POST['job_lv'];
    $job_name = @$_POST['job_name'];
    $job_unit = @$_POST['job_unit'];
    $job_time = @$_POST['job_time'];
    $work_name = @$_POST['work_name'];
    $work_job = @$_POST['work_job'];
    $work_time = @$_POST['work_time'];
    $spec = @$_POST['spec'];
    $account = @$_POST['account'];
    $bank = @$_POST['bank'];
    if ($name != "" && $sex != "" && $date != "" && $nation != "" && $political != "" && $join_date != ""
        && $edu != "" && $degree != "" && $spec_lv != "" && $spec_name != "" && $spec_time != "" && $spec_unit != "" && $spec_time != ""
        && $job_lv != "" && $job_name != "" && $job_unit != "" && $job_time != "" && $work_name != "" && $work_job != "" && $work_time != "" &&
        $spec != "" && $account != "" && $bank != ""
    ) {


        $sql = "INSERT INTO `user` (`id`, `number`, `name`, `sex`, `date`, `nation`,`political`, `join_date`, `edu`, `degree`, `spec-lv`, `spec-name`, `spec-unit`, `spec-time`, `job-lv`, `job-name`, `job-unit`, `job-time`, `work-name`, `work-job`, `work-time`, `spec`, `account`, `bank`) VALUES (NULL, '1','$name','$sex','$date','$nation','$political','$join_date','$edu','$degree','$spec_lv','$spec_name','$spec_unit','$spec_time','$job_lv','$job_name','$job_unit','$job_time','$work_name','$work_job','$work_time','$spec','$account','$bank');";
        if ($con->query($sql)) {
            echo "<script> alert('提交成功')</script>";
        } else {
            echo "sql执行失败。，，，";
        }
    } else {
        echo "<script> alert('很抱歉，有一项或者多项为空‘) </script>";
    }
}
?>
<main>
    <h1 class="title">
        兼职教师信息
    </h1>
    <div>
        <form action="index.php" method="post">
            <div class="form-group">
                <label>
                    姓名
                </label>
                <input type="text" name="name" placeholder="姓名">
            </div>
            <div class="form-group">
                <label>
                    性别

                    <input id="sex" type="radio" name="sex" value="man" checked> 男
                    <input id="sex" type="radio" name="sex" value="female"> 女
                </label>
            </div>
            <div class="form-group">
                <label>
                    出生日期

                    <input type="date" name="date">
                </label>
            </div>
            <div class="form-group">
                <label>
                    民族
                </label>
                <input type="text" name="nation" placeholder="民族">
            </div>
            <div class="form-group">
                <label>
                    政治面貌
                </label>
                <input type="text" name="political" placeholder="政治面貌">
            </div>
            <div class="form-group">
                <label>
                    参加工作日期

                    <input type="date" name="join_date">
                </label>
            </div>
            <div class="form-group">
                <label>
                    学历
                    <input type="text" name="edu">
                </label>
            </div>
            <div class="form-group">
                <label>
                    学位
                    <input type="text" name="degree" placeholder="学位">
                </label>
            </div>
            <div>
                专业技能职责
            </div>
            <div class="form-group">
                <label>
                    等级
                    <input type="text" name="spec_lv" placeholder="等级">
                </label>
            </div>
            <div class="form-group">
                <label>
                    名称
                    <input type="text" name="spec_name" placeholder="名称">
                </label>
            </div>
            <div class="form-group">
                <label>
                    发证单位
                    <input type="text" name="spec_unit" placeholder="发证单位">
                </label>
            </div>
            <div class="form-group">
                <label>
                    获得时间
                    <input type="date" name="spec_time" placeholder="获得时间">
                </label>
            </div>
            <div>
                职业资格证书
            </div>
            <div class="form-group">
                <label>
                    等级
                    <input type="text" name="job_lv" placeholder="等级">
                </label>
            </div>
            <div class="form-group">
                <label>
                    名称
                    <input type="text" name="job_name" placeholder="名称">
                </label>
            </div>
            <div class="form-group">
                <label>
                    发证单位
                    <input type="text" name="job_unit" placeholder="发证单位">
                </label>
            </div>
            <div class="form-group">
                <label>
                    获得时间
                    <input type="date" name="job_time" placeholder="获得时间">
                </label>
            </div>
            <div>
                当前专职工作背景
            </div>
            <div class="form-group">
                <label>
                    单位名称
                    <input type="text" name="work_name" placeholder="单位名称">
                </label>
            </div>
            <div class="form-group">
                <label>
                    职务
                    <input type="text" name="work_job" placeholder="职务">
                </label>
            </div>
            <div class="form-group">
                <label>
                    任职日期
                    <input type="date" name="work_time" placeholder="任职日期">
                </label>
            </div>
            <div class="form-group">
                <label>
                    所属专业
                    <input type="text" name="spec" placeholder="所属专业">
                </label>
            </div>
            <div class="form-group">
                <label>
                    汇款帐号
                    <input type="text" name="account" placeholder="汇款帐号">
                </label>
            </div>
            <div class="form-group">
                <label>
                    开户行
                    <input type="text" name="bank" placeholder="开户行">
                </label>
            </div>
            <input type="hidden" name="sub" value="233">
            <div class="form-group">
                <input type="submit" value="提交">
            </div>
        </form>
    </div>
</main>
</body>
</html>
