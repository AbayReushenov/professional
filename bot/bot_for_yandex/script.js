// ==UserScript==
// @name         25-09-20 Yandex-bot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       You
// @match        https://yandex.ru/*
// @grant        none
// ==/UserScript==
let googleInput = document.querySelector('.input__control.input__input.mini-suggest__input');
let btnK = document.querySelectorAll("span.button__text")[0];

let keywords = ["Гобой", "Саксофон", "Валторна", "Фагот", "Скрипка", "Флейта", "Как звучит флейта"];
let keyword = keywords[getRandom(0, keywords.length)];
let i = 0;

function getRandom(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}

if (btnK != undefined) {
    let timerId = setInterval(() => {
        googleInput.value += keyword[i++];
        if (i == keyword.length) {
            clearInterval(timerId);
            btnK.click();
        }
    }, 500);
} else {
    let links = document.links;
    let flag = true;
    let currentPage = document.querySelector("span.pager__item_current_yes").innerText;
    for (e of links) {
        if (e.href.includes("xn----7sbab5aqcbiddtdj1e1g.xn--p1ai")) {
            e.removeAttribute('target');
            setTimeout(() => e.click(), 2000);
            flag = false;
            break;
        }
    }
    if (currentPage == '10') location.href = "https://yandex.ru/";
    if (flag) setTimeout(() => document.querySelector(".pager__item_kind_next").click(), 2000);

}
