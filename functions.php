<?php

function formatDate($date)
{
    return date('d/m/Y', strtotime($date));
} // end function formatDate

function formatDateShortYear($date)
{
    return date('d/m/y', strtotime($date));
} // end function formatDate

/* Retorna o ano corrente */
function getYear()
{
    return date('Y');
} // end function getYear
