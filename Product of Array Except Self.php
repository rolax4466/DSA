class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $n=count($nums);
        $answer=array_fill(0,$n,1);

        //calculate left products
        $left_product=1;
        for($i=0;$i<$n;$i++){
            $answer[$i]=$left_product;
            $left_product *=$nums[$i];

        }
        //calculate right products
        $right_product=1;
        for($i=$n-1;$i>=0;$i--){
            $answer[$i] *=$right_product;
            $right_product *=$nums[$i];
        }
        return $answer;
    }
}
