<?php

namespace GemeenteAmsterdam\MakkelijkeMarkt\AppApiBundle\Model;

/**
 * @author maartendekeizer
 * @copyright Gemeente Amsterdam, Datalab
 */
class DagvergunningModel
{
    /**
     * @var number
     */
    public $id;

    /**
     * @var SimpleMarktModel
     */
    public $markt;

    /**
     * @var string Date as yyyy-mm-dd
     */
    public $dag;

    /**
     * @var number
     */
    public $aantal3MeterKramen;

    /**
     * @var number
     */
    public $aantal4MeterKramen;

    /**
     * @var number
     */
    public $extraMeters;

    /**
     * @var number
     */
    public $totaleLengte;

    /**
     * @var number
     */
    public $aantalElektra;

    /**
     * @var number
     */
    public $afvaleiland;

    /**
     * @var boolean
     */
    public $krachtstroom;

    /**
     * @var boolean
     */
    public $reiniging;

    /**
     * @var string
     */
    public $erkenningsnummer;

    /**
     * @var string
     */
    public $erkenningsnummerInvoerMethode;

    /**
     * @var SimpleKoopmanModel
     */
    public $koopman;

    /**
     * @var SimpleKoopmanModel
     */
    public $vervanger;

    /**
     * @var string
     */
    public $aanwezig;

    /**
     * @var string
     */
    public $notitie;

    /**
     * @var number
     */
    public $aantal3meterKramenVast;

    /**
     * @var number
     */
    public $aantal4meterKramenVast;

    /**
     * @var number
     */
    public $aantalExtraMetersVast;

    /**
     * @var number
     */
    public $totaleLengteVast;

    /**
     * @var number
     */
    public $aantalElektraVast;

    /**
     * @var number
     */
    public $afvaleilandVast;

    /**
     * @var boolean
     */
    public $krachtstroomVast;

    /**
     * @var boolean
     */
    public $eenmaligElektra;

    /**
     * @var string
     */
    public $status;

    /**
     * @var SollicitatieModel
     */
    public $sollicitatie;

    /**
     * @var string Date as yyyy-mm-dd hh:ii:ss
     */
    public $registratieDatumtijd;

    /**
     * @var array Geo location (lat, long)
     */
    public $registratieGeolocatie;

    /**
     * @var AccountModel
     */
    public $registratieAccount;

    /**
     * @var string Date as yyyy-mm-dd hh:ii:ss
     */
    public $aanmaakDatumtijd;

    /**
     * @var string Date as yyyy-mm-dd hh:ii:ss
     */
    public $verwijderdDatumtijd;

    /**
     * @var string Date as yyyy-mm-dd hh:ii:ss
     */
    public $doorgehaaldDatumtijd;

    /**
     * @var AccountModel
     */
    public $doorgehaaldAccount;

    /**
     * @var boolean
     */
    public $doorgehaald;

    /**
     * @var FactuurModel
     */
    public $factuur;
}