class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        //initialise minprice and max prof
        $minPrice=PHP_INT_MAX;
        $maxProfit=0;
        //loop for find minprice
        for($i=0;$i<count($prices);$i++){
            //get current price
            $price=$prices[$i];
       //get minimum price
        if($price<$minPrice){
            $minPrice=$price;
        }
        //get potential prof
        $potentialProfit=$price - $minPrice;
        
        //get max prof
        if($potentialProfit>$maxProfit){
            $maxProfit=$potentialProfit;
        }
        }
        //return max prof
        return $maxProfit;

    }
}
