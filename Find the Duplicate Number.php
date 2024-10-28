class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        //initialize
        $slow=$nums[0];
        $fast=$nums[0];

      //find intersection point

      while(true){
        $slow=$nums[$slow];
        $fast=$nums[$nums[$fast]];
        if($slow==$fast){
            break;
        }


      }

      //find duplicate
      $slow=$nums[0];
      while($slow!=$fast){
      $slow=$nums[$slow];
      $fast=$nums[$fast];
      }  
       return $slow;
    }
   
}
