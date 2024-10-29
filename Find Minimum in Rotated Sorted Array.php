class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums) {
        //initializee the left and right
        $left=0;
        $right=count($nums)-1;

        //converge
        while($left < $right){

            $mid=intdiv($left+$right,2);
                    if($nums[$mid]>$nums[$right]){
            $left=$mid+1;
        }
        else{
            $right=$mid;
        }
        }

     return $nums[$left];
    }
}
