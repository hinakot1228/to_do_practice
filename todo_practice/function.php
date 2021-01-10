<?php

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
// ↑htmlの中にphpを読み込む際に、特殊な文字などが表示されないことがあるため、それを防ぐためのコード