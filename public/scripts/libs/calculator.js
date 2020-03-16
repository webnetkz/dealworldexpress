var calcData = {
    city: 2,
    price: 4.5
}

// Выбор страны от куда доставлять
function selectCountryFrom(elem) {
    // Сброс выбора страны доставки
    document.getElementById('toCount').value = '';
    // Сброс выбора города и цены и массы
    document.getElementById('cityKZ').style.display = 'none';
    document.getElementById('cityUZ').style.display = 'none';
    document.getElementById('cityRU').style.display = 'none';
    resCalc.innerHTML = '';
    mass.value = '';
}

// Выбор страны доставки
function showCity(elem) {
    // Если выбран КЗ
    if(elem.value == 'kz') {
        resCalc.innerHTML = '';
        mass.value = '';

        document.getElementById('cityKZ').style.display = 'block';
        
        // Выбор города доставки
        cityKZ.addEventListener('change', () => {
            resCalc.innerHTML = '';
            mass.value = '';

            calcData.city = cityKZ.value;
            
            // Выбор массы посылки
            mass.addEventListener('input', () => {

                let resultCalc = mass.value * calcData.price;
                // Если город доставки не Алматы
                if(calcData.city != 2) {
                    resultCalc = (mass.value * calcData.price) + 3.5;
                    
                    // Если вес выше 5кг
                    if(mass.value > 5) {
                        resultCalc = (mass.value * calcData.price) + 3.5 + (mass.value - 5);  
                    }
                }

                resCalc.innerHTML = 'Стоимость: ' + resultCalc + '$';
            });
        });
    } else {
        document.getElementById('cityKZ').style.display = 'none';
    }

    // Если выбран УЗБ
    if(elem.value == 'uz') {
        resCalc.innerHTML = '';
        mass.value = '';

        document.getElementById('cityUZ').style.display = 'block';
        
        // Выбор города доставки
        cityUZ.addEventListener('change', () => {
            resCalc.innerHTML = '';
            mass.value = '';

            calcData.city = cityUZ.value;
            
            // Выбор массы посылки
            mass.addEventListener('input', () => {

                let resultCalc = mass.value * calcData.price;
                // Добавочная стоимость посылки 1.5$
                if(calcData.city != 2) {
                    resultCalc = (mass.value * calcData.price) + 1.5;
                    
                    // Если вес выше 2кг
                    if(mass.value > 2) {
                        resultCalc = (mass.value * calcData.price) + 1.5 + ((mass.value - 2) / 2);  
                    }
                }

                resCalc.innerHTML = 'Стоимость: ' + resultCalc + '$';
            });
        });
    } else {
        document.getElementById('cityUZ').style.display = 'none';
    }

    // Если выбран Киргизия
    if(elem.value == 'kg') {
        resCalc.innerHTML = '';
        mass.value = '';

        document.getElementById('cityKG').style.display = 'block';
            
        // Выбор города доставки
        cityKG.addEventListener('change', () => {
            resCalc.innerHTML = '';
            mass.value = '';

            calcData.city = cityUZ.value;
                
            // Выбор массы посылки
            mass.addEventListener('input', () => {
    
                let resultCalc = mass.value * calcData.price;
                // Добавочная стоимость посылки 1.5$
                if(calcData.city != 2) {
                    resultCalc = (mass.value * calcData.price) + 1.5;
                        
                    // Если вес выше 2кг
                    if(mass.value > 2) {
                        resultCalc = (mass.value * calcData.price) + 1.5 + ((mass.value - 2) / 2);  
                    }
                }
    
                resCalc.innerHTML = 'Стоимость: ' + resultCalc + '$';
            });
        });
    } else {
        document.getElementById('cityKG').style.display = 'none';
    }

    // Если выбран Россия
    if(elem.value == 'ru') {
        resCalc.innerHTML = '';
        mass.value = '';

        document.getElementById('cityRU').style.display = 'block';
        
        // Выбор города доставки
        cityRU.addEventListener('change', () => {
            resCalc.innerHTML = '';
            mass.value = '';
            
            calcData.city = cityRU.value;
            
            // Выбор массы посылки
            mass.addEventListener('input', () => {

                let resultCalc = mass.value * calcData.price;
                // Расчеты по первой зоне Россия
                // До 323 Моск.обл., после Ленин.обл.
                if((calcData.city != 171) && (calcData.city != 243) && (calcData.city != 20) && (calcData.city != 47) && (calcData.city != 59) && (calcData.city != 59) && (calcData.city != 78) && (calcData.city != 79) && (calcData.city != 80) && (calcData.city != 82) && (calcData.city != 84) && (calcData.city != 93) && (calcData.city != 100) && (calcData.city != 124) && (calcData.city != 128) && (calcData.city != 157) && (calcData.city != 134) && (calcData.city != 155) && (calcData.city != 158) && (calcData.city != 174) && (calcData.city != 179) && (calcData.city != 203) && (calcData.city != 208) && (calcData.city != 214) && (calcData.city != 217) && (calcData.city != 223) && (calcData.city != 228) && (calcData.city != 230) && (calcData.city != 232) && (calcData.city != 252) && (calcData.city != 254) && (calcData.city != 261) && (calcData.city != 267) && (calcData.city != 301) && (calcData.city != 305) && (calcData.city != 314) && (calcData.city != 323) && (calcData.city != 61) && (calcData.city != 62) && (calcData.city != 65) && (calcData.city != 119) && (calcData.city != 255) && (calcData.city != 262) && (calcData.city != 275)) {
                    resultCalc = (mass.value * 11);
                } else {
                    resultCalc = (mass.value * 10);
                }

                resCalc.innerHTML = 'Стоимость: ' + resultCalc + '$';
            });
        });
    } else {
        document.getElementById('cityRU').style.display = 'none';
    }
}