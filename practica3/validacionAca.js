document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('myForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        var altura = document.getElementById('altura').value;
        var edad = document.getElementById('edad').value;

        if (!validarAltura(altura)) {
            alert('Por favor ingresa una altura válida.');
            return;
        }

        if (!validarEdad(edad)) {
            alert('Por favor ingresa una edad válida.');
            return;
        }


        form.submit(); 
    });

    function validarAltura(altura) {
        let alturaNum = parseFloat(altura);
    
        if (isNaN(alturaNum)) {
            return false;
        }
    
        if (alturaNum >= 1000) {
            return false;
        }
    
        if (altura.toString().indexOf('.') !== -1) {
            return alturaNum;
        } else {
            let metros = alturaNum / 100;
            return parseFloat(metros.toFixed(2));
        }
    }
    
    function validarEdad(edad) {
        return /^[1-9][0-9]?$/.test(edad);
    }
});
