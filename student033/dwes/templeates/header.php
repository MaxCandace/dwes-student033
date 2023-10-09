<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.0/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<!-- Navbar -->

<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;">

<nav class="uk-navbar-container">
    <div class="uk-container">
        <div uk-navbar>

            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li>
                        <a href="#">Parent</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Item</a></li>
                </ul>

            </div>

        </div>
    </div>
</nav>


