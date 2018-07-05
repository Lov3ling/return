<?php


//判断是否连续签到
function is_continuous($lastSignInTime)
{
    //获取今天日期
    $today=time();

    //算出昨天0:0:0到23:59:59的时间戳
    $yesterday_start=mktime(0,0,0,date('m',$today),date('d',$today)-1,date('Y',$today));
    $yesterday_end=mktime(23,59,59,date('m',$today),date('d',$today)-1,date('Y',$today));

	//判断上次签到时间是否在昨天开始和结束之间 
    if ($lastSignInTime > $yesterday_start && $lastSignInTime < $yesterday_end)
    {
        return true;
    }
    return false;
}



//判断今天是否签到
function is_signin($last_signin_time)
{
    $today=date('Y-m-d');				//获取今天的日期
    $last_signin_day=date('Y-m-d',strtotime($last_signin_time));
    if ($today===$last_signin_day)
    {
        return true;
    }
    return false;
}