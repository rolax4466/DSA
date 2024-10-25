class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
    //associative array to store indices
    $indices=[];
    //loop through the array
     for($i=0;$i<count($nums);$i++){
        //current num in the array
        $num=$nums[$i];
        //complement finding
        $complement=$target-$num;
        //check if the complement is in  the array
        if(isset($indices[$complement])){
            return ([$indices[$complement],$i]);
        }
        //if complement was in the array store it
        $indices[$num]=$i;
     }
     //if no complement was found
     return [];
    }
}
