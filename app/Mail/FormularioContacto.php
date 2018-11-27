<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormularioContacto extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $telefono;
    public $email;
    public $mensaje;
    public $to_name;
    public $to_email;
    public $propertyid;
    public $domainName;
    public $footerMail;
    public function __construct($nombre, $telefono, $email, $mensaje, $to_name, $to_email, $propertyid, $domainName , $footerMail)
    {
       $this->nombre = $nombre;
       $this->telefono = $telefono;
       $this->email = $email;
       $this->mensaje = $mensaje;
       $this->to_name = $to_name;
       $this->to_email = $to_email;
       $this->propertyid = $propertyid;
       $this->domainName = $domainName;
       $this->footerMail = $footerMail;
    }

    public function build()
    {
        return $this->view('emails.formulario-contacto-agente')
            ->from('infoweb@nscontrol.es', "Formulario TO")
            ->subject($this->nombre . " está interesad@ en una propiedad con referencia: " . $this->propertyid);
    }
}

class acuseRecibo extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $telefono;
    public $email;
    public $mensaje;
    public $to_name;
    public $to_email;
    public $agent_name;
    public $propertyid;
    public $domainName;
    public $propertyPrice;
    public $address;
    public $addressNumber;
    public $city;
    public $cp;
    public $habs;
    public $bath;
    public $description;
    public $footerMail;
    public $equipment;
    public $agent_phone;
    public function __construct($nombre, $telefono, $email, $mensaje, $to_name, $to_email, $agent_name, $propertyid, $domainName, $propertyPrice, $address, $addressNumber, $city, $cp, $habs, $bath, $description, $footerMail, $equipment, $agent_phone)
    {
       $this->nombre = $nombre;
       $this->telefono = $telefono;
       $this->email = $email;
       $this->mensaje = $mensaje;
       $this->to_name = $to_name;
       $this->to_email = $to_email;
       $this->agent_name = $agent_name;
       $this->propertyid = $propertyid;
       $this->domainName = $domainName;
       $this->propertyPrice = $propertyPrice;
       $this->address = $address;
       $this->addressNumber = $addressNumber;
       $this->city = $city;
       $this->cp = $cp;
       $this->habs = $habs;
       $this->bath = $bath;
       $this->description = $description;
       $this->footerMail = $footerMail;
       $this->equipment = $equipment;
       $this->agent_phone = $agent_phone;
    }

    public function build()
    {
        return $this->view('emails.formulario-contacto-usuario')
            ->from('infoweb@nscontrol.es', "Formulario Web NSC")
            ->subject($this->nombre . ", has contactado al agente inmobiliario ". $this->agent_name);
    }
}
