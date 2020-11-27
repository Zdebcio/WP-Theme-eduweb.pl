<?php

function cutText($text, $maxLength)
{
    $maxLength++;

    $return = '';
    if (mb_strlen($text) > $maxLength) {
        $subex = mb_substr($text, 0, $maxLength - 5);
        $exwords = explode(' ', $subex);
        $excut = - (mb_strlen($exwords[count($exwords) - 1]));
        if ($excut < 0) {
            $return = mb_substr($subex, 0, $excut);
        } else {
            $return = $subex;
        }
        $return .= '[...]';
    } else {
        $return = $text;
    }

    return $return;
}

function the_excerpt_max_charlength($charlength)
{
    echo cutText(get_the_excerpt(), $charlength);
}

function fetchRecentComments(int $limit = 3)
{
    global $wpdb;

    $res = $wpdb->get_results("
        SELECT C.*, P.post_title
        FROM {$wpdb->comments} C
            LEFT JOIN {$wpdb->posts} P ON C.comment_post_ID = P.ID
        WHERE comment_approved = 1
        ORDER BY comment_date_gmt DESC
        LIMIT {$limit}
    ");
    return $res;
}
