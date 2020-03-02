var calcData = {
    city: 2,
    price: 4.5
}

// Выбор страны от куда доставлять
function selectCountryFrom(elem) {
    // Сброс выбора страны доставки
    document.getElementById('toCount').value = '';
    // Сброс выбора города
    document.getElementById('cityKZ').style.display = 'none';
    document.getElementById('cityUZ').style.display = 'none';
}

// Выбор страны доставки
function showCity(elem) {
    // Если выбран КЗ
    if(elem.value == 'kz') {
        document.getElementById('cityKZ').style.display = 'block';
        
        // Выбор города доставки
        cityKZ.addEventListener('change', () => {
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
        document.getElementById('cityUZ').style.display = 'block';
        
        // Выбор города доставки
        cityUZ.addEventListener('change', () => {
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
            document.getElementById('cityKG').style.display = 'block';
            
            // Выбор города доставки
            cityKG.addEventListener('change', () => {
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
}