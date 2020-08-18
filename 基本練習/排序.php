<?php
$total = mt_rand(100, 200);
$numbers = [];
for ($set = 0; $set < $total; $set++) {
    $rand_number = mt_rand(1, 990);
    if (!in_array($rand_number, $numbers)) {
        $numbers[] = $rand_number;
    }
}
$target = $numbers[mt_rand(0, count($numbers) - 1)];
//泡沫排序
function pertice_sort($get_arr)
{
    $count = 0;
    for ($set = 0; $set < count($get_arr); $set++) {
        for ($now = 0; $now < count($get_arr); $now++) {
            //大到小
            $count++;
            if ($get_arr[$now] < $get_arr[$gh + 1]) {
                $origin = $get_arr[$now];
                $get_arr[$now] = $get_arr[$now + 1];
                $get_arr[$now + 1] = $origin;
            }
        }
    }
    print_r($get_arr);
    printf($count);
}

//選擇排序
function selection_sort($source)
{
    $count = 0;
    for ($began = 0; $began < count($source); $began++) {
        for ($inside = $began; $inside < count($source); $inside++) {
            if ($inside + 1 == count($source)) {
                break;
            }
            $count++;
            //下個數只要小於OR大於他，就交換位置
            if ($source[$began] > $source[$inside + 1]) {
                $bigevalue = $source[$began];
                $source[$began] = $source[$inside + 1];
                $source[$inside + 1] = $bigevalue;
            }
        }
    }
    print_r($source);
    printf($count);
}
//插入排序
function Insertion_sort($source)
{
    $count = 0;
    $began = 0;
    for ($began = 1; $began < count($source); $began++) {
        if ($source[$began - 1] > $source[$began]) {
            //記錄較小的數
            $origin =  $source[$began];
            //假如前值大於記錄下來的小數，前值往後移動1位
            for ($inside = $began - 1; $inside >= 0 &&  $source[$inside] > $origin; $inside--) {
                $source[$inside + 1] = $source[$inside];
                $count++;
            }
            $source[$inside + 1] = $origin;
        }
    }
    // for ($began = 0; $began < count($source) - 1; $began++) {

    //     for ($inside = 0; $inside <= $began; $inside++) {
    //     }
    // }
    print_r($source);
    printf('執行次數 %d', $count);
}
//快速排序
function quick_sort(&$meta_arr, $fornt, $end)
{
    echo '初始陣列</br><pre>';
    print_r($meta_arr);
    echo "</pre>";
    if ($fornt < $end - 1) {
        $pivot = Partition2($meta_arr, $fornt, $end);
        echo "quick_sort返回的pivot index值: $pivot </br>";
        echo '</br>改變陣列</br><pre>';
        print_r($meta_arr);
        echo "</pre>";
        quick_sort($meta_arr, $fornt, $pivot);
        quick_sort($meta_arr, $pivot + 1, $end);
    }
}
//快速排序方法
function Partition2(&$meta_arr, $fornt, $end)
{
    $target_key = -1;
    $position = mt_rand($fornt, $end - 1);
    $pivot = $meta_arr[$position];
    echo "初始位置: $fornt " . "終極位置: $end </br>";
    echo "pivot值: $pivot </br>";

    $start = $fornt - 1;
    for ($i = $fornt; $i < $end; $i++) {
        if ($meta_arr[$i] < $pivot) {

            $start++;
            $origin = $meta_arr[$start];
            $meta_arr[$start] = $meta_arr[$i];
            $meta_arr[$i] = $origin;
        }
        if ($meta_arr[$i] == $pivot) {
            $target_key = $i;
        }
    }
    $start++;
    //只有第一次選pivot執行
    if ($target_key >= 0) {
        echo "我是start: $start";
        $before = $meta_arr[$start];
        $meta_arr[$start] = $meta_arr[$target_key];
        $meta_arr[$target_key] = $before;
    }

    return $start;
}

// Insertion_sort($numbers);


//二元搜尋
function runsearch($numbers, $target)
{
    $lift = 0;
    $right = count($numbers) - 1;
    $count = 0;
    while ($lift < $right) {
        $count++;
        $middle = ceil(($lift + $right) / 2);
        printf('中間值為%d:value是%d<br/>', $middle, $numbers[$middle]);
        if ($target > $numbers[$middle]) {
            $lift = $middle + 1;
        } elseif ($target == $numbers[$middle]) {
            $right = $middle;
            break;
        } else {
            $right = $middle - 1;
        }
    }
    printf('最後指定選擇 %d<br/>', $numbers[$right]);
    printf('執行次數 %d', $count);

    return $right;
}

function get_search($numbers, $target)
{
    // $list = [10, 15, 18, 23, 45, 61, 87, 90];
    printf('選定的值為:%d </br>', $target);
    runsearch($numbers, $target);
}


quick_sort($numbers, 0, count($numbers));
//Insertion_sort($numbers);
get_search($numbers, $target);
// echo '</br>最後結果</br><pre>';
// print_r($numbers);
// echo "</pre>";
