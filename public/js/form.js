var CartPlusMinus = $('.form-quality-adultos');
CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
CartPlusMinus.append('<div class="inc qtybutton">+</div>');
$(".qtybutton").on("click", function () {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.text() === "+") {
        var newVal = parseFloat(oldValue) + 1;

    } else {
        // Don't allow decrementing below zero
        if (oldValue > 1) {
            var newVal = parseFloat(oldValue) - 1;
        }
        else {
            newVal = 1;
        }
    }
    $button.parent().find("input").val(newVal);
});

var CartPlusMinus = $('.form-quality-ninos');
CartPlusMinus.prepend('<div class="dec qtybutton2">-</div>');
CartPlusMinus.append('<div class="inc qtybutton2">+</div>');
$(".qtybutton2").on("click", function () {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.text() === "+") {
        if (parseFloat(oldValue) < 8) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            var newVal = parseFloat(oldValue);
        }

    } else {
        // Don't allow decrementing below zero
        if (oldValue > 1) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
    }
    $button.parent().find("input").val(newVal);

    console.log(parseFloat(newVal));
    const ninos = parseFloat(newVal);
    const content_ninos = document.querySelector('.content-qty-ninos');

    if (ninos >= 1) {
        content_ninos.innerHTML = "";
        for (var i = 0; i < ninos; i++) {
            content_ninos.innerHTML += `
            <div class="col-7">
                <p>Edad de niño ${i + 1}</p>
            </div>
            <div class="col-5">
                <div class="input-field-sm">
                    <select id="ninos_${i + 1}">
                        <option class="text-center" value="1">1</option>
                        <option class="text-center" value="2">2</option>
                        <option class="text-center" value="3">3</option>
                        <option class="text-center" value="4">4</option>
                        <option class="text-center" value="5">5</option>
                        <option class="text-center" value="6">6</option>
                        <option class="text-center" value="7">7</option>
                        <option class="text-center" value="8">8</option>
                        <option class="text-center" value="9">9</option>
                        <option class="text-center" value="10">10</option>
                        <option class="text-center" value="11">11</option>
                        <option class="text-center" value="12">12</option>
                        <option class="text-center" value="13">13</option>
                        <option class="text-center" value="14">14</option>
                        <option class="text-center" value="15">15</option>
                        <option class="text-center" value="16">16</option>
                        <option class="text-center" value="17">17</option>
                    </select>
                    <svg width="20" height="12" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 0H0L12.5 21L25 0Z" fill="black" />
                    </svg>

                </div>
            </div>
`;
        }
    } else {
        content_ninos.innerHTML = "";
    }
    // console.log(parseFloat(oldValue) + 1);
});


// Cambios de estado

const validarNinos = () => {
    const selectElement = document.querySelector('#qtyninos');
    console.log(selectElement.value);
}

// Validar tipo de viaje
const tipoViaje = () => {
    const select = document.querySelector('#ida_y_vuelta').value;
    const fechaInicio = document.querySelector('.input-fecha-inicio');
    const fechaFin = document.querySelector('.input-fecha-fin');

    if (select == 1) {
        fechaFin.classList.remove('disabled-input');

    } else if (select == 2) {
        fechaFin.classList.add('disabled-input');
        document.querySelector('#fecha_regreso').value = "";
    }
}

// Validar formualrio
const validar_email = (email) => {
    const regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
};

const registrarForm = (e) => {
    e.preventDefault();

    const name = document.querySelector('#name').value;

    if (name == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El campo "<b>Nombre</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
}