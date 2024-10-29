class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $max_current=$nums[0];
        $max_global=$nums[0];

        //iterate through the array
        for($i=1;$i<count($nums);$i++){
            $max_current= max($nums[$i],$max_current+$nums[$i]);
            //find max global
            
           //$max_global=max($max_global,$max_current);
           if($max_current>$max_global){
            $max_global=$max_current;
           }
        }
        return $max_global;
        
    }
}
