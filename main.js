let dde = document.getElementById("body");
let bg = document.getElementById("background");
dde.addEventListener("mousemove", e => {
    console.log("go");
    bg.style.setProperty('--mouseX', -e.clientX + "px");
    bg.style.setProperty('--mouseY', -e.clientY + "px");
    bg.style.setProperty('--scale', "1.1");

    lastx = e.clientX;
    lasty = e.clientY;

    // wait 2 seconds
});

var lastx = 0;
var lasty = 0;

var lastxtemp = 0;
var lastytemp = 0;

function checkGo() {
    if (lastxtemp === lastx && lastytemp === lasty) {
        //bg.style.setProperty('--mouseX', "0p");
        //bg.style.setProperty('--mouseY', "0p");
        //bg.style.setProperty('--scale', "1");
    }
    lastxtemp = lastx;
    lastytemp = lasty;


    setTimeout(() => {
        checkGo();
    }, 500);
}

setTimeout(() => {
    checkGo();
}, 10);



function showUserCard() {
    var uc = document.getElementById("usercard");
    if (uc.classList.contains("usercard_container-hidden")) {
        uc.classList.remove("usercard_container-hidden");
    } else {
        uc.classList.add("usercard_container-hidden");
    }
}

document.onkeydown = function (evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
        showUserCard();
    }
};

var portfolioData = null;


function dateAgo(date) {
    var seconds = Math.floor((new Date() - date) / 1000);

    var interval = seconds / 31536000;

    if (interval > 1) {
        return Math.floor(interval) + " years";
    }
    interval = seconds / 2592000;
    if (interval > 1) {
        return Math.floor(interval) + " months";
    }
    interval = seconds / 86400;
    if (interval > 1) {
        return Math.floor(interval) + " days";
    }
    interval = seconds / 3600;
    if (interval > 1) {
        return Math.floor(interval) + " hours";
    }
    interval = seconds / 60;
    if (interval > 1) {
        return Math.floor(interval) + " minutes";
    }
    return Math.floor(seconds) + " seconds";
}

function loadPortfolio() {
    // https://hubza.co.uk/new/api/portfolio.php
    var board = document.getElementById("portfolio-board");
    board.innerHTML = "Loading...";

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            portfolioData = JSON.parse(this.responseText);
            console.log(this.responseText);
            var response = JSON.parse(this.responseText);
            board.innerHTML = "";
            for (var i = 0; i < response.length; i++) {
                var item = response[i];
                /* vanilla js! */

                var dateago = dateAgo(new Date(item.date));
                board.innerHTML += `<a class="portfolio__board-item" onclick="openPage('#portfolio-item[${item["id"]}]')">
                    <img src="${item["images"][0]["link"]}" alt="${item['images'][0]['alt']}">
                    <div class="portfolio__board-item-title">
                        <p>${dateago} ago</p>
                        <h3>${item['title']}</h3>
                        <h4>${item['subtitle']}</h4>
                    </div>
                </a>`;
            }
        } else {
            board.innerHTML = "Error loading portfolio : " + this.status;
        }
    }
    xhttp.open("GET", "https://www.hubza.co.uk/new/api/portfolio.php", true);
    xhttp.send();
}



function loadPortfolioItem(id) {
    console.log("loading portfolio post " + id);

    if (portfolioData === null) {
        // api time
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                portfolioData = JSON.parse(this.responseText);
                loadPortfolioItem(id);
            }
        }
        xhttp.open("GET", "https://www.hubza.co.uk/new/api/portfolio.php", true);
        xhttp.send();
    }
    else {
        response = portfolioData;
        var item = null;
        for (x in response) {
            if (response[x]["id"] === id) {
                item = response[x];
                break;
            }
        }
        if (item === null) {
            openPage("portfolio");
            return;
        }

        var list = document.getElementById("portfolio_post_list");
        list.innerHTML = "";
        for (x in item["images"]) {
            var img = item["images"][x];
            list.innerHTML += `<li class="splide__slide"><img src="${img["link"]}" alt="${img['alt']}"></li>`;
            var splide = new Splide( '.splide', {
                perPage: 1,
                focus: 'center',
                gap: 0,
                height: '100%',
                pagination: false,
            });
            splide.mount();
        }

        document.getElementById("pp-title").innerHTML = item["title"];
        document.getElementById("pp-subtitle").innerHTML = item["subtitle"];
        document.getElementById("pp-date").innerHTML = dateAgo(new Date(item["date"])) + " ago";
        document.getElementById("pp-info").innerHTML = item["content"];
    }

}

function updateLatestPortfolioPost() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            var item = response[0];
            var dateago = dateAgo(new Date(item.date));
            document.getElementById("readMore").innerHTML = "Read More";

            document.getElementById("latestPortfolioPostStyle").innerHTML = `.home__latest-portfolio {
                background-image: url('${item['images'][0]['link']}');
                background-size: cover;
                background-position: center;
            }`;

            document.getElementById("readMoreButton").href = "#portfolio-item[" + item["id"] + "]";
        } else {
            document.getElementById("readMore").innerHTML = "Error loading portfolio : " + this.status;
        }
    }
    xhttp.open("GET", "https://www.hubza.co.uk/new/api/portfolio.php?latest", true);
    xhttp.send();
}
updateLatestPortfolioPost();

// #home
// #portfolio
// #portfolio-item[id]

var home = document.getElementById("home");
var portfolio = document.getElementById("portfolio");
var portfolioItem = document.getElementById("portfolio-post");



// set hash if its null
if (window.location.hash === "") {
    window.location.hash = "#home";
}


function processHash() {
    home.classList.remove("page__active");
    portfolio.classList.remove("page__active");
    portfolioItem.classList.remove("page__active");

    if (window.location.hash === "#home") {
        home.classList.add("page__active");
    }

    if (window.location.hash === "#portfolio") {
        portfolio.classList.add("page__active");
        loadPortfolio();
    }

    if (window.location.hash.includes("#portfolio-item")) {
        portfolioItem.classList.add("page__active");
        var id = window.location.hash.replace("#portfolio-item", "");
        // now we have [5]. we need to remove the [ and ]
        id = id.substring(1, id.length - 1);
        loadPortfolioItem(id);
    }
}

function openPage(page) {

    console.log("opening page " + page);
    if (page === "home") {
        history.pushState(null, null, "#home");
    } else if (page === "portfolio") {
        history.pushState(null, null, "#portfolio");
    } else if (page.includes("portfolio-item")) {
        history.pushState(null, null, page);
    }

    processHash();
}

processHash();

// we need to handle history change
window.onpopstate = function () {
    processHash();
}

function goBack() {
    history.back();
}