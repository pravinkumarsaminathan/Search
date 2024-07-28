<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    
    <style>
        body{
            background-color: #242424;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .header {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.2); /* Semi-transparent background */
            backdrop-filter: blur(10px);
        }

        
        .header img {
            margin-right: 10px;
        }
        .header h3 {
            margin: 0;
        }
        .blank{
            width: 100px;
            height: 250px;
        }
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .center img {
            margin-right: 5px
        }

        .searchBox {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            /* top: 50%; */
            left: 50%;
            transform:  translate(-50%,50%);
            background: #2f3640;
            height: 40px;
            border-radius: 40px;
            padding: 10px;

        }

        .searchBox:hover > .searchInput {
            width: 400px; /*length of search bar */
            padding: 0 6px;
        }

        .searchBox:hover > .searchButton {
        background: white;
        color : #2f3640;
        }

        .searchButton {
            color: white;
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #2f3640;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.4s;
        }

        .searchInput {
            border:none;
            background: none;
            outline:none;
            float:left;
            padding: 0;
            color: white;
            font-size: 16px;
            transition: 0.4s;
            line-height: 40px;
            width: 0px;

        }

        @media screen and (max-width: 640px) {
            .searchBox:hover > .searchInput {
                width: 640px;
                padding: 0 6px;
            }
        }

        .shortcuts {
            display: flex;
            justify-content: center;
            margin-top: 120px;
        }
        .shortcut {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 10px;
            color: white;
            font-size: small;
            text-decoration: none;
        }
        .shortcut img {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2); /* Semi-transparent background */
            backdrop-filter: blur(10px);
            border-radius: 15px; 
        }
        </style>
</head>
<body>
    <header>
        <div class="header">
            <img src="assests/side_logo.svg" height="40" width="40" alt="Logo">
            <h3>Tap on the center,to search...</h3>
        </div>
    </header>
    <div class="blank">

    </div>
    <div class="center">
        <img src="assests/main_logo.svg" height="80" width="80" alt="Logo">
        <h1>Learn The Fruit!</h1>
    </div>
    <div class="searchBox">

        <input class="searchInput"type="text" name="" placeholder="Search">
        <button class="searchButton" href="assests/button.svg">
            <i class="material-icons">
                <img src="assests/button.svg" width="50" height="50">
            </i>
        </button>
    </div>
    <div class="shortcuts">
        <a href="#" class="shortcut">
            <img src="assests/cherries.svg" alt="blockbox" width="24" height="24">
            <span>Cherry</span>
        </a>
        <a href="#" class="shortcut">
            <img src="assests/apple.svg" alt="gitlab.ninja">
            <span>Apple</span>
        </a>
        <a href="#" class="shortcut">
            <img src="assests/pineapple.svg" alt="DASHBOARD">
            <span>Pineapple</span>
        </a>
        <a href="#" class="shortcut">
            <img src="assests/bananas.svg" alt="GPT">
            <span>Banana</span>
        </a>
        <a href="#" class="shortcut">
            <img src="assests/orange.svg" alt="DevDocs">
            <span>Orange</span>
        </a>
        <a href="#" class="shortcut">
            <img src="assests/blueberry.svg" alt="skillrack">
            <span>blueberry</span>
        </a>
        <a href="#" class="shortcut">
            <img src="assests/grape.svg" alt="YOUTUBE">
            <span>Grape</span>
        </a>
        <a href="#" class="shortcut">
            <img src="assests/lychee.svg" alt="w3">
            <span>Lychee</span>
        </a>
        <a href="#" class="shortcut">
            <img src="assests/watermelon.svg" alt="Bootstrap">
            <span>Watermelon</span>
        </a>
    </div>


</body>