<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $list1 = [$l1->val];
        $next1 = $l1->next;
        while ($next1) {
            array_unshift($list1, $next1->val);
            $next1 = $next1->next;
        }
        $digit1 = implode($list1);

        $list2 = [$l2->val];
        $next2 = $l2->next;
        while ($next2) {
            array_unshift($list2, $next2->val);
            $next2 = $next2->next;
        }
        $digit2 = implode($list2);

        $sum = str_split($this->findSum($digit1, $digit2));

        $lastNode = new ListNode($sum[0]);

        for ($i = 1; $i < count($sum); $i++) {
            $lastNode = new ListNode($sum[$i], $lastNode);
        }

        return $lastNode;
    }

    function findSum($str1, $str2)
    {
        // Before proceeding further, make sure length
        // of str2 is larger.
        if (strlen($str1) > strlen($str2)) {
            $t=$str1;
            $str1=$str2;
            $str2=$t;
        }

        // Take an empty string for storing result
        $str = "";

        // Calculate length of both string
        $n1 = strlen($str1);
        $n2 = strlen($str2);

        // Reverse both of strings
        $str1 = strrev($str1);
        $str2 = strrev($str2);

        $carry = 0;
        for ($i=0; $i<$n1; $i++)
        {
            // Do school mathematics, compute sum of
            // current digits and carry
            $sum = ((ord($str1[$i])-48)+((ord($str2[$i])-48)+$carry));
            $str.=chr($sum%10 + 48);

            // Calculate carry for next step
            $carry = (int)($sum/10);
        }

        // Add remaining digits of larger number
        for ($i=$n1; $i<$n2; $i++)
        {
            $sum = ((ord($str2[$i])-48)+$carry);
            $str.=chr($sum%10 + 48);
            $carry = (int)($sum/10);
        }

        // Add remaining carry
        if ($carry)
            $str.=chr($carry+48);

        // reverse resultant string
        $str=strrev($str);

        return $str;
    }
}
