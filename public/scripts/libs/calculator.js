var calcData = {
    coutry: "kz",
    city: 2,
    price: 4.5
}



// Выбор страны доставки
function showCity(elem) {
    if(elem.value == 'kz') {
        document.getElementById('cityKZ').style.display = 'block';
        calcData.coutry = elem.value;
        
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
    }
}