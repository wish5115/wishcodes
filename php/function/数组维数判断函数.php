
//php 数组维数判断函数

function countdim($array) {
   static $dimcount = 1;
   if (is_array(reset($array))) {
       $dimcount++;
       $return = countdim(reset($array));
   } else {
       $return = $dimcount;
   }
   return $return;
}

//测试数组

$arr  = array( array( array("7", "8")));//3维

echo countdim($arr); //输出3