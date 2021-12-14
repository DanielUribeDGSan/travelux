<?php

namespace App\Http\Livewire;

use App\Mail\MailCotizacion;
use App\Models\Airport;
use App\Models\Travel;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ValidarForm extends Component
{
    protected $listeners = ['registrarFormulario'];
    public $years_boys;
    public $createForm = [
        'name' => null,
        'phone' => null,
        'email' => null,
        'qtyadultos' => 0,
        'qtyninos' => 0,
        'ida_y_vuelta' => '1',
        'clase' => '0',
        'origen' => null,
        'destino' => null,
        'fecha_inicio' => null,
        'fecha_regreso' => null,
    ];


    public $createForm2 = [
        'ida_y_vuelta' => '1',
        'clase' => '0',
        'origen' => null,
        'destino' => null,
        'fecha_inicio' => null,
        'fecha_regreso' => null,
    ];


    public $createForm3 = [
        'ida_y_vuelta' => '1',
        'clase' => '0',
        'origen' => null,
        'destino' => null,
        'fecha_inicio' => null,
        'fecha_regreso' => null,
    ];


    protected $validationAttributes = [
        'createForm.name' => 'Nombre',
        'createForm.phone' => 'Teléfono',
        'createForm.email' => 'Email',
        'createForm.qtyadultos' => 'Adultos',
        'createForm.qtyninos' => 'Niños',
        'createForm.ida_y_vuelta' => 'Tipo de viaje',
        'createForm.clase' => 'Clase',
        'createForm.origen' => 'Origen',
        'createForm.destino' => 'Destino',
        'createForm.fecha_inicio' => 'Fecha de salida',
        'createForm.fecha_regreso' => 'Fecha de regreso',

    ];

    public function registrarFormulario($fechaInicio, $fechaRegreso, $edadBoy1, $edadBoy2, $edadBoy3, $edadBoy4, $edadBoy5, $edadBoy6, $edadBoy7, $edadBoy8, $adultos, $ninos, $fechaInicio2, $fechaRegreso2, $fechaInicio3, $fechaRegreso3)
    {
        $boys = $ninos;
        $adults = $adultos;
        $this->createForm['qtyadultos'] = $adults;
        $this->createForm['qtyninos'] = $boys;

        $fechaI = $fechaInicio;
        $fechaR = $fechaRegreso;
        $this->createForm['fecha_inicio'] = $fechaI;
        $this->createForm['fecha_regreso'] = $fechaR;

        $this->createForm2['fecha_inicio'] = $fechaInicio2;
        $this->createForm2['fecha_regreso'] = $fechaRegreso2;

        $this->createForm3['fecha_inicio'] = $fechaInicio3;
        $this->createForm3['fecha_regreso'] = $fechaRegreso3;

        $edadB1 = $edadBoy1;
        $edadB2 = $edadBoy2;
        $edadB3 = $edadBoy3;
        $edadB4 = $edadBoy4;
        $edadB5 = $edadBoy5;
        $edadB6 = $edadBoy6;
        $edadB7 = $edadBoy7;
        $edadB8 = $edadBoy8;

        $this->createForm['ninos_1'] = $edadB1;
        $this->createForm['ninos_2'] = $edadB2;
        $this->createForm['ninos_3'] = $edadB3;
        $this->createForm['ninos_4'] = $edadB4;
        $this->createForm['ninos_5'] = $edadB5;
        $this->createForm['ninos_6'] = $edadB6;
        $this->createForm['ninos_7'] = $edadB7;
        $this->createForm['ninos_8'] = $edadB8;

        if ($this->createForm['qtyninos'] == '1') {
            $this->years_boys = '{"edad_1":{"edad":' . $this->createForm["ninos_1"] . '}}';
        } else if ($this->createForm['qtyninos'] == '2') {
            $this->years_boys = '{"edad_1":{"edad":' . $this->createForm["ninos_1"] . '},"edad_2":{"edad":' . $this->createForm["ninos_2"] . '}}';
        } else if ($this->createForm['qtyninos'] == '3') {
            $this->years_boys = '{"edad_1":{"edad":' . $this->createForm["ninos_1"] . '},"edad_2":{"edad":' . $this->createForm["ninos_2"] . '},"edad_3":{"edad":' . $this->createForm["ninos_3"] . '}}';
        } else if ($this->createForm['qtyninos'] == '4') {
            $this->years_boys = '{"edad_1":{"edad":' . $this->createForm["ninos_1"] . '},"edad_2":{"edad":' . $this->createForm["ninos_2"] . '},"edad_3":{"edad":' . $this->createForm["ninos_3"] . '},"edad_4":{"edad":' . $this->createForm["ninos_4"] . '}}';
        } else if ($this->createForm['qtyninos'] == '5') {
            $this->years_boys = '{"edad_1":{"edad":' . $this->createForm["ninos_1"] . '},"edad_2":{"edad":' . $this->createForm["ninos_2"] . '},"edad_3":{"edad":' . $this->createForm["ninos_3"] . '},"edad_4":{"edad":' . $this->createForm["ninos_4"] . '},"edad_5":{"edad":' . $this->createForm["ninos_5"] . '}}';
        } else if ($this->createForm['qtyninos'] == '6') {
            $this->years_boys = '{"edad_1":{"edad":' . $this->createForm["ninos_1"] . '},"edad_2":{"edad":' . $this->createForm["ninos_2"] . '},"edad_3":{"edad":' . $this->createForm["ninos_3"] . '},"edad_4":{"edad":' . $this->createForm["ninos_4"] . '},"edad_5":{"edad":' . $this->createForm["ninos_5"] . '},"edad_6":{"edad":' . $this->createForm["ninos_6"] . '}}';
        } else if ($this->createForm['qtyninos'] == '7') {
            $this->years_boys = '{"edad_1":{"edad":' . $this->createForm["ninos_1"] . '},"edad_2":{"edad":' . $this->createForm["ninos_2"] . '},"edad_3":{"edad":' . $this->createForm["ninos_3"] . '},"edad_4":{"edad":' . $this->createForm["ninos_4"] . '},"edad_5":{"edad":' . $this->createForm["ninos_5"] . '},"edad_6":{"edad":' . $this->createForm["ninos_6"] . '},"edad_7":{"edad":' . $this->createForm["ninos_7"] . '}}';
        } else if ($this->createForm['qtyninos'] == '8') {
            $this->years_boys = '{"edad_1":{"edad":' . $this->createForm["ninos_1"] . '},"edad_2":{"edad":' . $this->createForm["ninos_2"] . '},"edad_3":{"edad":' . $this->createForm["ninos_3"] . '},"edad_4":{"edad":' . $this->createForm["ninos_4"] . '},"edad_5":{"edad":' . $this->createForm["ninos_5"] . '},"edad_6":{"edad":' . $this->createForm["ninos_6"] . '},"edad_7":{"edad":' . $this->createForm["ninos_7"] . '},"edad_8":{"edad":' . $this->createForm["ninos_8"] . '}}';
        }

        if ($this->createForm['ida_y_vuelta'] == '1') {
            $travel = Travel::create([
                'name' => $this->createForm['name'],
                'phone' => $this->createForm['phone'],
                'email' => $this->createForm['email'],
                'adults' => $this->createForm['qtyadultos'],
                'children' => $this->createForm['qtyninos'],
                'children_ages' => $this->years_boys,
                'type' => $this->createForm['ida_y_vuelta'],
                'origin' => $this->createForm['origen'],
                'destination' => $this->createForm['destino'],
                'class' => $this->createForm['clase'],
                'start_date' => $this->createForm['fecha_inicio'],
                'return_date' => $this->createForm['fecha_regreso'],
            ]);
            $years = json_decode($this->years_boys);
            Mail::to($this->createForm['email'])->send(new MailCotizacion($travel, $years));
        } else if ($this->createForm['ida_y_vuelta'] == '2') {
            $travel = Travel::create([
                'name' => $this->createForm['name'],
                'phone' => $this->createForm['phone'],
                'email' => $this->createForm['email'],
                'adults' => $this->createForm['qtyadultos'],
                'children' => $this->createForm['qtyninos'],
                'children_ages' => $this->years_boys,
                'type' => $this->createForm['ida_y_vuelta'],
                'origin' => $this->createForm['origen'],
                'destination' => $this->createForm['destino'],
                'class' => $this->createForm['clase'],
                'start_date' => $this->createForm['fecha_inicio'],
            ]);
            $years = json_decode($this->years_boys);
            Mail::to($this->createForm['email'])->send(new MailCotizacion($travel, $years));
        }

        // Form2

        if ($this->createForm2['ida_y_vuelta'] == '1') {
            $travel2 = Travel::create([
                'name' => $this->createForm['name'],
                'phone' => $this->createForm['phone'],
                'email' => $this->createForm['email'],
                'adults' => $this->createForm['qtyadultos'],
                'children' => $this->createForm['qtyninos'],
                'children_ages' => $this->years_boys,
                'type' => $this->createForm2['ida_y_vuelta'],
                'origin' => $this->createForm2['origen'],
                'destination' => $this->createForm2['destino'],
                'class' => $this->createForm2['clase'],
                'start_date' => $this->createForm2['fecha_inicio'],
                'return_date' => $this->createForm2['fecha_regreso'],
            ]);

            $years2 = json_decode($this->years_boys);
            Mail::to($this->createForm['email'])->send(new MailCotizacion($travel2, $years2));
        } else if ($this->createForm2['ida_y_vuelta'] == '2') {
            $travel2 = Travel::create([
                'name' => $this->createForm['name'],
                'phone' => $this->createForm['phone'],
                'email' => $this->createForm['email'],
                'adults' => $this->createForm['qtyadultos'],
                'children' => $this->createForm['qtyninos'],
                'children_ages' => $this->years_boys,
                'type' => $this->createForm['ida_y_vuelta'],
                'origin' => $this->createForm2['origen'],
                'destination' => $this->createForm2['destino'],
                'class' => $this->createForm2['clase'],
                'start_date' => $this->createForm2['fecha_inicio'],
            ]);
            $years2 = json_decode($this->years_boys);
            Mail::to($this->createForm['email'])->send(new MailCotizacion($travel2, $years2));
        }

        // Form3

        if ($this->createForm3['ida_y_vuelta'] == '1') {
            $travel3 = Travel::create([
                'name' => $this->createForm['name'],
                'phone' => $this->createForm['phone'],
                'email' => $this->createForm['email'],
                'adults' => $this->createForm['qtyadultos'],
                'children' => $this->createForm['qtyninos'],
                'children_ages' => $this->years_boys,
                'type' => $this->createForm3['ida_y_vuelta'],
                'origin' => $this->createForm3['origen'],
                'destination' => $this->createForm3['destino'],
                'class' => $this->createForm3['clase'],
                'start_date' => $this->createForm3['fecha_inicio'],
                'return_date' => $this->createForm3['fecha_regreso'],
            ]);

            $years3 = json_decode($this->years_boys);
            Mail::to($this->createForm['email'])->send(new MailCotizacion($travel3, $years3));
        } else if ($this->createForm3['ida_y_vuelta'] == '2') {
            $travel3 = Travel::create([
                'name' => $this->createForm['name'],
                'phone' => $this->createForm['phone'],
                'email' => $this->createForm['email'],
                'adults' => $this->createForm['qtyadultos'],
                'children' => $this->createForm['qtyninos'],
                'children_ages' => $this->years_boys,
                'type' => $this->createForm['ida_y_vuelta'],
                'origin' => $this->createForm3['origen'],
                'destination' => $this->createForm3['destino'],
                'class' => $this->createForm3['clase'],
                'start_date' => $this->createForm3['fecha_inicio'],
            ]);
            $years3 = json_decode($this->years_boys);
            Mail::to($this->createForm['email'])->send(new MailCotizacion($travel3, $years3));
        }

        return redirect()->route('web.registroCompletado');
    }

    public function render()
    {
        $airports = Airport::get();

        return view('livewire.validar-form', compact('airports'));
    }
}
