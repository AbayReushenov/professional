function easter(x = 0){
  let date = new Date();
  let years = date.getFullYear() + x;
  let month, day;
  let a = years % 19,
      b = years % 4,
      c = years % 7,
      d = (19 * a + 15) % 30,
      e = (2 * b + 4 * c + 6 * d + 6 ) % 7,
      f = d + e;
  if (f <= 26) {
    month = 3;
    day = f + 4;
  } else {
    month = 4;
    day = f - 26;
  }
  let easterDate = new Date(years, month, day);
  if (easterDate.getTime() < date.getTime()) {
    return easter(1);
  }
  return easterDate;
}

let easter_date = new Date(easter()),
    dayEvent = easter_date.getDate(),
    monthEvent = easter_date.getMonth().toLocaleString('ru-RU');
console.log(monthEvent);
let dayEaster = document.querySelector('.event_day');
let monthEaster = document.querySelector('.event_month');
// display result
dayEaster.innerHTML = dayEvent;
monthEaster.innerHTML = (monthEvent == 4) ? "мая" : "апрреля";
