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
        else if (oldValue < 1000) {
            var newVal = parseFloat(oldValue);
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
                    <select id="ninos_${i + 1}" wire:model.defer="createForm.ninos_${i + 1}">
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

const tipoViaje2 = () => {
    const select = document.querySelector('#ida_y_vuelta2').value;
    const fechaInicio = document.querySelector('.input-fecha-inicio2');
    const fechaFin = document.querySelector('.input-fecha-fin2');

    if (select == 1) {
        fechaFin.classList.remove('disabled-input');

    } else if (select == 2) {
        fechaFin.classList.add('disabled-input');
        document.querySelector('#fecha_regreso2').value = "";
    }
}

const tipoViaje3 = () => {
    const select = document.querySelector('#ida_y_vuelta3').value;
    const fechaInicio = document.querySelector('.input-fecha-inicio3');
    const fechaFin = document.querySelector('.input-fecha-fin3');

    if (select == 1) {
        fechaFin.classList.remove('disabled-input');

    } else if (select == 2) {
        fechaFin.classList.add('disabled-input');
        document.querySelector('#fecha_regreso3').value = "";
    }
}

// Validar formualrio
const onlyLetrasNum = (input) => {
    var regex = /[$%&|<>#.]/;
    input.value = input.value.replace(regex, "");
}

const onlyEmail = (input) => {
    var regex = /[$%&|<>#]/;
    input.value = input.value.replace(regex, "");
}

const onlyNum = (input) => {
    var regex = /[^+12345678910]/gi;;
    input.value = input.value.replace(regex, "");
}

const validar_email = (email) => {
    const regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
};

const registrarForm = (e) => {
    e.preventDefault();

    const name = document.querySelector('#name').value;
    const phone = document.querySelector('#phone').value;
    const email = document.querySelector('#email').value;
    const qtyadultos = document.querySelector('#qtyadultos').value;
    const qtyninos = document.querySelector('#qtyninos').value;
    const ida_y_vuelta = document.querySelector('#ida_y_vuelta').value;
    const claseM = document.querySelector('#claseM').value;
    const origen = document.querySelector('#origen').value;
    const destino = document.querySelector('#destino').value;
    const clase = document.querySelector('#clase').value;
    const fecha_inicio = document.querySelector('#fecha_inicio').value;
    const fecha_regreso = document.querySelector('#fecha_regreso').value;

    // Form 2
    const ida_y_vuelta2 = document.querySelector('#ida_y_vuelta2').value;
    const claseM2 = document.querySelector('#claseM2').value;
    const origen2 = document.querySelector('#origen2').value;
    const destino2 = document.querySelector('#destino2').value;
    const clase2 = document.querySelector('#clase2').value;
    const fecha_inicio2 = document.querySelector('#fecha_inicio2').value;
    const fecha_regreso2 = document.querySelector('#fecha_regreso2').value;

    // Form 3
    const ida_y_vuelta3 = document.querySelector('#ida_y_vuelta3').value;
    const claseM3 = document.querySelector('#claseM3').value;
    const origen3 = document.querySelector('#origen3').value;
    const destino3 = document.querySelector('#destino3').value;
    const clase3 = document.querySelector('#clase3').value;
    const fecha_inicio3 = document.querySelector('#fecha_inicio3').value;
    const fecha_regreso3 = document.querySelector('#fecha_regreso3').value;

    const qtyForms = document.querySelector('#qtyForms').value;


    var boy_edad_1 = "";
    var boy_edad_2 = "";
    var boy_edad_3 = "";
    var boy_edad_4 = "";
    var boy_edad_5 = "";
    var boy_edad_6 = "";
    var boy_edad_7 = "";
    var boy_edad_8 = "";


    if (qtyninos == '1') {
        boy_edad_1 = document.querySelector('#ninos_1').value;
    }
    else if (qtyninos == '2') {
        boy_edad_1 = document.querySelector('#ninos_1').value;
        boy_edad_2 = document.querySelector('#ninos_2').value;
    }
    else if (qtyninos == '3') {
        boy_edad_1 = document.querySelector('#ninos_1').value;
        boy_edad_2 = document.querySelector('#ninos_2').value;
        boy_edad_3 = document.querySelector('#ninos_3').value;
    }
    else if (qtyninos == '4') {
        boy_edad_1 = document.querySelector('#ninos_1').value;
        boy_edad_2 = document.querySelector('#ninos_2').value;
        boy_edad_3 = document.querySelector('#ninos_3').value;
        boy_edad_4 = document.querySelector('#ninos_4').value;
    }
    else if (qtyninos == '5') {
        boy_edad_1 = document.querySelector('#ninos_1').value;
        boy_edad_2 = document.querySelector('#ninos_2').value;
        boy_edad_3 = document.querySelector('#ninos_3').value;
        boy_edad_4 = document.querySelector('#ninos_4').value;
        boy_edad_5 = document.querySelector('#ninos_5').value;
    }
    else if (qtyninos == '6') {
        boy_edad_1 = document.querySelector('#ninos_1').value;
        boy_edad_2 = document.querySelector('#ninos_2').value;
        boy_edad_3 = document.querySelector('#ninos_3').value;
        boy_edad_4 = document.querySelector('#ninos_4').value;
        boy_edad_5 = document.querySelector('#ninos_5').value;
        boy_edad_6 = document.querySelector('#ninos_6').value;
    }
    else if (qtyninos == '7') {
        boy_edad_1 = document.querySelector('#ninos_1').value;
        boy_edad_2 = document.querySelector('#ninos_2').value;
        boy_edad_3 = document.querySelector('#ninos_3').value;
        boy_edad_4 = document.querySelector('#ninos_4').value;
        boy_edad_5 = document.querySelector('#ninos_5').value;
        boy_edad_6 = document.querySelector('#ninos_6').value;
        boy_edad_7 = document.querySelector('#ninos_7').value;
    }
    else if (qtyninos == '8') {
        boy_edad_1 = document.querySelector('#ninos_1').value;
        boy_edad_2 = document.querySelector('#ninos_2').value;
        boy_edad_3 = document.querySelector('#ninos_3').value;
        boy_edad_4 = document.querySelector('#ninos_4').value;
        boy_edad_5 = document.querySelector('#ninos_5').value;
        boy_edad_6 = document.querySelector('#ninos_6').value;
        boy_edad_7 = document.querySelector('#ninos_7').value;
        boy_edad_8 = document.querySelector('#ninos_8').value;
    }


    if (name == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El campo "<b>Nombre</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (phone == '') {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El campo "<b>Teléfono</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (phone.length < 10 || phone.length > 20) {
        Swal.fire({
            icon: 'warning',
            title: 'Ups...',
            html: 'El número no es valido',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (email == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Email</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (!validar_email(email)) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            text: 'Tu email no es valido, escribelo correctamene',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (qtyadultos == '' || qtyadultos < 1 || qtyadultos == '0') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Personas</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (ida_y_vuelta == '' || ida_y_vuelta < 1 || ida_y_vuelta == '0') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Tipo de viaje</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (screen.width < 1000 && claseM == '0' && origen != '' && destino != '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Clase</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (screen.width >= 1000 && origen == '' && destino == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'Debes ingresar un destino, para poder cotizar',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (origen == '' && destino != '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Origen</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (origen != '' && destino == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Destino</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    else if (screen.width >= 1000 && clase == '0' && origen != '' && destino != '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Clase</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (fecha_inicio == '' && origen != '' && destino != '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Fecha de ida</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (fecha_regreso == '' && ida_y_vuelta == '1' && origen != '' && destino != '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Fecha de regreso</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (screen.width < 1000 && origen == '' && destino == '') {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'Debes ingresar un destino o un hotel, para poder cotizar',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }


    // Validar segundo form

    else if (ida_y_vuelta2 == '' && qtyForms == 2 || ida_y_vuelta2 < 1 && qtyForms == 2 || ida_y_vuelta2 == '0' && qtyForms == 2) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Tipo de viaje</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (screen.width < 1000 && claseM2 == '0' && origen2 != '' && destino2 != '' && qtyForms == 2) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Clase</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (screen.width >= 1000 && origen2 == '' && destino2 == '' && qtyForms == 2) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'Debes ingresar un destino, para poder cotizar',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (origen2 == '' && destino2 != '' && qtyForms == 2) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Origen</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (origen2 != '' && destino2 == '' && qtyForms == 2) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Destino</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    else if (screen.width >= 1000 && clase2 == '0' && origen2 != '' && destino2 != '' && qtyForms == 2) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Clase</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (fecha_inicio2 == '' && origen2 != '' && destino2 != '' && qtyForms == 2) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Fecha de ida</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (fecha_regreso2 == '' && ida_y_vuelta2 == '1' && origen2 != '' && destino2 != '' && qtyForms == 2) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Fecha de regreso</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (screen.width < 1000 && origen2 == '' && destino2 == '' && qtyForms == 2) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'Debes ingresar un destino o un hotel, para poder cotizar',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    // Validar tercer form

    else if (ida_y_vuelta3 == '' && qtyForms == 3 || ida_y_vuelta3 < 1 && qtyForms == 3 || ida_y_vuelta3 == '0' && qtyForms == 3) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Tipo de viaje</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (screen.width < 1000 && claseM3 == '0' && origen3 != '' && destino3 != '' && qtyForms == 3) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Clase</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (screen.width >= 1000 && origen3 == '' && destino3 == '' && qtyForms == 3) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'Debes ingresar un destino, para poder cotizar',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (origen3 == '' && destino3 != '' && qtyForms == 3) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Origen</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (origen3 != '' && destino3 == '' && qtyForms == 3) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Destino</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (screen.width >= 1000 && clase3 == '0' && origen3 != '' && destino3 != '' && qtyForms == 3) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Clase</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (fecha_inicio3 == '' && origen3 != '' && destino3 != '' && qtyForms == 3) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Fecha de ida</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (fecha_regreso3 == '' && ida_y_vuelta3 == '1' && origen3 != '' && destino3 != '' && qtyForms == 3) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'El campo "<b>Fecha de regreso</b>" no puede quedar vacío',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    else if (screen.width < 1000 && origen3 == '' && destino3 == '' && qtyForms == 3) {
        Swal.fire({
            icon: 'error',
            title: 'Ups...',
            html: 'Debes ingresar un destino o un hotel, para poder cotizar',
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    Livewire.emitTo('validar-form', 'registrarFormulario', `${fecha_inicio}`, `${fecha_regreso}`, `${boy_edad_1}`, `${boy_edad_2}`, `${boy_edad_3}`, `${boy_edad_4}`, `${boy_edad_5}`, `${boy_edad_6}`, `${boy_edad_7}`, `${boy_edad_8}`, `${qtyadultos}`, `${qtyninos}`, `${fecha_inicio2}`, `${fecha_regreso2}`, `${fecha_inicio3}`, `${fecha_regreso3}`,);

}