<!-- Complete the solution so that it returns true if the first argument(string) passed in ends
 with the 2nd argument (also a string).

Examples:

solution('abc', 'bc') // returns true
solution('abc', 'd') // returns false 
solution("samurai", "ai") // return true
solution("sumo", "omo") // return false
solution("ninja", "ja") // return true
solution("sensei", "i") // return true
solution("samurai", "ra") // return false
solution("abc", "abcd") // return false
solution("abc", "abc") // return true
solution("abcabc", "bc") // return true
solution('ails', 'fails') // return false
solution('fails', 'ails') // return true
solution('this', 'fails') // return false
solution('yes this will pass', '') // return true
solution('this will not pass', '`^$<>()[]*|') // return false
solution("abc\n", 'abc'), 'Watch out for \n in the end' // return false
-->

<?php 
function findAlphabets($my_str, $find_str){
  /** [WRONG] Using strpos, php 8.0 */
    // $found = strpos($my_str, $find_str);
    // if($found === false){
    //     return 'false';
    // } else {
    //     return 'true';
    // }

  /** Using str_ends_with */
    return str_ends_with($my_str, $find_str);
}

echo findAlphabets("abc\n", 'abc');