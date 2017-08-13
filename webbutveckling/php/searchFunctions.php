<?php
	/* Funktioner (inklusive parametrar) som behövs för att hantera söksidan */
    function printSearchForm() {}
    function listArtists($inDBConnection, $inSearchString) {}
    function listSongs($inDBConnection, $inSearchString) {}
	function likeSong($inDBConnection, $inSongId) {}
	function printCommentForm($songId, $inSongTitle, $inCount, $inComments, $inSearchString) {}
    function listComments($inDBConnection, $inSongId){}
	function insertComment($inDBConnection, $inSongId, $inCommentString) {}
