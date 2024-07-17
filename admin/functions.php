<?php
function get_user_count()
{
    @$connection = mysqli_connect("localhost", "root", "");
    @$db = mysqli_select_db($connection, "lms");
    @$user_count = "";
    @$query = "select count(*) as user_count from users";
    @$query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        @$user_count = $row['user_count'];
    }
    return(@$user_count);
}
function get_book_count()
{
    @$connection = mysqli_connect("localhost", "root", "");
    @$db = mysqli_select_db($connection, "lms");
    @$book_count = "";
    @$query = "select count(*) as book_count from books";
    @$query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        @$book_count = $row['book_count'];
    }
    return(@$book_count);
}
function get_category_count()
{
    @$connection = mysqli_connect("localhost", "root", "");
    @$db = mysqli_select_db($connection, "lms");
    @$category_count = "";
    @$query = "select count(*) as category_count from category";
    @$query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        @$category_count = $row['category_count'];
    }
    return(@$category_count);
}
function get_authors_count()
{
    @$connection = mysqli_connect("localhost", "root", "");
    @$db = mysqli_select_db($connection, "lms");
    @$authors_count = "";
    @$query = "select count(*) as authors_count from authors";
    @$query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        @$authors_count = $row['authors_count'];
    }
    return(@$authors_count);
}
function get_issued_book_count()
{
    @$connection = mysqli_connect("localhost", "root", "");
    @$db = mysqli_select_db($connection, "lms");
    @$issued_book_count = "";
    @$query = "select count(*) as issued_book_count from issued_books";
    @$query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        @$issued_book_count = $row['issued_book_count'];
    }
    return(@$issued_book_count);
}
