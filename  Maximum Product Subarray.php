class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums) {
        $max_product=$current_min=$current_max=$nums[0];

            for ($i = 1; $i < count($nums); $i++) {
        // If the current number is negative, swap current_max and current_min
        if ($nums[$i] < 0) {
            list($current_max, $current_min) = [$current_min, $current_max];
        }

        // Calculate the new current_max and current_min
        $current_max = max($nums[$i], $current_max * $nums[$i]);
        $current_min = min($nums[$i], $current_min * $nums[$i]);

        // Update the maximum product found
        $max_product = max($max_product, $current_max);
    }

    return $max_product;
    }
}
