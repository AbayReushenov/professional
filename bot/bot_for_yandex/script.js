// ==UserScript==
// @name         25-09-20 Yandex-bot
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       You
// @match        https://yandex.ru/*
// @match        https://xn----7sbab5aqcbiddtdj1e1g.xn--p1ai/*
// @match        https://crushdrummers.ru/*
// @grant        none
// ==/UserScript==

let googleInput = document.querySelector('.input__control.input__input.mini-suggest__input');
let btnK = document.querySelectorAll("span.button__text")[0];
let sites = {
    "xn----7sbab5aqcbiddtdj1e1g.xn--p1ai":["Гобой","Саксофон","Валторна","Фагот","Скрипка","Флейта","Как звучит флейта"],
    "crushdrummers.ru":["Барабанное шоу","Шоу барабанщиков в Москве","Заказать барабанщиков в Москве"]
};
let site = Object.keys(sites)[getRandom(0,Object.keys(sites).length)];
let keywords = sites[site];
let keyword = keywords[getRandom(0,keywords.length)];
let i = 0;
console.log(i)
function getRandom(min,max){
    return Math.floor(Math.random()*(max-min)+min);
}
function getCookie(name) {
  let matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
console.log(btnK)
if (btnK!=undefined){ // Если мы на главной странице Yandex.ru
    document.cookie = "site="+site;
}else{ // Если уже НЕ НА главной странице Yandex.ru
    site = getCookie("site");
}


if (btnK!=undefined){
    let timerId = setInterval(()=>{
        googleInput.value += keyword[i++];
        if (i==keyword.length){
            clearInterval(timerId);
            btnK.click();
        }
    },500);
}else if (location.hostname == "yandex.ru"){
    let links = document.links;
    let flag = true;
    let numPage = document.querySelector("span.pager__item_current_yes").innerText;
    for (e of links) {
        let link = e;
        if (link.href.includes(site)){

            setTimeout(()=> {
                link.removeAttribute('target');
                link.click()
            }, 2000);
            flag=false;
            break;
        }
    }
    if(numPage=="10") location.href = "https://yandex.ru/";
    if (flag) setTimeout(() => document.querySelector(".pager__item_kind_next").click(), 2000);
}else{
    if (getRandom(0,100)>=80){
        location.href = "https://yandex.ru/";
    }else{
        let links = document.links;
        setInterval(()=>{
            let index = getRandom(0,links.length);
            console.log("Я не умер, я ещё живой! Проверяю ссылку: "+links[index]);
            if(links[index].href.indexOf(location.hostname) != -1){
                links[index].click();
            }
        },5000);
    }
}
